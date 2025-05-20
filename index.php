<?php
// Include file functions untuk fungsi database
require_once 'functions.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Home | Portofolio Saya</title>
  <link rel="stylesheet" href="CSS/css.css">
</head>
<body>

  <header>
    <h1>ProjectPHP</h1>
    <nav>
      <a href="index.php">Home</a>
      <a href="gallery.php">Gallery</a>
      <a href="blog.php">Blog</a>
      <a href="contact.php">Contact</a>
    </nav>
  </header>

  <main>
    <h2>Selamat Datang di Portofolio Saya</h2>
    <p>Perkenalkan, saya Felix Salim, mahasiswa Teknik Informatika UNSRAT yang tertarik dengan dunia ekonomi.</p>

    <section class="portfolio-images">
      <h2>Portofolio Saya</h2>
      <div class="image-grid">
        <figure>
          <img src="images/BullvsBear.jpg" alt="Ilustrasi grafik pasar Bull vs Bear">
          <figcaption>Bull vs Bear</figcaption>
        </figure>
        <figure>
          <img src="images/Financial.jpg" alt="Visualisasi data finansial">
          <figcaption>Financial</figcaption>
        </figure>
        <figure>
          <img src="images/Meditation.jpg" alt="Ilustrasi konsep meditasi dan ketenangan">
          <figcaption>Meditation</figcaption>
        </figure>
      </div>
    </section>

    <?php
    // Mengambil 2 artikel terbaru untuk ditampilkan di halaman utama
    $latestArticles = getAllArticles();
    if (!empty($latestArticles)) {
        echo '<section class="latest-articles">';
        echo '<h2>Artikel Terbaru</h2>';
        echo '<div class="article-preview">';
        
        // Hanya menampilkan 2 artikel terbaru
        $count = 0;
        foreach ($latestArticles as $article) {
            if ($count < 2) {
                echo '<div class="article-card">';
                echo '<h3><a href="article.php?id=' . $article['id'] . '">' . $article['title'] . '</a></h3>';
                echo '<p>' . $article['short_description'] . '</p>';
                echo '<a href="article.php?id=' . $article['id'] . '" class="read-more">Baca Selengkapnya</a>';
                echo '</div>';
                $count++;
            }
        }
        
        echo '</div>';
        echo '</section>';
    }
    ?>
  </main>

  <script src="javascript/javascript.js"></script>
</body>
</html>
