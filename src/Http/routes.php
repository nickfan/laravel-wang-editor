<?php

Route::get('laravel-wang-editor/example', 'Douyasi\WangEditor\Http\Controllers\WangEditorController@example');
Route::post('laravel-wang-editor/upload', 'Douyasi\WangEditor\Http\Controllers\WangEditorController@postUploadPicture');
