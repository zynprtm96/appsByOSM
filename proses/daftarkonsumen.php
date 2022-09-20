<br>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    
    <table class="table table-borderless container bg-primary" style="color: white;" >
            <tr align="center" >
                <td align="center" width="20%">ID Pasien</td>
                <td align="center" width="20%">No Rekam Medis</td>
                <td align="center" width="20%">Nama</td>
                <td align="center" width="20%">Usia</td>
                <td align="center" width="20%">No Telp</td>
                
            </tr>
           </table>
    
  
        <?php
        $no = 1;
        include('../config/koneksi.php');
        $keyword="";
        if (isset($_POST['search'])) {
            $keyword = $_POST['search'];
        }

        $query = mysqli_query($konek,"SELECT * FROM master_pelanggan WHERE id_pasien LIKE '%".$keyword."%' OR nama LIKE '%".$keyword."%'  OR nohp  LIKE '%".$keyword."%' ");
        $hitung_data = mysqli_num_rows($query);
        if ($hitung_data > 0) {
            while ($data = mysqli_fetch_array($query)) {
                
                ?>
               
                <div class="accordion" id="accordionGroup">
                <div class="card">
  	<a class="card-link collapsed" type="button" data-toggle="collapse" data-target="#collapseOne<?php echo $data['id']?>" aria-expanded="true" aria-controls="collapseOne<?php echo $data['id']?> ">
	    <div class="card-header" id="headingOne">
	       <table class="table table-borderless container">
            <tr align="center" >
                <td align="center" width="20%" style="vertical-align: center;"><?php echo $data['id_pasien'] ?></td>
                <td align="center" width="20%"><?php echo $data['norekam'] ?></td>
                <td align="center" width="20%"><?php echo $data['nama'] ?></td>
                <td align="center" width="20%"><?php echo $data['usia'] ?></td>
                <td align="center" width="20%"><?php echo $data['nohp'] ?></td>
                
            </tr>
           </table>
	    </div>
    </a>
 
    <div id="collapseOne<?php echo $data['id']?>" class="collapse " aria-labelledby="headingOne" data-parent="#accordionGroup">
      <div class="card-body">
        <table class="table table-borderless">
            <tr align="center">
            
                <td width="20%">Nota Pesan</td>
                <td width="20%">Nota Kontan</td>
                <td width="20%">Nota Garansi</td>
                <td width="20%">Resep</td>
                <td width="20%">Rujukan</td>
            </tr>
            <tr>
                <td id="notapesan<?php echo $data['id']?>"></td>
                <td id="notakontan<?php echo $data['id']?>"></td>
                <td id="notagaransi<?php echo $data['id']?>"></td>
                <td id="resep<?php echo $data['id']?>"></td>
                <td id="rujukan<?php echo $data['id']?>"></td>
            </tr>
        </table>
      </div>
    </div>
  </div>
               
              
    
               
            <?php } } else { ?> 
                <tr>
                    <td colspan='6' class="text-center">Data Tidak Ditemukan</td>
                </tr>
            <?php } ?>

          <?php
 $query1 = mysqli_query($konek,"SELECT * FROM master_pelanggan WHERE id_pasien LIKE '%".$keyword."%' OR nama LIKE '%".$keyword."%'  OR nohp  LIKE '%".$keyword."%' ");
 $hitung_data = mysqli_num_rows($query1);
 
     while ($data1 = mysqli_fetch_array($query1)) {
          ?>
          <input type="text" name="" hidden id="idpasien<?php echo $data1['id']?>" value="<?php echo $data1['id_pasien']?>">
          <script type="text/javascript">
  $(document).ready(function(){
    var idpasien = $("#idpasien<?php echo $data1['id']?>").val();
      load_data(idpasien);
    
    function load_data(idpasien){
      $.ajax({
        url:"../proses/kumnp.php",
        method:"POST",
        data: {
          id: idpasien
        },
        success:function(data){
          $('#notapesan<?php echo $data1['id']?>').html(data);
        }
      });
    }
   
  });
  </script>
   <script type="text/javascript">
  $(document).ready(function(){
    var idpasien = $("#idpasien<?php echo $data1['id']?>").val();
      load_data(idpasien);
    
    function load_data(idpasien){
      $.ajax({
        url:"../proses/kumnk.php",
        method:"POST",
        data: {
          id: idpasien
        },
        success:function(data){
          $('#notakontan<?php echo $data1['id']?>').html(data);
        }
      });
    }
   
  });
  </script>
  <script type="text/javascript">
  $(document).ready(function(){
    var idpasien = $("#idpasien<?php echo $data1['id']?>").val();
      load_data(idpasien);
    
    function load_data(idpasien){
      $.ajax({
        url:"../proses/kumng.php",
        method:"POST",
        data: {
          id: idpasien
        },
        success:function(data){
          $('#notagaransi<?php echo $data1['id']?>').html(data);
        }
      });
    }
   
  });
  </script>
  <script type="text/javascript">
  $(document).ready(function(){
    var idpasien = $("#idpasien<?php echo $data1['id']?>").val();
      load_data(idpasien);
    
    function load_data(idpasien){
      $.ajax({
        url:"../proses/kumrsp.php",
        method:"POST",
        data: {
          id: idpasien
        },
        success:function(data){
          $('#resep<?php echo $data1['id']?>').html(data);
        }
      });
    }
   
  });
  </script>
  <script type="text/javascript">
  $(document).ready(function(){
    var idpasien = $("#idpasien<?php echo $data1['id']?>").val();
      load_data(idpasien);
    
    function load_data(idpasien){
      $.ajax({
        url:"../proses/kumrujuk.php",
        method:"POST",
        data: {
          id: idpasien
        },
        success:function(data){
          $('#rujukan<?php echo $data1['id']?>').html(data);
        }
      });
    }
   
  });
  </script>

      
</script>
<?php } ?>
        
    