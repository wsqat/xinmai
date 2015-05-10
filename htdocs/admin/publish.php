<?php
	   if(!isset($_SESSION)){ session_start(); };
	   error_reporting(0);

	   if($_SESSION["adminlogin"]!=true)

	   {
			//login;
			header("location:../webadmin/index.php");
			}

	   if($_SESSION["user_role"]!=10)
		{
			//login;
			header("location:../webadmin/index.php");
			}
?>
<!DOCTYPE html>
<html lang="zh-cn">
<html>
<head>
	<meta charset="utf-8">
	<title>发布文章</title>
	<!--<link rel="stylesheet" href="ckeditor/_samples/sample.css">-->
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
            	<a class="button button-little bg-main" href="../index.php" >前台首页</a>
                <a class="button button-little bg-yellow" href="../webadmin/logout_action.php">注销登录</a>
            </span>
            <ul class="nav nav-inline admin-nav">
                <li><a href="../webadmin/index.php" class="icon-home"> 开始</a>
                    <!-- <ul><li><a href="system.html">系统设置</a></li><li><a href="content.html">内容管理</a></li></ul> -->
                </li>
                <li><a href="../webadmin/system.php" class="icon-cog"> 系统</a>
            		<!-- <ul><li><a href="#">全局设置</a></li><li class="active"><a href="#">系统设置</a></li><li><a href="#">会员设置</a></li><li><a href="#">积分设置</a></li></ul> -->
                </li>
                <li class="active"><a href="../webadmin/content.php" class="icon-file-text"> 内容</a>
					<ul>
					<!-- <li><a href="../admin/publish.php" target='_blank'>添加内容</a></li> -->
					<?php

						// if($_SESSION["u_fb"]==1)
						// 	{
						// 	echo "<li class='active'><a href='../webadmin/content.php'>内容发布</a></li>";
						// 	}
						// if($_SESSION["u_sh"]==1)
						// 	{
						// 	echo "<li><a href='contentadmin.php'>内容审核</a></li>";
						// 	}
						if($_SESSION["user_role"]==10)
							{
							
							echo "<li  class='active'><a href='../webadmin/content.php'>内容发布</a></li>";
							echo "<li><a href='../webadmin/contentadmin.php'>内容审核</a></li>";
							}
						
							
							
							?>
							<li><a href='../webadmin/system.php'>后台管理</a></li>
				</ul>
                </li>
                <!-- <li><a href="#" class="icon-shopping-cart"> 订单</a></li>
                <li><a href="#" class="icon-th-list"> 栏目</a></li> -->
            </ul>
        </div>
        <div class="admin-bread">
            <span>您好，<?php echo $_SESSION["user_name"]; ?>，欢迎您的光临。</span>
            <ul class="bread">
                <li><a href="../webadmin/index.php" class="icon-home"> 开始</a></li>
                <li><a href="../webadmin/content.php">内容</a></li>
                <li>内容管理</li>
            </ul>
        </div>
    </div>
</div>
<div class="admin">
	
    
	<form action="posteddata.php" method="post" enctype="multipart/form-data">
		<p>
			<label for="editor1" style="font-size:26px;">文章标题:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<input type="text" name="title" style="width:600px;height:36px;font-size:26px;" />
			&nbsp;&nbsp;&nbsp;&nbsp;
			<input type="submit" value="发布" class="button button-big bg-main"  ></p>
			</label>
			<label for="editor1" style="font-size:26px;">文章类型:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<?php
				
				
				if($_SESSION["user_role"]==10)
				{	
					if(isset($_GET["type"]) && $_GET["type"]=="news"){
						echo "三农资讯-<select style='width:100px;' name='class_id'>";
						echo "<option value='1'>生活</option>";
						echo "<option value='2'>农业</option>";
						echo "<option value='3'>科教</option>";
						echo "<option value='4'>文体</option>";
						echo "<option value='5'>更多</option></select>
						<input type='hidden' name='type' value='news'></label><br><br>";	
					}elseif(isset($_GET["type"]) && $_GET["type"]=="know"){
						echo "三农知识-<select style='width:160px;' name='class_id'>";
						echo "<option value='1'>种植技术</option>";
						echo "<option value='2'>养殖技术</option>";
						echo "<option value='3'>美食专家</option>";
						echo "<option value='4'>生活小窍门</option></select>
						<input type='hidden' name='type' value='know'></label><br><br>";	
					}elseif(isset($_GET["type"]) && $_GET["type"]=="cult"){
						echo "三农文化-<select style='width:160px;' name='class_id'>";
						echo "<option value='1'>文化生活</option>";
						echo "<option value='2'>节气习俗</option>";
						echo "<option value='3'>文学艺术</option></select>
						<input type='hidden' name='type' value='cult'></label><br><br>";	
					}
					
				}
						
				?>
			

			<label for="editor1" style="font-size:26px;">文章内容:</label>
			<textarea class="ckeditor" cols="80" id="editor1" name="editor1" rows="60">
			</textarea>
			<script type="text/javascript">
			CKEDITOR.editorConfig = function( config )
			{

			// Define changes to default configuration here. For example:

			//	config.language = 'fr';

			//	config.uiColor = '#AADC6E';
			//config.format_p = { element : 'p', attributes : { 'class' : 'normalPara' } };
			//	config.format_pre = { element : 'pre', attributes : { 'class' : 'code' } };

			};

			CKEDITOR.replace( 'editor1',
			{
			//filebrowserBrowseUrl : 'ckeditor/ckfinder/ckfinder.html',
			//filebrowserImageBrowseUrl : 'ckeditor/ckfinder/ckfinder.html?Type=Images',
			//filebrowserFlashBrowseUrl : 'ckeditor/ckfinder/ckfinder.html?Type=Flash',
			filebrowserUploadUrl : 'ckeditor/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
			filebrowserImageUploadUrl : 'ckeditor/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
			filebrowserFlashUploadUrl : 'ckeditor/ckfinder/core/connector/php/<connector class=""></connector>php?command=QuickUpload&type=Flash'
			});
			</script>
			
		</p>
		<p>
			<!-- <input type="submit" value="发布"></p> -->
	</form>
</div>
</body>
</html>