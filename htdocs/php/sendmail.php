<?php
include_once("config.php");
include_once("function.php");

$email = stripslashes(trim($_POST['mail']));
$power = stripslashes(trim($_POST['power']));
//$email = injectChk($email);
//echo $email;	
//print_r($_POST);
$user_table="supplier";
if($power==1)//1为用户,2位商家
	$user_table="xm_customer";
	
$sql = "select id,username,password from  ".$user_table." where email='$email'";
$query = mysql_query($sql);

$num = mysql_num_rows($query);
if($num==0){//该邮箱尚未注册！
//	echo '没有注册';
	//echo 'noreg';
	echo_message("该邮箱尚未注册！",1);
	exit;	
}else{
	//echo "2";
	$row = mysql_fetch_array($query);
	$getpasstime = time();
	$uid = $row['id'];
	$token = md5($uid.$row['username'].$row['password']);
	if($power==2)	//1为用户,2位商家
        $token = "1".$token;
    else
        $token = "0".$token;
	$url = "http://www.xinmaicn.com/php/resetPass.php?email=".$email." 
	&token=".$token;//构造URL
	//$url = "reset.php?email=".$email."&token=".$token;
	$time = date('Y-m-d H:i');

	$result = sendmail($time,$email,$url);
	//echo "3";
	if($result==1){//邮件发送成功
		//echo "4";
		$msg = '系统已向您的邮箱发送了一封邮件<br/>请登录到您的邮箱及时重置您的密码！';
		//更新数据发送时间
		mysql_query("update ".$user_table." set getpasstime ='$getpasstime' where id='$uid '");
	}else{
		//echo "null".$email;
		$msg = $result;
	}
	echo $msg;
}

function sendmail($time,$email,$url){
	include_once("smtp.class.php");	

	$smtpserver = "smtp.mxhichina.com"; //SMTP服务器
    $smtpserverport = 25; //SMTP服务器端口
    $smtpusermail = "postmaster@xinmaicn.com"; //SMTP服务器的用户邮箱
    $smtpuser = "postmaster@xinmaicn.com"; //SMTP服务器的用户帐号
    $smtppass = "XINmaicn2015"; //SMTP服务器的用户密码

    $smtp = new Smtp($smtpserver, $smtpserverport, true, $smtpuser, $smtppass); //这里面的一个true是表示使用身份验证,否则不使用身份验证.
    $emailtype = "HTML"; //信件类型，文本:text；网页：HTML
    $smtpemailto = $email;
    $smtpemailfrom = $smtpusermail;
    $emailsubject = "xinmaicn.com-找回密码";
    $emailsubject = "xinmaicn.com - 找回密码";
    $emailbody = "亲爱的".$email."：<br/>您在".$time."提交了找回密码请求。请点击下面的链接重置密码（按钮24小时内有效）。<br/><a href='".$url."' target='_blank'>".$url."</a><br/>如果以上链接无法点击，请将它复制到你的浏览器地址栏中进入访问。<br/>如果您没有提交找回密码请求，请忽略此邮件。";
    $rs = $smtp->sendmail($smtpemailto, $smtpemailfrom, $emailsubject, $emailbody, $emailtype);
	return $rs;
}


?>