<?php

require_once '../models/Database.php';
require_once '../models/RegisteredUser.php';
require_once '../models/Artist.php';
require_once '../models/Admin.php';

class AuthController {
    public function login($db, $email, $password) {
        $stmt = $db->prepare("SELECT * FROM users WHERE email = ?");
        $stmt->execute([$email]);
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($user && password_verify($password, $user['password_hash'])) {
            session_start();
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['user_role'] = $user['role'];
            return true;
        }
        return false;
    }

    public function register($db, $name, $email, $password, $role) {
        if ($role === 'user') {
            $user = new RegisteredUser(null, $name, $email, $password, $role);
        } elseif ($role === 'artist') {
            $user = new Artist(null, $name, $email, $password, $role);
        } elseif ($role === 'admin') {
            $user = new Admin(null, $name, $email, $password, $role);
        } else {
            return false;
        }

        return $user->register($db);
    }

    public function logout() {
        session_start();
        session_destroy();
    }
}