<?php
use Lordar221617\Portfolio\Route;

Route::add("/", ["home", "index"]);
Route::add("/contact/send", ["contact", "send"]);
Route::add("/contact/index", ["contact", "index"]);
Route::add("/home/index", ["home", "index"]);
Route::add("/auth/login", ["auth", "login"]);
Route::add("/auth/signup", ["auth", "signup"]);