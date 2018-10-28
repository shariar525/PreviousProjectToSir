<?php

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('/', function () {
    return view('welcome');

});

Route::get('/expense/view', 'ExpenseController@expenseview' )->name('');
  Route::post('/expense/insert', 'ExpenseController@expenseinsert' )->name('');

    Route::get('/expense/list/view', 'ExpenseController@expenselistview' )->name('');
    Route::get('/expense/edit/{expense_id}', 'ExpenseController@expenseedit' )->name('');
    Route::post('/expense/Update', 'ExpenseController@expenseUpdate' )->name('');
    Route::get('/expense/delete/{expense_id}', 'ExpenseController@expensedelete' )->name('');

     Route::get('/about', 'AboutController@emon' )->name('');
