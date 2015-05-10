<?php
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
<body style="padding-top:180px;min-height:500px;background:url(../images/ban/banner1.png) no-repeat;-webkit-background-size:cover;background-size:cover;z-index:-1;">
<!-- Head Navbar -->
<?php 
    include_once "header.php";
?>

<!-- Body Main -->
<div class="container">  
 <form class="form-horizontal col-sm-4 col-sm-offset-4" role="form" id="forget" action="forget.php">

<?php
session_start();
if(!empty($_POST)){
    //print_r($_POST);
    // $email=$_POST["email"];
    // $password=$_POST["password"];
    $email = trim($_POST['email']);
    $power = trim($_POST['power']);
    $password = md5(trim($_POST['password']));
    //密码前12位
    //$password = substr($password , 0 , 12);
    
    include_once "config.php";
    include_once "conn.php";
    include_once "function.php";
    
    //$_SESSION["email"]=$_GET["email"];//邮箱
    //查询邮箱是否存在

    $usertable = "xm_customer";
    if($power == 1)
        $usertable = "xm_supplier";

    $sqlqu="select * from ".$usertable." where email = '".$email."'";
    //echo $sqlqu;

    $numqu = $conne->getRowsNum($sqlqu);
    if($numqu>=1){
            $sql = "select * from ".$usertable." where email= '".$email."' and password='".$password."'  ";
            // echo $sql;
            // if($result=mysql_query($sql)){
            //     echo "yes";
            // }else{
            //     echo "false";
            // }

            $num = $conne->getRowsNum($sql);
            if($num >= 1){
                //如果存在
                //echo "1";

                $rst = $conne->getRowsRst($sql);
                //print_r($rst);
                if(!isset($_SESSION)){  session_start();  }  
                //login;


                if($rst["status"]==0){
                    $conne->close_conn();        
                    echo_message("您的账户未激活！请激活后再登录！" , 2);
                }




                $_SESSION["login"]=true;
                if($power==0)
                    $_SESSION["user_role"] = 1; ///个人
                else
                    $_SESSION["user_role"] = 2; ///商家

                


                $_SESSION["email"]=$email;
                $_SESSION["id"] = $rst["id"];
                $_COOKIE["id"] = $rst["id"];
                $_SESSION["username"] = $rst["username"];
                $_SESSION["email"] = $rst["email"];
                $_SESSION["password"] = $rst["password"];
                $_SESSION["phone"] = $rst["phone"];
                $_SESSION["sex"] = $rst["sex"];

                // $_SESSION["uqq"] = $rst["uqq"];
                // $_SESSION["upower"] = $rst["upower"];
                // $_SESSION["uheader"] = $rst["uheader"];
                //获取上次登录时间
                $_SESSION["last_login_date"]=$row["last_login_date"];

                $conne->close_conn();        

                
                //登录次数
                //update user_role set u_count='1' where user_name='admin'
                // $count = $row["u_count"]+1;
                // $addsql="update ".$user_role." set u_count=".$count." where user_name=\"".$_SESSION["user_name"]."\"";
                // mysql_query($addsql, $db) or die(mysql_error($db));
                
                
                

                //更新登录时间
                $last_login = date('Y-m-d H:i:s',time());
                $updsql="update  ".$usertable." set last_login_date='$last_login' where email=\"".$_SESSION["email"]."\"";
                mysql_query($updsql, $db) or die(mysql_error($db));

                

                //echo "success";
                //print_r($_SESSION);

                //header("location: ../index.php");
                echo_message("登录成功！" , 1); 
            


        }else if($num == 0){
            $_SESSION["login"]=false;
                //echo "passwod  error";
            //header("location:../login.php");
            $conne->close_conn();
            echo_message("您的账户密码错误！请重新登录！" , 2);
        }    
    }else{
        $_SESSION["login"]=false;
        $conne->close_conn();
        echo_message("您的邮箱不存在！请注册后再登录！" , 7);
    }


    


    mysql_close();

}


?>
</form>
</div>
<div style="margin-bottom:329px;"></div>
<!-- Footer -->
<?php
    include_once "footer.php";
?>



</body>
</html>