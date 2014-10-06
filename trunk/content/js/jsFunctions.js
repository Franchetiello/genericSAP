/**
 *
 */

//	---------------------------------------------------------------------------------------
//	Funzioni Generali
//	---------------------------------------------------------------------------------------
function GetList(elementId, functionName, str, param) {
	var _obj = document.getElementById(elementId);
	if (str == "") {
		_obj.innerHTML = "";
		return;
	} else {
		if (window.XMLHttpRequest) {// code for IE7+, Firefox, Chrome, Opera, Safari
			xmlhttp = new XMLHttpRequest();
		} else {// code for IE6, IE5
			xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
		}

		xmlhttp.onreadystatechange = function() {
			if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
				var res = xmlhttp.responseText;
				document.getElementById(elementId).innerHTML = res;
			}
		};

		var additionalParam = "";
		if (param.length > 0) {
			additionalParam = "&" + param;
		}

		xmlhttp.open("GET", "functions/" + functionName + ".php?q=" + str + additionalParam, true);
		xmlhttp.send();
	}
}

//	---------------------------------------------------------------------------------------
//	Funzioni sapSection01.php
//	---------------------------------------------------------------------------------------
function GetRegionList(elementId, functionName, str, param) {
	if (str == '118') {
		// $("#spanRegioneNascita").show();
		// $("#regioneNascita").show();
		// $("#spanProvinciaNascita").show();
		// $("#provinciaNascita").show();
		// $("#spanComuneNascita").show();
		// $("#comuneNascita").show();
		ShowRegionList(str);

		GetList(elementId, functionName, str, param);
	} else {
		// $("#spanRegioneNascita").hide();
		// $("#regioneNascita").hide();
		// $("#spanProvinciaNascita").hide();
		// $("#provinciaNascita").hide();
		// $("#spanComuneNascita").hide();
		// $("#comuneNascita").hide();
		ShowRegionList(str);
	}
}

function ShowRegionList(str){
	if (str == '118') {
		$("#spanRegioneNascita").show();
		$("#regioneNascita").show();
		$("#spanProvinciaNascita").show();
		$("#provinciaNascita").show();
		$("#spanComuneNascita").show();
		$("#comuneNascita").show();
	} else {
		$("#spanRegioneNascita").hide();
		$("#regioneNascita").hide();
		$("#spanProvinciaNascita").hide();
		$("#provinciaNascita").hide();
		$("#spanComuneNascita").hide();
		$("#comuneNascita").hide();
	}
}
//	---------------------------------------------------------------------------------------
//	Funzioni sapSection03.php
//	---------------------------------------------------------------------------------------
function GetRegionList03(elementId, functionName, str, param) {
	if (str == '118') {
		$("#spanRegioneStudio").show();
		$("#regioneStudio").show();
		$("#spanProvinciaStudio").show();
		$("#provinciaStudio").show();
		$("#spanComuneStudio").show();
		$("#comuneStudio").show();
		$("#spanRiconosciutoInItalia").hide();
		$("#riconosciutoInItalia").hide();
		GetList(elementId, functionName, str, param);
	} else {
		$("#spanRegioneStudio").hide();
		$("#regioneStudio").hide();
		$("#spanProvinciaStudio").hide();
		$("#provinciaStudio").hide();
		$("#spanComuneStudio").hide();
		$("#comuneStudio").hide();
		$("#spanRiconosciutoInItalia").show();
		$("#riconosciutoInItalia").show();
	}
}

function SetCompletedChoice(ElementID){
	if (document.getElementById(ElementID).checked){
		$("#spanAnnoConseguimento").show();
		$("#annoConseguimento").show();
		$("#spanVotoConseguito").show();
		$("#votoConseguito").show();
		$("#spanUltimoAnnoFrequentato").hide();
		$("#ultimoAnnoFrequentato").hide();
		$("#spanAnnoFrequenzaInCorso").hide();
		$("#annoFrequenzaInCorso").hide();
	}else{
		$("#spanAnnoConseguimento").hide();
		$("#annoConseguimento").hide();
		$("#spanVotoConseguito").hide();
		$("#votoConseguito").hide();
		$("#spanUltimoAnnoFrequentato").show();
		$("#ultimoAnnoFrequentato").show();
		$("#spanAnnoFrequenzaInCorso").show();
		$("#annoFrequenzaInCorso").show();
	}
	
}

function SetHomeAddressChoice(ElementID){
	if (document.getElementById(ElementID).checked){
		$("#divDomicilio").show();
	}else{
		$("#divDomicilio").hide();
	}
}

//	---------------------------------------------------------------------------------------
//	Funzioni sapSection05.php
//	---------------------------------------------------------------------------------------
function GetRegionList05(elementId, functionName, str, param) {
	if (str == '118') {
		$("#spanRegioneLuogoLavoro").show();
		$("#regioneLuogoLavoro").show();
		$("#spanProvinciaLuogoLavoro").show();
		$("#provinciaLuogoLavoro").show();
		$("#spanComuneLuogoLavoro").show();
		$("#comuneLuogoLavoro").show();
		GetList(elementId, functionName, str, param);
	} else {
		$("#spanRegioneLuogoLavoro").hide();
		$("#regioneLuogoLavoro").hide();
		$("#spanProvinciaLuogoLavoro").hide();
		$("#provinciaLuogoLavoro").hide();
		$("#spanComuneLuogoLavoro").hide();
		$("#comuneLuogoLavoro").hide();
	}
}