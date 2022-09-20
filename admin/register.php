<?php
include ('../config/koneksi.php');
$username = $_POST['username'];
$password = sha1($_POST['password']);
$nama = $_POST['nama'];
$nohp = $_POST['nohp'];
$sql="INSERT INTO user(username, password,nama,nohp,role)Values('$username', '$password', '$nama', '$nohp','user')";
$query = mysqli_query($konek,$sql);


if( $query ) {
    echo  " 
    
    <script src='../aset/js/sweetalert.min.js'></script>
    <script type='text/javascript'>
  setTimeout(function () {  
   swal({
    title: 'User Berhasil Ditambahkan',
    text: 'Sukses!',
    icon: 'success',
    button: 'OK!',
    
    timer: 8000,
    showConfirmButton: true
   });  
  },10); 
  window.setTimeout(function(){ 
   window.location.replace('../admin/user.php');
  } ,2000); 
 </script>
   ";
    
    
    
    
       
    } else {
        echo  "<script>alert('Gagal');window.location='../admin/user.php'</script>";
        
    }


?>