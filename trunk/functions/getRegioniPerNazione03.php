<?php
require_once('config.php');

if($_GET['q'] == Italia){
	$targetId = "provinciaStudio";
	$controlId = "slcRegioneStudio";
	$childId = "p=comuneStudio";
	include 'getRegioni.php';	
}
?>