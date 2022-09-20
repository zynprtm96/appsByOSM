<br>
<table class="table container" style="font-size: 14px;">
    <thead>
        <tr align="center">
            
            <th  align="center">NAMA</th>
            <th  align="center">ID PASIEN</th>
            <th  align="center">NO REKAM MEDIS</th>
            <th  align="center">USIA</th>
            <th  align="center">NO TELP</th>
           
            
            
           
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

        $query = mysqli_query($konek,"SELECT * FROM master_pelanggan WHERE  nama LIKE '%".$keyword."%' OR usia LIKE '%".$keyword."%' OR nohp LIKE '%".$keyword."%' ");
        $hitung_data = mysqli_num_rows($query);
        if ($hitung_data > 0) {
            while ($data = mysqli_fetch_array($query)) {
                
                ?>
                <tr align="center"    >
                   
                    <td ><?php echo $data['nama']; ?></td>
                      <td ><?php echo $data['id_pasien']; ?></td>
                      <td ><?php echo $data['norekam']; ?></td>
                    <td ><?php echo $data['usia']; ?></td>
                    <td ><?php echo $data['nohp']; ?></td>
                   
                   
                    	
                    
                </tr>
            <?php } } else { ?> 
                <tr>
                    <td colspan='6' class="text-center">Data Tidak Ditemukan</td>
                </tr>
            <?php } ?>
        </tbody>
    </table>

    