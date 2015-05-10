<!DOCTYPE html>
<html lang="zh-cn">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>三农资讯</title>
    <link rel="icon" type="image/x-icon" href="../images/icon/logo2.png">
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <!-- <link href="../css/login.css" rel="stylesheet"> -->
    <link href="../css/style.css" rel="stylesheet" type="text/css">
    <!-- <link rel="stylesheet" type="text/css" href="../css/newsArticle.css" /> -->
    <link rel="stylesheet" type="text/css" href="../css/know/farm_knowledge.css" />
    <!-- <link href="../css/publish.css" rel="stylesheet"> -->
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
include_once "../php/conn.php";
include_once "../php/function.php";
//session_start();
if(!empty($_GET['id']) && is_numeric($_GET['id'])){
    $id = stripslashes(trim($_GET['id']));
    mysql_query("set names 'utf8'");    
    $sql = "select * from xm_news where id= '$id' ";
    $num = $conne->getRowsNum($sql);
    if($num >= 1){
        //如果存在
        $rst = $conne->getRowsRst($sql);
        $nid = $rst["id"];
        $title = $rst["title"];
        $adminid = $rst["admid"];
        $description = $rst["description"];
        $photo = $rst["photo"];
        $created = $rst["created"];
        $typeid = $rst["typeid"];
        
    }else{
        echo_message("您所搜索的页面不存在！",3);
    }
    //echo $name;
    //echo $des;
    //$conne->close_conn();    


?>


<!-- Body Main -->



<div id="main" style="margin-top:60px;">
        <div id="main_header"><a style="font-size:30px; font:bold 30px/36px 'Microsoft YaHei';  color:blue;margin-left:20px;" href="index.php">返回上一级</a></div>
        <div id="left">
            <h1><?php echo $title;?></h1>
            <span style="margin-left:40px;"><?php echo $created;?></span>

            <p><?php 
            if(!empty($photo)){
                echo "<a href='info.php?id=".$nid."''><img 
                onload='AXImg(this)' style='width:600px;height:400px;' src='".$photo."' /></a><br>";
            }
            echo "<div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$description."</div>";
            ?>
        </div><!--left end=--> 
         <div id="right"> 
            <span>相关文章</span>
            <ul>
                <?php
                include_once "../php/config.php";
                    $sql = "select * from xm_news where typeid = '$typeid'  order by id desc limit 5";
                    // $rowsArray = $conne -> getRowsArray($sql);
                    $result = mysql_query($sql);
                    if($result&&mysql_num_rows($result)>0){
                        $i = 0;
                        while ($row = mysql_fetch_array($result)) {
                            $i++;
                            $nid = $row['id'];
                            $title = $row['title'];
                            $created = $row['created'];
                            //$photo = $row['photo'];
                            //$des = $row['description'];
                            //$des = substr($des, 0,20);
                            $title = mb_substr($title,0,16,'UTF-8');
                            echo "<li><a href='info.php?id=".$nid."'>".$title."......</a></li><li><hr class='hr' /></li>";
                        }
                    }
                //mysql_close();
                ?>
            </ul>
            <div id="main_right_down">
                <p><a href="index.php">更多></a></p>
                <ul>
                <?php
                include_once "../php/config.php";
                    $sql = "select * from xm_news where typeid = '$typeid'  order by id desc ";
                    // $rowsArray = $conne -> getRowsArray($sql);
                    $result = mysql_query($sql);
                    if($result&&mysql_num_rows($result)>0){
                        $i = 1;
                        while ($row = mysql_fetch_array($result)) {
                            
                            $nid = $row['id'];
                            //$title = $row['title'];
                            $title = mb_substr($row['title'] , 0 , 8,'utf-8');
                            $created = $row['created'];
                            $photo = $row['photo'];
                            //$des = $row['description'];
                            //$des = substr($des, 0,20);
                            //$des = mb_substr($des,0,5,'UTF-8');
                            // echo "<li><a href='info.php?id=".$nid."'>".$title."......".$created."...</a></li>";
                            if($i <=4 && !empty($photo)){
                                $i++;
                                echo "<li><img src='".$photo."' style='width:126px;height:92px;'/>
                                <p class='p_down_center'><a href='info.php?id=".$nid."'>".$title."</a></p></li>";
                            }
                            
                        }
                    }
                //mysql_close();
                ?>
                </ul>
                <p><a href="index.php">更多></a></p>
            </div>
        </div><!--right end-->
</div>



    <div style="width:900px;overflow:auto;min-height:100px;　height:auto;border:0px #999 solid;margin:20px auto 20px 130px;">
        <p style="font-size:30px; font:bold 30px/36px 'Microsoft YaHei';  color:blue;margin-left:20px;">评论</p>
            <!--评论记录为后台自动生成</div>-->
            <?php

                    //include_once "config.php";
                    $sql = "select * from xm_comment  where desid='$id' ";
                    // $rowsArray = $conne -> getRowsArray($sql);
                    $result = mysql_query($sql);
                    if($result&&mysql_num_rows($result)>0){
                        $i = 0;
                        while ($row = mysql_fetch_array($result)) {
                            $userid = $row["userid"];
                            $userdef = $row["userdef"];
                            if($userdef==1){
                                $usertable='xm_customer';
                            }elseif($userdef==2){
                                $usertable='xm_supplier';
                            }elseif($userdef==3){
                                $usertable='xm_admin';
                            }
                            $arr = mysql_fetch_assoc(mysql_query("select * from  ".$usertable." where id = '".$userid."' "));
                            $username = $arr['username'];
                                                $uheader = $arr['header_photo'];
                                              echo "<div class='media'>
                                                <a class='pull-left' href='#'>
                                                    <img src='../upload_images/head_photo/$uheader' class='media-object' style='width:50px;height:50px;' alt='头像'>
                                                </a><div class='media-body'>
                                                    <h4 class='media-heading'>".$username."
                                                <small>&nbsp;&nbsp;发表于".$row['created']."</small>
                                                    </h4>
                                                    <p>".$row['description']."。</p>
                                                </div>
                                                    </div>";
                        }
                    }
                        mysql_close();
                        $conne->close_conn();

                        }
