<!DOCTYPE html>
<?php 
include '../config/koneksi.php';
include '../config/idtoko.php';?>
<html lang="en">
<head>
  <title>HOME</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
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
<link rel="stylesheet" href="../aset/css/float.css" />
</head>

<style>
    
.tuingor{
    position: absolute;
    top: 80px;
    left: 145px;
    width: 25px;
    height: 25px;
    background: red;
    color: #fff;
    display: flex;
    justify-content: center;
    align-items: center;
    border-radius: 50%;
}
  
.tuingrek{
    position: absolute;
    top: 130px;
    left: 145px;
    width: 25px;
    height: 25px;
    background: red;
    color: #fff;
    display: flex;
    justify-content: center;
    align-items: center;
    border-radius: 50%;
}
  
.tuingambil{
    position: absolute;
    top: 180px;
    left: 145px;
    width: 25px;
    height: 25px;
    background: red;
    color: #fff;
    display: flex;
    justify-content: center;
    align-items: center;
    border-radius: 50%;
}
    .rangkasurat{
                width: 1080px;
                
                margin-left: 5px;
                background-color:#fff;
                
                padding:20px;

            }
</style>

<body>
<header class="header">
            <div class="header__container">
                <img src="../aset/img/marmot.svg" alt="" style="height: 100px;width: 100px;" class="header__img">

                <a href="#" class="header__logo">Halaman User</a>
    
                
    
                <div class="header__toggle">
                    <i class='bx bx-menu'  id="header-toggle"></i>
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
                            
    
                            <a href="../kar/rumah.php" class="nav__link active">
                                <i class='bx bx-home nav__icon' ></i>
                                <span class="nav__name">Home</span>
                            </a>
                            
                            <div class="nav__dropdown">
                                <a href="#" class="nav__link">
                                    <i class='bx bx-note nav__icon' ></i>
                                    <span class="nav__name">Transaksi</span>
                                    <i class='bx bx-chevron-down nav__icon nav__dropdown-icon'></i>
                                </a>

                                <div class="nav__dropdown-collapse">
                                    <div class="nav__dropdown-content">
                                        <a href="../kar/fnkontan.php" class="nav__dropdown-item">Nota Kontan</Frame></a>
                                        <a href="../kar/fnpesan.php" class="nav__dropdown-item">Nota Pesan</a>
                                        <a href="../kar/pengambilan.php" class="nav__dropdown-item">Nota Pengambilan</a>
                                        <a href="../kar/order.php" class="nav__dropdown-item">Order Lensa</a>
                                    </div>
                                </div>
                            </div>

                            
                        </div>
    
                        <div class="nav__items">

                        <div class="nav__dropdown">
                                <a href="#" class="nav__link">
                                    <i class='bx bxs-note nav__icon' ></i>
                                    <span class="nav__name">Garansi</span>
                                    <i class='bx bx-chevron-down nav__icon nav__dropdown-icon'></i>
                                </a>

                                <div class="nav__dropdown-collapse">
                                    <div class="nav__dropdown-content">
                                        <a href="../kar/fngaransi.php" class="nav__dropdown-item">Buat Garansi</a>
                                        <a href="../kar/ordergaransi.php" class="nav__dropdown-item">Order Lensa Garansi</a>
                                        <a href="../kar/pengambilangaransi.php" class="nav__dropdown-item">Pengambilan Garansi</a>
                                 
                                    </div>
                                </div>

                            </div>
                            
    
                            <div class="nav__dropdown">
                                <a href="#" class="nav__link">
                                    <i class='bx bx-bar-chart-square nav__icon' ></i>
                                    <span class="nav__name">Laporan</span>
                                    <i class='bx bx-chevron-down nav__icon nav__dropdown-icon'></i>
                                </a>

                                <div class="nav__dropdown-collapse">
                                    <div class="nav__dropdown-content">
                                        <a href="../kar/laporanpenjualan.php" class="nav__dropdown-item">Penjualan</a>
                                        <a href="../kar/laporanomset.php" class="nav__dropdown-item">Omset</a>
                                        <a href="../kar/histori.php" class="nav__dropdown-item">History</a>
                                        <a href="../kar/laporanproduk.php" class="nav__dropdown-item">Produk</a>
                                        <a href="../kar/laporangaransi.php" class="nav__dropdown-item">Garansi</a>
                                        <a href="../kar/fnbatal.php" class="nav__dropdown-item">Pembatalan</a>
                                        
                                        
                                 
                                    </div>
                                </div>

                            </div>
                            <div class="nav__dropdown">
                                <a href="#" class="nav__link">
                                    <i class='bx bx-receipt nav__icon' ></i>
                                    <span class="nav__name">Rekam Medis</span>
                                    <i class='bx bx-chevron-down nav__icon nav__dropdown-icon'></i>
                                </a>

                                <div class="nav__dropdown-collapse">
                                    <div class="nav__dropdown-content">
                                        <a href="../kar/pemeriksaan.php" class="nav__dropdown-item">Buat Baru</a>
                                        <a href="../kar/fnrekam.php" class="nav__dropdown-item">Lihat</a>
                                        <a href="../kar/fnrujukan.php" class="nav__dropdown-item">Rujukan</a>
                                        <a href="../kar/worksheet.php" class="nav__dropdown-item">Worksheet</a>
                                        
                                        
                                 
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
    return "$hari, $tanggal $bulan $tahun";
}
date_default_timezone_set('Asia/Jakarta'); // Zona Waktu indonesia

