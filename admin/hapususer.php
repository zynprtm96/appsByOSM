<?php

include ('../config/koneksi.php');
$id=$_GET['id'];
$sql="DELETE FROM user where id='$id'";
$query = mysqli_query($konek,$sql);


if( $query ) {
    echo  " 
    
    <script src='../aset/js/sweetalert.min.js'></script>
    <script type='text/javascript'>
  setTimeout(function () {  
   swal({
    title: 'User Dihapus',
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