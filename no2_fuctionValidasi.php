<!DOCTYPE html>
<html>
<head>
	<title>Form Login</title>
</head>
<body>
<?php

function validasi($nama,$email,$password){
     if(strlen($nama) >=6){
		echo "<script> alert('Karakter Harus kurang dari 6');</script>";
		return false;
	}elseif(!filter_var($email,FILTER_VALIDATE_EMAIL)){
		echo "<script> alert('E-mail Tidak Valid');</script>";
		return false;
	}elseif(!preg_match("/^[a-zA-Z0-9]*$/",$password)){
		echo "<script> alert('Hanya huruf saja dan kurang saja');</script>";
	    return false;
	}elseif(strlen($password) >= 8){
			echo "<script> alert('karakter yang di masukkan lebih dr 8 karakter');</script>";
			return false;	
	}
 echo "Nama :".$nama."<br>";
 echo "E-mail :".$email."<br>";
 echo "Password :".$password."<br>";
}

echo validasi('hart','hart@gmail.com','hart96');
 ?>
</body>
</html>