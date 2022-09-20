
<?php
include('../config/koneksi.php');

$query = mysqli_query($konek, "SELECT * FROM master_barang WHERE id='".mysqli_escape_string($konek, $_POST['id'])."'");
$data = mysqli_fetch_array($query);

echo json_encode($data);

?>
