<?php


use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\User;
use Illuminate\Http\Client\Request;

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
    return view('welcome');
});

Route::middleware('auth')->group(function(){
    Route::get('/tweets', 'TweetsController@index')->name('home');
    Route::post('/tweets', 'TweetsController@store');


    Route::get('/tweets/{tweet:id}/edit', 'TweetsController@edit')->name('tweet.edit');
    Route::patch('/tweets/{tweet:id}', 'TweetsController@update')->name('tweet.update');


    Route::get('/tweets/delete/{id}', 'TweetsController@destroy')->name('tweet.delete');

    Route::post('/tweets/{tweet}/like', 'TweetLikesController@store');
    Route::delete('/tweets/{tweet}/like', 'TweetLikesController@destroy');

    Route::get('/tweets/search', 'ProfilesController@search')->name('search');


    Route::post(
        '/profiles/{user:username}/follow', 
        'FollowsController@store'
    )->middleware('auth')
    ->name('follow');

    Route::get(
        '/profiles/{user:username}/edit', 
        'ProfilesController@edit'
    )->middleware('can:edit,user');

    Route::patch(
        '/profiles/{user:username}', 
        'ProfilesController@update'
    )->middleware('can:edit,user');


    Route::get(
        '/explore', 
        'ExploreController'
    );

    Route::post('/comment/store', 'CommentsController@store')->name('comment.add');


});


Route::get(
    '/profiles/{user:username}', 
    'ProfilesController@show'
)->name('profile');


Auth::routes();

