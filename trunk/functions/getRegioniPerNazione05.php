<?php
require_once('config.php');

if (isset($_GET['q'])){
	$verifica = Italia;
}
else{
	$verifica = (isset($nazioneSelezionata) ? $nazioneSelezionata : "");
}

if($verifica == Italia){
	$targetId = "provinciaLuogoLavoro";
	$controlId = "slcRegioneLuogoLavoro";
	$childId = "p=comuneLuogoLavoro";
	include 'getRegioni.php';	
	unset($targetId);
	unset($controlId);
	unset($childId);
	
}

//unset($regioneSelezionata);
unset($verifica);
?>