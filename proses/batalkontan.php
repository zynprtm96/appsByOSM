<?php
include ('../config/koneksi.php');

$id = $_GET['id'];
$alasan =$_GET['alasan'];
$nonotabt =$_GET['nota'];

 
 $query = mysqli_query($konek, "SELECT * FROM nota_kontan WHERE nonota='$id'"); 
 $data = mysqli_fetch_array($query);
 $nota_ref = $data['nonota'];
 $id_pasien = $data['id_pasien'];
 $nama = $data['nama'];
 $alamat = $data['alamat'];
 $usia = $data['usia'];
 $nohp = $data['nohp'];
 $jumlah_harga = $data['jumlah_harga'];

 $total = $data['total'];
 $mp = $data['mp'];
 $nokartu = $data['nokartu'];
 $trace = $data['trace'];
 $bank = $data['bank'];
 $petugas = $data['petugas'];

 
 $produkkontan = mysqli_query($konek, "SELECT * FROM produk_kontan WHERE nonota='$id'"); 
 while($datak = mysqli_fetch_array($produkkontan)){

 
  $idp = $datak['id'];
  $kode_barang = $datak['kode_barang'];
  $jenis = $datak['jenis'];
  $produk = $datak['produk'];
  $merk = $datak['merk'];
  $detil = $datak['detil'];
  $jumlah = $datak['jumlah'];
  $harga = $datak['harga'];
 

  $master = mysqli_query($konek, "SELECT * FROM master_barang WHERE kode='$kode_barang'"); 
 $datau = mysqli_fetch_array($master);
  $stok = $datau['stok'];
   $akhirstok = $stok + $jumlah;

  $update = mysqli_query($konek, "UPDATE master_barang SET stok='$akhirstok' WHERE kode='$kode_barang'"); 

$produkp = mysqli_query($konek, "SELECT * FROM produk WHERE kode='$kode_barang'");
$datap = mysqli_fetch_array($produkp);
$stokp = $datap['stok'];
$akhirstokp = $stokp - $jumlah;
$updatep = mysqli_query($konek, "UPDATE produk SET stok='$akhirstokp' WHERE kode='$kode_barang'"); 

 }

$omset = mysqli_query($konek,"DELETE FROM omset where nonota='$nota_ref'");
$penjualan = mysqli_query($konek,"DELETE FROM penjualan where nonota='$nota_ref'");


 $notabatalkontan= mysqli_query($konek,"INSERT INTO nota_batalkontan(nonotabt,nota_ref,id_pasien,nama,alamat,usia,nohp,jumlah_harga,total,mp,nokartu,trace,bank,alasan,petugas)values('$nonotabt','$nota_ref','$id_pasien','$nama','$alamat','$usia','$nohp','$jumlah_harga','$total','$mp','$nokartu','$trace','$bank','$alasan','$petugas')");
$notabatalsemua = mysqli_query($konek,"INSERT INTO nota_batalsemua(nonotabt,nota_ref,nama,usia,alamat,nohp,alasan,petugas)values('$nonotabt','$nota_ref','$nama','$usia','$alamat','$nohp','$alasan','$petugas')");

$kontan = mysqli_query($konek,"UPDATE nota_kontan set batal='Y' where nonota='$nota_ref'");
 
if( $kontan ) {
    echo  " 
    
    <script src='../aset/js/sweetalert.min.js'></script>
    <script type='text/javascript'>
  setTimeout(function () {  
   swal({
    title: 'Nota Berhasil Di Dibatalkan',
    text: 'Sukses!',
    icon: 'success',
    button: 'OK!',
    
    timer: 8000,
    showConfirmButton: true
   });  
  },10); 
  window.setTimeout(function(){ 
   window.location.replace('../kar/notabatalkontan.php');
  } ,2000); 
 </script>
   ";
    } else {
        // kalau gagal alihkan ke halaman indek.php dengan status=gagal
        echo  "<script>alert('Data Gagal Diinput');window.location='../kar/notabatal.php'</script>";
    }







 ?>