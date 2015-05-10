<!DOCTYPE html>
<html lang="zh-cn">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>三农知识首页</title>
    <!-- <link rel="icon" type="image/x-icon" href="images/favicon.ico"> -->
    <link rel="icon" type="image/x-icon" href="../images/icon/logo2.png">
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <!-- <link href="../css/index.css" rel="stylesheet"> -->
    <link rel="stylesheet" type="text/css" href="../css/know/farm_tip.css" />

    <link href="../css/style.css" rel="stylesheet" type="text/css">

</head>
<body>

<!-- Head Navbar -->
<?php
//include_once "../php/header.php";
include_once "header.php";
?>

<nav id="header_link" style="margin-top:-20px;">
    <ul>
        <li><a href="index.php">三农知识</a></li>
        <li><a href="plant.php">种植技术</a></li>
        <li><a href="breed.php">养殖技术</a></li>
        <li><a href="food.php">美食专家</a></li>
        <li><a href="life.php" style="background:#4aa93e; color:#fff;">生活小窍门</a></li>
    </ul>
</nav>
<!-- Body Main -->
<div id="main">
    <div id="main_top">
        <a href="#"><img src="../images/know/tip_header.jpg"/></a>
    </div>
    <div id="main_medium">
         <?php
                include_once "../php/config.php";
                    $sql = "select * from xm_know where typeid = '4'  order by id desc limit 10";
                    // $rowsArray = $conne -> getRowsArray($sql);
                    $result = mysql_query($sql);
                    if($result&&mysql_num_rows($result)>0){
                        $i = 0;
                        while ($row = mysql_fetch_array($result)) {
                            $i++;
                            $nid = $row['id'];
                            $title = $row['title'];
                            $keyword = $row['keyword'];
                            $created = $row['created'];
                            //$photo = $row['photo'];
                            $des = $row['description'];
                            //$des = strip_tags($des);//PHP：过滤html标签的函数
                            $str= htmlspecialchars_decode($des); //反编译
                            $str= preg_replace("/<(.*?)>/","",$str); 
                            //$des = mb_substr($des,0,5,'UTF-8');
                            //echo $row['keyword'];
                            // echo "<li><a href='info.php?id=".$nid."'>".$title."......".$created."...</a></li>";
                            // echo "<ul><li><a href='info.php?id=".$nid."'><h2>".$keyword."</h2><p style='line-height:24px;'>".mb_substr($row['description'] , 0 , 80,'utf-8')."</p></a></li></ul>";
                            //mb_substr($row['description'] , 0 , 21,'utf-8');
                            if(!empty($keyword)){
                                echo "<ul><li><a href='info.php?id=".$nid."'><h2>".$keyword."</h2><p style='line-height:24px;'>".mb_substr($str , 0 , 80,'utf-8')."</p></a></li></ul>";
                            }
                        }
                    }
                mysql_close();
                ?>
        <!-- <ul>
            <li><a href="#"><h2>节水</h2><p style="line-height:24px;">在日常生活中，我们一宁水龙头，水就源源不断地流出来，可能丝毫感觉不到水的危机。但事实上，我们赖以生存的水，正日益短缺。正所说：不节约水，最后一滴水将会是人类的眼泪。所以我们要节约水资源，节约资源，从我们做起！</p></a></li>
            
        </ul>
        <ul>
            <li><a href="#"><h2>节电</h2><p style="line-height:24px;">在日常生活中，我们一宁水龙头，水就源源不断地流出来，可能丝毫感觉不到水的危机。但事实上，我们赖以生存的水，正日益短缺。正所说：不节约水，最后一滴水将会是人类的眼泪。所以我们要节约水资源，节约资源，从我们做起！</p></a></li>
            
        </ul>
        <ul>
            <li><a href="#"><h2>节煤</h2><p style="line-height:24px;">在日常生活中，我们一宁水龙头，水就源源不断地流出来，可能丝毫感觉不到水的危机。但事实上，我们赖以生存的水，正日益短缺。正所说：不节约水，最后一滴水将会是人类的眼泪。所以我们要节约水资源，节约资源，从我们做起！</p></a></li>
            
        </ul>
        <ul>
            <li><a href="#"><h2>节油</h2><p style="line-height:24px;">在日常生活中，我们一宁水龙头，水就源源不断地流出来，可能丝毫感觉不到水的危机。但事实上，我们赖以生存的水，正日益短缺。正所说：不节约水，最后一滴水将会是人类的眼泪。所以我们要节约水资源，节约资源，从我们做起！</p></a></li>
            
        </ul>
        <ul>
            <li><a href="#"><h2>一次性用品</h2><p style="line-height:24px;">在日常生活中，我们一宁水龙头，水就源源不断地流出来，可能丝毫感觉不到水的危机。但事实上，我们赖以生存的水，正日益短缺。正所说：不节约水，最后一滴水将会是人类的眼泪。所以我们要节约水资源，节约资源，从我们做起！</p></a></li>
            
        </ul> -->
    </div>
    <div id="main_foot">
        <a href="#">查看更多</a>
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
