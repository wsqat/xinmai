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
    <title>处理购物车</title>
    <link rel="icon" type="image/x-icon" href="../images/icon/logo2.png">
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <!-- <link href="../css/login.css" rel="stylesheet"> -->
    <link href="../css/style.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="../css/business.css" />
    <link href="../css/zone.css" rel="stylesheet">
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
include_once "../php/function.php";
include_once "../php/config.php";
?>

<div id="main">
<?php

//echo "<br>";echo "<br>";echo "<br>";echo "<br>";echo "<br>";echo "<br>";echo "<br>";echo "<br>";echo "<br>";echo "<br>";echo "<br>";echo "<br>";echo "<br>";echo "<br>";echo "<br>";echo "<br>";echo "<br>";echo "<br>";echo "<br>";echo "<br>";
//echo "success1";
//print_r($_POST);
$op = trim($_POST["op"]);
$id = trim($_POST["id"]);
if($op == "add"){

    if(empty($op) || !is_numeric($id)){
        echo "<script language='javascript' type='text/javascript'>";  
        echo "alert('查询出错，请重新查询！');";  
        echo "window.location.href='index.php'";  
        echo "</script>"; 
    }
    //echo "succes2";
    //$id = trim($_POST["id"]);
    $supid = trim($_POST["supid"]);
    $custid = $_SESSION["id"];
    $result = mysql_query("select * from xm_product where id = ".$id." ");
    
    if($result){
        //echo "succes3";
        $arr = mysql_fetch_assoc(mysql_query("select * from xm_product where id = '".$id."' "));
        $id = $arr['id'];
        $title = $arr['title'];
        $photo = $arr['product_photo'];
        $price = $arr['sprice'];
        // $num = $arr['num'];
        $size = $arr['size'];    
        $supid = $arr['supid']; 
        $row = mysql_fetch_assoc(mysql_query("select * from xm_supplier where id = '".$supid."' "));
        $name = $row['title']; 
        $created = date('Y-m-d H:i:s',time());

        //将所选购商品加入到购物车中
        $insql = "insert into xm_cart(title,product_photo,sprice,num,size,custid,supid,state,created) 
            values('$title','$photo','$price',1,'$size','$custid','$supid',0,'$created')";

        // $insql = "insert into xm_product(title,size,description,sprice,num,catid,supid,created) values('$name','$size','$des','$price','$number','$catid','$supid','$created') ";
        //echo $insql;
        $results = mysql_query($insql);
        if($results){
            //echo "<br>";
            //echo "success";
            if($_POST["time"]=="now"){
                header("location:../shop/cart.php");
            }else{
                echo_message("加入购物车成功！",-1);    
                //header("location:../shop/index.php");
            }
            

        }else{
            //echo "fail";
            echo_message("加入购物车失败！",-1);
        }
    }

}elseif($_GET["op"]=="clear"){
    include_once "../php/function.php";
    include_once "../php/config.php";
    
    //$sql = "delete from xm_cart where id='$id'";
    $custid = $_SESSION["id"];
    $sql = "delete from xm_cart where custid='$custid' and state = '0'";
    mysql_query($sql);
    if(mysql_affected_rows()){
        echo_message("删除成功！",-1);
    }else{
        echo_message("删除失败！",-1);
    }
    mysql_close();
}

?>
</div>


<!-- footer -->
<?php
    include_once "../php/footer.php";
?>

</body>
</html>