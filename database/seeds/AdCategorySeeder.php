<?php

use Illuminate\Database\Seeder;

class AdCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category = new \App\AdCategory();
        $category->body='Elektronik';
        $category->parent_id='0';
        $category->ad_category_language_id='1';
        $category->status='1';
        $category->slug='dsasda';
        $category->icon='dasda';
        $category->save();

    }
}
