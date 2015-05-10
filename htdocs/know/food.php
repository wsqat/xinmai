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
    <link rel="stylesheet" type="text/css" href="../css/know/farm_food.css" />

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
        <li><a href="food.php"  style="background:#4aa93e; color:#fff;">美食专家</a></li>
        <li><a href="life.php">生活小窍门</a></li>
    </ul>
</nav>
<!-- Body Main -->
<div id="main">
    <div id="main_header">
        <div id="main_header_left">
            <ul>
                <li><h2>菜谱</h2>
                    <a href="#">热门</a> <a href="#">分类</a> <a href="#">热菜</a> <a href="#">主食</a></li>
                <li><h2>食材</h2>
                    <a href="#">螃蟹</a> <a href="#">牛肉</a> <a href="#">排骨</a> <a href="#">营养</a></li>
                <li><h2>健康</h2>
                    <a href="#">常识</a> <a href="#">瘦身</a> <a href="#">母婴</a> <a href="#">食疗</a></li>
                <li><h2>推荐</h2>
                    <a href="#">家常菜</a> <a href="#">年夜饭</a> <a href="#">当季菜</a></li>
                <li><h2>专区</h2>
                    <a href="#">烘焙</a> <a href="#">小吃</a> <a href="#">选肉</a> <a href="#">挑菜</a></li>   
             </ul> 
        </div>
        <div style="float:left; width:332px; height:403px; margin-right:20px">
            <a href="#"><img src="../images/know/food-_03.jpg"/></a>
        </div>
        <div id="main_header_right">
            <h1><a style="color:#f79494; font-size:20px" href="">相关文章</a></h1>
            <ul>
                <?php
                include_once "../php/config.php";
                    $sql = "select * from xm_know where typeid = '3'  order by id desc limit 10";
                    // $rowsArray = $conne -> getRowsArray($sql);
                    $result = mysql_query($sql);
                    if($result&&mysql_num_rows($result)>0){
                        $i = 0;
                        while ($row = mysql_fetch_array($result)) {
                            $i++;
                            $nid = $row['id'];
                            $title = $row['title'];
                            $created = $row['created'];
                            //$des = $row['description'];
                            //$des = substr($des, 0,20);
                            //$des = mb_substr($des,0,5,'UTF-8');
                            echo "<li><a href='info.php?id=".$nid."'>".$title."......".$created."...</a></li>";
                        }
                    }
                //mysql_close();
                ?>
             </ul>
        </div>   
    
    </div><!--main_header结束-->  
    <div id="div1" class="main_div">
        <h1>美食大全</h1>
        <ul>
            <li><a href="#"><img src="../images/know/food-_07.jpg"/></a></li>
            <li><a href="#"><img src="../images/know/food-_07.jpg"/></a></li>
            <li><a href="#"><img src="../images/know/food-_07.jpg"/></a></li>
            <li><a href="#"><img src="../images/know/food-_07.jpg"/></a></li>
            <li class="more_link"><a href="#">更多></a></li>
        </ul>
    </div>
    <div id="div2" class="main_div">
        <h1>美食大全</h1>
        <ul>
            <li><a href="#"><img src="../images/know/food-_07.jpg"/></a></li>
            <li><a href="#"><img src="../images/know/food-_07.jpg"/></a></li>
            <li><a href="#"><img src="../images/know/food-_07.jpg"/></a></li>
            <li><a href="#"><img src="../images/know/food-_07.jpg"/></a></li>
            <li class="more_link"><a href="#">更多></a></li>
        </ul>
    </div>
    <div id="div3" class="main_div">
        <h1>美食大全</h1>
        <ul>
            <li><a href="#"><img src="../images/know/food-_07.jpg"/></a></li>
            <li><a href="#"><img src="../images/know/food-_07.jpg"/></a></li>
            <li><a href="#"><img src="../images/know/food-_07.jpg"/></a></li>
            <li><a href="#"><img src="../images/know/food-_07.jpg"/></a></li>
            <li class="more_link"><a href="#">更多></a></li>
        </ul>
    </div>
</div><!--main结束--> 



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
