<!DOCTYPE html>
<html lang="zh-cn">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>三农文化</title>
    <!-- <link rel="icon" type="image/x-icon" href="images/favicon.ico"> -->
    <link rel="icon" type="image/x-icon" href="../images/icon/logo2.png">
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <!-- <link href="../css/index.css" rel="stylesheet"> -->
    <link rel="stylesheet" type="text/css" href="../css/know/farm_knowledge.css" />

    <link href="../css/style.css" rel="stylesheet" type="text/css">

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
    $sql = "select * from xm_cult where id= '$id' ";
    $num = $conne->getRowsNum($sql);
    if($num >= 1){
        //如果存在
        $rst = $conne->getRowsRst($sql);
        $nid = $rst["id"];
        $title = $rst["title"];
        $photo = $rst["photo"];
        $keyword = $rst["keyword"];
        $created = $rst["created"];
        $adminid = $rst["admid"];
        $typeid = $rst["typeid"];
        $description = $rst["description"];
        
    }else{
        echo_message("您所搜索的页面不存在！",3);
    }
    //echo $name;
    //echo $des;
    //$conne->close_conn();    



?>

<nav id="header_link" style="margin-top:-20px;">
    <ul>
        <li><a href="index.php">三农文化</a></li>
        <?php if($typeid==1){  $nav="文化"?>
        <li><a href="life.php"  style="background:#4aa93e; color:#fff;">文化生活</a></li>
        <li><a href="cust.php">节气习俗</a></li>
        <li><a href="art.php">文化艺术</a></li>
        <?php }elseif($typeid==2){ $nav="习俗"?>
        <li><a href="life.php">文化生活</a></li>
        <li><a href="cust.php"  style="background:#4aa93e; color:#fff;">节气习俗</a></li>
        <li><a href="art.php">文化艺术</a></li>
        <?php }elseif($typeid==3){ $nav="艺术"?>
        <li><a href="life.php">文化生活</a></li>
        <li><a href="cust.php">节气习俗</a></li>
        <li><a href="art.php"  style="background:#4aa93e; color:#fff;">文化艺术</a></li>
        <?php }?>
    </ul>
</nav>

<!-- Body Main -->
<div id="main">
        <div id="main_header"><a href="javascript:"><?php echo $nav?></a> > <a href="#" style="color:#ee9740"><?php echo $keyword;?></a></div>
        <div id="left">
            <h1><?php echo $title;?></h1>
            <span style="margin-left:40px;"><?php echo $created;?></span>

            <p><?php 
            if(!empty($photo)){
                echo "<center><a href='info.php?id=".$id."''><img onload='AXImg(this)' src='../images/admin/".$photo."' /></a></center><br>";
            }
            echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$description;?></p>

        </div><!--left end=--> 
         <div id="right">
            <span>相关文章</span>
            <ul>
                <?php
                include_once "../php/config.php";
                    $sql = "select * from xm_cult where typeid = '$typeid'  order by id desc limit 5";
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
                            //$des = mb_substr($des,0,5,'UTF-8');
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
                    $sql = "select * from xm_cult where typeid = '$typeid'  order by id desc ";
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
                                echo "<li><img src='../images/admin/".$photo."' style='width:126px;height:92px;'/>
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



<!-- footer -->
<?php
}
    include_once "../php/footer.php";
?>

<!-- <script src="http://cdn.bootcss.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="js/zone.js"></script>
<script src="../js/zone.js"></script>
<script src="../js/bootstrap-filestyle.min.js"></script>
 -->
 <script src="../js/image.js"></script>
</body>
</html>
