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
    <link rel="stylesheet" type="text/css" href="../css/news.css" />
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="http://cdn.bootcss.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="http://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <link type="text/css" href="css/index.css" rel="stylesheet" />
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/index.js"></script>
</head>
<body>
<!-- Head Navbar -->
<?php
//include_once "../php/header.php";
include_once "header.php";
?>
<!-- Banner -->
<div id="zSlider" style="margin-top:50px;">
    <div id="picshow">
        <div id="picshow_img">
            <ul>
            <?php
                $row_id = array();
                $row_title = array();
                $row_photo = array();
                $row_des = array();
                $row_date = array();
                include_once "../php/config.php";
                    $sql = "select * from xm_news order by id desc";
                    // $rowsArray = $conne -> getRowsArray($sql);
                    $result = mysql_query($sql);
                    if($result&&mysql_num_rows($result)>0){
                        $i = 0;

                        while ($row = mysql_fetch_array($result)) {
                            $photo = $row['photo'];
                            if(!empty($photo) && $i<6){
                                $row_id[$i] = $row['id'];
                                //$row_title[$i] = $row['title'];
                                $row_title[$i] = mb_substr($row['title'],0,14,'UTF-8');
                                $row_photo[$i] = $row['photo'];
                                $row_date[$i] = $row['created'];
                                  //$des = $row['description'];
                            //$des = substr($des, 0,20);
                            //$des = mb_substr($des,0,5,'UTF-8');
                                $des = $row['description'];
                                $str= htmlspecialchars_decode($des); //反编译
                                $str= preg_replace("/<(.*?)>/","",$str); 
                                $row_des[$i] = mb_substr(trim($str),0,20,'UTF-8');

                                //echo "<li><a href='info.php?id=".$nid."'>".$title."...</a></li>";
                                echo "<li><a href='info.php?id=".$row_id[$i]."' ><img src='".$row_photo[$i]."'></a></li>";
                                $i++;
                            }
                            
                        }
                    }
                //mysql_close();
            ?>
              <!-- <li><a href="index.php" ><img src="images/1.jpg"></a></li>
              <li><a href="index.php" ><img src="images/2.jpg"></a></li>
              <li><a href="index.php" ><img src="images/3.jpg"></a></li>
              <li><a href="index.php" ><img src="images/4.jpg"></a></li>
              <li><a href="index.php" ><img src="images/5.jpg"></a></li>
              <li><a href="index.php" ><img src="images/6.jpg"></a></li> -->
            </ul>
        </div>
        <div id="picshow_tx">
            <ul>
                <?php
                    for($k=0;$k<count($row_id);$k++){
                        echo "<li><h3><a href='info.php?id=".$row_id[$k]."'>".$row_title[$k]." </a></h3><p>".$row_des[$k]."</p></li>";
                    }
                ?>
              <!-- <li>
                  <h3><a href="index.php" >中国死飞店铺推介：上海死飞店FACTORY FIVE</a></h3>
                  <p>上海第一家死飞精品店，由三个外国人与一中国人联合创办，主要经营客订个性单速车，帮助他们得到自己梦想中的车架。</p>
              </li>
              <li>
                  <h3><a href="index.php" >骑看世界：纯美的世界恬静的心冰岛骑游之旅</a></h3>
                  <p>冰岛有“火山岛”、“雾岛”、“冰封的土地”、“冰与火之岛”之称。有想过在这里骑游吗？下面看看Ovegur的冰岛骑游之旅吧。</p>
              </li>
              <li>
                  <h3><a href="index.php" >空气糟糕透了！推荐几款实用的骑行防毒口罩</a></h3>
                  <p>这几天，全国各地的空气糟糕透顶！北京空气污染指数又爆表了！！！经过资深车友的推荐及亲身体验，整理出几款超强防毒的骑行口罩。</p>
              </li>
              <li>
                  <h3><a href="index.php" >[组图]1200万像素带Wi-Fi 骑行记录仪Gopro Hero3评测</a></h3>
                  <p>近年来户外骑行等运动录像盛行，Gopro这品牌可说功不可没，新版的Gopro Hero3具有1200万像素带Wi-Fi功能……</p>
              </li>
              <li>
                  <h3><a href="index.php" >张向东：南非无危险的骑行与有纠结的ubuntu(组图)</a></h3>
                  <p>“我要从南骑到北，我还要从白骑到黑。我要人们都看到我，却不知道我是谁。爱上我你就不要后悔，总有一天我要远走高飞。”</p>
              </li>
              <li>
                  <h3><a href="index.php" >单车文化课堂⑥：学会撬胎补胎爆胎不再烦</a></h3>
                  <p>外出骑行，不会总有一个修车老大爷在你扎胎后的不远处等着你，本期课堂教会你如何撬胎补胎，再碰上爆胎，你就可以淡定了。</p>
              </li> -->
            </ul>
        </div>
    </div>
    <div id="select_btn">
        <ul>
          <?php
            for($k=0;$k<count($row_id);$k++){
                echo "<li><a href='info.php?id=".$row_id[$k]."'><img src='".$row_photo[$k]."'>
                <span class='select_text'>".$row_title[$k]."</span>
                <span class='select_date' >".$row_date[$k]."</span></a></li>";
            }
          ?>
          <!-- <li><a href="index.php" ><img src="images/01.jpg"><span class="select_text">上海死飞店FACTORY FIVE</span><span class="select_date">2013/01/16</span></a></li>
          <li><a href="index.php" ><img src="images/02.jpg"><span class="select_text">骑看世界：北欧冰岛骑游之旅</span><span class="select_date">2013/01/15</span></a></li>
          <li><a href="index.php" ><img src="images/03.jpg"><span class="select_text">推荐几款实用的骑行防毒口罩</span><span class="select_date">2013/01/13</span></a></li>
          <li><a href="index.php" ><img src="images/04.jpg"><span class="select_text">骑行记录仪Gopro Hero3评测</span><span class="select_date">2013/01/08</span></a></li>
          <li><a href="index.php" ><img src="images/05.jpg"><span class="select_text">3G门户总裁张向东南非骑行日记</span><span class="select_date">2012/12/28</span></a></li>
          <li><a href="index.php" ><img src="images/06.jpg"><span class="select_text">教学：学会撬胎补胎 爆胎不再烦</span><span class="select_date">2012/12/26</span></a></li> -->
        </ul>
    </div>  
