<!DOCTYPE html>
<html lang="en">
<head>
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
    <?php
        include '../config/koneksi.php';
        include '../config/idtoko.php';

       
        $id =$_GET['id'];
        $query = mysqli_query($konek, "SELECT * FROM nota_garansi where nonotagr='$id'");
        $data = mysqli_fetch_array($query);
        
        if($data['merk_f']!=null){
            $frame = "";
            }else{
                $frame ="hidden";
            }
          if($data['jenis_lr']==$data['jenis_ll']){
              $lensa = "";
              $lensaod = "hidden";
              $harga = $data['harga_lr'] + $data['harga_lr'];
          }else{
                  $lensa ="hidden";
                  $lensaod = "";
          }
          if($data['diskon']!=0){
            $diskon = "";
        }else{
                $diskon ="hidden";
        }
        
        
        ?>
    
    <title><?php echo $nota = $data['nonotagr'];?></title>
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
      background-color: #fff;
      font-size: 12px;
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
  padding: 0.5rem;
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
    
        
         <div class="container" >
         
            <div class="rangkasurat" id="div1">
            <div class="row-dalam">
                    <div class="col-2">
                        <img src="../aset/img/logo.png" width="120px" style="margin-left: 14px;margin-top:25px;" />
                    </div>
                    <div class="col-6" style="text-align: justify;">
                        <h5 style="font-size: 14px; font-weight:900;"><?php echo $namatoko ?></h5>
                        
                        <h5 style="font-size: 12px;"><?php echo $alamat ?></h5>
                        <h5 style="font-size: 12px;"><?php echo $notelptoko ?></h5>
                        <h6 style="font-size: 12px;"><?php echo $sumber ?></h6>
                    </div>
                    <div class="col" >
                        
                        <table style="border-bottom: 0;">
                        <tr style="font-size: 12px;font-weight:900; ">
                            <td>Nota Garansi</td>
                            <td>&ensp;: <?php echo $nota = $data['nonotagr'];?></td>
                          </tr>
                          <tr style="font-size: 12px;font-weight:900; ">
                            <td>Nota Referensi</td>
                            <td>&ensp;: <?php echo $nota = $data['nota_ref'];?></td>
                          </tr>
                          <tr style="font-size: 12px; ">
                            <td>Nama</td>
                            <td>&ensp;: <?php echo $nota = $data['nama'];?></td>
                          </tr>
                          <tr style="font-size: 12px; ">
                            <td>Telp</td>
                            <td>&ensp;: <?php echo $nota = $data['nohp'];?></td>
                          </tr>
                          <tr style="font-size: 12px; ">
                            <td>Tanggal Transaksi</td>
                            <td>&ensp;: <?php echo $nota = date('d M Y',strtotime($data['tanggal_garansi']));?></td>
                          </tr>
                        </table>
                        
                    </div>
               </div>
               <div style="border-top: 2px solid #000; margin-top: 1em; padding-top: 1em;"> </div>
               
               
               <table class="table table-borderless" style="border-bottom: 1px solid #000;">
                <tr <?php echo $frame;?>>
                    <td align="left">Frame</td>
                    <td width="65%" >: <?php echo $nota = $data['kode_f'];?> <?php echo $nota = $data['merk_f'];?> <?php echo $nota = $data['detil_f'];?> </td>
                    <td align="" >: Rp. <?php echo $nota = number_format($data['harga_f']);?> </td>
                </tr>
                <tr <?php echo $lensa;?>>
                    <td align="left">Lensa</td>
                    <td  width="65%">: <?php echo $nota = $data['kode_lr'];?> <?php echo $nota = $data['merk_lr'];?> <?php echo $nota = $data['jenis_lr'];?></td>
                    <td align="">: Rp. <?php echo $nota = number_format($harga);?> </td>
                </tr>
                <tr <?php echo $lensaod;?>>
                    <td align="left">Lensa OD</td>
                    <td  width="65%">: <?php echo $nota = $data['kode_lr'];?> <?php echo $nota = $data['merk_lr'];?> <?php echo $nota = $data['jenis_lr'];?></td>
                    <td align="">: Rp. <?php echo $nota = number_format($data['harga_lr']);?> </td>
                </tr>
                <tr <?php echo $lensaod;?>>
                    <td align="left">Lensa OS</td>
                    <td  width="65%">: <?php echo $nota = $data['kode_ll'];?> <?php echo $nota = $data['merk_lr'];?> <?php echo $nota = $data['jenis_lr'];?></td>
                    <td align="">: Rp. <?php echo $nota = number_format($data['harga_lr']);?> </td>
                </tr>
                
                
                
           
                
                
                <tr style="border-top: 1px solid #000;">
                    <td colspan="2" align="right">Jumlah Harga</td>
                    <td>: Rp. <?php echo $nota = number_format($data['jumlah_harga']);?> </td>
                </tr>
                <tr <?php echo $diskon;?>>
                    <td colspan="2" align="right">Diskon</td>
                    <td>:  <?php echo $nota = number_format($data['diskon']);?> %</td>
                </tr>
                <tr>
                    <td colspan="2" align="right">Total Harga</td>
                    <td>: Rp. <?php echo $nota = number_format($data['total']);?> </td>
                </tr>
                <tr>
                    <td colspan="2" align="right">Uang Muka</td>
                    <td>: Rp. <?php echo $nota = number_format($data['uang_muka']);?> </td>
                </tr>
                <tr>
                    <td colspan="2" align="right">Sisa</td>
                    <td>: Rp. <?php echo $nota = number_format($data['sisa']);?> </td>
                </tr>
               </table>
               <div class="row-dalam">
                  <div class="col-3">

                  </div>
                  <div class="col">
                  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Hormat Kami,
                  </div>
                  <div class="col">
                  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Telah Diterima,
                  </div>
               </div><br>
               <div class="row-dalam">
                <div class="col-3">

                </div>
                <div class="col" >
                (...........................................)
                </div>
                <div class="col">
                (................................................)
                </div>
               </div>
               </div>
               
               
              



               <br><br>
               <div >
               <button class="btn btn-primary" onclick="printContent('div1')">Cetak Nota</button>
               
               <a href="../kar/orgaransi.php?id=<?php echo $nota = $data['nota_ref'];?>" type="button" class="btn btn-primary">Order Lensa</a>
                
                
               </div>
               <br><br>
               


               
              







         </div>
    </main>
    
</body>
</html>