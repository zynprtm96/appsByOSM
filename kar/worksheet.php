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
 
</head>

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
    


<style>
    @page 
    {
        size: auto;   /* auto is the initial value */
        margin-top: 4mm;  /* this affects the margin in the printer settings */
    }
    div.chapter, div.appendix {
        page-break-before:always;
        margin-top: 14mm; 
    
}
    body{
        font-size: 12px;
        background-color: #fff;
        
    }
    .masukan1 {
    position: relative;
    margin: 1rem 0;
    
  }
  
  .masukan1 input {
    border: none;
    outline: none;
    padding: 0.75rem;
    font-size: 1rem;
    width: 100%;
  }
 
  
  .overflow-hidden {
    overflow: hidden;
  }
  .masukan1 .effect-5 {
    
    padding-left: 0;
  }
  
  .masukan1 .effect-5 + label {
    position: absolute;
    top: 50%;
    left: 0;
    transform: translateY(-50%);
    color: #ccc;
    transition: 0.5s ease-in-out;
  }
  
 
  
  .effect-5:focus + label,
  .effect-5:not(:placeholder-shown) + label {
    top: 0;
    transition: 0.3s;
    background-color: #fff;
    color: #000;
  }
  
    .rangkasurat{
                width: 980px;
                margin:0 auto;
                background-color:#fff;
                
                padding:20px;

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
</style>
</head>

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
                    <div class="col-3">
                        <img src="../aset/img/marmot.png" width="150px" style="margin-left: 14px; margin-top:15px;" />
                    </div>
                    <div class="col-6" style="text-align: center;" align="center">
                        <h5 style="font-size: 14px; font-weight:900;">MARMOT WORKSHEET</h5>
                        
                   
                        <h5 style="font-size: 11px;">Data Acuan <i>Electronic Medical Record Optometrist</i> (EMRO) </h5>
                        <h6 style="font-size: 11px;">Powered By OSM</h6>
                    </div>
                    <div class="col-3">
                        <img src="../aset/img/osm.svg" width="100px" style="margin-left: 14px; margin-top:10px;" align="right" />
                    </div>
            </div>
                <div style="border-top: 1px solid #000; margin-top: 1em; padding-top: 1em;"> </div>
                <br>
                <div>
                    <h6 style="text-align: center;">DIAGNOSA PEMERIKSAAN REFRAKSI MATA</h6>
                    <table class="table table-borderless">
                        <tr>
                            <td width="20%">No Diagnosa</td>
                            <td>: .......................................................... </td>
                            <td width="20%">Tanggal Pemeriksaan</td>
                            <td>: .......................................................... </td>
                        </tr>
                       
                        <tr>
                            <td width="20%">Pemeriksa</td>
                            <td>: .......................................................... </td>
                        </tr>
                        <tr>
                            <td width="20%">Nama</td>
                            <td>: .......................................................... </td>
                        </tr>
                        <tr>
                            <td width="20%">Usia</td>
                            <td>: .......................................................... </td>
                        </tr>
                        <tr>
                            <td width="20%">Anamnesa</td>
                            <td>: .......................................................... </td>
                        </tr>
                        <tr>
                            <td width="20%"></td>
                            <td> ............................................................ </td>
                        </tr>
                        <tr>
                            <td width="20%"></td>
                            <td> ............................................................ </td>
                        </tr>
                       
                    </table>
                    <h6 style="text-align: center;">Inpeksi Dan Observasi Pasien</h6>
                    <table class="table table-borderless">
                    <tr>
                            <td width="25%">Posisi Bola Mata</td>
                            <td>OD : ............................................................ </td>
                            <td>OS : ............................................................ </td>
                    </tr>
                    <tr>
                            <td width="25%">Konjungtiva Dan Sklera</td>
                            <td>OD : ............................................................ </td>
                            <td>OS : ............................................................ </td>
                    </tr>
                    <tr>
                            <td width="25%">Keadaan Lensa Mata</td>
                            <td>OD : ............................................................ </td>
                            <td>OS : ............................................................ </td>
                    </tr>
                    <tr>
                            <td width="25%">Keadaan Kornea Mata</td>
                            <td>OD : ............................................................ </td>
                            <td>OS : ............................................................ </td>
                    </tr>


                    </table>
                    <h6 style="text-align: center;">Ukuran Kacamata Lama</h6>
                    <table class="table table-bordered"  >
                        <tr align="center">
                            <td></td>
                            <td>SPH</td>
                            <td>CYL</td>
                            <td>AXIS</td>
                            <td>VISUS</td>
                            <td>PRISM</td>
                            <td>BASE</td>
                            <td>ADD</td>
                        </tr>
                        <tr align="center">
                            <td>OD</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr align="center">
                            <td>OS</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        

                    </table>
                    <table class="table table-borderless">
                    <tr>
                            <td width="35%">Jenis Lensa Sebelumnya</td>
                            <td>: ............................................................ </td>
                        </tr>

                    </table>
                    <div class="chapter">

                   
                    <h6 style="text-align: center;">Hasil Pemeriksaan Objektif</h6>
                    <table class="table table-borderless">
                    <td width="35%">Pemeriksaan Dilakukan Dengan Alkes</td>
                            <td>: ............................................................ </td>

                    </table>
                    <table class="table table-bordered">
                    <tr align="center">
                        <td></td>
                            <td>SPH</td>
                            <td>CYL</td>
                            <td>AXIS</td>
                            
                        </tr>
                        <tr align="center">
                            <td>OD</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            
                        </tr>
                        <tr align="center">
                            <td>OS</td>
                            <td></td>
                            <td></td>
                            <td></td>
                           
                        </tr>

                    </table>
                     <h6 style="text-align: center;">Hasil Pemeriksaan Subjektif</h6>
                     <table class="table table-bordered"  >
                        <tr align="center">
                            <td></td>
                            <td>SPH</td>
                            <td>CYL</td>
                            <td>AXIS</td>
                            <td>UCVA</td>
                            <td>BCVA</td>
                            <td>PRISM</td>
                            <td>BASE</td>
                            <td>ADD</td>
                            <td>PD</td>
                           
                        </tr>
                        <tr align="center">
                            <td>OD</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr align="center">
                            <td>OS</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                     </table>
                     <table class="table table-borderless">
                     <tr>
                            <td width="30%">PD Binokuler Jauh</td>
                            
                            <td>: ............................................................ </td>
                    </tr>
                    <tr>
                            <td width="30%">PD Binokuler Dekat</td>
                           
                            <td>: ............................................................ </td>
                    </tr>
                    <tr>
                            <td width="30%">Pinhole Tes</td>
                            <td>OD : ............................................................ </td>
                            <td>OS : ............................................................ </td>
                    </tr>
                    <tr>
                            <td width="30%">Tes Keseimbangan Binokular</td>
                           
                            <td>: ............................................................ </td>
                    </tr>
                    <tr>
                            <td width="30%">Tes Titik Akhir Binokular</td>
                           
                            <td>: ............................................................ </td>
                    </tr>
                    <tr>
                            <td width="30%">Diagnosa Refraksi</td>
                           
                            <td>: ............................................................ </td>
                    </tr>
                    <tr>
                            <td width="30%">Analisa Refraksi</td>
                           
                            <td>: ............................................................ </td>
                    </tr>
                    <tr>
                            <td width="30%">Terapi Hasil Refraksi</td>
                           
                            <td>: ............................................................ </td>
                    </tr>
                    <tr>
                            <td width="30%">Kesimpulan Dan Saran</td>
                           
                            <td>: ............................................................ </td>
                    </tr>
                     </table>
                     </div>
                </div>
              
               
            </div>
               <div >
               <button class="btn btn-primary" onclick="printContent('div1')">Cetak</button>
               
                
               </div>
               <br><br>
               


               
              







         </div>
    </main>
    
</body>
</html>