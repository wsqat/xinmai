<?php
include_once "conn.php";
include_once "../php/function.php";
error_reporting(0);
if(!isset($_SESSION)){ session_start(); };
if($_SESSION["user_role"]!=10)
{
    //login;
    header("location:../webadmin/index.php");
}
//print_r($_POST);
$id = intval(trim($_POST['id']));
$table = "xm_product";
$username =  check_input(strip_tags($_POST['name']));
$sprice =  check_input(strip_tags($_POST['sprice']));
$num =  check_input(strip_tags($_POST['num']));
$size =  check_input(strip_tags($_POST['size']));
$des =  check_input(strip_tags($_POST['des']));



$sql="update ".$table." set title = '$username' , sprice = '$sprice', num = '$num', size = '$size' , description = '$des' where id = '$id' ";

mysql_query($sql);

//echo $sql;
if(mysql_affected_rows()){
	mysql_close();
	//echo "success";
	echo_message("修改成功！",14);
}else{
	//echo "fail";
	echo_message("修改失败！",-1);
}

?>


