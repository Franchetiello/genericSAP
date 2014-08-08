<?php
require_once('config.php');

if($_GET['q'] == Italia){
	$targetId = "provinciaNascita";
	$childId = "p=comuneNascita";
	include 'getRegioni.php';	
}
?>