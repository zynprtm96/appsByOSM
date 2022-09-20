<br>
<table class="table container" style="font-size: 14px;">
    <thead>
        <tr align="center">
            <th width="15%" align="center">Tanggal Transaksi</th>
            <th width="15%" align="center">No Nota</th>
            <th width="15%" align="center">Nama</th>
            <th width="15%" align="center">Keterangan</th>
            <th width="15%" align="center">Cetak</th>
           
           
           
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

        $query = mysqli_query($konek,"SELECT * FROM nota_pesan WHERE nonota LIKE '%".$keyword."%' OR nama LIKE '%".$keyword."%'  OR nohp  LIKE '%".$keyword."%' ORDER BY nonota DESC");
        $hitung_data = mysqli_num_rows($query);
        if ($hitung_data > 0) {
            while ($data = mysqli_fetch_array($query)) {
                if($data['batal']=="Y"){
                    $batal = "Nota Dibatalkan";
                }
                else{
                    $batal = "";
                }
                
                ?>
                <tr align="center"    >
                    <td><?php echo date('d M Y',strtotime($data['tanggal_pesan'])) ?></td>
                    <td ><?php echo $data['nonota']; ?></td>
                    <td ><?php echo $data['nama']; ?></td>
                    <td ><?php echo $batal; ?></td>
                    <td><a href="../kar/cetaknotapesanid.php?id=<?php echo $data['nonota'];?>" title="Cetak Nota"><button type="button" class="btn btn-primary"><i class='bx bx-printer'></i></button></a></td>
                    
                    
                    	
                    
                </tr>
            <?php } } else { ?> 
                <tr>
                    <td colspan='6' class="text-center">Data Tidak Ditemukan</td>
                </tr>
            <?php } ?>
        </tbody>
    </table>

    