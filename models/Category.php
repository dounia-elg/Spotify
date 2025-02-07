<?php

class Category {
    private $id;
    private $name;

    public function __construct($id, $name) {
        $this->id = $id;
        $this->name = $name;
    }

    public function addCategory($db) {
        $stmt = $db->prepare("INSERT INTO categories (name) VALUES (?)");
        return $stmt->execute([$this->name]);
    }

    public function editCategory($db, $newName) {
        $stmt = $db->prepare("UPDATE categories SET name = ? WHERE id = ?");
        return $stmt->execute([$newName, $this->id]);
    }

    public function removeCategory($db) {
        $stmt = $db->prepare("DELETE FROM categories WHERE id = ?");
        return $stmt->execute([$this->id]);
    }
}
