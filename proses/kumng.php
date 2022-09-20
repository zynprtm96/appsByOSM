
        <?php
        $no = 1;
        include('../config/koneksi.php');
        $id = $_POST['id'];
       

        $query = mysqli_query($konek,"SELECT * FROM nota_garansi  where id_pasien='$id' ");

        
                
                ?>
                
                <?php
               
                    while ($data = mysqli_fetch_array($query)) {
                       
                        ?>
                        
                        <p style="text-align: center;">
                        <?php echo date('d-m-y',strtotime($data['tanggal_garansi']))?> <a href="../kar/cetaknotagaransi.php?id=<?php echo $data['nonotagr']?>"><?php echo $data['nonotagr']?></a> 
                        </p>
                         
                	
                    
                
            <?php } ?> 
               
           
        </tbody>
    </table>

    