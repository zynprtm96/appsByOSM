<br>
<table class="table container" style="font-size: 14px;">
    <thead>
        <tr align="center">
            <th width="20%" align="center">Tanggal Rujukan</th>
            <th width="15%" align="center">No Rujukan</th>
               <th width="15%" align="center">No Resep</th>
                <th width="15%" align="center">ID Pasien</th>
                <th width="15%" align="center">No Rekam</th>
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

        $query = mysqli_query($konek,"SELECT * FROM rujukan join rekam_medis on rujukan.noresep=rekam_medis.noresep WHERE rekam_medis.noresep LIKE '%".$keyword."%' OR rekam_medis.nama LIKE '%".$keyword."%' OR rekam_medis.usia LIKE '%".$keyword."%' OR rujukan.norujukan LIKE '%".$keyword."%' ORDER BY rujukan.norujukan DESC");
        $hitung_data = mysqli_num_rows($query);
        if ($hitung_data > 0) {
            while ($data = mysqli_fetch_array($query)) {
                
                ?>
                <tr align="center"    >
                    <td><?php echo date('d M Y',strtotime($data['tanggal_rujukan'])) ?></td>
                    <td ><?php echo $data['norujukan']; ?></td>
                    <td ><?php echo $data['noresep']; ?></td>
                    <td ><?php echo $data['id_pasien']; ?></td>
                    <td ><?php echo $data['norekam']; ?></td>
                    <td ><?php echo $data['nama']; ?></td>
                    <td ><?php echo $data['usia']; ?></td>
                    <td ><?php echo $data['nohp']; ?></td> 
                    <td width="40%"> 
                        
                    <a  type="button"  class="btn btn-primary btn-sm" title="Cetak Rujukan" href="../kar/rujukanid.php?id=<?php echo $data['norujukan'];?>"><i style="color:white;" class='bx bx-receipt'></i></a>
                   
                    </td>
                    	
                    
                </tr>
            <?php } } else { ?> 
                <tr>
                    <td colspan='6' class="text-center">Data Tidak Ditemukan</td>
                </tr>
            <?php } ?>
        </tbody>
    </table>

    