<?php
    Route::get('/','StaticPagesController@home')->name('home');
    Route::get('/faq', 'StaticPagesController@help')->name('help');
    Route::get('/about','StaticPagesController@about')->name('about');

//here are the route setting of user signup funtions
    Route::get('signup','UsersController@create')->name('signup');
?>