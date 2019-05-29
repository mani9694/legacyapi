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

Route::get('/', 'PagesController@home');
  // $tasks = ['work',
  //           'workout',
  //           'food',
  //           'relax'];

// return view('welcome')->withTasks($tasks);
// return view('welcome', [task => $tasks]);

    // return view('welcome')->withTasks($tasks = ['work',
    //           'workout',
    //           'food',
    //           'relax']);

Route::get('/contact', 'PagesController@contact');


Route::get('/about', 'PagesController@about');

Route::get('/projects', 'ProjectsController@index');
