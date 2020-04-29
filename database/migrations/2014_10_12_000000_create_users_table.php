<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\User;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('lastname');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('role')->default('Cliente');
            $table->boolean('status')->default(true);
            $table->rememberToken();
            $table->timestamps();
        });

        User::insert([
            'name' => 'Administrador',
            'lastname' => 'Admin',
            'email' => 'admin@admin.com',
            'password' => Hash::make('admin'),
            'role' => 'Administrador',
            'status' => true
            ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
