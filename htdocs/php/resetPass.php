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
    <title>新麦网</title>
    <!-- <link rel="icon" type="image/x-icon" href="images/favicon.ico">
    -->
    <link rel="icon" type="image/x-icon" href="../images/icon/logo2.png">
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <!-- <link href="css/bootstrap.min.css" rel="stylesheet">
    -->
    <link href="../css/index.css" rel="stylesheet">
    <link href="../css/style.css" rel="stylesheet" type="text/css">

    
</head>
<body>
<!-- Head Navbar -->
<nav class="navbar navbar-default navbar-fixed-top navbar-inverse" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                                data-target="#bs-example-navbar-collapse-6">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand pull-left" id="brand" href="index.php">&nbsp;&nbsp;&nbsp;&nbsp;</a>

            <a class="navbar-brand" href="index.php">
                <img alt="新麦网" style="width:32px;height:32px;" src="images/icon/logo2.png"></a>
            <a class="navbar-brand pull-left" id="brand" href="index.php">xin mai wang</a>
            <a class="navbar-brand pull-left" id="brand" href="index.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>
        </div>
        <div class="collapse navbar-collapse pull-right" id="bs-example-navbar-collapse-6">
            <ul class="nav navbar-nav " id="nav">
                <?php
                    if(!isset($_SESSION)){  session_start(); }  
                    if(isset($_SESSION["username"])&&$_SESSION["login"]){
                        echo "<li><a href='zone/index.php'>".$_SESSION["username"]."</a></li>";
                        echo "<li><a href='../logout.php'>退出</a></li>";
                    }else{
                ?>
                <li>
                    <a href="../login.php">[请登录]</a>
                </li>
                <li>
                    <a href="../reg.php">注册</a>
                </li>
                <?php
                    }
                ?>
                <li>
                    <a href="shop/cart.php">购物车</a>
                </li>
                <li>
                    <a href="../reg.php">我要开店</a>
                </li>
                <li>
                    <a href="../contact.php">
                        联系客服
                        <span class="caret"></span>
                    </a>
                    <ul>
                        <li>
                            <a href="../contact.php">&nbsp;&nbsp;在线客服</a>
                        </li>
                        <li>
                            <a href="../contact.php">&nbsp;&nbsp;投诉中心</a>
                        </li>
                        <li>
                            <a href="../contact.php">&nbsp;&nbsp;客服邮箱</a>
                        </li>
                    </ul>
                </li>

            </ul>
        </div>
    </div>
</nav>
<!-- Body Main -->
<div class="container">
    <h2 style="text-align:center">重置密码</h2>

    <form class="form-horizontal" role="form" action="dealResetPassForm.php" method="post">
<?php
include_once("config.php");
$verify = stripslashes(trim($_GET['token']));
 
$new_verify = $verify;
if(substr($new_verify,0,1)==1){////0为用户,1为商家{
    $usertable="xm_supplier";
    $power =1;
}
else{
    $usertable="xm_customer";
    $power =0;
}

$verify = substr($verify, 1);


$email = stripslashes(trim($_GET['email']));
$sql = "select * from ".$usertable." where email='$email'";


$query = mysql_query($sql);
$row = mysql_fetch_array($query);
if($row){
	$mt = md5($row['id'].$row['username'].$row['password']);
	if($mt==$verify){
		if(time()-$row['getpasstime']>24*60*60){
			$msg = '<center><h3>该链接已过期！</h3></center>';
		}else{


			//重置密码...
			// $msg = '<center><h3>请重新设置密码，显示重置密码表单。</h3></center>';
   //          $url = "resetPassForm.php?email=".$email."&power=".$power." ";  
   //          echo "<script language='javascript' 
   //          type='text/javascript'>";  
   //          //echo "alert('重置密码');window.location.href='$url'";  
   //          echo "window.location.href='$url'";  
   //          echo "</script>"; 
?>

        <div class="form-group">
            
            <label for="email" class="col-sm-4 control-label">邮箱</label>
    
            <!-- <div class="col-sm-4">
                <input name="password" type="password" class="form-control" id="ypassword" placeholder="请输入邮箱">
            </div> -->

            <div class="col-sm-4">
                <input type="text" class="form-control" name="email" id="email" placeholder="请输入邮箱" value="<?php echo $email;?>">
            </div>
            <input type="hidden" name="usertable" value="<?php echo $usertable;?>">
        </div>
        <div class="form-group">
            <label for="password1" class="col-sm-4 control-label">新密码</label>

            <div class="col-sm-4">
                <input type="password" name="password1" autofocus="autofocus" class="form-control" id="password1" placeholder="请输入新密码">
            </div>
        </div>
        <div class="form-group">
            <label for="password2" class="col-sm-4 control-label">确认新密码</label>

            <div class="col-sm-4">
                <input name="password2" type="password" class="form-control" id="password2" placeholder="请再次输入新密码">
            </div>
        </div>
        <p style="display:none" id="error" class="text-danger col-sm-offset-4">
            &nbsp;&nbsp;密码由大小写字母和数字组成，共6-20位，两次密码必一致</p>

        <div class="form-group">
            <div class="col-sm-offset-4 col-sm-4">
                <button type="submit" id="submit" class="btn btn-primary">确认修改</button>
            </div>
        </div>
    </form>
</div>
<?php
        }
    }else{
        $msg =  '<center><h3>无效的链接<br/>'.$mt.'<br/>'.$verify."</center></h3>";
    }
}else{
    $msg =  '<center><h3>错误的链接！</center></h3>'; 
}
echo $msg;
?>


<div style="margin-top:224px;"></div>
<?php
    include_once "footer.php";
?>
</body>
</html>