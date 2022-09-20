<?php

include ('../config/koneksi.php');

$kode = $_POST['kode'];
$jenis = $_POST['jenis'];
$merk = $_POST['merk'];
$produk = $_POST['produk'];
$detil = $_POST['detil'];
$stok = $_POST['stok'];
$harga= str_replace(".", "", $_POST['harga']);

$master = mysqli_query($konek, "INSERT INTO master_barang(kode,jenis,merk,produk,detil,stok,harga)values('$kode','$jenis','$merk','$produk','$detil','$stok','$harga')");


if( $master ) {
    echo  " 
    
    <script src='../aset/js/sweetalert.min.js'></script>
    <script type='text/javascript'>
  setTimeout(function () {  
   swal({
    title: 'Barang Berhasil Di Tambah',
    text: 'Sukses!',
    icon: 'success',
    button: 'OK!',
    
    timer: 8000,
    showConfirmButton: true
   });  
  },10); 
  window.setTimeout(function(){ 
   window.location.replace('../admin/frame.php');
  } ,2000); 
 </script>
   ";
    
    
    
       
       
    } else {
        echo  "<script>alert('Pembayaran Gagal Nota Tidak Diterbitkan');window.location='../kar/notapesan.php'</script>";
     
       
    }

?>