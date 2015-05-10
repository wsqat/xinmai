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
    
    
    <link href="../css/style.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="../css/cult/culture_life.css" />
    <link rel="stylesheet" type="text/css" href="../css/cult/gallery.css" media="all" />
    <!--页面整体样式 -->

</head>
<body>

<!-- Head Navbar -->
<?php
//include_once "../php/header.php";
include_once "header.php";
?>



<nav id="header_link" style="margin-top:50px;">
    <ul>
        <li><a href="index.php">三农文化</a></li>
        <li><a href="life.php" style="background:#4aa93e; color:#fff;">文化生活</a></li>
        <li><a href="cust.php">节气习俗</a></li>
        <li><a href="art.php" >文化艺术</a></li>
    </ul>
</nav>


<!-- Body Main -->
<div id="main" style="height:1600px;">
    <div id="main_top">
        <!-- <img style="margin:auto auto; display:block" src="../images/culture/文化生活_03.jpg"/> -->
        <section id="gallery">
            <div class="container_image">
            <ul id="myRoundabout">
            <?php
                include_once "../php/config.php";
                    $sql = "select * from xm_cult where typeid = '1'  order by id desc ";
                    // $rowsArray = $conne -> getRowsArray($sql);
                    $result = mysql_query($sql);
                    if($result&&mysql_num_rows($result)>0){
                        $i = 1;
                        while ($row = mysql_fetch_array($result)) {
                            
                            $nid = $row['id'];
                            $title = $row['title'];
                            $created = $row['created'];
                            $photo = $row['photo'];
                            //$des = $row['description'];
                            //$des = substr($des, 0,20);
                            //$des = mb_substr($des,0,5,'UTF-8');
                            // echo "<li><a href='info.php?id=".$nid."'>".$title."......".$created."...</a></li>";

                            if($i <=5 && !empty($photo)){
                                $i++;
                                //echo $nid;
                                echo "<li><a href='info.php?id=".$nid."''><img title='".$title."' src='../images/admin/".$photo."' style='border: 0' /></a></li>";
                            }
                            
                        }
                    }
                //mysql_close();
                ?>
                <!-- <li><a href="#" target="_blank" title="图片"><img src="../images/culture/文化生活_03.jpg" alt='图片' style="border: 0"></a></li>   
                <li><a href="#" target="_blank" title="图片"><img src="../images/culture/文化生活_03.jpg" alt='图片' style="border: 0"></a></li>   
                <li><a href="#" target="_blank" title="图片"><img src="../images/culture/文化生活_03.jpg" alt='图片' style="border: 0"></a></li>   
                <li><a href="#" target="_blank" title="图片"><img src="../images/culture/文化生活_03.jpg" alt='图片' style="border: 0"></a></li>  
                <li><a href="#" target="_blank" title="图片"><img src="../images/culture/文化生活_03.jpg" alt='图片' style="border: 0"></a></li>  -->
            </ul>
        </div>
    </section>
    </div>

    <div id="main_body">
        <hr style="border-top:5px solid #72966d">
         <div class="main_medium_div" id="div1"> 
            <h1>民众生活</h1>
            <a href='info.php?id=84'><img width="420" height="324" src="../images/culture/文化生活_10.jpg"/></a>
            <a style="font-size:20px; display:block; margin:auto auto" href="info.php?id=84">宿州:"舞"动农村新生活 跳出"农村文化事业"</a>
         </div>
         
         <div class="main_medium_div" id="div2">
            <ul>
                 <?php
                include_once "../php/config.php";
                    $sql = "select * from xm_cult where typeid = '1'  order by id desc limit 10";
                    // $rowsArray = $conne -> getRowsArray($sql);
                    $result = mysql_query($sql);
                    if($result&&mysql_num_rows($result)>0){
                        $i = 0;
                        while ($row = mysql_fetch_array($result)) {
                            $i++;
                            $nid = $row['id'];
                            $title = $row['title'];
                            $created = $row['created'];
                            $photo = $row['photo'];
                            $keyword = $row['keyword'];

                            //$des = $row['description'];
                            //$des = substr($des, 0,20);
                            //$des = mb_substr($des,0,5,'UTF-8');
                            //if($keyword=="")
                            echo "<li><a href='info.php?id=".$nid."'>".$title."......</a></li>";
                        }
                    }
                //mysql_close();
                ?>
            </ul>
         </div>
         
     <div class="main_medium_div" id="div3">
        <h1>歌舞推荐</h1>
          <ul id="song">
            <li><a href="#">小苹果</a></li>
            <li><a href="#">和谐大家园</a></li>
            <li><a href="#">在希望的田野上</a></li>
            <li><a href="#">我相信</a></li>
            <li><a href="#">北京，北京</a></li>
            <li><a href="#">无地自容</a></li>
            <li><a href="#">Firework</a></li>
            <li><a href="#">凤凰传奇</a></li>
            <li><a href="#">同桌的你</a></li>
            <li><a href="#">朋友</a></li>
            <li><a href="#">光阴的故事</a></li>
        </ul> 
     </div>
     
     <div class="main_medium_div" id="div4">
        <h1>热点新闻</h1>
        <a href='info.php?id=47'><img src="../images/culture/文化生活_15.jpg"/></a>
         <ul>
            <?php
                include_once "../php/config.php";
                    $sql = "select * from xm_cult where typeid = '1'  order by id desc limit 10,6";
                    // $rowsArray = $conne -> getRowsArray($sql);
                    $result = mysql_query($sql);
                    if($result&&mysql_num_rows($result)>0){
                        $i = 0;
                        while ($row = mysql_fetch_array($result)) {
                            $i++;
                            $nid = $row['id'];
                            $title = $row['title'];
                            $created = $row['created'];
                            $photo = $row['photo'];
                            $keyword = $row['keyword'];

                            //$des = $row['description'];
                            //$des = substr($des, 0,20);
                            //$des = mb_substr($des,0,5,'UTF-8');
                            //if($keyword=="")
                            echo "<li><a href='info.php?id=".$nid."'>".$title."......</a></li>";
                        }
                    }
                //mysql_close();
                ?>
            </ul>
     </div>
   
   </div>
</div>
<!-- footer -->
<?php
    include_once "../php/footer.php";
?>

</body>
</html>
<script type="text/javascript" src="../js/cult/jquery-1.4.2.min.js"></script><!--中间广告图片1-->
<script type="text/javascript" src="../js/cult/roundabout.js" ></script><!--中间广告图片2-->
<script type="text/javascript" src="../js/cult/roundabout_shapes.js" ></script><!--中间广告图片3-->
<script type="text/javascript" src="../js/cult/gallery_init.js" ></script><!--中间广告图片4-->
