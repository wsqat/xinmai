<?php
ob_start();
//echo $_SESSION["user_dsdm"];    
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
    <title>用户管理-后台管理</title>
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
                <a class="button button-little bg-yellow" href="../php/logout_action.php">注销登录</a>
            </span>
            <ul class="nav nav-inline admin-nav">
                <li><a href="index.php" class="icon-home"> 开始</a>
                    <!-- <ul>
                    <li><a href="system.html">系统设置</a></li>
                    <li><a href="content.html">内容管理</a></li>
                    <li><a href="#">订单管理</a></li>
                    <li class="active"><a href="#">会员管理</a></li>
                    <li><a href="#">文件管理</a></li>
                    <li><a href="#">栏目管理</a></li>
                    </ul> -->
                </li>
                <li><a href="system.php" class="icon-cog"> 系统</a>
                    <!-- <ul><li><a href="#">全局设置</a></li><li class="active"><a href="#">系统设置</a></li><li><a href="#">会员设置</a></li><li><a href="#">积分设置</a></li></ul> -->
                </li>
                <li class="active"><a href="content.php" class="icon-file-text"> 内容</a>
                    <ul>
                    <?php
                        if($_SESSION["user_role"]==10){
                            echo "<li><a href='content.php'>内容发布</a></li>";
                            echo "<li class='active'><a href='customer.php'>用户管理</a></li>";
                            echo "<li><a href='blog.php'>传记管理</a></li>";
                            echo "<li><a href='supplier.php'>商家管理</a></li>";
                            echo "<li><a href='product.php'>商品管理</a></li>";
                        }    
                            
                        
                    ?>
                        <li><a href='system.php'>后台管理</a></li>

                </ul>
                </li>
            </ul>
        </div>
        <div class="admin-bread">
            <span>您好，<?php echo $_SESSION["user_name"]; ?>，欢迎您的光临。</span>
            <ul class="bread">
                <li><a href="index.php" class="icon-home"> 开始</a></li>
                <li><a href="content.php">内容</a></li>
                <li><a href="../webadmin/customer.php">用户管理</a></li>
            </ul>
        </div>
    </div>
</div>

<div class="admin">
    <form method="post" action="../admin/batchCus.php">
    <div class="panel admin-panel">
        <div class="panel-head"><strong>用户管理</strong></div>
        <div class="padding border-bottom">
            <input type="button" class="button button-small checkall" name="checkall" checkfor="chk[]" value="全选" />
            &nbsp;&nbsp;&nbsp;&nbsp;
            <!-- <button type="submit" class="button button-small border-green"><a href="batchCus.php?op=active">批量激活</a></button> -->
            <!-- <label>拼图框架</label> -->
        
            <label class="text-main"><input type="radio" name="pub" checked value="1">批量激活</label>
            &nbsp;&nbsp;
            <label class="text-red"><input type="radio" name="pub" value="0">批量删除</label>
            &nbsp;&nbsp;&nbsp;&nbsp;
            <button type="submit" class="button button-small border-green">批量提交</button>
            <br><br>
            <input type="button" class="button button-small checkall" name="checkall" checkfor="id" value="是否激活" />
            <a href="<?php echo $_SERVER['PHP_SELF'];?>?s=<?php echo base64_encode(12);?>"><input type="button" class="button button-small border-green" value="所有用户" /></a>
            <a href="<?php echo $_SERVER['PHP_SELF'];?>?s=<?php echo base64_encode(11);?>"><input type="button" class="button button-small border-green" value="已激活" /></a>&nbsp;&nbsp;
            <a href="<?php echo $_SERVER['PHP_SELF'];?>?s=<?php echo base64_encode(10);?>"><input type="button" class="button button-small border-green" value="未激活" /></a>
            <br><br>
            <!-- <input type="button" class="button button-small border-blue" value="回收站" /> -->
        </div>
        <table class="table table-hover">
            <tr><th width="100">选择</th><th width="120">状态</th><th width="120">用户名</th><th width="*">邮箱</th><th width="200">注册时间</th><th width="100">操作</th></tr>
