<?php

include ('../config/koneksi.php');
$id =$_POST['id'];
$noresep =$_POST['noresep'];
$norujukan =$_POST['norujukan'];
$id_pasien =$_POST['id_pasien'];
$norekam =$_POST['norekam'];
$nama = htmlspecialchars($_POST['nama'], ENT_QUOTES);
$usia = htmlspecialchars($_POST['usia'], ENT_QUOTES);
$nohp = htmlspecialchars($_POST['nohp'], ENT_QUOTES);
$alamat = htmlspecialchars($_POST['alamat'], ENT_QUOTES);
$dokter = htmlspecialchars($_POST['dokter'], ENT_QUOTES);
$rs = htmlspecialchars($_POST['rs'], ENT_QUOTES);

$rujukan = mysqli_query($konek,"INSERT INTO rujukan(id_pasien,norekam,noresep,norujukan,nama,usia,alamat,nohp,dokter,rs)values('$id_pasien','$norekam','$noresep','$norujukan','$nama','$usia','$alamat','$nohp','$dokter','$rs')");
$update= mysqli_query($konek,"UPDATE rekam_medis set rujukan='Y' where id='$id'");

if( $rujukan ) {
    echo  " 
    
    <script src='../aset/js/sweetalert.min.js'></script>
    <script type='text/javascript'>
  setTimeout(function () {  
   swal({
    title: 'Rujukan Berhasil Terisi',
    text: 'Sukses!',
    icon: 'success',
    button: 'OK!',
    
    timer: 8000,
    showConfirmButton: true
   });  
  },10); 
  window.setTimeout(function(){ 
   window.location.replace('../kar/rujukan.php?id=$id');
  } ,2000); 
 </script>
   ";
    } else {
        echo  "<script>alert('Rekam Medis Gagal Terisi');window.location='../kar/fnrekam.php'</script>";
     
        
        
    }