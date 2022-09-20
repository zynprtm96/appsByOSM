<?php

include ('../config/koneksi.php');
$nonota =$_POST['nonota'];
$noresep =$_POST['noresep'];
$id_pasien =$_POST['id_pasien'];
$norekam =$_POST['norekam'];
$nama = htmlspecialchars($_POST['nama'], ENT_QUOTES);
$usia = htmlspecialchars($_POST['usia'], ENT_QUOTES);
$nohp = htmlspecialchars($_POST['nohp'], ENT_QUOTES);
$alamat = htmlspecialchars($_POST['alamat'], ENT_QUOTES);
$sphrsek = htmlspecialchars($_POST['sphrsek'], ENT_QUOTES);
$cylrsek = htmlspecialchars($_POST['cylrsek'], ENT_QUOTES);
$axrsek = htmlspecialchars($_POST['axrsek'], ENT_QUOTES);
$sphlsek = htmlspecialchars($_POST['sphlsek'], ENT_QUOTES);
$cyllsek = htmlspecialchars($_POST['cyllsek'], ENT_QUOTES);
$axlsek = htmlspecialchars($_POST['axlsek'], ENT_QUOTES);
$adisirsek = htmlspecialchars($_POST['adisirsek'], ENT_QUOTES);
$adisilsek = htmlspecialchars($_POST['adisilsek'], ENT_QUOTES);
$ucvar = htmlspecialchars($_POST['ucvar'], ENT_QUOTES);
$bcvar = htmlspecialchars($_POST['bcvar'], ENT_QUOTES);
$ucval = htmlspecialchars($_POST['ucval'], ENT_QUOTES);
$bcval = htmlspecialchars($_POST['bcval'], ENT_QUOTES);
$pdr = htmlspecialchars($_POST['pdr'], ENT_QUOTES);
$pdl = htmlspecialchars($_POST['pdl'], ENT_QUOTES);
$pd = htmlspecialchars($_POST['pd'], ENT_QUOTES);
$pdd = htmlspecialchars($_POST['pdd'], ENT_QUOTES);
$anamnesa = htmlspecialchars($_POST['anamnesa'], ENT_QUOTES);
$pbr = htmlspecialchars($_POST['pbr'], ENT_QUOTES);
$pbl = htmlspecialchars($_POST['pbl'], ENT_QUOTES);
$ksr = htmlspecialchars($_POST['ksr'], ENT_QUOTES);
$ksl = htmlspecialchars($_POST['ksl'], ENT_QUOTES);
$lmr = htmlspecialchars($_POST['lmr'], ENT_QUOTES);
$lml = htmlspecialchars($_POST['lml'], ENT_QUOTES);
$kmr = htmlspecialchars($_POST['kmr'], ENT_QUOTES);
$kml = htmlspecialchars($_POST['kml'], ENT_QUOTES);
$sphrseb = htmlspecialchars($_POST['sphrseb'], ENT_QUOTES);
$cylrseb = htmlspecialchars($_POST['cylrseb'], ENT_QUOTES);
$axrseb = htmlspecialchars($_POST['axrseb'], ENT_QUOTES);
$sphlseb = htmlspecialchars($_POST['sphlseb'], ENT_QUOTES);
$cyllseb = htmlspecialchars($_POST['cyllseb'], ENT_QUOTES);
$axlseb = htmlspecialchars($_POST['axlseb'], ENT_QUOTES);
$adisirseb = htmlspecialchars($_POST['adisirseb'], ENT_QUOTES);
$adisilseb = htmlspecialchars($_POST['adisilseb'], ENT_QUOTES);
$jlseb = htmlspecialchars($_POST['jlseb'], ENT_QUOTES);
$alat = htmlspecialchars($_POST['alat'], ENT_QUOTES);
$sphralat = htmlspecialchars($_POST['sphralat'], ENT_QUOTES);
$cylralat = htmlspecialchars($_POST['cylralat'], ENT_QUOTES);
$axralat = htmlspecialchars($_POST['axralat'], ENT_QUOTES);
$sphlalat = htmlspecialchars($_POST['sphralat'], ENT_QUOTES);
$cyllalat = htmlspecialchars($_POST['cyllalat'], ENT_QUOTES);
$axlalat = htmlspecialchars($_POST['axlalat'], ENT_QUOTES);
$phl = htmlspecialchars($_POST['phl'], ENT_QUOTES);
$phr = htmlspecialchars($_POST['phr'], ENT_QUOTES);
$tkb = htmlspecialchars($_POST['tkb'], ENT_QUOTES);
$ttab = htmlspecialchars($_POST['ttab'], ENT_QUOTES);
$diagnosa = htmlspecialchars($_POST['lmr'], ENT_QUOTES);
$analisa = htmlspecialchars($_POST['analisa'], ENT_QUOTES);
$terapi = htmlspecialchars($_POST['terapi'], ENT_QUOTES);
$kesimpulan = htmlspecialchars($_POST['kesimpulan'], ENT_QUOTES);
$pemeriksa = htmlspecialchars($_POST['pemeriksa'], ENT_QUOTES);
$prisrsek = htmlspecialchars($_POST['prisrsek'], ENT_QUOTES);
$prislsek = htmlspecialchars($_POST['prislsek'], ENT_QUOTES);
$basersek = htmlspecialchars($_POST['basersek'], ENT_QUOTES);
$baselsek = htmlspecialchars($_POST['baselsek'], ENT_QUOTES);
$prisrseb = htmlspecialchars($_POST['prisrseb'], ENT_QUOTES);
$prislseb = htmlspecialchars($_POST['prislseb'], ENT_QUOTES);
$baselseb = htmlspecialchars($_POST['baselseb'], ENT_QUOTES);
$baserseb = htmlspecialchars($_POST['baserseb'], ENT_QUOTES);
if($jlseb!=null){
    $kclama = "ADA";
}
$kclama = "TIDAK ADA";
$id = $_POST['id'];



