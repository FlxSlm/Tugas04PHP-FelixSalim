<?php
// Include file functions untuk fungsi database
require_once 'functions.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Gallery | Portofolio Saya</title>
  <link rel="stylesheet" href="CSS/css.css">
</head>
<body>
  <header>
    <h1>Gallery</h1>
    <nav>
      <a href="index.php">Home</a>
      <a href="gallery.php">Gallery</a>
      <a href="blog.php">Blog</a>
      <a href="contact.php">Contact</a>
    </nav>
  </header>
  <main>
    <div class="horizontal-gallery">
      <figure>
        <img src="images/Image1.jpg" alt="Image 1">
        <figcaption>Image 1</figcaption>
      </figure>
      <figure>
        <img src="images/Bullrun.jpg" alt="Bullrun">
        <figcaption>Bullrun</figcaption>
      </figure>
      <figure>
        <img src="images/Image2.jpg" alt="Image 2">
        <figcaption>Image 2</figcaption>
      </figure>
    </div>
    
    <?php
    // PHP dapat digunakan untuk membuat galeri dinamis di masa depan
    // Misalnya, mengambil gambar dari database atau folder tertentu
    /*
    $imageFolder = "images/";
    $images = glob($imageFolder . "*.{jpg,jpeg,png,gif}", GLOB_BRACE);
    
    echo '<div class="dynamic-gallery">';
    echo '<h2>Dynamic Gallery</h2>';
    echo '<div class="horizontal-gallery">';
    
    foreach ($images as $image) {
        $filename = basename($image);
        $title = pathinfo($filename, PATHINFO_FILENAME);
        
        echo '<figure>';
        echo '<img src="' . $image . '" alt="' . $title . '">';
        echo '<figcaption>' . $title . '</figcaption>';
        echo '</figure>';
    }
    
    echo '</div>';
    echo '</div>';
    */
    ?>
  </main>
  <script src="javascript/javascript.js"></script>
</body>
</html>
