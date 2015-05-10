window.onload= function (){
	document.getElementById('id_mail').focus();
}

function checkEmpty(value,msg){ 
	alert('弹出来');
	if(value==null||value==''){
		msg.style.display='block';
		msg.value='不能为空';
		return false;
	}
	else{
		msg.style.display='block';
		msg.value='';
		return true;
	}
}

//
function checkPassword() {
	alert('弹出来2323');
	var oPasValue = document.getElementById('id_pass').value;
	var msg = document.getElementById('sPassMsg');
	if(checkEmpty(oPasValue,msg) == true){
		return true;
	}
}

function checkAll() {
	var flag1 = checkMail();
	var flag2 = checkPassword();
	if(flag1 && flag2)
		return true;
	return false;
}