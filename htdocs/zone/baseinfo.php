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
    <title>我的店铺</title>
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
    <link rel="stylesheet" type="text/css" href="../uploadify/uploadify.css"/>
    <!-- 图片上传 -->
    <script type="text/javascript" src="../uploadify/jquery-1.7.2.min.js"></script>
    <script type="text/javascript" src="../uploadify/jquery.uploadify-3.1.min.js"></script>
    <script type="text/javascript">
    var img_id_upload=new Array();//初始化数组，存储已经上传的图片名
    var i=0;//初始化数组下标
    $(function() {
        $('#file_upload').uploadify({
            'auto'     : false,//关闭自动上传
            'removeTimeout' : 1,//文件队列上传完成1秒后删除
            'swf'      : '../uploadify/uploadify.swf',
            'uploader' : '../uploadify/uploadify.php',
            'method'   : 'post',//方法，服务端可以用$_POST数组获取数据
            'buttonText' : '选择图片',//设置按钮文本
            'multi'    : true,//允许同时上传多张图片
            'uploadLimit' : 1,//一次最多只允许上传10张图片
            'fileTypeDesc' : 'Image Files',//只允许上传图像
            'fileTypeExts' : '*.gif; *.jpg; *.png',//限制允许上传的图片后缀
            'fileSizeLimit' : '20000KB',//限制上传的图片不得超过200KB 
            'onUploadSuccess' : function(file, data, response) {//每次成功上传后执行的回调函数，从服务端返回数据到前端
                   img_id_upload[i]=data;
                   i++;
                   alert(data);
            },
            'onQueueComplete' : function(queueData) {//上传队列全部完成后执行的回调函数
               // if(img_id_upload.length>0)
               // alert('成功上传的文件有：'+encodeURIComponent(img_id_upload));
            }  
            // Put your options here
        });
    });
    </script>
</head>
<body>
<!-- Head Navbar -->
<?php
//include_once "../php/header.php";
include_once "header.php";
include_once "../php/config.php";
if($_SESSION["user_role"]==1)
    $usertable = "xm_customer";
elseif($_SESSION["user_role"]==2)
    $usertable = "xm_supplier";
$arr = mysql_fetch_assoc(mysql_query("select * from ".$usertable." where id = '".$_SESSION["id"]."' "));
        $uname = $arr['username'];
        $title = $arr['title'];
        $location = $arr['location'];
        $telephone = $arr['telephone'];
        $details = $arr['details'];
        $uheader = $arr['header_photo'];
        $uemail = $arr['email'];
        $upwd = $arr['password'];
        $sex = $arr['sex'];
        $utel = $arr['phone'];
?>

<div id="main">
    <div id="left">
        <ul>
            <li><a href="">我的订单</a></li>
            <li><a href="index.php">个人信息</a></li>
            <li><a style="color:red;" href="space.php">我的店铺</a></li>
        </ul>
    </div>

    <div id="right">
        <?php
            if($_SESSION["user_role"]==1){
                echo "<br><h3>您还未注册商家，请先注册！</h3><br>
                <h2><a href='../reg.php'><button class='btn btn-primary' style='background-color:orange;margin-left:300px;width:200px;' type='submit'>商家注册</button></a></h2>";
            }elseif($_SESSION["user_role"]==2){
        ?>
            <div id="good">
            <h3>基本信息  || <a href="space.php">  商品管理</a>    ->   <label><a href="add.php">新增商品</a></label></h3>
                <br/>
                <form method="post" action="publishBF.php">
                    <h4><label>商家名称: </label>&nbsp;&nbsp;&nbsp;&nbsp;<input name="name" value="<?php echo $title;?>" type="text"></h4>
                    <h4><label>商家电话: </label>&nbsp;&nbsp;&nbsp;&nbsp;<input name="telephone" value="<?php echo $telephone;?>" type="text"></h4>
                    <h4><label>商家地址: </label>&nbsp;&nbsp;&nbsp;&nbsp;<input name="location" value="<?php echo $location;?>" type="text"></h4>   
                    <h4><label>商家描述: </label>&nbsp;&nbsp;&nbsp;&nbsp;</h4>
                    <textarea rows="10" cols="60" name="des"><?php echo $details;?></textarea>
                    <h2><a href='../reg.php'><button class='btn btn-primary' style='background-color:orange;margin-left:300px;width:200px;' type='submit'>确认</button></a></h2>
                </form>
                
                </div>
        <?php
            }
        ?>
    </div>
</div>


<!-- footer -->
<?php
    include_once "../php/footer.php";
?>

</body>
</html>