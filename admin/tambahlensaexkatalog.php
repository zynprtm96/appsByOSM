<?php require '../config/koneksi.php'; ?><!DOCTYPE html>

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
    
    
    <title>Document</title>
    
</head>

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
    <h5 style="text-align: center;">Import Lensa Katalog EXCEL</h5>
    <div >
	<form class="" action="" method="post" enctype="multipart/form-data">
			<input class="form-control" type="file" name="excel" required value="">
            <br>
			<button type="submit" class="btn btn-primary" name="import">Import</button>
		</form>
    <br>
    
    </div>
    <?php
		if(isset($_POST["import"])){
			$fileName = $_FILES["excel"]["name"];
			$fileExtension = explode('.', $fileName);
      $fileExtension = strtolower(end($fileExtension));
			$newFileName = date("Y.m.d") . " - " . date("h.i.sa") . "." . $fileExtension;

			$targetDirectory = "../aset/uploads/" . $newFileName;
			move_uploaded_file($_FILES['excel']['tmp_name'], $targetDirectory);

			error_reporting(0);
			ini_set('display_errors', 0);

			require '../aset/excelReader/excel_reader2.php';
			require '../aset/excelReader/SpreadsheetReader.php';

			$reader = new SpreadsheetReader($targetDirectory);
			foreach($reader as $key => $row){
				$kode_lensa = $row[0];
				$merk = $row[1];
				$jenis = $row[2];
                $qyt = $row[4];
                $harga = $row[3];
                $kategori = $row[5];
                $sph = $row[5];
                $cyl = $row[6];
                $adisi = $row[7];
			
                $barang = mysqli_query($konek,"SELECT * FROM master_lensa where kode_lensa='$kode_lensa'");
                $cek = mysqli_num_rows($barang);
                if($cek == 0){
                    $masuk = mysqli_query($konek, "INSERT INTO master_lensa VALUES('', '$kode_lensa', '$merk', '$jenis','$qyt','$harga','$kategori','$sph','$cyl','$adisi')");
                }else{
                    $data1 = mysqli_fetch_array($barang);
                    $stok = $data1['qyt'] + $qyt;
                    $masuk = mysqli_query($konek,"UPDATE master_lensa SET qyt='$stok' merk='$merk' jenis='$jenis' harga='$harga' where kode_lensa='$kode_lensa'");
                }

            }
			$files    =glob('../aset/uploads/*.xlsx');
foreach ($files as $file) {
    if (is_file($file))
    unlink($file); // hapus file
}

			
echo  " 
    
<script src='../aset/js/sweetalert.min.js'></script>
<script type='text/javascript'>
setTimeout(function () {  
swal({
title: 'Import Berhasil',
text: 'Silahkan Cetak Nota!',
icon: 'success',
button: 'OK!',

timer: 8000,
showConfirmButton: true
});  
},10); 
window.setTimeout(function(){ 
window.location.replace('../admin/tambahframeexkatalog.php');
} ,2000); 
</script>
";
		}
		?>

        <div>
            <a href="../admin/dtemplensstok.php?file=tamplate_lensakatalog.xlsx" type="button" class="btn btn-success">Download Tamplate</a>
        </div>
        <div>
            <br>
            <p>Cara Pakai :</p>
            <p>1. Download Tamplate yang telah disediakan</p>
            <p>2. Isi excel berdasarkan judul yang disediakan pada tamplate</p>
            <p>3. Tulis dengan huruf kapital semua</p>
            <p>4. Untuk Kolom Kategori isi dengan "KATALOG"</p>
            <p>5. Untuk Kode Lensa isi dengan format "LK(merk+jenis+produk+fitur+indeks)"</p>
            <p>6. Sebelum diapload harap menghapus judul terlebih dahulu ini sangat penting</p>
            <p>7. Upload pada kolom yang disediakan</p>
            <p>8. Lalu Import </p>
            <p>Contoh Kode Lensa : </p>
            <p>LKPOLPROGPCSPHTB1.56</p>
            <p>LK adalah kode untuk lensa katalog</p>
            <p>POL adalah merk dari POLYCORE</p>
            <p>PROG adalah jenis lensa PROGRESIF</p>
            <p>PCS adalah POLYSOFT CUSTOM SUITE</p>
            <p>PHTB adaalah Photo U Blue</p>
            <p>1.56 adalah indeks bias lensa</p>
            <p>Untuk jenis lensa Bisa menggunakan :</p>
            <p>SV untuk Single Vision</p>
            <p>KT untuk Kriptok</p>
            <p>FT untuk Flattop</p>
            <p>PROG/PAL untuk Progresif</p>
        </div>
    
    <div  class="container">

    </div>
    </div>
    </main>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script type="text/javascript">
  $(document).ready(function(){
    load_data();
    function load_data(search){
      $.ajax({
        url:"../proses/datalensa.php",
        method:"POST",
        data: {
          search: search
        },
        success:function(data){
          $('#hasil').html(data);
        }
      });
    }
    $('#search').keyup(function(){
      var search = $("#search").val();
      load_data(search);
    });
  });
  </script>

    
</body>
</html>