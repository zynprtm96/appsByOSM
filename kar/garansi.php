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
        <?php
        include '../config/koneksi.php';

        $id = $_GET['id'];
        $query = mysqli_query($konek, "SELECT *  FROM nota_pesan where nonota='$id'");
        $data = mysqli_fetch_array($query);
        $garansi =  mysqli_query($konek, "SELECT max(nonotagr) as id FROM nota_garansi");
        $datap = mysqli_fetch_array($garansi);
        $id = $datap['id'];
        $tambah = (int) substr($id, 5, 5);
        $tambah++;
        $teks = "NG-";
        $nota_garansi = $teks . sprintf("%05s", $tambah); 

        $tanggal=date('d-m-Y');
        if($data['mp']=="DEBIT" ){
            $tc="";
        }elseif($data['mp']=="KREDIT"){
            $tc="";
        }else{
            $tc="hidden";
        }

        ?>
        
        <div class="container" >
          <h5 style="text-align: center;">NOTA GARANSI</h5>
          <a href="../kar/fngaransi.php" style="margin-left: 20px;" type="button" class="btn btn-danger">Kembali</a>
        <form method="POST" action="../proses/prosesgaransi.php" onsubmit="return submitForm(this);">
            <div class="pinggir">
                <div class="main">

                            <div class="row-dalam masukan">
                                
                                <div class="col">
                                    <input type="text" id="effect5" class="effect-5" readonly value="<?php echo $nota_garansi ?>" placeholder=" " name="nonotagr" />
                                    <label for="effect5">No Nota</label>
                                </div>
                                <div class="col">
                                    <input type="text" id="effect5" class="effect-5" readonly value="<?php echo $data['nonota'] ?>" placeholder=" " name="nota_ref" />
                                    <label for="effect5">Nota Ref</label>
                                </div>
                               
                                <div class="col">
                                    <input type="text" id="effect5" class="effect-5" readonly value="<?php echo $tanggal ?>" placeholder=" "  />
                                    <label for="effect5">Tanggal Pemesanan</label>
                                </div>
                            </div>       
                   
                            
<div class="row-dalam masukan">
  <div class="col">
  <input readonly onkeyup="this.value = this.value.toUpperCase()" value="<?php echo $data['id_pasien']  ?>" type="text" required id="id_pasien" class="effect-5"  placeholder=" " list="data-nama" name="id_pasien" autocomplete="off"/>
                            <label for="effect5">ID Pasien</label>
  </div>
  <div class="col">
  
  </div>

</div>  
  
                        <div class="masukan">
                            <input onkeyup="this.value = this.value.toUpperCase()" value="<?php echo $data['nama'];?>" readonly type="text" required id="nama" class="effect-5"  placeholder=" " list="data-nama" name="nama"  autocomplete="off"/>
                            <label for="effect5">Nama</label>
                            <datalist id="data-nama">
                          </div>
                          
                          <div class="masukan">
                            <input onkeyup="this.value = this.value.toUpperCase()" value="<?php echo $data['alamat'];?>" readonly type="text" id="alamat" class="effect-5" placeholder=" " name="alamat" autocomplete="off" />
                            <label for="effect5">Alamat</label>
                          </div>
                          <div class="masukan">
                            <input type="text" id="usia" class="effect-5" value="<?php echo $data['usia'];?>" readonly placeholder=" " name="usia"  autocomplete="off"/>
                            <label for="effect5">Usia</label>
                          </div>
                          <div class="masukan">
                            <input type="text" required id="nohp" class="effect-5" value="<?php echo $data['nohp'];?>" readonly placeholder=" " name="nohp" autocomplete="off" />
                            <label for="effect5">NO Telp</label>
                          </div>
                          
                          
    
    
    
   
                          
                          
                          
                          

                   
                </div>
        </div>
        
   
