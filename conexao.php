<?php
	$host  ="localhost";
	$user ="root";
	$senha ="";
	$bancodedados="oficinacordeiro";
                
	$mysqli = new mysqli($host,$user,$senha,$bancodedados);
	if (empty($mysqli)) {
	    echo "erro";
	}
?>

