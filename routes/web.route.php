<?php


// Routes


Route::get('/',function(){
    return Route::controller("home","index");
});

Route::post('/login',function(){
    return Route::controller("user","login");
});

Route::get('/logout',function(){
    return Route::controller("user","logout");
});

Route::get('/login',function(){
    return Route::view("login");
});

// router to add user
Route::post('/admin',function(){
    return Route::controller('user', 'addUser');;
});

Route::post('/students',function(){
    return Route::controller('student', 'addNewStudent');
});

Route::get('/students',function(){
    return Route::controller('student', 'showAllStudents');
});

Route::get('/editstudent/{id}',function($id){
    return Route::controller('student', 'showOneStudent');
});

Route::get('/editstudent/{id}',function($id){
    return Route::controller('student', 'showOneStudent');
});

Route::post('/editstudent/{id}',function($id){
    return Route::controller('student', 'updateStudent');
});

Route::get('/students/delete/{id}',function($id){
    return Route::controller('student', 'deleteStudent');
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

Route::get('/admin',function(){
    return Route::controller('user', 'getUsers');
});

// deleting admin 
Route::get('/delete/admin/{id}',function($id){
    return Route::controller('user', 'deleteUser');
});

Route::get('/login',function(){
    return Route::view("login");
});