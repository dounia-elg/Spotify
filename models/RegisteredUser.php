<?php
require_once 'AbstractUser.php';

class RegisteredUser extends AbstractUser {
    public function register($db) {
        $hashedPassword = password_hash($this->password, PASSWORD_BCRYPT);
        $stmt = $db->prepare("INSERT INTO users (name, email, password_hash, role) VALUES (?, ?, ?, 'user')");
        return $stmt->execute([$this->name, $this->email, $hashedPassword]);
    }
}
