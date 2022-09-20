
        <?php
        $no = 1;
        include('../config/koneksi.php');
        $id = $_POST['id'];
       

        $query = mysqli_query($konek,"SELECT * FROM rujukan  where id_pasien='$id' ");

        
                
                ?>
                
                <?php
               
                    while ($data = mysqli_fetch_array($query)) {
                       
                        ?>
                        
                        <p style="text-align: center;">
                        <?php echo date('d-m-y',strtotime($data['tanggal_rujukan']))?> <a href="../kar/rujukanid.php?id=<?php echo $data['norujukan']?>"><?php echo $data['norujukan']?></a> 
                        </p>
                         
                	
                    
                
            <?php } ?> 
               
           
        </tbody>
    </table>

    