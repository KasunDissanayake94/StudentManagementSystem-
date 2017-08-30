var xmlHttp = createObject();



function createObject(){

	var xmlHttp;

	if (window.ActiveXObject) {
		try{
			xmlHttp = new ActiveXObject("Microsoft.XMLHTTP");
		}catch(e){
			xmlHttp = false;
		}

	}else{
		try{
			xmlHttp = new XMLHttpRequest();
		}catch(e){
			xmlHttp = false;
		}
	}

	if (!xmlHttp) {
		alert("DE:: cannot create xmlhttp object");
	}else{
		return xmlHttp;
	}
}

function check(){
	
	if(xmlHttp.readyState==0 || xmlHttp.readyState==4){

		username = encodeURIComponent(document.getElementById("user_id").value);
		xmlHttp.open("GET","../controller/userAjax.php?u_name="+ username, true);
		xmlHttp.onreadystatechange = handleServerResponse;
		xmlHttp.send(null);
	}else{
		setTimeout('check()',1000);
	}
}
function handleServerResponse(){
	if(xmlHttp.readyState == 4){
		if (xmlHttp.status == 200) {
			xmlResponse = xmlHttp.responseXML;

			xmlDocumentElement = xmlResponse.documentElement;
			
			message = xmlDocumentElement.firstChild.data;
			if(message=="incorrect username"){
				document.getElementById("uname_check").innerHTML = '<span style ="color:red" >'
			+ message + '</span>';
			}else{
				document.getElementById("uname_check").innerHTML = '<span style ="color:blue" >'
			+ message + '</span>';
			}
			
			setTimeout('check()',200);
		}else{
			alert('DE:: something went wrong! ');
		}
	}
}


