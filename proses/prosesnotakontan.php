<?php

include ('../config/koneksi.php');

$nonota =$_POST['nonota'];
$id_pasien =$_POST['id_pasien'];
$norekam =$_POST['norekam'];
$bank =$_POST['bank'];
$petugas =$_POST['petugas'];
$nama = htmlspecialchars($_POST['nama'], ENT_QUOTES);
$usia = htmlspecialchars($_POST['usia'], ENT_QUOTES);
$nohp = htmlspecialchars($_POST['nohp'], ENT_QUOTES);
$alamat = htmlspecialchars($_POST['alamat'], ENT_QUOTES);
$jumlah_harga= str_replace(".", "", $_POST['jumlah_harga']);
$diskon =$_POST['diskonnk'];
$total= str_replace(".", "", $_POST['total']);
$mp =$_POST['mp'];
$trace =$_POST['trace'];
$nokartu =$_POST['nokartu'];
if($nama==""){
    $nama = "Pelanggan";
}

// masuk ke nota kontan

$sql ="INSERT INTO nota_kontan(nonota, nama, usia, nohp, alamat,  jumlah_harga, diskonnk, total,id_pasien,mp,nokartu,trace,bank,petugas,norekam) VALUES ('$nonota', '$nama', '$usia', '$nohp', '$alamat', '$jumlah_harga', '$diskon', '$total','$id_pasien','$mp','$nokartu','$trace','$bank','$petugas','$norekam')";
 // masuk konsumen
$konsumen = mysqli_query($konek,"SELECT * FROM master_pelanggan WHERE id_pasien='$id_pasien'" );
$data = mysqli_num_rows($konsumen);
if($data == 0) {
    $pelanggan = "INSERT INTO master_pelanggan(nama, usia, alamat, nohp, id_pasien,norekam)VALUES('$nama', '$usia', '$alamat', '$nohp','$id_pasien','$norekam')";
    $pelanggan = mysqli_query($konek,$pelanggan);
}
// masuk omset
$omset = "INSERT INTO omset (nonota,pembayaran)VALUES('$nonota','$total')";
$masukomset = mysqli_query($konek,$omset);
$pemasukan = mysqli_query($konek,"INSERT INTO laba(pemasukan)values('$total')");
//masuk penjualan
$lapjual="INSERT INTO penjualan(nonota,pembayaran)Values('$nonota','$total')";
$masukjual = mysqli_query($konek,$lapjual);

$barang = mysqli_query($konek,"SELECT * FROM produk_kontan WHERE nonota='$nonota'" );
while($gas = mysqli_fetch_array($barang)){
$jenis =$gas['jenis'];
$kode = $gas['kode_barang'];
$produk = $gas['produk'];
$merk = $gas['merk'];
$detil = $gas['detil'];
$jumlah = $gas['jumlah'];


$cekproduk =mysqli_query($konek,"SELECT * FROM produk WHERE kode='$kode'" );
$ow = mysqli_fetch_array($cekproduk);
$ceking = mysqli_num_rows($cekproduk);
if($ceking = 0){
    
    $stok = $ow['stok'];
    $tambah = $stok + $jumlah;
    $upproduk = "UPDATE produk set stok='$tambah' where kode='$kode'";
    $masokproduk = mysqli_query($konek,$upproduk);
}else{
    $lapproduk = "INSERT INTO produk (kode,jenis,merk,produk,detil,stok)VAlUES('$kode','$jenis','$merk','$produk','$detil','$jumlah')";
    $masoklap = mysqli_query($konek,$lapproduk);
}
}



$query = mysqli_query($konek,$sql);


if( $query ) {
    echo  " 
    
    <script src='../aset/js/sweetalert.min.js'></script>
    <script type='text/javascript'>
  setTimeout(function () {  
   swal({
    title: 'Pembayaran Telah Dikonfirmasi',
    text: 'Silahkan Cetak Nota!',
    icon: 'success',
    button: 'OK!',
    
    timer: 8000,
    showConfirmButton: true
   });  
  },10); 
  window.setTimeout(function(){ 
   window.location.replace('../kar/cetaknotakontan.php?nonota=$nonota');
  } ,2000); 
 </script>
   ";
   
    
       
    } else {
        echo  "<script>alert('Pembayaran Gagal Nota Tidak di Terbitkan');window.location='../kar/fnkontan.php'</script>";
     
       
    }



?>