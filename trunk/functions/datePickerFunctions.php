<?php
function EnableDatePicker($datePickerArray){
	echo "<script>";
	echo "	\$(function(){";
	for($i = 0; $i < count($datePickerArray) ; $i++){
		echo "		$('#div" . ucfirst($datePickerArray[$i]) . "').datetimepicker();";
	}
	echo "	});";
	echo "</script>";
}
?>