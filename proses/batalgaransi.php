<?php
include ('../config/koneksi.php');

$id = $_GET['id'];
$alasan =$_GET['alasan'];
$nonotabt =$_GET['nota'];

 
 $query = mysqli_query($konek, "SELECT * FROM nota_garansi WHERE nonotagr='$id'");
 $data = mysqli_fetch_array($query);
 $nota_ref = $data['nonotagr'];
 $nama = $data['nama'];
 $alamat = $data['alamat'];
 $nama = $data['nama'];
 $usia = $data['usia'];
 $nohp = $data['nohp'];
 $merk_f = $data['merk_f'];
 $warna_f = $data['warna_f'];
 $detil_f = $data['detil_f'];
 $harga_f = $data['harga_f'];
 $merk_lr = $data['merk_lr'];
 $jenis_lr = $data['jenis_lr'];
 $harga_lr = $data['harga_lr'];
 $merk_ll = $data['merk_ll'];
 $jenis_ll = $data['jenis_ll'];
 $harga_ll = $data['harga_ll'];
 $jumlah_harga = $data['jumlah_harga'];
 $diskon = $data['diskon'];
 $total = $data['total'];
 $uang_muka = $data['uang_muka'];
 $sisa = $data['sisa'];
 $petugas = $data['petugas'];
 $pemeriksa = $data['pemeriksa'];
 
 $id_pasien = $data['id_pasien'];
 $kode_f = $data['kode_f'];

 $garansi = mysqli_query($konek,"INSERT INTO nota_batalgaransi(nonotabt,nota_ref,id_pasien,nama,alamat,usia,nohp,merk_f,warna_f,detil_f,harga_f,merk_lr,jenis_lr,harga_lr,merk_ll,jenis_ll,harga_ll,jumlah_harga,diskon,total,alasan)values('$nonotabt','$nota_ref','$id_pasien','$nama','$alamat','$usia','$nohp','$merk_f','$warna_f','$detil_f','$harga_f','$merk_lr','$jenis_lr','$harga_lr','$merk_ll','$jenis_ll','$harga_ll','$jumlah_harga','$diskon','$total','$alasan')");
 $notabatalsemua = mysqli_query($konek,"INSERT INTO nota_batalsemua(nonotabt,nota_ref,nama,usia,alamat,nohp,alasan,petugas)values('$nonotabt','$nota_ref','$nama','$usia','$alamat','$nohp','$alasan','$petugas')");
 $update = mysqli_query($konek,"UPDATE nota_garansi SET batal='Y' where nonotagr='$nota_ref'");

 if($jenis_lr==$jenis_ll){
    $produk = mysqli_query($konek,"SELECT * FROM master_lensa where merk='$merk_lr' and jenis='$jenis_lr'"  );

$kuanti = mysqli_fetch_array($produk);
$jumlah = $kuanti['qyt']+2;
    $stok = "UPDATE master_lensa SET qyt='$jumlah' where merk='$merk_lr' and jenis='$jenis_lr'";
    $ubah = mysqli_query($konek,$stok);

    $lappl = mysqli_query($konek,"SELECT * FROM produk WHERE merk = '$merk_lr' and produk='$jenis_lr'" );
    $lappp = mysqli_fetch_array($lappl);

    $stokl = $lappp['stok'] - 2;
     $masuklappl= mysqli_query($konek,"UPDATE produk set stok='$stokl' where merk='$merk_lr' and produk='$jenis_lr'");



 }elseif($jenis_lr!=$jenis_ll){
    $produk = mysqli_query($konek,"SELECT * FROM master_lensa where merk='$merk_lr' and jenis='$jenis_lr'"  );

    $kuanti = mysqli_fetch_array($produk);
    $jumlah = $kuanti['qyt']+1;
        $stok = "UPDATE master_lensa SET qyt='$jumlah' where merk='$merk_lr' and jenis='$jenis_lr'";
        $ubah = mysqli_query($konek,$stok);
        $produk2 = mysqli_query($konek,"SELECT * FROM master_lensa where merk='$merk_ll' and jenis='$jenis_ll'"  );

        $kuanti2 = mysqli_fetch_array($produk2);
        $jumlah2 = $kuanti['qyt']+1;
            $stok2 = "UPDATE master_lensa SET qyt='$jumlah2' where merk='$merk_ll' and jenis='$jenis_ll'";
            $ubah2 = mysqli_query($konek,$stok2);

            $lappl = mysqli_query($konek,"SELECT * FROM produk WHERE merk = '$merk_lr' and produk='$jenis_lr'" );
            $lappp = mysqli_fetch_array($lappl);
            
            
            $stokl = $lappp['stok'] - 1;
             $masuklappl= mysqli_query($konek,"UPDATE produk set stok='$stokl' where merk='$merk_lr' and produk='$jenis_lr'");
        
            
        
            $lappl2 = mysqli_query($konek,"SELECT * FROM produk WHERE merk = '$merk_ll' and produk='$jenis_ll'" );
            $lappp2 = mysqli_fetch_array($lappl2);
           
            
       
            $stokl2 = $lappp2['stok'] - 1;
             $masuklappl2= mysqli_query($konek,"UPDATE produk set stok='$stokl2' where merk='$merk_ll' and produk='$jenis_ll'");
        
        
         

 }
 $produk = mysqli_query($konek,"SELECT * FROM produk where kode='$kode_f'"  );

$kuanti = mysqli_fetch_array($produk);

    $kuantiti = $kuanti['stok'] - 1;
    $masuk_produk = "UPDATE produk SET stok='$kuantiti' where kode='$kode_f'";
    $proses_produk = mysqli_query($konek,$masuk_produk);

    
if( $proses_produk ) {
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
   window.location.replace('../kar/notabatalgaransi.php');
  } ,2000); 
 </script>
   ";

    } else {
        // kalau gagal alihkan ke halaman indek.php dengan status=gagal
        echo  "<script>alert('Data Gagal Diinput');window.location='../kar/notabatalgaransi.php'</script>";
    }
  





 ?>