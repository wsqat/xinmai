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
<title>我的店铺</title>
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
    $result = mysql_query("select * from xm_product where id = '".trim($_GET["id"])."' ");
    if($result){
        $arr = mysql_fetch_assoc(mysql_query("select * from xm_product where id = '".trim($_GET["id"])."' "));
        $title = $arr['title'];
        $photo = $arr['product_photo'];
        $price = $arr['sprice'];
        $num = $arr['num'];
        $size = $arr['size'];    
        $des = $arr['description']; 
        $catid = $arr['catid']; 
        $row = mysql_fetch_assoc(mysql_query("select * from xm_category where id = '".$catid."' "));
        $catid = $row['title']; 
?>


<?php
if($_SESSION["user_role"]==1){
                echo "<br>
<h3>您还未注册商家，请先注册！</h3>
<br>
<h2>
    <a href='../reg.php'>
        <button class='btn btn-primary' style='background-color:orange;margin-left:300px;width:200px;' type='submit'>商家注册</button>
    </a>
</h2>
";
            }elseif($_SESSION["user_role"]==2)
            {
        ?>
<div class="container" style="margin-top:70px;">
    <div class="row">
        <div class="col-lg-10 col-lg-offset-1">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">商品详情</h3>
                </div>
                <div class="panel-body">
                    <form class="form-horizontal col-lg-6" id="publishform" role="form" action="publishDT.php"
                    method="post" enctype="multipart/form-data" >
                        <div style="margin-left:100px;">
                            <div class="form-group">
                            <label for="name" class="col-rg-6 control-label">商品名 : <?php echo $title;?></label>

                        </div>
                        
                        <div class="form-group">
                            <label for="name" class="col-rg-6 control-label">商品类型 : <?php echo $catid;?></label>
                        </div>
                        

                        <div class="form-group">
                            <label for="price" class="col-rg-6 control-label">单价 ：<?php echo $price;?></label>
                        </div>

                        <div class="form-group">
                            <label for="number" class="col-rg-6 control-label">库存 : <?php echo $num;?>  </label>
                        </div>

                        <div class="form-group">
                            <label for="size" class="col-rg-6 control-label">尺码 : <?php echo $size;?>  </label>
                        </div>

                        <div class="form-group">
                            <label for="size" class="col-rg-6 control-label">商品图片 : 
                            <img src="../images/zone/product/<?php echo $photo;?>"></label>
                        </div>

                        <div class="form-group">
                            <label for="textarea" class="col-rg-6 control-label">详情描述 ： <?php echo $des;?></label>
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
            }

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
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="http://cdn.bootcss.com/jquery/1.11.1/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="http://cdn.bootcss.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="../js/bootstrap-filestyle.min.js"></script>
<script src="../js/previewImage.js"></script>
<script src="../js/addproduct.js"></script>
</body>
</html>