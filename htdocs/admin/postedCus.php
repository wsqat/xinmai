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
$s = intval(trim($_POST['supplier']));
if($s==1)
  $table = "xm_supplier";
else
  $table = "xm_customer";

$username =  check_input(strip_tags($_POST['username']));
$email =  check_input(strip_tags($_POST['email']));
$phone =  check_input(strip_tags($_POST['phone']));


$sql="update ".$table." set username = '$username' , email = '$email',phone = '$phone' where id = '$id' ";

mysql_query($sql);
//mysql_query($query , $db) or die(mysql_error($db));
//echo $sql;		
if(mysql_affected_rows()){
	//echo "success";
	mysql_close();
	if($s==1)
		echo_message("修改成功！",12);
	else
		echo_message("修改成功！",11);
}else{
	//echo "failed";
		echo_message("修改失败！",-1);
	
}

?>


