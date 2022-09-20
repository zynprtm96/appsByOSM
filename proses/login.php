<?php 
// mengaktifkan session pada php
session_start();
 
// menghubungkan php dengan koneksi database
include '../config/koneksi.php';

// menangkap data yang dikirim dari form login
$username = $_POST['username'];
$password = sha1($_POST['password']);

 
 
// menyeleksi data user dengan username dan password yang sesuai
$login = mysqli_query($konek,"select * from user where username='$username' and password='$password'");
// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($login);
 
// cek apakah username dan password di temukan pada database
if($cek > 0){
 
	$data = mysqli_fetch_assoc($login);
 
	// cek jika user login sebagai admin
	if($data['role']=="admin"){
 
		// buat session login dan username
		$_SESSION['username'] = $username;
		$_SESSION['role'] = "admin";
		// alihkan ke halaman dashboard admin
		header("location:../admin/rumah.php");
 
	// cek jika user login sebagai pegawai
	}else if($data['role']=="user"){
		// buat session login dan username
		$_SESSION['username'] = $username;
		$_SESSION['role'] = "user";
		// alihkan ke halaman dashboard pegawai
		header("location:../kar/rumah.php");
 
	
	}else{
 
		echo  "<script>alert('Username Atau Password Salah');window.location='../login.php'</script>";
     
    
		
	}	
}else{
    
	echo  "<script>alert('Username Atau Password Salah');window.location='../login.php'</script>";
     
}
 
?>