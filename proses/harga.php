
        <?php
        
        include('../config/koneksi.php');
        $keyword="";
        
        
            $keyword = $_POST['jenis'];
            
        
        

        $query = mysqli_query($konek,"SELECT * FROM master_lensa WHERE jenis ='$keyword' ORDER BY id ");
        $hitung_data = mysqli_num_rows($query);
       
                ?>
                <option value=""></option>
                <?php
                 if ($hitung_data > 0) {
                    while ($data = mysqli_fetch_array($query)) {
                        
                ?>

                <option value="<?php echo $data['harga']?>"><?php echo $data['harga']?></option>
                    
                    	
                    
                
            <?php } } else { ?> 
                <option value="Data Tidak Ada">
                <?php } ?>
        </tbody>
    </table>
    

    