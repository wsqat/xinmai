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
    <title>商品管理-后台管理</title>
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
                            echo "<li><a href='customer.php'>用户管理</a></li>";
                            echo "<li><a href='blog.php'>传记管理</a></li>";
                            echo "<li><a href='supplier.php'>商家管理</a></li>";
                            echo "<li class='active'><a href='product.php'>商品管理</a></li>";
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
                <li><a href="../webadmin/product.php">商品管理</a></li>
            </ul>
        </div>
    </div>
</div>

<div class="admin">
    <form method="post" action="../admin/batchPro.php">
    <div class="panel admin-panel">
        <div class="panel-head"><strong>商品管理</strong></div>
        <div class="padding border-bottom">
            <input type="button" class="button button-small checkall" name="checkall" checkfor="chk[]" value="全选" />
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

            <input type="hidden" name="pub" value="0">
            <button type="submit" class="button button-small border-green">批量删除</button>
            <br><br>

            <input type="button" class="button button-small checkall" name="checkall" checkfor="id" value="分类查询" />
            <a href="<?php echo $_SERVER['PHP_SELF'];?>?s=<?php echo base64_encode(10);?>"><input type="button" class="button button-small border-green" value="所有商品" /></a>
            &nbsp;&nbsp;&nbsp;&nbsp;
            <!-- <div class="x1 x2-move"> -->
            <!-- <select class="input" id="sel1" name="zydl"> -->
                <?php
                //     include_once "../admin/conn.php"; 
                //     //distinct
                //     $query ="select title from xm_category ";
                //     //echo $query;
                    
                //     $results = mysql_query($query);
                //     //print_r($arr_yxdm);
                //     $index=0;
                //     $category =array();
                //     while($cate = mysql_fetch_array($results)){
                //         $category[$index] = $cate[0];
                //         $index++;
                //     }

                    
                //     foreach ($category as $key => $value) {
                //         echo "<option value='".$key."'>".$category[$key]."</option>";
                //     }
                // ?>
            <!-- </select> -->
            <!-- </div> -->
            <a href="<?php echo $_SERVER['PHP_SELF'];?>?s=<?php echo base64_encode(11);?>"><input type="button" class="button button-small border-green" value="衣" /></a>
            &nbsp;&nbsp;&nbsp;&nbsp;
            <a href="<?php echo $_SERVER['PHP_SELF'];?>?s=<?php echo base64_encode(12);?>"><input type="button" class="button button-small border-green" value="食" /></a>
            &nbsp;&nbsp;&nbsp;&nbsp;
            <a href="<?php echo $_SERVER['PHP_SELF'];?>?s=<?php echo base64_encode(13);?>"><input type="button" class="button button-small border-green" value="住" /></a>
            &nbsp;&nbsp;&nbsp;&nbsp;
            <a href="<?php echo $_SERVER['PHP_SELF'];?>?s=<?php echo base64_encode(14);?>"><input type="button" class="button button-small border-green" value="行" /></a>
            &nbsp;&nbsp;&nbsp;&nbsp;
            <a href="<?php echo $_SERVER['PHP_SELF'];?>?s=<?php echo base64_encode(15);?>"><input type="button" class="button button-small border-green" value="农副产品" /></a>
            &nbsp;&nbsp;&nbsp;&nbsp;
            <a href="<?php echo $_SERVER['PHP_SELF'];?>?s=<?php echo base64_encode(16);?>"><input type="button" class="button button-small border-green" value="建筑材料" /></a>
            &nbsp;&nbsp;&nbsp;&nbsp;
            <a href="<?php echo $_SERVER['PHP_SELF'];?>?s=<?php echo base64_encode(17);?>"><input type="button" class="button button-small border-green" value="装饰材料" /></a>
            &nbsp;&nbsp;&nbsp;&nbsp;
            <a href="<?php echo $_SERVER['PHP_SELF'];?>?s=<?php echo base64_encode(18);?>"><input type="button" class="button button-small border-green" value="农资" /></a>
            <br><br>
            <!-- <input type="button" class="button button-small border-blue" value="回收站" /> -->
        </div>
        <table class="table table-hover">
            <tr><th width="100">选择</th><th width="100">类别</th><th width="120">商品名</th><th width="100">单价</th><th width="100">库存</th><th width="*">商品描述</th><th width="200">发布时间</th><th width="100">操作</th></tr>
