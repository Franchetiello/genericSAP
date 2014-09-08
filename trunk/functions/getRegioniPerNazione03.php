<?php
require_once('config.php');

if (isset($_GET['q'])){
	$verifica = Italia;
}
else{
	$verifica = (isset($regioneSelezionata) ? $regioneSelezionata : "");
}


if($verifica == Italia){
	$targetId = "provinciaStudio";
	$controlId = "slcRegioneStudio";
	$childId = "p=comuneStudio";
	include 'getRegioni.php';	
}

unset($regioneSelezionata);
unset($verifica);
?>