</div>

<!-- Body Main -->
<div id="main" >
          <div id="div1">
            <h2>生活</h2>
            <ul id="ul_1" class="font">
            <?php
                include_once "../php/config.php";
                    $sql = "select * from xm_news where typeid = '1'  order by id desc limit 10";
                    // $rowsArray = $conne -> getRowsArray($sql);
                    $result = mysql_query($sql);
                    if($result&&mysql_num_rows($result)>0){
                        $i = 0;
                        while ($row = mysql_fetch_array($result)) {
                            $i++;
                            $nid = $row['id'];
                            $title = $row['title'];

                            echo "<li><a href='info.php?id=".$nid."'>".$title."...</a></li>";
                        }
                    }
                //mysql_close();
            ?>
            </ul>
          </div>
          <div id="div2">
            <h2>农业</h2>
            <ul id="ul_2" class="font" style="margin-left:-100px;">
            <br>
                <?php
                    $sql2 = "select * from xm_news where typeid = '2'  order by id desc limit 10";
                    // $rowsArray = $conne -> getRowsArray($sql);
                    $result2 = mysql_query($sql2);
                    if($result2&&mysql_num_rows($result2)>0){
                        $i = 0;
                        while ($row2 = mysql_fetch_array($result2)) {
                            $i++;
                            $nid2 = $row2['id'];
                            $title2 = $row2['title'];

                            echo "<li><a href='info.php?id=".$nid2."'>".$title2."...</a></li>";
                        }
                    }
                ?>
            </ul>
          </div><div id="div3">
            <h2>科教</h2>
            <ul id="ul_3" class="font">
                <?php
                    $sql3 = "select * from xm_news where typeid = '3'  order by id desc limit 10";
                    // $rowsArray = $conne -> getRowsArray($sql);
                    $result3 = mysql_query($sql3);
                    if($result3&&mysql_num_rows($result3)>0){
                        $i = 0;
                        while ($row3 = mysql_fetch_array($result3)) {
                            $i++;
                            $nid3 = $row3['id'];
                            $title3 = $row3['title'];

                            echo "<li><a href='info.php?id=".$nid3."'>".$title3."...</a></li>";
                        }
                    }
                ?>
            </ul>
          </div>
          <div id="div4" class="font">
            <h2>文体</h2>
            <ul id="ul_4" class="font" style="margin-left:-100px;">
                <?php
                    $sql4 = "select * from xm_news where typeid = '4'  order by id desc limit 10";
                    // $rowsArray = $conne -> getRowsArray($sql);
                    $result4 = mysql_query($sql4);
                    if($result4&&mysql_num_rows($result4)>0){
                        $i = 0;
                        while ($row4 = mysql_fetch_array($result4)) {
                            $i++;
                            $nid4 = $row4['id'];
                            $title4 = $row4['title'];
                            echo "<li><a href='info.php?id=".$nid4."'>".$title4."...</a></li>";
                        }
                    }
                ?>
            </ul>
          </div>
          <div id="div5" class="font">
            <h2>更多</h2>
            <ul id="ul_5">
                <?php
                    $sql5 = "select * from xm_news where typeid = '5'  order by id desc limit 10";
                    // $rowsArray = $conne -> getRowsArray($sql);
                    $result5 = mysql_query($sql5);
                    if($result5&&mysql_num_rows($result5)>0){
                        $i = 0;
                        while ($row5 = mysql_fetch_array($result5)) {
                            $i++;
                            $nid5 = $row5['id'];
                            $title5 = $row5['title'];
                            echo "<li><a href='info.php?id=".$nid5."'>".$title5."...</a></li>";
                        }
                    }
                ?>
            </ul>
          </div>
</div>



<!-- footer -->
<?php
    include_once "../php/footer.php";
?>


</body>
</html>
