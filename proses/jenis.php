
        <?php
        
        include('../config/koneksi.php');
        $keyword="";
        
        
            $keyword = $_POST['merk'];
            
        
        

        $query = mysqli_query($konek,"SELECT * FROM master_lensa WHERE merk ='$keyword' ORDER BY id ");
        $hitung_data = mysqli_num_rows($query);
        
                ?>
                <option value="">Jenis Lensa</option>
                <?php
                if ($hitung_data > 0) {
                    while ($data = mysqli_fetch_array($query)) {
                
                        ?>
                <option value="<?php echo $data['jenis']?>"><?php echo $data['jenis']?></option>
                    
                    	
                    
                
            <?php } } else { ?> 
                <option value="Data Tidak Ada">
                <?php } ?>
        </tbody>
    </table>

    