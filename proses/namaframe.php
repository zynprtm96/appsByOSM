
        <?php
        $no = 1;
        include('../config/koneksi.php');
        $keyword="";
        if (isset($_POST['search'])) {
            $keyword = $_POST['search'];
        }

        $query = mysqli_query($konek,"SELECT * FROM master_barang WHERE jenis='FRAME'   ORDER BY id ");
        $hitung_data = mysqli_num_rows($query);
        
                
                ?>
                <option value="">Cari Frame</option>
                <?php
                if ($hitung_data > 0) {
                    while ($data = mysqli_fetch_array($query)) {
                        ?>
                <option value="<?php echo $data['id']?>"><?php echo $data['merk']?> <?php echo $data['produk']?> <?php echo $data['detil']?></option>
                
                    
                    	
                    
                
            <?php } } else { ?> 
                <tr>
                    <td colspan='6' class="text-center">Data Tidak Ditemukan</td>
                </tr>
            <?php } ?>
        </tbody>
    </table>

    