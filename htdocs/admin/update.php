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
                <li><a href="index.html" class="icon-home"> 开始</a>
                </li>
                <li><a href="system.html" class="icon-cog"> 系统</a>
                </li>
                <li class="active"><a href="../webadmin/content.php" class="icon-file-text"> 内容</a>
					<ul>
					<?php

						if($_SESSION["user_role"]==10)
							{
							echo "<li  class='active'><a href='../webadmin/content.php'>内容发布</a></li>";
							echo "<li><a href='../webadmin/contentadmin.php'>内容审核</a></li>";
							}
						
							
							
							?>
							<li><a href='../webadmin/system.php'>后台管理</a></li>
				</ul>
                </li>
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
	<?php
		include_once "../php/function.php";
		include_once "conn.php";
		//echo $_GET["aid"];
		$aid = trim($_GET['aid']);
	    $type = trim($_GET['type']);
	    if(!empty($aid) && is_numeric($aid) && !empty($type)){

	        $table = "xm_news";
	        if($type == "kid"){
	            $table = "xm_know";
	        }elseif($type == "uid"){
	            $table = "xm_cult";
	        }else{
	            $table = "xm_news";
	        }

			$arr = mysql_fetch_assoc(mysql_query("select * from ".$table." where id = '".$aid."' "));
        	
	        $aid = $arr['id'];
	        //$astate = $arr['state'];
	        $atitle = $arr['title'];
	        //echo $atitle;
	        $acontent = $arr['description'];
	        $atime = $arr['created'];

	        $uid = $arr['admid'];
	        $array = mysql_fetch_assoc(mysql_query("select * from xm_admin where id = '".$uid."' "));
	        $uname = $array['username'];
	        // $parray = mysql_fetch_assoc(mysql_query("select * from t_publish where pid = '".$pid."' "));
	        // $pname = $parray['pname'];



	?>
    
	<form action="opupdate.php" method="post" enctype="multipart/form-data">
		<p>
			<label for="editor1" style="font-size:26px;">文章标题:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<input type="text" name="title" style="width:600px;height:36px;font-size:26px;" 
			value="<?php echo $atitle;?>">
			&nbsp;&nbsp;&nbsp;&nbsp;
			<input type="submit" value="更新" class="button button-big bg-main"  ></p>
			</label>
			<label for="editor1" style="font-size:26px;">发布人:<?php echo $uname;?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;发布时间：<?php echo $atime;?><?php echo $table;?>
			<input type="hidden" value="<?php echo $aid;?>" name="article_id">
			<input type="hidden" value="<?php echo $table;?>" name="table">
			</label>
			<br>
			<br>
			<label for="editor1" style="font-size:26px;">文章内容:</label>
			<textarea class="ckeditor" cols="80" id="editor1" name="editor1" rows="60">
				<?php echo $acontent;?>
			</textarea>
			<script type="text/javascript">
			CKEDITOR.editorConfig = function( config )
			{

			// Define changes to default configuration here. For example:

			// config.language = 'fr';

			// config.uiColor = '#AADC6E';

			};

			CKEDITOR.replace( 'editor1',
			{
			filebrowserBrowseUrl : 'ckeditor/ckfinder/ckfinder.html',
			filebrowserImageBrowseUrl : 'ckeditor/ckfinder/ckfinder.html?Type=Images',
			filebrowserFlashBrowseUrl : 'ckeditor/ckfinder/ckfinder.html?Type=Flash',
			filebrowserUploadUrl : 'ckeditor/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
			filebrowserImageUploadUrl : 'ckeditor/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
			filebrowserFlashUploadUrl : 'ckeditor/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash'
			});
			</script>
			
		</p>
		<p>
			<!-- <input type="submit" value="发布"></p> -->
	</form>
</div>
</body>
</html>

<?php
}else{
	echo_message("此文章不存在!",1);
}

?>