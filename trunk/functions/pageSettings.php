<?php

$lang="it";

// jQuery
$jqueryMigratePath="assets/plugins/jquery-migrate-1.2.1.min.js";
$jqueryPath="assets/plugins/jquery-1.10.2.min.js";
$jqueryBxsliderPath="assets/plugins/bxslider/jquery.bxslider.js";

// Bootstrap
$bootstrapPath = "assets/plugins/bootstrap/css/bootstrap.min.css";
$jsBootstrapPath="assets/plugins/bootstrap/js/bootstrap.min.js";

// BxSlider
$bxSliderPath="assets/plugins/bxslider/jquery.bxslider.css";

// Fancybox
$fancyboxPath="assets/plugins/fancybox/source/jquery.fancybox.css";
$jsFancyboxPath="assets/plugins/fancybox/source/jquery.fancybox.pack.js";

// Font Awesome
$fontAwesomePath="assets/plugins/font-awesome/css/font-awesome.min.css";

// Revolution Slider
$rsStylePath="assets/plugins/revolution_slider/css/rs-style.css";
$settingsPath="assets/plugins/revolution_slider/rs-plugin/css/settings.css";
$jqueryThemepunchPath="assets/plugins/revolution_slider/rs-plugin/js/jquery.themepunch.plugins.min.js";
$jqueryThemepunchRevolutionPath="assets/plugins/revolution_slider/rs-plugin/js/jquery.themepunch.revolution.min.js";



$styleMetronicPath="assets/css/style-metronic.css";
$stylePath="assets/css/style.css";
$styleResponsivePath="assets/css/style-responsive.css";
$themePath="assets/css/themes/blue.css";

$styleComponentsPath="assets/css/components.css";
$stylePluginsPath="assets/css/plugins.css";

$jsBackToTopPath="assets/plugins/back-to-top.js";    
 
$jsHoverDropdown="assets/plugins/hover-dropdown.js";

$jsIE9orLesser="assets/plugins/respond.min.js";  
 
$jsAppPath="assets/scripts/app.js";
$jsIndexPath="assets/scripts/index.js";

$cssAppPath = "content/css/sapEBTT.css";

function htmlDeclaration(){
	global $lang;
	echo "<!--[if lt IE 9]>	<html lang=\"".$lang."\" class=\"ie8\"> <![endif]-->";
	echo "<!--[if IE 9]> <html lang=\"".$lang."\" class=\"ie9\"> <![endif]-->"; 
	echo "<!--[if !IE]><!--> <html lang=\"".$lang."\"> <!--<![endif]-->";
}

function headDeclaration($PageTitle){
	global $fontAwesomePath, $bootstrapPath, $fancyboxPath, $rsStylePath, $settingsPath, $bxSliderPath, $styleMetronicPath, $stylePath, $styleResponsivePath, $themePath, $cssAppPath, $styleComponentsPath, $stylePluginsPath;
	
	echo "<meta charset=\"ISO-8859-1\">";
	echo "<title>".$PageTitle."</title>";

	echo "<link href=\"" . $fontAwesomePath . "\" rel=\"stylesheet\" type=\"text/css\"/>";
	echo "<link href=\"" . $bootstrapPath . "\" rel=\"stylesheet\" type=\"text/css\"/>";
   
	echo "<link href=\"" . $fancyboxPath . "\" rel=\"stylesheet\" type=\"text/css\"/>";              
	echo "<link href=\"" . $rsStylePath . "\" rel=\"stylesheet\" type=\"text/css\"/>";
	echo "<link href=\"" . $settingsPath . "\" rel=\"stylesheet\" type=\"text/css\"/>"; 
	echo "<link href=\"" . $bxSliderPath . "\" rel=\"stylesheet\" type=\"text/css\"/>";                
                         
	echo "<link href=\"" . $styleMetronicPath . "\" rel=\"stylesheet\" type=\"text/css\"/>";
	echo "<link href=\"" . $stylePath . "\" rel=\"stylesheet\" type=\"text/css\"/>";
	echo "<link href=\"" . $styleResponsivePath . "\" rel=\"stylesheet\" type=\"text/css\"/>";
	echo "<link href=\"" . $themePath . "\" rel=\"stylesheet\" type=\"text/css\" id=\"style_color\"/>";
	
	echo "<link href=\"" . $cssAppPath . "\" rel=\"stylesheet\" type=\"text/css\" id=\"style_color\"/>";
	
	echo "<link href=\"" . $styleComponentsPath . "\" rel=\"stylesheet\" type=\"text/css\" id=\"style_color\"/>";
	echo "<link href=\"" . $stylePluginsPath . "\" rel=\"stylesheet\" type=\"text/css\" id=\"style_color\"/>";
}

function jsSection(){
	global $jqueryMigratePath, $jsBootstrapPath, $jsBackToTopPath, $jsFancyboxPath, $jsHoverDropdown, $jqueryThemepunchPath, $jqueryThemepunchRevolutionPath, $jsIE9orLesser, $jqueryPath, $jqueryBxsliderPath, $jsAppPath, $jsIndexPath;

	echo "<script src=\"" . $jqueryPath . "\" type=\"text/javascript\"></script>";
	echo "<script src=\"" . $jsBootstrapPath . "\" type=\"text/javascript\"></script>";
	echo "<script src=\"" . $jqueryMigratePath . "\" type=\"text/javascript\"></script>";
	echo "<script src=\"" . $jsBackToTopPath . "\" type=\"text/javascript\"></script>";
	
	echo "<script src=\"" . $jsFancyboxPath . "\" type=\"text/javascript\"></script>";
	echo "<script src=\"" . $jsHoverDropdown . "\" type=\"text/javascript\"></script>";
	echo "<script src=\"" . $jqueryThemepunchPath . "\" type=\"text/javascript\"></script>";
	echo "<script src=\"" . $jqueryThemepunchRevolutionPath . "\" type=\"text/javascript\"></script>";
	
	echo "<!--[if lt IE 9]><script src=\"" . $jsIE9orLesser . "\" type=\"text/javascript\"></script><![endif]-->";
	
	echo "<script src=\"" . $jqueryBxsliderPath . "\" type=\"text/javascript\"></script>";
	echo "<script src=\"" . $jsAppPath . "\" type=\"text/javascript\"></script>";
	echo "<script src=\"" . $jsIndexPath . "\" type=\"text/javascript\"></script>";

	echo "<script src=\"content/js/jsFunctions.js\" type=\"text/javascript\"></script>";
	
	echo "<script type=\"text/javascript\">";
	echo "	jQuery(document).ready(function() {";
	echo "		App.init();"; 
	echo "		App.initBxSlider();";
	echo "		Index.initRevolutionSlider();";
	echo "	});";
	echo "</script>";
} 

?>