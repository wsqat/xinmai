// JavaScript Document
//public 部分
/* 检验输入内容是否为空
*/
window.onload= function (){
	document.getElementById('bossName').focus();
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
//checkName
function checkName() {
	//alert('hehe');
	var oNameValue = document.getElementById('bossName').value;
	var msg = document.getElementById('sNameMsg');
	if(checkEmpty(oNameValue,msg))
		return true;

}

//检验手机号码
function checkPhoneNum() {
	var oNumValue = document.getElementById('bNum').value;
	var msg = document.getElementById('sPhoneMsg');
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
	var oPasValue = document.getElementById('bPasw').value;
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
//检验确认密码 
function checkConfirmPassword() {
	var oPasValue = document.getElementById('bPasw').value;
	var oPasConVlue = document.getElementById('bConPasw').value;
	var msg = document.getElementById('sConfirmMsg');
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
	var oEmailValue = document.getElementById('bMail').value;
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
	var oConfirmValue = document.getElementById('bConNum').value;
	var msg = document.getElementById('sConfirmNumMsg');
	if(checkEmpty(oConfirmValue,msg))
		return false;
	return true;
}

//check 商家名称
function checkBName() {
	var oNameValue = document.getElementById('_businessName').value;
	var msg = document.getElementById('sBoss_nameMsg');
	if(checkEmpty(oNameValue,msg))
		return true;
}
function checkTName() {
	var oNameValue = document.getElementById('bTask').value;
	var msg = document.getElementById('sBoss_taskMsg');
	if(checkEmpty(oNameValue,msg))
		return true;
}

function checkAll() {
	var flag1 = checkPhoneNum();
	var flag2 = checkPassword();
	var flag3 = checkConfirmPassword();
	var flag4 = checkMail();
	var flag5 = checkConfirmNum();
	var flag6 = checkName();
	var flag7 = checkBName();
	var flag8 = checkTName();
	if((flag1 && flag2 && flag3 && flag4 && flag5 && flag6 && flag6 && flag8)){
		return true;
	}
	return false;
}