$date=date('Y-m-d H:i:s');
?>

    <div class="container" >
    <div class="row dalam">
        <div class="col-3">
            
            <img src="../aset/img/baner.svg" alt="" width="80%">

        </div>
        <div class="col-6" style="text-align: left;margin-top:45px;">
        <p>Manajemen Aplikasi Rekam Medis Optik Terintegrasi (MARMOT)</p>  
        <p style="font-size: 10px;">POWERED BY</p>
        <p>OPTICAL SYSTEM MANAGEMENT (OSM)</p>
        </div>
        
      

    </div>


    <h6>Transaksi Terbaru : </h6>
    <table class="table table-borderless">
        <tr >
            <td>
            <div class="card" >

<div class="card-header bg-primary" style="color: #fff;text-align:center;">
Nota Kontan 
</div>
<div class="card-body">
    <?php 
    $kontan =  mysqli_query($konek,"SELECT * FROM nota_kontan order by id desc");
   
    $hitung_datakontan = mysqli_num_rows($kontan);
    if ($hitung_datakontan > 0) {
        $data_kontan = mysqli_fetch_array($kontan);
    if($data_kontan['batal']=="Y"){
        $batalnk = "hidden";
    }else{
        $batalnk="";
    }
    ?>
    <p <?php echo $batalnk?>><?php echo date('d M Y',strtotime($data_kontan['tanggal_transaksi']))?></p> 
<p <?php echo $batalnk?>><?php echo $data_kontan['nonota']?></p> 
<p style="font-size: 12px;" <?php echo $batalnk?>><?php echo $data_kontan['nama']?></p> 
<p <?php echo $batalnk?>><?php echo number_format($data_kontan['total'])?></p>
<p <?php echo $batalnk?> style="font-size: 12px;">.</p> 
<p <?php echo $batalnk?>  style="font-size: 12px;">.</p> 
<center>
<a <?php echo $batalnk?> href="../kar/cetaknotakontanid.php?id=<?php echo $data_kontan['nonota']?>" type="button" class="btn btn-primary">VIEW</a>
</center>
<?php } ?>
</div>
</div>
            </td>
            <td>
            <div class="card" >

