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

route::get('/new',[
	'uses' => 'pagescontroller@new'
]);

route::get('todo_view',[
	'uses' => 'Todoscontroller@read',
	'as' => 'index'
]);

route::post('/crud/insert',[
	'uses' => 'Todoscontroller@insert'
]);

route::get('/crud/delete/{id}',[
	'uses' => 'Todoscontroller@remove',
	'as' => 'crud.delete'
]);

route::get('/crud/udpate/{id}',[
'uses' => 'Todoscontroller@update',
'as'   =>  'crud.update'
]);

route::post('crud/save/{id}',[
	'uses'=> 'Todoscontroller@saveUpdatedData', 
	'as' => 'crud.save'
]);

route::get('todo/completes/{id}',[
	'uses'=>'Todoscontroller@markAsCompleted' ,
	'as'=>'mark.completed'
]);