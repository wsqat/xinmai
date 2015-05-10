<?php
ob_start();
error_reporting(0);
header("Content-type: text/html; charset=utf-8");

if(!isset($_SESSION)){  
        session_start();  
        }  
	   if($_SESSION["user_role"]!=10)
        {
            //login;
            header("location:../webadmin/index.php");
            }
    
?>
<!DOCTYPE html>
<html lang="zh-cn">
<head>


    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta name="renderer" content="webkit">
    <title>后台管理</title>
    <link rel="stylesheet" href="css/pintuer.css">
    <link rel="stylesheet" href="css/admin.css">
    <script src="js/jquery.js"></script>
    <script src="js/pintuer.js"></script>
    <script src="js/respond.js"></script>
    <script src="js/admin.js"></script>
    <link type="image/x-icon" href="/favicon.ico" rel="shortcut icon" />
    <link href="/favicon.ico" rel="bookmark icon" />
</head>

<body>
<div class="lefter">
    <div class="logo"><a href="#"><img src="images/logo.png" alt="后台管理系统" /></a></div>
</div>
<div class="righter nav-navicon" id="admin-nav">
    <div class="mainer">
        <div class="admin-navbar">
            <span class="float-right">
                <a class="button button-little bg-main" href="../index.php">前台首页</a>
                <a class="button button-little bg-yellow" href="logout_action.php">注销登录</a>
            </span>
            <ul class="nav nav-inline admin-nav">
                <li><a href="index.php" class="icon-home"> 开始</a>
                    <!-- <ul><li><a href="system.php">系统设置</a></li><li><a href="content.php">内容管理</a></li><li><a href="#">订单管理</a></li><li class="active"><a href="#">会员管理</a></li><li><a href="#">文件管理</a></li><li><a href="#">栏目管理</a></li></ul> -->
                </li>
                <li><a href="system.php" class="icon-cog"> 系统</a>
                    <!-- <ul><li><a href="#">全局设置</a></li><li class="active"><a href="#">系统设置</a></li><li><a href="#">会员设置</a></li><li><a href="#">积分设置</a></li></ul> -->
                </li>
                <li class="active"><a href="content.php" class="icon-file-text"> 内容</a>
                    <ul>
                    <!-- <li><a href="../admin/publish.php" target='_blank'>添加内容</a></li> -->
                    <?php

						if($_SESSION["user_role"]==10){
                            echo "<li  class='active'><a href='content.php'>内容发布</a></li>";
                            // echo "<li><a href='contentadmin.php'>内容审核</a></li>";
                            echo "<li><a href='customer.php'>用户管理</a></li>";
                            echo "<li><a href='blog.php'>传记管理</a></li>";
                            echo "<li><a href='supplier.php'>商家管理</a></li>";
                            echo "<li><a href='product.php'>商品管理</a></li>";
                        }
                    ?>
                            <li><a href='system.php'>后台管理</a></li>
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
                <li><a href="index.php" class="icon-home"> 开始</a></li>
                <li><a href="content.php">内容</a></li>
                <li><a href="content.php">内容管理</a></li>
            </ul>
        </div>
    </div>
</div>

