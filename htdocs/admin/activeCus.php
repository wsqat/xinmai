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
$id =  trim($_GET['stateid']);
$id = intval(base64_decode($id));

$s =  trim($_GET['s']);
$s = intval($s);
if($s==1)
  $table = "xm_supplier";
else
  $table = "xm_customer";


//$sql = "delete from ".$table." where id='$id'";
$sql="update ".$table." set status =1 where id = '".$id."' ";

mysql_query($sql);
//mysql_query($query , $db) or die(mysql_error($db));
//echo $sql;		
if(mysql_affected_rows()){
	//echo "success";
	mysql_close();
	if($s==1)
		echo_message("激活成功！",12);
	else
		echo_message("激活成功！",11);
}else{
	//echo "failed";
	echo_message("激活失败！",-1);
}

?>


