<?php

namespace App\Policies;

use Illuminate\Database\Eloquent\Model;
use Tobuli\Entities\User;

class ChecklistTemplatePolicy extends Policy
{
    protected $permisionKey = 'checklist_template';

    public function additionalCheck(User $user, ?Model $entity, string $mode)
    {
        return config('addon.checklists');
    }
}
