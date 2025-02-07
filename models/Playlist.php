<?php

class Playlist {
    private $id;
    private $name;
    private $visibility;
    private $user_id;

    public function __construct($id, $name, $visibility, $user_id) {
        $this->id = $id;
        $this->name = $name;
        $this->visibility = $visibility;
        $this->user_id = $user_id;
    }

    public function createPlaylist($db) {
        $stmt = $db->prepare("INSERT INTO playlists (name, visibility, user_id) VALUES (?, ?, ?)");
        return $stmt->execute([$this->name, $this->visibility, $this->user_id]);
    }

    public function deletePlaylist($db) {
        $stmt = $db->prepare("DELETE FROM playlists WHERE id = ?");
        return $stmt->execute([$this->id]);
    }

    public function editPlaylist($db, $newName, $newVisibility) {
        $stmt = $db->prepare("UPDATE playlists SET name = ?, visibility = ? WHERE id = ?");
        return $stmt->execute([$newName, $newVisibility, $this->id]);
    }

    public function supervisePlaylists($db) {
        $stmt = $db->prepare("SELECT * FROM playlists WHERE user_id = ?");
        $stmt->execute([$this->user_id]);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function viewPublicPlaylists($db) {
        $stmt = $db->query("SELECT * FROM playlists WHERE visibility = 'public'");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function followPlaylist($db, $user_id) {
        $stmt = $db->prepare("INSERT INTO follows (user_id, playlist_id) VALUES (?, ?)");
        return $stmt->execute([$user_id, $this->id]);
    }
}
