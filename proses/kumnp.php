
        <?php
        $no = 1;
        include('../config/koneksi.php');
        $id = $_POST['id'];
       

        $query = mysqli_query($konek,"SELECT * FROM nota_pesan  where id_pasien='$id' ");

        
                
                ?>
                
                <?php
               
                    while ($data = mysqli_fetch_array($query)) {
                       
                        ?>
                        
                        <p style="text-align: center;">
                        <?php echo date('d-m-y',strtotime($data['tanggal_pesan']))?> <a href="../kar/cetaknotapesanid.php?id=<?php echo $data['nonota']?>"><?php echo $data['nonota']?></a>
                        </p>
                         
                	
                    
                
            <?php } ?> 
               
           
        </tbody>
    </table>

    