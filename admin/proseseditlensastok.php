<?php


include ('../config/koneksi.php');
$id = $_POST['id'];
$kode = $_POST['kode_lensa'];
$jenis = $_POST['jenis'];
$merk = $_POST['merk'];
$sph = $_POST['sph'];
$cyl = $_POST['cyl'];
$adisi = $_POST['adisi'];
$stok = $_POST['qyt'];
$harga= str_replace(".", "", $_POST['harga']);
$barang = mysqli_query($konek,"UPDATE master_lensa SET kode_lensa='$kode', jenis='$jenis', merk='$merk', sph='$sph', cyl='$cyl',adisi='$adisi', qyt='$stok', harga='$harga' where id=$id");
  


if( $barang ) {

    echo  " 
    
    <script src='../aset/js/sweetalert.min.js'></script>
    <script type='text/javascript'>
  setTimeout(function () {  
   swal({
    title: 'Barang Berhasil Di Edit',
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
