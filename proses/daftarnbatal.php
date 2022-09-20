<br>
<table class="table container" style="font-size: 14px;">
    <thead>
        <tr align="center">
            <th width="15%" align="center">Tanggal Batal</th>
            <th width="15%" align="center">No Nota</th>
            <th width="15%" align="center">Nota Referensi</th>
            <th width="15%" align="center">Nama</th>
            <th width="15%" align="center">Alasan Batal</th>
           
           
           
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

        $query = mysqli_query($konek,"SELECT * FROM nota_batalsemua WHERE nonotabt LIKE '%".$keyword."%' OR nama LIKE '%".$keyword."%'  OR nohp  LIKE '%".$keyword."%' ORDER BY id DESC");
        $hitung_data = mysqli_num_rows($query);
        if ($hitung_data > 0) {
            while ($data = mysqli_fetch_array($query)) {
                
                ?>
                <tr align="center"    >
                    <td><?php echo date('d M Y',strtotime($data['tanggal_batal'])) ?></td>
                    <td ><?php echo $data['nonotabt']; ?></td>
                    <td ><?php echo $data['nota_ref']; ?></td>
                    <td ><?php echo $data['nama']; ?></td>
                    <td><?php echo $data['alasan']; ?></td>
                    
                    
                    	
                    
                </tr>
            <?php } } else { ?> 
                <tr>
                    <td colspan='6' class="text-center">Data Tidak Ditemukan</td>
                </tr>
            <?php } ?>
        </tbody>
    </table>

    