$sql = "INSERT INTO rekam_medis(nonota, noresep, nama, usia, nohp, alamat, sphrsek, cylrsek, axrsek, sphlsek, cyllsek, axlsek, ucvar, bcvar, ucval, bcval, pdr, pdl, pd, pdd, anamnesa, pbr, pbl, ksr, ksl, lmr, lml, kmr, kml, sphrseb, cylrseb, axrseb, sphlseb, cyllseb, axlseb, jlseb,  alat, sphralat, cylralat, axralat, sphlalat, cyllalat, axlalat, phl, phr, tkb, ttab, diagnosa, analisa, terapi, kesimpulan, pemeriksa, adisirsek, adisilsek, prisrsek, prislsek, basersek, baselsek, adisirseb, adisilseb, prisrseb, prislseb, baserseb, baselseb,id_pasien,norekam) VALUES ('$nonota','$noresep', '$nama', '$usia', '$nohp', '$alamat', '$sphrsek', '$cylrsek', '$axrsek', '$sphlsek', '$cyllsek', '$axlsek',  '$ucvar', '$bcvar', '$ucval', '$bcval', '$pdr', '$pdl', '$pd', '$pdd', '$anamnesa', '$pbr', '$pbl', '$ksr', '$ksl', '$lmr', '$lml', '$kmr', '$kml', '$sphrseb', '$cylrseb', '$axrseb', '$sphlseb', '$cyllseb', '$axlseb', '$jlseb', '$alat', '$sphralat', '$cylralat', '$axralat', '$sphlalat', '$cyllalat', '$axlalat', '$phl', '$phr', '$tkb', '$ttab', '$diagnosa', '$analisa', '$terapi', '$kesimpulan', '$pemeriksa', '$adisirsek', '$adisilsek', '$prisrsek', '$prislsek', '$basersek', '$baselsek', '$adisirseb', '$adisilseb', '$prisrseb', '$prislseb', '$baserseb', '$baselseb','$id_pasien','$norekam')";


$nota = "UPDATE nota_pesan SET rekam='T' WHERE id='$id'";
$query = mysqli_query($konek,$sql);
$query1 = mysqli_query($konek,$nota);

if( $query ) {
    echo  " 
    
    <script src='../aset/js/sweetalert.min.js'></script>
    <script type='text/javascript'>
  setTimeout(function () {  
   swal({
    title: 'Rekam Medis Berhasil Terisi',
    text: 'Sukses!',
    icon: 'success',
    button: 'OK!',
    
    timer: 8000,
    showConfirmButton: true
   });  
  },10); 
  window.setTimeout(function(){ 
   window.location.replace('../kar/fnrekam.php');
  } ,2000); 
 </script>
   ";
   
    
       
    } else {
        echo  "<script>alert('Rekam Medis Gagal Terisi');window.location='../kar/fnrekam.php'</script>";
     
        
        
    }
?>