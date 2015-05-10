<!DOCTYPE html>
<html lang="zh-cn">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>三农文化首页</title>
    <!-- <link rel="icon" type="image/x-icon" href="images/favicon.ico"> -->
    <link rel="icon" type="image/x-icon" href="../images/icon/logo2.png">
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <!-- <link href="../css/index.css" rel="stylesheet"> -->
    <link rel="stylesheet" type="text/css" href="../css/cult/farm_culture.css" />

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
        <li><a href="index.php" style="background:#4aa93e; color:#fff;">三农文化</a></li>
        <li><a href="life.php">文化生活</a></li>
        <li><a href="cust.php">节气习俗</a></li>
        <li><a href="art.php">文化艺术</a></li>
    </ul>
</nav>


<!-- Body Main -->
<div id="main">
        <div id="main_header" class="main_div">
            <p><a class="header_link" href="life.php">文化生活</a> 
                    <a class="more_link" href="#">更多></a></p>
                <hr style="margin-top:0px; width:100%;height:3px; border-top:5px ridge green; color:#000"/>
         <div class="main_div_left">
            <ul>
                <li class="li_one"><a href="life.php"><img src="../images/culture/index_03.jpg"/></a></li>
                <li><?php
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
                            if($i <=3 && !empty($photo)){
                                $i++;
                                echo "<li><a href='info.php?id=".$nid."''><img style='width:130px;height:110px;' src='../images/admin/".$photo."' /></a></li>";
                            }
                            
                        }
                    }
                //mysql_close();
                ?>      
                    <!-- <a href="#"><img src="../images/culture/index_07.jpg"/></a>
                    <a href="#"><img src="../images/culture/index_09.jpg"/></a>
                    <a href="#"><img src="../images/culture/index_11.jpg"/></a> -->
                </li>
            </ul>
        </div>
        <div class="main_div_right">
            <ul>
            <?php
                include_once "../php/config.php";
                    $sql = "select * from xm_cult where typeid = '1'  order by id desc limit 15";
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
    </div>
    
     <div class="main_div">
            <p><a class="header_link" href="cust.php">节气习俗</a> 
                    <a class="more_link" href="cust.php">更多></a></p>
                <hr style="margin-top:0px; width:100%;height:3px; border-top:5px ridge green; color:#000"/>
         <div class="main_div_left">
            <ul>
                <li class="li_one"><a href="cust.php"><img src="../images/culture/index_17.jpg"/></a></li>
                <li>
                    <?php
                include_once "../php/config.php";
                    $sql = "select * from xm_cult where typeid = '2'  order by id desc ";
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
                </li>
            </ul>
        </div>
        <div class="main_div_right">
            <ul>
                <?php
                include_once "../php/config.php";
                    $sql = "select * from xm_cult where typeid = '2'  order by id desc limit 15";
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
    </div>
     
     <div class="main_div">
            <p><a class="header_link" href="art.php">文化艺术</a> 
                    <a class="more_link" href="art.php">更多></a></p>
                <hr style="margin-top:0px; width:100%;height:3px; border-top:5px ridge green; color:#000"/>
         <div class="main_div_left">
            <ul>
                <li class="li_one"><a href="art.php"><img src="../images/culture/index_24.jpg"/></a></li>
                <li>
            <?php
                include_once "../php/config.php";
                    $sql = "select * from xm_cult where typeid = '3'  order by id desc ";
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
                </li>
            </ul>
        </div>
        <div class="main_div_right">
            <ul>
               <?php
                include_once "../php/config.php";
                    $sql = "select * from xm_cult where typeid = '3'  order by id desc limit 15";
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
    </div>
    
</div><!--main结束--> 

<!-- footer -->
<?php
    include_once "../php/footer.php";
?>

</body>
</html>