<div>
  <table class="table table-borderless" >
    <thead>
    
    </thead>
    
    <tbody>
      <tr >
        <td width="20%" style="vertical-align: middle;">Frame</td>
        <td><input type="text" value="<?php echo $data['kode_f'];?>" readonly id="" name="kode_f" readonly></td>
        <td><input type="text" value="<?php echo $data['merk_f'];?>" readonly id="merk_frame" name="merk_f" readonly></td>
        <td><input type="text" value="<?php echo $data['warna_f'];?>" readonly id="warna_frame" name="warna_f" readonly></td>
        <td><input type="text" value="<?php echo $data['detil_f'];?>" readonly id="jenis_frame" name="detil_f" readonly></td>
        <td><input type="text" value="<?php echo $data['harga_f'];?>" readonly id="harga_frame" name="harga_f" readonly></td>
      </tr>
      <tr>
        <td width="20%" style="vertical-align: middle;">Lensa OD</td>
        <td><input type="text" value="<?php echo $data['kode_lr'];?>" readonly id="" name="kode_lensaod" readonly></td>
        <td><input type="text" value="<?php echo $data['merk_lr'];?>" readonly id="merk_lensaod1" name="merk_lr" readonly></td>
        <td colspan="2"><input type="text" value="<?php echo $data['jenis_lr'];?>" readonly id="produk_lensaod" name="jenis_lr" readonly></td>
        
        <td><input type="text" id="harga_lensaod1" value="<?php echo $data['harga_lr'];?>" readonly name="harga_lr"  readonly></td>
      </tr>
      <tr>
        <td width="20%" style="vertical-align: middle;">Lensa OS</td>
        <td><input type="text" value="<?php echo $data['kode_ll'];?>" readonly id="" name="kode_lensaos" readonly></td>
        <td><input type="text" id="merk_lensaos1" value="<?php echo $data['merk_ll'];?>" readonly name="merk_ll" readonly></td>
        <td colspan="2"><input type="text" id="produk_lensaos" value="<?php echo $data['jenis_ll'];?>" readonly name="jenis_ll" readonly></td>
        
        <td><input type="text" id="harga_lensaos1" value="<?php echo $data['harga_ll'];?>" readonly name="harga_ll"  readonly></td>
        
      </tr>
      <tr>
        <td colspan="5" style="vertical-align: middle;" align="right">Jumlah Harga</td>
        <td><input type="text" name="jumlah_harga" id="total" value="<?php echo $data['jumlah_harga'];?>" readonly></td>
      </tr>
      <tr>
        <td colspan="5" style="vertical-align: middle;"  align="right">Diskon</td>
        <td><input class="form-control" name="diskon" value="<?php echo $data['diskon'];?>" readonly type="text" id="diskon" autocomplete="off" onkeyup="harga()"></td>
      </tr>
      <tr>
        <td colspan="5" style="vertical-align: middle;"  align="right">Total</td>
        <td><input class="form-control" name="total" value="<?php echo $data['total'];?>" readonly type="text" id="total_harga" autocomplete="off" onkeyup="harga()"></td>
      </tr>
     
      <tr>
        <td colspan="5" style="vertical-align: middle;" align="right">Metode Pembayaran</td>
        <td >  <input class="form-control" name="mp" value="<?php echo $data['mp'];?>" readonly type="text" id="total_harga" autocomplete="off" onkeyup="harga()">
            </td>

      
    </tbody>
   
  </table>
  <div id="nokartu"  <?php echo $tc?>>
                  <div class="row-dalam masukan" >
                    <div class="col" style="margin: auto; text-align: center;">
                    </div>
                   
                    <div class="col" style="margin: auto; text-align: right;">
                        No Kartu
                    </div>
                    <div class="col">
                        <input type="text" value="<?php echo $data['nokartu']  ?>" readonly  class="effect-5" autocomplete="off" placeholder=" " name="nokartu"  onchange="uang()"/>
                        
                    </div>
                  </div>
                  </div>
                  
                  <div id="trace"  <?php echo $tc?>>
                  <div class="row-dalam masukan" >
                    <div class="col" style="margin: auto; text-align: center;">
                    </div>
                   
                    <div class="col" style="margin: auto; text-align: right;">
                        Trace
                    </div>
                    <div class="col">
                        <input type="text" value="<?php echo $data['trace']  ?>" readonly class="effect-5" autocomplete="off" placeholder=" " name="trace"  onchange="uang()"/>
                        
                    </div>
                  </div>
                  </div>
                  <div class="row-dalam masukan" >
                    <div class="col" style="margin: auto; text-align: center;">
                    </div>
                   
                    <div class="col" style="margin: auto; text-align: right;">
                        Catatan
                    </div>
                    <div class="col">
                        <input type="text"  class="effect-5" autocomplete="off" placeholder=" " name="catatan"  onchange="uang()"/>
                        
                    </div>
                  </div>
  
                  
                  
                  
                    
                  


