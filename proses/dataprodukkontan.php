<table class="table table-borderless">
            <tr>
              <td width="15%">Kode Barang</td>
              <td>Merk</td>
              <td>Produk</td>
              <td>Detil</td>
              <td>Jumlah</td>
              <td>Harga</td>
              <td>Diskon</td>
              <td>Harga</td>
              <td>Sub Harga</td>
              <td>Aksi</td>
              
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
              <td><?php echo $kp['jumlah']?></td>
              <td><?php echo number_format($kp['harga'])?></td>
              <td><?php echo $kp['diskon'] 
              
              ?>
            
            </td>
            <td><?php $hargasm = $kp['harga'] * $kp['jumlah']; 
            echo number_format($hargasm);?></td>
              <td><?php  
              $sub = $kp['harga'] * $kp['jumlah'];

              $disk =  $kp['diskon'] / 100;
              $diskon = $sub * $disk;
              $jumlahdisk = $sub - $diskon;
              echo number_format($jumlahdisk);
              ?></td>
              <td>
              <a type="button" class="btn btn-danger" id="hapus" >Hapus</a>
              </td>
            </tr>

            <?php 
       
        
            $jumlah[] = $jumlahdisk;
        
            $total =  array_sum($jumlah);
            $totalsemua +=$total;
        
        
        
        } ?>
            <tr>
                <td colspan="8" align="right" style="vertical-align: middle;">Jumlah Harga</td>
                <td ><input type="text" id="total" value="<?php echo $totalsemua?>">
                    </td>
            </tr>
            

          </table>
          <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.js"></script>
   
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.8/js/select2.min.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

<script>
      
      $('#hapus').click(function(){
        var id = $("#idbarang").val();
        var jumlah = $("#jumlahbarang").val();
        var kode = $("#kodebarang").val();
        var jawab = confirm("Yakin anda ingin menghapus data tersebut ?");
        if (jawab === true) {

            
            
            var hapus = false;
            if (!hapus) {
                hapus = true;
                $.ajax({
					url: '../proses/hapusprodukkontan.php',
					type: 'POST',
					data: {
						id: id,
                        jumlah: jumlah,
                        kode: kode
            
					}
                    
					
          });
          hapus = false;
            }
                
            
        } else {
            return false;
        }
        
        

      })
    </script>
  