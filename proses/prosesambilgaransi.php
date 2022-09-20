<?php
include ('../config/koneksi.php');

$id = $_GET['id'];

 
 $query = mysqli_query($konek, "SELECT * FROM nota_garansi WHERE nonotagr='$id'");
 $data = mysqli_fetch_array($query);
 
 $date = date('y,m,d');

 


 $sql = "UPDATE nota_garansi  SET   barang='D', tanggal_ambil ='$date' WHERE nonotagr='$id'";
 $masuk = mysqli_query($konek,$sql);
if( $masuk ) {
    echo  " 
    
    <script src='../aset/js/sweetalert.min.js'></script>
    <script type='text/javascript'>
  setTimeout(function () {  
   swal({
    title: 'Barang Telah Diambil',
    text: 'Sukses!',
    icon: 'success',
    button: 'OK!',
    
    timer: 8000,
    showConfirmButton: true
   });  
  },10); 
  window.setTimeout(function(){ 
   window.location.replace('../kar/cetakambilgaransi.php?id=$id');
  } ,2000); 
 </script>
   ";
        
    } else {
        echo  "<script>alert('Barang Gagal Diambil');window.location='../kar/pengambilan.php'</script>";
    
        
    }
?>