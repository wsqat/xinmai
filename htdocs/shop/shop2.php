<?php
if(!isset($_SESSION)){ session_start(); };
if(empty($_SESSION["id"])){
    echo "<script language='javascript' type='text/javascript'>";  
    echo "alert('权限不足，请先登录！');";  
    echo "window.location.href='../index.php'";  
    echo "</script>"; 
}
?>
<!DOCTYPE html>
<html lang="zh-cn">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>商家店铺</title>
    <link rel="icon" type="image/x-icon" href="../images/icon/logo2.png">
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <!-- <link href="../css/login.css" rel="stylesheet"> -->
    <link href="../css/style.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="../css/business.css" />
    
    <link rel="stylesheet" type="text/css" href="../css/store.css" />

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="http://cdn.bootcss.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="http://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <link href="../css/zone.css" rel="stylesheet">
</head>
<body>
<!-- Head Navbar -->
<?php
//include_once "../php/header.php";
if(empty(trim($_GET["id"])) || !is_numeric(trim($_GET["id"]))){
    echo "<script language='javascript' type='text/javascript'>";  
    echo "alert('查询出错，请重新查询！');";  
    echo "window.location.href='index.php'";  
    echo "</script>"; 
}
include_once "header.php";
include_once "../php/config.php";
if($_SESSION["user_role"]==1)
    $usertable = "xm_customer";
elseif($_SESSION["user_role"]==2)
    $usertable = "xm_supplier";
$arr = mysql_fetch_assoc(mysql_query("select * from xm_supplier where id = '".trim($_GET["id"])."' "));
$supid = $arr['id'];
$uname = $arr['username'];
$uheader = $arr['header_photo'];
$uemail = $arr['email'];
$upwd = $arr['password'];
$sex = $arr['sex'];
$utel = $arr['phone'];
$location = $arr['location'];
$telephone = $arr['telephone'];
?>

<div id="main">
   <div id="store_header">
    <center><h3 style="width:500px;"> <a class="stroeQYYS_brand" href="#">
            <img alt="清雅衣舍" style="width:195px;height:225px;" src="../upload_images/head_photo/<?php echo $uheader;?>"></a><span>
        <label>商家位置:</label><?php echo $location;?>&nbsp;&nbsp; <label>商家电话</label>:<?php echo $telephone;?></span></h3></center>
    </div>
    <div id="goods" class="goods_shoes" style="text-align:center;margin-top:200px;">
