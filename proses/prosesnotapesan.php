<link rel="stylesheet" href="../aset/css/dialog.css" />
<script src="../aset/js/dialog.js"></script>
<?php

include ('../config/koneksi.php');

$nonota =$_POST['nonota'];
$norekam =$_POST['norekam'];
$id_pasien =$_POST['id_pasien'];
$norekam =$_POST['norekam'];
$kode_f =$_POST['kode_f'];
$bank =$_POST['bank'];
$petugas =$_POST['petugas'];
$pemeriksa =$_POST['pemeriksa'];
$kode_lensaod =$_POST['kode_lensaod'];
$kode_lensaos =$_POST['kode_lensaos'];

$nama = htmlspecialchars($_POST['nama'], ENT_QUOTES);
$usia = htmlspecialchars($_POST['usia'], ENT_QUOTES);
$nohp = htmlspecialchars($_POST['nohp'], ENT_QUOTES);
$alamat = htmlspecialchars($_POST['alamat'], ENT_QUOTES);
$merk_f = htmlspecialchars($_POST['merk_f'], ENT_QUOTES);
$warna_f = htmlspecialchars($_POST['warna_f'], ENT_QUOTES);
$detil_f = htmlspecialchars($_POST['detil_f'], ENT_QUOTES);
$harga_f= str_replace(".", "", $_POST['harga_f']);
$merk_lr = htmlspecialchars($_POST['merk_lr'], ENT_QUOTES);
$jenis_lr = htmlspecialchars($_POST['jenis_lr'], ENT_QUOTES);
$harga_lr= str_replace(".", "", $_POST['harga_lr']);
$merk_ll = htmlspecialchars($_POST['merk_ll'], ENT_QUOTES);
$jenis_ll = htmlspecialchars($_POST['jenis_ll'], ENT_QUOTES);
$harga_ll= str_replace(".", "", $_POST['harga_ll']);
$jumlah_harga= str_replace(".", "", $_POST['jumlah_harga']);
$diskon = htmlspecialchars($_POST['diskon'], ENT_QUOTES);
$total= str_replace(".", "", $_POST['total']);
$uang_muka= str_replace(".", "", $_POST['uang_muka']);
$sisa= str_replace(".", "", $_POST['sisa']);
$catatan= str_replace(".", "", $_POST['catatan']);
$mp= str_replace(".", "", $_POST['mp']);
$nokartu= str_replace(".", "", $_POST['nokartu']);
$trace= str_replace(".", "", $_POST['trace']);
$subhargalensa= str_replace(".", "", $_POST['subhargalensa']);

if($sisa == 0){
    $status = "L";
    $omset = "INSERT INTO omset (nonota,pembayaran)VALUES('$nonota','$total')";
    $masukomset = mysqli_query($konek,$omset);
    $pemasukan = mysqli_query($konek,"INSERT INTO laba(pemasukan)values('$total')");
   $penjualan = $total;
}else{
    $status = "BL";
    $penjualan = $uang_muka;
}
if($kode_lensaod == $kode_lensaos){
    $barang = mysqli_query($konek,"SELECT * FROM master_lensa WHERE kode_lensa = '$kode_lensaod'" );
    $data = mysqli_fetch_array($barang);
    $lensa =  $data['qyt'] - 2;
    $id = $data['id']; 
    $update = "UPDATE master_lensa SET qyt ='$lensa' where kode_lensa = '$kode_lensaod' ";
    $up =mysqli_query($konek,$update);


    $lappl = mysqli_query($konek,"SELECT * FROM produk WHERE kode = '$kode_lensaod' " );
    $lappp = mysqli_fetch_array($lappl);
    
    $ceklappl = mysqli_num_rows($lappl);
    
if($ceklappl == 0){
    $stokl = 2;
$masuklappl = mysqli_query($konek,"INSERT INTO produk(kode,jenis,produk,detil,merk,stok)values('$kode_lensaod','LENSA','$jenis_lr','','$merk_lr','$stokl')");
}
else{
    $stokl = $lappp['stok'] + 2;
     $masuklappl= mysqli_query($konek,"UPDATE produk set stok='$stokl' where kode='$kode_lensaod'");
}
    
    
       
}elseif($kode_lensaod != $kode_lensaos){
    $barang = mysqli_query($konek,"SELECT * FROM master_lensa WHERE kode_lensa = '$kode_lensaod'" );
    $data = mysqli_fetch_array($barang);
    $lensa =  $data['qyt'] - 1;
    $id = $data['id']; 
    $update = "UPDATE master_lensa SET qyt ='$lensa' where kode_lensa = '$kode_lensaod' ";
    $up =mysqli_query($konek,$update);
    $barang1 = mysqli_query($konek,"SELECT * FROM master_lensa WHERE kode_lensa = '$kode_lensaos'" );
    $data1 = mysqli_fetch_array($barang1);
    $lensa1 =  $data1['qyt'] - 1;
    $id1 = $data1['id']; 
    $update1 = "UPDATE master_lensa SET qyt ='$lensa1' where kode_lensa = '$kode_lensaos' ";
    $up1 =mysqli_query($konek,$update1);

    $lappl = mysqli_query($konek,"SELECT * FROM produk WHERE kode = '$kode_lensaod'" );
    $lappp = mysqli_fetch_array($lappl);
    
    $ceklappl = mysqli_num_rows($lappl);
   
if($ceklappl == 0){
    $stokl = 1;
$masuklappl = mysqli_query($konek,"INSERT INTO produk(kode,jenis,produk,detil,merk,stok)values('$kode_lensaod','LENSA','$jenis_lr','','$merk_lr','$stokl')");
}
else{
    $stokl = $lappp['stok'] + 1;
     $masuklappl= mysqli_query($konek,"UPDATE produk set stok='$stokl' where kode='$kode_lensaod'");
}
    

    $lappl2 = mysqli_query($konek,"SELECT * FROM produk WHERE kode ='$kode_lensaos'" );
    $lappp2 = mysqli_fetch_array($lappl2);
   
    
$ceklappl2 = mysqli_num_rows($lappl2);
if($ceklappl2 == 0){
    $stokl2= 1;
$masuklappl2 = mysqli_query($konek,"INSERT INTO produk(kode,jenis,produk,detil,merk,stok)values('$kode_lensaos','LENSA','$jenis_ll','','$merk_ll','$stokl2')");
}
else{
    $stokl2 = $lappp2['stok'] + 1;
     $masuklappl2= mysqli_query($konek,"UPDATE produk set stok='$stokl2' where kode='$kode_lensaos'");
}

 
}






