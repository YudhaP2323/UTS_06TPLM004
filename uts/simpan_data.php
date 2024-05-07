<?php
// Koneksi ke database
$host = 'localhost'; // Ganti sesuai host database Anda
$username = 'username_db'; // Ganti dengan username database Anda
$password = 'password_db'; // Ganti dengan password database Anda
$database = 'nama_database'; // Ganti dengan nama database Anda

// Membuat koneksi
$conn = new mysqli($host, $username, $password, $database);

// Memeriksa koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Mengambil data dari form
$nama_negara = $_POST['nama_negara'];
$jumlah_pertandingan = $_POST['jumlah_pertandingan'];
$jumlah_menang = $_POST['jumlah_menang'];
$jumlah_seri = $_POST['jumlah_seri'];
$jumlah_kalah = $_POST['jumlah_kalah'];
$jumlah_poin = $_POST['jumlah_poin'];
$nama_operator = $_POST['nama_operator'];
$nim_mahasiswa = $_POST['nim_mahasiswa'];

// Menyimpan data ke database
$sql = "INSERT INTO Pertandingan (nama_negara, jumlah_pertandingan, jumlah_menang, jumlah_seri, jumlah_kalah, jumlah_poin, nama_operator, nim_mahasiswa) 
        VALUES ('$nama_negara', '$jumlah_pertandingan', '$jumlah_menang', '$jumlah_seri', '$jumlah_kalah', '$jumlah_poin', '$nama_operator', '$nim_mahasiswa')";

if ($conn->query($sql) === TRUE) {
    echo "Data pertandingan berhasil disimpan";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Menutup koneksi database
$conn->close();
?>
