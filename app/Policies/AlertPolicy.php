<?php

namespace App\Policies;

use Illuminate\Database\Eloquent\Model;
use Tobuli\Entities\User;

class AlertPolicy extends Policy
{
    protected $permisionKey = 'alerts';
    
    protected function ownership(User $user, Model $entity)
    {
        return $this->ownershipOne($user, $entity);
    }
}
