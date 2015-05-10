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
  <?php
    include_once "../admin/conn.php";
    $id =  trim($_GET['aid']);
    $id = intval(base64_decode($id));
    
    $table = "xm_product";
    $rst  = mysql_fetch_array(mysql_query("select * from ".$table." where id ='$id' "));
    //print_r($rst);

    $id = $rst["id"];

    $name = $rst["title"];
    $description = $rst["description"];
    $photo = $rst["product_photo"];
    $sprice = $rst["sprice"];
    $num = $rst["num"];
    $size = $rst["size"];
    $catid = $rst["catid"];
    $subid = $rst["subid"];
    $arr0=array("衣","食","住","行","农副产品","建筑材料","装饰材料","农资") ;
    $arr1=array("服饰","鞋帽","箱包"); 
    $arr2=array("水果","肉禽","特产","冲饮","自助餐","农家乐"); 
    $arr3=array("农家小店","旅店"); 
    $arr4=array("车行","修车","洗车","打蜡"); 
    $arr5=array("养殖","种植","林业"); 
    $arr6=array("砖石","钢材","玻璃","机械"); 
    $arr7=array("灯具","家具","洁具","门窗"); 
    $arr8=array("农药","种子","化肥","农具"); 

    $arr=array(0=>$arr1,1=>$arr2,2=>$arr3,3=>$arr4,4=>$arr5,5=>$arr6,6=>$arr7,7=>$arr8);
    // echo $arr0[$catid-1];
    // echo $arr[$catid-1][$subid-1];
  ?>

  <button class="button win-back icon-arrow-left"> 后退</button>
	<button class="button win-forward">前进 <span class="icon-arrow-right"></span></button>
  &nbsp;&nbsp;&nbsp;&nbsp;
  <a href='deletePro.php?aid=<?php echo base64_encode($id);?>'><button class="button border-yellow">删除 </button></a>
	<br><br><br>

    	    
	<form method="post" class="form-x x7 x2-move">
  	
	
    <div class="form-group">	
     <div class="x3 x1-move"><strong><label for="title">商品名:</label></strong></div>
      <div class="x4">
            <strong><label for="title"><?php echo $name;?></label></strong>
      </div>
    </div>

    <div class="form-group">  
     <div class="x3 x1-move"><strong><label for="title">商品类别:</label></strong></div>
      <div class="x4">
            <strong><label for="title"><?php echo $arr0[$catid-1]."---->>".$arr[$catid-1][$subid-1];?>
            </label></strong>
      </div>
    </div>

    <div class="form-group">
      <div class="x3 x1-move"><strong><label for="size" class="col-rg-6 control-label">商品图片 : </label></strong></div>
      <div class="x4">
           <!-- <strong><label for="content"><?php echo $description;?></label></strong> -->
           <img src="../images/zone/product/<?php echo $photo;?>">
      </div>
    </div>


  
    <div class="form-group">
      <div class="x3 x1-move"><strong><label for="content">描述:</label></strong></div>
      <div class="x4">
        	 <strong><label for="content"><?php echo $description;?></label></strong>
      </div>
    </div>

	  <div class="form-group">	
   		<div class="x3 x1-move"><strong><label for="title">单价:</label></strong></div>
    	<div class="x4">
        	  <strong><label for="title"><?php echo $sprice;?></label></strong>
    	</div>
  	</div>

    <div class="form-group">  
      <div class="x3 x1-move"><strong><label for="title">库存:</label></strong></div>
      <div class="x4">
            <strong><label for="title"><?php echo $num;?></label></strong>
      </div>
    </div>

    <div class="form-group">  
      <div class="x3 x1-move"><strong><label for="title">尺寸:</label></strong></div>
      <div class="x4">
            <strong><label for="title"><?php echo $size;?></label></strong>
      </div>
    </div>

  <br>
 	
</form>
    </div>
    

</body>
</html>
