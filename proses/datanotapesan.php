<br>
<table class="table  container" style="font-size: 14px;">
    <thead>
        <tr align="center">
            <th width="20%" align="center">Tanggal Pesan</th>
            <th width="15%" align="center">No Nota</th>
            <th width="15%" align="center">Nama</th>
            <th width="15%" align="center">Status</th>
            <th width="15%" align="center">Barang</th>
            <th width="30%" align="center">Aksi</th>
           
        </tr>
    </thead>
    <tbody>
        <?php
        $no = 1;
        include('../config/koneksi.php');
        $keyword="";
        if (isset($_POST['search'])) {
            $keyword = $_POST['search'];
        }

        $query = mysqli_query($konek,"SELECT * FROM nota_pesan WHERE nonota LIKE '%".$keyword."%' OR nama LIKE '%".$keyword."%' OR status LIKE '%".$keyword."%' OR barang LIKE '%".$keyword."%' ORDER BY nonota DESC");
        $hitung_data = mysqli_num_rows($query);
        if ($hitung_data > 0) {
            while ($data = mysqli_fetch_array($query)) {
                
                if($data['rekam']=="T"){
                    $tombol= "";
                }else{
                    $tombol= "hidden";
                }
                if($data['status']=="L"){
                    $status = "Lunas";
                }elseif($data['status']=="BL"){
                    $status = "Belum Lunas";
                }
                if($data['stator']=="T"){
                    $order = "hidden";
                    $tbrekam="";
                }else{
                    $order = "";
                    $tbrekam="hidden";
                }
                if($data['rekam']=="T"){
                    $rekam = "hidden";
                }else{
                    $rekam = "";
                }
                if($data['barang']=="BD"){
                    $barang = "Belum Diambil";
                    $kelas = "bg-danger";
                    $warna = "white";
                    $style ="";
                    $cetak = "hidden";
                    
                }else{
                    $barang = "Sudah Diambil";
                    $kelas = "bg-info";
                    $warna = "black";
                    $style ="none";
                    $tombol = "hidden";
                    $cetak = "";
                    
                    
                }
                ?>
                <tr align="center"  class="<?php echo $kelas;?>" style=" color: <?php echo $warna;?>;">
                    <td><?php echo date('d M Y',strtotime($data['tanggal_pesan'])) ?></td>
                    <td ><?php echo $data['nonota']; ?></td>
                    <td ><?php echo $data['nama']; ?></td>
                    <td ><?php echo $status;?></td>
                    <td ><?php echo $barang;?></td> 
                    <td > 
<a href="../kar/or.php?id=<?php echo $data['nonota'];?>" <?php echo $order;?> title="Order Lensa"><button type="button" class="btn btn-warning"><i style="font-size: 18px;"class='bx bx-glasses'></i></button></a>                  
  <a <?php echo $tbrekam;?> href="../kar/rekamor.php?id=<?php echo $data['id'];?>" <?php echo $rekam;?> title="Isi Rekam Medis"><button type="button" class="btn btn-warning"><i style="font-size: 18px;" class='bx bx-receipt'></i></button></a>
  <a  href="../kar/konfirmasiambil.php?id=<?php echo $data['id'];?>" <?php echo $tombol;?> title="AMBIL" type="button" class="btn btn-success alert_notif btn-del" ><i style="font-size: 18px;" class='bx bx-archive'></i></a>
  <a href="../kar/cetakambil.php?id=<?php echo $data['id'];?>" <?php echo $cetak?> title="Cetak Nota Pengambilan"><button type="button" class="btn btn-primary"><i style="font-size: 18px;" class='bx bx-printer'></i></button></a>

                   
                </td>
                    	
                    
                </tr>
            <?php } } else { ?> 
                <tr>
                    <td colspan='6' class="text-center">Data Tidak Ditemukan</td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script>
    $('.btn-del').on('click', function(e){
      e.preventDefault();
      const href = $(this).attr('href');
      swal({
        title : 'Apakah Anda Yakin Customer Melakukan Pengambilan?',
        text : 'Harap Cek Kembali Barang Yang Akan DiBerikan!',
        type : 'warning',
        buttons: true,
        dangerMode: true,
        confirmButtonColor : '#3085d6',
        cancelButtonColor : '#d33',
        confirmButtonText : 'Konfirmasi',
      }).then((willDelete) => {
  if (willDelete) {
    
    document.location.href = href; 
    
  } else {
    swal("Nota Tidak Jadi DIambil!");
  }
      })
    })
  </script>

    