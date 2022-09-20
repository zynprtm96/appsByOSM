
        <?php
        $no = 1;
        include('../config/koneksi.php');
        $keyword="";
        if (isset($_POST['nama'])) {
            $keyword = $_POST['nama'];
        }

        $query = mysqli_query($konek,"SELECT * FROM nota_pesan WHERE nama='$keyword' ORDER BY id ");
        $hitung_data = mysqli_num_rows($query);
        if ($hitung_data > 0) {
            while ($data = mysqli_fetch_array($query)) {
                
                ?>
                <p><?php echo $data['nonota']?></p>
                
                
                    
                    	
                    
                
            <?php } } else { ?> 
                <tr>
                    <td colspan='6' class="text-center">Data Tidak Ditemukan</td>
                </tr>
            <?php } ?>
        </tbody>
    </table>

    