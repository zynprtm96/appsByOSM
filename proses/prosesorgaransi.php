<?php
session_start();


include ('../config/koneksi.php');

$nonotaor = $_POST['nonota'];
$nota_ref = $_POST['nota_ref'];

$merk_f = htmlspecialchars($_POST['merk_f'], ENT_QUOTES);
$detil_f = htmlspecialchars($_POST['jenis_f'], ENT_QUOTES);
$warna_f = htmlspecialchars($_POST['warna_f'], ENT_QUOTES);
$dimensia = htmlspecialchars($_POST['dimensia'], ENT_QUOTES);
$dimensib = htmlspecialchars($_POST['dimensib'], ENT_QUOTES);
$ed = htmlspecialchars($_POST['ed'], ENT_QUOTES);
$dbl = htmlspecialchars($_POST['dbl'], ENT_QUOTES);
$pv = htmlspecialchars($_POST['pv'], ENT_QUOTES);
$sh = htmlspecialchars($_POST['sh'], ENT_QUOTES);
$pt = htmlspecialchars($_POST['pt'], ENT_QUOTES);
$bvd = htmlspecialchars($_POST['bvd'], ENT_QUOTES);
$model_f = htmlspecialchars($_POST['model_f'], ENT_QUOTES);
$sphrsek = htmlspecialchars($_POST['sphrsek'], ENT_QUOTES);
$cylrsek = htmlspecialchars($_POST['cylrsek'], ENT_QUOTES);
$axrsek = htmlspecialchars($_POST['axrsek'], ENT_QUOTES);
$sphlsek = htmlspecialchars($_POST['sphlsek'], ENT_QUOTES);
$cyllsek = htmlspecialchars($_POST['cyllsek'], ENT_QUOTES);
$axlsek = htmlspecialchars($_POST['axlsek'], ENT_QUOTES);
$adisirsek = htmlspecialchars($_POST['adisirsek'], ENT_QUOTES);
$adisilsek = htmlspecialchars($_POST['adisilsek'], ENT_QUOTES);
$prisrsek = htmlspecialchars($_POST['prisrsek'], ENT_QUOTES);
$prislsek = htmlspecialchars($_POST['prislsek'], ENT_QUOTES);
$basersek = htmlspecialchars($_POST['basersek'], ENT_QUOTES);
$baselsek = htmlspecialchars($_POST['baselsek'], ENT_QUOTES);
$ucvar = htmlspecialchars($_POST['ucvar'], ENT_QUOTES);
$bcvar = htmlspecialchars($_POST['bcvar'], ENT_QUOTES);
$ucval = htmlspecialchars($_POST['ucval'], ENT_QUOTES);
$bcval = htmlspecialchars($_POST['bcval'], ENT_QUOTES);
$pdr = htmlspecialchars($_POST['pdr'], ENT_QUOTES);
$pdl = htmlspecialchars($_POST['pdl'], ENT_QUOTES);
$pd = htmlspecialchars($_POST['pd'], ENT_QUOTES);
$pdd = htmlspecialchars($_POST['pdd'], ENT_QUOTES);
$ketor = htmlspecialchars($_POST['ketor'], ENT_QUOTES);
$id = $_POST['id'];

$sql = "INSERT INTO order_lab(dimensia, dimensib, ed, dbl, pv, sh, pt, bvd, model_f, sphrsek, cylrsek, axrsek, sphlsek, cyllsek, axlsek, adisirsek, adisilsek, prisrsek, prislsek, basersek, baselsek, pdr, pdl, pd, pdd,nonotaor,nota_ref,merk_f,jenis_f,warna_f, ucvar, bcvar, ucval, bcval )VALUES('$dimensia','$dimensib','$ed', '$dbl', '$pv','$sh','$pt', '$bvd', '$model_f', '$sphrsek', '$cylrsek', '$axrsek','$sphlsek','$cyllsek', '$axlsek','$adisirsek','$adisilsek', '$prisrsek','$prislsek','$basersek','$baselsek', '$pdr','$pdl','$pd','$pdd','$nonotaor','$nota_ref','$merk_f','$detil_f','$warna_f', '$ucvar', '$bcvar', '$ucval', '$bcval' )";
$stat = "UPDATE nota_garansi SET stator='T' where nonotagr='$nota_ref'";
$masuk = mysqli_query($konek,$sql);
$status = mysqli_query($konek,$stat);
if( $masuk ) {

    echo  " 
    
    <script src='../aset/js/sweetalert.min.js'></script>
    <script type='text/javascript'>
  setTimeout(function () {  
   swal({
    title: 'Lensa Berhasil Di Order',
    text: 'Sukses!',
    icon: 'success',
    button: 'OK!',
    
    timer: 8000,
    showConfirmButton: true
   });  
  },10); 
  window.setTimeout(function(){ 
   window.location.replace('../kar/cetakorgaransi.php?id=$nota_ref');
  } ,2000); 
 </script>
   ";
   
   
    
    } else {
        echo  "<script>alert('Lensa gagal Di Oreder');window.location='../kar/fnor.php'</script>";
     
       
    }


?>