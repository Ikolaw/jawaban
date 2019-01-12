<?php
function username($data){
	if(preg_match('/[a-z]_/', $data) && strlen($data) == 8){
		 echo "Username Sesuai";
	}else{
		echo 'Username hanya bisa menggunakan karakter kecil dan underscore "_" dan menggunakan 8 karakter';
	}
	echo "<br/>";
}
function password($data){
	if(preg_match('/[a-zA-Z0-9]\W/', $data) && strlen($data) == 8){
		echo "Password Sesuai";
	}else{
		echo "Password hanya bisa menggunakan ngka, karakter kecil, karakter besar, karakter spesial dan menggunakan 8 karakter";
	}
}

username("test_sdf");
password("Ls2jsk*l");
?>