</div>




                  
                  

                  

                  <div class="row-dalam masukan">
                    <div class="col" style="margin: auto; text-align: center;">
                    </div>
                    <div class="col">
                    </div>
                    <div class="col"> 
                    </div>
                    <div class="col" style="margin: auto; text-align: center;">
                    <input type="submit" class="btn btn-danger " value="Garansi"  />
                    
                    </div>
                    
                  </div>
                  
                  

            </div>
        </div>
        
</form>
<div >
 



                          
    </main>
    <script>
     function showDiv(select){
   if(select.value=="DEBIT"){
    document.getElementById('nokartu').style.display = "block";
    document.getElementById('trace').style.display = "block";
   } else{
    document.getElementById('nokartu').style.display = "none";
    document.getElementById('trace').style.display = "none";
   }
   if(select.value=="KREDIT"){
    document.getElementById('nokartu').style.display = "block";
    document.getElementById('trace').style.display = "block";
   } else{
    document.getElementById('nokartu').style.display = "none";
    document.getElementById('trace').style.display = "none";
   }
    if(select.value=="TUNAI"){
    document.getElementById('nokartu').style.display = "none";
    document.getElementById('trace').style.display = "none";
   } else{
    document.getElementById('nokartu').style.display = "block";
    document.getElementById('trace').style.display = "block";
   }
} 
    </script>
    <script>
     $(document).ready(function(){
    load_data();
    function load_data(nama){
      $.ajax({
        url:"../proses/namalensa.php",
        method:"POST",
        data: {
          search: nama
        },
        success:function(data){
          $('#lensaod').html(data);
        }
      });
    }
   
  });
  </script>
  <script>
     $(document).ready(function(){
    load_data();
    function load_data(nama){
      $.ajax({
        url:"../proses/namalensa.php",
        method:"POST",
        data: {
          search: nama
        },
        success:function(data){
          $('#lensaos').html(data);
        }
      });
    }
   
  });
  </script>
  <script>
     $(document).ready(function(){
    load_data();
    function load_data(nama){
      $.ajax({
        url:"../proses/namaframe.php",
        method:"POST",
        data: {
          search: nama
        },
        success:function(data){
          $('#frame').html(data);
        }
      });
    }
   
  });
  </script>
  <script>
    
    $('#frame').change(function(){
      var id = $("#frame").val();
      document.getElementById('id_frame').value = id;
      $('#merkf').prop('readonly', true);
      $('#warnaf').prop('readonly', true);
      $('#jenisf').prop('readonly', true);
      $('#hargaf').prop('readonly', true);
      
      
				var id = $("#frame").val();
 
				$.ajax({
					url: '../proses/frame.php',
					type: 'POST',
					dataType: 'json',
					data: {
						'id': id
					},
					success: function (data) {
						$("#merkf").val(data['merk']);
            $("#kodef").val(data['kode']);
						$("#warnaf").val(data['produk']);
            $("#jenisf").val(data['detil'] );
            $("#hargaf").val(data['harga'] );
           
 
          }
          });
      
    });
    
    
  </script>
  <script>
    $('#diskon').keyup(function(){
      var diskon = $("#diskon").val();
      var total = $("#total_harga").val();
      var uang = $("#total").val();
      var uangangka =parseInt(uang.replace(/,.*|[^0-9]/g, ''), 10);
      var disk = parseInt(diskon) * uangangka;
      var proses1 =disk / 100;
      var asli = uangangka - proses1;
      var titik = ".";
            var nilai = new String(asli); 
            var pecah = []; 
                while(nilai.length > 3) 
                { 
                    var asd = nilai.substr(nilai.length-3); 
                    pecah.unshift(asd); 
                    nilai = nilai.substr(0, nilai.length-3); 
                } 

                if(nilai.length > 0) { pecah.unshift(nilai); } 
                nilai = pecah.join(titik);
     
      if (!isNaN(disk)) { document.getElementById('total_harga').value = nilai;}
      
    })
  </script>
  <script>
    $('#total_harga').keyup(function(){
      var total_harga = $("#total_harga").val();
      var total =parseInt(total_harga.replace(/,.*|[^0-9]/g, ''), 10);
      var uang = $("#total").val();
      var uangangka =parseInt(uang.replace(/,.*|[^0-9]/g, ''), 10);
      var proses1 = uangangka - parseInt(total) ;
      var proses2 = proses1 / uangangka;
      var proses3 = proses2 * 100;
      if (!isNaN(proses2)) {document.getElementById('diskon').value = Math.ceil(proses3);}

    })
  </script>
  <script>
    $('#uang_muka').keyup(function(){
      var uang_muka = $("#uang_muka").val();
      var uang =parseInt(uang_muka.replace(/,.*|[^0-9]/g, ''), 10);
      var total_harga = $("#total_harga").val();
      var total =parseInt(total_harga.replace(/,.*|[^0-9]/g, ''), 10);
      var sisa = total - uang ;
      var titik = ".";
            var nilai = new String(sisa); 
            var pecah = []; 
                while(nilai.length > 3) 
                { 
                    var asd = nilai.substr(nilai.length-3); 
                    pecah.unshift(asd); 
                    nilai = nilai.substr(0, nilai.length-3); 
                } 

                if(nilai.length > 0) { pecah.unshift(nilai); } 
                nilai = pecah.join(titik);
      if (!isNaN(sisa)) { document.getElementById('sisa').value = nilai;}


    })
  </script>
  <script >
   $('#jumlah').click(function(){
      var frame = $("#harga_frame").val();
      if(frame == ""){
        hf = 0;
      }
      else{
        hf = parseInt(frame.replace(/,.*|[^0-9]/g, ''), 10);
      }
      var lensaod = $("#harga_lensaod").val();
      if(lensaod == ""){
        hlod =0;
      }else{
        hlod = parseInt(lensaod.replace(/,.*|[^0-9]/g, ''), 10);
      }
      var lensaos = $("#harga_lensaos").val();
      if(lensaos==""){
        hlos=0;
      }else{
        hlos= parseInt(lensaos.replace(/,.*|[^0-9]/g, ''), 10);
      }
      var jumlah = hf + hlod + hlos;
      var titik = ".";
            var nilai = new String(jumlah); 
            var pecah = []; 
                while(nilai.length > 3) 
                { 
                    var asd = nilai.substr(nilai.length-3); 
                    pecah.unshift(asd); 
                    nilai = nilai.substr(0, nilai.length-3); 
                } 

                if(nilai.length > 0) { pecah.unshift(nilai); } 
                nilai = pecah.join(titik);
      document.getElementById('total').value = nilai;
    })
  </script>
  <script>
     $('#tambahframe').click(function(){
      var merk = $("#merkf").val();
      var warna = $("#warnaf").val();
      var jenis = $("#jenisf").val();
      var harga = $("#hargaf").val();
      
      if(harga==""){
        nilai = 0;
      }else{
        var titik = ".";
            var nilai = new String(harga); 
            var pecah = []; 
                while(nilai.length > 3) 
                { 
                    var asd = nilai.substr(nilai.length-3); 
                    pecah.unshift(asd); 
                    nilai = nilai.substr(0, nilai.length-3); 
                } 

                if(nilai.length > 0) { pecah.unshift(nilai); } 
                nilai = pecah.join(titik);
      }
      
      
      document.getElementById('merk_frame').value = merk;
      document.getElementById('jenis_frame').value = jenis;
      document.getElementById('warna_frame').value = warna;
      document.getElementById('harga_frame').value = nilai;
     })
    
  </script>
  <script>
     $('#tambahlensaod').click(function(){
      var merk = $("#merk_lensaod").val();
    
      var jenis = $("#jenis_lensaod").val();
      var harga = $("#harga_lensaod").val();
      var titik = ".";
            var nilai = new String(harga); 
            var pecah = []; 
                while(nilai.length > 3) 
                { 
                    var asd = nilai.substr(nilai.length-3); 
                    pecah.unshift(asd); 
                    nilai = nilai.substr(0, nilai.length-3); 
                } 

                if(nilai.length > 0) { pecah.unshift(nilai); } 
                nilai = pecah.join(titik);
      
      document.getElementById('merk_lensaod1').value = merk;
      document.getElementById('produk_lensaod').value = jenis;
     
      document.getElementById('harga_lensaod1').value = nilai;
     })
  </script>
  <script>
     $('#tambahlensaos').click(function(){
      var merk = $("#merk_lensaos").val();
    
      var jenis = $("#jenis_lensaos").val();
      var harga = $("#harga_lensaos").val();
      var titik = ".";
            var nilai = new String(harga); 
            var pecah = []; 
                while(nilai.length > 3) 
                { 
                    var asd = nilai.substr(nilai.length-3); 
                    pecah.unshift(asd); 
                    nilai = nilai.substr(0, nilai.length-3); 
                } 

                if(nilai.length > 0) { pecah.unshift(nilai); } 
                nilai = pecah.join(titik);
      
      document.getElementById('merk_lensaos1').value = merk;
      document.getElementById('produk_lensaos').value = jenis;
     
      document.getElementById('harga_lensaos1').value = nilai;
     })
  </script>
  <script>
    
    $('#lensaod').change(function(){
      var id = $("#lensaod").val();
      document.getElementById('id_lensaod').value = id;
      
      
				var id = $("#lensaod").val();
 
				$.ajax({
					url: '../proses/lensa.php',
					type: 'POST',
					dataType: 'json',
					data: {
						'id': id
					},
					success: function (data) {
						$("#merk_lensaod").val(data['merk']);
						$("#jenis_lensaod").val(data['jenis']);
            $("#harga_lensaod").val(data['harga'] );
           
 
          }
          });
      
    });
    
  </script>
  <script>
    
    $('#lensaos').change(function(){
      var id = $("#lensaos").val();
      document.getElementById('id_lensaos').value = id;
      
      
				var id = $("#lensaos").val();
 
				$.ajax({
					url: '../proses/lensa.php',
					type: 'POST',
					dataType: 'json',
					data: {
						'id': id
					},
					success: function (data) {
						$("#merk_lensaos").val(data['merk']);
						$("#jenis_lensaos").val(data['jenis']);
            $("#harga_lensaos").val(data['harga'] );
           
 
          }
          });
      
    });
    
  </script>
    
    <script>
     $(document).ready(function(){
    load_data();
    function load_data(search){
      $.ajax({
        url:"../proses/merk.php",
        method:"POST",
        data: {
          search: search
        },
        success:function(data){
          $('#merk_l').html(data);
        }
      });
    }
    $('#merk_l').keyup(function(){
      var search = $("#merk_l").val();
     
      load_data(search);
    });
  });
  </script>
   

