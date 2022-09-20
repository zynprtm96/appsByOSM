<?php


include ('../config/koneksi.php');
$id = $_POST['id'];
$jumlah = $_POST['jumlah'];
$barang = mysqli_query($konek,"SELECT * FROM master_lensa where id='$id'");
$data = mysqli_fetch_array($barang);
$stok =$data['qyt'] + $jumlah;
$update = mysqli_query($konek,"UPDATE master_lensa set qyt='$stok' where id='$id'");

        
?>