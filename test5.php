<?php
function hitung($data){
	$angka = 0;
	$validasi = 0;
	for($a=1;$a<=$data;$a++){
		for($b=1;$b<=$data;$b++){
			if($b>$a){
				$angka++;
			}
		}
	}
	echo $angka;
}
hitung(6);
?>