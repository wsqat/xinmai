// JavaScript Document
/*个人注册页面检验*/

//public 部分
/* 检验输入内容是否为空
*/

window.onload= function (){
	document.getElementById('uNum').focus();
}

function checkEmpty(value,msg){ 
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
/******************************************************************************************/
//检验手机号码
function checkPhoneNum() {
	var oNumValue = document.getElementById('uNum').value;
	var msg = document.getElementById('sNumMsg');
	//检查是否输入为空   /^13\d{5,9}$/; /^13\d{9}$/; /^15\d{9}$/;  /^159\d{8}$/; /^159\d{4,8}$/;       
	if(checkEmpty(oNumValue,msg)){
		var reg0 = /^13\d{9}$/;
		var reg1 = /^15\d{9}$/;
		var reg2 = /^18\d{9}$/;
		var reg3 = /^17\d{9}$/;
		var flag = false;
		flag = reg0.test(oNumValue) || reg1.test(oNumValue) || reg2.test(oNumValue) || reg3.test(oNumValue);
		if(!flag){
			msg.style.display='block';
			msg.value='手机号填写错误';
			return false;
		}
		else{
			msg.style.display='block';
			msg.value='';
			return true;
		}
	}
}
//检验密码 长度6--12
function checkPassword() {
	var oPasValue = document.getElementById('uPasw').value;
	var msg = document.getElementById('sPasMsg');
	msg.style.color="red";//改变提示字体颜色
	if(checkEmpty(oPasValue,msg)){
		if(oPasValue.length >= 6 && oPasValue.length <= 12){
			msg.value='';
			return true;
		}
		else {
			msg.value='密码长度不符合要求';
			return false;
		}
	}
}
//检验确认密码 //uConfirmPas sConfirmPasMsg sConfirmPasMsg
function checkConfirmPassword() {
	var oPasValue = document.getElementById('uPasw').value;
	var oPasConVlue = document.getElementById('uConfirmPas').value;
	var msg = document.getElementById('sConfirmPasMsg');
	if(checkEmpty(oPasConVlue,msg)){
		if(oPasConVlue !== oPasValue){
			msg.value='两次密码不一致';
			return false;
		}
		return true;
 	}
}
//检验邮箱 sMailMsg uEmail
function checkMail() { 
	var oEmailValue = document.getElementById('uEmail').value;
	var msg = document.getElementById('sMailMsg');
	var reg = /^\w+((-\w+)|(\.\w+))*\@[A-Za-z0-9]+((\.|-)[A-Za-z0-9]+)*\.[A-Za-z0-9]+$/;    
　	var flag = reg.test(oEmailValue); 
	if(checkEmpty(oEmailValue,msg)){
		if(!flag){
			msg.value='输入邮箱不符合要求';
			return false;
		}
		return true;
	}
}
//检测填写验证码 uConfirmNum sConMsg
function checkConfirmNum() {
	var oConfirmValue = document.getElementById('uConfirmNum').value;
	var msg = document.getElementById('sConMsg');
	if(checkEmpty(oConfirmValue,msg))
		return false;
	return true;
}
//检测同意用户协议 protocolBox
function checkProtol() {
	var oConfirmValue = document.getElementById('protocolBox').checked;
	if(!oConfirmValue)
	{
		return false;
	}
} 

//typeof(flag)=="undefined"

function checkAll() {
	var flag1 = checkPhoneNum();
	var flag2 = checkPassword();
	var flag2 = checkConfirmPassword();
	var flag2 = checkMail();
	var flag2 = checkConfirmNum();
	if((flag1 && flag2 && flag3 && flag4)){
		return true;
	}
	return false;
}




	