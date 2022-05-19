<?php


// Routes


Route::get('/',function(){
    return Route::controller("home","index");
});

Route::get('/login',function(){
    return Route::view("login");
});

Route::get('/dashboard',function(){
    return Route::view("dashboard");
});

Route::get('/teachers',function(){
    return Route::view("teachers");
});

Route::get('/editteacher',function(){
    return Route::view("editteacher");
});

Route::get('/students',function(){
    return Route::view("students");
});

Route::get('/editstudent',function(){
    return Route::view("editstudent");
});

Route::get('/parents',function(){
    return Route::view("parents");
});

Route::get('/editparent',function(){
    return Route::view("editparent");
});

Route::get('/classes',function(){
    return Route::view("classes");
});

Route::get('/editclasse',function(){
    return Route::view("editclasse");
});
Route::get('/login',function(){
    return Route::view("login");
});