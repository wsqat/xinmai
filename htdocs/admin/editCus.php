<?php
	   if(!isset($_SESSION)){ session_start(); };
	   error_reporting(0);
if($_SESSION["adminlogin"]==true)
	{
	$user_name=$_SESSION["user_name"];
	}
	else {
	header("location:login.html");
	}

?>
<!DOCTYPE html>
<html lang="zh-cn">
<html>
<head>
	<meta charset="utf-8">
	<title>修改文章</title>
	<link rel="stylesheet" href="ckeditor/_samples/sample.css">
	<link rel="stylesheet" href="../webadmin/css/pintuer.css">
    <link rel="stylesheet" href="../webadmin/css/admin.css">
    <script src="../webadmin/js/jquery.js"></script>
    <script src="../webadmin/js/pintuer.js"></script>
    <script src="../webadmin/js/respond.js"></script>
    <script src="../webadmin/js/admin.js"></script>
    <link type="image/x-icon" href="../webadmin/favicon.ico" rel="shortcut icon" />
    <link href="/favicon.ico" rel="bookmark icon" />
	<script type="text/javascript" src="ckeditor/ckeditor.js"></script>
	<script type="text/javascript" src="ckeditor/ckfinder/ckfinder.js"></script>
</head>
	<body>
<div class="lefter">
    <div class="logo"><a href="#"><img src="../webadmin/images/logo.png" alt="后台管理系统" /></a></div>
</div>
<div class="righter nav-navicon" id="admin-nav">
    <div class="mainer">
        <div class="admin-navbar">
            <span class="float-right">
            	<a class="button button-little bg-main" href="../index.php">前台首页</a>
                <a class="button button-little bg-yellow" href="../php/logout_action.php">注销登录</a>
            </span>
            <ul class="nav nav-inline admin-nav">
                <li><a href="../webadmin/index.php" class="icon-home"> 开始</a>
                    <!-- <ul><li><a href="system.html">系统设置</a></li><li><a href="content.html">内容管理</a></li><li><a href="#">订单管理</a></li><li class="active"><a href="#">会员管理</a></li><li><a href="#">文件管理</a></li><li><a href="#">栏目管理</a></li></ul> -->
                </li>
                <li><a href="../webadmin/system.php" class="icon-cog"> 系统</a>
            		<!-- <ul><li><a href="#">全局设置</a></li><li class="active"><a href="#">系统设置</a></li><li><a href="#">会员设置</a></li><li><a href="#">积分设置</a></li></ul> -->
                </li>
                <li class="active"><a href="../webadmin/content.php" class="icon-file-text"> 内容</a>
					<ul>
					<!-- <li><a href="../admin/publish.php" target='_blank'>添加内容</a></li> -->
					<?php
            if($_SESSION["user_role"]==10){
              echo "<li><a href='../webadmin/content.php'>内容发布</a></li>";
              echo "<li class='active'><a href='../webadmin/customer.php'>用户管理</a></li>";
              echo "<li><a href='../webadmin/blog.php'>传记管理</a></li>";
              echo "<li><a href='../webadmin/supplier.php'>商家管理</a></li>";
              echo "<li><a href='../webadmin/product.php'>商品管理</a></li>";
            }
          ?>
							<li><a href='../webadmin/system.php'>后台管理</a></li>
				</ul>
                </li>
                <!-- <li><a href="#" class="icon-shopping-cart"> 订单</a></li>
                <li><a href="#" class="icon-user"> 会员</a></li>
                <li><a href="#" class="icon-file"> 文件</a></li>
                <li><a href="#" class="icon-th-list"> 栏目</a></li> -->
            </ul>
        </div>
        <div class="admin-bread">
            <span>您好，<?php echo $_SESSION["user_name"]; ?>，欢迎您的光临。</span>
            <ul class="bread">
                <li><a href="../webadmin/index.php" class="icon-home"> 开始</a></li>
                <li><a href="../webadmin/content.php">内容</a></li>
                <li><a href="../webadmin/customer.php">用户管理</a></li>
            </ul>
        </div>
    </div>
