<?php


Route::get('calculator', function(){
    echo 'Hello from the calculator package!';
});

Route::get('add/{a}/{b}', 'Finetick\Calculator\CalculatorController@add');
Route::get('subtract/{a}/{b}', 'Finetick\Calculator\CalculatorController@subtract');