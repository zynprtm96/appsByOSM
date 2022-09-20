<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="../aset/js/jqueryslim.js"></script>
  <script src="../aset/js/poper.js"></script>
  <script src="../aset/js/bootbundle.js"></script>
  <link href="../aset/boot/bootstrap.min.css" rel="stylesheet">
  <script src="../aset/boot/js/bootstrap.bundle.min.js"></script>
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
    <h5 style="text-align: center;">Pengeluaran Harian</h5>
    
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
Tambah Pengeluaran
</button>
<br>
    
    </div>
    <div id="hasil" class="container">

    </div>
    </div>
    </main>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script type="text/javascript">
  $(document).ready(function(){
    load_data();
    function load_data(search){
      $.ajax({
        url:"../proses/pengeluaranharian.php",
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

<div class="modal fade " id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Pengeluaran</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <?php
        include ('../config/koneksi.php');
         $pelanggan =  mysqli_query($konek, "SELECT max(kode) as id FROM master_barang where jenis='FRAME'");
         $datap = mysqli_fetch_array($pelanggan);
         $id = $datap['id'];
         $tambah = (int) substr($id, 5, 5);
         $tambah++;
         $teks = "FRM-";
         $kode = $teks . sprintf("%05s", $tambah); 
         $tanggal = date('d M y');
 
        ?>
        <form action="../admin/tambahpengeluaran.php" method="post">
            <div class="form-group">
                
                    <label for="">Tanggal</label>
                    <input type="text" autocomplete="off"  onkeyup="this.value = this.value.toUpperCase()"  class="form-control"   readonly value="<?php echo $tanggal?>">

                

            </div>
             <div class="form-group">
                
                    <label for="">Pengeluaran</label>
                        <input  autocomplete="off" type="text" onkeyup="this.value = this.value.toUpperCase()"  class="form-control" name="produk">

                

            </div>
            
            <div class="form-group">
                
                    <label for="">Harga</label>
                    <input  autocomplete="off" type="text" onkeyup="this.value = this.value.toUpperCase()"  id="harga_frame" class="form-control" name="pengeluaran" autocomplete="off">

                

            </div>

       
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Kembali</button>
        <button type="submit" class="btn btn-primary">Tambah</button>
         </form>
      </div>
    </div>
  </div>
</div>
<script>
var sisa = document.getElementById('harga_frame');
    sisa.addEventListener('keyup', function(e)
    {
      
        sisa.value = formatRupiah(this.value);
    });

    function formatRupiah(angka, prefix)
    {
        var number_string = angka.replace(/[^,\d]/g, '').toString(),
            split    = number_string.split(','),
            sisa     = split[0].length % 3,
            rupiah     = split[0].substr(0, sisa),
            ribuan     = split[0].substr(sisa).match(/\d{3}/gi);
            
        if (ribuan) {
            separator = sisa ? '.' : '';
            rupiah += separator + ribuan.join('.');
        }
        
        rupiah = split[1] != undefined ? rupiah + ',' + split[1] : rupiah;
        return prefix == undefined ? rupiah : (rupiah ? 'Rp. ' + rupiah : '');
    }
        </script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>


</script>
   


    

</html>