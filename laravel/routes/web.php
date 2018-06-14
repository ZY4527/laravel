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
//路由控制器的方法  这样就可以在UserController的控制器中编写方法和代码，有参数的要记得加上参数

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


//Actor
Route::group(['prefix'=>'actor'],function(){
    Route::any("index","area\ActorController@index");
    Route::any("add","area\ActorController@add");
    Route::any("addSave","area\ActorController@addSave");
    Route::any("delete","area\ActorController@delete");
    Route::any("edit","area\ActorController@edit");
    Route::any("editSave","area\ActorController@editSave");
});
//area
Route::group(['prefix'=>'area'],function (){
    Route::any("index","area\AreaController@index");
    Route::any("add","area\AreaController@add");
    Route::any("addSave","area\AreaController@addSave");
    Route::any("delete","area\AreaController@delete");
    Route::any("edit","area\AreaController@edit");
    Route::any("editSave","area\AreaController@editSave");
});
//authors
Route::group(['prefix'=>'authors'],function (){
    Route::any("index","area\AuthorsController@index");
    Route::any("add","area\AuthorsController@add");
    Route::any("addSave","area\AuthorsController@addSave");
    Route::any("delete","area\AuthorsController@delete");
    Route::any("edit","area\AuthorsController@edit");
    Route::any("editSave","area\AuthorsController@editSave");
});
//comment
Route::group(['prefix'=>'comment'],function (){
    Route::any("index","area\CommentController@index");
    Route::any("add","area\CommentController@add");
    Route::any("addSave","area\CommentController@addSave");
    Route::any("delete","area\CommentController@delete");
    Route::any("edit","area\CommentController@edit");
    Route::any("editSave","area\CommentController@editSave");
});
//director
Route::group(['prefix'=>'director'],function (){
    Route::any("index","area\DirectorController@index");
    Route::any("add","area\DirectorController@add");
    Route::any("addSave","area\DirectorController@addSave");
    Route::any("delete","area\DirectorController@delete");
    Route::any("edit","area\DirectorController@edit");
    Route::any("editSave","area\DirectorController@editSave");
});
//film
Route::group(['prefix'=>'film'],function (){
    Route::any("index","area\FilmController@index");
    Route::any("add","area\FilmController@add");
    Route::any("addSave","area\FilmController@addSave");
    Route::any("delete","area\FilmController@delete");
    Route::any("edit","area\FilmController@edit");
    Route::any("editSave","area\FilmController@editSave");
});
//novel
Route::group(['prefix'=>'novel'],function (){
    Route::any("index","area\NovelController@index");
    Route::any("add","area\NovelController@add");
    Route::any("addSave","area\NovelController@addSave");
    Route::any("delete","area\NovelController@delete");
    Route::any("edit","area\NovelController@edit");
    Route::any("editSave","area\NovelController@editSave");
});
//novel_chapter
Route::group(['prefix'=>'novel_chapter'],function (){
    Route::any("index","area\ChapterController@index");
    Route::any("add","area\ChapterController@add");
    Route::any("addSave","area\ChapterController@addSave");
    Route::any("delete","area\ChapterController@delete");
    Route::any("edit","area\ChapterController@edit");
    Route::any("editSave","area\ChapterController@editSave");
});
//years
Route::group(['prefix'=>'years'],function (){
    Route::any("index","area\YearsController@index");
    Route::any("add","area\YearsController@add");
    Route::any("addSave","area\YearsController@addSave");
    Route::any("delete","area\YearsController@delete");
    Route::any("edit","area\YearsController@edit");
    Route::any("editSave","area\YearsController@editSave");
});
//type
Route::group(['prefix'=>'type'],function (){
    Route::any("index","area\TypeController@index");
    Route::any("add","area\TypeController@add");
    Route::any("addSave","area\TypeController@addSave");
    Route::any("delete","area\TypeController@delete");
    Route::any("edit","area\TypeController@edit");
    Route::any("editSave","area\TypeController@editSave");
});
//tv
Route::group(['prefix'=>'tv'],function (){
    Route::any("index","area\TvController@index");
    Route::any("add","area\TvController@add");
    Route::any("addSave","area\TvController@addSave");
    Route::any("delete","area\TvController@delete");
    Route::any("edit","area\TvController@edit");
    Route::any("editSave","area\TvController@editSave");
});
//tv_collection
Route::group(['prefix'=>'tv_collection'],function (){
    Route::any("index","area\CollectionController@index");
    Route::any("add","area\CollectionController@add");
    Route::any("addSave","area\CollectionController@addSave");
    Route::any("delete","area\CollectionController@delete");
    Route::any("edit","area\CollectionController@edit");
    Route::any("editSave","area\CollectionController@editSave");
});
