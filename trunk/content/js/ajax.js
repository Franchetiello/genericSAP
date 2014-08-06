/**
 * 
 */

function GetList(elementId, functionName, str){
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
				alert(xmlhttp.responseText);
				var res = xmlhttp.responseText;
				document.getElementById(elementId).innerHTML = res;
			}
		}
		xmlhttp.open("GET","functions/" + functionName + ".php?q=" + str,true);
		xmlhttp.send();
	}
	//document.getElementById(elementId).innerHTML = xmlhttp.xmlhttp.responseText;
	
	//$('#'+elementId).html(options);
	        
}
		
