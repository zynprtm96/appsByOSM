<br>
<table class="table  container" style="font-size: 14px;">
    <thead>
        <tr align="center">
            <th width="20%" align="center">Tanggal Pesan</th>
            <th width="15%" align="center">No Nota</th>
            <th width="15%" align="center">Nama</th>
            <th width="15%" align="center">Rekam Medis</th>
           
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
                    $tombol= "hidden";
                    $kelas = "";
                    $status ="";
                }else{
                    $tombol= "";
                    $kelas = "bg-danger";
                    $status = "Belum Diisi";

                }
               if($data['stator']=="T"){
                $stat="";

               }else{
                $stat = "hidden";
               }
                ?>
                <tr <?php echo $stat;?> <?php echo $tombol;?> align="center"  class="<?php echo $kelas;?>" style=" color:#fff;">
                    <td><?php echo date('d M Y',strtotime($data['tanggal_pesan'])) ?></td>
                    <td ><?php echo $data['nonota']; ?></td>
                    <td ><?php echo $data['nama']; ?></td>
                    <td ><?php echo $status;?></td>
                   
                    <td > 
                    
  <a href="../kar/rekamor.php?id=<?php echo $data['id'];?>"  title="Isi Rekam Medis"><button type="button" class="btn btn-warning"><i style="font-size: 18px;" class='bx bx-receipt'></i></button></a>
 
                   
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

    