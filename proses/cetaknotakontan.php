<table class="table table-borderless container" style="border: 0;">
<tr>
<td >Kode Barang</td>
              <td>Merk</td>
              <td>Produk</td>
              <td>Detil</td>
              <td>Jumlah</td>
              
              <td>Sub Harga</td>
            
</tr>
           
            <?php
            include('../config/koneksi.php');
            $total= 0;
            $totalsemua= 0;
            $no = $_GET['nonota'];
            $produk = mysqli_query($konek,"SELECT * From produk_kontan where nonota='$no'");
            while($kp=mysqli_fetch_array($produk)){

                

            ?>
            <tr>
            <input type="text" name="" id="idbarang"  hidden value="<?php echo $kp['id']?>">
            <input type="text" name="" id="kodebarang"  hidden value="<?php echo $kp['kode_barang']?>">
            <input type="text" name="" id="jumlahbarang"  hidden value="<?php echo $kp['jumlah']?>">
              <td><?php echo $kp['kode_barang']?></td>
              <td><?php echo $kp['merk']?></td>
              <td><?php echo $kp['produk']?></td>
              <td><?php echo $kp['detil']?></td>
              <td align=""><?php echo $kp['jumlah']?></td>
             
              <td><?php  
              $sub = $kp['harga'] * $kp['jumlah'];

              $disk =  $kp['diskon'] / 100;
              $diskon = $sub * $disk;
              $jumlahdisk = $sub - $diskon;
              echo number_format($jumlahdisk);
              ?></td>
             
            </tr>

            <?php 
       
        
           
        
        
        
        } ?>
            

          </table>
      
  