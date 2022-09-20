<?php
include ('../config/koneksi.php');
$id_pasien = htmlspecialchars($_POST['id_pasien'], ENT_QUOTES);
$norekam = htmlspecialchars($_POST['norekam'], ENT_QUOTES);
$nama = htmlspecialchars($_POST['nama'], ENT_QUOTES);
$alamat = htmlspecialchars($_POST['alamat'], ENT_QUOTES);
$usia = htmlspecialchars($_POST['usia'], ENT_QUOTES);
$nohp = htmlspecialchars($_POST['nohp'], ENT_QUOTES);

$sql = "INSERT INTO master_pelanggan(nama, usia, nohp,alamat,id_pasien,norekam)VALUES('$nama', '$usia', '$nohp','$alamat','$id_pasien','$norekam')";
$query = mysqli_query($konek,$sql);


if( $query ) {
    echo  " 
    
    <script src='../aset/js/sweetalert.min.js'></script>
    <script type='text/javascript'>
  setTimeout(function () {  
   swal({
    title: 'Pelanggan Berhasil Ditambahkan',
    text: 'Sukses!',
    icon: 'success',
    button: 'OK!',
    
    timer: 8000,
    showConfirmButton: true
   });  
  },10); 
  window.setTimeout(function(){ 
   window.location.replace('../admin/pelanggan.php');
  } ,2000); 
 </script>
   ";
    } else {
        echo  "<script>alert('Pelanggan Gagal Ditambahkan');window.location='../admin/pelanggan.php'</script>";
       
       
    }



?>