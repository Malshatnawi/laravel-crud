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
    return view('welcome');
});

Route::post('studentsList', 'StudentController@create');

Route::get('studentsList', 'StudentController@index');


// Route::get('studentsList', function () {
//     return redirect('studentsList');
// });


Route::get('studentRegister', function () {
    return view('registration');
});

Route::get('profile/{id}', 'StudentController@show');





// Route::get('admin/studentsTable', function () {
//     return view('studentsTable');
// });



Route::get('admin', 'UsersController@login_get');

Route::get('addAdmin', 'UsersController@register_get');

Route::post('addAdmin', 'UsersController@create');




Route::post('admin', 'StudentController@AdminLogin');



Route::get('studentsTable/{id}', 'StudentController@destroy');


Route::get('editStudent/{id}', 'StudentController@edit');


Route::post('editStudent/studentsTable/{id}', 'StudentController@updateValidation');



Route::get('login', function () {
    return view('login');
});


// Route::get('profile/{$id}', 'StudentController@show');

// Route::get('welcome/{$id}', function ($id) {
//     return ($id);
// });



Auth::routes();

// Route::get('/manual_register', 'UsersController@login_get');

Route::get('/manual_login', 'UsersController@login_get');

Route::post('/manual_login', 'UsersController@login_post');




