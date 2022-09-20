<?php
include('../config/koneksi.php');
	$id = $_POST['id'];
    $jumlah = $_POST['jumlah'];
    $kode = $_POST['kode'];

    $barang= mysqli_query($konek,"SELECT * from master_barang where kode='$kode'");
    $data = mysqli_fetch_array($barang);
    $stok = $data['stok'];

    $penambahan = $stok + $jumlah;

    $ganti = "UPDATE master_barang SET stok='$penambahan' where kode='$kode' ";
    $masuk = mysqli_query($konek,$ganti);



    $sql = "delete from produk_kontan where id='$id' ";
    $hapus = mysqli_query($konek,$sql);

?>