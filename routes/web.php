<?php

use Illuminate\Support\Facades\Route;

// Login Page
Route::get('/login', function () {
    return view('auth.login', [
        "title" => "Login"
    ]);
});

// Register Page
Route::get('/register', function () {
    return view('auth.register', [
        "title" => "Register"
    ]);
});

// Projects Board Page
Route::get('/', function () {
    $id_project = 1;
    $id_user = 1;

    return view('pages.project.index', [
        "title" => "Home",
        "id_project" => $id_project,
        "id_user" => $id_user
    ]);
});

// Detail Project Page
Route::get('/project/{id_project}', function () {
    $id_project = 1;
    $id_task = 1;
    $id_user = 1;

    return view('pages.project.detail', [
        "title" => "Project",
        "id_project" => $id_project,
        "id_task" => $id_task,
        "id_user" => $id_user
    ]);
});

// Detail Task Page
Route::get('/project/{id_project}/task/{id_task}', function () {
    $id_project = 1;
    $id_user = 1;

    return view('pages.task.index', [
        "title" => "Task",
        "id_project" => $id_project,
        "id_user" => $id_user
    ]);
});

// Profile Page
Route::get('/user/{id_user}', function () {
    $id_user = 1;

    return view('pages.profile.index', [
        "title" => "Profile",
        "id_user" => $id_user
    ]);
});
