<?php


include ('../config/koneksi.php');
$id = $_GET['id'];
$barang = mysqli_query($konek,"SELECT * FROM master_lensa where id=$id");
$data = mysqli_fetch_array($barang);

        
?>
<input type="text" readonly class="form-control" value="<?php echo $data['qyt']?>"   name="qyt">