<?php

class Song {
    private $id;
    private $title;
    private $artist_id;
    private $file_path;

    public function __construct($id, $title, $artist_id, $file_path) {
        $this->id = $id;
        $this->title = $title;
        $this->artist_id = $artist_id;
        $this->file_path = $file_path;
    }

    public function uploadSong($db) {
        $stmt = $db->prepare("INSERT INTO songs (title, artist_id, file_path) VALUES (?, ?, ?)");
        return $stmt->execute([$this->title, $this->artist_id, $this->file_path]);
    }

    public function deleteSong($db) {
        $stmt = $db->prepare("DELETE FROM songs WHERE id = ?");
        return $stmt->execute([$this->id]);
    }

    public function addSongToPlaylist($db, $playlist_id) {
        $stmt = $db->prepare("INSERT INTO playlist_song (playlist_id, song_id) VALUES (?, ?)");
        return $stmt->execute([$playlist_id, $this->id]);
    }

    public function removeSongFromPlaylist($db, $playlist_id) {
        $stmt = $db->prepare("DELETE FROM playlist_song WHERE playlist_id = ? AND song_id = ?");
        return $stmt->execute([$playlist_id, $this->id]);
    }

    public function likeSong($db, $user_id) {
        $stmt = $db->prepare("INSERT INTO likes (user_id, song_id) VALUES (?, ?)");
        return $stmt->execute([$user_id, $this->id]);
    }

    public function browseSongs($db) {
        $stmt = $db->query("SELECT * FROM songs");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function play() {
        return "Playing song: " . $this->title;
    }

    public function pause() {
        return "Pausing song: " . $this->title;
    }
}
