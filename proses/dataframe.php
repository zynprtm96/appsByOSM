<table class="table container" style="font-size: 14px;">
    <thead>
        <tr align="center">
            
            <th  align="center">KODE</th>
            <th  align="center">MERK</th>
            <th  align="center">PRODUK</th>
            <th  align="center">DETIL</th>
            <th  align="center">STOK</th>
            <th  align="center">HARGA / PCS</th>
            <th  align="center">AKSI</th>
           
            
            
           
        </tr>
    </thead>
    <tbody>
        <?php
        $no = 1;
        include('../config/koneksi.php');
        $keyword="";
        if (isset($_POST['search'])) {
            $keyword = $_POST['search'];
        }

        $query = mysqli_query($konek,"SELECT * FROM master_barang WHERE  merk LIKE '%".$keyword."%' OR jenis LIKE '%".$keyword."%' OR produk LIKE '%".$keyword."%' OR detil LIKE '%".$keyword."%' OR kode LIKE '%".$keyword."%' order by id desc");
        $hitung_data = mysqli_num_rows($query);
        if ($hitung_data > 0) {
            while ($data = mysqli_fetch_array($query)) {
                if($data['jenis']!= "FRAME"){
                    $tutup = "hidden";
                }else{
                    $tutup = "";
                }
                
                ?>
                <tr align="center"  <?php echo $tutup ?>  >
                   
                    <td ><?php echo $data['kode']; ?></td>
                    <td ><?php echo $data['merk']; ?></td>
                    <td ><?php echo $data['produk']; ?></td>
                    <td><?php echo $data['detil']?></td>
                    <td ><?php echo $data['stok']; ?></td>
                    <td ><?php echo number_format($data['harga']); ?></td>
                    <td>
                   <a href="../admin/editframe.php?id=<?php echo $data['id']?>" type="button" class="btn btn-warning">EDIT</a>
                    </td>
                   
                    	
                    
                </tr>
            <?php } } else { ?> 
                <tr>
                    <td colspan='6' class="text-center">Data Tidak Ditemukan</td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
