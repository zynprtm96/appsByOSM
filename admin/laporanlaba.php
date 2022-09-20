<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
 
    <script src="../aset/js/jqueryslim.js"></script>
  <script src="../aset/js/poper.js"></script>
  <script src="../aset/js/bootbundle.js"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

  <script src="../aset/js/sweetalert.min.js"></script>
  <script src="../aset/js/ajax.js"></script>
    <link rel="stylesheet" href="../aset/css/select.css">
<script src="../aset/js/select.js"></script>
<link href="../aset/box/css/boxicons.min.css" rel="stylesheet">

<script src="../aset/js/box.js"></script>

<link rel="stylesheet" href="../aset/css/side.css" />
    <script src="../aset/js/chart.js"></script>
    
    
    <title>Document</title>
    
</head>
<script>
function printContent(el){
    var restorepage = document.body.innerHTML;
    var printcontent = document.getElementById(el).innerHTML;
    document.body.innerHTML = printcontent;
    window.print();
    document.body.innerHTML = restorepage;
}
</script>

<body>

<header class="header">
<div class="header__container">
                <img src="../aset/img/marmot.svg" style="height: 100px;width: 100px;" alt="" class="header__img">

                <a href="#" class="header__logo">Halaman Admin</a>
    
                
    
                <div class="header__toggle">
                    <i class='bx bx-menu' id="header-toggle"></i>
                </div>
            </div>
        </header>

        <!--========== NAV ==========-->
        <div class="nav" id="navbar">
            <nav class="nav__container">
                <div>
                    <a href="#" class="nav__link nav__logo">
                    <img src="../aset/img/osm.svg" alt="" /><br>
                        <span class="nav__logo-name">OSM</span>
                    </a>
    
                    <div class="nav__list">
                        <div class="nav__items">
                            
    
                            <a href="../admin/rumah.php" class="nav__link active">
                                <i class='bx bx-home nav__icon' ></i>
                                <span class="nav__name">Home</span>
                            </a>
                            
                            <div class="nav__dropdown">
                                <a href="#" class="nav__link">
                                    <i class='bx bxs-data nav__icon' ></i>
                                    <span class="nav__name">Master Barang</span>
                                    <i class='bx bx-chevron-down nav__icon nav__dropdown-icon'></i>
                                </a>

                                <div class="nav__dropdown-collapse">
                                    <div class="nav__dropdown-content">
                                        <a href="../admin/lensa.php" class="nav__dropdown-item">Lensa</Frame></a>
                                        <a href="../admin/frame.php" class="nav__dropdown-item">Frame</a>
                                        <a href="../admin/other.php" class="nav__dropdown-item">Other</a>
                                 
                                    </div>
                                </div>
                            </div>

                            
                        </div>
    
                        <div class="nav__items">

                        <div class="nav__dropdown">
                                <a href="#" class="nav__link">
                                <i class='bx bx-notification-off nav__icon'></i>
                                    
                                    <span class="nav__name">Pembatalan Nota</span>
                                    <i class='bx bx-chevron-down nav__icon nav__dropdown-icon'></i>
                                </a>

                                <div class="nav__dropdown-collapse">
                                    <div class="nav__dropdown-content">
                                        <a href="../kar/notabatalkontan.php" class="nav__dropdown-item">Batal Nota Kontan</a>
                                        <a href="../kar/notabatal.php" class="nav__dropdown-item">Batal Nota Pesan</a>
                                        <a href="../kar/notabatalgaransi.php" class="nav__dropdown-item">Batal Nota Garansi</a>
                                        <a href="../kar/notabatalor.php" class="nav__dropdown-item">Batal Order Lensa</a>
                                 
                                    </div>
                                </div>

                            </div>
                            
                            <a href="../admin/pengeluaran.php" class="nav__link">
                                <i class='bx bx-notepad nav__icon' ></i>
                                <span class="nav__name">Pengeluaran</span>
                            </a>
                            <a href="../admin/laporanpengeluaran.php" class="nav__link">
                                <i class='bx bxs-notepad nav__icon' ></i>
                                <span class="nav__name">Lap Pengeluaran</span>
                            </a>
                            <a href="../admin/laporanlaba.php" class="nav__link">
                                <i class='bx bx-wallet nav__icon' ></i>
                                <span class="nav__name">Lap Laba</span>
                            </a>
                            <a href="../admin/pelanggan.php" class="nav__link">
                                <i class='bx bx-user nav__icon' ></i>
                                <span class="nav__name">Master Pelanggan</span>
                            </a>
                            <a href="../admin/user.php" class="nav__link">
                                <i class='bx bxs-user nav__icon' ></i>
                                <span class="nav__name">Master User</span>
                            </a>
                       
                            
    
                            <div class="nav__dropdown">
                                <a href="#" class="nav__link">
                                <i class='bx bx-data nav__icon' ></i>
                                    <span class="nav__name">Database</span>
                                    <i class='bx bx-chevron-down nav__icon nav__dropdown-icon'></i>
                                </a>

                                <div class="nav__dropdown-collapse">
                                    <div class="nav__dropdown-content">
                                        <a href="../admin/prosesbackup.php" class="nav__dropdown-item">Backup</a>
                                        <a href="../admin/restore.php" class="nav__dropdown-item">Restore</a>
                                  
                                        
                                        
                                 
                                   
                                </div>

                            </div>
                           

                            </div>
                            

                           
                           
                        </div>
                    </div>
                </div>

                <a href="../proses/logout.php" class="nav__link nav__logout">
                    <i class='bx bx-log-out nav__icon' ></i>
                    <span class="nav__name">Log Out</span>
                </a>
            </nav>
        </div>

    <main>
        
        
    <div class="container" >
   
       
	

   
    <center>
    <form method="POST" action="" class="form-inline " >
    
     <label for="date1">Tanggal mulai &nbsp; </label>
     <input type="date" name="date1" id="date1" class="form-control mr-2">
     <label for="date2">&nbsp;Sampai &nbsp;</label>
     <input type="date" name="date2" id="date2" class="form-control mr-2">
     <button type="submit" name="range" class="btn btn-primary">Apply</button>&nbsp;&nbsp;
     <button type="submit" name="reset" class="btn btn-warning">Reset</button>&nbsp;&nbsp;
     </form>
     <br>
     </center>
     <div>
     <button class="btn btn-primary btn-sm"  onclick="printContent('div1')">Cetak Laporan</button>
     <a href="../admin/laporanlabagrafik.php" type="button" class="btn btn-primary">Grafik</a>

    
     </div>
     
    
    
    
    </div>
    <div class="container" id="div1">

    <h4 style="text-align: center;">Laporan Laba</h4>
