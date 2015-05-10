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
$table = "xm_blog";
$username =  check_input(strip_tags($_POST['name']));
$nation =  check_input(strip_tags($_POST['nation']));
$work =  check_input(strip_tags($_POST['work']));
$des =  check_input(strip_tags($_POST['des']));



$sql="update ".$table." set name = '$username' , nation = '$nation', work = '$work' and description = '$des' where id = '$id' ";

mysql_query($sql);

if(mysql_affected_rows()){
	mysql_close();
	echo_message("修改成功！",13);
}else{
	echo_message("修改失败！",-1);
}

?>


