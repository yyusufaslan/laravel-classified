<?php

use Illuminate\Database\Seeder;
use App\AdCategory;
use App\Ad;
class AdTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $ad_category = \App\AdCategory::where('body','Elektronik')->first();

        $ad = new Ad();
        $ad->title = 'Yeni İlan';
        $ad->price = '33';
        $ad->currency='TL';
        $ad->description='a';
        $ad->display_my_number='1';
        $ad->location_1='123';
        $ad->location_2='321';
        $ad->address_description='description';
        $ad->view_counter='3';
        $ad->slug='yeni-ilan';
        $ad->meta_description='meta';
        $ad->meta_keyword='dasd';
        $ad->seo_title='seo title';
        $ad->base_photo_id='1';
        $ad->photo_1='1';
        $ad->photo_2='1das';
        $ad->photo_3='1dsa';
        $ad->photo_4='1das';
        $ad->photo_5='1ds';
        $ad->photo_6='1dsa';
        $ad->photo_7='1avxc';
        $ad->photo_8='1bxb';
        $ad->photo_9='1bcx';
        $ad->photo_10='1bd';
        $ad->address_id='0';
        $ad->shop_id='0';
        $ad->user_id='1';
        $ad->status='1';
        $ad->ad_category_id='1';
        $ad->save();

    }
}