<script>
 
  $('#merk_l').change(function(){
      var search = $("#merk_l").val();
      $.ajax({
        url:"../proses/jenis.php",
        method:"POST",
        data: {
          merk: search
        },
        success:function(data){
          $('#jenis_l').html(data);
        }
      });
    });
  

 
</script>
<script>
 
  $('#jenis_l').change(function(){
      var search = $("#jenis_l").val();
      $.ajax({
        url:"../proses/harga.php",
        method:"POST",
        data: {
          jenis: search
        },
        success:function(data){
          $('#harga_lr').html(data);
        }
      });
    });
  

 
</script>
<script>
     $(document).ready(function(){
    load_data();
    function load_data(search){
      $.ajax({
        url:"../proses/merk.php",
        method:"POST",
        data: {
          search: search
        },
        success:function(data){
          $('#merk_ll').html(data);
        }
      });
    }
    $('#merk_ll').keyup(function(){
      var search = $("#merk_ll").val();
      load_data(search);
    });
  });
  </script>
   

<script>
 
  $('#merk_ll').change(function(){
      var search = $("#merk_ll").val();
      $.ajax({
        url:"../proses/jenis.php",
        method:"POST",
        data: {
          merk: search
        },
        success:function(data){
          $('#jenis_ll').html(data);
        }
      });
    });
  

 
