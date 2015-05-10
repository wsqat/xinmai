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
	<title>查看商品</title>
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
              echo "<li><a href='../webadmin/customer.php'>用户管理</a></li>";
              echo "<li><a href='../webadmin/blog.php'>传记管理</a></li>";
              echo "<li><a href='../webadmin/supplier.php'>商家管理</a></li>";
              echo "<li class='active'><a href='../webadmin/product.php'>商品管理</a></li>";
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
                <li><a href="../webadmin/product.php">商品管理</a></li>
            </ul>
        </div>
    </div>
</div>
<div class="admin">

    <button class="button win-back icon-arrow-left"> 后退</button>
	<button class="button win-forward">前进 <span class="icon-arrow-right"></span></button>
	<br><br><br>

    	    
	<form method="post" class="form-x x7 x2-move" action="postedPro.php">
  	<?php
  	include_once "../admin/conn.php";
    $id =  trim($_GET['aid']);
    $id = intval(base64_decode($id));
    
    $table = "xm_product";
    $rst  = mysql_fetch_array(mysql_query("select * from ".$table." where id ='$id' "));

    $id = $rst["id"];

    $name = $rst["title"];
    $description = $rst["description"];
    $product_photo = $rst["product_photo"];
    $sprice = $rst["sprice"];
    $num = $rst["num"];
    $size = $rst["size"];
  ?>
	
    <div class="form-group">	
     <div class="x3 x1-move"><strong><label for="title">商品名:</label></strong></div>
      <div class="x4">
            <input class="input" name="name" value="<?php echo $name;?>">
            <input type="hidden" name="id"  value="<?php echo $id?>">
      </div>
    </div>

    <div class="form-group">
      <div class="x3 x1-move"><strong><label for="content">描述:</label></strong></div>
      <div class="x4">
           <textarea rows="6" name="des" class="input"><?php echo $description; ?></textarea>
      </div>
    </div>

	  <div class="form-group">	
   		<div class="x3 x1-move"><strong><label for="title">单价:</label></strong></div>
    	<div class="x4">
<!--             <input class="input" name="sprice" value="<?php echo $sprice;?>"> -->
            <input type="number" class="input" id="sprice" name="sprice" size="30" data-validate="required:必填,currency,单价为货币" value="<?php echo $sprice;?>" />
            <p class="text-dot">(*请输入单价,单价为货币)</p>
    	</div>
  	</div>

    <div class="form-group">  
      <div class="x3 x1-move"><strong><label for="title">库存:</label></strong></div>
      <div class="x4">
            <!-- <input class="input" name="num" value="<?php echo $num;?>"> -->
            <input type="number" class="input" id="num" name="num" size="30" value="<?php echo $num;?>" data-validate="required:必填,plusinteger:库存数为正整数" />
            <p class="text-dot">(*请输入库存数,库存数为正整数)</p>
      </div>
    </div>

    <div class="form-group">  
      <div class="x3 x1-move"><strong><label for="title">尺寸:</label></strong></div>
      <div class="x4">
            <input class="input" name="size" value="<?php echo $size;?>">
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
    

</body>
</html>
