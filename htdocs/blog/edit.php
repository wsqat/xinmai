<!DOCTYPE html>
<html lang="zh-cn">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>新麦人物</title>
    <link rel="icon" type="image/x-icon" href="../images/icon/logo2.png">
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <!-- <link href="../css/login.css" rel="stylesheet">
    -->
    <link href="../css/style.css" rel="stylesheet" type="text/css">
    <!-- <link rel="stylesheet" type="text/css" href="../css/person_edit.css" /> -->

    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <!-- <link href="../css/reg.css" rel="stylesheet"> -->
    <link href="../css/bootstrap-datetimepicker.min.css" rel="stylesheet">
    <link href="../css/publish.css" rel="stylesheet">
</head>
<body>
    <!-- Head Navbar -->
<?php
include_once "header.php";
?>

<div class="container">
    <div class="row">
        <div class="col-lg-10 col-lg-offset-1">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">个人自传</h3>
                </div>
                <div class="panel-body">
                    <form class="form-horizontal col-lg-9" id="publishform" role="form" action="publish.php"
                    method="post" enctype="multipart/form-data" >
                        <div class="form-group has-feedback">
                            <label for="name" class="col-lg-4 control-label">姓名</label>

                            <!-- <div class="col-lg-8">
                                <input name="name" type="text" class="form-control" id="name" placeholder="姓名">
                                <span class="glyphicon glyphicon-ok form-control-feedback"></span>
                            </div>
                            <span class="help-inline">姓名由汉字、字母、数字和下划线组成,以汉字或字母开头，2-12个字符</span> -->
                            <div class="col-sm-4">
                                <input type="text" name="name" class="form-control" id="name" autofocus="autofocus" placeholder="姓名">
                                <span class="glyphicon form-control-feedback"></span>
                            </div>
                            <span class="help-inline">姓名由汉字、字母、数字和下划线组成,以汉字或字母开头，2-12个字符</span>
                        </div>
                        
                        <div class="form-group has-feedback">
                            <label for="nation" class="col-lg-4 control-label">民族</label>

                            <div class="col-sm-4">
                                <input name="nation" type="text" class="form-control" id="nation" placeholder="民族">
                                <span class="glyphicon form-control-feedback"></span>
                            </div>
                            <span class="help-inline">民族以汉字开头，1-6个字符</span>
                        </div>
                        
                        <div class="form-group has-feedback">
                            <label for="work" class="col-lg-4 control-label">职业</label>

                            <div class="col-sm-4">
                                <input name="work" type="text" class="form-control" id="work" placeholder="职业">
                                <span class="glyphicon form-control-feedback"></span>
                            </div>
                            <span class="help-inline">职业以汉字或字母开头，1-6个字符</span>
                        </div>

                        <div class="form-group has-feedback">
                            <label for="height" class="col-lg-4 control-label">身高(cm)</label>

                            <div class="col-sm-4">
                                <input name="height" type="text" class="form-control" id="height" placeholder="身高">
                                <span class="glyphicon form-control-feedback"></span>
                            </div>
                            <span class="help-inline">身高由1-3数字组成</span>
                        </div>
                        
                        <div class="form-group has-feedback">
                            <label for="talent" class="col-lg-4 control-label">特长</label>

                            <div class="col-sm-4">
                                <input name="talent" type="text" class="form-control" id="talent" placeholder="特长">
                                <span class="glyphicon form-control-feedback"></span>
                            </div>
                            <span class="help-inline">特长以汉字开头，1-6个字符</span>
                        </div>
                        
                        <div class="form-group has-feedback">
                            <label for="concern" class="col-lg-4 control-label">我的人物关注1</label>

                            <div class="col-sm-4">
                                <input name="concern1" type="text" class="form-control" id="concern1" placeholder="我的人物关注1">
                                <span class="glyphicon form-control-feedback"></span>
                            </div>
                            <span class="help-inline">人物由汉字、字母、数字和下划线组成,以汉字或字母开头，2-12个字符</span>
                        </div>
                        
                        <div class="form-group has-feedback">
                            <label for="concern" class="col-lg-4 control-label">我的人物关注2</label>

                            <div class="col-sm-4">
                                <input name="concern2" type="text" class="form-control" id="concern2" placeholder="我的人物关注2">
                                <span class="glyphicon form-control-feedback"></span>
                            </div>
                            <span class="help-inline">人物由汉字、字母、数字和下划线组成,以汉字或字母开头，2-12个字符</span>
                        </div>


                        <div class="form-group has-feedback">
                            <label for="place" class="col-lg-4 control-label">出生地</label>

                            <div class="col-sm-4">
                                <input name="birthplace" 
                                type="text" class="form-control" id="place" placeholder="出生地">
                                <span class="glyphicon form-control-feedback"></span>
                            </div>
                            <span class="help-inline">由汉字、字母、数字和下划线组成,以汉字或字母开头，2-12个字符</span>
                        </div>

                        <div class="form-group">
                            <label for="timer" class="col-lg-4 control-label">出生时间</label>

                            <div class="input-group date form_datetime col-lg-4" 
                            data-date="12-02-2012" data-date-format="dd-mm-yyyy" data-link-field="dtp_input1">
                                <input id="timer" 
                                name="birthday"
                                class="form-control" size="10" type="text" value="" readonly style="width: 234px;margin-left: 15px;">
                                <span class="input-group-addon"><span class="glyphicon glyphicon-th"></span></span>
                                <!-- <input class="form_datetime" size="16" type="text" value="2012-06-15 14:45" readonly> <br>
                                <script type="text/javascript">  $(".form_datetime").datetimepicker({format: 'yyyy-mm-dd hh:ii'});</script><br> -->
                            </div>
                            <input type="hidden" id="dtp_input1" value="">
                        </div>

                        <div class="form-group">
                            <!--label for="doc" class="col-lg-4 control-label">物品图片*</label-->
                            <label for="doc" class="col-lg-4 control-label">个人图片&nbsp;&nbsp;<p>(上传图片可以更好的展示自己)</p></label>

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
                                          placeholder="详细说明个人信息，不超过800字"></textarea>
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


<!-- footer -->
<?php
    include_once "../php/footer.php";
?>

<script src="http://cdn.bootcss.com/jquery/1.11.1/jquery.min.js"></script>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<!-- <script src="http://cdn.bootcss.com/jquery/1.11.1/jquery.min.js"></script> -->
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="http://cdn.bootcss.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="../js/bootstrap-datetimepicker.min.js"></script>
<script src="../js/bootstrap-datetimepicker.zh-CN.js"></script>
<script src="../js/bootstrap-filestyle.min.js"></script>
<script src="../js/previewImage.js"></script>
<script src="../js/publishBlog.js"></script>
</body>
</html>