<br>
<table class="table container" style="font-size: 14px;">
    <thead>
        <tr align="center">
            
            <th width="15%" align="center">Tanggal Transaksi</th>
            <th width="15%" align="center">No Nota</th>
            <th width="15%" align="center">Uang Masuk</th>
           
           
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

        $query = mysqli_query($konek,"SELECT * FROM penjualan order by id DESC");
        $hitung_data = mysqli_num_rows($query);
        if ($hitung_data > 0) {
            while ($data = mysqli_fetch_array($query)) {
                
                ?>
                <tr align="center"    >
                    
                <td ><?php echo date('d M Y',strtotime($data['tanggal'])) ?></td> 
                    <td ><?php echo $data['nonota']; ?></td>
                    <td ><?php echo $data['pembayaran']; ?></td>
           
                   
                    	
                    
                </tr>
            <?php } } else { ?> 
                <tr>
                    <td colspan='3' class="text-center">Data Tidak Ditemukan</td>
                </tr>
            <?php } ?>
        </tbody>
    </table>



    