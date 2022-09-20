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
        <?php
        include '../config/koneksi.php';
 
      
        $query = mysqli_query($konek, "SELECT max(nonota) as nonota FROM nota_kontan");
        $data = mysqli_fetch_array($query);
        $nota = $data['nonota'];
        $urutan = (int) substr($nota, 5, 5);
 

        $urutan++;
        $huruf = "NK-";
	    $nota = $huruf . sprintf("%05s", $urutan); 

        

        $hresep = "RSP-";
        $resep = $hresep . sprintf("%05s", $urutan);

        $tanggal=date('d-m-Y');

        $pelanggan =  mysqli_query($konek, "SELECT max(id_pasien) as id FROM master_pelanggan");
        $datap = mysqli_fetch_array($pelanggan);
        $id = $datap['id'];
        $tambah = (int) substr($id, 5, 5);
        $tambah++;
        $teks = "PS-";
        $id_pasien = $teks . sprintf("%05s", $tambah); 

        $pelanggan1 =  mysqli_query($konek, "SELECT max(norekam) as rekam FROM master_pelanggan");
        $datar = mysqli_fetch_array($pelanggan1);
        $rekam = $datar['rekam'];
        $tambah1 = (int) substr($rekam, 5, 5);
        $tambah1++;
        $teks1 = "EMRO-";
        $rekam = $teks1 . sprintf("%05s", $tambah1); 

        ?>
             
        <div class="container">
        <h5 style="text-align: center;">TRANSAKSI NOTA KONTAN</h5>
        <a href="../kar/fnkontan.php" style="margin-left: 20px;" type="button" class="btn btn-danger">Kembali</a>
        <form method="POST" action="../proses/prosesnotakontan.php" onsubmit="return submitForm(this);">
            <div class="pinggir">
                <div class="main">
                   
                        
                            <div class="row-dalam masukan">
                                
                                <div class="col">
                                    <input type="text" id="nonota" class="effect-5" readonly value="<?php echo $nota ?>" placeholder=" " name="nonota" />
                                    <label for="effect5">No Nota</label>
                                </div>
                               
                                <div class="col">
                                    <input type="text" id="effect5" class="effect-5" readonly value="<?php echo $tanggal ?>" placeholder=" "  />
                                    <label for="effect5">Tanggal Transaksi</label>
                                </div>
                            </div>       
                            <select class="theSelect effect-5" style="width:100%;"  id="namamasuk">
    
    
    </select>
    <script>
      $(".theSelect").select2();
    </script>
              
              <div class="row-dalam masukan">
  <div class="col">
  <input readonly onkeyup="this.value = this.value.toUpperCase()" value="<?php echo $id_pasien?>" type="text" required id="id_pasien" class="effect-5"  placeholder=" " list="data-nama" name="id_pasien" autocomplete="off"/>
                            <label for="effect5">ID Pasien</label>
  </div>
  <div class="col">
  <input readonly onkeyup="this.value = this.value.toUpperCase()" value="<?php echo $rekam?>" type="text" required id="rekam" class="effect-5"  placeholder=" " list="data-nama" name="norekam" autocomplete="off"/>
                            <label for="effect5">No Rekam Medis</label>
  </div>

  
  

