<?php
function dPrint(array $Array){
	foreach ($Array as $key => $value){
		printf($key."[".$value."]; ");		
	}
}
?>