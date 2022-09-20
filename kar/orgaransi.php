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
    
   
    <?php
        include '../config/koneksi.php';
 
        $pelanggan =  mysqli_query($konek, "SELECT max(nonotaor) as id FROM order_lab");
        $datap = mysqli_fetch_array($pelanggan);
        $id = $datap['id'];
        $tambah = (int) substr($id, 5, 5);
        $tambah++;
        $teks = "OR-";
        $notaor = $teks . sprintf("%05s", $tambah); 
        
        $id = $_GET['id'];
	$sql = mysqli_query($konek,"SELECT * FROM order_lab join nota_garansi on order_lab.nota_ref=nota_garansi.nota_ref WHERE order_lab.nota_ref='$id'");
        $data = mysqli_fetch_array($sql);
        if($data['jenis_lr']==$data['jenis_ll']){
          $lensa = "";
          $lensaod = "hidden";
        }else{
          $lensa = "hidden";
          $lensaod = "";
        }
        
          
        ?>
    
    <title>Lab-<?php echo $nota = $data['nonota'];?></title>
    <script>
function printContent(el){
    var restorepage = document.body.innerHTML;
    var printcontent = document.getElementById(el).innerHTML;
    document.body.innerHTML = printcontent;
    window.print();
    document.body.innerHTML = restorepage;
}
</script>
    
</head>

<style>
    @page 
    {
        size: auto;   /* auto is the initial value */
        margin-top: 0mm;  /* this affects the margin in the printer settings */
    }
    body{
        font-size: 14px;
        
    }
    .rangkasurat{
                width: 980px;
                margin:0 auto;
                background-color:#fff;
                
                padding:20px;

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
  
  background-color: transparent;
}