</div>  
                    
                        <div class="masukan">
                            <input onkeyup="this.value = this.value.toUpperCase()" type="text" id="nama" class="effect-5" list="data-nama" placeholder=" " name="nama" autocomplete="off"/>
                            <label for="effect5">Nama</label>
                            <datalist id="data-nama">
                            
                          </div>
                          <div class="masukan">
                            <input onkeyup="this.value = this.value.toUpperCase()" type="text" id="alamat" class="effect-5" placeholder=" " name="alamat" autocomplete="off" />
                            <label for="effect5">Alamat</label>
                          </div>
                          <div class="masukan">
                            <input type="number" id="usia" class="effect-5" placeholder=" " name="usia"  autocomplete="off"/>
                            <label for="effect5">Usia</label>
                          </div>
                          <div class="masukan">
                            <input type="number" id="nohp" class="effect-5" placeholder=" " name="nohp" autocomplete="off" />
                            <label for="effect5">NO Telp</label>
                          </div>
                          <div class="masukan">
                          <label for="effect5">Petugas</label>
                          <select class="theSelect effect-5" style="width:100%;" name="petugas"  id="petugas">
    
    
    </select>
    <script>
      $(".theSelect").select2();
    </script>
                            
                          </div><br>
                          
                          
                          
        <div class="row-dalam masukan" >
          <div class="col-8" style="margin-top: 30px;">
          <select class="theSelect effect-5" style="width:100%;"  id="barang">
    
    
    </select>
    <script>
      $(".theSelect").select2();
    </script>
          </div>
          <div class="col">
            <input type="text" name="" hidden id="id">
            <label for="effect5">Stok</label>
            <input type="number" readonly id="stok" class="form-control" placeholder=" "   autocomplete="off" />
                            
          </div>
          <div class="col">
          <label for="effect5">Pembelian</label>
          <input type="number" id="jumlah" class="form-control" placeholder=" "  autocomplete="off" />
                            
          </div>
          <div class="col">
          <label for="effect5">Diskon</label>
          <input type="number" id="diskonbrg" class="form-control" placeholder=" "  autocomplete="off" />
                            
          </div>
          

        </div>
        <div class="row-dalam">
          <div class="col-8"></div>
          <div class="col"></div>
          <div class="col"></div>
          <div class="col"> 
            <!-- <button id="tambah" class="btn btn-primary">TAMBAH</button> -->
            <a type="button" class="btn btn-primary" disabled id="tambah">TAMBAH</a>

          </div>

        </div><br>

        <div id="hasil" style="
        border-top: 1px solid black;
        border-left: 1px solid black;
        border-right: 1px solid black;
        border-bottom: 1px solid black;
        
        ">
        
         
        </div><br>
        <div style="margin-left: 88%;">
          <a type="button" class="btn btn-primary" id="konfirmasi">Konfirmasi</a>
        </div>

                  

                  

                  <div class="row-dalam masukan">
                    <div class="col" style="margin: auto; text-align: center;">
                    </div>
                    
                    
                    <div class="col" style="margin: auto; text-align: center;">
                        Jumlah Harga
                    </div>
                    <div class="col">
                        <input type="text" readonly id="jumlah_harga" class="effect-5" placeholder=" " name="jumlah_harga" onkeyup="uang()"  autocomplete="off"/>
                      
                    </div>
                  </div>

                  <div class="row-dalam masukan">
                    <div class="col" style="margin: auto; text-align: center;">
                    </div>
                   
                    <div class="col" style="margin: auto; text-align: center;">
                        Diskon
                    </div>
                    <div class="col">
                        <input type="text" id="diskonnk"  class="effect-5" autocomplete="off" placeholder=" " name="diskonnk" onkeyup="uang()"  />
                        
                    </div>
                  </div>

                  <div class="row-dalam masukan">
                    <div class="col" style="margin: auto; text-align: center;">
                    </div>
                   
                    <div class="col" style="margin: auto; text-align: center;">
                        Total
                    </div>
                    <div class="col">
                        <input type="text" id="total_harga" class="effect-5" autocomplete="off" placeholder=" " name="total" onkeyup="uang()" />
                        
                    </div>
                  </div>
                  
                  <div class="row-dalam masukan">
                    <div class="col" style="margin: auto; text-align: center;">
                    </div>
                   
                    <div class="col" style="margin: auto; text-align: center;">
                        Metode Pembayaran
                    </div>
                    <div class="col">
                    <select class="theSelect effect-5" style="width:100%;" id="mp"  onchange="showDiv(this)"  name="mp">

    <option value="TUNAI">TUNAI</option>
    <option value="DEBIT">DEBIT</option>
    <option value="KREDIT">KREDIT</option>
    
    </select>
    <script>
      $(".theSelect").select2();
    </script>
                    </div>
                  </div>
                  <div id="nokartu" style="display: none;">
                  <div class="row-dalam masukan" >
                    <div class="col" style="margin: auto; text-align: center;">
                    </div>
                   
                    <div class="col" style="margin: auto; text-align: center;">
                        Bank
                    </div>
                    <div class="col">
                        <input type="text"  onkeyup="this.value = this.value.toUpperCase()" class="effect-5" autocomplete="off" placeholder=" " name="bank"  onchange="uang()"/>
                        
                    </div>
                  </div>
                  <div class="row-dalam masukan" >
                    <div class="col" style="margin: auto; text-align: center;">
                    </div>
                   
                    <div class="col" style="margin: auto; text-align: center;">
                        No Kartu
                    </div>
                    <div class="col">
                        <input type="text"  onkeyup="this.value = this.value.toUpperCase()"  class="effect-5" autocomplete="off" placeholder=" " name="nokartu"  onchange="uang()"/>
                        
                    </div>
                  </div>
                  </div>
                  
                  <div id="trace" style="display: none;">
                  <div class="row-dalam masukan" >
                    <div class="col" style="margin: auto; text-align: center;">
                    </div>
                   
                    <div class="col" style="margin: auto; text-align: center;">
                        Trace
                    </div>
                    <div class="col">
                        <input type="text"   onkeyup="this.value = this.value.toUpperCase()" class="effect-5" autocomplete="off" placeholder=" " name="trace"  onchange="uang()"/>
                        
                    </div>
                  </div>
                  </div>
                  
                  
                  <div class="row-dalam masukan">
                    <div class="col" style="margin: auto; text-align: center;">
                    </div>
                    
                    <div class="col" style="margin: auto; text-align: center;">
                    <input type="submit"  class="btn btn-danger" value="Bayar"  />
                    </div>
                    
                  </div>

                  

            </div>
        </div>
        <br><Br><br>
