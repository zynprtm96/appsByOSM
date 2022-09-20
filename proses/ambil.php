<?php
include ('../config/koneksi.php');

$id = $_GET['id'];

 
 $query = mysqli_query($konek, "SELECT * FROM nota_pesan WHERE id=$id");
 $data = mysqli_fetch_array($query);
 $nonota =  $data['nonota'];
 $total =  $data['total'];

 $bayar = $data['sisa'];
 $date = date('y,m,d');

 $omset ="INSERT INTO omset (nonota,pembayaran)Values('$nonota','$total')";
 $omsetmasuk = mysqli_query($konek,$omset);
 $pemasukan = mysqli_query($konek,"INSERT INTO laba(pemasukan)values('$total')");

 $sql = "UPDATE nota_pesan  SET  bayar='$bayar', status='L', barang='D', tanggal_ambil ='$date' WHERE id=$id";
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
   window.location.replace('../kar/cetakambil.php?id=$id');
  } ,2000); 
 </script>
   ";

        
    } else {
        echo  "<script>alert('Barang Gagal Diambil');window.location='../kar/pengambilan.php'</script>";
    
        
    }
?>