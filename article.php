<?php
// Include file functions untuk fungsi database
require_once 'functions.php';

// Mengambil ID artikel dari parameter URL
$article_id = isset($_GET['id']) ? $_GET['id'] : 0;
$article = getArticleById($article_id);

// Jika artikel tidak ditemukan, redirect ke halaman blog
if (!$article) {
    header("Location: blog.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title><?php echo $article['title']; ?> | Portofolio Saya</title>
  <link rel="stylesheet" href="css/css.css">
  <style>
    .article-container {
      max-width: 800px;
      margin: 0 auto;
    }
    
    .article-header {
      margin-bottom: 20px;
    }
    
    .article-header h1 {
      margin-bottom: 10px;
    }
    
    .article-date {
      color: #666;
      font-style: italic;
    }
    
    .article-image {
      margin-bottom: 20px;
    }
    
    .article-image img {
      max-width: 100%;
      border-radius: 8px;
    }
    
    .article-content {
      line-height: 1.6;
    }
    
    .back-to-blog {
      display: inline-block;
      margin-top: 20px;
      padding: 8px 15px;
      background-color: #4CAF50;
      color: white;
      text-decoration: none;
      border-radius: 4px;
    }
    
    .back-to-blog:hover {
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
    <div class="article-container">
      <div class="article-header">
        <h1><?php echo $article['title']; ?></h1>
        <p class="article-date">Dipublikasikan pada: <?php echo date('d F Y', strtotime($article['created_at'])); ?></p>
      </div>
      
      <?php if (!empty($article['image'])): ?>
      <div class="article-image">
        <img src="images/<?php echo $article['image']; ?>" alt="<?php echo $article['title']; ?>">
      </div>
      <?php endif; ?>
      
      <div class="article-content">
        <?php echo $article['content']; ?>
      </div>
      
      <a href="blog.php" class="back-to-blog">Kembali ke Blog</a>
    </div>
  </main>
  <script src="javascript/javascript.js"></script>
</body>
</html>
