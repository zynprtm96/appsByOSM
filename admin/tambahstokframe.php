<?php


include ('../config/koneksi.php');
$id = $_POST['id'];
$jumlah = $_POST['jumlah'];
$barang = mysqli_query($konek,"SELECT * FROM master_barang where id='$id'");

$data = mysqli_fetch_array($barang);
$stok =$data['stok'] + $jumlah;
$update = mysqli_query($konek,"UPDATE master_barang set stok='$stok' where id='$id'");

        
?>
