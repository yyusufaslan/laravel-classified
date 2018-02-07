<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdCategoryFeatureConfirmationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ad_category_feature_confirmations', function (Blueprint $table) {
            $table->increments('id');
            $table->string('view_type')->nullable();
            $table->string('body')->nullable();
            $table->integer('ad_id')->unsigned();
            $table->integer('ad_category_feature_id')->unsigned();
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
        Schema::dropIfExists('ad_category_feature_confirmations');
    }
}
