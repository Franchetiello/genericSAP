<?php

if (!isset($menuIndex)) {$menuIndex = 0;}

if (isset($menu)) {
	if (isset($_POST['submit'])) {
		switch ($_POST['submit']) {
			case 'forward' :
				header("Location: ".$menu[$menuIndex + 1]['page']);
				break;
			case 'backward' :
				header("Location: ".$menu[$menuIndex - 1]['page']);
				break;
			case 'cancel' :
				header("Location: ".$menu[0]['page']);
				break;
			case 'save' :
				
				break;
			default :
				break;
		}
	}
}

?>