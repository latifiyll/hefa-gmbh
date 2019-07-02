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

// Route::get('/', function () {
//     return view('auth.login');
// });
use App\User;
use Carbon\Carbon;
Route::get('/contact', function(){
  return view('contact.index');
});
Route::post('/contact', 'MailsController@index');

Auth::routes();
Route::group(["middleware"=>["admin"]], function(){
Route::get('/myprofile', 'MyProfileController@index');
Route::get('/', 'ChartsController@chart');
Route::resource('/posts', 'PageDetailsController');
Route::resource('/posts/{posts}/items', 'PostsItemController');
Route::resource('/onlineoffers', 'OnlineOffersController');

Route::resource('/staff', 'StaffController');
Route::resource('/type', 'TypesController');
Route::resource('/category', 'CategoriesController');
Route::resource('/headerimages', 'HeaderImageController');
Route::resource('/images', 'ImageController');
Route::get('/messages', 'MessagesController@index');
Route::get('/messages/{id_message}', 'MessagesController@show');
Route::delete('messages/{id_message}', 'MessagesController@destroy');
Route::post('onlineoffers/{id}', 'MessageController@sendMessage');
Route::get('onlineoffers/{id}/download', 'OnlineOffersController@downloadPDF');
});
