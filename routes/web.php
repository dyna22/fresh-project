<?php

use Illuminate\Support\Facades\Route;

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
    //  return view('welcome');
    //  return view('welcome')-> with('data',4);
    //  return view('welcome')-> with(['string' => 'Dina Muhamed' , 'age' => 21]);
    //  $data = []; //better in index!
    //  $data['id'] = 4;
    //  $data['name'] = 'Dina Muhamed';
    //  return view('welcome', $data);
    
        $obj = new \stdClass();
        $obj -> fname = 'Dyna El-fayed';
        $obj -> age = 21;
        $obj -> gender = 'female';
        return view('welcome', compact('obj'));
    });
    

#Route::get('/', function () {
#   $name = request('name');
#   return $name;
#});

//==
Route::get('index','Front\FirstController@getIndex');


Route::get('/test1', function(){
    return 'welcome';
});

//route parameters

Route::get('/test2/{id}', function($id){
    return $id;
});

Route::get('/test3/{id?}', function(){ //optional
    return 'welcome';
});

//route name

Route::get('/show-number/{id}', function($id){
    return $id;
}) -> name('a');

Route::get('/show-string/{id?}', function(){ //optional
    return 'welcome';
}) -> name('b');

//route name
/*
Route::namespace('Front')->group(function(){
    //all route only access controller or methods in folder name Front
    Route::get('users','UserController@showUserName');
});
*/

//middlware
Route::get('check', function(){
    return 'middleware';
}) -> middleware('auth');


Route::resource('new','NewController');

//======================================
Route::get('/landing', function(){
    return view('landing');
});