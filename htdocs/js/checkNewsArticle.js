// JavaScript Document
window.onload= function (){
	document.getElementById('name').focus();
}

function checkEmpty(value,msg){ 
	if(value==null||value==''){
		msg.value = '不能为空';
		return false;
	}
	else{
		msg.value='';
		return true;
	}
}

function checkArea() {
	var areaValue = document.getElementById('area').value;
	var msg = document.getElementById('msg');
	if(checkEmpty(areaValue,msg) == false)
		return false;
	return true;

}