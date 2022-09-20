<!DOCTYPE html>
<?php
include ('../config/koneksi.php');
?>
<html lang="en">
<head>
  <title>HOME</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="../aset/css/style.css" />
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>

<style>
    .rangkasurat{
                width: 1080px;
                
                margin-left: 5px;
                background-color:#fff;
                
                padding:20px;

            }
</style>

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
        <a class="dropdown-item" href="../kar/fnkontan.php">NOTA KONTAN</a>
        <a class="dropdown-item" href="../kar/fnpesan.php">NOTA PESAN</a>
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
       
        <a class="dropdown-item" href="../kar/laporanpenjualan.php">PENJUALAN</a>
        <a class="dropdown-item" href="../kar/laporanomset.php">OMSET</a>
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
    <li class="nav-item">
      <a class="nav-link" href="../proses/logout.php">LOG OUT</a>
    </li>
  </ul>
</nav>
<br>
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
    <div class="masukan">
                            <input onkeyup="this.value = this.value.toUpperCase()" type="text" required id="nama" class="effect-5"  placeholder=" " list="data-nama" name="nonota" autocomplete="off"/>
                            <label for="effect5">Nonota</label>
                        
                          </div>
        <div class="masukan">
                            <input onkeyup="this.value = this.value.toUpperCase()" type="text" required id="nama" class="effect-5"  placeholder=" " list="data-nama" name="nama" autocomplete="off"/>
                            <label for="effect5">Nama</label>
                        
                          </div>
                          <div class="masukan">
                            <input onkeyup="this.value = this.value.toUpperCase()" type="text" required id="nama" class="effect-5"  placeholder=" " list="data-nama" name="alamat" autocomplete="off"/>
                            <label for="effect5">Alamat</label>
                        
                          </div>
                          <div class="masukan">
                            <input onkeyup="this.value = this.value.toUpperCase()" type="text" required id="nama" class="effect-5"  placeholder=" " list="data-nama" name="usia" autocomplete="off"/>
                            <label for="effect5">Usia</label>
                        
                          </div>
                          <div class="masukan">
                            <input onkeyup="this.value = this.value.toUpperCase()" type="text" required id="nama" class="effect-5"  placeholder=" " list="data-nama" name="nohp" autocomplete="off"/>
                            <label for="effect5">No Telp</label>
                        
                          </div>
                          <div class="masukan">
                            <input onkeyup="this.value = this.value.toUpperCase()" type="text" required id="barang" class="effect-5"  placeholder=" " list="data-nama" name="nohp" autocomplete="off"/>
                            <label for="effect5">barang</label>
                        
                          </div>
                          <button id="klik" type="submit" name="coba" onclick="klik()">Simpan</button>
             
        
                   
        
        
    </div>
    <form action="" method="post">
    <div class="masukan">
          <input onkeyup="this.value = this.value.toUpperCase()" type="text" required id="barang" class="effect-5"  placeholder=" " list="data-nama" name="nonota" autocomplete="off"/>
          <label for="effect5">NONOTA</label>
        </div>
        <div class="masukan">
          <input onkeyup="this.value = this.value.toUpperCase()" type="text" required id="barang" class="effect-5"  placeholder=" " list="data-nama" name="jenis" autocomplete="off"/>
          <label for="effect5">Jenis</label>
        </div>
        <div class="masukan">
          <input onkeyup="this.value = this.value.toUpperCase()" type="text" required id="barang" class="effect-5"  placeholder=" " list="data-nama" name="produk" autocomplete="off"/>
          <label for="effect5">Produk</label>
        </div>
        <div class="masukan">
          <input onkeyup="this.value = this.value.toUpperCase()" type="text" required id="barang" class="effect-5"  placeholder=" " list="data-nama" name="jumlah" autocomplete="off"/>
          <label for="effect5">jumlah</label>
        </div>
        <div class="masukan">
          <input onkeyup="this.value = this.value.toUpperCase()" type="text" required id="barang" class="effect-5"  placeholder=" " list="data-nama" name="harga" autocomplete="off"/>
          <label for="effect5">Harga</label>
        </div>
        <input type="submit" name="tambah" id="" value="tambah">
    </form>
    <?php
    $nonota="";
    if(isset($_POST['tambah'])){
      $jenis=$_POST['jenis'];
      $nonota=$_POST['nonota'];
      $produk=$_POST['produk'];
       $jumlah=$_POST['jumlah'];
      $harga=$_POST['harga'];

      $konek->query("insert into np_sementara(nonota,produk,jenis,harga,jumlah)values('$nonota','$produk','$jenis','$harga','$jumlah')");

    }
    ?>
    <div class="container">
<table class="table">
<thead>
<tr>
  <td>no</td>
        <td>nonota</td>
        <td>jenis</td>
        <td>produk</td>
        <td>jumlah</td>
        <td>harga</td>
        <td>aksi</td>
    </tr>
</thead>
    
<tbody>
               <?php
                  $no = 1;
                  $total_bayar = 0;
             
                  $sql = $konek->query("select * from np_sementara where nonota='".$nonota."'");
                  
                  while ($data = $sql->fetch_assoc()) {
                    
                  $total_bayar += $data['harga'];
                  ?>
               <tr>
                  <td><?php echo $no++;?></td>
                  <td><?php echo $data['nonota']?></td>
                  <td><?php echo $data['jenis']?></td>
                  <td><?php echo $data['produk']?></td>
                  <td><?php echo $data['jumlah']?></td>
                  <td><?php echo $data['harga']?></td>
                  
              
                  <td>
                     <a onclick="return confirm('Apakah Anda Yakin Ingin Menghapus Data ini !')" href="?kodepj=<?=$_GET['kodepj']?>&page=penjualan&aksi=delete&id=<?php echo $data['id']?>" class="btn btn-danger" >Delete</a>
                  </td>
               </tr>
               <?php 
                  }    
                  ?>
            </tbody>
</table>
    </div>
<script>
function klik(){
    var nama = document.getElementById('barang').value;
    var hiya = "";
    document.getElementById('barang').value = hiya;
    document.getElementById('barangmasuk').value = nama;
    // document.getElementById('barang').disabled = true;
}
</script>

   

    </main> 
</body>
</html>