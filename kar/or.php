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
	$sql = mysqli_query($konek,"SELECT * FROM nota_pesan WHERE nonota='$id'");
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
.show > .btn-primary.droown-toggle {
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
        
         <div class="container"  >
         <h5 style="text-align: center;">ORDER LENSA</h5>
         <form method="post" action="../proses/prosesor.php">
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
                            <label for="effect5">No NOTA</label>
                          </div>
               
             
                </div>
                <div class="col">
                <div class="masukan">
                            <input type="text" id="effect5" class="effect-5" readonly placeholder=" " name="nota_ref" value="<?php echo $data['nonota'];?>"/>
                            <label for="effect5">Nota Referensi</label>
                          </div>
               
             
                </div>
                <div class="col">
                <div class="masukan">
                            <input type="text" id="effect5" class="effect-5" readonly placeholder=" "  value=" <?php echo $nota = date('d M Y',strtotime($data['tanggal_pesan']));?>"/>
                            <label for="effect5">Tanggal Transaksi</label>
                          </div>
               
             
                </div>
              </div>
              <div class="row-dalam">
                <div class="col">
                <div class="masukan">
                            <input type="text" id="effect5" class="effect-5" readonly placeholder=" " name="petugas"  value=" <?php echo $nota = $data['petugas'];?>"/>
                            <label for="effect5">Petugas</label>
                          </div>
                </div>
                <div class="col">
                <div class="masukan">
                            <input type="text" id="effect5" class="effect-5" readonly placeholder=" " name="pemeriksa" value=" <?php echo $nota = $data['pemeriksa'];?>"/>
                            <label for="effect5">Pemeriksa</label>
                          </div>
                </div>

              </div>
             
               
              <div class="row-dalam">
                <div class="col-2" style="margin: auto; text-align: center;">
                  FRAME
                </div>
                <div class="col">
                <div class="masukan">
                  
                            <input type="text" id="effect5" class="effect-5" readonly placeholder=" "  value=" <?php echo $data['kode_f'];?>"/>
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
                            <input type="number" id="effect5" class="effect-5"  placeholder=" " autocomplete="off" name="dimensia"/>
                            <label for="effect5">DIMENSI A</label>
                          </div>
                </div>

                <div class="col">
                <div class="masukan">
                            <input type="number" id="effect5" class="effect-5"  placeholder=" " autocomplete="off" name="dimensib"/>
                            <label for="effect5">DIMENSI B</label>
                          </div>
                </div>

                <div class="col">
                <div class="masukan">
                            <input type="number" id="effect5" class="effect-5"  placeholder=" " autocomplete="off" name="ed"/>
                            <label for="effect5">ED</label>
                          </div>
                </div>

                 <div class="col">
                <div class="masukan">
                            <input type="number" id="effect5" class="effect-5"  placeholder=" " autocomplete="off" name="dbl"/>
                            <label for="effect5">DBL</label>
                          </div>
                </div>

                <div class="col">
                <div class="masukan">
                            <input type="number" id="effect5" class="effect-5"  placeholder=" " autocomplete="off" name="pv"/>
                            <label for="effect5">PV</label>
                          </div>
                </div>

                <div class="col">
                <div class="masukan">
                            <input type="number" id="effect5" class="effect-5"  placeholder=" " autocomplete="off" name="sh"/>
                            <label for="effect5">SH</label>
                          </div>
                </div>

                <div class="col">
                <div class="masukan">
                            <input type="number" id="effect5" class="effect-5"  placeholder=" " autocomplete="off" name="pt"/>
                            <label for="effect5">PT</label>
                          </div>
                </div>

                <div class="col">
                <div class="masukan">
                            <input type="number" id="effect5" class="effect-5"  placeholder=" " autocomplete="off" name="bvd"/>
                            <label for="effect5">BVD</label>
                          </div>
                </div>

              </div><br>
              <div class="row-dalam" style="margin: auto; text-align: center;">
                <div class="col">
                  MODEL RIM
                </div>
                <div class="col">
                <img src="../aset/img/rim1.png" width="100px"  />
                <input type="radio" name="model_f" value="1">1<br>
                </div>
                <div class="col">
                <img src="../aset/img/rim2.png" width="100px"  />
                  <input type="radio" name="model_f" value="2">2<br>
                </div>
                <div class="col">
                <img src="../aset/img/rim3.png" width="100px"  />
                  <input type="radio" name="model_f" value="3">3<br>
                </div>
                <div class="col">
                <img src="../aset/img/rim4.png" width="100px"  />
                  <input type="radio" name="model_f" value="4">4<br>
                </div>
                <div class="col">
                <img src="../aset/img/rim5.png" width="100px"  />
                  <input type="radio" name="model_f" value="5">5<br>
                </div>
                <div class="col">
                <img src="../aset/img/rim6.png" width="100px"  />
                  <input type="radio" name="model_f" value="6">6<br>
                </div>
                <div class="col">
                <img src="../aset/img/rim7.png" width="100px"  />
                  <input type="radio" name="model_f" value="7">7<br>
                </div>
                <div class="col">
                <img src="../aset/img/rim8.png" width="100px"  />
                  <input type="radio" name="model_f" value="8">8<br>
                </div>

              </div><hr><br>
              <div class="row-dalam" <?php echo $lensa;?>>
                <div class="col-2" style="margin: auto; text-align: center;">
                  LENSA
                </div>
                <div class="col">
                <div class="masukan">
                  
                            <input type="text" id="effect5" class="effect-5" readonly placeholder=" "  value=" <?php echo $data['kode_lr'];?>"/>
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
                  
                            <input type="text" id="effect5" class="effect-5" readonly placeholder=" "  value=" <?php echo $data['kode_lr'];?>"/>
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
                  
                            <input type="text" id="effect5" class="effect-5" readonly placeholder=" "  value=" <?php echo $data['kode_ll'];?>"/>
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
                            <div class="col"  style="margin-top:15px;">
                            <select name="sphrsek" class="sphrsek" style="width: 100%;">
                                    <option value="">SPH</option>
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
		$(".sphrsek").select2();
	</script>
                               
                            </div>
                            <div class="col"  style="margin-top:15px;">
                            <select name="cylrsek" class="cylrsek" style="width: 100%;">
                                    <option value="">CYL</option>
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
		$(".cylrsek").select2();
	</script>


                            </div>
                            <div class="col"  style="margin-top:15px;">
                            <select name="axrsek" class="axrsek" style="width: 100%;">
                                    <option value="">Axis</option>
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
		$(".axrsek").select2();
	</script>


                            </div>
                            <div class="col">
                                <input type="text" id="effect5" class="effect-5" placeholder=" " autocomplete="off" name="ucvar" />
                                <label for="effect5">UCVA</label>
                            </div>
                            <div class="col">
                                <input type="text" id="effect5" class="effect-5" placeholder=" " autocomplete="off" name="bcvar"  />
                                <label for="effect5">BCVA</label>
                            </div>
                            <div class="col">
                                <input type="text" id="effect5" class="effect-5" placeholder=" " autocomplete="off" name="prisrsek"  />
                                <label for="effect5">PRIS</label>
                            </div>
                            <div class="col">
                                <input onkeyup="this.value = this.value.toUpperCase()" type="text" id="effect5" class="effect-5" placeholder=" " autocomplete="off" name="basersek"  />
                                <label for="effect5">BASE</label>
                            </div>
                            <div class="col"  style="margin-top:15px;">
                            <select name="adisirsek" class="adisirsek" style="width: 100%;">
                                    <option value="">Adisi</option>
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
		$(".adisirsek").select2();
	</script>
                            </div>
                            
                            
                          </div>
                          <div class="row-dalam masukan">
                            <div class="col-2 " style="margin: auto; text-align: center;">
                                OS
                            </div>
                            <div class="col"  style="margin-top:15px;">
                            <select name="sphlsek" class="sphlsek" style="width: 100%;">
                                    <option value="">SPH</option>
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
                            <div class="col"  style="margin-top:15px;">
                            <select name="cyllsek" class="cyllsek" style="width: 100%;">
                                    <option value="">CYL</option>
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
                            <div class="col"  style="margin-top:15px;">
                            <select name="axlsek" class="axlsek" style="width: 100%;">
                                    <option value="">Axis</option>
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
                                <input type="text" id="effect5" class="effect-5" placeholder=" " autocomplete="off" name="ucval" />
                                <label for="effect5">UCVA</label>
                            </div>
                            <div class="col">
                                <input type="text" id="effect5" class="effect-5" placeholder=" " autocomplete="off" name="bcval" />
                                <label for="effect5">BCVA</label>
                            </div>
                            <div class="col">
                                <input type="text" id="effect5" class="effect-5" placeholder=" " autocomplete="off" name="prislsek"  />
                                <label for="effect5">PRIS</label>
                            </div>
                            <div class="col">
                                <input onkeyup="this.value = this.value.toUpperCase()" type="text" id="effect5" class="effect-5" placeholder=" " autocomplete="off" name="baselsek"  />
                                <label for="effect5">BASE</label>
                            </div>
                            <div class="col"  style="margin-top:15px;">
                            <select name="adisilsek" class="adisilsek" style="width: 100%;">
                                    <option value="">Adisi</option>
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
                                <input type="text" id="pdr" class="effect-5" placeholder=" " name="pdr" autocomplete="off"  onkeyup="harga()" />
                                <label for="effect5">PD Monokuler Kanan</label>
                            </div>
                            <div class="col">
                                <input type="text" id="pdl" class="effect-5" placeholder=" " name="pdl" autocomplete="off" onkeyup="harga()"  />
                                <label for="effect5">PD Monokuler Kiri</label>
                            </div>
                          </div>
                          <div class="row-dalam masukan">
                            <div class="col-2"></div>

                            <div class="col">
                                <input type="text" id="pd" class="effect-5" placeholder=" " name="pd" autocomplete="off" onkeyup="harga()" />
                                <label for="effect5">PD Jauh</label>
                            </div>
                            <div class="col">
                                <input type="text" id="pdd" class="effect-5" placeholder=" " name="pdd" autocomplete="off" onkeyup="harga()" />
                                <label for="effect5">PD Dekat</label>
                            </div>
                          </div>
                          <div class="masukan">
                            <input onkeyup="this.value = this.value.toUpperCase()" type="text" autocomplete="off" id="effect5" class="effect-5"  placeholder=" " name="ketor"  />
                            <label for="effect5">Catatan</label>
                          </div>
                          <div class="masukan">
                            <input onkeyup="this.value = this.value.toUpperCase()" type="text" autocomplete="off" id="effect5" class="effect-5"  placeholder=" " name="petugas" readonly value="<?php echo $data['petugas'];?>"  />
                            <label for="effect5">Petugas</label>
                          </div>
                           <div class="masukan">
                            <input onkeyup="this.value = this.value.toUpperCase()" type="text" autocomplete="off" id="effect5" class="effect-5"  placeholder=" " name="pemeriksa" readonly value="<?php echo $data['pemeriksa'];?>" />
                            <label for="effect5">Pemeriksa</label>
                          </div>
                          REKAM MEDIS <br>
                          <div class="form-check">
      <label class="form-check-label" for="radio1">
        <input type="radio" class="form-check-input" id="radio1" name="statrekam" value="O" checked>OTOMATIS
      </label>
    </div>
    <div class="form-check">
      <label class="form-check-label" for="radio2">
        <input type="radio" class="form-check-input" id="radio2" name="statrekam" value="M">MANUAL
      </label>
    </div>
    
                          
                          <div><br>
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