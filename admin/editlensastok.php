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
        <?php

include ('../config/koneksi.php');
$id = $_GET['id'];
$barang = mysqli_query($konek,"SELECT * FROM master_lensa where id=$id");
$data = mysqli_fetch_array($barang);

        ?>
        
    
    <div  class="container">
    <form action="../admin/proseseditlensastok.php" method="post">
            <div class="form-group" >
                <input type="text" name="id" id="id" hidden value="<?php echo $data['id']?>">
               
<table class="table table-borderless">
                    <tr>
                        <td style="vertical-align: middle;">
                        <label for="">Kode</label>
                        </td>
                        <td colspan="3">
                        <input type="text" value="<?php echo $data['kode_lensa']?>" readonly class="form-control" name="kode_lensa">
                        </td>
                    </tr>
                    <tr>
                        <td style="vertical-align: middle;">
                        <label for="">Merk</label>
                        </td>
                        <td colspan="3">
                        <input type="text" value="<?php echo $data['merk']?>"  class="form-control" name="merk">
                        </td>
                    </tr>
                    <tr>
                        <td style="vertical-align: middle;">
                        <label for="">Jenis</label>
                        </td>
                        <td colspan="3">
                        <input type="text" class="form-control" value="<?php echo $data['jenis']?>"   name="jenis">
                        </td>
                    </tr>
                    <tr>
                        <td style="vertical-align: middle;">
                        <label for="">SPH</label>
                        </td>
                        <td colspan="3">
                        <input type="text" class="form-control" value="<?php echo $data['sph']?>"   name="sph">
                        </td>
                    </tr>
                    <tr>
                        <td style="vertical-align: middle;">
                        <label for="">CYL</label>
                        </td>
                        <td colspan="3">
                        <input type="text" class="form-control" value="<?php echo $data['cyl']?>"   name="cyl">
                        </td>
                    </tr>
                    <tr>
                        <td style="vertical-align: middle;">
                        <label for="">Adisi</label>
                        </td>
                        <td colspan="3">
                        <input type="text" class="form-control" value="<?php echo $data['adisi']?>"   name="adisi">
                        </td>
                    </tr>
                    <tr>
                        <td style="vertical-align: middle;">
                        <label for="">Stok</label>
                        </td>
                        <td id="hasil">
                        
                        </td>
                        <td style="vertical-align: middle;">
                            Tambah Stok
                        </td>
                        <td colspan="3">
                            <input type="number" class="form-control" id="tambah_stok" name="tambah_stok">
                        </td>
                        <td>
                            <a type="button" class="btn btn-primary" id="tambah">Tambah</a>
                        </td>
                        
                    </tr>
                    <tr>
                        <td style="vertical-align: middle;">
                        <label for="">Harga</label>
                        </td>
                        <td colspan="3">
                        <input type="text" id="harga" class="form-control" value="<?php echo number_format($data['harga'])?>"   name="harga">
                        </td>
                    </tr>
                </table>
                <input type="submit" class="btn btn-primary" value="EDIT">
                
                    
                    
                   

                

            </div>

    </div>
    </div>
    </main>
    <script>
      
      $('#tambah').click(function(){
        var idbarang = $("#id").val();
        var jumlah = $("#tambah_stok").val();
        var kosong ="";
       
        

        $.ajax({
					url: '../admin/tambahstoklensa.php',
					type: 'POST',
					
					data: {
						'id': idbarang,
                    'jumlah': jumlah
					},
					
          });
         
          document.getElementById('tambah_stok').value = kosong;
        

      })
    </script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script type="text/javascript">
      $(document).ready(function(){
        var nota = $("#id").val();
        var otomatis = setInterval(
function ()
{
$('#hasil').load('../admin/dataeditlensastok.php?id=' + nota).fadeIn("slow");
}, 1000);

      })
</script>
    <script>
var sisa = document.getElementById('harga');
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
   

    
</body>


    

</html>