</div>
<div class="admin">

    <button class="button win-back icon-arrow-left"> 后退</button>
	<button class="button win-forward">前进 <span class="icon-arrow-right"></span></button>
	<br><br><br>

    	    
	<form method="post" class="form-x x7 x2-move" action="postedCus.php">
  	<?php

  	include_once "../admin/conn.php";
    $id =  trim($_GET['aid']);
    $id = intval(base64_decode($id));
    $s =  trim($_GET['s']);
    $s = intval($s);
    if($s==1)
      $table = "xm_supplier";
    else
      $table = "xm_customer";
    //echo $id;

		// $arr_mc  = mysql_fetch_array(mysql_query("select mc from yx_xx where dm = '$yxdm'"));
		// $mc = $arr_mc['mc'];

		//$sql = "select * from yx_jh where bh ='$aid' ";
    $row  = mysql_fetch_array(mysql_query("select * from ".$table." where id ='$id' "));
    $id = $row["id"];
    //$id = base64_encode($id);

    $username = $row["username"];
    //$title = mb_substr($title , 0 , 10,'utf-8');
    $email = $row["email"];
    //$content = mb_substr($content , 0 , 10,'utf-8');
    $sex = $row["sex"];
    if($sex==1)
    	$sex = "男";
    else
    	$sex = "女";

    $phone = $row["phone"];
    //$lname = mb_substr($lname , 0 , 10,'utf-8');
    $header_photo = $row["header_photo"];
    //$rcontent = mb_substr($rcontent , 0 , 10,'utf-8');
    $reg_date=$row['reg_date'];
    $last_date=$row['last_login_date'];
    $status=$row['status'];

		
		//$zymcu=array_unique($zymc);

  	?>
	
  <div class="form-group">	
   <div class="x3 x1-move"><strong><label for="title">用户名:</label></strong></div>
    <div class="x4">
          <!-- <strong><label for="title"><?php //echo $username;?></label></strong> -->
          <input class="input" name="username" value="<?php echo $username;?>">
          <input type="hidden" name="id" value="<?php echo $id;?>">
          <?php if($s==1) echo "<input type='hidden' name='supplier' value='1'>";?>
    </div>
  </div>
  <div class="form-group">
    <div class="x3 x1-move"><strong><label for="content">邮箱:</label></strong></div>
    <div class="x4">
      	 <!-- <strong><label for="content"><?php //echo $email;?></label></strong> -->
         <input class="input" name="email" value="<?php echo $email;?>">
    </div>
  </div>

	<div class="form-group">	
   		<div class="x3 x1-move"><strong><label for="title">性别:</label></strong></div>
    	<div class="x4">
        	  <strong><label for="title"><?php echo $sex;?></label></strong>
            
    	</div>
  	</div>

  	<div class="form-group">	
   		<div class="x3 x1-move"><strong><label for="title">电话:</label></strong></div>
    	<div class="x4">
        	  <!-- <strong><label for="title"><?php //echo $phone;?></label></strong> -->
            <input class="input" name="phone" value="<?php echo $phone;?>">
    	</div>
  	</div>
	<div class="form-group">	
   		<div class="x3 x1-move"><strong><label for="title">注册时间:</label></strong></div>
    	<div class="x4">
        	  <strong><label for="title"><?php echo $reg_date;?></label></strong>
    	</div>
  	</div>

  	<div class="form-group">	
   		<div class="x3 x1-move"><strong><label for="title">上次登录时间:</label></strong></div>
    	<div class="x4">
        	  <strong><label for="title"><?php echo $last_date;?></label></strong>
    	</div>
  	</div>

  <br>
 	

  <div class="form-group">
  	<div class="x3 x1-move">
  		<button class="button border-red" type="reset">重置</button>
  	</div>
  	<div class="x3">
  		<button class="button border-green" type="submit">提交</button>
  	</div>
  	
  </div>
</form>
</div>
    
	<!-- <form action="postplan.php" method="post"  class="detail">
		<input type="text" class="input" placeholder="文本框" />
	</form> -->
</body>
</html>

