<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserClientPermission extends Migration
{
    const KEY_NAME = 'user.client_id';

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        (new \Tobuli\Services\PermissionService())->addToAll(self::KEY_NAME);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
