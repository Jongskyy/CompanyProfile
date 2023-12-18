<?php
// Sertakan file konfigurasi
include('config.php');

// Ambil ID komentar dari parameter URL
$comment_id = $_GET['id'];

// Hapus komentar dari database
$delete_query = "DELETE FROM contact WHERE id = $comment_id";
mysqli_query($conn, $delete_query);

// Redirect kembali ke halaman halaman_panel.php
header("Location: halaman_panel.php");
exit();
?>
