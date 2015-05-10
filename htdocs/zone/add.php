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
    <link href="../css/bootstrap-datetimepicker.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../css/business.css" />
    <link href="../css/zone.css" rel="stylesheet">
    <link href="../css/publish.css" rel="stylesheet">

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

        <?php
            if($_SESSION["user_role"]==1){
                echo "<br><h3>您还未注册商家，请先注册！</h3><br>
                <h2><a href='../reg.php'><button class='btn btn-primary' style='background-color:orange;margin-left:300px;width:200px;' type='submit'>商家注册</button></a></h2>";
            }elseif($_SESSION["user_role"]==2){
        ?>
<div class="container" style="margin-top:70px;">
    <div class="row">
        <div class="col-lg-10 col-lg-offset-1">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">新增商品</h3>
                </div>
                <div class="panel-body">
                    <form class="form-horizontal col-lg-6" id="publishform" role="form" action="publishDT.php"
                    method="post" enctype="multipart/form-data" >
                        <div class="form-group has-feedback">
                            <label for="name" class="col-lg-4 control-label">商品名</label>

                            <div class="col-lg-8">
                                <input name="name" type="text" class="form-control" id="name" placeholder="商品名" autofocus="autofocus">
                                <span class="glyphicon form-control-feedback"></span>
                            </div>
                            <span class="help-inline">商品名由汉字、字母、数字和下划线组成,以汉字或字母开头，2-12个字符</span>
                        </div>
                        
                        <div class="form-group">
                            <label class="col-lg-4 control-label">商品类型</label>
                            <div class="col-lg-8">
                                <script type="text/javascript" src="../js/jquery-1.7.2.min.js"></script>
                                <style type="text/css">
                                    .sub{display:none;}
                                </style>
                                <!-- <select id="sel1">
                                    <option>北京</option>
                                    <option>安徽省</option>
                                </select> -->
                                <select  id="sel1" name="type">
                                <?php
                                    include_once "../php/config.php";
                                    $sql = "select * from xm_category";
                                    $res = mysql_query($sql);
                                    if($res&&mysql_query($sql)){
                                        while($arr=mysql_fetch_array($res)){
                                            echo "<option value='".$arr['id']."'>".$arr['title']."</option>";
                                        }
                                    }
                                ?>
                                </select>
                                <select class="sub" name="sub1">
                                    <option value="1">服饰</option>
                                    <option value="2">鞋帽</option>
                                    <option value="3">箱包</option>
                                </select>    
                                <select class="sub" name="sub2">
                                    <option value="1">水果</option>
                                    <option value="2">肉禽</option>
                                    <option value="3">特产</option>
                                    <option value="4">冲饮</option>
                                    <option value="5">自助餐</option>
                                    <option value="6">农家乐</option>
                                </select>
                                <select class="sub" name="sub3">
                                    <option value="1">农家小店</option>
                                    <option value="2">旅店</option>
                                </select>
                                <select class="sub" name="sub4">
                                    <option value="1">车行</option>
                                    <option value="2">修车</option>
                                    <option value="3">洗车</option>
                                    <option value="4">打蜡</option>
                                </select>
                                <select class="sub" name="sub5">
                                    <option value="1">养植</option>
                                    <option value="2">种植</option>
                                    <option value="3">林业</option>
                                </select>
                                <select class="sub" name="sub6">
                                    <option value="1">砖石</option>
                                    <option value="2">钢材</option>
                                    <option value="3">玻璃</option>
                                    <option value="4">机械</option>
                                </select>
                                <select class="sub" name="sub7">
                                    <option value="1">灯具</option>
                                    <option value="2">家具</option>
                                    <option value="3">洁具</option>
                                    <option value="4">门窗</option>
                                    <option value="5">地板</option>
                                </select>
                                <select class="sub" name="sub8">
                                    <option value="1">农药</option>
                                    <option value="2">种子</option>
                                    <option value="3">化肥</option>
                                    <option value="4">农具</option>
                                </select>
                                <script type="text/javascript">
                                    $(document).ready(function(){
                                        $("#sel1").change(function(){
                                            $("#sel1 option").each(function(i,o){
                                                if($(this).attr("selected"))
                                                {
                                                    $(".sub").hide();
                                                    $(".sub").eq(i).show();
                                                }
                                            });
                                        });
                                        $("#sel1").change();
                                    });
                                </script>
                            </div>
                        </div>

                        <div class="form-group has-feedback">
                            <label for="price" class="col-lg-4 control-label">单价</label>

                            <div class="col-lg-8">
                                <input name="price" type="text" class="form-control" id="price" placeholder="单价">
                                <span class="glyphicon form-control-feedback"></span>
                            </div>
                            <span class="help-inline">单价由1-8位整数、小数点和1-2位小数组成</span>
                        </div>

                        <div class="form-group has-feedback">
                            <label for="number" class="col-lg-4 control-label">库存</label>

                            <div class="col-lg-8">
                                <input name="number" type="text" class="form-control" id="number" placeholder="库存">
                                <span class="glyphicon form-control-feedback"></span>
                            </div>
                            <span class="help-inline">库存由数字组成,1-10个数字</span>
                        </div>
                        
                        <div class="form-group has-feedback">
                            <label for="size" class="col-lg-4 control-label">尺码</label>

                            <div class="col-lg-8">
                                <input name="size" type="text" class="form-control" id="size" placeholder="尺码">
                                <span class="glyphicon form-control-feedback"></span>
                            </div>
                            <span class="help-inline">尺码由汉字、字母、数字和下划线组成,以汉字或字母开头，1-6个字符</span>
                        </div>
                        
                        
                        <div class="form-group">
                            <!--label for="doc" class="col-lg-4 control-label">物品图片*</label-->
                            <label for="doc" class="col-lg-4 control-label">商品图片&nbsp;&nbsp;<p>(上传图片可以更好的展示商品)</p></label>

                            <div class="col-lg-8">
                                <input type="file" name="uploadfile" id="doc" onchange="javascript:setImagePreview();"
                                       class="form-control filestyle" data-icon="false" data-buttonText="上传图片"
                                       data-buttonName="btn-primary">
                                <span class="help-inline"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="textarea" class="col-lg-4 control-label">详情描述</label>

                            <div class="col-lg-8">
                                <textarea 
                                name="details" 
                                id="textarea" class="form-control" style="width:600px;"  rows="16"
                                          placeholder="详细说明商品信息，不超过800字"></textarea>
                                <span id="num" class="help-inline">您还可以输入800字</span>
                            </div>
                        </div>                        
                        
                        <div class="form-group">
                            <div class="col-lg-offset-4 col-lg-8">
                                <button id="publish" type="button" class="btn btn-primary btn-block">提交</button>
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
        ?>



<!-- footer -->
<?php
    include_once "../php/footer.php";
?>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<!-- <script src="http://cdn.bootcss.com/jquery/1.11.1/jquery.min.js"></script> -->
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="http://cdn.bootcss.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="../js/bootstrap-filestyle.min.js"></script>
<script src="../js/previewImage.js"></script>
<script src="../js/addproduct.js"></script>
</body>
</html>