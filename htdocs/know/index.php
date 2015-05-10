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
    <link rel="stylesheet" type="text/css" href="../css/know/farm_main.css" />

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
    	<li><a href="index.php" style="background:#4aa93e; color:#fff;">三农知识</a></li>
        <li><a href="plant.php">种植技术</a></li>
        <li><a href="breed.php">养殖技术</a></li>
        <li><a href="food.php">美食专家</a></li>
        <li><a href="life.php">生活小窍门</a></li>
    </ul>
</nav>
<!-- Body Main -->
<div id="main">
		<div id="div1" class="farm_div">
        	<p><a class="header_link" href="plant.php">种植技术</a> 
            	<a class="more_link" href="plant.php">更多></a></p>
            <hr style="margin-top:0px; width:100%;height:3px; border-top:5px ridge green; color:#000"/>
            <div class="farm_div_div">
            <ul class="img_ul">
                        <?php
                include_once "../php/config.php";
                    $sql = "select * from xm_know where typeid = '1'  order by id desc ";
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
                            if($i <=3 && !empty($photo)){
                                $i++;
                                echo "<li><a href='info.php?id=".$nid."''><img style='width:130px;height:110px;' src='../images/admin/".$photo."' /></a></li>";
                            }
                            
                        }
                    }
                //mysql_close();
                ?>
            	<!-- <li><a href="#"><img src="../images/know/三农知识首页_03.png" /></a></li>
                <li><a href="#"><img src="../images/know/三农知识首页_05.png" /></a></li>
                <li><a id="img_li_final1" class="li_img_final" href="#"><img src="../images/know/三农知识首页_03.png" /></a></li> -->
            </ul>
            </div>
            <ul class="news">
                <?php
                include_once "../php/config.php";
                    $sql = "select * from xm_know where typeid = '1'  order by id desc limit 10";
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
        <div id="div2" class="farm_div">
        	<p><a class="header_link" href="breed.php">养殖技术</a> 
            	<a class="more_link" href="breed.php">更多></a></p>
            <hr style="margin-top:0px; width:100%;height:3px; border-top:5px ridge green; color:#000"/>
            <div class="farm_div_div">
            <ul class="img_ul">
                    <?php
                include_once "../php/config.php";
                    $sql = "select * from xm_know where typeid = '2'  order by id desc ";
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
                            if($i <=3 && !empty($photo)){
                                $i++;
                                echo "<li><a href='info.php?id=".$nid."''><img style='width:130px;height:110px;' src='../images/admin/".$photo."' /></a></li>";
                            }
                            
                        }
                    }
                //mysql_close();
                ?>
            </ul>
            </div>
            <ul class="news">
            	<?php
                include_once "../php/config.php";
                    $sql = "select * from xm_know where typeid = '2'  order by id desc limit 10";
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
        <div id="div3" class="farm_div">
        	<p><a class="header_link" href="food.php">美食专家</a> 
            	<a class="more_link" href="food.php">更多></a></p>
            <hr style="margin-top:0px; width:100%;height:3px; border-top:5px ridge green; color:#000"/>
            <div class="farm_div_div">
            <ul class="img_ul">
                    <?php
                include_once "../php/config.php";
                    $sql = "select * from xm_know where typeid = '3'  order by id desc ";
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
                            if($i <=3 && !empty($photo)){
                                $i++;
                                echo "<li><a href='info.php?id=".$nid."''><img style='width:130px;height:110px;' src='../images/admin/".$photo."' /></a></li>";
                            }
                            
                        }
                    }
                //mysql_close();
                ?>
            </ul>
            </div>
            <ul class="news">
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
        <div id="div4" class="farm_div">
        	<p><a class="header_link" href="life.php">生活小窍门</a> 
            	<a class="more_link" href="life.php">更多></a></p>
            <hr style="margin-top:0px; width:100%;height:3px; border-top:5px ridge green; color:#000"/>
            <div class="farm_div_div">
            <ul class="img_ul">
            	<?php
                include_once "../php/config.php";
                    $sql = "select * from xm_know where typeid = '4'  order by id desc ";
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
                            if($i <=3 && !empty($photo)){
                                $i++;
                                echo "<li><a href='info.php?id=".$nid."''><img style='width:130px;height:110px;' src='../images/admin/".$photo."' /></a></li>";
                            }
                            
                        }
                    }
                //mysql_close();
                ?>
            </ul>
            </div>
            <ul class="news">
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
<!--     <div id="div5" class="farm_div5">
        	<p><a class="header_link" href="#">生活小窍门</a> 
            	<a class="more_link" href="#">更多></a></p>
            <hr style="margin-top:0px; width:100%;height:3px; border-top:5px ridge green; color:#000"/>
        </div>
        
        <div id="div6" class="farm_div">
        	<div class="farm_div_div">
            <ul class="img_ul">
            	<li><a href="#"><img src="../images/know/三农知识首页_03.png" /></a></li>
                <li><a href="#"><img src="../images/know/三农知识首页_05.png" /></a></li>
                <li><a id="img_li_final1" class="li_img_final" href="#"><img src="../images/know/三农知识首页_03.png" /></a></li>
            </ul>
            </div>
            <ul class="news">
            	<li><a href="#">水温、水量、时间 几个步骤让绿茶变得清香四溢、水量、时间几个步骤让</a></li>
                <li><a href="#">间 几个步骤让绿茶变得清香四溢、水量、时间几个步骤让</a></li>
                <li><a href="#">水温、水量、时间 几个步骤让绿茶变得清香四溢、水量、时间几个步骤让</a></li>
                <li><a href="#">水温、水量、时间 几个步骤让绿茶变得清香四溢、水量、时间几个步骤让</a></li>
                <li><a href="#">水温让绿茶变得清个步骤让 、水量、时间 几个步骤 、水量、时间 几个步骤</a></li>
                <li><a href="#">水温、水量、时间 几个步骤让绿茶变得清香四溢、水量、时间几个步骤让</a></li>
                <li><a href="#">水温、水量、时间 几个步骤让绿茶变得清香四溢、水量、时间几个步骤让</a></li>
                <li><a href="#">水温、水量、时间 几个步骤让绿茶变得清香四溢、水量、时间几个步骤让</a></li>
                <li><a href="#">水温、水量、时间 几个步骤让绿茶变得清香四溢、水量、时间几个步骤让</a></li>
                <li><a href="#">水温、水量、时间 清香四溢、水量、时间几个步骤让</a></li>
            </ul>
        </div>
        <div id="div7" class="farm_div">
            <ul class="news">
            	<li><a href="#">水温、水量、时间 几个步骤让绿茶变得清香四溢、水量、时间几个步骤让</a></li>
                <li><a href="#">间 几个步骤让绿茶变得清香四溢、水量、时间几个步骤让</a></li>
                <li><a href="#">水温、水量、时间 几个步骤让绿茶变得清香四溢、水量、时间几个步骤让</a></li>
                <li><a href="#">水温、水量、时间 几个步骤让绿茶变得清香四溢、水量、时间几个步骤让</a></li>
                <li><a href="#">水温让绿茶变得清个步骤让 、水量、时间 几个步骤 、水量、时间 几个步骤</a></li>
                <li><a href="#">水温、水量、时间 几个步骤让绿茶变得清香四溢、水量、时间几个步骤让</a></li>
                <li><a href="#">水温、水量、时间 几个步骤让绿茶变得清香四溢、水量、时间几个步骤让</a></li>
                <li><a href="#">水温、水量、时间 几个步骤让绿茶变得清香四溢、水量、时间几个步骤让</a></li>
                <li><a href="#">水温、水量、时间 几个步骤让绿茶变得清香四溢、水量、时间几个步骤让</a></li>
                <li><a href="#">水温、水量、时间 清香四溢、水量、时间几个步骤让</a></li>
            </ul>
        </div> -->
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