<div class="admin">
    <form method="post" action="content.php">
    <div class="panel admin-panel">
        <div class="panel-head"><strong>内容列表</strong></div>
        <div class="padding border-bottom">
            <input type="button" class="button button-small checkall" name="checkall" checkfor="id" value="添加内容" />
            <!-- <a href="../admin/publish.php"><input type="button" class="button button-small border-green" value="" /></a> -->
            <?php
                echo "<a class='button button-small border-green' href='../admin/pub2.php?type=news'>三农资讯</a> ";
                echo "<a class='button button-small border-green' href='../admin/pub.php?type=know'>三农知识</a> "; 
                echo "<a class='button button-small border-green' href='../admin/pub.php?type=cult'>三农文化</a> ";
            ?>
            <br><br>
            <?php
			if($_SESSION["user_role"]==10)
                {
            //     echo "<input type='button' class='button button-small checkall' name='checkall' checkfor='id' value='是否审核' />
            // <a href='content.php?sid=1'><input type='button' class='button button-small border-green' value='已发布' /></a>
            // <a href='content.php?sid=0'><input type='button' class='button button-small border-green' value='审核中' /></a>
            // <br><br>";
                echo "<input type='button' class='button button-small checkall' name='checkall' checkfor='id' value='分类查询'' />
            <a href='content.php?cid=0'><input type='button' class='button button-small border-green' 
                value='三农资讯' /></a>
            <a href='content.php?cid=1'><input type='button' class='button button-small border-green' 
				value='生活' /></a>
            <a href='content.php?cid=2'><input type='button' class='button button-small border-green' value='农业' /></a>
            <a href='content.php?cid=3'><input type='button' class='button button-small border-green' value='科教' /></a>
            <a href='content.php?cid=4'><input type='button' class='button button-small border-green' value='文体' /></a>
            <a href='content.php?cid=5'><input type='button' class='button button-small border-green' value='更多' /></a><br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <a href='content.php?kid=0'><input type='button' class='button button-small border-red' 
                value='三农知识' /></a>
            <a href='content.php?kid=1'><input type='button' class='button button-small border-red' 
                value='种植技术' /></a>
            <a href='content.php?kid=2'><input type='button' class='button button-small border-red' value='养殖技术' /></a>
            <a href='content.php?kid=3'><input type='button' class='button button-small border-red' value='美食专家' /></a>
            <a href='content.php?kid=4'><input type='button' class='button button-small border-red' value='生活小窍门' /></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;
            <a href='content.php?uid=0'><input type='button' class='button button-small border-black' 
                value='三农文化' /></a>
            <a href='content.php?uid=1'><input type='button' class='button button-small border-black' 
                value='文化生活' /></a>
            <a href='content.php?uid=2'><input type='button' class='button button-small border-black' value='节气习俗' /></a>
            <a href='content.php?uid=3'><input type='button' class='button button-small border-black' value='文学艺术' /></a>";
                }
            ?>
                    

            <!-- <input type="button" class="button button-small checkall" name="checkall" checkfor="id" value="是否审核" />
            <a href="content.php?sid=1"><input type="button" class="button button-small border-green" value="已发布" /></a>
            <a href="content.php?sid=0"><input type="button" class="button button-small border-green" value="审核中" /></a>
            <br><br>
            <input type="button" class="button button-small checkall" name="checkall" checkfor="id" value="分类查询" />
            <a href="content.php?cid=2"><input type="button" class="button button-small border-green" value="通知公告" /></a>
            <a href="content.php?cid=1"><input type="button" class="button button-small border-green" value="学校简介" /></a> -->
            <!-- <a href="content.php?cid=3"><input type="button" class="button button-small border-green" value="招生简章" /></a>
            <a href="content.php?cid=4"><input type="button" class="button button-small border-green" value="招生计划" /></a> -->
        </div>
        <table class="table table-hover">
            <tr><th width="45">序号</th><th width="120">状态</th><th width="120">类型</th><th width="*">名称</th><th width="200">时间</th><th width="100">操作</th></tr>


<?php
include_once "../admin/conn.php"; 
//echo $_SERVER["QUERY_STRING"]."<br>";
// if(!empty($_SERVER["QUERY_STRING"])){
//     $arr = explode('=', $_SERVER["QUERY_STRING"]);
//     if($arr[0]=="sid"){
//         $sid_value= explode('&', $_SERVER["QUERY_STRING"]);
//         echo $sid_value;

//     }elseif($arr[0]=="cid"){
//         $cid_value= explode('&', $_SERVER["QUERY_STRING"]);
//         echo $cid_value;

//     }
// }
//echo isset($_GET['cid']);

// if(trim($_GET['sid'])!= null){
//     $sql = "select * from xm_news where published=".trim($_GET['sid'])." order by id desc  ";
// }else
//if(trim($_GET['sid'])== null ){
    if(trim($_GET['cid'])!= null ){
        if(trim($_GET['cid'])==0)
            $sql = "select * from xm_news order by id desc  ";    
        else
            $sql = "select * from xm_news where typeid=".trim($_GET['cid'])." order by id desc  ";
    }elseif(trim($_GET['kid'])!= null){
        if(trim($_GET['kid'])==0)
            $sql = "select * from xm_know order by id desc  ";    
        else
            $sql = "select * from xm_know where typeid=".trim($_GET['kid'])." order by id desc  ";    
    }elseif(trim($_GET['uid'])!= null){
        if(trim($_GET['uid'])==0)
            $sql = "select * from xm_cult order by id desc  ";    
        else
            $sql = "select * from xm_cult where typeid=".trim($_GET['uid'])." order by id desc  ";    
    }else{
        $sql = "select * from xm_news order by id desc  ";    
    }
