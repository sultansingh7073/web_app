<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserSignup extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */

    public function up()
    {
        Schema::create('client_signup', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name',255)->default(null);
            $table->string('mobile',255)->default(null);
            $table->string('email',100)->default(null)->unique();
            $table->string('usertype')->default('client');
            $table->string('password',255)->default(null);
            $table->string('confirm_password',255)->default(null);
            $table->string('address',255)->default(null);
            $table->string('city',255)->default(null);
            $table->string('status',255)->default('No');
            $table->rememberToken();
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('client_signup');
    }
}
