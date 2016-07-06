<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     ********************************
     *  User Table (users):
     *  id
     *  firstname
     *  lastname
     *  gender
     *  email
     *  username
     *  password
     *  img
     *  birthday
     *  pay
     *  city
     *  adress
     *  phone
     *  facebook
     *  twitter
     *  github
     *  youtube
     *  web
     *  last_login
     *  last_logout
     *  permission
     *  role  
     *  bloque  
     *  remember_token  
     *  register_at(timestamps:created,updated)  
     *
     ************************************************
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('firstname');
            $table->string('lastname'); 
            $table->boolean('gender'); /*0:f,1:m*/
            $table->string('email')->unique();
            $table->string('username')->unique();
            $table->string('password');
            $table->string('img');
            $table->date('birthday');
            $table->string('country');
            $table->string('city');
            $table->string('adress');
            $table->string('phone');
            $table->string('facebook');
            $table->string('twitter');
            $table->string('github');
            $table->string('youtube');
            $table->string('web');
            $table->dateTime('last_login');
            $table->dateTime('last_logout'); 
            $table->integer('role');/*0:user,1:admin*/
            $table->integer('bloque');/*0:bloque,1:active,2:pas encore vérifié */
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('users');
    }
}
