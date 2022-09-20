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
    
    
    <title>Document</title>
    <script>
function printContent(el){
    var restorepage = document.body.innerHTML;
    var printcontent = document.getElementById(el).innerHTML;
    document.body.innerHTML = printcontent;
    window.print();
    document.body.innerHTML = restorepage;
}
</script>
<script >
        function gambar() {
        var x = document.getElementById('gambar');
        if (x.style.display === 'none') {
         x.style.display = 'block';
       } else {
         x.style.display = 'none';
       }
     }
         </script>
    
</head>

<style>
    @page 
    {
        size: auto;   /* auto is the initial value */
        margin-top: 0mm;  /* this affects the margin in the printer settings */
    }
    
    .rangkasurat{
                width: 980px;
                margin:0 auto;
                background-color:#fff;
                
                padding:20px;

            }
            table{
                border-bottom:2px solid #000;
                padding:2px;
            }
            .tengah{
                text-align:center;
                line-height:5px;
            }
            .row-dalam {
  display: -ms-flexbox;
  display: flex;
  -ms-flex-wrap: wrap;
  flex-wrap: wrap;
  margin-right: -15px;
  margin-left: -15px;
}
.col-1, .col-2, .col-3, .col-4, .col-5, .col-6, .col-7, .col-8, .col-9, .col-10, .col-11, .col-12, .col,
.col-auto, .col-sm-1, .col-sm-2, .col-sm-3, .col-sm-4, .col-sm-5, .col-sm-6, .col-sm-7, .col-sm-8, .col-sm-9, .col-sm-10, .col-sm-11, .col-sm-12, .col-sm,
.col-sm-auto, .col-md-1, .col-md-2, .col-md-3, .col-md-4, .col-md-5, .col-md-6, .col-md-7, .col-md-8, .col-md-9, .col-md-10, .col-md-11, .col-md-12, .col-md,
.col-md-auto, .col-lg-1, .col-lg-2, .col-lg-3, .col-lg-4, .col-lg-5, .col-lg-6, .col-lg-7, .col-lg-8, .col-lg-9, .col-lg-10, .col-lg-11, .col-lg-12, .col-lg,
.col-lg-auto, .col-xl-1, .col-xl-2, .col-xl-3, .col-xl-4, .col-xl-5, .col-xl-6, .col-xl-7, .col-xl-8, .col-xl-9, .col-xl-10, .col-xl-11, .col-xl-12, .col-xl,
.col-xl-auto {
  position: relative;
  width: 100%;
  min-height: 1px;
  padding-right: 15px;

}
.table {
  width: 100%;
  margin-bottom: 1rem;
  background-color: transparent;
}

.table th,
.table td {
  padding: 0.75rem;
  vertical-align: top;
  border-top: 1px solid #dee2e6;
}

.table thead th {
  vertical-align: bottom;
  border-bottom: 2px solid #dee2e6;
}

.table tbody + tbody {
  border-top: 2px solid #dee2e6;
}

.table .table {
  background-color: #fff;
}

.table-sm th,
.table-sm td {
  padding: 0.3rem;
}

.table-bordered {
  border: 1px solid #dee2e6;
}

.table-bordered th,
.table-bordered td {
  border: 1px solid #dee2e6;
}

.table-bordered thead th,
.table-bordered thead td {
  border-bottom-width: 2px;
}

.table-borderless th,
.table-borderless td,
.table-borderless thead th,
.table-borderless tbody + tbody {
  border: 0;
}

.table-striped tbody tr:nth-of-type(odd) {
  background-color: rgba(0, 0, 0, 0.05);
}

.table-hover tbody tr:hover {
  background-color: rgba(0, 0, 0, 0.075);
}

.table-primary,
.table-primary > th,
.table-primary > td {
  background-color: #b8daff;
}

.table-hover .table-primary:hover {
  background-color: #9fcdff;
}

.table-hover .table-primary:hover > td,
.table-hover .table-primary:hover > th {
  background-color: #9fcdff;
}

.table-secondary,
.table-secondary > th,
.table-secondary > td {
  background-color: #d6d8db;
}

.table-hover .table-secondary:hover {
  background-color: #c8cbcf;
}

.table-hover .table-secondary:hover > td,
.table-hover .table-secondary:hover > th {
  background-color: #c8cbcf;
}

.table-success,
.table-success > th,
.table-success > td {
  background-color: #c3e6cb;
}

.table-hover .table-success:hover {
  background-color: #b1dfbb;
}

.table-hover .table-success:hover > td,
.table-hover .table-success:hover > th {
  background-color: #b1dfbb;
}

.table-info,
.table-info > th,
.table-info > td {
  background-color: #bee5eb;
}

.table-hover .table-info:hover {
  background-color: #abdde5;
}

.table-hover .table-info:hover > td,
.table-hover .table-info:hover > th {
  background-color: #abdde5;
}

.table-warning,
.table-warning > th,
.table-warning > td {
  background-color: #ffeeba;
}

.table-hover .table-warning:hover {
  background-color: #ffe8a1;
}

.table-hover .table-warning:hover > td,
.table-hover .table-warning:hover > th {
  background-color: #ffe8a1;
}

.table-danger,
.table-danger > th,
.table-danger > td {
  background-color: #f5c6cb;
}

.table-hover .table-danger:hover {
  background-color: #f1b0b7;
}

.table-hover .table-danger:hover > td,
.table-hover .table-danger:hover > th {
  background-color: #f1b0b7;
}

.table-light,
.table-light > th,
.table-light > td {
  background-color: #fdfdfe;
}

.table-hover .table-light:hover {
  background-color: #ececf6;
}

.table-hover .table-light:hover > td,
.table-hover .table-light:hover > th {
  background-color: #ececf6;
}

.table-dark,
.table-dark > th,
.table-dark > td {
  background-color: #c6c8ca;
}

.table-hover .table-dark:hover {
  background-color: #b9bbbe;
}

.table-hover .table-dark:hover > td,
.table-hover .table-dark:hover > th {
  background-color: #b9bbbe;
}

.table-active,
.table-active > th,
.table-active > td {
  background-color: rgba(0, 0, 0, 0.075);
}

.table-hover .table-active:hover {
  background-color: rgba(0, 0, 0, 0.075);
}

.table-hover .table-active:hover > td,
.table-hover .table-active:hover > th {
  background-color: rgba(0, 0, 0, 0.075);
}

.table .thead-dark th {
  color: #fff;
  background-color: #212529;
  border-color: #32383e;
}

.table .thead-light th {
  color: #495057;
  background-color: #e9ecef;
  border-color: #dee2e6;
}

.table-dark {
  color: #fff;
  background-color: #212529;
}

.table-dark th,
.table-dark td,
.table-dark thead th {
  border-color: #32383e;
}

.table-dark.table-bordered {
  border: 0;
}

.table-dark.table-striped tbody tr:nth-of-type(odd) {
  background-color: rgba(255, 255, 255, 0.05);
}

.table-dark.table-hover tbody tr:hover {
  background-color: rgba(255, 255, 255, 0.075);
}

@media (max-width: 575.98px) {
  .table-responsive-sm {
    display: block;
    width: 100%;
    overflow-x: auto;
    -webkit-overflow-scrolling: touch;
    -ms-overflow-style: -ms-autohiding-scrollbar;
  }
  .table-responsive-sm > .table-bordered {
    border: 0;
  }
}

@media (max-width: 767.98px) {
  .table-responsive-md {
    display: block;
    width: 100%;
    overflow-x: auto;
    -webkit-overflow-scrolling: touch;
    -ms-overflow-style: -ms-autohiding-scrollbar;
  }
  .table-responsive-md > .table-bordered {
    border: 0;
  }
}

@media (max-width: 991.98px) {
  .table-responsive-lg {
    display: block;
    width: 100%;
    overflow-x: auto;
    -webkit-overflow-scrolling: touch;
    -ms-overflow-style: -ms-autohiding-scrollbar;
  }
  .table-responsive-lg > .table-bordered {
    border: 0;
  }
}

@media (max-width: 1199.98px) {
  .table-responsive-xl {
    display: block;
    width: 100%;
    overflow-x: auto;
    -webkit-overflow-scrolling: touch;
    -ms-overflow-style: -ms-autohiding-scrollbar;
  }
  .table-responsive-xl > .table-bordered {
    border: 0;
  }
}

.table-responsive {
  display: block;
  width: 100%;
  overflow-x: auto;
  -webkit-overflow-scrolling: touch;
  -ms-overflow-style: -ms-autohiding-scrollbar;
}

.table-responsive > .table-bordered {
  border: 0;
}
.btn {
  display: inline-block;
  font-weight: 300;
  text-align: center;
  white-space: nowrap;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
  border: 1px solid transparent;
  padding: 0.375rem 0.75rem;
  font-size: 1rem;
  line-height: 1.5;
  border-radius: 0.25rem;
  cursor: pointer;
  transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
}
.btn-primary {
  color: #fff;
  background-color: #007bff;
  border-color: #007bff;
}

.btn-primary:hover {
  color: #fff;
  background-color: #0069d9;
  border-color: #0062cc;
}

.btn-primary:focus, .btn-primary.focus {
  box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.5);
}

.btn-primary.disabled, .btn-primary:disabled {
  color: #fff;
  background-color: #007bff;
  border-color: #007bff;
}

