<br>
<table class="table container" style="font-size: 14px;">
    <thead>
        <tr align="center">
            <th width="15%" align="center">Tanggal Transaksi</th>
            <th width="15%" align="center">No Nota</th>
            <th width="15%" align="center">Nama</th>
            <th width="15%" align="center">Status</th>
            <th width="15%" align="center">Aksi</th>
           
           
           
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
                if($data['garansi']=="BG"){
                    $status ="Belum Garansi";
                    $tc = "hidden";
                    $g ="";
                }elseif($data['garansi']=="G"){
                    $status="Sudah Garansi";
                    $tc = "";
                    $g ="hidden";
                }if($data['barang']=="BD"){
                    $jangan="hidden";
                }else{
                    $jangan="";
                }if($data['batal']=="Y"){
                    $batal ="hidden";
                }else{
                    $batal = "";
                }
                
                ?>
                <tr <?php echo $jangan?> align="center"    >
                    <td><?php echo date('d M Y',strtotime($data['tanggal_pesan'])) ?></td>
                    <td ><?php echo $data['nonota']; ?></td>
                    <td ><?php echo $data['nama']; ?></td>
                    <td ><?php echo $status ?></td>
                    <td>
                    <a <?php echo $tc?> href="../kar/cetaknotagaransiid.php?id=<?php echo $data['nonota'];?>" title="Cetak Nota Garansi"><button type="button" class="btn btn-primary"><i class='bx bx-printer'></i></button></a>
                    <a <?php echo $g?> href="../kar/garansi.php?id=<?php echo $data['nonota'];?>" title="Garansi"><button type="button" class="btn btn-warning"><i class='bx bx-archive'></i></button></a>
                
                    </td>
                    
                    
                    	
                    
                </tr>
            <?php } } else { ?> 
                <tr>
                    <td colspan='6' class="text-center">Data Tidak Ditemukan</td>
                </tr>
            <?php } ?>
        </tbody>
    </table>

    