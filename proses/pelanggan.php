
<?php
include('../config/koneksi.php');

$query = mysqli_query($konek, "SELECT * FROM master_pelanggan WHERE nama='".mysqli_escape_string($konek, $_POST['nama'])."'");
$data = mysqli_fetch_array($query);

echo json_encode($data);

?>
