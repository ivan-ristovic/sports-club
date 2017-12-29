<?php

	$string = file_get_contents("baza.json");
  $json_a = json_decode($string, true);

	$json_a["uplaceno"] = $_GET["uplaceno"];
	$json_data = json_encode($json_a);
	$fp = fopen('baza.json', 'w');
	fwrite($fp, $json_data);
	fclose($fp);
	
?>