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
        $pelanggan =  mysqli_query($konek, "SELECT max(nonotabt) as id FROM nota_batalsemua");
        $datap = mysqli_fetch_array($pelanggan);
        $id = $datap['id'];
        $tambah = (int) substr($id, 5, 5);
        $tambah++;
        $teks = "NB-";
        $nb = $teks . sprintf("%05s", $tambah); 

        $query = mysqli_query($konek,"SELECT * FROM nota_pesan WHERE nonota LIKE '%".$keyword."%' OR nama LIKE '%".$keyword."%' OR status LIKE '%".$keyword."%' OR barang LIKE '%".$keyword."%' ORDER BY nonota DESC");
        $hitung_data = mysqli_num_rows($query);
        if ($hitung_data > 0) {
            while ($data = mysqli_fetch_array($query)) {
                if($data['barang']=="BD"){
                    $barang = "Belum Diambil";
                    $kelas = "bg-info";
                    $warna = "black";
                    
                    
                }else{
                    $barang = "Sudah Diambil";
                    $kelas = "bg-info";
                    $warna = "black";
                  
                    
                }
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
                if($data['barang']=="D"){
                    $rekam = "hidden";
                }else{
                    $rekam = "";
                }
                if($data['batal']=="Y"){
                    $batal = "hidden";
                }else{
                    $batal ="";
                }
                ?>
                <tr <?php echo $batal?> align="center"  class="<?php echo $kelas;?>" style=" color: <?php echo $warna;?>;">
                    <td><?php echo date('d M Y',strtotime($data['tanggal_pesan'])) ?></td>
                    <td ><?php echo $data['nonota']; ?></td>
                    <td ><?php echo $data['nama']; ?></td>
                    <td ><?php echo $status;?></td>
                    <td ><?php echo $barang;?></td> 
                    <td > 
                        <button title="Batalkan Nota" onclick="batal('<?php echo $data['nonota'];?>')" class="btn btn-warning"><i style="font-size: 18px;" class='bx bx-calendar-exclamation'></i></button>

                   
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
        title : 'Apakah Anda Yakin?',
        text : 'Harap Konfirmasi Kepada Owner Terlebih Dahulu!',
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
    swal("Nota Tidak Jadi DIbatalkan!");
  }
      })
    })
  </script>
  <script>
    function batal(id){
        swal({
        title : 'Apakah Anda Yakin?',
        text : 'Harap Konfirmasi Kepada Owner Terlebih Dahulu!',
        type : 'warning',
        buttons: true,
        dangerMode: true,
        confirmButtonColor : '#3085d6',
        cancelButtonColor : '#d33',
        confirmButtonText : 'Konfirmasi',
      }).then((willDelete) => {
  if (willDelete) {
    
    swal("Alasan Pembatalan Nota:", {
  content: "input",
 
}).then((value) => {
    
    window.location = "../proses/batal.php?nonota="+ id + "&alasan="+ value + "&nota=<?php echo $nb?>";
  
});
    
  } else {
    swal("Nota Tidak Jadi DIbatalkan!");
  }
      })

    }
  </script>

    