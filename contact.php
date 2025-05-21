<?php
// Include file functions untuk fungsi database
require_once 'functions.php';

// Memproses pengiriman formulir kontak
$message = '';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = isset($_POST['name']) ? $_POST['name'] : '';
    $email = isset($_POST['email']) ? $_POST['email'] : '';
    $userMessage = isset($_POST['message']) ? $_POST['message'] : '';
    
    if (!empty($name) && !empty($email) && !empty($userMessage)) {
        // Simpan kontak ke database
        $result = saveContact($name, $email, $userMessage);
        
        if ($result) {
            $message = '<div class="success-message">Terima kasih! Pesan Anda telah dikirim.</div>';
        } else {
            $message = '<div class="error-message">Maaf, terjadi kesalahan. Silakan coba lagi.</div>';
        }
    } else {
        $message = '<div class="error-message">Semua bidang wajib diisi.</div>';
    }
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Contact</title>
  <link rel="stylesheet" href="css/css.css">
  <style>
    form {
      max-width: 500px;
      margin: 20px auto;
    }
    label {
      display: block;
      margin-top: 10px;
      font-weight: bold;
    }
    input, textarea {
      width: 100%;
      padding: 8px;
      margin-top: 5px;
      border: 1px solid #ccc;
      border-radius: 4px;
    }
    button {
      margin-top: 15px;
      padding: 10px 20px;
      background-color: #4CAF50;
      color: white;
      border: none;
      border-radius: 4px;
      cursor: pointer;
    }
    button:hover {
      background-color: #45a049;
    }
    .info-kontak {
      max-width: 500px;
      margin: 0 auto;
      background: #f9f9f9;
      padding: 15px;
      border-radius: 6px;
      box-shadow: 0 0 8px rgba(0,0,0,0.1);
    }
    .info-kontak h2 {
      margin-top: 0;
    }
    .success-message {
      background-color: #dff0d8;
      color: #3c763d;
      padding: 10px;
      margin: 20px auto;
      max-width: 500px;
      border-radius: 4px;
      text-align: center;
    }
    .error-message {
      background-color: #f2dede;
      color: #a94442;
      padding: 10px;
      margin: 20px auto;
      max-width: 500px;
      border-radius: 4px;
      text-align: center;
    }
  </style>
</head>
<body>
  <header>
    <h1>Contact</h1>
    <nav>
      <a href="index.php">Home</a>
      <a href="gallery.php">Gallery</a>
      <a href="blog.php">Blog</a>
      <a href="contact.php">Contact</a>
    </nav>
  </header>
  <main>
    <?php echo $message; ?>
    
    <div class="info-kontak">
      <h2>Informasi Kontak</h2>
      <p><strong>Nomor:</strong> (+62) 85231189584</p>
      <p><strong>Email:</strong> felixsalim026@student.unsrat.ac.id</p>
      <p><strong>Lokasi:</strong> Manado, North Sulawesi</p>
    </div>
    
    <form id="contact-form" action="contact.php" method="post">
      <h2>Hubungi Saya</h2>
      <label for="name">Nama:</label>
      <input type="text" id="name" name="name" required>
      
      <label for="email">Email:</label>
      <input type="email" id="email" name="email" required>
      
      <label for="message">Pesan:</label>
      <textarea id="message" name="message" rows="6" required></textarea>
      
      <button type="submit">Kirim</button>
    </form>
    
    <div id="response"></div>
  </main>
  <script src="javascript/javascript.js"></script>
</body>
</html>
