<?php
if(!isset($_SESSION)){ session_start(); };
// if(empty($_SESSION["id"])){
//     echo "<script language='javascript' type='text/javascript'>";  
//     echo "alert('权限不足，请先登录！');";  
//     echo "window.location.href='../index.php'";  
//     echo "</script>"; 
// }
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
    <link href="../css/shopstyle.css" rel="stylesheet" type="text/css">
    <!-- <link rel="stylesheet" type="text/css" href="../css/store.css" /> -->
    <link href="../css/shops.css" rel="stylesheet">

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
$id = trim($_GET["id"]);  
// if (empty($value)){  
//     echoError('请输入用户名!');  
// }  
if(empty($id) || !is_numeric($id)){
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
$array = mysql_fetch_assoc(mysql_query("select * from xm_supplier where id = '".trim($_GET["id"])."' "));
$supid = $array['id'];
$uname = $array['username'];
$uheader = $array['header_photo'];
$uemail = $array['email'];
$upwd = $array['password'];
$sex = $array['sex'];
$utel = $array['phone'];
// $location = $array['location'];
// $telephone = $array['telephone'];
//echo $location

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

<div class="main" style="margin-top:80px;">
    <div id="store_header">
    <center><h3 style="width:800px;"> <a class="stroeQYYS_brand" href="#">
            <img alt="清雅衣舍" style="width:195px;height:225px;" src="../upload_images/head_photo/<?php echo $uheader;?>"></a><span>
        <label>商家名称:</label><?php echo $uname;?>&nbsp;&nbsp; <label>商家电话</label>:<?php echo $utel;?></span></h3></center>
    </div>
   
    <!-- <div id="goods" class="goods_shoes" > -->
    <div id="goods" class="goods_show" style="text-align:center;">
        <div class="type1">
    <?php    
    include_once "../php/config.php";

        
    $sql = "select * from xm_product where supid =  '".trim($_GET["id"])."'  ";     
    $result = mysql_query($sql);
    $type =array();
    $m=0;
    if($result&&mysql_num_rows($result)>0){
        while ($arrs = mysql_fetch_array($result)) {
            $catid = $arrs['catid']-1;
            $subid = $arrs['subid']-1;
            //echo $catid." ".$subid;
            for($j=0;$j<8;$j++){
                for($k=0;$k<6;$k++){
                    if($j==$catid && $k==$subid){
                        //echo $arr[$j][$k];
                        $type[$m]=$arr[$j][$k];    
                        $m++;
                        
                    }
                }
            }
        }
        
    }
    //print_r($type);
    $type = array_flip(array_flip($type)); 
    //print_r($type);
    //echo $type[0];
    //echo $type[19];
    $cate=array();
    $cateid=array();
    $cateid[0] = 0;
    $k=0;$h=1;
    for($j=0;$j<$m;$j++){
        if(!empty($type[$j])){
            $cate[$k]=$type[$j];
            $cateid[$h]=$j+1;
            $h++;
            $k++;
        }
    }
    //print_r($cate);
    //print_r($cateid);
    for($j=0;$j<$k;$j++){

        $sql = "select * from xm_product where supid =  '".trim($_GET["id"])."' limit ".$cateid[$j].", 8 ";     
        $result = mysql_query($sql);
        if($result&&mysql_num_rows($result)>0){
            $pageSize = 8;
            $curpage = 1;
            $countPage = 0;
            $curpage = $_GET["page"] == null ? "1" : $_GET["page"];
            $i = 0;

            if($j==0)
                echo "<div class='type-header'><p>".$cate[0]."<a style='margin-left:700px;text-decoration:none;' href='javascript :;' onClick='javascript :history.back(-1);'>返回上级</a></p></div>";
            else
                echo "<div class='type-header' style='margin-top:800px;'><p>".$cate[$j]."</p></div>";
            $n=0;
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

                    if($n<=8 && !empty($photo)){
                        $n++;
                        if($n%4!=0){
                            echo "<div class='goods_1'><a id='img_link' href='look.php?id=".$id."'>
        <img alt='服饰' style='width:195px;height:255px;' src='../images/zone/product/".$photo."'></a>
            <ul>
                <li><a href='look.php?supid=".$supid."&id=".$id."'>".$title."</a></li>
                <li>".mb_substr($des , 0 , 15,'utf-8')."</li>
                <li style='color:#F00; font-size:18px'>价格:".$price."</li>
                <li style='line-height:20px'>数量:".$num."</li>
                <li style='line-height:20px'>尺码:".$size."</li>
            </ul>";
                        if($_SESSION["user_role"]==1){
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
                             //if ($_SESSION["user_role"]==2) 
                         }else{
                             echo "<a href='look.php?id=".$id."'>查看商品详情</a></div>";//<!--goods_1结束-->
                         }

                    }else{
                        echo "<div class='goods_1 goods_4'><a id='img_link' href='look.php?id=".$id."'>
    <img alt='服饰' style='width:195px;height:255px;' src='../images/zone/product/".$photo."'></a>
                        <ul>
                <li><a href='look.php?supid=".$supid."&id=".$id."'>".$title."</a></li>
                <li>".mb_substr($des , 0 , 15,'utf-8')."</li>
                <li style='color:#F00; font-size:18px'>价格:".$price."</li>
                <li style='line-height:20px'>数量:".$num."</li>
                <li style='line-height:20px'>尺码:".$size."</li>
            </ul>";
                        if($_SESSION["user_role"]==1){
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
                         //if ($_SESSION["user_role"]==2) 
                     }else{
                         echo "<a href='look.php?id=".$id."'>查看商品详情</a></div>";//<!--goods_1结束-->
                     }

                    }
                    

                }
                
                // if($i%4!=0){
                //     echo "<div class='goods_1'><a id='img_link' href='#'><img alt='登山鞋' src='../images/zone/product/".$photo."'></a>
                //          <ul>
                //             <li><a href='look.php?supid=".$supid."&id=".$id."'>".$title."</a></li>
                //             <li>".$desc."</li>
                //             <li style='color:#F00; font-size:18px'>价格:".$price."</li>
                //             <li style='line-height:20px'>数量:".$num."</li>
                //             <li style='line-height:20px'>尺码:".$size."</li>
                //          </ul>";
                //     if($_SESSION["user_role"]==1)
                //          echo "<form method='post' action='dealcart.php'>
                //                 <input type='hidden' value='add' name='op'>
                //                 <input type='hidden' value='now' name='time'>
                //                 <input type='hidden' value='".trim($_GET["id"])."' name='supid'>
                //                 <input type='hidden' value='".$id."' name='id'>
                //                 <input id='buy' type='submit' value='立即购买'/>       
                //             </form>
                //             <form method='post' action='dealcart.php'>
                //                 <input type='hidden' value='add' name='op'>
                //                 <input type='hidden' value='".trim($_GET["id"])."' name='supid'>
                //                 <input type='hidden' value='".$id."' name='id'>
                //                 <input id='cart' type='submit' value='加入购物车'/>       
                //             </form>
                //          </div>";//<!--goods_1结束-->
                //          //<button class='btn' style='background-color:red;'>加入购物车</button>
                //      elseif ($_SESSION["user_role"]==2) {
                //          echo "<a href='look.php?id=".$id."'>查看商品详情</a></div>";//<!--goods_1结束-->
                //      }
                // }
                // elseif($i%4==0){
                //     echo "<div class='goods_1 goods_4'><a id='img_link' href='#'><img alt='登山鞋' src='../images/zone/product/".$photo."'></a>
                //          <ul>
                //             <li><a href='look.php?id=".$id."'>".$title."</a></li>
                //             <li>".$desc."</li>
                //             <li style='color:#F00; font-size:18px'>价格:".$price."</li>
                //             <li style='line-height:20px'>数量:".$num."</li>
                //             <li style='line-height:20px'>尺码:".$size."</li>
                //          </ul>";
                //     if($_SESSION["user_role"]==1)
                //          echo "<form method='post' action='dealcart.php'>
                //                 <input type='hidden' value='add' name='op'>
                //                 <input type='hidden' value='now' name='time'>
                //                 <input type='hidden' value='".trim($_GET["id"])."' name='supid'>
                //                 <input type='hidden' value='".$id."' name='id'>
                //                 <input id='buy' type='submit' value='立即购买'/>       
                //             </form>
                //             <form method='post' action='dealcart.php'>
                //                 <input type='hidden' value='add' name='op'>
                //                 <input type='hidden' value='".trim($_GET["id"])."' name='supid'>
                //                 <input type='hidden' value='".$id."' name='id'>
                //                 <input id='cart' type='submit' value='加入购物车'/>       
                //             </form>
                //          </div>";//<!--goods_1结束-->
                //      elseif ($_SESSION["user_role"]==2) {
                //          echo "<a href='look.php?id=".$id."'>查看商品详情</a></div>";//<!--goods_1结束-->
                //      }
                // }
    
                }
            
            }
            $countPage = ($i + $pageSize - 1) / $pageSize;
            $countPage = floor($countPage);
        }    
    }
    
    mysql_close();

        ?>


        

    
</div>
</div>

<div style="margin-top:100px;"></div>
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
