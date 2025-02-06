<?php
$host = 'localhost';  
$port = '5432';       
$dbname = 'Spotify';
$user = 'postgres';
$password = 'password';

try {
    
    $db = new PDO("pgsql:host=$host;port=$port;dbname=$dbname", $user, $password);

    echo "Successfully connected to the database.";
} catch (PDOException $e) {
    die("Database connection failed: " . $e->getMessage());
}
?>