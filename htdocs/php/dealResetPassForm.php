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

  
 <form class="form-horizontal col-sm-4 col-sm-offset-4" role="form" id="forget" action="forget.php">

<?php
include_once("config.php");
if(!empty($_POST)){
    // $email=$_POST["email"];
    // $password=$_POST["password"];
    $email = trim($_POST['email']);
    $usertable = trim($_POST['usertable']);
    $password1 = md5(trim($_POST['password1']));
    $password2 = md5(trim($_POST['password2']));
    //密码前12位
    // $password1 = substr($password1 , 0 , 12);
    // $password2 = substr($password2 , 0 , 12);
    
    //echo $email."__".$password;
	include_once "config.php";
	include_once "conn.php";
    include_once "function.php";
    
    //$_SESSION["email"]=$_GET["email"];//邮箱
    //查询邮箱是否存在
    $sql = "select * from ".$usertable." where email= '".$email."' ";
    $num = $conne->getRowsNum($sql);
    if($num >= 1){
    	//如果存在
    	//echo "1";
        if(($password1==$password2)){
        
            $insql="update ".$usertable." set password = '".$password1."' where email = '".$email."' ";

            $rowsNum = $conne->uidRst($insql);
            if($rowsNum > 0){
                //echo "<h3>修改成功！</h3>";
                $conne->close_conn();
                echo_message("修改成功..." ,2);
            }else{
                //echo "修改失败！";
                $conne->msg_error();
                $conne->close_conn();
                echo_message("请重新修改..." ,-1);
            }


        }

    	


    }else if($num == 0){
    	$conne->close_conn();
        //echo "error";
    	echo_message("您的邮箱不存在！请重新修改！" , 2);
    }



    

    mysql_close();

}


?>
</form>
</div>

<!-- Footer -->
<?php
    include_once "footer.php";
?>


<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="http://cdn.bootcss.com/jquery/1.11.1/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="http://cdn.bootcss.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="../js/reg.js"></script>
</body>
</html>