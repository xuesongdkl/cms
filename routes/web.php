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
Route::get('/user',function(){
    echo 'user';
});
Route::get('/order','order\indexcontroller@detail');
//Route::get('/order/{id}','Vip\indexcontroller@index');
//增
Route::get('/order/add','Vip\indexcontroller@add');
//删
Route::get('/order/delete/{id}','Vip\indexcontroller@delete');
//改
Route::get('/order/update/{id}','Vip\indexcontroller@update');
//查
Route::get('/order/select/{id}','Vip\indexcontroller@select');
//模板渲染
Route::get('/order/list','Vip\indexcontroller@list');