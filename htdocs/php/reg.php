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
    <meta http-equiv="refresh" content="2; url='../login.php' ">
    <title>新麦网</title>
    <link rel="icon" type="image/x-icon" href="../images/icon/logo2.png">
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <!-- <link href="css/bootstrap.min.css" rel="stylesheet">
    -->
    <link href="../css/index.css" rel="stylesheet">
    <link href="../css/style.css" rel="stylesheet" type="text/css">
    <link href="css/reg.css" rel="stylesheet">
</head>
<body style="">
<!-- Head Navbar -->
<?php 
    include_once "header.php";
?>



<!-- Body Main -->
<div class="container">

<?php
//error_reporting(0);
//echo "sss";
 if(!empty($_POST)){
    //print_r($_POST);
    $username = stripslashes(trim($_POST['name']));
    $username = strip_tags($username);

    
    //$power = trim($_POST['power']);
    $power = stripslashes(trim($_POST['power']));
    $power = strip_tags($power);

    $sex = trim($_POST['sex']);

    $telephone = stripslashes(trim($_POST['phone']));
    $telephone = strip_tags($telephone);

    $password = md5(trim($_POST['password']));
    $email = trim($_POST['email']);


    $regtime = time();
    //$last_login = date('Y-m-d H:i:s',time());
    
    $token = md5($username.$password.$regtime); //创建用于激活识别码

    $token_exptime = time()+60*60*24;//过期时间为24小时后

    //$db = mysql_connect('localhost','root','') or die('can not connect to database');
    //mysql_select_db('xm',$db) or die(mysql_error($db));
    //mysql_query("set names 'utf8'");    

        
    include_once "conn.php";
    include_once "function.php";
    //$_SESSION["email"]=$_GET["email"];//邮箱

    mysql_query("SET NAMES utf8");
    $usertable = "xm_customer";
    if($power == 1)
        $usertable = "xm_supplier";

    $sql="select * from ".$usertable." where email = '".$email."'";

    //echo $sql;
    //查询数据库是否存在该邮箱
    // if($result=mysql_query($sql)){
    //         echo "写入成功";
    //     }else{
    //         echo "失败";
    // }
    $num = $conne->getRowsNum($sql);
    if($num >= 1){
        //如果存在
        //echo "1";
        $conne->close_conn();
        echo_message("您的邮箱已存在！",-1);
    }else if($num == 0){
        //echo "0";
        //echo_message("您的邮箱不存在！");
        $reg_date = date('Y-m-d H:i:s',time());

        $query = "select * from ".$usertable." where username = '".$username."' ";
        $nums = $conne->getRowsNum($query);
        //$result=mysql_query($query);
        if($nums>=1){
            //echo $query;
            //echo "您的用户名已存在";
            echo"<script>alert('您的用户名已存在');history.go(-1);</script>";  
            
        }else{
            $insql = "insert into ".$usertable."(username,email,password,phone,reg_date,sex,token,token_exptime,regtime) values('$username','$email','$password','$telephone','$reg_date','$sex','$token','$token_exptime','$regtime') ";

            mysql_query($insql);
            // $result = mysql_query($insql);
            // if($result){
            //     echo "写入成功";
            // }else{
            //     echo "失败";
            // } 

            if($power==1)
                $token = "1".$token;
            else
                $token = "0".$token;
            
            if(mysql_insert_id()){//写入成功，发邮件
                include_once("register/smtp.class.php");

                $smtpserver = "smtp.mxhichina.com"; //SMTP服务器
                $smtpserverport = 25; //SMTP服务器端口
                $smtpusermail = "postmaster@xinmaicn.com"; //SMTP服务器的用户邮箱
                $smtpuser = "postmaster@xinmaicn.com"; //SMTP服务器的用户帐号
                $smtppass = "XINmaicn2015"; //SMTP服务器的用户密码
                
                $smtp = new Smtp($smtpserver, $smtpserverport, true, $smtpuser, $smtppass); //这里面的一个true是表示使用身份验证,否则不使用身份验证.
                $emailtype = "HTML"; //信件类型，文本:text；网页：HTML
                $smtpemailto = $email;
                $smtpemailfrom = $smtpusermail;
                $emailsubject = "用户帐号激活";
                $emailbody = "亲爱的".$username."：<br/>感谢您在我站注册了新帐号。<br/>请点击链接激活您的帐号。<br/><a href='http://www.xinmaicn.com/php/register/active.php?verify=".$token."' target='_blank'>http://www.xinmaicn.com/php/register/active.php?verify=".$token."</a><br/>如果以上链接无法点击，请将它复制到你的浏览器地址栏中进入访问，该链接24小时内有效。<br/>如果此次激活请求非你本人所发，请忽略本邮件。<br/><p style='text-align:right'>-------- xinmaicn.com 敬上</p>";

                $rs = $smtp->sendmail($smtpemailto, $smtpemailfrom, $emailsubject, $emailbody, $emailtype);
                if($rs==1){
                    $msg = '<h2>恭喜您，注册成功</h2><br/>
                    <h4>请登录到您的邮箱及时激活您的帐号.  
                    请尽快激活！2s后跳转至登录页面</h4>'; 

                }else{
                    $msg = $rs; 
                    $msg = $msg."fail";
                }
            }else{
                //echo_message("注册失败！",2);     
                echo "激活邮件发送失败!";
            }  
            echo $msg;    
        }

        

   //   //执行插入
   //   $rowsNum = $conne->uidRst($insql);
   //   if($rowsNum)
   //   {
   //          $conne->close_conn();
            // echo_message("注册成功！请登录千寻网！",1);   
   //   }else {
   //       //出错
   //       echo $conne->msg_error();   
   //   }

    }else {
        //出错
        echo $conne->msg_error();
    }
    $conne->close_conn();
    
 }
    mysql_close();  
?>
</div>
</body>
<div style="margin-bottom:648px;"></div>
<!-- Footer -->
<?php
    include_once "footer.php";
?>


<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="http://cdn.bootcss.com/jquery/1.11.1/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="http://cdn.bootcss.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="../js/reg.js"></script>

</html>
