<?php

abstract class AbstractUser {
    protected $id;
    protected $name;
    protected $email;
    protected $password;
    protected $role;

    public function __construct($id, $name, $email, $password, $role) {
        $this->id = $id;
        $this->name = $name;
        $this->email = $email;
        $this->password = $password;
        $this->role = $role;
    }

    public function login($db) {
        $stmt = $db->prepare("SELECT * FROM users WHERE email = ?");
        $stmt->execute([$this->email]);
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($user && password_verify($this->password, $user['password_hash'])) {
            return $user;
        }
        return false;
    }

    public function logout() {
        session_start();
        session_destroy();
    }
}
