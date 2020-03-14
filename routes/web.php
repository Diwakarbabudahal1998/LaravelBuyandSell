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

Route::get('/', function () {
    return view('auth.login');
});
Auth::routes(['register' => false]);
//Route::group(['middleware'=>'admin'],function(){
    Route::get('/admin','Admin\AdminController@index')->middleware('auth');
    //Roles Route
Route::get('admin/role','Admin\RoleController@index')->middleware('auth');
Route::get('/admin/role/addrole', 'Admin\RoleController@create')->middleware('auth');
Route::post('/admin/role/addrole/submit', 'Admin\RoleController@store')->middleware('auth');
Route::get('/admin/role/editrole/{id}', 'Admin\RoleController@edit')->middleware('auth');
Route::post('admin/role/editrole/{id}/submit','Admin\RoleController@update')->middleware('auth');
Route::get('/admin/role/viewpermission/{id}', 'Admin\RoleController@viewPermissions')->middleware('auth');
Route::get('admin/role/delete/{id}','Admin\RoleController@destroy')->middleware('auth');

//Permission Route
Route::get('/admin/permission','Admin\PermissionController@index')->middleware('auth');
Route::get('/admin/permission/addpermission','Admin\PermissionController@create')->middleware('auth');
Route::post('/admin/permission/addpermission/submit','Admin\PermissionController@store')->middleware('auth');
Route::get('/admin/permission/edit/{id}','Admin\PermissionController@edit')->middleware('auth');
Route::post('admin/permission/edit/{id}/submit','Admin\PermissionController@update')->middleware('auth');
Route::get('admin/permission/delete/{id}','Admin\PermissionController@destroy')->middleware('auth');

//user route
Route::get('/admin/user','Admin\UserController@index')->middleware('auth');
Route::get('/admin/user/create','Admin\UserController@create')->middleware('auth');
Route::post('/admin/user/create/submit','Admin\UserController@store')->middleware('auth');
Route::get('/admin/user/edit/{id}','Admin\UserController@edit')->middleware('auth');;
Route::post('/admin/user/edit/{id}/submit','Admin\UserController@update')->middleware('auth');
Route::get('admin/user/delete/{id}','Admin\UserController@destroy')->middleware('auth');


//Real Estate Routes
  //Route::group(['middleware'=>'auth'],function(){
    Route::get('/admin/realestate','Admin\RealEstateController@index');
    Route::get('/admin/realestate/create','Admin\RealEstateController@create');
    Route::post('/admin/realestate','Admin\RealEstateController@store');
    Route::get('/admin/realestate/{id}/edit','Admin\RealEstateController@edit');
    Route::get('/admin/realestate/{id}/delete','Admin\RealEstateController@destroy');
    Route::post('/admin/realestate/{id}/edit/update','Admin\RealEstateController@update');
    Route::get('/admin/realestate/{id}/photos','Admin\RealEstateController@viewPhotos')->name('viewphotos');
    Route::post('/admin/realestate/{id}/photos/store','Admin\RealEstateController@addPhotos')->name('addphotos');
    Route::get('/admin/realestate/{id}/photos/{photoid}/delete','Admin\RealEstateController@deletePhotos');
  //});



//about us
Route::get('admin/aboutus','Metadata\MetadataController@index')->middleware('auth');
Route::get('admin/aboutus/create','Metadata\MetadataController@create')->middleware('auth');
Route::post('admin/aboutus/store','Metadata\MetadataController@store')->middleware('auth');
Route::get('admin/aboutus/{id}/show','Metadata\MetadataController@show')->middleware('auth');
Route::get('admin/aboutus/{id}/edit','Metadata\MetadataController@edit')->middleware('auth');
Route::post('admin/aboutus/{id}/edit','Metadata\MetadataController@update')->middleware('auth');
Route::get('admin/aboutus/{id}/delete','Metadata\MetadataController@destroy')->middleware('auth');
//});

//vehicle route

Route::resource('admin/vehicle','Admin\VehicleController')->middleware('auth');

Route::get('/admin/vehicles/{id}/photos','Admin\VehicleController@viewPhotos')->name('viewphotos');
Route::post('/admin/vehicles/{id}/photos/store','Admin\VehicleController@addPhotos')->name('addphotos');
Route::get('/admin/vehicle/{id}/photos/{photoid}/delete','Admin\VehicleController@deletePhotos');

