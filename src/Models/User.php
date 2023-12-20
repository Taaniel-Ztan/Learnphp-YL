<?php

namespace App\Models;

class User extends Model {
    public static $table = 'users';
    public $id;
    public $email;
    public $password;

    // Find user by email
    public static function findByEmail($email) {
        $db = new DB();
        $result = $db->where(static::$table, static::class, 'email', $email);
        return isset($result[0]) ? $result[0] : null;
    }

    // Authenticate user
    public static function authenticate($email, $password) {
        $user = static::findByEmail($email);

        if ($user && password_verify($password, $user->password)) {
            return $user;
        }

        return null;
    }

    // Check if a user is logged in
    public static function auth() {
        if (isset($_SESSION['user'])) {
            return static::find($_SESSION['user']);
        }

        return null;
    }

    // Add any other necessary methods or validations
}
