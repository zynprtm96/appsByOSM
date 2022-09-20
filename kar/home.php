<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="../aset/css/style.css" />
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    
    
    <title>Document</title>
    
</head>
<style>
    .rangkasurat{
                width: 980px;
                margin:0 auto;
                background-color:#fff;
                
                padding:20px;

            }
</style>

<body>
    
    <header class="header" id="header">
        <nav class="nav container">
            <a href="#" class="nav__logo">Mawar Optical</a>

            <div class="nav__menu" id="nav-menu" style="margin-top: 12px;">
                <ul class="nav__list">
                <li class="nav__item">
                        <a href="../kar/rumah.php" class="nav__link active-link">
                            <i class='bx bx-home-alt nav__icon'></i>
                            <span class="nav__name">Home</span>
                        </a>
                    </li>
                    <li class="nav__item">
                    <a class="nav__link  " href="#"  role="button" data-toggle="dropdown">
            Transaksi
          </a>
          <!-- Here's the magic. Add the .animate and .slideIn classes to your .dropdown-menu and you're all set! -->
          <div class="dropdown-menu">
      <a class="dropdown-item" href="../kar/fnkontan.php">NOTA KONTAN</a>
      <a class="dropdown-item" href="../kar/fnpesan.php">NOTA PESAN</a>
      <a class="dropdown-item" href="../kar/cek.php">NOTA PENGAMBILAN</a>
      <a class="dropdown-item" href="../kar/notabatal.php">NOTA BATAL</a>
      <a class="dropdown-item" href="../kar/order.php">ORDER LAB</a>
    </div>
                    </li>
                    
                    

                    <li class="nav__item">
                    <a class="nav__link  " href="#"  role="button" data-toggle="dropdown">
            Rekam Medis
          </a>
          <!-- Here's the magic. Add the .animate and .slideIn classes to your .dropdown-menu and you're all set! -->
          <div class="dropdown-menu">
            <a class="dropdown-item" href="../kar/pemeriksaan.php">Buat Baru</a>
            <a class="dropdown-item" href="../kar/medis.php">Lihat</a>
           
            </div>
                    </li>

                    
                    
                    
                    
                </ul>
                
            </div>
            

            <img src="{{ url('/img/logo.png') }}" alt="" class="nav__img">
        </nav>
    </header>
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
    <div class="container" style="margin-top:6rem;">
    <div class="rangka surat">
    <div class="row-dalam" style="text-align: center;">
                    <div class="col-2">
                        <img src="../aset/img/awal.png" width="200px" style="margin-left: 14px; margin-top:7px;" />
                    </div>
                    <div class="col-9" style="text-align: Center;">
                        <h5 style="font-size: 16px; font-weight:900;">OPTICAL SYSTEM MANAGEMENT (OSM)</h5>
                        <h5 style="font-size: 11px; ">Manage Your Optic Company</h5>
                        
                        <h5 style="font-size: 11px;"><?php echo format_hari_tanggal($date);?></h5>
                       
                    </div>
    </div><br>
    <p>Prototype Version v1.0</p>
    <p>Tolong Laporkan Apabila Ada Bug Ataupun Kendala Dalam Pemakaian Aplikasi</p>

    




    </div>


   

    </main> 
</body>
</html>