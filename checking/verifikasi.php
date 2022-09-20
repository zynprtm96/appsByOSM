<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    
	<style>
        body{
	margin: 0;
	padding: 0;
	font-family: 'Open Sans', sans-serif;
	background: linear-gradient(120deg,#2980b9,#8e44ad);
	height: 100vh;
	overflow: hidden;
    
}
.center{
	position: absolute;
	top: 50%;
	left: 50%;
	transform: translate(-50%,-50%);
	width: 400px;
	background: white;
	border-radius: 10px;
}
.center h1{
	text-align: center;
	padding: 0 0 20px 0;
	border-bottom: 1px solid silver;
}
.center form{
	padding: 0 40px;
	box-sizing: border-box;
}
form .txt_field{
	position: relative;
	border-bottom: 2px solid #adadad;
	margin: 30px 0;

}
.txt_field input{
	width: 100%;
	padding: 0 5px;
	height: 40px;
	font-size: 16px;
	border: none;
	background: none;
	outline: none;
}
.txt_field label{
	position: absolute;
	top: 50%;
	left: 5px;
	color: #adadad;
	transform: translateY(-50%);
	font-size: 16px;
	pointer-events: none;
	transition: .5s;
}
.txt_field span::before{
	content: "";
	position: absolute;
	top: 40px;
	left: 0;
	width: 0px;
	height: 2px;
	background: #2691d9;
	transition: .5s;

}
.txt_field input:focus ~ label,
.txt_field input:valid ~ label{
	top: -5px;
	color: #2691d9 ;

}
.txt_field input:focus ~ span::before,
.txt_field input:valid ~ span::before{
	width: 100%;
}
.pass{
	margin: -5px 0 20px 5px;
	color: #a6a6a6;
	cursor: pointer;
}
.pass:hover{
	text-decoration: underline;
}
input[type="submit"]{
	width: 100%;
	height: 50px;
	border: 1px solid;
	background: #2691d9;
	border-radius: 25px;
	font-size: 18px;
	color: #e9f4fb;
	font-weight: 700;
	cursor: pointer;
	outline: none;
}
input[type="submit"]:hover{
	border-color: #2691d9;
	transition: .5s;

}
.signup_link{
	margin: 30px 0;
	text-align: center;
	font-size: 16px;
	color: #666666;

}
.signup_link a{
	color: #2691d9;
	text-decoration: none;
}
.signup_link a:hover{
	text-decoration: underline;
}

.masukan {
    position: relative;
    margin: 1rem 0;
    
  }
  
  input {
    border: none;
    outline: none;
    padding: 0.75rem;
    font-size: 1rem;
    width: 100%;
  }
 
  
  .overflow-hidden {
    overflow: hidden;
  }
  .effect-5 {
    border-bottom: 2px solid #ccc;
    padding-left: 0;
  }
  
  .effect-5 + label {
    position: absolute;
    top: 50%;
    left: 0;
    transform: translateY(-50%);
    color: #ccc;
    transition: 0.5s ease-in-out;
  }
  
  .effect-5:focus {
    border-color: #287ae6;
  }
  .effect-5:readonly {
    border-color: #287ae6;
  }
  
  .effect-5:focus + label,
  .effect-5:not(:placeholder-shown) + label {
    top: 0;
    transition: 0.3s;
    background-color: #fff;
    color: #287ae6;
  }
  
    </style>
	<title>Verifikasi</title>
</head>
<body  >
<?php   
include ('../config/koneksi.php');
 ob_start();  

 system('ipconfig /all');  

   $mycom=ob_get_contents();  

   ob_clean();  
   $findme = "Physical";  

 $pmac = strpos($mycom, $findme);  

 $mac=substr($mycom,($pmac+36),17);  
 $user= $mac;

$serial=md5($mac);
$update = "update verifikasi set kode='$serial' where id='1'";
$query= mysqli_query($konek,$update);

?>


    
	<div class="center">
    
		<h1>Verifikasi Lisensi</h1>
        <p style="text-align: center;">Harap Hubungi Developer Untuk Mendapatkan Kode Verifikasi</p>
		<form action="inputverif.php" method="POST">
        <br>
        <br>
            <div class="masukan">
                            <input type="text" id="effect5" class="effect-5" autocomplete="off" readonly placeholder=" " name="kode"  value="<?php echo $user;?>"/>
                            <label for="effect5">ID USER</label>
                          </div>
                          <div class="masukan">
                            <input type="text" id="effect5" class="effect-5" autocomplete="off" placeholder=" "  name="serial"/>
                            <label for="effect5">Kode Verifikasi</label>
                          </div>
			<br><br>
			<input type="submit" value="Verifikasi" name="">
			<br><br>
		</form>
	</div>
	
</body>
</html>