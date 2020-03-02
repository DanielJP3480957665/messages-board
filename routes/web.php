<?php

// デフォルトのコメント部分は省略

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', 'MessagesController@index');

Route::resource('messages', 'MessagesController');