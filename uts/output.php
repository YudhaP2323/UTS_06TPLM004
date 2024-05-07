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

// Query untuk mengambil data pertandingan
$sql = "SELECT * FROM Pertandingan";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Menampilkan header output
    echo "Data Group A Piala Asia Qatar U-23<br>";
    echo "Per " . date('d M Y H:i:s') . " (Waktu dan Jam Sekarang)<br>";
    echo "Nama Operator/NIM<br>";
    echo "Negara P M S K Poin<br>";

    // Menampilkan data pertandingan
    $counter = 1;
    while ($row = $result->fetch_assoc()) {
        echo $counter . ". " . $row['nama_negara'] . " " . $row['jumlah_pertandingan'] . " " . $row['jumlah_menang'] . " " . $row['jumlah_seri'] . " " . $row['jumlah_kalah'] . " " . $row['jumlah_poin'] . "<br>";
        $counter++;
    }
} else {
    echo "Belum ada data pertandingan.";
}

// Menutup koneksi database
$conn->close();
?>