//}

    $result = mysql_query($sql);
    if($result&&mysql_num_rows($result)>0){
        $pageSize = 10;
        $curpage = 1;
        $countPage = 0;
        $curpage = $_GET["page"] == null ? "1" : $_GET["page"];
        $i = 0;

        while ($row = mysql_fetch_array($result)) {
            $i++;
            $id = $row["id"];
            $cid = $row["typeid"];
            //$art_type = $_POST["type"];//文章类型,资讯,知识,文化
            // if(isset($_GET["cid"])){
            //     $art_table = "xm_news";
            $type = 'cid';
            if(isset($_GET["kid"])){
                //$art_table = "xm_know";
                switch ($cid)
                {
                case 1:
                  $cid = "种植技术";
                  break;
                case 2:
                  $cid = "养殖技术";
                  break;
                case 3:
                  $cid = "美食专家";
                  break;
                case 4:
                  $cid = "生活小窍门";
                  break;
                }
                $type = 'kid';
            }
            elseif(isset($_GET["uid"])){
                //$art_table = "xm_cult";
                switch ($cid)
                {
                case 1:
                  $cid = "文化生活";
                  break;
                case 2:
                  $cid = "节气习俗";
                  break;
                case 3:
                  $cid = "文学艺术";
                  break;
                }
                $type = 'uid';
            }
            else{
                //$art_table = "xm_news";
                switch ($cid)
                {
                case 1:
                  $cid = "生活";
                  break;
                case 2:
                  $cid = "农业";
                  break;
                case 3:
                  $cid = "科教";
                  break;
                case 4:
                  $cid = "文体";
                  break;
                case 5:
                  $cid = "更多";
                  break;
                }
                $type = 'cid';
            }
            //$arr = mysql_fetch_assoc(mysql_query("select * from xm_type where id = '" . $cid . "' "));
            //$cid =$arr["title"];
			

            $title = $row["title"];
            //$content = $row["article_content"];
            $time = $row["created"];
            $state=$row['published'];


            if ($i > ($curpage - 1) * $pageSize && $i <= $curpage * $pageSize) {
            
            echo "<tr><td>".$row["id"]."</td><td><a class='button border-blue button-little' > 已发布 </a></td><td>".$cid."</td><td><a href='../admin/look.php?type=".$type."&aid=".$row['id']."'>".$row['title']."</a></td><td>".$row['created']."</td><td><a class='button border-blue button-little' href='../admin/update.php?type=".$type."&aid=".$row['id']."'>修改</a> <a class='button border-yellow button-little' href='../admin/dele.php?type=".$type."&aid=".$row['id']."' onclick='{if(confirm('确认删除?')){return true;}return false;}'>删除</a></td></tr>";
            // if($row['published']==1){
            //     // <input type='checkbox' name='id' value=".$row['article_id']." />
            //     echo "<tr><td>".$row["id"]."</td><td><a class='button border-blue button-little' > 已发布 </a></td><td>".$cid."</td><td><a href='../admin/look.php?aid=".$row['id']."'>".$row['title']."</a></td><td>".$row['created']."</td><td><a class='button border-blue button-little' href='../admin/update.php?aid=".$row['id']."'>修改</a> <a class='button border-yellow button-little' href='../admin/dele.php?aid=".$row['id']."' onclick='{if(confirm('确认删除?')){return true;}return false;}'>删除</a></td></tr>";}
            // if($row['published']==0){
            //     echo "<tr><td>".$row["id"]."</td><td><a class='button border-blue button-little' > 审核中 </a></td><td>".$cid."</td><td><a href='../admin/look.php?aid=".$row['id']."'>".$row['title']."</a></td><td>".$row['created']."</td><td><a class='button border-blue button-little' href='../admin/update.php?aid=".$row['id']."'>修改</a> <a class='button border-yellow button-little' href='../admin/dele.php?aid=".$row['id']."' onclick='{if(confirm('确认删除?')){return true;}return false;}'>删除</a></td></tr>";}
    
            }
            
        }
        $countPage = ($i + $pageSize - 1) / $pageSize;
        $countPage = floor($countPage);
    }
    mysql_close();
            ?>

        </table>
        <div class="panel-foot text-center">
         共<?php echo $i;?> 条记录 <?php echo $curpage;?>/<?php if($i/$pageSize< 1){ echo "1";}else{ echo 
            floor($countPage); }
         ?> 页  

        <a href="content.php?<?php if($_SERVER["QUERY_STRING"]) echo $_SERVER["QUERY_STRING"]."&";?>page=1">首页</a>
        <?php if ($curpage != 1) {?>
            <a href="content.php?<?php if($_SERVER["QUERY_STRING"]) echo $_SERVER["QUERY_STRING"]."&";?>page=<?php 
            echo $curpage - 1;?>">上一页</a>
        <?php }?>
        <?php 
            if ($curpage < ((int)$i/$pageSize)  ) {
        ?>
            <a href="content.php?<?php if($_SERVER["QUERY_STRING"]) echo $_SERVER["QUERY_STRING"]."&";?>page=<?php 
            echo $curpage + 1;?>">下一页</a>
        <?php 
            }
            
        ?>
        <a href="content.php?<?php if($_SERVER["QUERY_STRING"]) echo $_SERVER["QUERY_STRING"]."&";?>page=<?php echo $countPage;?>">尾页</a>
        
</div>
    </div>
    </form>
    <br />
    
</div>

</body>
</html>
<?php
ob_end_flush();
?>