elseif(empty($_GET)){
    echo_message("搜索不得为空！",3);
}
            ?>
            <div class="media">

            <form class="form-horizontal" role="form" action="dealinfo.php" method="post">
                <input type="hidden" name="nid" value="<?php echo $nid;?>">
                <input type="hidden" name="adminid" value="<?php echo $adminid;?>">
                <div class="form-group">
                    <div class="col-sm-12">
                        <textarea name="cdetails" id="textarea" class="form-control" rows="6" placeholder="我要说点啥……
                        评论内容不得为空,且不能大于100字"></textarea>
                        <span id="num" class="help-inline">您还可以输入100字</span>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-12">
                        <button type="submit" class="btn btn-info">发表评论</button>
                    </div>
                </div>
            </form>
        </div>
        </div>




<!-- footer -->
<?php
    include_once "../php/footer.php";
?>
<script src="../js/image.js"></script>
<script src="http://cdn.bootcss.com/jquery/1.11.1/jquery.min.js"></script>
<script type="text/javascript">
        // textarea验证
        function checkTextarea(obj){
            var str = obj.val();
            var realLength = 0, len = str.length, charCode = -1;
            for (var i = 0; i < len; i++) {
                charCode = str.charCodeAt(i);
                if (charCode >= 0 && charCode <= 128) realLength += 1;
                else realLength += 2;
            }
            var num = Math.floor((200 - realLength)/2);
            if (num>=0&&num<=100) {
                $("#num").text('您还可以输入'+num+'字');
                return true;
            } else{
                $("#num").text('已经超过'+(-num)+'字');
                return false;
            };
        }
        $("#textarea").bind("input propertychange",function () {
            checkTextarea($('#textarea'));
        });
</script>
</body>
</html>
