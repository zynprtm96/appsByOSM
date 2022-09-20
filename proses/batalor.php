<?php
include ('../config/koneksi.php');
$id = $_GET['id'];
$alasan =$_GET['alasan'];
$nonotabt =$_GET['nota'];

$query = mysqli_query($konek, "SELECT * FROM order_lab WHERE nonotaor='$id'"); 
 $data = mysqli_fetch_array($query);

$nota_ref = $data['nonotaor'];
$nama = $data['nota_ref'];
$merk_f = $data['merk_f'];
$warna_f = $data['warna_f'];
$jenis_f = $data['jenis_f'];
$merk_lr = $data['merk_lr'];
$jenis_lr = $data['jenis_lr'];
$merk_ll = $data['merk_ll'];
$jenis_ll = $data['jenis_ll'];
$dimensia = $data['dimensia'];
$dimensib = $data['dimensib'];
$ed = $data['ed'];
$dbl = $data['dbl'];
$pv = $data['pv'];
$sh = $data['sh'];
$pt = $data['pt'];
$bvd = $data['bvd'];
$model_f = $data['model_f'];
$sphrsek = $data['sphrsek'];
$cylrsek = $data['cylrsek'];
$axrsek = $data['axrsek'];
$sphlsek = $data['sphlsek'];
$cyllsek = $data['cyllsek'];
$axlsek = $data['axlsek'];
$adisirsek = $data['adisirsek'];
$adisilsek = $data['adisilsek'];
$ucvar = $data['ucvar'];
$bcvar = $data['bcvar'];
$ucval = $data['ucval'];
$bcval = $data['bcval'];
$pdr = $data['pdr'];
$pdl = $data['pdl'];
$pd = $data['pd'];
$pdd = $data['pdd'];
$prisrsek = $data['prisrsek'];
$prislsek = $data['prislsek'];
$basersek = $data['basersek'];
$baselsek = $data['baselsek'];
$ketor = $data['ketor'];
$petugas = $data['petugas'];
$pemeriksa = $data['pemeriksa'];

$notabatal = mysqli_query($konek, "INSERT INTO nota_batalor(nonotabt,nota_ref,merk_f,warna_f,jenis_f,merk_lr,jenis_lr,merk_ll,jenis_ll,dimensia,dimensib,ed,dbl,pv,sh,pt,bvd,model_f,sphrsek,cylrsek,axrsek,prisrsek,basersek,adisirsek,sphlsek,cyllsek,axlsek,prislsek,baselsek,adisilsek,ucvar,bcvar,ucval,bcval,pdr,pdl,pd,pdd,ketor,petugas,pemeriksa,alasan)values('$nonotabt','$nota_ref','$merk_f','$warna_f','$jenis_f','$merk_lr','$jenis_lr','$merk_ll','$jenis_ll','$dimensia','$dimensib','$ed','$dbl','$pv','$sh','$pt','$bvd','$model_f','$sphrsek','$cylrsek','$axrsek','$prisrsek','$basersek','$adisirsek','$sphlsek','$cyllsek','$axlsek','$prislsek','$baselsek','$adisilsek','$ucvar','$bcvar','$ucval','$bcval','$pdr','$pdl','$pd','$pdd','$ketor','$petugas','$pemeriksa','$alasan')");
$notabatalsemua = mysqli_query($konek,"INSERT INTO nota_batalsemua(nonotabt,nota_ref,alasan,petugas)values('$nonotabt','$nota_ref','$alasan','$petugas')");
$update = mysqli_query($konek,"UPDATE order_lab set batal='Y' where nonotaor='$nota_ref'");

    
if( $update ) {
    
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
   window.location.replace('../kar/notabatalor.php');
  } ,2000); 
 </script>
   ";

    } else {
        // kalau gagal alihkan ke halaman indek.php dengan status=gagal
        echo  "<script>alert('Data Gagal Diinput');window.location='../kar/notabatalor.php'</script>";
    }
  


?>