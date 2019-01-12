<?php
function ganti_kata($data,$search,$replace){
	$totalKata = strlen($data);
	for($i=0;$i<$totalKata;$i++){
		$kata = substr($data,$i,1);
		if($kata == $search){
			$kata = $replace;
		}
		echo $kata;
	}
}
ganti_kata("Sekolah","o","a");
?>