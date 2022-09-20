<?php

include ('../config/koneksi.php');

$nonota =$_POST['nonotagr'];
$nota_ref =$_POST['nota_ref'];

$id_pasien =$_POST['id_pasien'];
$kode_lensaod =$_POST['kode_lensaod'];
$kode_lensaos =$_POST['kode_lensaos'];
$kode_f =$_POST['kode_f'];



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
$catatan= str_replace(".", "", $_POST['catatan']);
$mp= str_replace(".", "", $_POST['mp']);
$nokartu= str_replace(".", "", $_POST['nokartu']);
$trace= str_replace(".", "", $_POST['trace']);

if($kode_lensaod == $kode_lensaos){
    $barang = mysqli_query($konek,"SELECT * FROM master_lensa WHERE kode_lensa = '$kode_lensaod'" );
    $data = mysqli_fetch_array($barang);
    $lensa =  $data['qyt'] - 2;
    $id = $data['id']; 
    $update = "UPDATE master_lensa SET qyt ='$lensa' where kode_lensa = '$kode_lensaod' ";
    $up =mysqli_query($konek,$update);


    $lappl = mysqli_query($konek,"SELECT * FROM produk WHERE merk = '$merk_lr' and produk='$jenis_lr'" );
    $lappp = mysqli_fetch_array($lappl);
    
    $ceklappl = mysqli_num_rows($lappl);
    
if($ceklappl == 0){
    $stokl = 2;
$masuklappl = mysqli_query($konek,"INSERT INTO produk(kode,jenis,produk,detil,merk,stok)values('','LENSA','$jenis_lr','','$merk_lr','$stokl')");
}
else{
    $stokl = $lappp['stok'] + 2;
     $masuklappl= mysqli_query($konek,"UPDATE produk set stok='$stokl' where merk='$merk_lr' and produk='$jenis_lr'");
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

    $lappl = mysqli_query($konek,"SELECT * FROM produk WHERE merk = '$merk_lr' and produk='$jenis_lr'" );
    $lappp = mysqli_fetch_array($lappl);
    
    $ceklappl = mysqli_num_rows($lappl);
   
if($ceklappl == 0){
    $stokl = 1;
$masuklappl = mysqli_query($konek,"INSERT INTO produk(kode,jenis,produk,detil,merk,stok)values('','LENSA','$jenis_lr','','$merk_lr','$stokl')");
}
else{
    $stokl = $lappp['stok'] + 1;
     $masuklappl= mysqli_query($konek,"UPDATE produk set stok='$stokl' where merk='$merk_lr' and produk='$jenis_lr'");
}
    

    $lappl2 = mysqli_query($konek,"SELECT * FROM produk WHERE merk = '$merk_ll' and produk='$jenis_ll'" );
    $lappp2 = mysqli_fetch_array($lappl2);
   
    
$ceklappl2 = mysqli_num_rows($lappl2);
if($ceklappl2 == 0){
    $stokl2= 1;
$masuklappl2 = mysqli_query($konek,"INSERT INTO produk(kode,jenis,produk,detil,merk,stok)values('','LENSA','$jenis_ll','','$merk_ll','$stokl2')");
}
else{
    $stokl2 = $lappp2['stok'] + 1;
     $masuklappl2= mysqli_query($konek,"UPDATE produk set stok='$stokl2' where merk='$merk_ll' and produk='$jenis_ll'");
}

 
}

$garansi = mysqli_query($konek,"INSERT INTO nota_garansi(nonotagr,nota_ref,id_pasien,nama,alamat,usia,nohp,merk_f,warna_f,detil_f,harga_f,merk_lr,jenis_lr,harga_lr,merk_ll,jenis_ll,harga_ll,jumlah_harga,diskon,total,barang,kode_f,kode_lr,kode_ll)values('$nonota','$nota_ref','$id_pasien','$nama','$alamat','$usia','$nohp','$merk_f','$warna_f','$detil_f','$harga_f','$merk_lr','$jenis_lr','$harga_lr','$merk_ll','$jenis_ll','$harga_ll','$jumlah_harga','$diskon','$total','BD','$kode_f','$kode_lensaod','$kode_lensaos')");

$pesan =mysqli_query($konek,"SELECT * from nota_pesan where nonota='$nota_ref'");
$data=mysqli_fetch_array($pesan);
$update = mysqli_query($konek,"UPDATE nota_pesan set garansi='G' where nonota='$nota_ref'");

if( $update ) {
    echo  " 
    
    <script src='../aset/js/sweetalert.min.js'></script>
    <script type='text/javascript'>
  setTimeout(function () {  
   swal({
    title: 'Data Disimpan',
    text: 'Sukses!',
    icon: 'success',
    button: 'OK!',
    
    timer: 8000,
    showConfirmButton: true
   });  
  },10); 
  window.setTimeout(function(){ 
   window.location.replace('../kar/cetakgaransi.php?id=$nonota');
  } ,2000); 
 </script>
   ";
   
    
    } else {
        echo  "<script>alert('Lensa gagal Di Oreder');window.location='../kar/fnor.php'</script>";
     
       
    }


?>