<?php
	if(!isset($_SESSION)){  
		session_start();  
		} 
	if($_SESSION["adminlogin"]!=true)
		{
			header("location:../index.php");
			die("û�е�½�أ�");
		}
		

	include("../admin/conn.php");
	$user_role='xm_admin';
	$query="select * from ".$user_role." where username=\"".$_SESSION["user_name"]."\" AND password=md5(\"".$_POST["passwd"]."\")";
	$result=@mysql_query($query) or die("�����ˣ�����ϵ����123����");
	$no=mysql_num_rows($result);
	if(!$no)
		{
			header("location:../webadmin/index.php");
			die("ԭʼ�������");
			}
		else
		{
			$query="update ".$user_role." set password=md5(\"".$_POST["passwd1"]."\") where username=\"".$_SESSION["user_name"]."\"";
			$result=@mysql_query($query) or die("�����ˣ�����ϵ������");
			header("location:../webadmin/index.php");
			}		
?>

