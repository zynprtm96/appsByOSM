<?php  
include "config/koneksi.php";
 ob_start();  
 //mendapatkan detail ipconfing menggunakan CMD  
 system('ipconfig /all');  
  // mendapatkan output kedalam variable  
  $mycom=ob_get_contents();  
  // membersihkan output buffer  
    ob_clean();  
  $findme = "Physical";  
  // mencari perangkat fisik | menemukan posisi text perangkat fisik  
  //Search the "Physical" | Find the position of Physical text  
  $pmac = strpos($mycom, $findme);  
  // mendapatkan alamat peragkat fisik  
  $mac=substr($mycom,($pmac+36),17);  
  //menampilkan Mac Address  
  echo "kode lisensi:".md5($mac);  
 $serial=md5($mac);
 $query=mysqli_query($konek,"select * from verifikasi where kode='$serial'");
 $hasil=mysqli_fetch_array($query);
 $aktivasi=$hasil[2];
 //cek kode aktivasi
 $cekkode=sha1($mac);
echo "<br>".$aktivasi."=".$cekkode."<br>";

$jml=mysqli_num_rows($query);
if($jml>=1 and $aktivasi==$cekkode){
header("location: login.php");
}
else {header("location: checking/verifikasi.php");
        
}



?>