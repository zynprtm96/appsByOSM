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
    
    <title>Document</title>
    
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
        
    <div  >
  
    <div >
        <?php
         include('../config/koneksi.php');
        $id = $_GET['id'];
        $query = mysqli_query($konek, "SELECT * FROM rekam_medis WHERE id='$id'");
        $data = mysqli_fetch_array($query);
        if($data['jlseb']==null){
            $ukuran ="";
            $deskripsi ="hidden";
        }else{
            $ukuran ="hidden";
            $deskripsi ="";
        }

        ?>

        <div class="pinggir" >
            <div class="main" style="padding: 13px; margin-left:1rem;">
            <h5>Identitas Pasien</h5>
        <div class="row-dalam">
            <div class="col-4">
                Nama

            </div>
            <div class="col" style="text-align: left;">
                : <?php echo $data['nama'];?>

            </div>

        </div>
        <div class="row-dalam">
            <div class="col-4">
                Alamat

            </div>
            <div class="col" style="text-align: left;">
                : <?php echo $data['alamat'];?>

            </div>

        </div>
        <div class="row-dalam">
            <div class="col-4">
                Usia

            </div>
            <div class="col" style="text-align: left;">
                : <?php echo $data['usia'];?> Tahun

            </div>

        </div>
        <div class="row-dalam">
            <div class="col-4">
                No Telp

            </div>
            <div class="col" style="text-align: left;">
                : <?php echo $data['nohp'];?>

            </div>

        </div>
        <div class="row-dalam">
            <div class="col-4">
                Anamnesa

            </div>
            <div class="col" style="text-align: left;">
                : <?php echo $data['anamnesa'];?>

            </div>
        </div>
        <div class="row-dalam">
            <div class="col-4">
                Diagnosa

            </div>
            <div class="col" style="text-align: left;">
                : <?php echo $data['diagnosa'];?>

            </div>
        </div>
        <div class="row-dalam">
            <div class="col-4">
                Analisa

            </div>
            <div class="col" style="text-align: left;">
                : <?php echo $data['analisa'];?>

            </div>
        </div>
        <div class="row-dalam">
            <div class="col-4">
                Terapi

            </div>
            <div class="col" style="text-align: left;">
                : <?php echo $data['terapi'];?>

            </div>
        </div>
        <div class="row-dalam">
            <div class="col-4">
                Kesimpulan

            </div>
            <div class="col" style="text-align: left;">
                : <?php echo $data['kesimpulan'];?>

            </div>
        </div>
        <div class="row-dalam">
            <div class="col-4">
                Pemeriksa

            </div>
            <div class="col" style="text-align: left;">
                : <?php echo $data['pemeriksa'];?>

            </div>
        </div>
           

        
            </div>
            <div class="main">
            <h5>Inpeksi Dan Observasi Pasien</h5>
            <p>Keadaan Posisi Bola Mata </p> 
        <div class="row-dalam" >
            
            <div class="col-2">
                  OD

            </div>
            <div class="col">
                  : <?php echo $data['pbr'];?>

            </div>
            

        </div>
        <div class="row-dalam">
           
            <div class="col-2" >
                  OS

            </div>
            <div class="col" >
                  : <?php echo $data['pbl'];?>

            </div>
            

        </div><br>
       <p> Konjungtiva Dan Sklera</p>
        <div class="row-dalam">
            
            <div class="col-2">
                  OD

            </div>
            <div class="col">
                  : <?php echo $data['ksr'];?>

            </div>
            

        </div>
        <div class="row-dalam">
           
            <div class="col-2" >
                  OS

            </div>
            <div class="col" >
                  : <?php echo $data['ksl'];?>

            </div>
            

        </div><br>
       <p>Keadaan Lensa Mata</p> 
        <div class="row-dalam">
           
            <div class="col-2">
                  OD

            </div>
            <div class="col">
                  : <?php echo $data['lmr'];?>

            </div>
            

        </div>
        <div class="row-dalam">
           
            <div class="col-2" >
                  OS

            </div>
            <div class="col" >
                  : <?php echo $data['lml'];?>

            </div>
            

        </div><br>
       <p>Keadaan Kornea Mata </p>

        <div class="row-dalam">
            
            <div class="col-2">
                  OD

            </div>
            <div class="col">
                  : <?php echo $data['kmr'];?>

            </div>
            

        </div>
        <div class="row-dalam">
            
            <div class="col-2" >
                  OS

            </div>
            <div class="col" >
                  : <?php echo $data['kml'];?>

            </div>

            

        </div><br>
        <p>Pinhole Tes</p>
        <div class="row-dalam">
            <div class="col">
            <p>OD : <?php echo $data['phr'];?></p><p>OS : <?php echo $data['phl'];?></p>
            </div>

        </div>
        <p>Tes Keseimbangan Binokular</p>
        <p>Menggunakan <?php echo $data['tkb'];?></p>
        <p>Tes Titik Akhir Binokular</p>
        <p>Menggunakan <?php echo $data['ttab'];?></p>
    
        
            </div>
            <div class="main">
            <h5  >Ukuran Kacamata Lama</h5>
               <p <?php echo $ukuran;?> >Belum Pernah Menggunakan Kacamata</p>
               
               
               <div <?php echo $deskripsi;?> >
               <table class="table table-bordered" style="text-align: center;" >
                <tr>
                    <td></td>
                    <td>SPH</td>
                    <td>CYL</td>
                    <td>AX</td>
                    <td>PRIS</td>
                    <td>BASE</td>
                    <td>Adisi</td>
                    
                </tr>
                <tr>
                    <td>OD</td>
                    <td><?php echo $data['sphrseb'];?></td>
                    <td><?php echo $data['cylrseb'];?></td>
                    <td><?php echo $data['axrseb'];?></td>
                    <td><?php echo $data['prisrseb'];?></td>
                    <td><?php echo $data['baserseb'];?></td>
                    
                    <td><?php echo $data['adisirseb'];?></td>
                    
                </tr>
                <tr>
                    <td>OS</td>
                    <td><?php echo $data['sphlseb'];?></td>
                    <td><?php echo $data['cyllseb'];?></td>
                    <td><?php echo $data['axlseb'];?></td>
                    <td><?php echo $data['prislseb'];?></td>
                    <td><?php echo $data['baselseb'];?></td>
                    
                    <td><?php echo $data['adisilseb'];?></td>
                    
                </tr>
               </table>
               </div><br>
               <h5 >Pemeriksaan Refraksi Objektif</h5>
               <p>Pemeriksaan Dilakukan Dengan Alkes : <?php echo $data['alat'];?></p>
               <table class="table table-bordered" style="text-align: center;">
                <tr>
                    <td></td>
                    <td>SPH</td>
                    <td>CYL</td>
                    <td>AX</td>
                    
                </tr>
                <tr>
                    <td>OD</td>
                    <td><?php echo $data['sphralat'];?></td>
                    <td><?php echo $data['cylralat'];?></td>
                    <td><?php echo $data['axralat'];?></td>
                    
                </tr>
                <tr>
                    <td>OS</td>
                    <td><?php echo $data['sphlalat'];?></td>
                    <td><?php echo $data['cyllalat'];?></td>
                    <td><?php echo $data['axlalat'];?></td>
                    
                </tr>
               </table>
               <h5>Pemeriksaan Refraksi Subjektif</h5>
                        <table class="table table-bordered" style="text-align: center;" >
                <tr>
                    <td></td>
                    <td>SPH</td>
                    <td>CYL</td>
                    <td>AX</td>
                    <td>PRIS</td>
                    <td>BASE</td>
                    
                    <td>Adisi</td>
                    <td>PD</td>
                </tr>
                <tr>
                    <td>OD</td>
                    <td><?php echo $data['sphrsek'];?></td>
                    <td><?php echo $data['cylrsek'];?></td>
                    <td><?php echo $data['axrsek'];?></td>
                    <td><?php echo $data['prisrsek'];?></td>
                    <td><?php echo $data['basersek'];?></td>
                    
                    <td><?php echo $data['adisirsek'];?></td>
                    <td><?php echo $data['pdr'];?></td>
                </tr>
                <tr>
                    <td>OS</td>
                    <td><?php echo $data['sphlsek'];?></td>
                    <td><?php echo $data['cyllsek'];?></td>
                    <td><?php echo $data['axlsek'];?></td>
                    <td><?php echo $data['prislsek'];?></td>
                    <td><?php echo $data['baselsek'];?></td>
                    
                    <td><?php echo $data['adisilsek'];?></td>
                    <td><?php echo $data['pdl'];?></td>
                </tr>
               </table>
               <table class="table table-borderless" >
                <tr>
                    <td >PD Binokuler Jauh</td>
                    <td>: <?php echo $data['pd'];?></td>
                    <td ></td>
                    <td >PD Binokuler Dekat</td>
                    <td>: <?php echo $data['pdd'];?></td>
                </tr>
               </table>
               
                
                

            </div>

        </div>
       
        
        
               
        

    </div>
    </div>
    </main>
    
    
</body>
</html>