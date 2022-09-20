
        <?php
        $no = 1;
        include('../config/koneksi.php');
        $keyword="";
        if (isset($_POST['search'])) {
            $keyword = $_POST['search'];
        }

        $query = mysqli_query($konek,"SELECT * FROM master_frame WHERE merk_f LIKE '%".$keyword."%'  ORDER BY id ");
        $hitung_data = mysqli_num_rows($query);
        if ($hitung_data > 0) {
            while ($data = mysqli_fetch_array($query)) {
                
                ?>
                <option value="<?php echo $data['merk_f']?>"
                    
                    	
                    
                
            <?php } } else { ?> 
                <option value="Data Tidak Ada"
            <?php } ?>
        </tbody>
    </table>

    