<?php
        include_once "../admin/conn.php"; 
        error_reporting(0);
        $s = base64_decode(trim($_GET["s"]));
        $s = intval($s);
        $user_table = "xm_product";

        $cond1="";
        switch ($s) {
            case '11':
                $sql = "select * from ".$user_table." where catid=1 order by id desc  ";
                $cond1 = "s=".base64_encode(11)."&";
                break;
            case '12':
                $sql = "select * from ".$user_table." where catid=2 order by id desc  "; 
                $cond1 = "s=".base64_encode(12)."&";
                break;
            case '13':
                $sql = "select * from ".$user_table." where catid=3 order by id desc  "; 
                $cond1 = "s=".base64_encode(13)."&";
                break;
            case '14':
                $sql = "select * from ".$user_table." where catid=4 order by id desc  "; 
                $cond1 = "s=".base64_encode(14)."&";
                break;
            case '15':
                $sql = "select * from ".$user_table." where catid=5 order by id desc  "; 
                $cond1 = "s=".base64_encode(15)."&";
                break;
            case '16':
                $sql = "select * from ".$user_table." where catid=6 order by id desc  "; 
                $cond1 = "s=".base64_encode(16)."&";
                break;
            case '17':
                $sql = "select * from ".$user_table." where catid=7 order by id desc  "; 
                $cond1 = "s=".base64_encode(17)."&";
                break;
            case '18':
                $sql = "select * from ".$user_table." where catid=8 order by id desc  "; 
                $cond1 = "s=".base64_encode(18)."&";
                break;
            default:
                $sql = "select * from ".$user_table." order by id desc  "; 
                $cond1 = " ";
                break;
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
                $i++;   
                $name = $row["title"];
                $catid = $row["catid"];

                $query ="select title from xm_category where id=' ".$catid."' ";
                //echo $query;
                $catids = mysql_fetch_array(mysql_query($query));
                //print_r($arr_yxdm);
                $catid = $catids[0];

                $sprice = $row["sprice"];
                $num = $row["num"];
                $created = $row["created"];
                $des = $row["description"];
                $des = mb_substr($des , 0 , 16,'utf-8');
                //$state=$row['published'];

                $id = $row["id"];
                $aid = base64_encode($id);

                
                //操作加密
                $lo = base64_encode("look");
                $up = base64_encode("update");
                $de = base64_encode("delete");
                $fb = base64_encode("fabu");

                if ($i > ($curpage - 1) * $pageSize && $i <= $curpage * $pageSize) {
                    //<td><a class='button border-blue button-little' >已审核</a></td>
                    echo "<tr><td><input type='checkbox'  name='chk[]' value=".$id." /></td><td ><a class='button border-blue button-little' >".$catid."</a></td><td><a href='../admin/lookPro.php?aid=".$aid."'>".$name."</a></td><td>".$sprice."</td><td>".$num."</td><td>".$des."</td><td>".$created."</td><td><a class='button border-blue button-little' href='../admin/editPro.php?aid=".$aid."'>修改</a> <a class='button border-yellow button-little' href='../admin/deletePro.php?aid=".$aid."' onclick='{if(confirm('确认删除?')){return true;}return false;}'>删除</a></td></tr>";
                    
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
            <li><a href="<?php echo $_SERVER['PHP_SELF'];?>?<?php echo $cond1;?>page=<?php echo $pre;?>">上一页</a>
                <?php }?>
            </li>
            <li>
                <?php 
                    if ($curpage < ((int)$i/$pageSize)  ) {
                        $nex=base64_encode($curpage + 1);
                ?>
                    <a href="<?php echo $_SERVER['PHP_SELF'];?>?<?php echo $cond1;?>page=<?php echo $nex;?>">下一页</a>
            </li>
                <?php 
                    }
            
                ?>
            <li>
                <a href="<?php echo $_SERVER['PHP_SELF'];?>?<?php echo $cond1;?>page=<?php echo base64_encode($countPage);?>">尾页</a>
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