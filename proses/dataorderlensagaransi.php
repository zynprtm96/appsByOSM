<br>
<table class="table  container" style="font-size: 14px;">
    <thead>
        <tr align="center">
            <th width="20%" align="center">Tanggal Pesan</th>
            <th width="15%" align="center">No Nota</th>
            <th width="15%" align="center">Nama</th>
            <th width="20%" align="center">Status</th>
            <th width="20%" align="center">Keterangan</th>
           
            <th width="30%" align="center">Aksi</th>
           
        </tr>
    </thead>
    <tbody>
        <?php
        $no = 1;
        include('../config/koneksi.php');
        $keyword="";
        if (isset($_POST['search'])) {
            $keyword = $_POST['search'];
        }

        $query = mysqli_query($konek,"SELECT * FROM nota_garansi WHERE nonotagr LIKE '%".$keyword."%' OR nama LIKE '%".$keyword."%' OR barang LIKE '%".$keyword."%' ORDER BY id DESC");

        $hitung_data = mysqli_num_rows($query);
        if ($hitung_data > 0) {
            while ($data = mysqli_fetch_array($query)) {
                
                if($data['stator']=="T"){
                    $tombol= "";
                    $status = "Lensa Sudah Di Order";
                    $kelas = "bg-info";
                    $warna = "black";
                    
                }else{
                    $tombol= "hidden";
                    $status = "Lensa Belum Di Order";
                    $kelas = "bg-danger";
                    $warna = "white";
                }
               
                if($data['stator']=="T"){
                    $rekam = "hidden";
                }else{
                    $rekam = "";
                } if($data['batal']=="Y"){
                    $batal = "Dibatalkan";
                }else{
                    $batal="";
                }
               
                ?>
                <tr align="center"  class="<?php echo $kelas;?>" style=" color: <?php echo $warna;?>;">
                    <td><?php echo date('d M Y',strtotime($data['tanggal_garansi'])) ?></td>
                    <td ><?php echo $data['nonotagr']; ?></td>
                    <td ><?php echo $data['nama']; ?></td>
                    <td ><?php echo $status;?></td>
                    <td ><?php echo $batal; ?></td>
                    
                    <td > 
                    
  <a href="../kar/orgaransi.php?id=<?php echo $data['nota_ref'];?>" <?php echo $rekam;?> title="Order Lensa"><button type="button" class="btn btn-warning"><i style="font-size: 18px;" class='bx bx-receipt'></i></button></a>
  <a  href="../kar/cetakorgaransi.php?id=<?php echo $data['nonotagr'];?>" <?php echo $tombol;?> title="Cetak"><button type="button" class="btn btn-success"><i style="font-size: 18px;" class='bx bx-printer'></i></button></a>

                   
                </td>
                    	
                    
                </tr>
            <?php } } else { ?> 
                <tr>
                    <td colspan='6' class="text-center">Data Tidak Ditemukan</td>
                </tr>
            <?php } ?>
        </tbody>
    </table>

    