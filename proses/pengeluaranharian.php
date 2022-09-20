<table class="table container" style="font-size: 14px;">
    <thead>
        <tr align="center">
            
            <th  align="center">Tanggal</th>
            <th  align="center">Produk</th>
            <th  align="center">Pengeluaran</th>
            
           
            
            
           
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
$date = date('ymd');
        $query = mysqli_query($konek,"SELECT * FROM pengeluaran WHERE tanggal = '$date'  order by id desc");
        $hitung_data = mysqli_num_rows($query);
        if ($hitung_data > 0) {
            while ($data = mysqli_fetch_array($query)) {
                
                
                ?>
                <tr align="center"   >
                   
                    <td ><?php echo $data['tanggal']; ?></td>
                    <td ><?php echo $data['produk']; ?></td>
                    <td ><?php echo number_format($data['pengeluaran']); ?></td>
                   
                    	
                    
                </tr>
            <?php } } else { ?> 
                <tr>
                    <td colspan='6' class="text-center">Data Tidak Ditemukan</td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
