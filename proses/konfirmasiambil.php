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
 if($bayar!= 0){
    $penjualan ="INSERT INTO penjualan (nonota,pembayaran)Values('$nonota','$bayar')";
    $penjualanmasuk = mysqli_query($konek,$penjualan);
 }


 $sql = "UPDATE nota_pesan  SET  bayar='$bayar', status='L', barang='D', tanggal_ambil ='$date' WHERE id=$id";
 $masuk = mysqli_query($konek,$sql);
if( $masuk ) {
    echo  "<script>alert('Barang Telah Diambil');window.location='../kar/cetakambil.php?id=$id'</script>";
    
        
    } else {
        echo  "<script>alert('Barang Gagal Diambil');window.location='../kar/pengambilan.php'</script>";
    
        
    }
?>