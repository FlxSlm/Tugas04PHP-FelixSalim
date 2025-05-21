<?php
// Include file functions untuk fungsi database
require_once 'functions.php';

// Mendapatkan semua artikel dari database
$articles = getAllArticles();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Blog | Portofolio Saya</title>
  <link rel="stylesheet" href="css/css.css">
  <style>
    .blog-list {
      display: grid;
      grid-template-columns: 1fr;
      gap: 30px;
      margin-top: 20px;
    }
    
    .blog-card {
      background-color: #f9f9f9;
      border-radius: 8px;
      padding: 20px;
      box-shadow: 0 2px 5px rgba(0,0,0,0.1);
    }
    
    .blog-card h2 {
      margin-top: 0;
    }
    
    .read-more {
      display: inline-block;
      margin-top: 10px;
      padding: 8px 15px;
      background-color: #4CAF50;
      color: white;
      text-decoration: none;
      border-radius: 4px;
    }
    
    .read-more:hover {
      background-color: #45a049;
    }
  </style>
</head>
<body>
  <header>
    <h1>Blog</h1>
    <nav>
      <a href="index.php">Home</a>
      <a href="gallery.php">Gallery</a>
      <a href="blog.php">Blog</a>
      <a href="contact.php">Contact</a>
    </nav>
  </header>
  <main>
    <div class="blog-list">
      <?php
      // Menampilkan semua artikel dari database
      if (!empty($articles)) {
          foreach ($articles as $article) {
              echo '<div class="blog-card">';
              echo '<h2>' . $article['title'] . '</h2>';
              echo '<p>' . $article['short_description'] . '</p>';
              echo '<a href="article.php?id=' . $article['id'] . '" class="read-more">Baca Selengkapnya</a>';
              echo '</div>';
          }
      } else {
          echo '<p>Tidak ada artikel yang tersedia.</p>';
      }
      ?>
    </div>
  </main>
  <script src="javascript/javascript.js"></script>
</body>
</html>
