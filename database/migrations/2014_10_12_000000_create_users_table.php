<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->increments('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');

            $table->string('avatar')->default('users/default.png');
            $table->string('user_type')->nullable();
            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('about_me')->nullable();
            $table->boolean('status')->default(true);
            $table->integer('user_category_id')->unsigned()->nullable();
            $table->string('commercial title')->nullable();

            $table->string('address_description')->nullable();
            $table->string('address_id')->unsigned()->nullable();
            $table->integer('tc_no')->nullable();
            $table->string('phone_1')->nullable();
            $table->string('phone_2')->nullable();
            $table->string('company_type')->nullable();



            $table->string('tax_number')->nullable();
            $table->string('tax_administration')->nullable();
            $table->string('facebook_path')->nullable();
            $table->string('twitter_path')->nullable();
            $table->string('linkedin_path')->nullable();
            $table->string('instagram_path')->nullable();
            $table->string('youtube_path')->nullable();
            $table->string('website')->nullable();
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
        Schema::dropIfExists('users');
    }
}