</form>
    </main>
    <script>
       $('#jumlah').change(function(){
        var jumlah = $("#jumlah").val();
        var stok = $("#stok").val();
        
        if(jumlah > stok){
          var button = document.getElementById("tambah");
          button.hidden = true;
          swal({
    title: 'Jumlah Pembelian Melebihi Stok',
    text: 'Perhatikan!',
    icon: 'warning',
    button: 'OK!',
    showConfirmButton: true
   });  
          
         
        }else{
          var button = document.getElementById("tambah");
          button.hidden = false;
        }

       });
    </script>




    <script>
     $(document).ready(function(){
    load_data();
    function load_data(nama){
      $.ajax({
        url:"../proses/petugas.php",
        method:"POST",
        data: {
          search: nama
        },
        success:function(data){
          $('#petugas').html(data);
        }
      });
    }
   
  });
  </script>
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
      $('#diskonnk').keyup(function(){
        var diskon = $("#diskonnk").val();
        var jumlah = $("#jumlah_harga").val();
        var angka = parseInt(jumlah.replace(/,.*|[^0-9]/g, ''), 10);
        var disk = parseInt(diskon) * angka;
      var proses1 =disk / 100;
      var asli = angka - proses1;
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
        var total = $("#total_harga").val();
        var angkatotal = parseInt(total.replace(/,.*|[^0-9]/g, ''), 10);
        var jumlah = $("#jumlah_harga").val();
        var angka = parseInt(jumlah.replace(/,.*|[^0-9]/g, ''), 10);
      
      
      var proses1 = angka - angkatotal ;
      var proses2 = proses1 / angka;
      var proses3 = proses2 * 100;
      if (!isNaN(proses2)) {document.getElementById('diskon').value = Math.ceil(proses3);}

      })
    </script>
    <script>
$('#konfirmasi').click(function(){
  var total = $("#total").val();
  var titik = ".";
            var nilai = new String(total); 
            var pecah = []; 
                while(nilai.length > 3) 
                { 
                    var asd = nilai.substr(nilai.length-3); 
                    pecah.unshift(asd); 
                    nilai = nilai.substr(0, nilai.length-3); 
                } 

                if(nilai.length > 0) { pecah.unshift(nilai); } 
                nilai = pecah.join(titik);
  document.getElementById('jumlah_harga').value = nilai;
})
    </script>
    
    
    <script type="text/javascript">
      $(document).ready(function(){
        var nota = $("#nonota").val();
        var otomatis = setInterval(
function ()
{
$('#hasil').load('../proses/dataprodukkontan.php?nonota=' + nota).fadeIn("slow");
}, 1000);

      })
