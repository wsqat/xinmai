// JavaScript Document
window.onload= function (){
	document.getElementById('name').focus();
}

function checkEmpty(value,msg){ 
	if(value==null||value==''){
		msg.value.fontcolor('#A9A9A9');
		return false;
	}
	else{
		msg.style.borderColor = '#A9A9A9';
		oName.style.borderWidth = '1px';
		return true;
	}
}
function checkName() {
	var oName = document.getElementById('name');
	var oNameValue = oName.value;
	if(checkEmpty(oNameValue,oName) == false){
		oName.style.borderColor = 'red';
		return false;
	}
	else {
		return true;
	}
}


function checkNation(){
	var oNation = document.getElementById('nation');
	var oNationValue = oNation.value;
	if(checkEmpty(oNationValue,oNation) == false){
		oNation.style.borderColor = 'red';
		return false;
	}
	else {
		return true;
	}
}

function checkBirthPlace() {
	var oBirthPlace = document.getElementById('birthPlace');
	var oBirthPlaceValue = oBirthPlace.value;
	if(checkEmpty(oBirthPlaceValue,oBirthPlace) == false){
		oBirthPlace.style.borderColor = 'red';
		return false;
	}
	else {
		return true;
	}
}

function checkBirthdate() {
	var oBirthdate = document.getElementById('birthdate');
	var oBirthdateValue = oBirthdate.value;
	if(checkEmpty(oBirthdateValue,oBirthdate) == false){
		oBirthdate.style.borderColor = 'red';
		return false;
	}
	else {
		return true;
	}
}

function checkHeight() {
	var oHeight = document.getElementById('height');
	var oHeightValue = oHeight.value;
	if(checkEmpty(oHeightValue,oHeight) == false){
		oHeight.style.borderColor = 'red';
		return false;
	}
	else {
		return true;
	}
}

function checkFocus1() {
	var oFocus1 = document.getElementById('focus1');
	var oFocus1Value = oFocus1.value;
	if(checkEmpty(oFocus1Value,oFocus1) == false){
		oFocus1.style.borderColor = 'red';
		return false;
	}
	else {
		return true;
	}
}

function checkFocus2() {
	var oFocus2 = document.getElementById('focus2');
	var oFocus2Value = oFocus2.value;
	if(checkEmpty(oFocus2Value,oFocus2) == false){
		oFocus2.style.borderColor = 'red';
		return false;
	}
	else {
		return true;
	}
}

function checkProfession() {
	var oProfession = document.getElementById('profession');
	var oProfessionValue = oProfession.value;
	if(checkEmpty(oProfessionValue,oProfession) == false){
		oProfession.style.borderColor = 'red';
		return false;
	}
	else {
		return true;
	}
}

function checkSpeciality() {
	var oSpeciality = document.getElementById('speciality');
	var oSpecialityValue = oSpeciality.value;
	if(checkEmpty(oSpecialityValue,oSpeciality) == false){
		oSpeciality.style.borderColor = 'red';
		return false;
	}
	else {
		return true;
	}
}

function checkArea() {
	var oArea = document.getElementById('area');
	var oAreaValue = oArea.value;
	if(checkEmpty(oAreaValue,oArea) == false){
		oArea.style.borderColor = 'red';
		return false;
	}
	else {
		return true;
	}
}

function onCheck() {
	var flag1 = checkName();
	var flag2 = checkNation();
	var flag3 = checkNation();
	var flag4 = checkBirthPlace();
	var flag4 = checkBirthdate();
	var flag5 = checkHeight();
	var flag6 = checkFocus1();
	var flag7 = checkFocus2();
	var flag8 = checkProfession();
	var flag9 = checkSpeciality();
	var flag10 = checkArea();
	if((flag1 && flag2 && flag3 && flag4 && flag5 && flag6 && flag6 && flag8 && flag9 && flag10)){
		return true;
	}
	return false; 
	
}