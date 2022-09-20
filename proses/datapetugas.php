<br>
<table class="table container" style="font-size: 14px;">
    <thead>
        <tr align="center">
        
            <th  align="center">NAMA</th>
            
            <th  align="center">Level</th>
            <th  align="center">AKSI</th>
           
            
            
           
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

        $query = mysqli_query($konek,"SELECT * FROM petugas WHERE  nama LIKE '%".$keyword."%' OR role LIKE '%".$keyword."%'  ");
        $hitung_data = mysqli_num_rows($query);
        if ($hitung_data > 0) {
            while ($data = mysqli_fetch_array($query)) {
               
                
                ?>
                <tr align="center"   >
                   
                    
                    <td ><?php echo $data['nama']; ?></td>
                    <td ><?php echo $data['role']; ?></td>
                    <td><a  type="button"  class="btn btn-danger btn-sm btn-del" title="Hapus User" href="../admin/hapuspetugas.php?id=<?php echo $data['id'];?>"><i style="color:black;" class='bx bx-trash'></i></a></td>
                   
                   
                    	
                    
                </tr>
            <?php } } else { ?> 
                <tr>
                    <td colspan='3' class="text-center" align="center">Data Tidak Ditemukan</td>
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
        text : 'User Akan DIhapus!',
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
    swal("User Aman!");
  }
      })
    })
  </script>
  

    