.table th,
.table td {
  
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
  border: 1px solid #000;
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
.show > .btn-primary.dro<?php echo $nota = $data['nonota'];?>own-toggle {
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
<br>
    <main>
        
         <div class="container"  >
         <h5 style="text-align: center;">ORDER LENSA GARANSI</h5>
         <a href="../kar/ordergaransi.php" style="margin-left: 20px;" type="button" class="btn btn-danger">Kembali</a>
         <form method="post" action="../proses/prosesorgaransi.php">
          <input type="text" name="id" value="<?php echo $data['id'];?>" hidden>
          
            <div class="rangkasurat" >
              <div class="row-dalam">
                <div class="col">
                <div class="masukan">
                            <input type="text" id="effect5" class="effect-5" readonly placeholder=" " name="nama" value="<?php echo $data['nama'];?>"/>
                            <label for="effect5">Nama</label>
                          </div>
               
               
                </div>
                <div class="col">
                <div class="masukan">
                            <input type="text" id="effect5" class="effect-5" readonly placeholder=" " name="nonota" value="<?php echo $notaor;?>"/>
                            <label for="effect5">No Nota</label>
                          </div>
               
             
                </div>
                
              
                <div class="col">
                <div class="masukan">
                            <input type="text" id="effect5" class="effect-5" readonly placeholder=" " name="nota_ref" value="<?php echo $data['nonotagr'];?>"/>
                            <label for="effect5">Nota Referensi</label>
                          </div>
               
             
                </div>
                <div class="col">
                <div class="masukan">
                            <input type="text" id="effect5" class="effect-5" readonly placeholder=" "  value=" <?php echo $nota = date('d M Y',strtotime($data['tanggal_garansi']));?>"/>
                            <label for="effect5">Tanggal Transaksi</label>
                          </div>
               
             
                </div>
              </div>
              <div class="row-dalam">
                <div class="col-2" style="margin: auto; text-align: center;">
                  FRAME
                </div>
                <div class="col">
                <div class="masukan">
                            <input type="text" id="effect5" class="effect-5" readonly placeholder=" " name="merk_f"  value=" <?php echo $data['kode_f'];?>"/>
                            <label for="effect5">ID</label>
                          </div>
                </div>
                <div class="col">
                <div class="masukan">
                            <input type="text" id="effect5" class="effect-5" readonly placeholder=" " name="merk_f"  value=" <?php echo $data['merk_f'];?>"/>
                            <label for="effect5">MERK</label>
                          </div>
                </div>
                <div class="col">
                <div class="masukan">
                            <input type="text" id="effect5" class="effect-5" readonly placeholder=" " name="warna_f" value=" <?php echo $data['warna_f'];?>"/>
                            <label for="effect5">WARNA</label>
                          </div>
                </div>
                <div class="col">
                <div class="masukan">
                            <input type="text" id="effect5" class="effect-5" readonly placeholder=" " name="jenis_f" value=" <?php echo $data['detil_f'];?>"/>
                            <label for="effect5">JENIS</label>
                          </div>
                </div>
              </div>
              <div class="row-dalam">
                <div class="col">
                <div class="masukan">
                            <input type="number" id="effect5" class="effect-5"  placeholder=" " autocomplete="off" name="dimensia" value="<?php echo $data['dimensia'];?>" readonly/>
                            <label for="effect5">DIMENSI A</label>
                          </div>
                </div>

                <div class="col">
                <div class="masukan">
                            <input type="number" id="effect5" class="effect-5"  placeholder=" " autocomplete="off" name="dimensib" value="<?php echo $data['dimensib'];?>" readonly/>
                            <label for="effect5">DIMENSI B</label>
                          </div>
                </div>

                <div class="col">
                <div class="masukan">
                            <input type="number" id="effect5" class="effect-5"  placeholder=" " autocomplete="off" name="ed" value="<?php echo $data['ed'];?>" readonly/>
                            <label for="effect5">ED</label>
                          </div>
                </div>

                 <div class="col">
                <div class="masukan">
                            <input type="number" id="effect5" class="effect-5"  placeholder=" " autocomplete="off" name="dbl" value="<?php echo $data['dbl'];?>" readonly/>
                            <label for="effect5">DBL</label>
                          </div>
                </div>

                <div class="col">
                <div class="masukan">
                            <input type="number" id="effect5" class="effect-5"  placeholder=" " autocomplete="off" name="pv" value="<?php echo $data['pv'];?>" readonly/>
                            <label for="effect5">PV</label>
                          </div>
                </div>

                <div class="col">
                <div class="masukan">
                            <input type="number" id="effect5" class="effect-5"  placeholder=" " autocomplete="off" name="sh" value="<?php echo $data['sh'];?>" readonly/>
                            <label for="effect5">SH</label>
                          </div>
                </div>

                <div class="col">
                <div class="masukan">
                            <input type="number" id="effect5" class="effect-5"  placeholder=" " autocomplete="off" name="pt" value="<?php echo $data['pt'];?>" readonly/>
                            <label for="effect5">PT</label>
                          </div>
                </div>

                <div class="col">
                <div class="masukan">
                            <input type="number" id="effect5" class="effect-5"  placeholder=" " autocomplete="off" name="bvd" value="<?php echo $data['bvd'];?>" readonly/>
                            <label for="effect5">BVD</label>
                          </div>
                </div>

              </div><br>
              <div class="row-dalam" style="margin: auto; text-align: center;">
                <div class="col-2">
                  MODEL RIM
                  <input type="text" hidden name="model_f" id="" readonly value="<?php echo $data['model_f']?>">
                
                </div>
                <div class="col-3">
               <?php 
               if( $data['model_f']=="1"){
                $rim = "rim1.png";
               }if( $data['model_f']=="2"){
                $rim = "rim2.png";
               }if( $data['model_f']=="3"){
                $rim = "rim3.png";
               }if( $data['model_f']=="4"){
                $rim = "rim4.png";
               }if( $data['model_f']=="5"){
                $rim = "rim5.png";
               }if( $data['model_f']=="6"){
                $rim = "rim6.png";
               }if( $data['model_f']=="7"){
                $rim = "rim7.png";
               }if( $data['model_f']=="8"){
                $rim = "rim8.png";
               }
               
               ?>
                <img src="../aset/img/<?php echo $rim?>" width="100px"  />
                
                </div>
                

              </div><hr><br>
              <div class="row-dalam" <?php echo $lensa;?>>
                <div class="col-2" style="margin: auto; text-align: center;">
                  LENSA
                </div>
                <div class="col">
                <div class="masukan">
                            <input type="text" id="effect5" class="effect-5" readonly placeholder=" " name="kode_lr"  value=" <?php echo $data['kode_lr'];?>"/>
                            <label for="effect5">ID</label>
                          </div>
                </div>
                <div class="col">
                <div class="masukan">
                            <input type="text" id="effect5" class="effect-5" readonly placeholder=" "  value=" <?php echo $data['merk_lr'];?>"/>
                            <label for="effect5">MERK</label>
                          </div>
                </div>
                <div class="col">
                <div class="masukan">
                            <input type="text" id="effect5" class="effect-5" readonly placeholder=" "  value=" <?php echo $data['jenis_lr'];?>"/>
                            <label for="effect5">JENIS</label>
                          </div>
                </div>
                
              </div>

              <div class="row-dalam" <?php echo $lensaod;?>>
                <div class="col-2" style="margin: auto; text-align: center;">
                  LENSA OD
                </div>
                <div class="col">
                <div class="masukan">
                            <input type="text" id="effect5" class="effect-5" readonly placeholder=" " name="kode_lr"  value=" <?php echo $data['kode_lr'];?>"/>
                            <label for="effect5">ID</label>
                          </div>
                </div>
                <div class="col">
                <div class="masukan">
                            <input type="text" id="effect5" class="effect-5" readonly placeholder=" "  value=" <?php echo $data['merk_lr'];?>"/>
                            <label for="effect5">MERK</label>
                          </div>
                </div>
                <div class="col">
                <div class="masukan">
                            <input type="text" id="effect5" class="effect-5" readonly placeholder=" "  value=" <?php echo $data['jenis_lr'];?>"/>
                            <label for="effect5">JENIS</label>
                          </div>
                </div>
                
              </div>
              <div class="row-dalam" <?php echo $lensaod;?>>
                <div class="col-2" style="margin: auto; text-align: center;">
                  LENSA OS
                </div>
                <div class="col">
                <div class="masukan">
                            <input type="text" id="effect5" class="effect-5" readonly placeholder=" " name="merk_f"  value=" <?php echo $data['kode_ll'];?>"/>
                            <label for="effect5">ID</label>
                          </div>
                </div>
                <div class="col">
                <div class="masukan">
                            <input type="text" id="effect5" class="effect-5" readonly placeholder=" "  value=" <?php echo $data['merk_ll'];?>"/>
                            <label for="effect5">MERK</label>
                          </div>
                </div>
                <div class="col">
                <div class="masukan">
                            <input type="text" id="effect5" class="effect-5" readonly placeholder=" "  value=" <?php echo $data['jenis_ll'];?>"/>
                            <label for="effect5">JENIS</label>
                          </div>
                </div>
                
              </div>
               
              <div class="row-dalam masukan">
                            <div class="col-2 " style="margin: auto; text-align: center;">
                                OD
                            </div>
                            <div class="col"  >
                            <input type="text" name="sphrsek"  class="effect-5"  readonly value="<?php echo $data['sphrsek']?>">
                            <label for="effect5">SPH</label>


                               
                            </div>
                            <div class="col"  >
                            <input type="text" name="cylrsek" placeholder=" " class="effect-5" readonly value="<?php echo $data['cylrsek']?>">
                            <label for="effect5">CYL</label>

                            </div>
                            <div class="col"  >
                             <input type="text" name="axrsek" class="effect-5" readonly value="<?php echo $data['axrsek']?>">
                             <label for="effect5">AXIS</label>

                            </div>
                            <div class="col">
                                <input type="text" readonly value="<?php echo $data['ucvar']?>" id="effect5" class="effect-5" placeholder=" " autocomplete="off" name="ucvar" />
                                <label for="effect5">UCVA</label>
                            </div>
                            <div class="col">
                                <input type="text" readonly value="<?php echo $data['bcvar']?>" id="effect5" class="effect-5" placeholder=" " autocomplete="off" name="bcvar"  />
                                <label for="effect5">BCVA</label>
                            </div>
                            <div class="col">
                                <input type="text" readonly value="<?php echo $data['prisrsek']?>" id="effect5" class="effect-5" placeholder=" " autocomplete="off" name="prisrsek"  />
                                <label for="effect5">PRIS</label>
                            </div>
                            <div class="col">
                                <input onkeyup="this.value = this.value.toUpperCase()" readonly value="<?php echo $data['basersek']?>" type="text" id="effect5" class="effect-5" placeholder=" " autocomplete="off" name="basersek"  />
                                <label for="effect5">BASE</label>
                            </div>
                            <div class="col"  >
                            <input type="text" class="effect-5" name="adisirsek" readonly value="<?php echo $data['adisirsek']?>">
                            <label for="effect5">ADISI</label>
                            
                            </div>
                            
                            
                          </div>
                          <div class="row-dalam masukan">
                            <div class="col-2 " style="margin: auto; text-align: center;">
                                OS
                            </div>
                            <div class="col"  >
                            <input type="text" class="effect-5" name="sphlsek" readonly value="<?php echo $data['sphlsek']?>">
                            <label for="effect5">SPH</label>
                           
                            </div>
                            <div class="col"  >
                            <input type="text" class="effect-5" name="cyllsek" readonly value="<?php echo $data['cyllsek']?>">
                            <label for="effect5">CYL</label>
                            

                            </div>
                            <div class="col"  >
                            <input type="text" class="effect-5" name="axlsek" readonly value="<?php echo $data['axlsek']?>">
                            <label for="effect5">AXIS</label>
                          
                            </div>
                            <div class="col">
                                <input type="text" readonly value="<?php echo $data['ucval']?>" id="effect5" class="effect-5" placeholder=" " autocomplete="off" name="ucval" />
                                <label for="effect5">UCVA</label>
                            </div>
                            <div class="col">
                                <input type="text" id="effect5" readonly value="<?php echo $data['bcval']?>" class="effect-5" placeholder=" " autocomplete="off" name="bcval" />
                                <label for="effect5">BCVA</label>
                            </div>
                            <div class="col">
                                <input type="text" id="effect5" readonly value="<?php echo $data['prislsek']?>" class="effect-5" placeholder=" " autocomplete="off" name="prislsek"  />
                                <label for="effect5">PRIS</label>
                            </div>
                            <div class="col">
                                <input readonly value="<?php echo $data['baselsek']?>" onkeyup="this.value = this.value.toUpperCase()" type="text" id="effect5" class="effect-5" placeholder=" " autocomplete="off" name="baselsek"  />
                                <label for="effect5">BASE</label>
                            </div>
                            <div class="col"  >
                            
                            <input type="text" class="effect-5" name="adisilsek" readonly value="<?php echo $data['adisilsek']?>">
                            <label for="effect5">ADISI</label>
                            </div>
                          </div>

                         
                         
                          <div class="row-dalam masukan">
                            <div class="col-2"></div>

                            <div class="col">
                                <input type="text" id="pdr" readonly value="<?php echo $data['pdr']?>" class="effect-5" placeholder=" " name="pdr" autocomplete="off"  onkeyup="harga()" />
                                <label for="effect5">PD Monokuler Kanan</label>
                            </div>
                            <div class="col">
                                <input type="text" id="pdl" readonly value="<?php echo $data['pdl']?>" class="effect-5" placeholder=" " name="pdl" autocomplete="off" onkeyup="harga()"  />
                                <label for="effect5">PD Monokuler Kiri</label>
                            </div>
                          </div>
                          <div class="row-dalam masukan">
                            <div class="col-2"></div>

                            <div class="col">
                                <input type="text" readonly value="<?php echo $data['pd']?>" id="pd" class="effect-5" placeholder=" " name="pd" autocomplete="off" onkeyup="harga()" />
                                <label for="effect5">PD Jauh</label>
                            </div>
                            <div class="col">
                                <input type="text" readonly value="<?php echo $data['pdd']?>" id="pdd" class="effect-5" placeholder=" " name="pdd" autocomplete="off" onkeyup="harga()" />
                                <label for="effect5">PD Dekat</label>
                            </div>
                          </div>
                          <div class="masukan">
                            <input readonly value="<?php echo $data['ketor']?>" onkeyup="this.value = this.value.toUpperCase()" type="text" autocomplete="off" id="effect5" class="effect-5"  placeholder=" " name="ketor"  />
                            <label for="effect5">Catatan</label>
                          </div>
                          <div>
                            <input type="submit" class="btn btn-primary" value="SIMPAN & CETAK">
                          </div>








               </div>
               <br><br>
               


               
               </form>         
              


<script>
  function harga(){
    var pdr = document.getElementById('pdr').value;
                var pdl = document.getElementById('pdl').value;
                var pd = parseInt(pdr) + parseInt(pdl);
                var pdd = pd - 2 ;
                if (!isNaN(pd)) {
                    document.getElementById('pd').value = pd;
                    document.getElementById('pdd').value = pdd;
                }
  }
</script>




         </div>
    </main>
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