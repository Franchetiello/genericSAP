<?php
require_once('config.php');

if($_GET['q'] == Italia){
	$targetId = "provinciaNascita";
	$controlId = "slcRegioneNascita";
	$childId = "p=comuneNascita";
	include 'getRegioni.php';	
}
?>