<?php
if(!isset($_SESSION)){ session_start(); };
if(empty($_SESSION["id"])){
    echo "<script language='javascript' 
    type='text/javascript'>";  
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
include_once "../php/config.php";

$arr = mysql_fetch_assoc(mysql_query("select * from xm_customer where id = '".$_SESSION["id"]."' "));
$location1 = $arr['location1'];
$location = explode("||", $location1);
$totalnum=0;
if(!empty($_POST)){
    for($j=0;$j<count($_POST);$j++){
        if(isset($_POST["pro".$j.""]) && isset($_POST["number".$j.""])){
            $sql = "update xm_cart set  num = '".$_POST["number".$j.""]."' where id = '".$_POST["pro".$j.""]."' ";
            $result = mysql_query($sql);
            // if($result) echo "ok";
            // else echo "no";
        }
    }    
}


$getsql = "select * from xm_cart where state=0 and custid = '".$_SESSION["id"]."' ";
$result=mysql_query($getsql);
$nums = 0;
$prices = 0;
if($result&&mysql_num_rows($result)>0){
    while ($row = mysql_fetch_array($result)) {
            $num = $row["num"];
            $price = $row["sprice"];
            $nums +=$num;
            $prices +=$price*$num;

    }
}
?>

<div id="main">
   <?php 
    //print_r($_POST);
   ?>
   <form action="dealbill.php" method="post">
   <h3>确认订单信息</h3>
   <hr>
    <label style="color:blue;font-size:20px;"> 订单信息</label><br>
        <input type="hidden" name="nums" value="<?php echo $nums;?>">
        <label>共计:</label><?php echo $nums;?>件&nbsp;&nbsp;&nbsp;&nbsp;   
        <input type="hidden" name="prices" value="<?php echo $prices;?>">
        <label>总金额:</label><?php echo $prices;?>元&nbsp;&nbsp;&nbsp;&nbsp;
        <br><br>
    <label style="color:blue;font-size:20px;"> 收货人信息</label><br>
        <label>收货人:</label><?php echo $location[0];?>&nbsp;&nbsp;&nbsp;&nbsp;
        <label>地址:</label><?php echo $location[1];?>&nbsp;&nbsp;&nbsp;&nbsp;
        <label>联系号码:</label><?php echo $location[2];?>&nbsp;&nbsp;&nbsp;&nbsp;
        <br><br>
        <input type="hidden" name="location1" value="<?php echo $location1;?>">
        <?php
            if(isset($location1)){

            }else{
        ?>
    <form method="post" action="addlocation.php">
        <label>收货人:</label><input name="name" type="text">&nbsp;&nbsp;&nbsp;&nbsp;
        <label>地址:</label><input name="location" style="width:300px;" type="text">&nbsp;&nbsp;&nbsp;&nbsp;
        <label>联系号码:</label><input name="phone" type="text">&nbsp;&nbsp;&nbsp;&nbsp;
        <button class="btn">添加地址</button>
    </form>
        <?php
            }
        ?>
    <br>
    <button class="btn" style="margin-left:800px;width:200px;background:orange;">提交</button>
    </form>
</div>


<!-- footer -->
<?php
    include_once "../php/footer.php";
?>
<script type="text/javascript" src="../js/jquery-1.8.0.min.js"></script>
<script type="text/javascript" src="../js/shopnum.js"></script>
</body>
</html>