<?php
        include_once "../admin/conn.php"; 
        error_reporting(0);
        $s = base64_decode(trim($_GET["s"]));
        $s = intval($s);
        $user_table = "xm_customer";
        if($s==10){
            $sql = "select * from ".$user_table." where status=0 order by id desc  "; 
        }elseif($s==11){
            $sql = "select * from ".$user_table." where status=1 order by id desc  "; 
        }else{
            $sql = "select * from ".$user_table." order by id desc  "; 
        }
        //$sql = "select * from xm_customer  order by id desc  "; 

        $result=@mysql_query($sql) or die("error  出错了，请联系管理员");
        if($result&&mysql_num_rows($result)>0){
            $pageSize = 10;
            $curpage = 1;
            $countPage = 0;
            $curpage = $_GET["page"] == null ? "1" : $_GET["page"];
            $curpage = base64_decode($curpage);
            if(is_numeric($curpage))
                $curpage = intval($curpage);
            else
                $curpage = 1;
            $i = 0;
            while($row = mysql_fetch_array($result)) {
                //echo $i;
                $i++;   
                
                $name = $row["username"];
                $email = $row["email"];
                $rdate = $row["reg_date"];
                $state=$row['status'];

                $id = $row["id"];
                $aid = base64_encode($id);

                // $title = $row["liuyan_title"];
                // $title = mb_substr($title , 0 , 10,'utf-8');
                // $content = $row["liuyan_content"];
                // $content = mb_substr($content , 0 , 10,'utf-8');
                // $time = $row["liuyan_time"];
                // $lname = $row["liuyan_name"];
                // $lname = mb_substr($lname , 0 , 10,'utf-8');
                // $rcontent = $row["reply_content"];
                // $rcontent = mb_substr($rcontent , 0 , 10,'utf-8');
                // $state=$row['is_reply'];
                
                //操作加密
                $lo = base64_encode("look");
                $up = base64_encode("update");
                $de = base64_encode("delete");
                $fb = base64_encode("fabu");

                if ($i > ($curpage - 1) * $pageSize && $i <= $curpage * $pageSize) {
                    if($state==1){
                    // <input type='checkbox' name='id' value=".$row['article_id']."/><td>".$row["article_id"]."</td>
                        echo "<tr><td><input type='checkbox'  name='chk[]' value=".$id." /></td><td><a class='button border-blue button-little' >已激活</a></td><td><a href='../admin/lookCus.php?aid=".$aid."'>".$name."</a></td><td>".$email."</td><td>".$rdate."</td><td><a class='button border-blue button-little' href='../admin/editCus.php?aid=".$aid."'>修改</a> <a class='button border-yellow button-little' href='../admin/deleteCus.php?aid=".$aid."' onclick='{if(confirm('确认删除?')){return true;}return false;}'>删除</a></td></tr>";}
                    if($state==0){
                        echo "<tr><td><input type='checkbox' name='chk[]' value=".$id." /></td><td><a class='button border-blue button-little' >未激活</a></td><td><a href='../admin/lookCus.php?aid=".$aid."'>".$name."</a></td><td>".$email."</td><td>".$rdate."</td><td><a class='button border-blue button-little' href='../admin/lookCus.php?aid=".$aid."'>查看</a> <a class='button border-yellow button-little' href='../admin/activeCus.php?stateid=".$aid."' onclick='{if(confirm('确认发布?')){return true;}return false;}'>激活</a></td></tr>";
                    }                  
                }
            }
            $countPage = ($i + $pageSize - 1) / $pageSize;
            $countPage = floor($countPage);



        }
            
        
    mysql_close();
?>


        </table>
        <div class="panel-foot text-center">
        <ul class="pagination pagination-group">
            <li><a href="#">
                共<?php echo $i;?> 条记录 <?php echo $curpage;?>/<?php if($i/$pageSize< 1){ echo "1";}else{ echo floor($countPage); }?> 页</a>
            </li>  
            <li>
                <a href="<?php echo $_SERVER['PHP_SELF'];?>">首页</a>
                <?php if ($curpage != 1) { $pre=base64_encode($curpage - 1);  ?>
            </li>
            <li><a href="<?php echo $_SERVER['PHP_SELF'];?>?page=<?php echo $pre;?>">上一页</a>
                <?php }?>
            </li>
            <li>
                <?php 
                    if ($curpage < ((int)$i/$pageSize)  ) {
                        $nex=base64_encode($curpage + 1);
                ?>
                    <a href="<?php echo $_SERVER['PHP_SELF'];?>?page=<?php echo $nex;?>">下一页</a>
            </li>
                <?php 
                    }
            
                ?>
            <li>
                <a href="<?php echo $_SERVER['PHP_SELF'];?>?page=<?php echo base64_encode($countPage);?>">尾页</a>
            </li>
        </ul>
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