</script>
    <script>
      
      $('#tambah').click(function(){
        var idbarang = $("#id").val();
        var nonota = $("#nonota").val();
        var jumlah = $("#jumlah").val();
        var diskon = $("#diskonbrg").val();
        if(diskon == ""){
          diskonasli =  0

        }else{
          diskonasli = diskon
        }
        var kosong ="";
       
        

        $.ajax({
					url: '../proses/tambahproduk.php',
					type: 'POST',
					
					data: {
						'id': idbarang,
            'nonota': nonota,
            'jumlah': jumlah,
            'diskon' : diskonasli
					},
					
          });
         
          document.getElementById('barang').value = kosong;
        document.getElementById('stok').value = kosong;
        document.getElementById('jumlah').value = kosong;
        document.getElementById('diskonbrg').value = kosong;

      })
    </script>
        
  <script>
     $(document).ready(function(){
    load_data();
    function load_data(nama){
      $.ajax({
        url:"../proses/barang.php",
        method:"POST",
        data: {
          search: nama
        },
        success:function(data){
          $('#barang').html(data);
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
            $("#id_pasien").val(data['id_pasien']);
						$("#alamat").val(data['alamat']);
						$("#usia").val(data['usia']);
                        $("#nohp").val(data['nohp']);
 
          }
          });
      
    });
    
  </script>
   <script>
    
    $('#barang').change(function(){
      var id = $("#barang").val();
      document.getElementById('id').value = id;
      
      
     
      
				var id = $("#barang").val();
 
				$.ajax({
					url: '../proses/pilihbarang.php',
					type: 'POST',
					dataType: 'json',
					data: {
						'id': id
					},
					success: function (data) {
						$("#stok").val(data['stok']);
					
 
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
        function uang()
        {
            
            var uang1 = document.getElementById('harga_1').value;
            var uang2 = document.getElementById('harga_2').value;
            var uang3 = document.getElementById('harga_3').value;
            var uang4 = document.getElementById('harga_4').value;
            var uang5 = document.getElementById('harga_5').value;
            var diskon = document.getElementById('diskon').value;
            var total = document.getElementById('total').value;
            if(uang1 == ""){
                uang1 = 0;
            }else{
                uang1 = parseInt(uang1.replace(/,.*|[^0-9]/g, ''), 10);
            }if(uang2 == ""){
                uang2 = 0;
            }else{
                uang2 = parseInt(uang2.replace(/,.*|[^0-9]/g, ''), 10);
            }if(uang3 == ""){
                uang3 = 0;
            }else{
                uang3 = parseInt(uang3.replace(/,.*|[^0-9]/g, ''), 10);
            }if(uang4 == ""){
                uang4 = 0;
            }else{
                uang4 = parseInt(uang4.replace(/,.*|[^0-9]/g, ''), 10);
            }if(uang5 == ""){
                uang5 = 0;
            }else{
                uang5 = parseInt(uang5.replace(/,.*|[^0-9]/g, ''), 10);
            }
            var jumlah = uang1+uang2+uang3+uang4+uang5;

            
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
            document.getElementById('jumlah_harga').value = nilai;
                
            

           
            if(diskon == ""){
                total = parseInt(total.replace(/,.*|[^0-9]/g, ''), 10);
            var jumlah =uang1+uang2+uang3+uang4+uang5; ;
            var awal = jumlah;
            var persen =  parseInt(awal) - parseInt(total) ;
            var proses1 = persen / parseInt(awal)  ;
            var proses2 = proses1 * 100;
            var akhir = proses2 ;
            if (!isNaN(proses2)) {document.getElementById('diskon').value = akhir;}
            
           }if(total==""){
            var jumlah = uang ;
            var awal = uang1+uang2+uang3+uang4+uang5;;
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
           
           

            
        }
        
        
        
        </script>
      


        
        





       <script>
   
    var total = document.getElementById('total_harga');
    total.addEventListener('keyup', function(e)
    {
        total.value = formatRupiah(this.value);
    });
    var harga_1 = document.getElementById('harga_1');
    harga_1.addEventListener('keyup', function(e)
    {
        harga_1.value = formatRupiah(this.value);
    });
    var harga_2 = document.getElementById('harga_2');
    harga_2.addEventListener('keyup', function(e)
    {
        harga_2.value = formatRupiah(this.value);
    });
    var harga_3 = document.getElementById('harga_3');
    harga_3.addEventListener('keyup', function(e)
    {
        harga_3.value = formatRupiah(this.value);
    });
    var harga_4 = document.getElementById('harga_4');
    harga_4.addEventListener('keyup', function(e)
    {
        harga_4.value = formatRupiah(this.value);
    });
    var harga_5 = document.getElementById('harga_5');
    harga_5.addEventListener('keyup', function(e)
    {
        harga_5.value = formatRupiah(this.value);
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
    $('#nama').keyup(function(){
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