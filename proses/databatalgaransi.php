<br>
<table class="table  container" style="font-size: 14px;">
    <thead>
        <tr align="center">
            <th width="20%" align="center">Tanggal Pesan</th>
            <th width="15%" align="center">No Nota</th>
            <th width="15%" align="center">Nota Referensi</th>
            <th width="15%" align="center">Nama</th>
          
            <th width="15%" align="center">Aksi</th>
           
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

        $query = mysqli_query($konek,"SELECT * FROM nota_garansi WHERE nonotagr LIKE '%".$keyword."%' OR nama LIKE '%".$keyword."%'  ORDER BY nonotagr DESC");
        $hitung_data = mysqli_num_rows($query);
        if ($hitung_data > 0) {
            while ($data = mysqli_fetch_array($query)) {
                if($data['batal']=="Y"){
                  $batal = "hidden";

                }else{
                  $batal="";
                }
                ?>
                <tr align="center" <?php echo $batal?> >
                    <td><?php echo date('d M Y',strtotime($data['tanggal_garansi'])) ?></td>
                    <td ><?php echo $data['nonotagr']; ?></td>
                    <td ><?php echo $data['nota_ref']; ?></td>
                    <td ><?php echo $data['nama']; ?></td>
                    
                   
                    <td > 
                        <button title="Batalkan Nota" onclick="batal('<?php echo $data['nonotagr'];?>')" class="btn btn-warning"><i style="font-size: 18px;" class='bx bx-calendar-exclamation'></i></button>

                   
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
    
    window.location = "../proses/batalgaransi.php?id="+ id + "&alasan="+ value + "&nota=<?php echo $nb?>";
  
});
    
  } else {
    swal("Nota Tidak Jadi DIbatalkan!");
  }
      })

    }
  </script>

    