<div class="card-header bg-primary" style="color: #fff;text-align:center;">
Nota Pesan 
</div>
<div class="card-body">
<?php 
    $pesan =  mysqli_query($konek,"SELECT * FROM nota_pesan order by id desc");
    $hitungpesan = mysqli_num_rows($pesan);
    if ($hitungpesan > 0) {
    $data_pesan = mysqli_fetch_array($pesan);
    if($data_pesan['batal']=="Y"){
        $batalnp = "hidden";
    }else{
        $batalnp="";
    }
    if($data_pesan['stator']=="BT"){
        $or = "Lensa Belum Di Order";
    }else{
        $or = "Lensa Sudah Di Order";
    }
    if($data_pesan['rekam']=="BT"){
        $rekam = "Rekam Medis Belum Diisi";
    }else{
        $rekam = "Rekam Medis Sudah Diisi";
    }
    if($data_pesan['barang']=="BD"){
        $barang = "Barang Belum Di Ambil";
    }else{
        $barang = "Barang Sudah Di Ambil";
    }
    ?>
<p <?php echo $batalnp?>> <?php echo date('d M Y',strtotime($data_pesan['tanggal_pesan']))?></p> 
<p <?php echo $batalnp?>><?php echo $data_pesan['nonota']?></p> 
<p <?php echo $batalnp?> style="font-size: 12px;"><?php echo $data_pesan['nama']?></p> 
<p <?php echo $batalnp?>><?php echo number_format($data_pesan['total'])?></p>
<p <?php echo $batalnp?> style="font-size: 12px;"><?php echo $or?></p> 
<p <?php echo $batalnp?> style="font-size: 12px;"><?php echo $rekam?></p> 
 
<center>
<a <?php echo $batalnp?> href="../kar/cetaknotapesanid.php?id=<?php echo $data_pesan['nonota']?>" type="button" class="btn btn-primary">VIEW</a>
</center>

<?php } ?>
</div>
</div>
            </td>
           
            <td>
            <div class="card" >

<div class="card-header bg-primary" style="color: #fff;text-align:center;">
Order Lensa
</div>
<div class="card-body">
<?php 
    $orderlab =  mysqli_query($konek,"SELECT * FROM order_lab join nota_pesan on order_lab.nota_ref=nota_pesan.nonota order by order_lab.id desc");

    $hitungor = mysqli_num_rows($orderlab);
    if ($hitungor > 0) {
    $data_order = mysqli_fetch_array($orderlab);

    ?>
    
<p><?php echo date('d M Y',strtotime($data_order['tanggal_order']))?></p> 
<p><?php echo $data_order['nonotaor']?></p> 
<p><?php echo $data_order['nota_ref']?></p> 
<p style="font-size: 12px;"><?php echo $data_order['nama']?></p> 
<p style="font-size: 12px;">.</p> 
<p style="font-size: 12px;">.</p> 

<center>
<a href="../kar/cetakor.php?id=<?php echo $data_order['nonotaor']?>" type="button" class="btn btn-primary">VIEW</a>
</center>
<?php } ?>


</div>
</div>
            </td>
            <td>
            <div class="card" >

<div class="card-header bg-primary" style="color: #fff;text-align:center;">
Rekam Medis
</div>
<div class="card-body">
<?php
   $rm =  mysqli_query($konek,"SELECT * FROM rekam_medis order by id desc");
   $hitungrekam = mysqli_num_rows($rm);
    if ($hitungrekam > 0) {
   $data_rekam = mysqli_fetch_array($rm);
?>
<p><?php echo date('d M Y',strtotime($data_rekam['tanggal_periksa']))?></p> 
<p><?php echo $data_rekam['norekam']?></p> 
<p><?php echo $data_rekam['noresep']?></p> 
<p style="font-size: 12px;"><?php echo $data_rekam['nama']?></p> 
<p style="font-size: 12px;"><?php echo $data_rekam['pemeriksa']?></p>
 
<p style="font-size: 12px;">.</p>
<center>
<a href="../kar/resep.php?id=<?php echo $data_rekam['id']?>" type="button" class="btn btn-primary">VIEW</a>
</center> 
<?php } ?>
</div>
</div>
            </td>
            <td>
            <div class="card" >

<div class="card-header bg-primary" style="color: #fff;text-align:center;">
Rujukan
</div>
<div class="card-body">
    <?php
$rujukan =  mysqli_query($konek,"SELECT * FROM rujukan join rekam_medis on rujukan.noresep = rekam_medis.noresep order by rujukan.id desc");
$hitungrujukan = mysqli_num_rows($rujukan);
    if ($hitungrujukan > 0) {
$data_rujukan = mysqli_fetch_array($rujukan);
    ?>
    
<p><?php echo date('d M Y',strtotime($data_rujukan['tanggal_rujukan']))?></p> 
<p><?php echo $data_rujukan['norujukan']?></p> 
<p><?php echo $data_rujukan['noresep']?></p> 
<p style="font-size: 12px;"><?php echo $data_rujukan['nama']?></p> 
<p style="font-size: 12px;"><?php echo $data_rujukan['rs']?></p> 
<p style="font-size: 12px;">.</p>

<center>
<a href="../kar/rujukanid.php?id=<?php echo $data_rujukan['norujukan']?>" type="button" class="btn btn-primary">VIEW</a>
</center> 
<?php } ?>
</div>
</div>
            </td>
            <td>
            <div class="card" >

