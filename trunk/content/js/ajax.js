/**
 * 
 */

function GetList(elementId, functionName, str, param){
	var _obj = document.getElementById(elementId);
	if (str=="") {
		_obj.innerHTML="";
		return;
	} else { 
		if (window.XMLHttpRequest) { // code for IE7+, Firefox, Chrome, Opera, Safari
			xmlhttp=new XMLHttpRequest();
		} else { // code for IE6, IE5
			xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
		}
		
		xmlhttp.onreadystatechange=function() {
			if (xmlhttp.readyState==4 && xmlhttp.status==200) {
				var res = xmlhttp.responseText;
				document.getElementById(elementId).innerHTML = res;
			}
		}
		
		var additionalParam = "";
		if (param.length > 0 ){ additionalParam = "&" + param; }
		
		xmlhttp.open("GET","functions/" + functionName + ".php?q=" + str + additionalParam,true);
		xmlhttp.send();
	}
}

function GetRegionList(elementId, functionName, str, param){
	if (str == '118'){
		$("#spanRegioneNascita").show();
		$("#regioneNascita").show();		
		$("#spanProvinciaNascita").show();
		$("#provinciaNascita").show();
		$("#spanComuneNascita").show();
		$("#comuneNascita").show();
		
		GetList(elementId, functionName, str, param);
	}else{
		$("#spanRegioneNascita").hide();
		$("#regioneNascita").hide();		
		$("#spanProvinciaNascita").hide();
		$("#provinciaNascita").hide();
		$("#spanComuneNascita").hide();
		$("#comuneNascita").hide();
	}
}
		
