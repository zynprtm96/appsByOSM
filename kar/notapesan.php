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
    
    



    <!-- <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

    <link rel="stylesheet" href="../aset/css/select.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.8/js/select2.min.js"></script>
    <script src="../aset/js/sweetalert.min.js"></script>


    <script src="../aset/js/ajax.js"></script>





<script src="../aset/js/select.js"></script>

<script src="../aset/js/jquery.js"></script> -->




    
    <title>Document</title>
    
</head>
<style>
  body{
    background-color: #fff;
  }
</style>

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

        $query = mysqli_query($konek, "SELECT max(nonota) as nonota FROM nota_pesan");
        $data = mysqli_fetch_array($query);
        $nota = $data['nonota'];
        $urutan = (int) substr($nota, 5, 5);
 

        $urutan++; 
        $huruf = "NP-";
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
        
        <div class="container" >
        <h5 style="text-align: center;">TRANSAKSI NOTA PESAN</h5>
      <a href="../kar/fnpesan.php" style="margin-left: 20px;" type="button" class="btn btn-danger">Kembali</a>
        <form method="POST" action="../proses/prosesnotapesan.php" onsubmit="return submitForm(this);">
            <div class="pinggir">
                <div class="main">

                            <div class="row-dalam masukan">
                                
                                <div class="col">
                                    <input type="text" id="effect5" class="effect-5" readonly value="<?php echo $nota ?>" placeholder=" " name="nonota" />
                                    <label for="effect5">No Nota</label>
                                </div>
                               
                                <div class="col">
                                    <input type="text" id="effect5" class="effect-5" readonly value="<?php echo $tanggal ?>" placeholder=" "  />
                                    <label for="effect5">Tanggal Pemesanan</label>
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
                            <input onkeyup="this.value = this.value.toUpperCase()" type="text" required id="nama" class="effect-5"  placeholder=" " list="data-nama" name="nama" autocomplete="off"/>
                            <label for="effect5">Nama</label>
                            <datalist id="data-nama">
                          </div>
                          
                          <div class="masukan">
                            <input onkeyup="this.value = this.value.toUpperCase()" type="text" id="alamat" class="effect-5" placeholder=" " name="alamat" autocomplete="off" />
                            <label for="effect5">Alamat</label>
                          </div>
                          <div class="masukan">
                            <input type="text" id="usia" class="effect-5" placeholder=" " name="usia"  autocomplete="off"/>
                            <label for="effect5">Usia</label>
                          </div>
                          <div class="masukan">
                            <input type="text"  id="nohp" class="effect-5" placeholder=" " name="nohp" autocomplete="off" />
                            <label for="effect5">NO Telp</label>
                          </div>
                          <div class="masukan">
                          <label for="effect5">Petugas</label>
                          <select class="theSelect effect-5" style="width:100%;" name="petugas"  id="petugas">
    
    
    </select>
    <script>
      $(".theSelect").select2();
    </script>
                            
                          </div>
                          <div class="masukan">
                          <label for="effect5">Pemeriksa</label>
                          <select class="theSelect effect-5" style="width:100%;" name="pemeriksa"  id="pemeriksa">
    
    
    </select>
    <script>
      $(".theSelect").select2();
    </script>
                            
                          </div>
                          
                          
                          
    
    
    
   
                          
                          
                          
                          

                   
                </div>
        </div>
        <div class="row-dalam container" >
        <div class="col-2" style="margin: auto; text-align: center;">
                        Frame
                    </div>
          <div class="col" >
          <select class="theSelect effect-5" style="width:100%;"  id="frame">
    
    
    </select>
    <script>
      $(".theSelect").select2();
    </script>
          </div>
          
        
        </div><br>
        <div class="row-dalam container" >
        <div class="col-2" style="margin: auto; text-align: center;">
                       
                    </div>
          <div class="col" >
          <input type="text" hidden  id="id_frame" class="effect-5" placeholder=" "  autocomplete="off" />
          <input type="text" hidden name="kode_f"  id="kodef" class="effect-5" placeholder=" "  autocomplete="off" />
          <input type="text" hidden name="stokf"  id="stokf" class="effect-5" placeholder=" "  autocomplete="off" />


          <input onkeyup="this.value = this.value.toUpperCase()" type="text" id="merkf" class="effect-5" placeholder=" "  autocomplete="off"/>
                        <label for="effect5">Merk</label>
          </div>
          <div class="col" >
          <input onkeyup="this.value = this.value.toUpperCase()" type="text" id="warnaf" class="effect-5" placeholder=" "  autocomplete="off"/>
                        <label for="effect5">Warna</label>
          </div>
          <div class="col" >
          <input onkeyup="this.value = this.value.toUpperCase()" type="text" id="jenisf" class="effect-5" placeholder=" "  autocomplete="off"/>
                        <label for="effect5">Jenis</label>
          </div>
          <div class="col-3" >
          <input onkeyup="this.value = this.value.toUpperCase()" type="text" id="hargaf" class="effect-5" placeholder=" "  autocomplete="off"/>
                        <label for="effect5">Harga</label>
          </div>
          <div class="col" style="margin-left: 50px;">
          <a class="btn btn-primary" type="button" id="tambahframe"> Tambah</a>
          </div>
          
        
        </div><br>
        <div class="row-dalam">
          <div class="col-2" style="margin: auto; text-align: center;">
          Lensa OD
          </div>
          <div class="col-8">
          <select class="theSelect effect-5" style="width:100%;"  id="lensaod">
    
    
    </select>
    <script>
      $(".theSelect").select2();
    </script>
          </div>
          <div class="col">
  <a class="btn btn-primary" type="button" id="tambahlensaod"> Tambah</a>

