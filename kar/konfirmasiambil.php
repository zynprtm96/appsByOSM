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
 
        $id=$_GET['id'];
        $query = mysqli_query($konek, "SELECT * FROM nota_pesan where id='$id'");
        $data = mysqli_fetch_array($query);
        

        ?>
       
        <div class="container" >
        <h5 style="text-align: center;">KONFIRMASI PENGAMBILAN NOTA PESAN</h5>
        <form method="POST" action="../proses/konfirmasiambil.php?id=<?php echo $data['id']?>" onsubmit="return submitForm(this);">
            <div class="pinggir">
                <div class="main">

                            <div class="row-dalam masukan">
                                
                                <div class="col">
                                    <input type="text" id="effect5" class="effect-5" readonly value="<?php echo $data['nonota'] ?>" placeholder=" " name="nonota" />
                                    <label for="effect5">No Nota</label>
                                </div>
                               
                                <div class="col">
                                    <input type="text" id="effect5" class="effect-5" readonly value="<?php echo $data['tanggal_pesan'] ?>" placeholder=" "  />
                                    <label for="effect5">Tanggal Pemesanan</label>
                                </div>
                            </div>       
                   
                            
  
                    
                        <div class="masukan">
                            <input value="<?php echo $data['nama']?>" readonly onkeyup="this.value = this.value.toUpperCase()" type="text" required id="nama" class="effect-5"  placeholder=" " list="data-nama" name="nama" autocomplete="off"/>
                            <label for="effect5">Nama</label>
                            <datalist id="data-nama">
                          </div>
                          <div class="masukan">
                            <input value="<?php echo $data['alamat']?>" readonly onkeyup="this.value = this.value.toUpperCase()" type="text" id="alamat" class="effect-5" placeholder=" " name="alamat" autocomplete="off" />
                            <label for="effect5">Alamat</label>
                          </div>
                          <div class="masukan">
                            <input value="<?php echo $data['usia']?>" readonly type="number" id="usia" class="effect-5" placeholder=" " name="usia"  autocomplete="off"/>
                            <label for="effect5">Usia</label>
                          </div>
                          <div class="masukan">
                            <input value="<?php echo $data['nohp']?>" readonly type="number" required id="nohp" class="effect-5" placeholder=" " name="nohp" autocomplete="off" />
                            <label for="effect5">NO Telp</label>
                          </div>
                          
                          
    
    
    
   
                          
                          
                          
                          

                   
                </div>
        </div>
        <div class="pinggir">
            <div class="main">
                  <div class="row-dalam masukan">
                    <div class="col" style="margin: auto; text-align: center;">
                        Frame
                    </div>
                    <div class="col">
                        <input value="<?php echo $data['merk_f']?>" readonly onkeyup="this.value = this.value.toUpperCase()" type="text" id="merkf" class="effect-5" placeholder=" " list="data-merkf" name="merk_f" autocomplete="off"/>
                        <label for="effect5">Merk</label>
                        
                        

                    </div>
                  
                    <div class="col">
                        <input value="<?php echo $data['warna_f']?>" readonly onkeyup="this.value = this.value.toUpperCase()" type="text" id="jenisf" class="effect-5" placeholder=" " list="data-warnaf"  name="warna_f" autocomplete="off"/>
                        <label for="effect5">Warna</label>
                       
                         
                            
                    </div>
                    <div class="col" >
                    <input value="<?php echo $data['detil_f']?>" readonly onkeyup="this.value = this.value.toUpperCase()" type="text" id="jenisf" class="effect-5" placeholder=" " list="data-warnaf"  name="warna_f" autocomplete="off"/>
                        <label for="effect5">Jenis Frame</label>
                       
                         
                        
                        

                            
                    </div>
                    <div class="col">
                        <input value="<?php echo $data['harga_f']?>" readonly  type="text" id="hargaf" class="effect-5" placeholder=" " list="data-hargaf" name="harga_f" onkeyup="harga()" autocomplete="off"/>
                        <label for="harga_f">Harga</label>
                        <datalist id="data-hargaf">
                    </div>
                  </div><br>

                  <div class="row-dalam masukan">
                    <div class="col" style="margin: auto; text-align: center;">
                        Lensa OD
                    </div>
                    <div class="col">
                    <input value="<?php echo $data['merk_lr']?>" readonly  type="text" id="hargaf" class="effect-5" placeholder=" " list="data-hargaf" name="harga_f" onkeyup="harga()" autocomplete="off"/>
                        <label for="harga_f">MERK</label>
                             
                    </div>
                    <div class="col-5">
                    <input value="<?php echo $data['jenis_lr']?>" readonly  type="text" id="hargaf" class="effect-5" placeholder=" " list="data-hargaf" name="harga_f" onkeyup="harga()" autocomplete="off"/>
                        <label for="harga_f">JENIS</label>
                           
                    </div>
                    
                    <div class="col">
                    <input value="<?php echo $data['harga_lr']?>" readonly  type="text" id="hargaf" class="effect-5" placeholder=" " list="data-hargaf" name="harga_f" onkeyup="harga()" autocomplete="off"/>
                        <label for="harga_f">HARGA</label>
                           
                        
                    </div>
                  </div>

                  <div class="row-dalam masukan">
                    <div class="col" style="margin: auto; text-align: center;">
                        Lensa OS
                    </div>
                    <div class="col">
                    <input value="<?php echo $data['merk_ll']?>" readonly  type="text" id="hargaf" class="effect-5" placeholder=" " list="data-hargaf" name="harga_f" onkeyup="harga()" autocomplete="off"/>
                        <label for="harga_f">MERK</label>
                           
                        
                             
                    </div>
                    <div class="col-5">
                    <input value="<?php echo $data['jenis_ll']?>" readonly  type="text" id="hargaf" class="effect-5" placeholder=" " list="data-hargaf" name="harga_f" onkeyup="harga()" autocomplete="off"/>
                        <label for="harga_f">JENIS</label>
                           
                       
                    </div>
                    
                    <div class="col">
                    <input value="<?php echo $data['harga_ll']?>" readonly  type="text" id="hargaf" class="effect-5" placeholder=" " list="data-hargaf" name="harga_f" onkeyup="harga()" autocomplete="off"/>
                        <label for="harga_f">HARGA</label>
                           
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
                        Jumlah Harga
                    </div>
                    <div class="col">
                        <input type="text" value="<?php echo $data['jumlah_harga']?>" readonly id="jumlah_harga" class="effect-5" placeholder=" " name="jumlah_harga" onkeyup="harga()"  autocomplete="off"/>
                      
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
                        Diskon
                    </div>
                    <div class="col">
                        <input value="<?php echo $data['diskon']?>" readonly type="text" id="diskon" class="effect-5" autocomplete="off" placeholder=" " name="diskon" onkeyup="harga()" onchange="harga()" />
                        
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
                        Total
                    </div>
                    <div class="col">
                        <input value="<?php echo $data['total']?>" readonly type="text" id="total" class="effect-5" autocomplete="off" placeholder=" " name="total" onkeyup="harga()" onchange="harga()"/>
                        
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
                        Uang Muka
                    </div>
                    <div class="col">
                        <input value="<?php echo $data['uang_muka']?>" readonly type="text" id="uang_muka" class="effect-5" autocomplete="off" placeholder=" "  name="uang_muka" onkeyup="harga()" />
                        
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
                        Sisa
                    </div>
                    <div class="col">
                        <input value="<?php echo $data['sisa']?>" readonly type="text" id="sisa" class="effect-5" autocomplete="off" placeholder=" " name="sisa" />
                        
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
                        Pembayaran
                    </div>
                    <div class="col">
                        <input type="text" id="bayar" onkeyup="harga()" class="effect-5" autocomplete="off" placeholder=" " name="bayar" />
                        
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
                        Kembalian
                    </div>
                    <div class="col">
                        <input type="text" id="kembalian" class="effect-5" autocomplete="off" placeholder=" " name="kembalian" />
                        
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
                    <input type="submit" class="btn btn-danger " value="Bayar"  />
                    
                    </div>
                    
                  </div>
                  
                  

            </div>
        </div>
        <br><Br><br>
</form>


    </main>
    
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

      <script>
        function harga()
        {
            var bayar = document.getElementById('bayar').value;
            var sisa = document.getElementById('sisa').value;
            bayar = parseInt(bayar.replace(/,.*|[^0-9]/g, ''), 10);
            sisa = parseInt(sisa);
            var hua = sisa - bayar;
            var titik = ".";
            var nilai = new String(hua); 
            var pecah = []; 
                while(nilai.length > 3) 
                { 
                    var asd = nilai.substr(nilai.length-3); 
                    pecah.unshift(asd); 
                    nilai = nilai.substr(0, nilai.length-3); 
                } 

                if(nilai.length > 0) { pecah.unshift(nilai); } 
                nilai = pecah.join(titik);
                if (!isNaN(hua)) {document.getElementById('kembalian').value = nilai;}
            

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
        
        





       <script>
        
var bayar = document.getElementById('bayar');
    bayar.addEventListener('keyup', function(e)
    {
        bayar.value = formatRupiah(this.value);
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
        text : "Pastikan Anda Telah Menerima Uang Dan Menghitungnya!",
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