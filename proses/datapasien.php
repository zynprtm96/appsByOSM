<br>
<table class="table container" style="font-size: 14px;">
    <thead>
        <tr align="center">
            <th width="20%" align="center">Tanggal Periksa</th>
            <th width="15%" align="center">No Resep</th>
            <th width="15%" align="center">Nama</th>
            <th width="15%" align="center">Usia</th>
            <th width="15%" align="center">No Telp</th>
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

        $query = mysqli_query($konek,"SELECT * FROM rekam_medis WHERE noresep LIKE '%".$keyword."%' OR nama LIKE '%".$keyword."%' OR usia LIKE '%".$keyword."%' ORDER BY noresep DESC");
        $hitung_data = mysqli_num_rows($query);
        if ($hitung_data > 0) {
            while ($data = mysqli_fetch_array($query)) {
                if($data['rujukan']=="Y"){
                    $rujukan="hidden";
                }else{
                    $rujukan="";
                }
                
                ?>
                <tr align="center"    >
                    <td><?php echo date('d M Y',strtotime($data['tanggal_periksa'])) ?></td>
                    <td ><?php echo $data['noresep']; ?></td>
                    <td ><?php echo $data['nama']; ?></td>
                    <td ><?php echo $data['usia']; ?></td>
                    <td ><?php echo $data['nohp']; ?></td> 
                    <td width="40%"> 
                        
                    <a  type="button"  class="btn btn-success btn-sm" title="Cetak Resep" href="../kar/resep.php?id=<?php echo $data['id'];?>"><i style="color:black;" class='bx bx-receipt'></i></a>
                    <a  type="button" <?php echo $rujukan?> class="btn btn-warning btn-sm" title="Rujukan RS" href="../kar/rujukanform.php?id=<?php echo $data['id'];?>"><i class='bx bx-plus-medical'></i></a>
                    <a  type="button"  class="btn btn-primary btn-sm" title="Lihat Data" href="../kar/rekamview.php?id=<?php echo $data['id'];?>"><i style="color:black;" class='bx bx-show-alt'></i></a>
                    </td>
                    	
                    
                </tr>
            <?php } } else { ?> 
                <tr>
                    <td colspan='6' class="text-center">Data Tidak Ditemukan</td>
                </tr>
            <?php } ?>
        </tbody>
    </table>

    