.btn-primary:not(:disabled):not(.disabled):active, .btn-primary:not(:disabled):not(.disabled).active,
.show > .btn-primary.dropdown-toggle {
  color: #fff;
  background-color: #0062cc;
  border-color: #005cbf;
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
	include "../config/koneksi.php";
	$id = $_GET['id']; 
	$sql = mysqli_query($konek,"SELECT * FROM nota_pesan INNER JOIN order_lab on nota_pesan.nonota=order_lab.nota_ref WHERE nota_pesan.id='$id'");
  $tanggal=date('d-M-Y');
	$data = mysqli_fetch_array($sql);
    $nota = $data['nonota'];
        $urutan = (int) substr($nota, 5, 5);
 

        
        $huruf = "RSP-";
	    $resep = $huruf . sprintf("%05s", $urutan); 
if($data['statrekam']=="O"){
  $isian = "readonly";
}elseif($data['statrekam']=="M"){
  $isian = "";

}
      

	?>
    <div class="container"  >
   
    <div class="rangkasurat">
    <h5 style="text-align: center;">REKAM MEDIS</h5><br>
      <form method="post" action="../proses/prosesrekam.php">
      <h5 style="text-align: center;">Identitas</h5>
      <input hidden type="text" id="effect5" class="effect-5" readonly  placeholder=" " name="id" value="<?php echo $id;?>"/>
      <input type="text" id="effect5" class="effect-5" readonly hidden placeholder=" " name="nonota" value="<?php echo $data['nonota'];?>"/>
                          <div class="masukan">
                            <input type="text" id="effect5" class="effect-5" readonly placeholder=" " name="noresep" value="<?php echo $resep;?>"/>
                            <label for="effect5">No Resep</label>
                          </div>
                          <div class="masukan">
                            <input type="text" id="effect5" class="effect-5" value="<?php echo $tanggal ?>" readonly placeholder=" "  />
                            <label for="effect5">Tanggal Periksa</label>
                          </div>
                          <div class="masukan">
                            <input type="text" id="effect5" class="effect-5" placeholder=" " name="id_pasien" value="<?php echo $data['id_pasien'];?>"/>
                            <label for="effect5">ID Pasien</label>
                          </div>
                          <div class="masukan">
                            <input type="text" id="effect5" class="effect-5" placeholder=" " name="norekam" value="<?php echo $data['norekam'];?>"/>
                            <label for="effect5">No Rekam Medis</label>
                          </div>
                          <div class="masukan">
                            <input type="text" id="effect5" class="effect-5" placeholder=" " name="nama" value="<?php echo $data['nama'];?>"/>
                            <label for="effect5">Nama</label>
                          </div>
                          <div class="masukan">
                            <input type="text" id="effect5" class="effect-5" placeholder=" " name="alamat" value="<?php echo $data['alamat'];?>" />
                            <label for="effect5">Alamat</label>
                          </div>
                          <div class="masukan">
                            <input type="text" id="effect5" class="effect-5" placeholder=" " name="usia" value="<?php echo $data['usia'];?>" />
                            <label for="effect5">Usia</label>
                          </div>
                          <div class="masukan">
                            <input type="text" id="effect5" class="effect-5" placeholder=" " name="nohp" value="<?php echo $data['nohp'];?>"/>
                            <label for="effect5">NO Telp</label>
                          </div>
                          <div class="masukan">
                            <input onkeyup="this.value = this.value.toUpperCase()" type="text" id="effect5" class="effect-5" placeholder=" " value="<?php echo $data['pemeriksa'];?>" name="pemeriksa" />
                            <label for="effect5">Pemeriksa</label>
                          </div>
                          <div class="masukan">
                            <input onkeyup="this.value = this.value.toUpperCase()" type="text" id="effect5" class="effect-5" placeholder=" " name="anamnesa" />
                            <label for="effect5">Anamnesa</label>
                          </div>
                          <h5 style="text-align: center;">Pemeriksaan Pendahuluan</h5>
                          <h6 style="text-align: center;">Inpeksi Dan Observasi Pasien</h6>
                          <div class="row-dalam masukan" style="margin-left: 2px;">
                            <div class="col">
                            <label for="effect5">Keadaan Posisi Bola Mata Kanan</label>
                            <select class="hargalr effect-5" style="width:100%;"  name="pbr">
                            
                            <option value="">PILIH</option>
                            <option value="DBN">DBN</option>
                              <option value="SUSPEK BOLA MATA MENONJOL">SUSPEK BOLA MATA MENONJOL</option>
                              <option value="SUSPEK BOLA MATA TENGGELAM">SUSPEK BOLA MATA TENGGELAM</option>
                              <option value="SUSPEK ORTHO">SUSPEK ORTHO</option>
                              <option value="SUSPEK CYCLOTHROPY/PHORIA">SUSPEK CYCLOTHROPY/PHORIA</option>
                              <option value="SUSPEK XT">SUSPEK XT</option>
                              <option value="SUSPEK ET">SUSPEK ET</option>
                              <option value="SUSPEK XP">SUSPEK XP</option>
                              <option value="SUSPEK EP">SUSPEK EP</option>
                        </select>
                        <script>
                          $(".hargalr").select2();
                        </script>
                       
                           
                              
                              
                            </datalist>
                            </div>
                            <div class="col">
                            
                            <label for="effect5">Keadaan Posisi Bola Mata Kiri</label>
                            <select class="hargalr effect-5" style="width:100%;"  name="pbl">
                            
                            <option value="">PILIH</option>
                            <option value="DBN">DBN</option>
                              <option value="SUSPEK BOLA MATA MENONJOL">SUSPEK BOLA MATA MENONJOL</option>
                              <option value="SUSPEK BOLA MATA TENGGELAM">SUSPEK BOLA MATA TENGGELAM</option>
                              <option value="SUSPEK ORTHO">SUSPEK ORTHO</option>
                              <option value="SUSPEK CYCLOTHROPY/PHORIA">SUSPEK CYCLOTHROPY/PHORIA</option>
                              <option value="SUSPEK XT">SUSPEK XT</option>
                              <option value="SUSPEK ET">SUSPEK ET</option>
                              <option value="SUSPEK XP">SUSPEK XP</option>
                              <option value="SUSPEK EP">SUSPEK EP</option>
                        </select>
                        <script>
                          $(".hargalr").select2();
                        </script>
                       
                            </div>

                          </div>
                          <div class="row-dalam masukan" style="margin-left: 2px;">
                          <div class="col">
                            
                            <label for="effect5">Konjungtiva Dan Sklera Mata Kanan</label>
                            <select class="hargalr effect-5" style="width:100%;"  name="ksr">
                            
                            <option value="">PILIH</option>
                            <option value="DBN">DBN</option>
                              <option value="SUSPEK MATA MERAH BERAIR">SUSPEK MATA MERAH BERAIR</option>
                              <option value="SUSPEK MATA MERAH BERNANAH">SUSPEK MATA MERAH BERNANAH</option>
                              <option value="SUSPEK SKB">SUSPEK SKB</option>
                              <option value="SUSPEK ADA BERCAK BITOT">SUSPEK ADA BERCAK BITOT</option>
                              <option value="SUSPEK PTERiGIUM">SUSPEK PTERiGIUM</option>
                              
                        </select>
                        <script>
                          $(".hargalr").select2();
                        </script>
                       
                           
                            </div>
                            <div class="col">

                            <label for="effect5">Konjungtiva Dan Sklera Mata Kiri</label>
                            <select class="hargalr effect-5" style="width:100%;"  name="ksl">
                            
                            <option value="">PILIH</option>
                            <option value="DBN">DBN</option>
                              <option value="SUSPEK MATA MERAH BERAIR">SUSPEK MATA MERAH BERAIR</option>
                              <option value="SUSPEK MATA MERAH BERNANAH">SUSPEK MATA MERAH BERNANAH</option>
                              <option value="SUSPEK SKB">SUSPEK SKB</option>
                              <option value="SUSPEK ADA BERCAK BITOT">SUSPEK ADA BERCAK BITOT</option>
                              <option value="SUSPEK PTERiGIUM">SUSPEK PTERiGIUM</option>
                              
                        </select>
                        <script>
                          $(".hargalr").select2();
                        </script>
                            </div>
                            
                          </div>
                          <div class="row-dalam masukan" style="margin-left: 2px;">
                            <div class="col">
      
                            <label for="effect5">Keadaan Lensa Mata Kanan</label>
                            <select class="hargalr effect-5" style="width:100%;"  name="lmr">
                            
                            <option value="">PILIH</option>
                            <option value="DBN">DBN</option>
                              <option value="SUSPEK KATARAK">SUSPEK KATARAK</option>
                              <option value="SUSPEK LUKSASIO LENTIS">SUSPEK LUKSASIO LENTIS</option>
                              <option value="SUSPEK APHAKIA">SUSPEK APHAKIA</option>
                              <option value="SUSPEK PSEUDOPHAKIA">SUSPEK PSEUDOPHAKIA</option>
                             
                        </select>
                        <script>
                          $(".hargalr").select2();
                        </script>
                            
                            </div>
                            <div class="col">

                            <label for="effect5">Keadaan Lensa Mata Kiri</label>
                            <select class="hargalr effect-5" style="width:100%;"  name="lml">
                            
                            <option value="">PILIH</option>
                            <option value="DBN">DBN</option>
                              <option value="SUSPEK KATARAK">SUSPEK KATARAK</option>
                              <option value="SUSPEK LUKSASIO LENTIS">SUSPEK LUKSASIO LENTIS</option>
                              <option value="SUSPEK APHAKIA">SUSPEK APHAKIA</option>
                              <option value="SUSPEK PSEUDOPHAKIA">SUSPEK PSEUDOPHAKIA</option>
                             
                        </select>
                        <script>
                          $(".hargalr").select2();
                        </script>
                            </div>

                          </div>
                          <div class="row-dalam masukan" style="margin-left: 2px;">
                            <div class="col">
                            
                            <label for="effect5">Keadaan Kornea Mata Kanan</label>
                            <select class="hargalr effect-5" style="width:100%;"  name="kmr">
                            
                            <option value="">PILIH</option>
                            <option value="DBN">DBN</option>
                              <option value="SUSPEK ADA MAKULA/NEBULA/LEUKOMA">SUSPEK ADA MAKULA/NEBULA/LEUKOMA</option>
                              <option value="SUSPEK NEOVASKULARISASI">SUSPEK NEOVASKULARISASI</option>
                              
                             
                        </select>
                        <script>
                          $(".hargalr").select2();
                        </script>
                           
                            </div>
                            <div class="col">

                            <label for="effect5">Keadaan Kornea Mata Kiri</label>
                            <select class="hargalr effect-5" style="width:100%;"  name="kml">
                            
                            <option value="">PILIH</option>
                            <option value="DBN">DBN</option>
                              <option value="SUSPEK ADA MAKULA/NEBULA/LEUKOMA">SUSPEK ADA MAKULA/NEBULA/LEUKOMA</option>
                              <option value="SUSPEK NEOVASKULARISASI">SUSPEK NEOVASKULARISASI</option>
                              
                             
                        </select>
                        <script>
                          $(".hargalr").select2();
                        </script>
                            </div>
                            <br>
                          </div>
                          <h6 style="text-align: center;">Ukuran Kacamata Lama</h6>
                          <div class="row-dalam masukan">
                            <div class="col-2 " style="margin: auto; text-align: center;">
                                OD
                            </div>
                            <div class="col">
                                
                                <label for="effect5">SPH</label>
                                <select name="sphrseb" class="sphlsek" style="width: 100%;">
                                    <option value="">PILIH</option>
                                <option value="+20.00">+20.00</option>
<option value="+19.75">+19.75</option>
<option value="+19.50">+19.50</option>
<option value="+19.25">+19.25</option>
<option value="+19.00">+19.00</option>
<option value="+18.75">+18.75</option>
<option value="+18.50">+18.50</option>
<option value="+18.25">+18.25</option>
<option value="+18.00">+18.00</option>
<option value="+17.75">+17.75</option>
<option value="+17.50">+17.50</option>
<option value="+17.25">+17.25</option>
<option value="+17.00">+17.00</option>
<option value="+16.75">+16.75</option>
<option value="+16.50">+16.50</option>
<option value="+16.25">+16.25</option>
<option value="+16.00">+16.00</option>
<option value="+15.75">+15.75</option>
<option value="+15.50">+15.50</option>
<option value="+15.25">+15.25</option>
<option value="+15.00">+15.00</option>
<option value="+14.75">+14.75</option>
<option value="+14.50">+14.50</option>
<option value="+14.25">+14.25</option>
<option value="+14.00">+14.00</option>
<option value="+13.75">+13.75</option>
<option value="+13.50">+13.50</option>
<option value="+13.25">+13.25</option>
<option value="+13.00">+13.00</option>
<option value="+12.75">+12.75</option>
<option value="+12.50">+12.50</option>
<option value="+12.25">+12.25</option>
<option value="+12.00">+12.00</option>
<option value="+11.75">+11.75</option>
<option value="+11.50">+11.50</option>
<option value="+11.25">+11.25</option>
<option value="+11.00">+11.00</option>
<option value="+10.75">+10.75</option>
<option value="+10.50">+10.50</option>
<option value="+10.25">+10.25</option>
<option value="+10.00">+10.00</option>
<option value="+9.75">+9.75</option>
<option value="+9.50">+9.50</option>
<option value="+9.25">+9.25</option>
<option value="+9.00">+9.00</option>
<option value="+8.75">+8.75</option>
<option value="+8.50">+8.50</option>
<option value="+8.25">+8.25</option>
<option value="+8.00">+8.00</option>
<option value="+7.75">+7.75</option>
<option value="+7.50">+7.50</option>
<option value="+7.25">+7.25</option>
<option value="+7.00">+7.00</option>
<option value="+6.75">+6.75</option>
<option value="+6.50">+6.50</option>
<option value="+6.25">+6.25</option>
<option value="+6.00">+6.00</option>
<option value="+5.75">+5.75</option>
<option value="+5.50">+5.50</option>
<option value="+5.25">+5.25</option>
<option value="+5.00">+5.00</option>
<option value="+4.75">+4.75</option>
<option value="+4.50">+4.50</option>
<option value="+4.25">+4.25</option>
<option value="+4.00">+4.00</option>
<option value="+3.75">+3.75</option>
<option value="+3.50">+3.50</option>
<option value="+3.25">+3.25</option>
<option value="+3.00">+3.00</option>
<option value="+2.75">+2.75</option>
<option value="+2.50">+2.50</option>
<option value="+2.25">+2.25</option>
<option value="+2.00">+2.00</option>
<option value="+1.75">+1.75</option>
<option value="+1.50">+1.50</option>
<option value="+1.25">+1.25</option>
<option value="+1.00">+1.00</option>
<option value="+0.75">+0.75</option>
<option value="+0.50">+0.50</option>
<option value="+0.25">+0.25</option>
<option value="0.00 ">0.00</option>
<option value="-0.25">-0.25</option>
<option value="-0.50">-0.50</option>
<option value="-0.75">-0.75</option>
<option value="-1.00">-1.00</option>
<option value="-1.25">-1.25</option>
<option value="-1.50">-1.50</option>
<option value="-1.75">-1.75</option>
<option value="-2.00">-2.00</option>
<option value="-2.25">-2.25</option>
<option value="-2.50">-2.50</option>
<option value="-2.75">-2.75</option>
<option value="-3.00">-3.00</option>
<option value="-3.25">-3.25</option>
<option value="-3.50">-3.50</option>
<option value="-3.75">-3.75</option>
<option value="-4.00">-4.00</option>
<option value="-4.25">-4.25</option>
<option value="-4.50">-4.50</option>
<option value="-4.75">-4.75</option>
<option value="-5.00">-5.00</option>
<option value="-5.25">-5.25</option>
<option value="-5.50">-5.50</option>
<option value="-5.75">-5.75</option>
<option value="-6.00">-6.00</option>
<option value="-6.25">-6.25</option>
<option value="-6.50">-6.50</option>
<option value="-6.75">-6.75</option>
<option value="-7.00">-7.00</option>
<option value="-7.25">-7.25</option>
<option value="-7.50">-7.50</option>
<option value="-7.75">-7.75</option>
<option value="-8.00">-8.00</option>
<option value="-8.25">-8.25</option>
<option value="-8.50">-8.50</option>
<option value="-8.75">-8.75</option>
<option value="-9.00">-9.00</option>
<option value="-9.25">-9.25</option>
<option value="-9.50">-9.50</option>
<option value="-9.75">-9.75</option>
<option value="-10.00">-10.00</option>
<option value="-10.25">-10.25</option>
<option value="-10.50">-10.50</option>
<option value="-10.75">-10.75</option>
<option value="-11.00">-11.00</option>
<option value="-11.25">-11.25</option>
<option value="-11.50">-11.50</option>
<option value="-11.75">-11.75</option>
<option value="-12.00">-12.00</option>
<option value="-12.25">-12.25</option>
<option value="-12.50">-12.50</option>
<option value="-12.75">-12.75</option>
<option value="-13.00">-13.00</option>
<option value="-13.25">-13.25</option>
<option value="-13.50">-13.50</option>
<option value="-13.75">-13.75</option>
<option value="-14.00">-14.00</option>
<option value="-14.25">-14.25</option>
<option value="-14.50">-14.50</option>
<option value="-14.75">-14.75</option>
<option value="-15.00">-15.00</option>
<option value="-15.25">-15.25</option>
<option value="-15.50">-15.50</option>
<option value="-15.75">-15.75</option>
<option value="-16.00">-16.00</option>
<option value="-16.25">-16.25</option>
<option value="-16.50">-16.50</option>
<option value="-16.75">-16.75</option>
<option value="-17.00">-17.00</option>
<option value="-17.25">-17.25</option>
<option value="-17.50">-17.50</option>
<option value="-17.75">-17.75</option>
<option value="-18.00">-18.00</option>
<option value="-18.25">-18.25</option>
<option value="-18.50">-18.50</option>
<option value="-18.75">-18.75</option>
<option value="-19.00">-19.00</option>
<option value="-19.25">-19.25</option>
<option value="-19.50">-19.50</option>
<option value="-19.75">-19.75</option>
<option value="-20.00">-20.00</option>


                                </select>
                                <script>
		$(".sphlsek").select2();
	</script>
                            </div>
                            <div class="col">

                                <label for="effect5">CYL</label>
                                <select name="cylrseb" class="cyllsek" style="width: 100%;">
                                    <option value="">PILIH</option>
                                <option value="+6.00">+6.00</option>
<option value="+5.75">+5.75</option>
<option value="+5.50">+5.50</option>
<option value="+5.25">+5.25</option>
<option value="+5.00">+5.00</option>
<option value="+4.75">+4.75</option>
<option value="+4.50">+4.50</option>
<option value="+4.25">+4.25</option>
<option value="+4.00">+4.00</option>
<option value="+3.75">+3.75</option>
<option value="+3.50">+3.50</option>
<option value="+3.25">+3.25</option>
<option value="+3.00">+3.00</option>
<option value="+2.75">+2.75</option>
<option value="+2.50">+2.50</option>
<option value="+2.25">+2.25</option>
<option value="+2.00">+2.00</option>
<option value="+1.75">+1.75</option>
<option value="+1.50">+1.50</option>
<option value="+1.25">+1.25</option>
<option value="+1.00">+1.00</option>
<option value="+0.75">+0.75</option>
<option value="+0.50">+0.50</option>
<option value="+0.25">+0.25</option>
<option value="0.00 ">0.00</option>
<option value="-0.25">-0.25</option>
<option value="-0.50">-0.50</option>
<option value="-0.75">-0.75</option>
<option value="-1.00">-1.00</option>
<option value="-1.25">-1.25</option>
<option value="-1.50">-150</option>
<option value="-1.75">-1.75</option>
<option value="-2.00">-2.00</option>
<option value="-2.25">-2.25</option>
<option value="-2.50">-2.50</option>
<option value="-2.75">-2.75</option>
<option value="-3.00">-3.00</option>
<option value="-3.25">-3.25</option>
<option value="-3.50">-3.50</option>
<option value="-3.75">-3.75</option>
<option value="-4.00">-4.00</option>
<option value="-4.25">-4.25</option>
<option value="-4.50">-4.50</option>
<option value="-4.75">-4.75</option>
<option value="-5.00">-5.00</option>
<option value="-5.25">-5.25</option>
<option value="-5.50">-5.50</option>
<option value="-5.75">-5.75</option>
<option value="-6.00">-6.00</option>
                            </select>
                            <script>
		$(".cyllsek").select2();
	</script>
                            </div>
                            <div class="col">
                               
                                <label for="effect5">AXIS</label>
                                      <select name="axrseb" class="axlsek" style="width: 100%;">
                                    <option value="">PILIH</option>
<option value="0">0</option>
<option value="5">5</option>
<option value="10">10</option>
<option value="15">15</option>
<option value="20">20</option>
<option value="25">25</option>
<option value="30">30</option>
<option value="35">35</option>
<option value="40">40</option>
<option value="45">45</option>
<option value="50">50</option>
<option value="55">55</option>
<option value="65">65</option>
<option value="70">70</option>
<option value="75">75</option>
<option value="80">80</option>
<option value="85">85</option>
<option value="90">90</option>
<option value="95">95</option>
<option value="100">100</option>
<option value="105">105</option>
<option value="110">110</option>
<option value="115">115</option>
<option value="120">120</option>
<option value="125">125</option>
<option value="130">130</option>
<option value="135">135</option>
<option value="140">140</option>
<option value="145">145</option>
<option value="150">150</option>
<option value="155">155</option>
<option value="160">160</option>
<option value="165">165</option>
<option value="170">170</option>
<option value="175">175</option>
<option value="180">180</option>
                            </select>
                            <script>
		$(".axlsek").select2();
	</script>
                            </div>
                            <div class="col">
                                <input type="text" id="effect5" autocomplete="off" class="effect-5"  placeholder=" " name="visusrseb" />
                                <label for="effect5">VISUS</label>
                            </div>
                            
                            <div class="col">
                                <input type="text" id="effect5" autocomplete="off" class="effect-5"  placeholder=" " name="prisrseb" />
                                <label for="effect5">PRIS</label>
                            </div>
                            <div class="col">
                                <input type="text" id="effect5" autocomplete="off" class="effect-5"  placeholder=" " name="baserseb" />
                                <label for="effect5">BASE</label>
                            </div>
                            <div class="col">
                                
                                <label for="effect5">ADD</label>
                                <select name="adisirseb" class="adisilsek" style="width: 100%;">
                                    <option value="">PILIH</option>
<option value="+3.00">+3.00</option>
<option value="+2.75">+2.75</option>
<option value="+2.50">+2.50</option>
<option value="+2.25">+2.25</option>
<option value="+2.00">+2.00</option>
<option value="+1.75">+1.75</option>
<option value="+1.50">+1.50</option>
<option value="+1.25">+1.25</option>
<option value="+1.00">+1.00</option>
<option value="+0.75">+0.75</option>
<option value="+0.50">+0.50</option>
<option value="+0.25">+0.25</option>
                            </select>
                            <script>
		$(".adisilsek").select2();
	</script>
                            </div>
                          
                            
                            
                          </div>
                          <div class="row-dalam masukan">
                            <div class="col-2 " style="margin: auto; text-align: center;">
                                OS
                            </div>
                            <div class="col">
                                
                                <label for="effect5">SPH</label>
                                <select name="sphlseb" class="sphlsek" style="width: 100%;">
                                    <option value="">PILIH</option>
                                <option value="+20.00">+20.00</option>
<option value="+19.75">+19.75</option>
<option value="+19.50">+19.50</option>
<option value="+19.25">+19.25</option>
<option value="+19.00">+19.00</option>
<option value="+18.75">+18.75</option>
<option value="+18.50">+18.50</option>
<option value="+18.25">+18.25</option>
<option value="+18.00">+18.00</option>
<option value="+17.75">+17.75</option>
<option value="+17.50">+17.50</option>
<option value="+17.25">+17.25</option>
<option value="+17.00">+17.00</option>
<option value="+16.75">+16.75</option>
<option value="+16.50">+16.50</option>
<option value="+16.25">+16.25</option>
<option value="+16.00">+16.00</option>
<option value="+15.75">+15.75</option>
<option value="+15.50">+15.50</option>
<option value="+15.25">+15.25</option>
<option value="+15.00">+15.00</option>
<option value="+14.75">+14.75</option>
<option value="+14.50">+14.50</option>
<option value="+14.25">+14.25</option>
<option value="+14.00">+14.00</option>
<option value="+13.75">+13.75</option>
<option value="+13.50">+13.50</option>
<option value="+13.25">+13.25</option>
<option value="+13.00">+13.00</option>
<option value="+12.75">+12.75</option>
<option value="+12.50">+12.50</option>
<option value="+12.25">+12.25</option>
<option value="+12.00">+12.00</option>
<option value="+11.75">+11.75</option>
<option value="+11.50">+11.50</option>
<option value="+11.25">+11.25</option>
<option value="+11.00">+11.00</option>
<option value="+10.75">+10.75</option>
<option value="+10.50">+10.50</option>
<option value="+10.25">+10.25</option>
<option value="+10.00">+10.00</option>
<option value="+9.75">+9.75</option>
<option value="+9.50">+9.50</option>
<option value="+9.25">+9.25</option>
<option value="+9.00">+9.00</option>
<option value="+8.75">+8.75</option>
<option value="+8.50">+8.50</option>
<option value="+8.25">+8.25</option>
<option value="+8.00">+8.00</option>
<option value="+7.75">+7.75</option>
<option value="+7.50">+7.50</option>
<option value="+7.25">+7.25</option>
<option value="+7.00">+7.00</option>
<option value="+6.75">+6.75</option>
<option value="+6.50">+6.50</option>
<option value="+6.25">+6.25</option>
<option value="+6.00">+6.00</option>
<option value="+5.75">+5.75</option>
<option value="+5.50">+5.50</option>
<option value="+5.25">+5.25</option>
<option value="+5.00">+5.00</option>
<option value="+4.75">+4.75</option>
<option value="+4.50">+4.50</option>
<option value="+4.25">+4.25</option>
<option value="+4.00">+4.00</option>
<option value="+3.75">+3.75</option>
<option value="+3.50">+3.50</option>
<option value="+3.25">+3.25</option>
<option value="+3.00">+3.00</option>
<option value="+2.75">+2.75</option>
<option value="+2.50">+2.50</option>
<option value="+2.25">+2.25</option>
<option value="+2.00">+2.00</option>
<option value="+1.75">+1.75</option>
<option value="+1.50">+1.50</option>
<option value="+1.25">+1.25</option>
<option value="+1.00">+1.00</option>
<option value="+0.75">+0.75</option>
<option value="+0.50">+0.50</option>
<option value="+0.25">+0.25</option>
<option value="0.00 ">0.00</option>
<option value="-0.25">-0.25</option>
<option value="-0.50">-0.50</option>
<option value="-0.75">-0.75</option>
<option value="-1.00">-1.00</option>
<option value="-1.25">-1.25</option>
<option value="-1.50">-1.50</option>
<option value="-1.75">-1.75</option>
<option value="-2.00">-2.00</option>
<option value="-2.25">-2.25</option>
<option value="-2.50">-2.50</option>
<option value="-2.75">-2.75</option>
<option value="-3.00">-3.00</option>
<option value="-3.25">-3.25</option>
<option value="-3.50">-3.50</option>
<option value="-3.75">-3.75</option>
<option value="-4.00">-4.00</option>
<option value="-4.25">-4.25</option>
<option value="-4.50">-4.50</option>
<option value="-4.75">-4.75</option>
<option value="-5.00">-5.00</option>
<option value="-5.25">-5.25</option>
<option value="-5.50">-5.50</option>
<option value="-5.75">-5.75</option>
<option value="-6.00">-6.00</option>
<option value="-6.25">-6.25</option>
<option value="-6.50">-6.50</option>
<option value="-6.75">-6.75</option>
<option value="-7.00">-7.00</option>
<option value="-7.25">-7.25</option>
<option value="-7.50">-7.50</option>
<option value="-7.75">-7.75</option>
<option value="-8.00">-8.00</option>
<option value="-8.25">-8.25</option>
<option value="-8.50">-8.50</option>
<option value="-8.75">-8.75</option>
<option value="-9.00">-9.00</option>
<option value="-9.25">-9.25</option>
<option value="-9.50">-9.50</option>
<option value="-9.75">-9.75</option>
<option value="-10.00">-10.00</option>
<option value="-10.25">-10.25</option>
<option value="-10.50">-10.50</option>
<option value="-10.75">-10.75</option>
<option value="-11.00">-11.00</option>
<option value="-11.25">-11.25</option>
<option value="-11.50">-11.50</option>
<option value="-11.75">-11.75</option>
<option value="-12.00">-12.00</option>
<option value="-12.25">-12.25</option>
<option value="-12.50">-12.50</option>
<option value="-12.75">-12.75</option>
<option value="-13.00">-13.00</option>
<option value="-13.25">-13.25</option>
<option value="-13.50">-13.50</option>
<option value="-13.75">-13.75</option>
<option value="-14.00">-14.00</option>
<option value="-14.25">-14.25</option>
<option value="-14.50">-14.50</option>
<option value="-14.75">-14.75</option>
<option value="-15.00">-15.00</option>
<option value="-15.25">-15.25</option>
<option value="-15.50">-15.50</option>
<option value="-15.75">-15.75</option>
<option value="-16.00">-16.00</option>
<option value="-16.25">-16.25</option>
<option value="-16.50">-16.50</option>
<option value="-16.75">-16.75</option>
<option value="-17.00">-17.00</option>
<option value="-17.25">-17.25</option>
<option value="-17.50">-17.50</option>
<option value="-17.75">-17.75</option>
<option value="-18.00">-18.00</option>
<option value="-18.25">-18.25</option>
<option value="-18.50">-18.50</option>
<option value="-18.75">-18.75</option>
<option value="-19.00">-19.00</option>
<option value="-19.25">-19.25</option>
<option value="-19.50">-19.50</option>
<option value="-19.75">-19.75</option>
<option value="-20.00">-20.00</option>


                                </select>
                                <script>
		$(".sphlsek").select2();
	</script>
                            </div>
                            <div class="col">
                                
                                <label for="effect5">CYL</label>
                                <select name="cyllseb" class="cyllsek" style="width: 100%;">
                                    <option value="">PILIH</option>
                                <option value="+6.00">+6.00</option>
<option value="+5.75">+5.75</option>
<option value="+5.50">+5.50</option>
<option value="+5.25">+5.25</option>
<option value="+5.00">+5.00</option>
<option value="+4.75">+4.75</option>
<option value="+4.50">+4.50</option>
<option value="+4.25">+4.25</option>
<option value="+4.00">+4.00</option>
<option value="+3.75">+3.75</option>
<option value="+3.50">+3.50</option>
<option value="+3.25">+3.25</option>
<option value="+3.00">+3.00</option>
<option value="+2.75">+2.75</option>
<option value="+2.50">+2.50</option>
<option value="+2.25">+2.25</option>
<option value="+2.00">+2.00</option>
<option value="+1.75">+1.75</option>
<option value="+1.50">+1.50</option>
<option value="+1.25">+1.25</option>
<option value="+1.00">+1.00</option>
<option value="+0.75">+0.75</option>
<option value="+0.50">+0.50</option>
<option value="+0.25">+0.25</option>
<option value="0.00 ">0.00</option>
<option value="-0.25">-0.25</option>
<option value="-0.50">-0.50</option>
<option value="-0.75">-0.75</option>
<option value="-1.00">-1.00</option>
<option value="-1.25">-1.25</option>
<option value="-1.50">-150</option>
<option value="-1.75">-1.75</option>
<option value="-2.00">-2.00</option>
<option value="-2.25">-2.25</option>
<option value="-2.50">-2.50</option>
<option value="-2.75">-2.75</option>
<option value="-3.00">-3.00</option>
<option value="-3.25">-3.25</option>
<option value="-3.50">-3.50</option>
<option value="-3.75">-3.75</option>
<option value="-4.00">-4.00</option>
<option value="-4.25">-4.25</option>
<option value="-4.50">-4.50</option>
<option value="-4.75">-4.75</option>
<option value="-5.00">-5.00</option>
<option value="-5.25">-5.25</option>
<option value="-5.50">-5.50</option>
<option value="-5.75">-5.75</option>
<option value="-6.00">-6.00</option>
                            </select>
                            <script>
		$(".cyllsek").select2();
	</script>
                            </div>
                            <div class="col">
                               
                                <label for="effect5">AXIS</label>
                                <select name="axlseb" class="axlsek" style="width: 100%;">
                                    <option value="">PILIH</option>
<option value="0">0</option>
<option value="5">5</option>
<option value="10">10</option>
<option value="15">15</option>
<option value="20">20</option>
<option value="25">25</option>
<option value="30">30</option>
<option value="35">35</option>
<option value="40">40</option>
<option value="45">45</option>
<option value="50">50</option>
<option value="55">55</option>
<option value="65">65</option>
<option value="70">70</option>
<option value="75">75</option>
<option value="80">80</option>
<option value="85">85</option>
<option value="90">90</option>
<option value="95">95</option>
<option value="100">100</option>
<option value="105">105</option>
<option value="110">110</option>
<option value="115">115</option>
<option value="120">120</option>
<option value="125">125</option>
<option value="130">130</option>
<option value="135">135</option>
<option value="140">140</option>
<option value="145">145</option>
<option value="150">150</option>
<option value="155">155</option>
<option value="160">160</option>
<option value="165">165</option>
<option value="170">170</option>
<option value="175">175</option>
<option value="180">180</option>
                            </select>
                            <script>
		$(".axlsek").select2();
	</script>
                            </div>
                            <div class="col">
                                <input type="text" id="effect5" autocomplete="off" class="effect-5"  placeholder=" " name="visuslseb" />
                                <label for="effect5">VISUS</label>
                            </div>
                            <div class="col">
                                <input type="text" id="effect5" autocomplete="off" class="effect-5"  placeholder=" " name="prislseb" />
                                <label for="effect5">PRIS</label>
                            </div>
                            <div class="col">
                                <input type="text" id="effect5" autocomplete="off" class="effect-5"  placeholder=" " name="baselseb" />
                                <label for="effect5">BASE</label>
                            </div>
                            <div class="col">
                                
                                <label for="effect5">ADD</label>
                                <select name="adisilseb" class="adisilsek" style="width: 100%;">
                                    <option value="">PILIH</option>
<option value="+3.00">+3.00</option>
<option value="+2.75">+2.75</option>
<option value="+2.50">+2.50</option>
<option value="+2.25">+2.25</option>
<option value="+2.00">+2.00</option>
<option value="+1.75">+1.75</option>
<option value="+1.50">+1.50</option>
<option value="+1.25">+1.25</option>
<option value="+1.00">+1.00</option>
<option value="+0.75">+0.75</option>
<option value="+0.50">+0.50</option>
<option value="+0.25">+0.25</option>
                            </select>
                            <script>
		$(".adisilsek").select2();
	</script>
                            </div>
                          </div>

                         
                          <div class="row-dalam masukan">
                            <div class="col-2"></div>

                            <div class="col">
                                <input type="text" id="effect5" class="effect-5" placeholder=" " name="jlseb" />
                                <label for="effect5">Jenis Lensa Sebelumnya</label>
                            </div>
                          </div>
                          <br>
                        <h6 style="text-align: center;">Pemeriksaan Refraksi Objektif</h6>
                        <div class="row-dalam masukan" style="margin-left: 2px;">
                            <div class="col">
                            
                            <label for="effect5">Alat</label>
                            <select class="hargalr effect-5" style="width:100%;" onchange="gambar()" name="alat">
                            
                            <option value="">PILIH</option>
                            <option value="REFRAKTOMETRY">REFRAKTOMETRY</option>
                              <option value="KERATOMETRY">KERATOMETRY</option>
                              <option value="RETINOSCOPY">RETINOSCOPY</option>
                              
                        </select>
                        <script>
                          $(".hargalr").select2();
                        </script>
               
                            </div>
                        </div>
                        <div id="gambar" style="display:none;">
                        <div class="row-dalam masukan" >
                            <div class="col-2 " style="margin: auto; text-align: center;">
                                OD
                            </div>
                            <div class="col">
                                
                                <label for="effect5">SPH</label>
                                <select name="sphralat" class="sphlsek" style="width: 100%;">
                                    <option value="">PILIH</option>
                                <option value="+20.00">+20.00</option>
<option value="+19.75">+19.75</option>
<option value="+19.50">+19.50</option>
<option value="+19.25">+19.25</option>
<option value="+19.00">+19.00</option>
<option value="+18.75">+18.75</option>
<option value="+18.50">+18.50</option>
<option value="+18.25">+18.25</option>
<option value="+18.00">+18.00</option>
<option value="+17.75">+17.75</option>
<option value="+17.50">+17.50</option>
<option value="+17.25">+17.25</option>
<option value="+17.00">+17.00</option>
<option value="+16.75">+16.75</option>
<option value="+16.50">+16.50</option>
<option value="+16.25">+16.25</option>
<option value="+16.00">+16.00</option>
<option value="+15.75">+15.75</option>
<option value="+15.50">+15.50</option>
<option value="+15.25">+15.25</option>
<option value="+15.00">+15.00</option>
<option value="+14.75">+14.75</option>
<option value="+14.50">+14.50</option>
<option value="+14.25">+14.25</option>
<option value="+14.00">+14.00</option>
<option value="+13.75">+13.75</option>
<option value="+13.50">+13.50</option>
<option value="+13.25">+13.25</option>
<option value="+13.00">+13.00</option>
<option value="+12.75">+12.75</option>
<option value="+12.50">+12.50</option>
<option value="+12.25">+12.25</option>
<option value="+12.00">+12.00</option>
<option value="+11.75">+11.75</option>
<option value="+11.50">+11.50</option>
<option value="+11.25">+11.25</option>
<option value="+11.00">+11.00</option>
<option value="+10.75">+10.75</option>
<option value="+10.50">+10.50</option>
<option value="+10.25">+10.25</option>
<option value="+10.00">+10.00</option>
<option value="+9.75">+9.75</option>
<option value="+9.50">+9.50</option>
<option value="+9.25">+9.25</option>
<option value="+9.00">+9.00</option>
<option value="+8.75">+8.75</option>
<option value="+8.50">+8.50</option>
<option value="+8.25">+8.25</option>
<option value="+8.00">+8.00</option>
<option value="+7.75">+7.75</option>
<option value="+7.50">+7.50</option>
<option value="+7.25">+7.25</option>
<option value="+7.00">+7.00</option>
<option value="+6.75">+6.75</option>
<option value="+6.50">+6.50</option>
<option value="+6.25">+6.25</option>
<option value="+6.00">+6.00</option>
<option value="+5.75">+5.75</option>
<option value="+5.50">+5.50</option>
<option value="+5.25">+5.25</option>
<option value="+5.00">+5.00</option>
<option value="+4.75">+4.75</option>
<option value="+4.50">+4.50</option>
<option value="+4.25">+4.25</option>
<option value="+4.00">+4.00</option>
<option value="+3.75">+3.75</option>
<option value="+3.50">+3.50</option>
<option value="+3.25">+3.25</option>
<option value="+3.00">+3.00</option>
<option value="+2.75">+2.75</option>
<option value="+2.50">+2.50</option>
<option value="+2.25">+2.25</option>
<option value="+2.00">+2.00</option>
<option value="+1.75">+1.75</option>
<option value="+1.50">+1.50</option>
<option value="+1.25">+1.25</option>
<option value="+1.00">+1.00</option>
<option value="+0.75">+0.75</option>
<option value="+0.50">+0.50</option>
<option value="+0.25">+0.25</option>
<option value="0.00 ">0.00</option>
<option value="-0.25">-0.25</option>
<option value="-0.50">-0.50</option>
<option value="-0.75">-0.75</option>
<option value="-1.00">-1.00</option>
<option value="-1.25">-1.25</option>
<option value="-1.50">-1.50</option>
<option value="-1.75">-1.75</option>
<option value="-2.00">-2.00</option>
<option value="-2.25">-2.25</option>
<option value="-2.50">-2.50</option>
<option value="-2.75">-2.75</option>
<option value="-3.00">-3.00</option>
<option value="-3.25">-3.25</option>
<option value="-3.50">-3.50</option>
<option value="-3.75">-3.75</option>
<option value="-4.00">-4.00</option>
<option value="-4.25">-4.25</option>
<option value="-4.50">-4.50</option>
<option value="-4.75">-4.75</option>
<option value="-5.00">-5.00</option>
<option value="-5.25">-5.25</option>
<option value="-5.50">-5.50</option>
<option value="-5.75">-5.75</option>
<option value="-6.00">-6.00</option>
<option value="-6.25">-6.25</option>
<option value="-6.50">-6.50</option>
<option value="-6.75">-6.75</option>
<option value="-7.00">-7.00</option>
<option value="-7.25">-7.25</option>
<option value="-7.50">-7.50</option>
<option value="-7.75">-7.75</option>
<option value="-8.00">-8.00</option>
<option value="-8.25">-8.25</option>
<option value="-8.50">-8.50</option>
<option value="-8.75">-8.75</option>
<option value="-9.00">-9.00</option>
<option value="-9.25">-9.25</option>
<option value="-9.50">-9.50</option>
<option value="-9.75">-9.75</option>
<option value="-10.00">-10.00</option>
<option value="-10.25">-10.25</option>
<option value="-10.50">-10.50</option>
<option value="-10.75">-10.75</option>
<option value="-11.00">-11.00</option>
<option value="-11.25">-11.25</option>
<option value="-11.50">-11.50</option>
<option value="-11.75">-11.75</option>
<option value="-12.00">-12.00</option>
<option value="-12.25">-12.25</option>
<option value="-12.50">-12.50</option>
<option value="-12.75">-12.75</option>
<option value="-13.00">-13.00</option>
<option value="-13.25">-13.25</option>
<option value="-13.50">-13.50</option>
<option value="-13.75">-13.75</option>
<option value="-14.00">-14.00</option>
<option value="-14.25">-14.25</option>
<option value="-14.50">-14.50</option>
<option value="-14.75">-14.75</option>
<option value="-15.00">-15.00</option>
<option value="-15.25">-15.25</option>
<option value="-15.50">-15.50</option>
<option value="-15.75">-15.75</option>
<option value="-16.00">-16.00</option>
<option value="-16.25">-16.25</option>
<option value="-16.50">-16.50</option>
<option value="-16.75">-16.75</option>
<option value="-17.00">-17.00</option>
<option value="-17.25">-17.25</option>
<option value="-17.50">-17.50</option>
<option value="-17.75">-17.75</option>
<option value="-18.00">-18.00</option>
<option value="-18.25">-18.25</option>
<option value="-18.50">-18.50</option>
<option value="-18.75">-18.75</option>
<option value="-19.00">-19.00</option>
<option value="-19.25">-19.25</option>
<option value="-19.50">-19.50</option>
<option value="-19.75">-19.75</option>
<option value="-20.00">-20.00</option>


                                </select>
                                <script>
		$(".sphlsek").select2();
	</script>
                            </div>
                            <div class="col">
                               
                                <label for="effect5">CYL</label>
                                <select name="cylralat" class="cyllsek" style="width: 100%;">
                                    <option value="">PILIH</option>
                                <option value="+6.00">+6.00</option>
<option value="+5.75">+5.75</option>
<option value="+5.50">+5.50</option>
<option value="+5.25">+5.25</option>
<option value="+5.00">+5.00</option>
<option value="+4.75">+4.75</option>
<option value="+4.50">+4.50</option>
<option value="+4.25">+4.25</option>
<option value="+4.00">+4.00</option>
<option value="+3.75">+3.75</option>
<option value="+3.50">+3.50</option>
<option value="+3.25">+3.25</option>
<option value="+3.00">+3.00</option>
<option value="+2.75">+2.75</option>
<option value="+2.50">+2.50</option>
<option value="+2.25">+2.25</option>
<option value="+2.00">+2.00</option>
<option value="+1.75">+1.75</option>
<option value="+1.50">+1.50</option>
<option value="+1.25">+1.25</option>
<option value="+1.00">+1.00</option>
<option value="+0.75">+0.75</option>
<option value="+0.50">+0.50</option>
<option value="+0.25">+0.25</option>
<option value="0.00 ">0.00</option>
<option value="-0.25">-0.25</option>
<option value="-0.50">-0.50</option>
<option value="-0.75">-0.75</option>
<option value="-1.00">-1.00</option>
<option value="-1.25">-1.25</option>
<option value="-1.50">-150</option>
<option value="-1.75">-1.75</option>
<option value="-2.00">-2.00</option>
<option value="-2.25">-2.25</option>
<option value="-2.50">-2.50</option>
<option value="-2.75">-2.75</option>
<option value="-3.00">-3.00</option>
<option value="-3.25">-3.25</option>
<option value="-3.50">-3.50</option>
<option value="-3.75">-3.75</option>
<option value="-4.00">-4.00</option>
<option value="-4.25">-4.25</option>
<option value="-4.50">-4.50</option>
<option value="-4.75">-4.75</option>
<option value="-5.00">-5.00</option>
<option value="-5.25">-5.25</option>
<option value="-5.50">-5.50</option>
<option value="-5.75">-5.75</option>
<option value="-6.00">-6.00</option>
                            </select>
                            <script>
		$(".cyllsek").select2();
	</script>
                            </div>
                            <div class="col">
                               
                                <label for="effect5">AXIS</label>
                                <select name="axralat" class="axlsek" style="width: 100%;">
                                    <option value="">PILIH</option>
<option value="0">0</option>
<option value="5">5</option>
<option value="10">10</option>
<option value="15">15</option>
<option value="20">20</option>
<option value="25">25</option>
<option value="30">30</option>
<option value="35">35</option>
<option value="40">40</option>
<option value="45">45</option>
<option value="50">50</option>
<option value="55">55</option>
<option value="65">65</option>
<option value="70">70</option>
<option value="75">75</option>
<option value="80">80</option>
<option value="85">85</option>
<option value="90">90</option>
<option value="95">95</option>
<option value="100">100</option>
<option value="105">105</option>
<option value="110">110</option>
<option value="115">115</option>
<option value="120">120</option>
<option value="125">125</option>
<option value="130">130</option>
<option value="135">135</option>
<option value="140">140</option>
<option value="145">145</option>
<option value="150">150</option>
<option value="155">155</option>
<option value="160">160</option>
<option value="165">165</option>
<option value="170">170</option>
<option value="175">175</option>
<option value="180">180</option>
                            </select>
                            <script>
		$(".axlsek").select2();
	</script>
                            </div>
                           
                            
                            
                          </div>
                          <div class="row-dalam masukan" >
                            <div class="col-2 " style="margin: auto; text-align: center;">
                                OS
                            </div>
                            <div class="col">

                                <label for="effect5">SPH</label>
                                <select name="sphlalat" class="sphlsek" style="width: 100%;">
                                    <option value="">PILIH</option>
                                <option value="+20.00">+20.00</option>
<option value="+19.75">+19.75</option>
<option value="+19.50">+19.50</option>
<option value="+19.25">+19.25</option>
<option value="+19.00">+19.00</option>
<option value="+18.75">+18.75</option>
<option value="+18.50">+18.50</option>
<option value="+18.25">+18.25</option>
<option value="+18.00">+18.00</option>
<option value="+17.75">+17.75</option>
<option value="+17.50">+17.50</option>
<option value="+17.25">+17.25</option>
<option value="+17.00">+17.00</option>
<option value="+16.75">+16.75</option>
<option value="+16.50">+16.50</option>
<option value="+16.25">+16.25</option>
<option value="+16.00">+16.00</option>
<option value="+15.75">+15.75</option>
<option value="+15.50">+15.50</option>
<option value="+15.25">+15.25</option>
<option value="+15.00">+15.00</option>
<option value="+14.75">+14.75</option>
<option value="+14.50">+14.50</option>
<option value="+14.25">+14.25</option>
<option value="+14.00">+14.00</option>
<option value="+13.75">+13.75</option>
<option value="+13.50">+13.50</option>
<option value="+13.25">+13.25</option>
<option value="+13.00">+13.00</option>
<option value="+12.75">+12.75</option>
<option value="+12.50">+12.50</option>
<option value="+12.25">+12.25</option>
<option value="+12.00">+12.00</option>
<option value="+11.75">+11.75</option>
<option value="+11.50">+11.50</option>
<option value="+11.25">+11.25</option>
<option value="+11.00">+11.00</option>
<option value="+10.75">+10.75</option>
<option value="+10.50">+10.50</option>
<option value="+10.25">+10.25</option>
<option value="+10.00">+10.00</option>
<option value="+9.75">+9.75</option>
<option value="+9.50">+9.50</option>
<option value="+9.25">+9.25</option>
<option value="+9.00">+9.00</option>
<option value="+8.75">+8.75</option>
<option value="+8.50">+8.50</option>
<option value="+8.25">+8.25</option>
<option value="+8.00">+8.00</option>
<option value="+7.75">+7.75</option>
<option value="+7.50">+7.50</option>
<option value="+7.25">+7.25</option>
<option value="+7.00">+7.00</option>
<option value="+6.75">+6.75</option>
<option value="+6.50">+6.50</option>
<option value="+6.25">+6.25</option>
<option value="+6.00">+6.00</option>
<option value="+5.75">+5.75</option>
<option value="+5.50">+5.50</option>
<option value="+5.25">+5.25</option>
<option value="+5.00">+5.00</option>
<option value="+4.75">+4.75</option>
<option value="+4.50">+4.50</option>
<option value="+4.25">+4.25</option>
<option value="+4.00">+4.00</option>
<option value="+3.75">+3.75</option>
<option value="+3.50">+3.50</option>
<option value="+3.25">+3.25</option>
<option value="+3.00">+3.00</option>
<option value="+2.75">+2.75</option>
<option value="+2.50">+2.50</option>
<option value="+2.25">+2.25</option>
<option value="+2.00">+2.00</option>
<option value="+1.75">+1.75</option>
<option value="+1.50">+1.50</option>
<option value="+1.25">+1.25</option>
<option value="+1.00">+1.00</option>
<option value="+0.75">+0.75</option>
<option value="+0.50">+0.50</option>
<option value="+0.25">+0.25</option>
<option value="0.00 ">0.00</option>
<option value="-0.25">-0.25</option>
<option value="-0.50">-0.50</option>
<option value="-0.75">-0.75</option>
<option value="-1.00">-1.00</option>
<option value="-1.25">-1.25</option>
<option value="-1.50">-1.50</option>
<option value="-1.75">-1.75</option>
<option value="-2.00">-2.00</option>
<option value="-2.25">-2.25</option>
<option value="-2.50">-2.50</option>
<option value="-2.75">-2.75</option>
<option value="-3.00">-3.00</option>
<option value="-3.25">-3.25</option>
<option value="-3.50">-3.50</option>
<option value="-3.75">-3.75</option>
<option value="-4.00">-4.00</option>
<option value="-4.25">-4.25</option>
<option value="-4.50">-4.50</option>
<option value="-4.75">-4.75</option>
<option value="-5.00">-5.00</option>
<option value="-5.25">-5.25</option>
<option value="-5.50">-5.50</option>
<option value="-5.75">-5.75</option>
<option value="-6.00">-6.00</option>
<option value="-6.25">-6.25</option>
<option value="-6.50">-6.50</option>
<option value="-6.75">-6.75</option>
<option value="-7.00">-7.00</option>
<option value="-7.25">-7.25</option>
<option value="-7.50">-7.50</option>
<option value="-7.75">-7.75</option>
<option value="-8.00">-8.00</option>
<option value="-8.25">-8.25</option>
<option value="-8.50">-8.50</option>
<option value="-8.75">-8.75</option>
<option value="-9.00">-9.00</option>
<option value="-9.25">-9.25</option>
<option value="-9.50">-9.50</option>
<option value="-9.75">-9.75</option>
<option value="-10.00">-10.00</option>
<option value="-10.25">-10.25</option>
<option value="-10.50">-10.50</option>
<option value="-10.75">-10.75</option>
<option value="-11.00">-11.00</option>
<option value="-11.25">-11.25</option>
<option value="-11.50">-11.50</option>
<option value="-11.75">-11.75</option>
<option value="-12.00">-12.00</option>
<option value="-12.25">-12.25</option>
<option value="-12.50">-12.50</option>
<option value="-12.75">-12.75</option>
<option value="-13.00">-13.00</option>
<option value="-13.25">-13.25</option>
<option value="-13.50">-13.50</option>
<option value="-13.75">-13.75</option>
<option value="-14.00">-14.00</option>
<option value="-14.25">-14.25</option>
<option value="-14.50">-14.50</option>
<option value="-14.75">-14.75</option>
<option value="-15.00">-15.00</option>
<option value="-15.25">-15.25</option>
<option value="-15.50">-15.50</option>
<option value="-15.75">-15.75</option>
<option value="-16.00">-16.00</option>
<option value="-16.25">-16.25</option>
<option value="-16.50">-16.50</option>
<option value="-16.75">-16.75</option>
<option value="-17.00">-17.00</option>
<option value="-17.25">-17.25</option>
<option value="-17.50">-17.50</option>
<option value="-17.75">-17.75</option>
<option value="-18.00">-18.00</option>
<option value="-18.25">-18.25</option>
<option value="-18.50">-18.50</option>
<option value="-18.75">-18.75</option>
<option value="-19.00">-19.00</option>
<option value="-19.25">-19.25</option>
<option value="-19.50">-19.50</option>
<option value="-19.75">-19.75</option>
<option value="-20.00">-20.00</option>


                                </select>
                                <script>
		$(".sphlsek").select2();
	</script>
                            </div>
                            <div class="col">

                                <label for="effect5">CYL</label>
                                <select name="cyllalat" class="cyllsek" style="width: 100%;">
                                    <option value="">PILIH</option>
                                <option value="+6.00">+6.00</option>
<option value="+5.75">+5.75</option>
<option value="+5.50">+5.50</option>
<option value="+5.25">+5.25</option>
<option value="+5.00">+5.00</option>
<option value="+4.75">+4.75</option>
<option value="+4.50">+4.50</option>
<option value="+4.25">+4.25</option>
<option value="+4.00">+4.00</option>
<option value="+3.75">+3.75</option>
<option value="+3.50">+3.50</option>
<option value="+3.25">+3.25</option>
<option value="+3.00">+3.00</option>
<option value="+2.75">+2.75</option>
<option value="+2.50">+2.50</option>
<option value="+2.25">+2.25</option>
<option value="+2.00">+2.00</option>
<option value="+1.75">+1.75</option>
<option value="+1.50">+1.50</option>
<option value="+1.25">+1.25</option>
<option value="+1.00">+1.00</option>
<option value="+0.75">+0.75</option>
<option value="+0.50">+0.50</option>
<option value="+0.25">+0.25</option>
<option value="0.00 ">0.00</option>
<option value="-0.25">-0.25</option>
<option value="-0.50">-0.50</option>
<option value="-0.75">-0.75</option>
<option value="-1.00">-1.00</option>
<option value="-1.25">-1.25</option>
<option value="-1.50">-150</option>
<option value="-1.75">-1.75</option>
<option value="-2.00">-2.00</option>
<option value="-2.25">-2.25</option>
<option value="-2.50">-2.50</option>
<option value="-2.75">-2.75</option>
<option value="-3.00">-3.00</option>
<option value="-3.25">-3.25</option>
<option value="-3.50">-3.50</option>
<option value="-3.75">-3.75</option>
<option value="-4.00">-4.00</option>
<option value="-4.25">-4.25</option>
<option value="-4.50">-4.50</option>
<option value="-4.75">-4.75</option>
<option value="-5.00">-5.00</option>
<option value="-5.25">-5.25</option>
<option value="-5.50">-5.50</option>
<option value="-5.75">-5.75</option>
<option value="-6.00">-6.00</option>
                            </select>
                            <script>
		$(".cyllsek").select2();
	</script>
                            </div>
                            <div class="col">
                                
                                <label for="effect5">AXIS</label>
                                <select name="axlalat" class="axlsek" style="width: 100%;">
                                    <option value="">PILIH</option>
<option value="0">0</option>
<option value="5">5</option>
<option value="10">10</option>
<option value="15">15</option>
<option value="20">20</option>
<option value="25">25</option>
<option value="30">30</option>
<option value="35">35</option>
<option value="40">40</option>
<option value="45">45</option>
<option value="50">50</option>
<option value="55">55</option>
<option value="65">65</option>
<option value="70">70</option>
<option value="75">75</option>
<option value="80">80</option>
<option value="85">85</option>
<option value="90">90</option>
<option value="95">95</option>
<option value="100">100</option>
<option value="105">105</option>
<option value="110">110</option>
<option value="115">115</option>
<option value="120">120</option>
<option value="125">125</option>
<option value="130">130</option>
<option value="135">135</option>
<option value="140">140</option>
<option value="145">145</option>
<option value="150">150</option>
<option value="155">155</option>
<option value="160">160</option>
<option value="165">165</option>
<option value="170">170</option>
<option value="175">175</option>
<option value="180">180</option>
                            </select>
                            <script>
		$(".axlsek").select2();
	</script>
                            </div>
                           
                          </div>

                        </div>
                        
                          

                        
                          
                          <br>
                          <h6 style="text-align: center;">Pemeriksaan Refraksi Subjektif</h6>
                          <div class="row-dalam masukan">
                            <div class="col-2 " style="margin: auto; text-align: center;">
                                OD
                            </div>
                            <div class="col">
                                <input type="text" id="effect5" autocomplete="off" <?php echo $isian ?> class="effect-5" placeholder=" " name="sphrsek" value="<?php echo $data['sphrsek'];?>"/>
                                <label for="effect5">SPH</label>
                                
                            </div>
                            <div class="col">
                                <input type="text" id="effect5" autocomplete="off" <?php echo $isian ?> class="effect-5" placeholder=" " name="cylrsek" value="<?php echo $data['cylrsek'];?>" />
                                <label for="effect5">CYL</label>
                            </div>
                            <div class="col">
                                <input type="text" id="effect5" autocomplete="off" <?php echo $isian ?> class="effect-5" placeholder=" " name="axrsek" value="<?php echo $data['axrsek'];?>"/>
                                <label for="effect5">AXIS</label>
                            </div>
                            <div class="col">
                                <input type="text" id="effect5" autocomplete="off" <?php echo $isian ?> class="effect-5" placeholder=" " name="ucvar" value="<?php echo $data['ucvar'];?>"/>
                                <label for="effect5">UCVA</label>
                            </div>
                            <div class="col">
                                <input type="text" id="effect5" autocomplete="off" <?php echo $isian ?> class="effect-5" placeholder=" " name="bcvar" value="<?php echo $data['bcvar'];?>" />
                                <label for="effect5">BCVA</label>
                            </div>
                             <div class="col">
                                <input type="text" id="effect5" autocomplete="off" <?php echo $isian ?> class="effect-5" placeholder=" " name="prisrsek" value="<?php echo $data['prisrsek'];?>"  />
                                <label for="effect5">PRIS</label>
                            </div>
                            <div class="col">
                                <input type="text" id="effect5" autocomplete="off" <?php echo $isian ?> class="effect-5" placeholder=" " name="basersek"  value="<?php echo $data['basersek'];?>"/>
                                <label for="effect5">BASE</label>
                            </div>
                            <div class="col">
                                <input type="text" id="effect5" autocomplete="off" <?php echo $isian ?> class="effect-5" placeholder=" " name="adisirsek" value="<?php echo $data['adisirsek'];?>" />
                                <label for="effect5">ADD</label>
                            </div>
                            
                            
                          </div>
                          <div class="row-dalam masukan">
                            <div class="col-2 " style="margin: auto; text-align: center;">
                                OS
                            </div>
                            <div class="col">
                                <input type="text" id="effect5" autocomplete="off" <?php echo $isian ?> class="effect-5" placeholder=" " name="sphlsek" value="<?php echo $data['sphlsek'];?>"/>
                                <label for="effect5">SPH</label>
                            </div>
                            <div class="col">
                                <input type="text" id="effect5" autocomplete="off" <?php echo $isian ?> class="effect-5" placeholder=" " name="cyllsek" value="<?php echo $data['cyllsek'];?>" />
                                <label for="effect5">CYL</label>
                            </div>
                            <div class="col">
                                <input type="text" id="effect5"  autocomplete="off" <?php echo $isian ?> <?php echo $isian ?> class="effect-5" placeholder=" " name="axlsek" value="<?php echo $data['axlsek'];?>"/>
                                <label for="effect5">AXIS</label>
                            </div>
                            <div class="col">
                                <input type="text" id="effect5" autocomplete="off" <?php echo $isian ?> class="effect-5" placeholder=" " name="ucval" value="<?php echo $data['ucval'];?>"/>
                                <label for="effect5">UCVA</label>
                            </div>
                            <div class="col">
                                <input type="text" id="effect5" autocomplete="off"  <?php echo $isian ?> class="effect-5" placeholder=" " name="bcval" value="<?php echo $data['bcval'];?>"/>
                                <label for="effect5">BCVA</label>
                            </div>
                            <div class="col">
                                <input type="text" id="effect5" autocomplete="off"  <?php echo $isian ?> class="effect-5" placeholder=" " name="prislsek" value="<?php echo $data['prislsek'];?>" />
                                <label for="effect5">PRIS</label>
                            </div>
                            <div class="col">
                                <input type="text" id="effect5" autocomplete="off"  <?php echo $isian ?> class="effect-5" placeholder=" " name="baselsek" value="<?php echo $data['baselsek'];?>"/>
                                <label for="effect5">BASE</label>
                            </div>
                            <div class="col">
                                <input type="text" id="effect5" autocomplete="off"  <?php echo $isian ?> class="effect-5" placeholder=" " name="adisilsek" value="<?php echo $data['adisilsek'];?>" />
                                <label for="effect5">ADD</label>
                            </div>
                          </div>

                         
                          <div class="row-dalam masukan">
                            <div class="col-2"></div>

                            <div class="col">
                                <input type="text" id="pdr" <?php echo $isian ?> class="effect-5" placeholder=" " name="pdr"  onkeyup="harga()" value="<?php echo $data['pdr'];?>"/>
                                <label for="effect5">PD Monokuler Kanan</label>
                            </div>
                            <div class="col">
                                <input type="text" id="pdl" <?php echo $isian ?> class="effect-5" placeholder=" " name="pdl" onkeyup="harga()" value="<?php echo $data['pdl'];?>" />
                                <label for="effect5">PD Monokuler Kiri</label>
                            </div>
                          </div>
                          <div class="row-dalam masukan">
                            <div class="col-2"></div>

                            <div class="col">
                                <input type="text" id="pd" <?php echo $isian ?> class="effect-5" placeholder=" " name="pd" onkeyup="harga()" value="<?php echo $data['pd'];?>"/>
                                <label for="effect5">PD Jauh</label>
                            </div>
                            <div class="col">
                                <input type="text" id="pdd" <?php echo $isian ?> class="effect-5" placeholder=" " name="pdd"onkeyup="harga()" value="<?php echo $data['pdd'];?>"/>
                                <label for="effect5">PD Dekat</label>
                            </div>
                          </div>
                          <div class="row-dalam masukan" style="margin-left: 2px;">
                            <div class="col">
                           
                            <label for="effect5">Pinhole Tes Kanan</label>
                            <select class="hargalr effect-5" style="width:100%;"  name="phr">
                            
                            <option value="">PILIH</option>
                            <option value="PH ADA PERBAIKAN">PH ADA PERBAIKAN</option>
                              <option value="PH TETAP">PH TETAP</option>
                              
                        </select>
                        <script>
                          $(".hargalr").select2();
                        </script>
                           
                            </div>
                            <div class="col">
                            
                            <label for="effect5">Pinhole Tes Kiri</label>
                            <select class="hargalr effect-5" style="width:100%;"  name="phl">
                            
                            <option value="">PILIH</option>
                            <option value="PH ADA PERBAIKAN">PH ADA PERBAIKAN</option>
                              <option value="PH TETAP">PH TETAP</option>
                              
                        </select>
                        <script>
                          $(".hargalr").select2();
                        </script>
                           
                            </div>
                        </div>
                        <div class="row-dalam masukan" style="margin-left: 2px;">
                            <div class="col">
                            
                            <label for="effect5">Tes Keseimbangan Binokular</label>
                            <select class="hargalr effect-5" style="width:100%;"  name="tkb">
                            
                            <option value="">PILIH</option>
                            <option value="PRISMA DISOSIASI">PRISMA DISOSIASI</option>
                              <option value="TUTUP BERGANTI">TUTUP BERGANTI</option>
                              <option value="WFDT">WFDT</option>
                              
                        </select>
                        <script>
                          $(".hargalr").select2();
                        </script>
                            
                            </div>
                            <div class="col">
                           
                            <label for="effect5">Tes Titik Akhir Binokular</label>
                            <select class="hargalr effect-5" style="width:100%;"  name="ttab">
                            
                            <option value="">PILIH</option>
                            <option value="S + 0.25">S + 0.25</option>
                              <option value="S + 0.50">S + 0.50</option>
                              <option value="S + 0.75">S + 0.75</option>
                              
                        </select>
                        <script>
                          $(".hargalr").select2();
                        </script>
                            
                            
                            </div>
                        </div>
                        <div class="masukan">
                           
                            <label for="effect5">Diagnosa Refraksi</label>
                            <select class="hargalr effect-5" style="width:100%;"  name="diagnosa">
                            
                            <option value="">PILIH</option>
                            <option value="ASTIGMAT MIOPIA COMPOSITUS">ASTIGMAT MIOPIA COMPOSITUS</option>
                              <option value="ASTIGMAT MIOPIA SIMPLEX">ASTIGMAT MIOPIA SIMPLEX</option>
                              <option value="ASTIGMAT MIXTUS ">ASTIGMAT MIXTUS</option>
                              <option value="ASTIGMAT HIPERMETROPIA SIMPLEX">ASTIGMAT HIPERMETROPIA SIMPLEX</option>
                              <option value="ASTIGMAT HIPERMETROPIA COMPOSITUS">ASTIGMAT HIPERMETROPIA COMPOSITUS</option>
                              <option value="MIOPIA">MIOPIA</option>
                              <option value="HIPERMETROPIA">HIPERMETROPIA</option>
                              <option value="SUSPEK PRESBIOPIA">SUSPEK PRESBIOPIA</option>
                              
                        </select>
                        <script>
                          $(".hargalr").select2();
                        </script>
                            
                          </div>
                          <div class="masukan">
                            <input onkeyup="this.value = this.value.toUpperCase()" type="text" id="effect5" class="effect-5" autocomplete="off" placeholder=" " name="analisa" />
                            <label for="effect5">Analisa Refraksi</label>
                          </div>
                          <div class="masukan">
                            <input onkeyup="this.value = this.value.toUpperCase()" type="text" id="effect5" class="effect-5" autocomplete="off" placeholder=" " name="terapi" />
                            <label for="effect5">Terapi Hasil Refraksi</label>
                          </div>
                          <div onkeyup="this.value = this.value.toUpperCase()" class="masukan">
                            <input type="text" id="effect5" class="effect-5" autocomplete="off" placeholder=" " name="kesimpulan" />
                            <label for="effect5">Kesimpulan Dan Saran</label>
                          </div>
                          
                          
                          <div>
                          <input type="submit" class="btn btn-primary" value="Submit" />
                          </div>



<datalist id="sph">
<option value="+20.00">
<option value="+19.75">
<option value="+19.50">
<option value="+19.25">
<option value="+19.00">
<option value="+18.75">
<option value="+18.50">
<option value="+18.25">
<option value="+18.00">
<option value="+17.75">
<option value="+17.50">
<option value="+17.25">
<option value="+17.00">
<option value="+16.75">
<option value="+16.50">
<option value="+16.25">
<option value="+16.00">
<option value="+15.75">
<option value="+15.50">
<option value="+15.25">
<option value="+15.00">
<option value="+14.75">
<option value="+14.50">
<option value="+14.25">
<option value="+14.00">
<option value="+13.75">
<option value="+13.50">
<option value="+13.25">
<option value="+13.00">
<option value="+12.75">
<option value="+12.50">
<option value="+12.25">
<option value="+12.00">
<option value="+11.75">
<option value="+11.50">
<option value="+11.25">
<option value="+11.00">
<option value="+10.75">
<option value="+10.50">
<option value="+10.25">
<option value="+10.00">
<option value="+9.75">
<option value="+9.50">
<option value="+9.25">
<option value="+9.00">
<option value="+8.75">
<option value="+8.50">
<option value="+8.25">
<option value="+8.00">
<option value="+7.75">
<option value="+7.50">
<option value="+7.25">
<option value="+7.00">
<option value="+6.75">
<option value="+6.50">
<option value="+6.25">
<option value="+6.00">
<option value="+5.75">
<option value="+5.50">
<option value="+5.25">
<option value="+5.00">
<option value="+4.75">
<option value="+4.50">
<option value="+4.25">
<option value="+4.00">
<option value="+3.75">
<option value="+3.50">
<option value="+3.25">
<option value="+3.00">
<option value="+2.75">
<option value="+2.50">
<option value="+2.25">
<option value="+2.00">
<option value="+1.75">
<option value="+1.50">
<option value="+1.25">
<option value="+1.00">
<option value="+0.75">
<option value="+0.50">
<option value="+0.25">
<option value="0.00 ">
<option value="-0.25">
<option value="-0.50">
<option value="-0.75">
<option value="-1.00">
<option value="-1.25">
<option value="-1.50">
<option value="-1.75">
<option value="-2.00">
<option value="-2.25">
<option value="-2.50">
<option value="-2.75">
<option value="-3.00">
<option value="-3.25">
<option value="-3.50">
<option value="-3.75">
<option value="-4.00">
<option value="-4.25">
<option value="-4.50">
<option value="-4.75">
<option value="-5.00">
<option value="-5.25">
<option value="-5.50">
<option value="-5.75">
<option value="-6.00">
<option value="-6.25">
<option value="-6.50">
<option value="-6.75">
<option value="-7.00">
<option value="-7.25">
<option value="-7.50">
<option value="-7.75">
<option value="-8.00">
<option value="-8.25">
<option value="-8.50">
<option value="-8.75">
<option value="-9.00">
<option value="-9.25">
<option value="-9.50">
<option value="-9.75">
<option value="-10.00">
<option value="-10.25">
<option value="-10.50">
<option value="-10.75">
<option value="-11.00">
<option value="-11.25">
<option value="-11.50">
<option value="-11.75">
<option value="-12.00">
<option value="-12.25">
<option value="-12.50">
<option value="-12.75">
<option value="-13.00">
<option value="-13.25">
<option value="-13.50">
<option value="-13.75">
<option value="-14.00">
<option value="-14.25">
<option value="-14.50">
<option value="-14.75">
<option value="-15.00">
<option value="-15.25">
<option value="-15.50">
<option value="-15.75">
<option value="-16.00">
<option value="-16.25">
<option value="-16.50">
<option value="-16.75">
<option value="-17.00">
<option value="-17.25">
<option value="-17.50">
<option value="-17.75">
<option value="-18.00">
<option value="-18.25">
<option value="-18.50">
<option value="-18.75">
<option value="-19.00">
<option value="-19.25">
<option value="-19.50">
<option value="-19.75">
<option value="-20.00">
  </datalist>
<datalist id="cyl">
<option value="+6.00">
<option value="+5.75">
<option value="+5.50">
<option value="+5.25">
<option value="+5.00">
<option value="+4.75">
<option value="+4.50">
<option value="+4.25">
<option value="+4.00">
<option value="+3.75">
<option value="+3.50">
<option value="+3.25">
<option value="+3.00">
<option value="+2.75">
<option value="+2.50">
<option value="+2.25">
<option value="+2.00">
<option value="+1.75">
<option value="+1.50">
<option value="+1.25">
<option value="+1.00">
<option value="+0.75">
<option value="+0.50">
<option value="+0.25">
<option value="0.00 ">
<option value="-0.25">
<option value="-0.50">
<option value="-0.75">
<option value="-1.00">
<option value="-1.25">
<option value="-1.50">
<option value="-1.75">
<option value="-2.00">
<option value="-2.25">
<option value="-2.50">
<option value="-2.75">
<option value="-3.00">
<option value="-3.25">
<option value="-3.50">
<option value="-3.75">
<option value="-4.00">
<option value="-4.25">
<option value="-4.50">
<option value="-4.75">
<option value="-5.00">
<option value="-5.25">
<option value="-5.50">
<option value="-5.75">
<option value="-6.00">
</datalist>
<datalist id="axis">
<option value="0">
<option value="5">
<option value="10">
<option value="15">
<option value="20">
<option value="25">
<option value="30">
<option value="35">
<option value="40">
<option value="45">
<option value="50">
<option value="55">
<option value="65">
<option value="70">
<option value="75">
<option value="80">
<option value="85">
<option value="90">
<option value="95">
<option value="100">
<option value="105">
<option value="110">
<option value="115">
<option value="120">
<option value="125">
<option value="130">
<option value="135">
<option value="140">
<option value="145">
<option value="150">
<option value="155">
<option value="160">
<option value="165">
<option value="170">
<option value="175">
<option value="180">
</datalist>
<datalist id="adisi">
<option value="+3.00">
<option value="+2.75">
<option value="+2.50">
<option value="+2.25">
<option value="+2.00">
<option value="+1.75">
<option value="+1.50">
<option value="+1.25">
<option value="+1.00">
</datalist>



                          </form>
    </div>
    </div>
<br><br><br>
         
    </main>
    <?php ?>



    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script>
        $('body').on('keydown', 'input, select, textarea', function(e) {
      var self = $(this)
        , form = self.parents('form:eq(0)')
        , focusable
        , next
        ;
      if (e.keyCode == 13) {

          focusable = form.find('input,a,select,button,textarea').filter(':visible');
          next = focusable.eq(focusable.index(this)+1);
          if (next.length) {
              next.focus();
          } else {
              //form.submit();
          }
          return false;
      }

  });
      </script>
</body>
</html>