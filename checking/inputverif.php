<?php


include ('../config/koneksi.php');
$serial = htmlspecialchars($_POST['serial'], ENT_QUOTES);
$kode = htmlspecialchars($_POST['kode'], ENT_QUOTES);
$id_user = md5($kode);

$sql= "UPDATE verifikasi set serial='$serial' where id='1'";
$query= mysqli_query($konek,$sql);

$query=mysqli_query($konek,"select * from verifikasi where kode='$id_user'");
 $hasil=mysqli_fetch_array($query);
 $aktivasi=$hasil['serial'];
 //cek kode aktivasi
 $cekkode=sha1($kode);



if($aktivasi==$cekkode){
    echo  "<script>alert('Lisensi Telah Diterima, Selamat Menggunakan Aplikasinya');window.location='../login.php'</script>";
}
else {
    echo  "<script>alert('Lisensi Tidak Cocok, Harap Hubungi Developer!');window.location='../checking/verifikasi.php'</script>";
    
        
}
?>