<?php namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use CustomFacades\ModalHelpers\AlertModalHelper;
use Illuminate\Support\Arr;
use Illuminate\Support\Collection;
use Tobuli\Entities\Alert;
use Tobuli\Exceptions\ValidationException;
use Tobuli\InputFields\AbstractField;
use Tobuli\InputFields\SelectField;
use Tobuli\Services\EntityLoader\UserDevicesGroupLoader;
use Tobuli\Services\EntityLoader\UsersLoader;

class AlertsController extends Controller
{
    /**
     * @var UsersLoader
     */
    protected $usersLoader;

    protected function afterAuth($user)
    {
        $this->usersLoader = new UsersLoader($user);
        $this->usersLoader->setRequestKey('users');
    }

    public function index()
    {
        $data = AlertModalHelper::get();

        return !$this->api ? view('front::Alerts.index')->with($data) : ['status' => 1, 'items' => $data];
    }

    public function index_modal()
    {
        return $this->getList('index_modal');
    }

    public function table()
    {
        return $this->getList('table');
    }

    public function getList(string $view)
    {
        $this->checkException('alerts', 'view');

        $sort = $this->data['sorting'] ?? [];
        $sortCol = $sort['sort_by'] ?? 'name';
        $sortDir = $sort['sort'] ?? 'asc';

        $items = Alert::userOwned($this->user)
            ->search($this->data['search_phrase'] ?? null)
            ->select(['id', 'active', 'name', 'type'])
            ->withCount('devices')
            ->toPaginator(15, $sortCol, $sortDir);

        return view('front::Alerts.' . $view)->with(compact('items'));
    }

    public function create()
    {
        $data = AlertModalHelper::createData();

        return is_array($data) && !$this->api ? view('front::Alerts.create')->with($data) : $data;
    }

    public function store()
    {
        return AlertModalHelper::create();
    }

    public function edit()
    {
        $data = AlertModalHelper::editData();

        return is_array($data) && !$this->api ? view('front::Alerts.edit')->with($data) : $data;
    }

    public function update()
    {
        return AlertModalHelper::edit();
    }

    public function changeActive($active = null)
    {
        $ids = $this->data['id'] ?? [];

        if (!is_array($ids)) {
            $ids = (array)$ids;
        }

        $items = Alert::whereIn('id', $ids)->get()
            ->filter(fn($alert) => $this->user->can('active', $alert));

        if ($active === null) {
            $active = (isset($this->data['active']) && filter_var($this->data['active'], FILTER_VALIDATE_BOOLEAN)) ? 1 : 0;
        }

        Alert::whereIn('id', $items->pluck('id')->all())
            ->update(['active' => $active]);

        return ['status' => 1];
    }

    public function doDestroy($id = null) {
        $data = AlertModalHelper::doDestroy($id);

        return is_array($data) ? view('front::Alerts.destroy')->with($data) : $data;
    }

    public function destroy()
    {
        return AlertModalHelper::destroy();
    }

    public function getCommands()
    {
        return AlertModalHelper::getCommands();
    }

    public function syncDevices()
    {
        return AlertModalHelper::syncDevices();
    }

    public function customEvents()
    {
        return AlertModalHelper::customEvents();
    }

    public function devices($id = null)
    {
        $userDevicesLoader = new UserDevicesGroupLoader($this->user);
        $userDevicesLoader->setRequestKey('devices');

        if ($alert = Alert::find($id))
            $userDevicesLoader->setQueryStored($alert->devices());

        return response()->json($userDevicesLoader->get());
    }

    public function summary()
    {
        $data = AlertModalHelper::summary(request()->get('date_from'), request()->get('date_to'));

        return ['status' => 1, 'items' => $data];
    }

    public function getTypesWithAttributes()
    {
        $types = [];

        foreach (AlertModalHelper::getTypesWithAttributes() as $item) {
            $types[$item['type']] = isset($item['attributes'])
                ? $item['attributes']->transform(function (AbstractField $attr) {
                    $item = [
                        'name' => $attr->getName(),
                        'type' => $attr->getType(),
                        'title' => $attr->getTitle(),
                    ];

                    if ($attr instanceof SelectField) {
                        $item['options'] = $attr->getOptions();
                    }

                    return $item;
                })
                : [];
        }

        return ['status' => 1, 'types' => $types];
    }

    public function users(Request $request, $id = null)
    {
        $this->checkException('users', 'show', $this->user);

        if ($id && $alert = Alert::find($id)) {
            $this->checkException('alerts', 'show', $alert);

            $this->usersLoader->setQueryStored($alert->users());
        }

        $items = $this->usersLoader->get();

        return response()->json($items);
    }
}