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

Route::get('/', ['uses' => 'TodoController@index']
);
Route::post('/create/todo', ['uses' => 'TodoController@createtodo']
);
Route::get('/todo/delete/{id}', 
['uses' => 'TodoController@delete',
'as' => 'todo.delete']
);