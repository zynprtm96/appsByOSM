<br>
<table class="table container" style="font-size: 14px;">
    <thead>
        <tr align="center">
            <th width="15%" align="center">Tanggal Transaksi</th>
            <th width="15%" align="center">No Nota</th>
            <th width="15%" align="center">Nama</th>

            <th width="15%" align="center">Status</th>
            <th width="15%" align="center">Pembayaran</th>
            
           
           
           
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
                $jumlah = $data['total'];
            $dp = $data['uang_muka'];
            if($data['status']=="L"){
                $status = "Lunas";
                $uang = $jumlah;
                $kelas ="bg-info";
                $color = "black";
            }elseif($data['status']=="BL"){
                $status = "Belum Lunas";
                $uang = $dp;
                $kelas = "bg-danger";
                $color = "white";
            }
                $semua=0;
                ?>
                <tr align="center" class="<?php echo $kelas ?>"  >
                    <td><?php echo date('d M Y',strtotime($data['tanggal_pesan'])) ?></td>
                    <td ><?php echo $data['nonota']; ?></td>
                    <td ><?php echo $data['nama']; ?></td>
                    <td ><?php echo $status ?></td>
                    <td ><?php echo number_format($uang)?></td>
                    
                   
                    
                    
                    	
                    
                </tr>
               
                
                


            <?php } } else { ?> 
                <tr>
                    <td colspan='6' class="text-center">Data Tidak Ditemukan</td>
                </tr>
            <?php } ?>
            <?php
            $jumlah = array();
			$total= 0;
			$totalsemua=0;
			$jumlah[] = $uang;
			
			$total =  array_sum($jumlah);
			$totalsemua +=$total;
			
			?>
                   
            
            
        </tbody>
    </table>

    