<?php
function tampilkan_persegi($data){
	$validasi1 = 1;
	$angkaValidasi = $data / 2 + 0.5;
	for($a=1;$a <= $data;$a++){
		$validasi2 = 1;
		for($b=1;$b <= $data;$b++){
			if($validasi1 == 1){
				echo "*&nbsp;&nbsp;&nbsp";
			}else{
				if($validasi2 == 1){
					echo "*&nbsp;&nbsp;&nbsp";
				}else{
					echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
				}
			}
			$validasi2++;
			if($validasi2 == $angkaValidasi){
				$validasi2 = 1;
			}
		}
		$validasi1++;
		if($validasi1 == $angkaValidasi){
			$validasi1 = 1;
		}
		echo "<br/>";
	}
}
tampilkan_persegi(7);
?>