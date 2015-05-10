<?php
if(!isset($_SESSION)){ session_start(); };

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
    <link href="../css/style.css" rel="stylesheet">
    <link href="../css/shopstyle.css" rel="stylesheet" type="text/css">
    <!-- <link rel="stylesheet" type="text/css" href="../css/business.css" /> -->
    <script type="text/javascript" src="../js/jquery1.42.min.js"></script>
    <script type="text/javascript" src="../js/jquery.SuperSlide.2.1.1.js"></script>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="http://cdn.bootcss.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="http://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <link href="../css/shop.css" rel="stylesheet">
</head>
<body>
<!-- Head Navbar -->
<?php
//include_once "../php/header.php";
include_once "header.php";
include_once "../php/config.php";
$cid = $_GET["cid"] == null ? "1" : $_GET["cid"];
// if(!is_numeric(trim($_GET["id"])|| trim($_GET["id"])< 0 || trim($_GET["id"])>8)){
//     echo "<script language='javascript' type='text/javascript'>";  
//     echo "alert('查询出错，请重新查询！');";  
//     echo "window.location.href='index.php'";  
//     echo "</script>"; 
// }
$arr1=array("服饰","鞋帽","箱包"); 
$arr2=array("水果","肉禽","特产","冲饮","自助餐","农家乐"); 
$arr3=array("农家小店","旅店"); 
$arr4=array("车行","修车","洗车","打蜡"); 
$arr5=array("养殖","种植","林业"); 
$arr6=array("砖石","钢材","玻璃","机械"); 
$arr7=array("灯具","家具","洁具","门窗"); 
$arr8=array("农药","种子","化肥","农具"); 

$arr=array(0=>$arr1,1=>$arr2,2=>$arr3,3=>$arr4,4=>$arr5,5=>$arr6,6=>$arr7,7=>$arr8);
?>

<nav id="header_link" style="margin-top:-50px;">
    <ul>
        <!-- <li><a href="index.php" style="background:#4aa93e; color:#fff;">三农知识</a></li> -->
        <li><a href="index.php">衣</a>
            <ul style="margin-top:50px;margin-left:-60px;">
                <li><a href="index.php">服饰</a></li>
                <li><a href="index.php">鞋帽</a></li>
                <li><a href="index.php">箱包</a></li>
            </ul>
        </li>
        <li><a href="index.php?cid=2">食</a>
            <ul style="margin-top:50px;margin-left:20px;">
                <li><a href="index.php?cid=2">水果</a></li>
                <li><a href="index.php?cid=2">肉禽</a></li>
                <li><a href="index.php?cid=2">特产</a></li>
                <li><a href="index.php?cid=2">冲饮</a></li>
                <li><a href="index.php?cid=2">自助餐</a></li>
                <li><a href="index.php?cid=2">农家乐</a></li>
            </ul>
        </li>
        <li><a href="index.php?cid=3">住</a>
            <ul style="margin-top:50px;margin-left:100px;">
                <li><a href="index.php?cid=3">农家小店</a></li>
                <li><a href="index.php?cid=3">旅店</a></li>
            </ul>
        </li>
        <li><a href="index.php?cid=4">行</a>
            <ul style="margin-top:50px;margin-left:180px;">
                <li><a href="index.php?cid=4">车行</a></li>
                <li><a href="index.php?cid=4">修车</a></li>
                <li><a href="index.php?cid=4">洗车</a></li>
                <li><a href="index.php?cid=4">打蜡</a></li>
            </ul>
        </li>
        <li><a href="index.php?cid=5">农副产品</a>
            <ul style="margin-top:50px;margin-left:300px;">
                <li><a href="index.php?cid=5">养殖</a></li>
                <li><a href="index.php?cid=5">种植</a></li>
                <li><a href="index.php?cid=5">林业</a></li>
            </ul>
        </li>
        <li><a href="index.php?cid=6">建筑材料</a>
            <ul style="margin-top:50px;margin-left:470px;">
                <li><a href="index.php?cid=6">砖石</a></li>
                <li><a href="index.php?cid=6">钢材</a></li>
                <li><a href="index.php?cid=6">玻璃</a></li>
                <li><a href="index.php?cid=6">机械</a></li>
            </ul>
        </li>
        <li><a href="index.php?cid=7">装饰材料</a>
            <ul style="margin-top:50px;margin-left:640px;">
                <li><a href="index.php?cid=7">灯具</a></li>
                <li><a href="index.php?cid=7">家具</a></li>
                <li><a href="index.php?cid=7">洁具</a></li>
                <li><a href="index.php?cid=7">门窗</a></li>
            </ul>
        </li>
        <li><a href="index.php?cid=8">农资</a>
            <ul style="margin-top:50px;margin-left:790px;">
                <li><a href="index.php?cid=8">农药</a></li>
                <li><a href="index.php?cid=8">种子</a></li>
                <li><a href="index.php?cid=8">化肥</a></li>
                <li><a href="index.php?cid=8">农具</a></li>
            </ul>
        </li>
    </ul>
</nav>
<div class="main">
    <div id="goods" class="goods_show">
        <div class="type1">
            <?php

                include_once "../php/config.php";
                for($index=1;$index<7;$index++){
                    $sql = "select * from xm_product where catid = '".$cid."' and subid='".$index."' order by id desc  limit 8 ";
                    $result = mysql_query($sql);
                    if($result&&mysql_num_rows($result)>0){
                        $i = 1;
                        if($index==1)
                            echo "<div class='type-header'><p>".$arr[$cid-1][$index-1]."</p></div>";
                        else
                            echo "<div class='type-header' style='margin-top:600px;'><p>".$arr[$cid-1][$index-1]."</p></div>";    
                        //echo $sql."<br>".$arr[$cid-1][$index-1];
                        while ($row = mysql_fetch_array($result)) {
                            
                            $nid = $row['id'];
                            $photo = $row['product_photo'];
                            //$des = $row['description'];
                            //$des = substr($des, 0,20);
                            //$des = mb_substr($des,0,5,'UTF-8');
                            // echo "<li><a href='info.php?id=".$nid."'>".$title."......".$created."...</a></li>";
                            if($i<=8 && !empty($photo)){
                                $i++;
                                if($i%4!=0){
                                    echo "<div class='goods_1'><a id='img_link' href='look.php?id=".$nid."'>
                <img alt='服饰'  src='../images/zone/product/".$photo."'></a></div>";    
                                }else{
                                    echo "<div class='goods_1 goods_4'><a id='img_link' href='look.php?id=".$nid."'>
                <img alt='服饰'  src='../images/zone/product/".$photo."'></a></div>";    
                                }
                                

                            }
                            
                        }
                    }
                

                }
                    // $rowsArray = $conne -> getRowsArray($sql);
                 //mysql_close();
                ?>

                
            

    </div>
</div>    
</div>






<div style="margin-top:10px;"></div>
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
