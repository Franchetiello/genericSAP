<?php
require_once('config.php');

if (isset($_GET['q'])){
	$verifica = Italia;
}
else{
	$verifica = (isset($nazioneSelezionata) ? $nazioneSelezionata : "");
}

if($verifica == Italia){
	$targetId = "provinciaNascita";
	$controlId = "slcRegioneNascita";
	$childId = "p=comuneNascita";
	include 'getRegioni.php';	
}

//unset($regioneSelezionata);
unset($verifica);
?>