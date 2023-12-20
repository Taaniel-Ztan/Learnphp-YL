<?php

use App\Controllers\ArticlesController;
use App\Controllers\AuthController;
use App\Controllers\PublicController;
use App\Controllers\UserController;
use App\Router;


Router::get('/', [PublicController::class, 'home']); 

Router::get('/about', [PublicController::class, 'about']);

Router::get('/test', [PublicController::class, 'test']);
Router::post('/test', [PublicController::class, 'testAnswer']);

Router::get('/admin/articles', [ArticlesController::class, 'index']);
Router::get('/admin/articles/new', [ArticlesController::class, 'create']);
Router::post('/admin/articles', [ArticlesController::class, 'store']);
Router::get('/admin/articles/view', [ArticlesController::class, 'show']);
Router::get('/admin/articles/edit', [ArticlesController::class, 'edit']);
Router::post('/admin/articles/edit', [ArticlesController::class, 'update']);
Router::get('/admin/articles/delete', [ArticlesController::class, 'delete']);

Router::get('/admin/users/show', [UserController::class, 'show']);
Router::get('/admin/users', [UserController::class, 'index']);
Router::get('/admin/users/new', [UserController::class, 'create']);
Router::post('/admin/users', [UserController::class, 'store']);
Router::get('/admin/users/view', [UserController::class, 'show']);
Router::get('/admin/users/edit', [UserController::class, 'edit']);
Router::post('/admin/users/edit', [UserController::class, 'update']);
Router::get('/admin/users/delete', [UserController::class, 'delete']);

Router::post('/register', [AuthController::class, 'register']);
Router::get('/register', [AuthController::class, 'registerForm']);
Router::post('/login', [AuthController::class, 'login']);
Router::get('/login', [AuthController::class, 'loginForm']);
Router::get('/logout', [AuthController::class, 'logout']);


