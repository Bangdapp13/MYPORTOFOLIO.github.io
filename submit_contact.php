<style>
    .hero {
        background-image: url('image/bg.png');
        background-size: cover;
        background-position: center;
        padding: 100px 0;
        text-align: center;
        height: 65vh;
        display: flex;
        justify-content: center;
        align-items: center;
      }
      .text-header {
        letter-spacing: 1px;
        text-transform: uppercase;
        color: #FF821C;
        font-size: 40px;
      }
      button {
        background-color: #258FCE;
        color: #fff;
        outline: none;
        width: 300px;
        height: 50px;
        padding: 5px 10px;
        border: none;
        border-radius: 25px;
      }
      a {
        text-decoration:none;
        color:white;
        font-size: 1.2rem;
      }
</style>
<?php
$servername = "localhost";
$username = "root"; // ganti dengan username database Anda
$password = ""; // ganti dengan password database Anda
$dbname = "contact_db"; // ganti dengan nama database Anda

// Membuat koneksi ke database
$conn = new mysqli($servername, $username, $password, $dbname);

// Memeriksa koneksi
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Mendapatkan data dari formulir
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

// Menyiapkan pernyataan SQL untuk menyimpan data ke tabel kontak
$sql = "INSERT INTO contacts (name, email, message) VALUES ('$name', '$email', '$message')";

if ($conn->query($sql) === TRUE) {
    echo '<div class="hero"><h1 class="text-header">TERIMAKASIH ATAS SARNNYA<br><br><a href="index.html"><button>Kembali</button></a></h1></div>';
    
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Menutup koneksi
$conn->close();
?>