<?php
    include_once "../php/config.php";
    $sql = "select * from xm_product where supid =  '".trim($_GET["id"])."'   ";     
    $result = mysql_query($sql);
    if($result&&mysql_num_rows($result)>0){
        $pageSize = 12;
        $curpage = 1;
        $countPage = 0;
        $curpage = $_GET["page"] == null ? "1" : $_GET["page"];
        $i = 0;

        while ($row = mysql_fetch_array($result)) {
            $i++;
            $id = $row["id"];
            $title = $row["title"];
            $photo = $row["product_photo"];
            $price = $row["sprice"];
            $desc = $row["description"];
            $num = $row["num"];
            $size = $row["size"];

            if ($i > ($curpage - 1) * $pageSize && $i <= $curpage * $pageSize) {
            
                if($i%4!=0){
                    echo "<div class='goods_1'><a id='img_link' href='#'><img alt='登山鞋' src='../images/zone/product/".$photo."'></a>
                         <ul>
                            <li><a href='look.php?supid=".$supid."&id=".$id."'>".$title."</a></li>
                            <li>".$desc."</li>
                            <li style='color:#F00; font-size:18px'>价格:".$price."</li>
                            <li style='line-height:20px'>数量:".$num."</li>
                            <li style='line-height:20px'>尺码:".$size."</li>
                         </ul>";
                    if($_SESSION["user_role"]==1)
                         echo "<form method='post' action='dealcart.php'>
                                <input type='hidden' value='add' name='op'>
                                <input type='hidden' value='now' name='time'>
                                <input type='hidden' value='".trim($_GET["id"])."' name='supid'>
                                <input type='hidden' value='".$id."' name='id'>
                                <input id='buy' type='submit' value='立即购买'/>       
                            </form>
                            <form method='post' action='dealcart.php'>
                                <input type='hidden' value='add' name='op'>
                                <input type='hidden' value='".trim($_GET["id"])."' name='supid'>
                                <input type='hidden' value='".$id."' name='id'>
                                <input id='cart' type='submit' value='加入购物车'/>       
                            </form>
                         </div>";//<!--goods_1结束-->
                         //<button class='btn' style='background-color:red;'>加入购物车</button>
                     elseif ($_SESSION["user_role"]==2) {
                         echo "<a href='look.php?id=".$id."'>查看商品详情</a></div>";//<!--goods_1结束-->
                     }
                }
                elseif($i%4==0){
                    echo "<div class='goods_1 goods_4'><a id='img_link' href='#'><img alt='登山鞋' src='../images/zone/product/".$photo."'></a>
                         <ul>
                            <li><a href='look.php?id=".$id."'>".$title."</a></li>
                            <li>".$desc."</li>
                            <li style='color:#F00; font-size:18px'>价格:".$price."</li>
                            <li style='line-height:20px'>数量:".$num."</li>
                            <li style='line-height:20px'>尺码:".$size."</li>
                         </ul>";
                    if($_SESSION["user_role"]==1)
                         echo "<form method='post' action='dealcart.php'>
                                <input type='hidden' value='add' name='op'>
                                <input type='hidden' value='now' name='time'>
                                <input type='hidden' value='".trim($_GET["id"])."' name='supid'>
                                <input type='hidden' value='".$id."' name='id'>
                                <input id='buy' type='submit' value='立即购买'/>       
                            </form>
                            <form method='post' action='dealcart.php'>
                                <input type='hidden' value='add' name='op'>
                                <input type='hidden' value='".trim($_GET["id"])."' name='supid'>
                                <input type='hidden' value='".$id."' name='id'>
                                <input id='cart' type='submit' value='加入购物车'/>       
                            </form>
                         </div>";//<!--goods_1结束-->
                     elseif ($_SESSION["user_role"]==2) {
                         echo "<a href='look.php?id=".$id."'>查看商品详情</a></div>";//<!--goods_1结束-->
                     }
                }
    
            }
            
        }
        $countPage = ($i + $pageSize - 1) / $pageSize;
        $countPage = floor($countPage);
    }
    mysql_close();

        ?>


        
     <!--第三行结束-->
     <div class="panel-foot text-center">
         共<?php echo $i;?> 条记录 <?php echo $curpage;?>/<?php if($i/$pageSize< 1){ echo "1";}else{ echo 
            floor($countPage); }
         ?> 页  
        <a href="shop.php?id=<?php echo trim($_GET["id"]);?>&page=1">首页</a>
        <?php if ($curpage != 1) {?>
            <a href="shop.php?id=<?php echo trim($_GET["id"]);?>&page=<?php echo $curpage - 1;?>">上一页</a>
        <?php }?>
        <?php 
            if ($curpage < ((int)$i/$pageSize)  ) {
        ?>
            <a href="shop.php?id=<?php echo trim($_GET["id"]);?>&page=<?php echo $curpage + 1;?>">下一页</a>
        <?php 
            }
            
        ?>
        <a href="shop.php?id=<?php echo trim($_GET["id"]);?>&page=<?php echo $countPage;?>">尾页</a>
        
    </div>

    
</div>

</div>




<div style="margin-top:200x;"></div>
<!-- footer -->
<?php
    include_once "../php/footer.php";
?>

<!-- <script src="http://cdn.bootcss.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="js/zone.js"></script>
<script src="../js/zone.js"></script>
<script src="../js/bootstrap-filestyle.min.js"></script>
 -->
</body>
</html>
