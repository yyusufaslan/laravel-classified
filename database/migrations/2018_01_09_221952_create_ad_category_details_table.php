<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdCategoryDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ad_category_details', function (Blueprint $table) {
            $table->increments('id');
            $table->string('body');
            $table->integer('ad_category_id')->unsigned();
            $table->integer('ad_category_language_id')->unsigned();
            $table->string('type')->default('string');
            $table->boolean('status')->default(true);
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
        Schema::dropIfExists('ad_category_details');
    }
}
