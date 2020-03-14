<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::post('/register','Api\AuthController@register');
Route::post('/login','Api\AuthController@login');
Route::apiResource('/realestates','Api\RealestateController');
Route::post('/realestates/{id}/edit/update','Api\RealEstateController@update');
Route::get('/realestates/{id}/delete','Api\RealEstateController@destroy');
// Route::get('/featured','Api\FeaturedController@index');
// Route::get('/featuredbyid/{id}','Api\FeaturedController@show')->name('featuredbyid.show');
Route::apiResource('/featured','Api\FeaturedController');
Route::post('/realestates/{id}/photos/store','Api\RealEstateController@addPhotos')->name('addphotos');
Route::get('/realestates/{id}/photos','Api\RealEstateController@viewPhotos')->name('viewphotos');
Route::get('/realestates/{id}/photos/{photoid}/delete','Api\RealEstateController@deletePhotos');
Route::get('/realestates/comment/view','Api\CommentController@index');
Route::post('/realestates/{id}/comment','Api\CommentController@store');
Route::post('/realestates/{id}/comment/{commentid}/reply','Api\ReplyController@store');
Route::get('/realestates/comment/reply','Api\ReplyController@index');

//aboutus
Route::get('/aboutus','Api\MetadataController@index');
