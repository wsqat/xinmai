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
$id =  trim($_GET['aid']);
$id = intval(base64_decode($id));

$table = "xm_blog";

$sql = "delete from ".$table." where id='$id'";

mysql_query($sql);
//mysql_query($query , $db) or die(mysql_error($db));
//echo $sql;		
if(mysql_affected_rows()){
	//echo "success";
	mysql_close();
	echo_message("删除成功！",13);

}else{
	echo_message("删除失败！",-1);
}

?>


