<?php
if(!isset($_SESSION)){ session_start(); };
if(empty($_SESSION["id"])){
    echo "<script language='javascript' 
    type='text/javascript'>";  
    echo "alert('权限不足，请先登录！');";  
    echo "window.location.href='../login.php'";  
    echo "</script>"; 
}
?>
<!DOCTYPE html>
<html lang="zh-cn">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>我的购物车</title>
    <link rel="icon" type="image/x-icon" href="../images/icon/logo2.png">
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <!-- <link href="../css/login.css" rel="stylesheet"> -->
    <link href="../css/style.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="../css/business.css" />
    <link href="../css/zone.css" rel="stylesheet">
    <link href="../css/shopnum.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="http://cdn.bootcss.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="http://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<!-- Head Navbar -->
<?php
//include_once "../php/header.php";
include_once "header.php";
?>

<div id="main">
    <div id="left">
        <ul>
            <li><a href="mybill.php">我的订单</a></li>
            <li><a href="../zone/index.php">个人信息</a></li>
            <li><a style="color:red;" href="cart.php">我的购物车</a></li>
        </ul>
    </div>

    <div id="right">
        
            <div id="good">
            <h3>购物车管理<label></label></h3>
                <br/>
                <form action="bill.php" method="post">
                <table>
                    <thead><th width="150px;">商品图片</th><th width="150px;">商品名称</th><th width="100px;">操作</th><th width="100px;">商品尺寸</th><th width="150px;">商品单价(￥)</th><th width="100px;">商品数量</th><th width="200px;">金额</th></thead>
                    <tbody>
                        <!-- <tr><td><img src="../images/zone/shoe.jpg"></td>
                            <td>懒人鞋</td><td>36</td><div class=""><td class="">36元</td><td class="p_num" style="padding-top:40px;margin-top:40px;">
                                <span class="sy_minus" id="sy_minus_gid1">-</span> 
                                <input class="sy_num" id="sy_num_gid1" readonly="readonly" type="text" name="number1" value="1" /> 
                                <span class="sy_plus" id="sy_plus_gid1">+</span>
                            </td><td class="">需支付：36元</td></div><td>删除</td></tr> -->
            <?php
                    include_once "../php/config.php";

                    $sql = "select * from xm_cart where state=0 and custid = '".$_SESSION["id"]."'";
                    // $rowsArray = $conne -> getRowsArray($sql);
                    
                    $result = mysql_query($sql);
                    $totals = mysql_num_rows($result);
                    //echo $totals;
                    if($result&&mysql_num_rows($result)>0){
                        $i = 0;
                        $total = 0;
                        while ($row = mysql_fetch_array($result)) {
                            $i++;
                            $id = $row['id'];
                            $title = $row['title'];
                            $photo = $row['product_photo'];
                            $price = intval($row['sprice']);
                            $num = $row['num'];
                            $size = $row['size'];
                            $total += $price;
                            // echo "<tr><td><img src='../images/zone/product/".$photo."'></td>
                            // <td><a href='look.php?id=".$id."'>".$title."</a></td><td>".$price."</td><td>".
                            // $size."</td><td>".$num."</td><td><a href='editPT.php?id=".$id."'></a></td><td><a href='dele.php?id=".$id."'>删除</a></td></tr>";
                            if($i<$totals){
                                echo "<input type='hidden' name='pro".$i."' value='".$id."' ><tr><td><img style='width:100px;height:90px;' src='../images/zone/product/".$photo."'></td>
                            <td><a href='look.php?id=".$id."'>".$title."</a></td><td><a href='dele.php?id=".$id."'>删除</a></td><td>".$size."</td><div class=''><td class=''>".$price."元</td><td class='p_num' style='padding-top:40px;margin-top:40px;'>
                                <span class='sy_minus' id='sy_minus_gid1'>-</span> 
                                <input class='sy_num' id='sy_num_gid1' readonly='readonly' type='text' name='number".$i."' value='1' /> 
                                <span class='sy_plus' id='sy_plus_gid1'>+</span>
                            </td><td class=''>需支付：".$price."元</td></div></tr>";    
                            }else{
                                echo "<input type='hidden' name='pro".$i."' value='".$id."' ><tr><td><img style='width:100px;height:90px;' src='../images/zone/product/".$photo."'></td>
                            <td><a href='look.php?id=".$id."'>".$title."</a></td><td><a href='dele.php?id=".$id."'>删除</a></td><td>".$size."</td><div class=''><td class=''>".$price."元</td><td class='p_num' style='padding-top:40px;margin-top:40px;'>
                                <span class='sy_minus' id='sy_minus_gid1'>-</span> 
                                <input class='sy_num' id='sy_num_gid1' readonly='readonly' type='text' name='number".$i."' value='1' /> 
                                <span class='sy_plus' id='sy_plus_gid1'>+</span>
                            </td><td class=''>总共需要支付：".$total."元</td></div></tr>";
                            }
                            

                        }
                    }
                //mysql_close();
            ?>       <!-- <p class="">总共需要支付：94元</p> -->
            <!-- <tr><td></td><td></td><td></td><td></td><td></td><td class="">总共需要支付：<?php //echo $total;?>元</td><td></td></tr> -->
                    </tbody>
                </table>
                <!-- <a href="display.jsp"><button>继续购物</button></a>&nbsp;&nbsp;<a href="buy.jsp?op=clear">清空购物车</a>       -->
                <br>
                <center>
                <button class="btn" style="background-color:orange;"><a href="index.php">继续购物</a></button>
                <button class="btn" style="background-color:orange;"><a href="dealcart.php?op=clear">清空购物车</a></button>
                <button class="btn" style="background-color:orange;">去结算</button>
                </form>
                </center>
                </div>
     
    </div>
</div>


<!-- footer -->
<?php
    include_once "../php/footer.php";
?>
<script type="text/javascript" src="../js/jquery-1.8.0.min.js"></script>
<script type="text/javascript" src="../js/shopnum.js"></script>
</body>
</html>