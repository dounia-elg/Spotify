<?php
require_once 'AbstractUser.php';

class Admin extends AbstractUser {
    public function banUsers($db, $userId) {
        $stmt = $db->prepare("UPDATE users SET is_banned = TRUE WHERE id = ?");
        return $stmt->execute([$userId]);
    }

    public function unbanUsers($db, $userId) {
        $stmt = $db->prepare("UPDATE users SET is_banned = FALSE WHERE id = ?");
        return $stmt->execute([$userId]);
    }
}
