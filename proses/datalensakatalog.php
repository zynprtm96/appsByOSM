<table class="table container" style="font-size: 14px;">
    <thead>
        <tr align="center">
        <th  align="center">KODE LENSA</th>
            <th  align="center">MERK</th>
            <th  align="center">JENIS</th>
            <th  align="center">KUANTITI</th>
            <th  align="center">HARGA / PCS</th>
            <th  align="center">HARGA / Pasang</th>
            
            
           
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

        $query = mysqli_query($konek,"SELECT * FROM master_lensa WHERE  merk LIKE '%".$keyword."%' OR jenis LIKE '%".$keyword."%' ");
        $hitung_data = mysqli_num_rows($query);
        if ($hitung_data > 0) {
            while ($data = mysqli_fetch_array($query)) {
                if($data['kategori']=="STOK"){
                    $lens="hidden";
                }else{
                    $lens="";
                }
                
                ?>
                <tr align="center"  <?php echo $lens?>  >
                <td ><?php echo $data['kode_lensa']; ?></td>
                    <td ><?php echo $data['merk']; ?></td>
                    <td ><?php echo $data['jenis']; ?></td>
                    <td><?php echo $data['qyt']?></td>
                    <td ><?php echo number_format($data['harga']); ?></td>
                    <td ><?php echo number_format($data['harga']*2); ?></td>
                   
                    	
                    
                </tr>
            <?php } } else { ?> 
                <tr>
                    <td colspan='6' class="text-center">Data Tidak Ditemukan</td>
                </tr>
            <?php } ?>
        </tbody>
    </table>

    