</div>
        </div><br>
        <div class="row-dalam masukan" hidden>
<input type="text" hidden  id="id_lensaod" class="effect-5" placeholder=" "  autocomplete="off" />
<input type="text" hidden  id="kode_lensaod" name="kode_lensaod" class="effect-5" placeholder=" "  autocomplete="off" />

<div class="col">
<input type="text"  id="merk_lensaod" class="effect-5" placeholder=" "  autocomplete="off" />
<label for="effect5">Merk</label>
</div>
<div class="col-5">
<input type="text"  id="jenis_lensaod" class="effect-5" placeholder=" "  autocomplete="off" />
<label for="effect5">Jenis</label>
</div>

<div class="col">
<input type="text"  id="harga_lensaod" class="effect-5" placeholder=" "  autocomplete="off" />
<label for="effect5">Harga</label>
</div>


</div>

<div class="row-dalam">
          <div class="col-2" style="margin: auto; text-align: center;">
          Lensa OS
          </div>
          <div class="col-8">
          <select class="theSelect effect-5" style="width:100%;"  id="lensaos">
    
    
    </select>
    <script>
      $(".theSelect").select2();
    </script>
          </div>
          <div class="col">
  <a class="btn btn-primary" type="button" id="tambahlensaos"> Tambah</a>

</div>
        </div>
        <div class="row-dalam masukan" hidden>
        <input type="text" hidden id="kode_lensaos" name="kode_lensaos" class="effect-5" placeholder=" "  autocomplete="off" />
<input type="text" hidden  id="id_lensaos" class="effect-5" placeholder=" "  autocomplete="off" />

<div class="col">
<input type="text"  id="merk_lensaos" class="effect-5" placeholder=" "  autocomplete="off" />
<label for="effect5">Merk</label>
</div>
<div class="col-5">
<input type="text"  id="jenis_lensaos" class="effect-5" placeholder=" "  autocomplete="off" />
<label for="effect5">Jenis</label>
</div>

<div class="col">
<input type="text"  id="harga_lensaos" class="effect-5" placeholder=" "  autocomplete="off" />
<label for="effect5">Harga</label>
</div>


