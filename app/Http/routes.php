<?php

use App\Note;

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('notes', function () {
    $notes = Note::all();
    return view('notes', compact('notes'));
});

Route::post('notes',function (){

    return 'Creating a note';
});

Route::get('notes/{note}/{slug?}',function ($note, $slug = null){

    dd($note, $slug);
})->where('note','[0-9]+');