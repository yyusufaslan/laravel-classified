<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ads', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->integer('price');
            $table->text('currency');
            $table->string('description')->nullable();
            $table->boolean('display_my_number')->default(true);
            $table->string('location_1')->nullable();
            $table->string('location_2')->nullable();
            $table->integer('address_id')->unsigned();
            $table->string('address_description')->nullable();
            $table->boolean('status')->default(true);
            $table->integer('view_counter')->nullable();
            $table->string('slug')->nullable()->unique();
            $table->string('meta_description')->nullable();
            $table->string('meta_keyword')->nullable();
            $table->string('seo_title')->nullable();
            $table->integer('shop_id')->unsigned();
            $table->integer('user_id')->unsigned();
            $table->integer('ad_category_id')->unsigned();
            $table->integer('base_photo_id')->default('1');
            $table->string('photo_1')->nullable();
            $table->string('photo_2')->nullable();
            $table->string('photo_3')->nullable();
            $table->string('photo_4')->nullable();
            $table->string('photo_5')->nullable();
            $table->string('photo_6')->nullable();
            $table->string('photo_7')->nullable();
            $table->string('photo_8')->nullable();
            $table->string('photo_9')->nullable();
            $table->string('photo_10')->nullable();
            $table->softDeletes();
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
        Schema::dropIfExists('ads');
    }
}
