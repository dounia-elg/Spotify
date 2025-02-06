<?php
require_once 'Database.php';

abstract class AbstractUser {
    protected int $id;
    protected string $name;
    protected string $email;
    protected string $password;
    protected string $role;
    protected PDO $db;

    public function __construct($id, $name, $email, $password, $role) {
        $this->id = $id;
        $this->name = $name;
        $this->email = $email;
        $this->password = $password;
        $this->role = $role;
        $this->db = Database::getInstance()->getConnection();
    }

    public function login($email, $password) {
        try {
            $stmt = $this->db->prepare("SELECT * FROM users WHERE email = :email");
            $stmt->execute(['email' => $email]);
            $user = $stmt->fetch(PDO::FETCH_ASSOC);

            if ($user && password_verify($password, $user['password_hash'])) {
                session_start();
                $_SESSION['user_id'] = $user['id'];
                $_SESSION['user_role'] = $user['role'];
                $_SESSION['user_name'] = $user['name'];

                return "Login successful!";
            } else {
                return "Invalid email or password.";
            }
        } catch (PDOException $e) {
            return "Login error: " . $e->getMessage();
        }
    }

    public function logout() {
        session_start();
        session_unset();
        session_destroy();
        return "Logout successful.";
    }

    public function getId() { return $this->id; }
    public function getName() { return $this->name; }
    public function getEmail() { return $this->email; }
    public function getRole() { return $this->role; }
}
?>
