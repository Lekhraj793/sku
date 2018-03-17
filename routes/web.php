<?php

Route::get('/', 'DashBoardController@dashBoard');
Route::get('/datatable', 'DashBoardController@dataTabel');
Route::get('/table2','DashBoardController@table');