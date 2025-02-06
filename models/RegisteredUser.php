<?php
require_once 'AbstractUser.php';

class RegisteredUser extends AbstractUser {
    public function __construct($id, $name, $email, $password) {
        parent::__construct($id, $name, $email, $password, 'user');
    }

    public function register($name, $email, $password, $pdo) {
        try {
           
            $hashedPassword = password_hash($password, PASSWORD_BCRYPT);

            $stmt = $pdo->prepare("INSERT INTO users (name, email, password_hash, role) VALUES (:name, :email, :password, 'user')");
            
            $stmt->execute([
                'name' => $name,
                'email' => $email,
                'password' => $hashedPassword
            ]);

            return "User registered successfully!";
        } catch (PDOException $e) {
            return "Error registering user: " . $e->getMessage();
        }
    }
}
?>
