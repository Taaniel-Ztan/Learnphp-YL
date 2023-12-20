<?php

// UserController.php

// UserController.php

namespace App\Controllers;

use App\Models\User;

class UserController {
    public function index(){
        $users = User::all();
        view('users/index', compact('users'));
    }

    public function create(){
        view('users/create');
    }

    public function store(){
        // Add logic to store a new user
    }

    public function edit(){
        $id = $_GET['id'];
        $user = User::find($id);
        view('users/edit', compact('user'));
    }

    public function update(){
        $id = $_GET['id'];
        $user = User::find($id);
        $user->email = $_POST['email'];

        // Validate and update the password if provided
        if (!empty($_POST['password'])) {
            $user->password = password_hash($_POST['password'], PASSWORD_BCRYPT);
        }

        $user->save();
        header('Location: /admin/users');
    }

    public function delete(){
        $id = $_GET['id'];
        $user = User::find($id);
        $user->delete();
        header('Location: /admin/users');
    }

    public function show(){
        $id = $_GET['id'];
        $user = User::find($id);
        view('users/show', compact('user'));
    }
}
