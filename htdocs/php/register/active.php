<?php
session_start();
error_reporting(0);
?>
<!DOCTYPE html>
<html lang="zh-cn">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <!-- <meta http-equiv="refresh" content="2; url='../../login.php' "> -->
    <title>新麦网</title>
    <link rel="icon" type="image/x-icon" href="../../images/icon/logo2.png">
    <link href="../../css/bootstrap.min.css" rel="stylesheet">
    <link href="../../css/index.css" rel="stylesheet">
    <link href="../../css/style.css" rel="stylesheet" type="text/css">

</head>
<body>
<?php
include_once "../header.php";
?>


<!-- Body Main -->
<div class="container">

  
 <form class="form-horizontal col-sm-4 col-sm-offset-4" role="form" id="forget" action="forget.php">

<?php
include_once("../config.php");

$verify = stripslashes(trim($_GET['verify']));
$new_verify = $verify;
if(substr($new_verify,0,1)==1)
    $usertable="xm_supplier";
else
    $usertable="xm_customer";

$verify = substr($verify, 1);

$nowtime = time();
//echo $verify."<br />";
$query = mysql_query("select id,token_exptime from  ".$usertable." where status='0' and token ='$verify'");
$row = mysql_fetch_array($query);
if($row){
	//echo $verify."sss<br />";
	if($nowtime>$row['token_exptime']){ //30min
		//echo $verify."aaa<br />";
		$msg = '<center><h3>您的激活有效期已过，请登录您的帐号重新发送激活邮件.</h3></center>';
	}else{
		//echo $verify."bbb<br />";
		mysql_query("update ".$usertable." set status=1 where id=".$row['id']);
		//echo "1激活成功！";
		if(mysql_affected_rows($link)!=1) die(0);
		//echo "2激活成功！";
		$msg = '<center><h3>激活成功！2s后跳转至登录页面</h3></center>';

		//echo "3激活成功！";
	}
}else{
	$msg = '<center><h3>error.</h3></center>';	
}

echo $msg;
?>
</form>
</div>
</body>
</html>
