<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateApplicationUserRolesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('roles', function(Blueprint $table) {
            $table->increments('id');
            $table->string('role', 100);
        });

        Schema::create('application_user_roles', function (Blueprint $table) {
            $table->integer('user_id')->unsigned();
            $table->integer('role_id')->unsigned();
            $table->integer('application_id')->unsigned();

            $table->unique(array('user_id', 'role_id'));

            $table->foreign('user_id')
                ->references('id')->on('users')
                ->onChange('cascade');
            $table->foreign('role_id')
                ->references('id')->on('roles')
                ->onDelete('cascade');
            $table->foreign('application_id')
                ->references('id')->on('applications')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Log::info('DROP APPLICATION USER ROLES');
        // Drop foreign keys
        Schema::table('application_user_roles', function(Blueprint $table) {
            $table->dropForeign(['user_id']);
            $table->dropForeign(['role_id']);
        });

        // Drop tables
        Schema::dropIfExists('application_user_roles');
        Schema::dropIfExists('roles');
    }
}
