<?php 

use Illuminate\Support\Facades\Route;



route::get('/','HelloController@index');

Route::get('contact/us','HelloController@contact')->name('contact');
Route::get('about/us','HelloController@about')->name('about');

//category crud here
Route::get('all/category','HeyController@AllCategory')->name('all.category');
Route::get('add/category','HeyController@AddCategory')->name('add.category');
Route::post('store/category','HeyController@StoreCategory')->name('store.category');
Route::get('view/category/{id}','HeyController@ViewCategory');
Route::get('delete/category/{id}','HeyController@DeleteCategory');
Route::get('edit/category/{id}','HeyController@EditCategory');
Route::post('update/category/{id}','HeyController@UpdateCategory');
    
    //posts crud are here
Route::get('write/post','PostController@writePost')->name('write.post');
Route::post('store/post','PostController@StorePost')->name('store.post');
Route::get('all/post','PostController@AllPost')->name('all.post');
Route::get('view/post/{id}','PostController@ViewPost');
Route::get('edit/post/{id}','PostController@EditPost');
Route::post('update/post/{id}','PostController@UpdatePost');
Route::get('delete/post/{id}','PostController@DeletePost');
//student
Route::get('students','StudentController@student')->name('student');
Route::post('store/student','StudentController@Store')->name('store.student');
Route::get('all/students','StudentController@index')->name('all.student');
Route::get('view/student/{id}','StudentController@show');
Route::get('delete/student/{id}','StudentController@destroy');
Route::get('edit/student/{id}','StudentController@edit');
Route::post('update/student/{id}','StudentController@update');
