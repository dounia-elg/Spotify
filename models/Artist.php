<?php
require_once 'AbstractUser.php';

class Artist extends AbstractUser {
    public function register($db) {
        $hashedPassword = password_hash($this->password, PASSWORD_BCRYPT);
        $stmt = $db->prepare("INSERT INTO users (name, email, password_hash, role) VALUES (?, ?, ?, 'artist')");
        return $stmt->execute([$this->name, $this->email, $hashedPassword]);
    }
}