</script>
<script>
 
  $('#jenis_ll').change(function(){
      var search = $("#jenis_ll").val();
      $.ajax({
        url:"../proses/harga.php",
        method:"POST",
        data: {
          jenis: search
        },
        success:function(data){
          $('#harga_ll').html(data);
        }
      });
    });
  

 
</script>


    <script>
    
    $('#namamasuk').change(function(){
      var namamasuk = $("#namamasuk").val();
      document.getElementById('nama').value = namamasuk;
      $('#nama').prop('readonly', true);
      $('#alamat').prop('readonly', true);
      $('#usia').prop('readonly', true);
      $('#nohp').prop('readonly', true);
      
     
      
				var nama = $("#namamasuk").val();
 
				$.ajax({
					url: '../proses/pelanggan.php',
					type: 'POST',
					dataType: 'json',
					data: {
						'nama': nama
					},
					success: function (data) {
						$("#alamat").val(data['alamat']);
						$("#usia").val(data['usia']);
            $("#nohp").val(data['nohp']);
            $("#nohpmasuk").val(data['nohp']);
            $("#id_pasien").val(data['id_pasien']);
            $("#rekam").val(data['norekam']);
 
          }
          });
      
    });
    
  </script>
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

      <!-- <script>
        function harga()
        {
            var frame = document.getElementById('hargaf').value;
            var lensa = document.getElementById('harga_lr').value;
            var lensa2 = document.getElementById('harga_ll').value;
            
            var diskon = document.getElementById('diskon').value;
            var total = document.getElementById('total').value;
            var muka = document.getElementById('uang_muka').value;
            if(frame == ""){
                frame = 0;
            }else{
                frame = parseInt(frame.replace(/,.*|[^0-9]/g, ''), 10);
            }if(lensa == ""){
                lensa = 0;
            }else{
                lensa = parseInt(lensa.replace(/,.*|[^0-9]/g, ''), 10);
            }if(lensa2 == ""){
                lensa2 = 0;
            }else{
                lensa2 = parseInt(lensa2.replace(/,.*|[^0-9]/g, ''), 10);
            }
            var jumlah = parseInt(frame) + parseInt(lensa) + parseInt(lensa2)  ;
            var titik = ".";
            var nilai = new String(jumlah); 
            var pecah = []; 
                while(nilai.length > 3) 
                { 
                    var asd = nilai.substr(nilai.length-3); 
                    pecah.unshift(asd); 
                    nilai = nilai.substr(0, nilai.length-3); 
                } 

                if(nilai.length > 0) { pecah.unshift(nilai); } 
                nilai = pecah.join(titik);
                if (!isNaN(jumlah)) {document.getElementById('jumlah_harga').value = nilai;}
            

            if(diskon == ""){
                total = parseInt(total.replace(/,.*|[^0-9]/g, ''), 10);
            var jumlah = parseInt(frame) + parseInt(lensa) + parseInt(lensa2)  ;
            var awal = jumlah;
            var persen =  parseInt(awal) - parseInt(total) ;
            var proses1 = persen / parseInt(awal)  ;
            var proses2 = proses1 * 100;
            var akhir = proses2 ;
            if (!isNaN(proses2)) {document.getElementById('diskon').value = akhir;}
            
           }if(total==""){
            var jumlah = parseInt(frame) + parseInt(lensa) + parseInt(lensa2)  ;
            var awal = jumlah;
            var dis =  parseInt(diskon) * parseInt(awal);
            var asli = dis /100 ;
            var persen =  parseInt(awal) - asli ;
            var titik = ".";
            var nilai = new String(persen); 
            var pecah = []; 
                while(nilai.length > 3) 
                { 
                    var asd = nilai.substr(nilai.length-3); 
                    pecah.unshift(asd); 
                    nilai = nilai.substr(0, nilai.length-3); 
                } 

                if(nilai.length > 0) { pecah.unshift(nilai); } 
                nilai = pecah.join(titik);
                if (!isNaN(persen)) {document.getElementById('total').value = nilai;}

           }
          
            var harga = document.getElementById('total').value  ;
            var harga1 = parseInt(harga.replace(/,.*|[^0-9]/g, ''),10);
            var dp = parseInt(muka.replace(/,.*|[^0-9]/g, ''),10);
            var sisa = harga1 - parseInt(dp);
            var titik = ".";
            var nilai = new String(sisa); 
            var pecah = []; 
                while(nilai.length > 3) 
                { 
                    var asd = nilai.substr(nilai.length-3); 
                    pecah.unshift(asd); 
                    nilai = nilai.substr(0, nilai.length-3); 
                } 

                if(nilai.length > 0) { pecah.unshift(nilai); } 
                nilai = pecah.join(titik);
            if (!isNaN(sisa)) {
                    document.getElementById('sisa').value = nilai;
                    
                }
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
         -->
        





       <script>
var sisa = document.getElementById('sisa');
    sisa.addEventListener('keyup', function(e)
    {
      
        sisa.value = formatRupiah(this.value);
    });
    var hargasemua = document.getElementById('total_harga');
    hargasemua.addEventListener('keyup', function(e)
    {
      
        hargasemua.value = formatRupiah(this.value);
    });
    var total = document.getElementById('total');
    total.addEventListener('keyup', function(e)
    {
        total.value = formatRupiah(this.value);
    });

    var uang_muka = document.getElementById('uang_muka');
    uang_muka.addEventListener('keyup', function(e)
    {
        uang_muka.value = formatRupiah(this.value);
    });


    
    
    var harga_lr = document.getElementById('harga_lr');
    harga_lr.addEventListener('keyup', function(e)
    {
        harga_lr.value = formatRupiah(this.value);
    });
    var harga_ll = document.getElementById('harga_ll');
    harga_ll.addEventListener('keyup', function(e)
    {
        harga_ll.value = formatRupiah(this.value);
    });
    var harga_a = document.getElementById('harga_a');
    harga_a.addEventListener('keyup', function(e)
    {
        harga_a.value = formatRupiah(this.value);
    });
    var jumlah_harga = document.getElementById('jumlah_harga');
    jumlah_harga.addEventListener('keyup', function(e)
    {
        jumlah_harga.value = formatRupiah(this.value);
    });
    
    
    
    

          
    
    /* Fungsi */
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


  <script>
     $(document).ready(function(){
    load_data();
    function load_data(search){
      $.ajax({
        url:"../proses/merk.php",
        method:"POST",
        data: {
          search: search
        },
        success:function(data){
          $('#data-merk').html(data);
        }
      });
    }
    $('#merk').keyup(function(){
      var search = $("#merk").val();
      load_data(search);
    });
  });
  </script>
  <script>
     $(document).ready(function(){
    load_data();
    function load_data(nama){
      $.ajax({
        url:"../proses/merk.php",
        method:"POST",
        data: {
          search: nama
        },
        success:function(data){
          $('#data-merk').html(data);
        }
      });
    }
   
  });
  </script>
   
  <script>
    $(function() {
			$("#data-merk").change(function(){
				var merk= $("#data-merk").val();
 
				$.ajax({
					url: '../proses/jenis.php',
					type: 'POST',
					
					data: {
						'merk': merk
					},
                    success:function(data){
          $('#data-jenis').html(data);
        }
      });
			});
 
			
		});
	</script>
    <script>
    $(function() {
			$("#jenis").change(function(){
				var jenis = $("#jenis").val();
 
				$.ajax({
					url: '../proses/harga.php',
					type: 'POST',
					
					data: {
						'jenis': jenis
					},
                    success:function(data){
                        $("#data-harga").html(data);
        }
      });
			});
 
			
		});
	</script>
    
  <script>
     $(document).ready(function(){
    load_data();
    function load_data(nama){
      $.ajax({
        url:"../proses/nama_pelanggan.php",
        method:"POST",
        data: {
          search: nama
        },
        success:function(data){
          $('#namamasuk').html(data);
        }
      });
    }
   
  });
  </script>
  <script>
     $(document).ready(function(){
    load_data();
    function load_data(nama){
      $.ajax({
        url:"../proses/jenis.php",
        method:"POST",
        data: {
          search: jenis
        },
        success:function(data){
          $('#data-jenis').html(data);
        }
      });
    }
   
  });
  </script>
    
  <script>
     $(document).ready(function(){
    load_data();
    function load_data(nama){
      $.ajax({
        url:"../proses/nama.php",
        method:"POST",
        data: {
          search: nama
        },
        success:function(data){
          $('#data-nama').html(data);
        }
      });
    }
    $('#nama').change(function(){
      var nama = $("#nama").val();
      load_data(nama);
    });
  });
  </script>
  <script>
		$(function() {
			$("#nama").change(function(){
				var nama = $("#nama").val();
 
				$.ajax({
					url: '../proses/pelanggan.php',
					type: 'POST',
					dataType: 'json',
					data: {
						'nama': nama
					},
					success: function (data) {
						$("#alamat").val(data['alamat']);
						$("#usia").val(data['usia']);
                        $("#nohp").val(data['nohp']);
 
						
					}
				});
			});
 
			
		});
	</script>
    <script>
     $(document).ready(function(){
    load_data();
    function load_data(merkf){
      $.ajax({
        url:"../proses/merkf.php",
        method:"POST",
        data: {
          search: merkf
        },
        success:function(data){
          $('#data-merkf').html(data);
        }
      });
    }
    $('#merkf').keyup(function(){
      var merkf = $("#merkf").val();
      load_data(merkf);
    });
  });
  </script>

  <script>
    $(function() {
			$("#merkf").change(function(){
				var merkf = $("#merkf").val();
 
				$.ajax({
					url: '../proses/warnaf.php',
					type: 'POST',
					
					data: {
						'merkf': merkf
					},
                    success:function(data){
          $('#data-warnaf').html(data);
        }
      });
			});
 
			
		});
	</script>

    <script>
    $(function() {
			$("#jenisf").change(function(){
				var merkf = $("#merkf").val();
                var jenisf = $("#jenisf").val();
                var warnaf = $("#warnaf").val();
 
				$.ajax({
					url: '../proses/hargaf.php',
					type: 'POST',
					
					data: {
						'merkf': merkf,
                        'jenisf': jenisf,
                        'warnaf' : warnaf
					},
                    success:function(data){
          $('#data-hargaf').html(data);
        }
      });
			});
 
			
		});
	</script>
  <script>
    function submitForm(form){
      swal({
        title : "Apakah Anda Yakin?",
        text : "Pastikan Data Sudah Benar!",
        icon : "warning",
        buttons : true,
        dangerMode : true,

      })
      .then((isOkay)=> {
        if(isOkay){
          form.submit();
        }
      });
      return false;
    }
  </script>
  

        
      
    
    
</body>
</html>