</div><br>
<div>
  <table class="table table-borderless" style="font-size: 14px;" >
    <thead>
      
    </thead>
    
    <tbody>
      <tr>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td>JUMLAH</td>
        <td>DISKON</td>
        <td >SUB HARGA</td>
      </tr>
      <tr >
        <td width="10%"  style="vertical-align: middle;">Frame</td>
        <td ><input type="text" id="merk_frame" name="merk_f" readonly></td>
        <td><input type="text" id="warna_frame" name="warna_f" readonly></td>
        <td><input type="text" id="jenis_frame" name="detil_f" readonly></td>
        <td><input type="text" id="harga_frame" name="" readonly></td>
        <td><input type="text" name="" id="jtframe" class="form-control" readonly></td>
        <td><input type="text" name="" id="diskonframe" class="form-control"></td>
        <td><input type="text" name="harga_f" id="subhargaframe" readonly></td>
      </tr>
      <tr>
        <td  style="vertical-align: middle;">Lensa OD</td>
        <td  style="font-size: 12px;"><input style="font-size: 12px;" type="text" id="merk_lensaod1" name="merk_lr" readonly></td>
        
        <td  style="font-size: 12px;" colspan="2"><input  style="font-size: 12px;" type="text" id="produk_lensaod" name="jenis_lr" readonly></td>
        
        <td><input type="text" id="harga_lensaod1" style="font-size: 12px;" name="harga_lr"  readonly></td>
        <td rowspan="2" style="vertical-align: middle;"><input type="text" name="" id="jtlensa" class="form-control" readonly></td>
        
        <td rowspan="2" style="vertical-align: middle;"><input type="text" name="" id="diskonlensa" class="form-control"></td>
        <td rowspan="2" style="vertical-align: middle;"><input type="text" name="subhargalensa" id="subhargalensa" readonly></td>
      </tr>
      <tr>
        <td  style="vertical-align: middle;">Lensa OS</td>
        <td><input type="text" id="merk_lensaos1" style="font-size: 12px;" name="merk_ll" readonly></td>
        <td colspan="2"><input type="text" style="font-size: 12px;" id="produk_lensaos" name="jenis_ll" readonly></td>
        
        <td><input type="text" id="harga_lensaos1" style="font-size: 12px;" name="harga_ll"  readonly></td>
      
        
        
        
        
      </tr>
      <tr>
        <td colspan="7"></td>
        <td><a type="button" class="btn btn-primary" id="jumlah">Jumlah</a></td>
      </tr>
      <tr>
        <td colspan="7" style="vertical-align: middle;" align="right">Jumlah Harga</td>
        <td><input type="text" name="jumlah_harga" id="total" readonly></td>
      </tr>
      <tr>
        <td colspan="7" style="vertical-align: middle;" align="right">Diskon</td>
        <td><input class="form-control" name="diskon" type="text" id="diskon" autocomplete="off" onkeyup="harga()"></td>
      </tr>
      <tr>
        <td colspan="7" style="vertical-align: middle;" align="right">Total</td>
        <td><input class="form-control" name="total" type="text" id="total_harga" autocomplete="off" onkeyup="harga()"></td>
      </tr>
      <tr>
        <td colspan="7" style="vertical-align: middle;" align="right">Uang Muka</td>
        <td><input class="form-control" name="uang_muka" type="text" id="uang_muka" autocomplete="off" onkeyup="harga()"></td>
      </tr>
      <tr>
        <td colspan="7" style="vertical-align: middle;" align="right">Sisa</td>
        <td><input class="form-control" name="sisa" readonly type="text" id="sisa" autocomplete="off" onkeyup="harga()"></td>
      </tr>
      <tr>
        <td colspan="7" style="vertical-align: middle;" align="right">Metode Pembayaran</td>
        <td > <select class="theSelect effect-5" style="width:100%;" id="mp"  onchange="showDiv(this)"  name="mp">
    
    <option value="TUNAI">TUNAI</option>
    <option value="DEBIT">DEBIT</option>
    <option value="KREDIT">KREDIT</option>
    
    </select>
    <script>
      $(".theSelect").select2();
    </script></td>

      
    </tbody>
   
  </table>
  <div id="nokartu" style="display: none;">
  <div class="row-dalam masukan" >
                    <div class="col" style="margin: auto; text-align: center;">
                    </div>
                   
                    <div class="col" style="margin: auto; text-align: right;">
                        Bank
                    </div>
                    <div class="col">
                        <input type="text" onkeyup="this.value = this.value.toUpperCase()"  class="effect-5" autocomplete="off" placeholder=" " name="bank"  onchange="uang()"/>
                        
                    </div>
                  </div>
                
                  <div class="row-dalam masukan" >
                    <div class="col" style="margin: auto; text-align: center;">
                    </div>
                   
                    <div class="col" style="margin: auto; text-align: right;">
                        No Kartu
                    </div>
                    <div class="col">
                        <input type="text" onkeyup="this.value = this.value.toUpperCase()"  class="effect-5" autocomplete="off" placeholder=" " name="nokartu"  onchange="uang()"/>
                        
                    </div>
                  </div>
                  </div>
                  
                  <div id="trace" style="display: none;">
                  <div class="row-dalam masukan" >
                    <div class="col" style="margin: auto; text-align: center;">
                    </div>
                   
                    <div class="col" style="margin: auto; text-align: right;">
                        Trace
                    </div>
                    <div class="col">
                        <input type="text" onkeyup="this.value = this.value.toUpperCase()" class="effect-5" autocomplete="off" placeholder=" " name="trace"  onchange="uang()"/>
                        
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
                    <input type="submit" class="btn btn-danger " value="Bayar"  />
                    
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
       $('#diskonlensa').keyup(function(){
        
        var hargalensa = $("#jtlensa").val();
        var diskon = $('#diskonlensa').val();
      var angka =parseInt(hargalensa.replace(/,.*|[^0-9]/g, ''), 10);
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
     
      if (!isNaN(disk)) { document.getElementById('subhargalensa').value = nilai;}



       })
    </script>
    <script>
       $('#diskonframe').keyup(function(){
        var hargalensa = $("#jtframe").val();
        var diskon = $('#diskonframe').val();
      var angka =parseInt(hargalensa.replace(/,.*|[^0-9]/g, ''), 10);
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
     
      if (!isNaN(disk)) { document.getElementById('subhargaframe').value = nilai;}



       })
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
     $(document).ready(function(){
    load_data();
    function load_data(nama){
      $.ajax({
        url:"../proses/pemeriksa.php",
        method:"POST",
        data: {
          search: nama
        },
        success:function(data){
          $('#pemeriksa').html(data);
        }
      });
    }
   
  });
  </script>
  <script>
    
    $('#frame').change(function(){
      var id = $("#frame").val();
      document.getElementById('id_frame').value = id;
      $('#hargaf').prop('readonly', true);
      $('#merkf').prop('readonly', true);
      
      
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
            $("#stokf").val(data['stok'] );
           
 
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
      var frame = $("#subhargaframe").val();
      if(frame == ""){
        hf = 0;
      }
      else{
        hf = parseInt(frame.replace(/,.*|[^0-9]/g, ''), 10);
      }
      var lensa = $("#subhargalensa").val();
      if(lensa == ""){
        hlod =0;
      }else{
        hlod = parseInt(lensa.replace(/,.*|[^0-9]/g, ''), 10);
      }
    
      var jumlah = hf + hlod ;
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
      var stok = $("#stokf").val();
      
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
      if(stok==0){
        swal({
    title: 'Stok Kosong',
    text: 'Perhatikan!',
    icon: 'warning',
    button: 'OK!',
    showConfirmButton: true
  });  
      }else{
        document.getElementById('merk_frame').value = merk;
      document.getElementById('jenis_frame').value = jenis;
      document.getElementById('warna_frame').value = warna;
      document.getElementById('harga_frame').value = nilai;
      document.getElementById('jtframe').value = nilai;
      document.getElementById('subhargaframe').value = nilai;

      }
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
      var hargalos = $("#harga_lensaos").val();
      var hargalod = $("#harga_lensaod").val();
      var jumlahnya = parseInt(hargalos) + parseInt(hargalod);
      
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


                var titik1 = ".";
            var nilai1 = new String(jumlahnya); 
            var pecah1 = []; 
                while(nilai1.length > 3) 
                { 
                    var asdd = nilai1.substr(nilai1.length-3); 
                    pecah1.unshift(asdd); 
                    nilai1 = nilai1.substr(0, nilai1.length-3); 
                } 

                if(nilai1.length > 0) { pecah1.unshift(nilai1); } 
                nilai1 = pecah1.join(titik1);


                
      document.getElementById('jtlensa').value = nilai1;
      document.getElementById('subhargalensa').value = nilai1;
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
              $("#kode_lensaod").val(data['kode_lensa'] );
           
 
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
            $("#kode_lensaos").val(data['kode_lensa'] );
           
 
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