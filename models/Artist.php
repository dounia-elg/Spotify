<?php
require_once 'AbstractUser.php';

class Artist extends AbstractUser {
    public function __construct($id, $name, $email, $password) {
        parent::__construct($id, $name, $email, $password, 'artist');
    }

    public function register($name, $email, $password, $pdo) {
        try {
            
            $hashedPassword = password_hash($password, PASSWORD_BCRYPT);

            $stmt = $pdo->prepare("INSERT INTO users (name, email, password_hash, role) VALUES (:name, :email, :password, 'artist')");
            
            $stmt->execute([
                'name' => $name,
                'email' => $email,
                'password' => $hashedPassword
            ]);

            return "Artist registered successfully!";
        } catch (PDOException $e) {
            return "Error registering artist: " . $e->getMessage();
        }
    }
}
?>