<table class="table container" style="font-size: 14px;">
    <thead>
        <tr align="center">
            <th width="15%" align="center">Tanggal </th>
            <th width="15%" align="center">Pemasukan</th>
            <th width="15%" align="center">Pengeluaran</th>
            <th width="15%" align="center">Laba</th>
            
            <?php
function format_hari_tanggal($waktu)
{
    $hari_array = array(
        'Minggu',
        'Senin',
        'Selasa',
        'Rabu',
        'Kamis',
        'Jumat',
        'Sabtu'
    );
    $hr = date('w', strtotime($waktu));
    $hari = $hari_array[$hr];
    $tanggal = date('j', strtotime($waktu));
    $bulan_array = array(
        1 => 'Januari',
        2 => 'Februari',
        3 => 'Maret',
        4 => 'April',
        5 => 'Mei',
        6 => 'Juni',
        7 => 'Juli',
        8 => 'Agustus',
        9 => 'September',
        10 => 'Oktober',
        11 => 'November',
        12 => 'Desember',
    );
    $bl = date('n', strtotime($waktu));
    $bulan = $bulan_array[$bl];
    $tahun = date('Y', strtotime($waktu));
    $jam = date( 'H:i:s', strtotime($waktu));
    
    //untuk menampilkan hari, tanggal bulan tahun jam
    //return "$hari, $tanggal $bulan $tahun $jam";

    //untuk menampilkan hari, tanggal bulan tahun
    return " $bulan $tahun";
}
date_default_timezone_set('Asia/Jakarta'); // Zona Waktu indonesia

$date=date('Y-m-d H:i:s');
?>
           
           
        </tr>
    </thead>
    <tbody>
        <?php
        $no = 1;
        $total= 0;
			$totalsemua=0;
        include('../config/koneksi.php');
        $keyword="";
        if (isset($_POST['search'])) {
            $keyword = $_POST['search'];
            $query = mysqli_query($konek,"SELECT * FROM laba WHERE produk LIKE '%".$keyword."%'  ORDER BY id DESC");
        }elseif (isset($_POST['range'])) {
            $date1 = $_POST['date1'];
            $date2 = $_POST['date2'];
            $tanggal = mysqli_query($konek,"SELECT  tanggal , sum(pemasukan) as pemasukan, sum(pengeluaran) as pengeluaran  FROM laba WHERE tanggal BETWEEN '$date1' and '$date2'  group by month(tanggal)");
           
        }elseif(isset($_POST['reset'])){
            $tanggal = mysqli_query($konek,"SELECT  tanggal, sum(pemasukan) as pemasukan, sum(pengeluaran) as pengeluaran FROM laba group by month(tanggal) ");
            


        }
        else{
            $tanggal = mysqli_query($konek,"SELECT  tanggal, sum(pemasukan) as pemasukan, sum(pengeluaran) as pengeluaran FROM laba group by month(tanggal) ");
           
        }

   
      
        
        while ($data = mysqli_fetch_array($tanggal) 
        ) { 
                
                ?>
                    

                 
                <tr align="center"  >
                    
                    <td><?php echo format_hari_tanggal($data['tanggal']) ?></td>
                    
                    <td ><?php echo number_format($data['pemasukan']); ?></td>
                    <td ><?php echo number_format($data['pengeluaran']); ?></td>
                    <td>
                        <?php
                        $laba = $data['pemasukan'] - $data['pengeluaran'];
                        echo number_format($laba);
                        ?>
                    </td>
                    
                     	
                    
                </tr>
                

                <?php } ?>
                
                


           
                
         
            
			
			
           
                   
            
            
        </tbody>
    </table>

    

    </div>
    
    </div>
    
    </main>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>


    
</body>

</html>