<div class="card-header bg-primary" style="color: #fff;text-align:center;">
Pengambilan
</div>
<div class="card-body">
<?php
$pengambilan =  mysqli_query($konek,"SELECT * FROM nota_pesan where barang='D' order by id desc");
$hitungambil = mysqli_num_rows($pengambilan);
    if ($hitungambil > 0) {
$data_ambil = mysqli_fetch_array($pengambilan);
?>
   
   <p><?php echo date('d M Y',strtotime($data_ambil['tanggal_ambil']))?></p> 
<p><?php echo $data_ambil['nonota']?></p> 
<p><?php echo $data_ambil['nama']?></p> 
<p style="font-size: 12px;">.</p>
<p style="font-size: 12px;">.</p>
<p style="font-size: 12px;">.</p>

<center>
<a href="../kar/cetakambil.php?id=<?php echo $data_ambil['id']?>" type="button" class="btn btn-primary">VIEW</a>
</center> 
<?php } ?>

</div>
</div>
            </td>
           
            
        </tr>

    </table>

   
    
    








    <div class="floating">
        <div class="card" style="width:300px">
        <?php

        $notip = mysqli_query($konek,"SELECT * FROM nota_pesan where stator='BT' or  rekam='BT' or  barang='BD' order by id desc");
        $hitungnotip = mysqli_num_rows($notip);

        $nullor = mysqli_query($konek,"SELECT * FROM nota_pesan where stator='BT' order by id desc");
        $hitungor = mysqli_num_rows($nullor);
        $nullrek = mysqli_query($konek,"SELECT * FROM nota_pesan where rekam='BT' order by id desc");
        $hitungrek = mysqli_num_rows($nullrek);
        $nullambil = mysqli_query($konek,"SELECT * FROM nota_pesan where barang='BD' order by id desc");
        $hitungambil = mysqli_num_rows($nullambil);

        if($hitungnotip == 0){
            $bulat="hidden";
            $jumlahnotip ="";
        }else{
            $bulat="";
            $jumlahnotip= $hitungor + $hitungrek + $hitungambil;
        }

        ?>
       

        <div class="accordion-item" style="display: block;" id="notif" >
    <h2 class="accordion-header" id="headingTwo">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
        Notifikasi <p <?php echo $bulat?> class="tuing"><?php echo $jumlahnotip?></p>
      </button>
    </h2>
    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <table class="table">
           
            <tr>
                <?php
                
                $nullor = mysqli_query($konek,"SELECT * FROM nota_pesan where stator='BT' order by id desc");
                $hitungor = mysqli_num_rows($nullor);
               if($hitungor == 0){
                $nor = "hidden";
                $jumlahnullor="";
               }else{ 
                $nor="";
                $jumlahnullor = mysqli_num_rows($nullor);

               }

                ?>
                <td id="order">Order Lensa<span <?php echo $nor?> class="tuingor"><?php echo $jumlahnullor?> </span></td>
                
                
            </tr>
            <tr>
            <?php
                
                $nullrek = mysqli_query($konek,"SELECT * FROM nota_pesan where rekam='BT' order by id desc");
                $hitungrek = mysqli_num_rows($nullrek);
               if($hitungrek == 0){
                $nrek = "hidden";
                $jumlahrek="";
               }else{ 
                $nrek="";
                $jumlahrek = mysqli_num_rows($nullrek);

               }

                ?>
            
                <td id="rekam">Rekam Medis<span <?php echo $nrek?> class="tuingrek"><?php echo $jumlahrek?> </span></td>
            </tr>
            <tr>
            <?php
                
                $nullambil = mysqli_query($konek,"SELECT * FROM nota_pesan where barang='BD' order by id desc");
                $hitungambil = mysqli_num_rows($nullambil);
               if($hitungambil == 0){
                $nambil = "hidden";
                $jumlahambil="";
               }else{ 
                $nambil="";
                $jumlahambil = mysqli_num_rows($nullambil);

               }

                ?>
                <td id="ambil">Pengambilan<span <?php echo $nambil?> class="tuingambil"><?php echo $jumlahambil?></span></td>
            </tr>

        </table>
      </div>
    </div>
  </div>

    </div>
    <div class="accordion-item" id="ordertab" style="display:none;" >
    <h2 class="accordion-header" id="headingTwo">
      <button class="accordion-button collapsed"  type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
      Order Lensa
      </button>
    </h2>
    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <button id="backorder" style="border:none;">Kembali</button>
        <br>
        <table class="table table-responsive-sm">
            <?php
             $order = mysqli_query($konek,"SELECT * FROM nota_pesan order by id desc");
             
                 while ($data = mysqli_fetch_array($order)) {
                    if($data['stator']=="BT"){
                        $sediaor="";
                    }else{
                        $sediaor="hidden";
                    }
                     
                   

            ?>
            <tr>
                <td <?php echo $sediaor?> > <a href="../kar/order.php" type="button" style="border: none;"> <?php echo $data['nonota']?> Belum Order Lensa</a></td>
            </tr>
            <?php
                 }
            ?>
           

        </table>
      </div>
    </div>
  </div>

  <div class="accordion-item" id="rekamtab" style="display:none;" >
    <h2 class="accordion-header" id="headingTwo">
      <button class="accordion-button collapsed"  type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
      Rekam Medis
      </button>
    </h2>
    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <button id="backrekam" style="border:none;">Kembali</button>
        <br>
        <table class="table">
        <?php
             $order = mysqli_query($konek,"SELECT * FROM nota_pesan order by id desc");
             
                 while ($data = mysqli_fetch_array($order)) {
                    if($data['rekam']=="BT"){
                        $sediarekam="";
                    }else{
                        $sediarekam="hidden";
                    }
                     
                   

            ?>
            <tr>
                <td <?php echo $sediarekam?> > <a href="../kar/orrekam.php" type="button" style="border: none;"> <?php echo $data['nonota']?> Belum Isi Rekam Medis</a></td>
            </tr>
            <?php
                 }
            ?>
           

        </table>
      </div>
    </div>
  </div>

  <div class="accordion-item" id="ambiltab" style="display:none;" >
    <h2 class="accordion-header" id="headingTwo">
      <button class="accordion-button collapsed"  type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
      Pengambilan
      </button>
    </h2>
    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <button id="backambil" style="border:none;">Kembali</button>
        <br>
        <table class="table">
        <?php
             $order = mysqli_query($konek,"SELECT * FROM nota_pesan order by id desc");
             
                 while ($data = mysqli_fetch_array($order)) {
                    if($data['barang']=="BD"){
                        $sediabarang="";
                    }else{
                        $sediabarang="hidden";
                    }
                     
                   

            ?>
            <tr>
                <td <?php echo $sediabarang?> > <a href="../kar/pengambilan.php" type="button" style="border: none;"><?php echo $data['nonota']?> Belum Diambil</a></td>
            </tr>
            <?php
                 }
            ?>
           

        </table>
      </div>
    </div>
  </div>

    </div>


   

    </main> 
    <script>
         $('#order').click(function(){
       
  
            document.getElementById("ordertab").style.display = "block";
             document.getElementById("notif").style.display = "none";
  });

    </script>
     <script>
         $('#backorder').click(function(){
       
  
            document.getElementById("ordertab").style.display = "none";
             document.getElementById("notif").style.display = "block";
  });

    </script>

<script>
         $('#rekam').click(function(){
       
  
            document.getElementById("rekamtab").style.display = "block";
             document.getElementById("notif").style.display = "none";
  });

    </script>
     <script>
         $('#backrekam').click(function(){
       
  
            document.getElementById("rekamtab").style.display = "none";
             document.getElementById("notif").style.display = "block";
  });

    </script>
    <script>
         $('#ambil').click(function(){
       
  
            document.getElementById("ambiltab").style.display = "block";
             document.getElementById("notif").style.display = "none";
  });

    </script>
     <script>
         $('#backambil').click(function(){
       
  
            document.getElementById("ambiltab").style.display = "none";
             document.getElementById("notif").style.display = "block";
  });

    </script>
    <!-- <script>
$(document).ready(function(){
  $("#pesan").click(function(){
    $("pesan").hide(1000);
  });
});
</script> -->
</body>
</html>