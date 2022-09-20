<?php
include ('../config/koneksi.php');


$filename  = $_FILES['upload']['tmp_name'];
$handle  = fopen($filename, "r+");
$contents  = fread($handle, filesize($filename));

$sql = explode(';', $contents);

foreach ($sql as $query) {
 $result = mysqli_query($koneksi, $query);
 
 if($result){
    echo  "<script>alert('Data Berhasil Di Restore');window.location='../admin/restore.php'</script>";
 }
 else{
    echo  "<script>alert('Data Gagal Diinput Harap Hubungi Developer');window.location='../admin/restore.php'</script>";
 }
}
fclose($handle);
echo "successfully imported";
?>
