<?php
if(!isset($_SESSION)){ session_start(); };
if(empty($_SESSION["id"])){
    echo "<script language='javascript' 
    type='text/javascript'>
";  
    echo "alert('权限不足，请先登录！');";  
    echo "window.location.href='../index.php'";  
    echo "
</script>
"; 
}
?>
<!DOCTYPE html>
<html lang="zh-cn">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title>商品详情</title>
<link rel="icon" type="image/x-icon" href="../images/icon/logo2.png">
<link href="../css/bootstrap.min.css" rel="stylesheet">
<!-- <link href="../css/login.css" rel="stylesheet">
-->
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
include_once "../php/config.php";
include_once "../php/function.php";
if(isset($_GET["id"]) && is_numeric($_GET["id"])){
    $result = mysql_query("select * from xm_cart where id = '".trim($_GET["id"])."' ");
    if($result){
        $arr = mysql_fetch_assoc(mysql_query("select * from xm_cart where id = '".trim($_GET["id"])."' "));
        $id = $arr['id'];
        $title = $arr['title'];
        $photo = $arr['product_photo'];
        $price = $arr['sprice'];
        $num = $arr['num'];
        $size = $arr['size'];    
        //$des = $arr['description']; 
        $custid = $arr['custid'];     
        $supid = $arr['supid'];        
        $row = mysql_fetch_assoc(mysql_query("select * from xm_customer where id = '".$custid."' "));
        $username = $row['username']; 
        $row = mysql_fetch_assoc(mysql_query("select * from xm_supplier where id = '".$supid."' "));
        $sup = $row['title']; 
?>

<div class="container" style="margin-top:70px;">
    <div class="row">
        <div class="col-lg-10 col-lg-offset-1">
            <div class="panel panel-primary">
                <div class="panel-heading">
                <h3 class="panel-title">订单详情 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a href="javascript :;" onClick="javascript :history.back(-1);">返回订单管理</a></h3>
                </div>
                <div class="panel-body">
                    <form class="form-horizontal col-lg-6" id="publishform" role="form" action="dealcart.php"
                    method="post" enctype="multipart/form-data" >
                        <div style="margin-left:100px;">
                            <div class="form-group">
                            <label for="name" class="col-rg-6 control-label">商家名 : <?php echo $sup;?></label>

                        </div>
                        
                        <div class="form-group">
                            <label for="name" class="col-rg-6 control-label">支付人 : <?php echo $username;?></label>
                        </div>
                        
                        <div class="form-group">
                            <label for="name" class="col-rg-6 control-label">购买物品 : <?php echo $title;?></label>
                        </div>

                        <div class="form-group">
                            <label for="price" class="col-rg-6 control-label">单价 ：<?php echo $price;?></label>
                        </div>

                        <div class="form-group">
                            <label for="number" class="col-rg-6 control-label">数量 : <?php echo $num;?>  </label>
                        </div>

                        <div class="form-group">
                            <label for="size" class="col-rg-6 control-label">尺码 : <?php echo $size;?>  </label>
                        </div>

                        <div class="form-group">
                            <label for="size" class="col-rg-6 control-label">商品图片 : 
                            <img src="../images/zone/product/<?php echo $photo;?>"></label>
                        </div>

                        
                        <div class="form-group">
                            <a href="mybill.php">返回订单管理</a>
                        </div>
                        </div>

                    

                </form>
                <!-- 上传图片在本地预览 -->
                <div class="col-lg-6" id="localImag">
                    <img class="img-thumbnail" id="preview"/>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<?php
    

    }else{
        echo_message("您所查询不存在！",3);
    }
    
}else{
    echo_message("您所查询不存在！",3);
}
?>

<!-- footer -->
<?php
    include_once "../php/footer.php";
?>

</body>
</html>