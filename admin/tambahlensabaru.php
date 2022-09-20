<?php

include ('../config/koneksi.php');

$kode_lensa = $_POST['kode_lensa'];
$jenis = $_POST['jenis'];
$merk = $_POST['merk'];
$sph = $_POST['sph'];
$cyl = $_POST['cyl'];
$adisi = $_POST['adisi'];
$kategori = $_POST['kategori'];
$qyt = $_POST['qyt'];
$harga= str_replace(".", "", $_POST['harga']);

$master = mysqli_query($konek, "INSERT INTO master_lensa(kode_lensa,jenis,merk,sph,cyl,adisi,kategori,qyt,harga)values('$kode_lensa','$jenis','$merk','$sph','$cyl','$adisi','$kategori','$qyt','$harga')");


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
   window.location.replace('../admin/lensastok.php');
  } ,2000); 
 </script>
   ";
    
    
    
       
       
    } else {
        echo  "<script>alert('Pembayaran Gagal Nota Tidak Diterbitkan');window.location='../kar/notapesan.php'</script>";
     
       
    }

?>