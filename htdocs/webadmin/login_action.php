<?php
	header("Content-type: text/html; charset=utf8");
	include("../admin/conn.php");
	$user_role='xm_admin';
	$query="select * from ".$user_role." where username=\"".$_POST["user_name"]."\" AND password=md5(\"".$_POST["user_password"]."\")";
	$result=@mysql_query($query) or die("出错了，请联系管理员！！");
	$no=mysql_num_rows($result);
	//session_start();
	if(!isset($_SESSION)){  
		session_start();  
		}  
		if($no)
		{
			//login;
			$_SESSION["adminlogin"]=true;
			$_SESSION["user_name"]=trim($_POST["user_name"]);

			$query="select * from ".$user_role." where username=\"".$_SESSION["user_name"]."\"";
			$result=@mysql_query($query) or die("出错了，请联系管理员");
			$row=mysql_fetch_array($result);
			//update user_role set u_count='1' where user_name='admin'
			$count = $row["u_count"]+1;
			$addsql="update ".$user_role." set u_count=".$count." where username=\"".$_SESSION["user_name"]."\"";
		    mysql_query($addsql, $db) or die(mysql_error($db));
			
			//$user_role=$row["user_role"];
			$user_id=$row["id"];
			// //获取院校信息
			// $user_sch_id=$row["u_yxdm"];
			// //获取地区信息
			// $user_dsdm=$row["u_dsdm"];
			// //获取上次登录时间
			//$_SESSION["last_login"]=$row["last_login_date"];

			// $u_sh=$row["u_sh"];
			// $u_fb=$row["u_fb"];

			
			//获取上次登录时间
			$_SESSION["last_login"]=$row["last_login_date"];

			//更新登录时间
			$last_login = date('Y-m-d H:i:s',time());
			$updsql="update ".$user_role." set last_login_date='$last_login' where username=\"".$_SESSION["user_name"]."\"";
		    mysql_query($updsql, $db) or die(mysql_error($db));

			$_SESSION["user_role"]=10;
			$_SESSION["user_id"]=$user_id;
			$_SESSION["u_count"]=$count;//登录次数
			//$_SESSION["user_sch_id"]=$user_sch_id;
			//$_SESSION["user_dsdm"]=$user_dsdm;
			//$_SESSION["u_fb"]=$u_fb;
			//$_SESSION["u_sh"]=$u_sh;

			//print_r($_SESSION);

			//header("location:index.php");
			echo "<script language='javascript' type='text/javascript'>";      		
    		echo "window.location.href='index.php'";  
    		echo "</script>"; 

			}
		else
		{
			$_SESSION["adminlogin"]=false;
			//echo "passwod  error";
			//header("location:index.php");
			echo "<script language='javascript' type='text/javascript'>";  
    		echo "alert('Wrong password！');";  
    		echo "window.location.href='index.php'";  
    		echo "</script>"; 
		}
	
	
?>