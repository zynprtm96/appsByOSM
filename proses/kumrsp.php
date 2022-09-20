
        <?php
        $no = 1;
        include('../config/koneksi.php');
        $id = $_POST['id'];
       

        $query = mysqli_query($konek,"SELECT * FROM rekam_medis  where id_pasien='$id' ");

        
                
                ?>
                
                <?php
               
                    while ($data = mysqli_fetch_array($query)) {
                       
                        ?>
                        
                        <p style="text-align: center;">
                        <?php echo date('d-m-y',strtotime($data['tanggal_periksa']))?> <a href="../kar/resepid.php?id=<?php echo $data['noresep']?>"><?php echo $data['noresep']?></a> 
                        </p>
                         
                	
                    
                
            <?php } ?> 
               
           
        </tbody>
    </table>

    