$lapjual="INSERT INTO penjualan(nonota,pembayaran)Values('$nonota','$penjualan')";
$masukjual = mysqli_query($konek,$lapjual);

$sql = "INSERT INTO nota_pesan (nonota,  nama, usia, nohp, alamat,  merk_f, warna_f, detil_f, harga_f, merk_lr, jenis_lr, harga_lr, merk_ll, jenis_ll, harga_ll, jumlah_harga, diskon, total, uang_muka, sisa, status, barang,catatan,mp,nokartu,trace,id_pasien,bank,petugas,pemeriksa,norekam,subhargalensa,kode_lr,kode_ll,kode_f ) VALUES ('$nonota', '$nama', '$usia', '$nohp', '$alamat',  '$merk_f', '$warna_f', '$detil_f', '$harga_f', '$merk_lr', '$jenis_lr', '$harga_lr','$merk_ll', '$jenis_ll', '$harga_ll', '$jumlah_harga', '$diskon', '$total', '$uang_muka', '$sisa', '$status', 'BD','$catatan','$mp','$nokartu','$trace','$id_pasien','$bank','$petugas','$pemeriksa','$norekam','$subhargalensa','$kode_lensaod','$kode_lensaos','$kode_f')";

$konsumen = mysqli_query($konek,"SELECT * FROM master_pelanggan WHERE id_pasien='$id_pasien'" );
$data = mysqli_num_rows($konsumen);
if($data == 0) {
    $pelanggan = "INSERT INTO master_pelanggan(nama, usia, alamat, nohp, id_pasien,norekam)VALUES('$nama', '$usia', '$alamat', '$nohp', '$id_pasien', '$norekam')";
    $pelanggan = mysqli_query($konek,$pelanggan);
}
$jenisf ="FRAME";
$produk = mysqli_query($konek,"SELECT * FROM produk where kode='$kode_f'"  );

$kuanti = mysqli_fetch_array($produk);
$data_produk = mysqli_num_rows($produk);

if($data_produk == 0){
    
$masuk_produk = "INSERT INTO produk (kode,jenis,produk,detil,merk,stok)VALUES('$kode_f','$jenisf','$warna_f','$detil_f','$merk_f','1')";
$proses_produk = mysqli_query($konek,$masuk_produk);
}elseif($data_produk > 0){
    $kuantiti = $kuanti['stok'] + 1;
    $masuk_produk = "UPDATE produk SET stok='$kuantiti' where kode='$kode_f'";
    $proses_produk = mysqli_query($konek,$masuk_produk);
    }
    $masterbarang = mysqli_query($konek,"SELECT * FROM master_barang WHERE kode='$kode_f'");
    $stokp = mysqli_fetch_array($masterbarang);
    $jmlhstok = $stokp['stok']  ;
    $kurang = 1 ;
    $akhir = $jmlhstok - $kurang ; 
    $updatestok = "UPDATE master_barang SET stok='$akhir' WHERE kode='$kode_f'";
    $updatedong =mysqli_query($konek,$updatestok);





$query = mysqli_query($konek,$sql);


if( $query ) {
    echo  " 
    
    <script src='../aset/js/sweetalert.min.js'></script>
    <script type='text/javascript'>
  setTimeout(function () {  
   swal({
    title: 'Pembayaran Dikonfirmasi',
    text: 'Silahkan Cetak Nota!',
    icon: 'success',
    button: 'OK!',
    
    timer: 8000,
    showConfirmButton: true
   });  
  },10); 
  window.setTimeout(function(){ 
   window.location.replace('../kar/cetaknotapesan.php');
  } ,2000); 
 </script>
   ";
     
    
    
       
       
    } else {
        echo  "<script>alert('Pembayaran Gagal Nota Tidak Diterbitkan');window.location='../kar/notapesan.php'</script>";
     
       
    }


?>