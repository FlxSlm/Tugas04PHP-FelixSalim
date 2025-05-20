<?php
// Include file koneksi
require_once 'config.php';

// Fungsi untuk mendapatkan semua artikel
function getAllArticles() {
    global $conn;
    $query = "SELECT * FROM articles ORDER BY created_at DESC";
    $result = mysqli_query($conn, $query);
    
    $articles = [];
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $articles[] = $row;
        }
    }
    
    return $articles;
}

// Fungsi untuk mendapatkan satu artikel berdasarkan ID
function getArticleById($id) {
    global $conn;
    $id = mysqli_real_escape_string($conn, $id);
    $query = "SELECT * FROM articles WHERE id = $id";
    $result = mysqli_query($conn, $query);
    
    if (mysqli_num_rows($result) > 0) {
        return mysqli_fetch_assoc($result);
    }
    
    return null;
}

// Fungsi untuk menyimpan data kontak
function saveContact($name, $email, $message) {
    global $conn;
    
    $name = mysqli_real_escape_string($conn, $name);
    $email = mysqli_real_escape_string($conn, $email);
    $message = mysqli_real_escape_string($conn, $message);
    
    $query = "INSERT INTO contacts (name, email, message) VALUES ('$name', '$email', '$message')";
    
    if (mysqli_query($conn, $query)) {
        return true;
    }
    
    return false;
}
