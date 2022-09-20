<?php


include ('../config/koneksi.php');
$id = $_POST['id'];
$kode = $_POST['kode'];
$jenis = $_POST['jenis'];
$merk = $_POST['merk'];
$produk = $_POST['produk'];
$detil = $_POST['detil'];
$stok = $_POST['stok'];
$harga= str_replace(".", "", $_POST['harga']);
$barang = mysqli_query($konek,"UPDATE master_barang SET kode='$kode', jenis='$jenis', merk='$merk', produk='$produk', detil='$detil', stok='$stok', harga='$harga' where id=$id");
  


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
   window.location.replace('../admin/frame.php');
  } ,2000); 
 </script>
   ";
    
    
    
       
       
    } else {
        echo  "<script>alert('Pembayaran Gagal Nota Tidak Diterbitkan');window.location='../kar/notapesan.php'</script>";
     
       
    }

?>
