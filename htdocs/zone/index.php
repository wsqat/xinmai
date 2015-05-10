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
    <title>个人中心</title>
    <link rel="icon" type="image/x-icon" href="../images/icon/logo2.png">
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <!-- <link href="../css/login.css" rel="stylesheet"> -->
    <link href="../css/style.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="../css/business.css" />

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="http://cdn.bootcss.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="http://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <link href="../css/zone.css" rel="stylesheet">
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
        $uheader = $arr['header_photo'];
        $uemail = $arr['email'];
        $upwd = $arr['password'];
        $sex = $arr['sex'];
        $utel = $arr['phone'];
        // $telephone = $arr['telephone'];
        // $telephone = $arr['location'];

?>

<!-- main -->
<div id="main">
    <div id="left">


        <ul>
            <li><a href="../shop/mybill.php">我的订单</a></li>
            <li><a style="color:red;" href="index.php">个人信息</a></li>
            <li><a href="space.php">我的店铺</a></li>
        </ul>
    </div>

    <div id="right">


        <div class="col-lg-8" style="overflow-x:hidden;">
            <div class="left-info">
                <img src="../upload_images/head_photo/<?php echo $uheader;?>" style="width:180px;height:180px;border-radius: 10px;margin-right: 10px;"class="img-circle pull-left">
                
            </div>
            <div class="right-info">
                <div style="margin-bottom:10px;">
                    <span class="h3"><?php echo $uname;//echo $_SESSION["id"]?></span>
                </div>
                <div>
                    <span class="h3"><?php echo $uemail;?></span>
                </div>
                <div>
                    <input type="file" class="btn btn-default" name="file_upload" id="file_upload" />
                    <!--<p><a href="javascript:$('#file_upload').uploadify('upload','*');">上传</a> -->
                    <!--动态传值  $('#file_upload').uploadify('settings', 'formData', {'typeCode':document.getElementById('id_file').value}); -->
                    <p>
                        <a href="javascript:$('#file_upload').uploadify('settings', 'formData', {'typeCode':document.getElementById('id_file').value});$('#file_upload').uploadify('upload','*')"><button class="btn btn-primary" type="submit">确认上传</button></a>
                        <a href="javascript:$('#file_upload').uploadify('cancel','*')"><button class="btn btn-success" type="submit">重置上传队列</button></a>
                    </p>
                    <input type="hidden" value="1215154" name="tmpdir" id="id_file">
                </div>
            </div>
        </div>

        <br ><br ><br >
         <div class="col-lg-10" style="margin-top:40px;">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">个人资料卡</h3>
                </div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" action="update.php" method="post" >
                        <div class="form-group form-group-sm">
                            <label class="col-sm-3 control-label">昵称</label>

                            <div class="col-sm-9">
                                <!-- <p class="form-control-static yuanlai"><?php echo $uname;?></p> -->
                                <input type="text" id="name" name="name" class="form-control xiugai" value="<?php echo $uname;?>">
                            </div>
                        </div>
                        

                        <div class="form-group form-group-sm">
                            <label class="col-sm-3 control-label">会员类型</label>

                            <div class="col-sm-9">
                                <?php 
                                    if($_SESSION["user_role"]==1) 
                                        echo "<select  id='power' name='power' class='form-control'>
                                            <option value='0'>个人</option></select>";
                                    elseif($_SESSION["user_role"]==2) 
                                        echo "<select  id='power' name='power' class='form-control'>
                                            <option value='1'>商家</option></select>";?>
                                <!-- <select  id="power" name="power" class="form-control">
                                  <option value="0">个人</option>
                                  <option value="1">商家</option>
                                </select> -->
                            </div>
                        </div>
                        

                        <div class="form-group form-group-sm">
                            <label class="col-sm-3 control-label">性别</label>

                            <div class="col-sm-9">
                                <?php if($sex==1) echo "<input type='radio' checked name='sex' id='inlineRadio1' value='1' >男
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <input type='radio' name='sex' id='inlineRadio2' value='0'>女";
                                else echo "<input type='radio'  name='sex' id='inlineRadio1' value='1' >男
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <input type='radio' checked name='sex' id='inlineRadio2' value='0'>女";?>
                                <!-- <input type="radio" checked name="sex" id="inlineRadio1"value="1">男
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <input type="radio" name="sex" id="inlineRadio2" value="0">女 -->
                                
                            </div>
                        </div>


                        
                        <div class="form-group form-group-sm">
                            <label class="col-sm-3 control-label">邮箱</label>

                            <div class="col-sm-9">
                                <!-- <p class="form-control-static yuanlai"><?php echo $uemail;?></p> -->
                                <input type="text" id="email"  name="email" class="form-control xiugai" value="<?php echo $uemail;?>">
                                <!-- <p class="form-control-static xiugai">邮箱不可修改</p> -->
                            </div>
                        </div>
                        <div class="form-group form-group-sm">
                            <label class="col-sm-3 control-label">密码</label>

                            <div class="col-sm-9">
                                <!-- <p class="form-control-static yuanlai"><?php echo $upwd;?></p> -->
                                <a href="resetPassword.php" class="btn btn-primary right" role="button">修改密码</a>        
                            </div>

                        </div>
                        <div class="form-group form-group-sm">  
                            <label class="col-sm-3 control-label">手机号码</label>

                            <div class="col-sm-9">
                                <!-- <p class="form-control-static yuanlai"><?php echo $utel;?></p> -->
                                <input type="text" id="phone" name="phone" class="form-control xiugai" value="<?php echo $utel;?>">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-9">
                                
                                <button type="submit" class="btn btn-primary xiugai-btn">确认修改</button>
                                <!-- <button type="button" class="btn btn-default col-sm-offset-1" id="alter">确认修改</button> -->
                                
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <?php
                    include_once "../php/config.php";
                    $arr = mysql_fetch_assoc(mysql_query("select * from xm_customer where id = '".$_SESSION["id"]."' "));
                    $location1 = $arr['location1'];
                    $location = explode("||", $location1);
            ?>
              <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">收货人资料卡</h3>
                </div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form"  method="post" action="../shop/addlocation.php">
                        <div class="form-group form-group-sm">
                            <label class="col-sm-3 control-label">收货人</label>
                            <div class="col-sm-9">
                            <?php 
                                if(isset($location1)){
                            ?>  
                                <input type="hidden" name="op" value="edit">
                                <input type="text" id="name" name="name" class="form-control xiugai" value="<?php echo $location[0];?>">
                            <?php
                                }else{
                            ?>
                            <input type="text" id="name" name="name" class="form-control xiugai" value="">
                            <?php
                                }
                            ?>
                            </div>
                        </div>
                        

                        <div class="form-group form-group-sm">
                            <label class="col-sm-3 control-label">地址</label>

                            <div class="col-sm-9">
                              <?php 
                                if(isset($location1)){
                            ?>
                                <input type="text" id="location" name="location" class="form-control xiugai" value="<?php echo $location[1];?>">
                            <?php
                                }else{
                            ?>
                            <input type="text" id="location" name="location" class="form-control xiugai" value="">
                            <?php
                                }
                            ?>
                            </div>
                        </div>
                        

                        <div class="form-group form-group-sm">
                            <label class="col-sm-3 control-label">电话</label>

                            <div class="col-sm-9">
                            <?php 
                                if(isset($location1)){
                            ?>
                                <input type="text" id="phone" name="phone" class="form-control xiugai" value="<?php echo $location[2];?>">
                            <?php
                                }else{
                            ?>
                            <input type="text" id="phone" name="phone" class="form-control xiugai" value="">
                            <?php
                                }
                            ?>
                                
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-9">
                                
                                <button type="submit" class="btn btn-primary xiugai-btn">确认修改</button>
                                <!-- <button type="button" class="btn btn-default col-sm-offset-1" id="alter">确认修改</button> -->
                                
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>



    
    </div>
</div>






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
