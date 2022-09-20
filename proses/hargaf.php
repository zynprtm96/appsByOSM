
        <?php
        
        include('../config/koneksi.php');
        
        $keyword ="";
        $jenis="";
        $warna="";
        
            $keyword = $_POST['merkf'];
            $jenis = $_POST['jenisf'];
            $warna = $_POST['warnaf'];
            
        
        

        $query = mysqli_query($konek,"SELECT * FROM master_frame WHERE merk_f='$keyword' AND warna_f='$warna' AND detail_f='$jenis'   ORDER BY id ");
        $hitung_data = mysqli_num_rows($query);
        if ($hitung_data > 0) {
            while ($data = mysqli_fetch_array($query)) {
                
                ?>
                <option value="<?php echo $data['harga_f']?>">
                    
                    	
                    
                
            <?php } } else { ?> 
                <option value="Data Tidak Ada">
                <?php } ?>
        </tbody>
    </table>

    