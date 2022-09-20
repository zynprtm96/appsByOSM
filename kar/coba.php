<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="../aset/css/style.css" />
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    
    <title>Document</title>
    
</head>

<body>
    
<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <!-- Brand -->
  <a class="navbar-brand" href="#">MAWAR OPTICAL</a>

  <!-- Links -->
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" href="../kar/rumah.php">HOME</a>
    </li>

    <!-- Dropdown -->
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
        Transaksi
      </a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="../kar/notakontan.php">NOTA KONTAN</a>
        <a class="dropdown-item" href="../kar/notapesan.php">NOTA PESAN</a>
        <a class="dropdown-item" href="../kar/pengambilan.php">NOTA PENGAMBILAN</a>
        <a class="dropdown-item" href="../kar/notabatal.php">NOTA BATAL</a>
      
        <a class="dropdown-item" href="../kar/order.php">ORDER LENSA</a>
      </div>
    </li>
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
        Laporan
      </a>
      <div class="dropdown-menu">
       
        <a class="dropdown-item" href="../kar/laporanpesan.php">PESANAN</a>
        <a class="dropdown-item" href="../kar/laporankontan.php">KONTAN</a>
        <a class="dropdown-item" href="../kar/laporanbatal.php">BATAL</a>
      </div>
    </li>
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
        Rekam Medis
      </a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="../kar/pemeriksaan.php">BUAT BARU</a>
        <a class="dropdown-item" href="../kar/fnrekam.php">LIHAT</a>
     
      </div>
    </li>
  </ul>
</nav>
<br>
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