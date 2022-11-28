<?php

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $admin      =   User::find(1);
        $adminRole  =   Role::where('name', 'admin')->first();
        $user      =   User::find(2);
        $userRole  =   Role::where('name', 'user')->first();
        $admin->attachRole($adminRole);
        $user->attachRole($userRole);
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
};
