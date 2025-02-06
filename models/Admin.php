<?php
require_once 'AbstractUser.php';

class Admin extends AbstractUser {
    public function __construct($id, $name, $email, $password) {
        parent::__construct($id, $name, $email, $password, 'admin');
    }

    public function banUser($userId) {
        try {
            $stmt = $this->db->prepare("UPDATE users SET is_banned = TRUE WHERE id = :userId");
            $stmt->execute(['userId' => $userId]);

            if ($stmt->rowCount() > 0) {
                return "User with ID $userId has been banned.";
            } else {
                return "No user found with ID $userId.";
            }
        } catch (PDOException $e) {
            return "Error banning user: " . $e->getMessage();
        }
    }

    public function unbanUser($userId) {
        try {
            $stmt = $this->db->prepare("UPDATE users SET is_banned = FALSE WHERE id = :userId");
            $stmt->execute(['userId' => $userId]);

            if ($stmt->rowCount() > 0) {
                return "User with ID $userId has been unbanned.";
            } else {
                return "No user found with ID $userId.";
            }
        } catch (PDOException $e) {
            return "Error unbanning user: " . $e->getMessage();
        }
    }
}
?>
