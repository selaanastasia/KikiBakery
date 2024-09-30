<?php
include 'koneksi.php';

if (isset ($_GET['id'])){
$id = $_GET['id'];
$query = mysqli_query($koneksi, "DELETE FROM produk WHERE id='$id'");
if ($query) {
    header('Location: dashboard.php#table');
}else{
   die("gagal menghapus...");
}
}


include 'koneksi.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Konfirmasi penghapusan menggunakan JavaScript
    echo "<script>
    if (confirm('Apakah Anda yakin ingin menghapus data ini?')) {
        window.location.href = 'hapus.php?confirm=yes&id=$id';
    } else {
        window.location.href = 'index.php';
    }
    </script>";
}

// Eksekusi penghapusan setelah konfirmasi
if (isset($_GET['confirm']) && $_GET['confirm'] == 'yes') {
    $id = $_GET['id'];
    $query = mysqli_query($koneksi, "DELETE FROM produk WHERE id='$id'");
    if ($query) {
        header('Location: dashboard.php#table');
    } else {
        die("Gagal menghapus...");
    }
}
?>

