<?php
$itemsPage = '../dashboard.php?page=Items';
include '../utils.php';

if (isset($_GET['id'])) {
  include '../koneksi.php';
  $id = $_GET['id'];

  mysqli_query($conn, "DELETE FROM items WHERE id = $id");

  if (mysqli_affected_rows($conn) >= 1) {
    setSuccess("Data berhasil dihapus");
  } else {
    setError("Data gagal dihapus");
  }
}

redirect($itemsPage);
