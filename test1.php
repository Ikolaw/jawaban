<?php

function get_biodata(){
	$hobby = ["bola","memasak"];

	$school = [];    
	$school[0]="Highschool";    
	$school[1]="University";
	
	$skills = new ArrayObject();
	$skills['0'] = 'sip';
	$skills['1'] = 'bisa';

	$biodata = [
		"name"=>"Rizko",
		"address"=>"Jakarta",
		"hobby"=>$hobby,
		"is_maried"=>false,
		"school"=>(object) $school,
		"Skills"=>$skills,
	];
	return $biodata;
}

echo json_encode(get_biodata());

?>