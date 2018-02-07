<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/','DashboardController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::group(['prefix' => 'admin', 'middleware' => ['auth', 'admin']], function()
{
    Route::get('/', 'AdminDashboardController@index');

//*******************Users ***************************//

    Route::post('user-create',[
        'uses'=>'Admin\UserController@create',
        'as'=>'user.create'
    ]);
    Route::get('users',[
        'uses'=>'Admin\UserController@index',
        'as'=>'user.index'
    ]);
    Route::get('user-show{id}',[
        'uses'=>'Admin\UserController@show',
        'as'=>'user.show'
    ]);
    Route::get('user-edit{id}',[
        'uses'=>'Admin\UserController@edit',
        'as'=>'user.edit'
    ]);
    Route::patch('user-update',[
        'uses'=>'Admin\UserController@update',
        'as'=>'user.update'
    ]);
    Route::get('user-delete{id}',[
        'uses'=>'Admin\UserController@delete',
        'as'=>'user.delete'
    ]);

//*******************Person ***************************//

    Route::post('person-create',[
        'uses'=>'Admin\PersonController@create',
        'as'=>'person.create'
    ]);
    Route::get('persons',[
        'uses'=>'Admin\PersonController@index',
        'as'=>'person.index'
    ]);
    Route::get('person-show{id}',[
        'uses'=>'Admin\PersonController@show',
        'as'=>'person.show'
    ]);
    Route::get('person-edit{id}',[
        'uses'=>'Admin\PersonController@edit',
        'as'=>'person.edit'
    ]);
    Route::patch('person-update',[
        'uses'=>'Admin\PersonController@update',
        'as'=>'person.update'
    ]);
    Route::get('person-delete{id}',[
        'uses'=>'Admin\PersonController@delete',
        'as'=>'person.delete'
    ]);
//*******************Company ***************************//

    Route::post('company-create',[
        'uses'=>'Admin\CompanyController@create',
        'as'=>'user.create'
    ]);
    Route::get('companies',[
        'uses'=>'Admin\CompanyController@index',
        'as'=>'company.index'
    ]);
    Route::get('company-show{id}',[
        'uses'=>'Admin\CompanyController@show',
        'as'=>'company.show'
    ]);
    Route::get('company-edit{id}',[
        'uses'=>'Admin\CompanyController@edit',
        'as'=>'company.edit'
    ]);
    Route::patch('company-update',[
        'uses'=>'Admin\CompanyController@update',
        'as'=>'company.update'
    ]);
    Route::get('company-delete{id}',[
        'uses'=>'Admin\CompanyController@delete',
        'as'=>'company.delete'
    ]);
    Route::get('company-add-packet{id}',[
        'uses'=>'Admin\CompanyController@addPacket',
        'as'=>'company.addPacket'
    ]);
    Route::get('company-changeStatus{id}',[
        'uses'=>'Admin\CompanyController@changeStatus',
        'as'=>'company.changeStatus'
    ]);

//*******************Packet ***************************//

    Route::post('packet-create',[
        'uses'=>'Admin\PacketController@create',
        'as'=>'packet.create'
    ]);
    Route::get('packets{id}',[
        'uses'=>'Admin\PacketController@index',
        'as'=>'packet.index'
    ]);
    Route::get('packet-edit{id}',[
        'uses'=>'Admin\PacketController@edit',
        'as'=>'packet.edit'
    ]);
    Route::post('packet-update{id}',[
        'uses'=>'Admin\PacketController@update',
        'as'=>'packet.update'
    ]);
    Route::get('packet-delete{ad_id}',[
        'uses'=>'Admin\PacketController@delete',
        'as' => 'packet.delete'
    ]);
    Route::get('packet-change-status{id}',[
        'uses'=>'Admin\PacketController@changeStatus',
        'as'=>'packet.changeStatus'
    ]);
    Route::get('packet-show{id}',[
        'uses'=>'Admin\PacketController@show',
        'as'=>'packet.show'
    ]);
    Route::get('packet-change-status{id}',[
        'uses'=>'Admin\PacketController@changeStatus',
        'as'=>'packet.changeStatus'
    ]);

//*******************Shop ***************************//

    Route::post('shop-create',[
        'uses'=>'Admin\ShopController@create',
        'as'=>'shop.create'
    ]);
    Route::get('shops{id}',[
        'uses'=>'Admin\ShopController@index',
        'as'=>'shop.index'
    ]);
    Route::get('shop-edit{id}',[
        'uses'=>'Admin\ShopController@edit',
        'as'=>'shop.edit'
    ]);
    Route::post('shop-update{id}',[
        'uses'=>'Admin\ShopController@update',
        'as'=>'shop.update'
    ]);
    Route::get('shop-delete{ad_id}',[
        'uses'=>'Admin\ShopController@delete',
        'as' => 'shop.delete'
    ]);
    Route::get('shop-change-status{id}',[
        'uses'=>'Admin\ShopController@changeStatus',
        'as'=>'shop.changeStatus'
    ]);
    Route::get('shop-show{id}',[
        'uses'=>'Admin\ShopController@show',
        'as'=>'shop.show'
    ]);
//*******************Ad ***************************//

    Route::post('ad-create',[
        'uses'=>'Admin\AdController@create',
        'as'=>'ad.create'
    ]);
    Route::get('ads',[
        'uses'=>'Admin\AdController@index',
        'as'=>'ad.index'
    ]);
    Route::get('ad-edit{id}',[
        'uses'=>'Admin\AdController@edit',
        'as'=>'ad.edit'
    ]);
    Route::post('ad-update',[
        'uses'=>'Admin\AdController@update',
        'as'=>'ad.update'
    ]);
    Route::get('ad-delete{ad_id}',[
        'uses'=>'Admin\AdController@delete',
        'as' => 'ad.delete'
    ]);
    Route::get('ad-change-status{id}',[
        'uses'=>'Admin\AdController@changeStatus',
        'as'=>'ad.changeStatus'
    ]);
    Route::get('ad-show{id}',[
        'uses'=>'Admin\AdController@show',
        'as'=>'ad.show'
    ]);
    //*******************Ad  Category ***************************//

    Route::post('category-create',[
        'uses'=>'Admin\AdCategoryController@create',
        'as'=>'adCategory.create'
    ]);
    Route::get('categories',[
        'uses'=>'Admin\AdCategoryController@index',
        'as'=>'adCategory.index'
    ]);
    Route::get('ad-category-edit{id}',[
        'uses'=>'Admin\AdCategoryController@edit',
        'as'=>'adCategory.edit'
    ]);
    Route::post('ad-category-update{id}',[
        'uses'=>'Admin\AdCategoryController@update',
        'as'=>'adCategory.update'
    ]);
    Route::get('category-delete{category_id}',[
        'uses'=>'Admin\AdCategoryController@delete',
        'as'=>'adCategory.delete'
    ]);
    Route::get('category-changeStatus{id}',[
        'uses'=>'Admin\AdCategoryController@changeStatus',
        'as'=>'adCategory.changeStatus'
    ]);

//*******************Ad Category Detail***************************//

    Route::get('ad-category-detail-index{id}',[
        'uses'=> 'Admin\AdCategoryDetailController@index',
        'as'=>'adCategoryDetail.index'
    ]);
    Route::post('ad-category-detail-create',[
        'uses'=> 'Admin\AdCategoryDetailController@create',
        'as'=>'adCategoryDetail.create'
    ]);
    Route::get('ad-category-detail-edit{id}',[
        'uses'=> 'Admin\AdCategoryDetailController@edit',
        'as'=>'adCategoryDetail.edit'
    ]);
    Route::post('ad-category-detail-update{id}',[
        'uses'=> 'Admin\AdCategoryDetailController@update',
        'as'=>'adCategoryDetail.update'
    ]);
    Route::get('ad-category-detail-delete{id}',[
        'uses'=> 'Admin\AdCategoryDetailController@delete',
        'as'=>'adCategoryDetail.delete'
    ]);
    Route::get('ad-category-detail-changeStatus{id}',[
        'uses'=> 'Admin\AdCategoryDetailController@changeStatus',
        'as'=>'adCategoryDetail.changeStatus'
    ]);
//*******************Ad Category Feature***************************//

    Route::get('ad-category-feature-index{id}',[
        'uses'=> 'Admin\AdCategoryFeatureController@index',
        'as'=>'adCategoryFeature.index'
    ]);
    Route::post('ad-category-feature-create',[
        'uses'=> 'Admin\AdCategoryFeatureController@create',
        'as'=>'adCategoryFeature.create'
    ]);
    Route::get('ad-category-feature-edit{id}',[
        'uses'=> 'Admin\AdCategoryFeatureController@edit',
        'as'=>'adCategoryFeature.edit'
    ]);
    Route::patch('ad-category-feature-update',[
        'uses'=> 'Admin\AdCategoryFeatureController@update',
        'as'=>'adCategoryFeature.update'
    ]);
    Route::get('ad-category-feature-delete{id}',[
        'uses'=> 'Admin\AdCategoryFeatureController@delete',
        'as'=>'adCategoryFeature.delete'
    ]);


});