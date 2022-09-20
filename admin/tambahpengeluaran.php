<?php

include ('../config/koneksi.php');

$produk = $_POST['produk'];
$pengeluaran= str_replace(".", "", $_POST['pengeluaran']);

$master = mysqli_query($konek, "INSERT INTO pengeluaran(produk,pengeluaran)values('$produk','$pengeluaran')");
$pemasukan = mysqli_query($konek,"INSERT INTO laba(pengeluaran)values('$pengeluaran')");


if( $master ) {
    echo  " 
    
    <script src='../aset/js/sweetalert.min.js'></script>
    <script type='text/javascript'>
  setTimeout(function () {  
   swal({
    title: 'Pengeluaran Ditambah',
    text: 'Sukses!',
    icon: 'success',
    button: 'OK!',
    
    timer: 8000,
    showConfirmButton: true
   });  
  },10); 
  window.setTimeout(function(){ 
   window.location.replace('../admin/pengeluaran.php');
  } ,2000); 
 </script>
   ";
    
    
    
       
       
    } else {
        echo  "<script>alert('Pembayaran Gagal Nota Tidak Diterbitkan');window.location='../kar/notapesan.php'</script>";
     
       
    }

?>