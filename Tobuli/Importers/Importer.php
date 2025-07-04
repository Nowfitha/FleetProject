<?php

namespace Tobuli\Importers;

use Cache;
use Illuminate\Support\Arr;
use Tobuli\Entities\User;
use Tobuli\Exceptions\ValidationException;
use Tobuli\Importers\Readers\ReaderInterface;
use Validator;

abstract class Importer implements ImporterInterface
{
    public const STOP_ON_FAIL = 'stop_on_fail';
    public const ON_COLLISION = 'on_collision';

    public const COLLISION_OMIT = 1;
    public const COLLISION_STOP = 2;

    /**
     * @var ReaderInterface
     */
    protected $reader;
    protected $stop_on_fail = true;
    protected int $onCollision = self::COLLISION_OMIT;

    private $importIndex = null;

    abstract protected function getDefaults();

    abstract public function getValidationBaseRules(): array;

    public function getValidationExtraRules(): array
    {
        return [];
    }

    public function getValidationRules(): array
    {
        $extraRules = $this->getValidationExtraRules();
        $rules = $this->getValidationBaseRules();

        appendRulesArray($rules, $extraRules);

        return $rules;
    }

    /**
     * @throws ValidationException
     * @throws \Illuminate\Validation\ValidationException
     */
    abstract protected function importItem($data, $additionals = []);

    public function getFieldDescriptions(): array
    {
        return [];
    }

    public function getImportFields(): array
    {
        return $this->getValidationRules();
    }

    public function import($file, $additionals = [])
    {
        $items = $this->reader->read($file);

        if (empty($items)) {
            throw new ValidationException(trans('front.unsupported_format'));
        }

        $this->resolveSettings($additionals);

        foreach ($items as $index => $item) {
            $this->importIndex = $index + 1;

            try {
                $this->importItem($item, $additionals);
            } catch (\Illuminate\Validation\ValidationException $e) {
                $e = new ValidationException($this->specifyErrors(
                    $e->validator->messages()->messages(),
                    $e->validator->getData()
                ));
            } catch (ValidationException $e) {
                $e = new ValidationException($this->specifyErrors(
                    $e->getErrors()->messages(),
                    $item
                ));
            }

            if (isset($e) && $this->stop_on_fail) {
                throw $e;
            }
        }

        $this->importIndex = null;
    }

    private function resolveSettings(array $source): void
    {
        $this->stop_on_fail = Arr::pull($source, self::STOP_ON_FAIL, true);

        if (isset($source[self::ON_COLLISION])) {
            $this->setOnCollision($source[self::ON_COLLISION]);
        }
    }

    protected function mergeDefaults($data)
    {
        $defaults = $this->getDefaults();

        foreach ($defaults as $key => $value) {
            if (isset($data[$key]) && is_null($data[$key])) {
                unset($data[$key]);
            }
        }

        return empty($data) ? $defaults : array_merge($defaults, $data);
    }

    protected function setUser($data, $additionals)
    {
        if (isset($data['user_id'])) {
            $id = $data['user_id'];

            $user = Cache::store('array')->rememberForever("importer.user.$id", function() use ($id) {
                return User::find($id);
            });

            $data['user_id'] = $user ? $user->id : null;
        }

        if (empty($data['user_id']) && isset($additionals['user_id'])) {
            $id = $additionals['user_id'];

            $user = Cache::store('array')->rememberForever("importer.user.$id", function() use ($id) {
                return User::find($id);
            });

            $data['user_id'] = $user ? $user->id : null;
        }

        if (empty($data['user_id']))
            $data['user_id'] = auth()->id();

        return $data;
    }

    protected function validate($data)
    {
        $validator = Validator::make($data, $this->getValidationRules());

        if ( ! $validator->fails()) {
            return true;
        }

        throw new \Illuminate\Validation\ValidationException($validator);
    }

    protected function specifyErrors(array $messages, array $input = []): array
    {
        $errors = [];

        foreach ($messages as $key => $message) {
            if (is_array($message) && isset($message[0])) {
                $value = Arr::get($input, $key);
                $value = substr($value, 0, 50);

                $message[0] = "#{$this->importIndex}: {$message[0]}" . ($value ? " '$value'" : "");
            }

            $errors[$key] = $message;
        }

        return $errors;
    }

    public function getReader(): ReaderInterface
    {
        if (!$this->reader) {
            throw new \RuntimeException('Reader is not set');
        }

        return $this->reader;
    }

    public function setReader(ReaderInterface $reader): self
    {
        $this->reader = $reader;

        return $this;
    }

    protected function setOnCollision($onCollision): self
    {
        $options = self::getCollisionOptions();

        if (!isset($options[$onCollision])) {
            throw new \InvalidArgumentException('Unsupported collision option: ' . $onCollision);
        }

        $this->onCollision = $onCollision;

        return $this;
    }

    public static function getCollisionOptions(): array
    {
        return [
            self::COLLISION_OMIT => trans('front.omit'),
            self::COLLISION_STOP => trans('front.stop'),
        ];
    }
}