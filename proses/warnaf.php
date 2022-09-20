
        <?php
        
        include('../config/koneksi.php');
        $keyword="";
        
        
            $keyword = $_POST['merkf'];
            
        
        

        $query = mysqli_query($konek,"SELECT * FROM master_frame WHERE merk_f ='$keyword' ORDER BY id ");
        $hitung_data = mysqli_num_rows($query);
        if ($hitung_data > 0) {
            while ($data = mysqli_fetch_array($query)) {
                
                ?>
                <option value="<?php echo $data['warna_f']?>"
                    
                    	
                    
                
            <?php } } else { ?> 
                <option value="Data Tidak Ada">
                <?php } ?>
        </tbody>
    </table>

    