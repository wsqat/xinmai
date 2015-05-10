<?php
if(!isset($_SESSION)){ session_start(); };

?>
<!DOCTYPE html>
<html lang="zh-cn">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>新麦人物</title>
    <link rel="icon" type="image/x-icon" href="../images/icon/logo2.png">
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <!-- <link href="../css/login.css" rel="stylesheet"> -->
    <link href="../css/style.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="../css/person_main.css" />
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
include_once "../php/config.php";
    $result = mysql_query("SELECT * FROM xm_blog");
    $num_rows = mysql_num_rows($result);
?>



<!-- Body Main -->
<div id="main">
        <div id="left">
            <div class="up">
            <form action="search.php" method="post">
                <input type="text" id="search" name="search"/><input type="submit" value="搜索" id="myMemoir" />
                 <p>搜索你想要了解的人</p>
             </form>
            </div>
            <div class="down">
                <h1>新麦人物</h1>
                <p><input type="text" class="space"/>新麦人物是新麦网千千万万的普通人打造人物介绍。每个用户具有平等的权利，没跟都可以为自己编辑个人传记，在符合《新麦人物编辑规则》的条件下，也可以申请为自己的亲人、好友编辑人物传记。</p>
                <p><input type="text" class="space"/>所有人物传记都可以由用户编辑，对于真实性新麦网无从验证。新麦网只是作为普通人个人传记展示的平台，对此不负任何法律责任。</p>    
           </div>
        </div>
        <div id="right">
            <?php
                if(isset($_SESSION["id"])){
                    include_once "../php/config.php";
                    $username = $_SESSION["username"];
                    $sql = "select * from xm_blog where name = '$username' ";
                    $result = mysql_query($sql);
                    $arr  =  mysql_fetch_assoc(mysql_query($sql));
                    if(isset($arr["id"])){
                        echo "<h1><a href='index.php'>我的传记</a></h1>";
                        echo "<p  id='title'><a href='self.php'>查看我的传记</a></p>" ;
                        echo "<p  id='title'><a href='update.php'>修改我的传记</a></p>" ;
                        echo "<p  id='title'><a href='edit.php'>添加亲友传记</a></p>" ;
                    }else{
                        echo "<h1><a href='index.php'>我的传记</a></h1>";
                        echo "<p  id='title'><a href='edit.php'>添加我的传记</a></p>" ;
                    }
                    //mysql_close();    
                }else{
                    echo "<h1><a href='../login.php'>我的传记</a></h1>";
                    echo "<p  id='title'>注册登录后可添加自己个人传记</p>" ;
                }
                
            ?>
            
            
            <br>
            <br>
            <br>
            <h1><a href="index.php">新麦人物</a></h1>
            <p id="title">平凡的世界认识平凡的你</p>
            <!--10036个词条为后台自动生成部分-->
            <p id="wordNum"><?php echo $num_rows;?>个词条</p>
            <p id="hotSearch">最新传记</p>
            <!--下面热搜为后台生成部分-->
            <ul>
              <?php
                include_once "../php/config.php";
                    $sql = "select * from xm_blog order by id desc limit 10";
                    // $rowsArray = $conne -> getRowsArray($sql);
                    $result = mysql_query($sql);
                    if($result&&mysql_num_rows($result)>0){
                        $i = 0;
                        while ($row = mysql_fetch_array($result)) {
                            $i++;
                            $nid = $row['id'];
                            $name = $row['name'];
                            //$des = $row['description'];
                            //$des = substr($des, 0,20);
                            //$des = mb_substr($des,0,5,'UTF-8');
                            echo "<li><a href='search.php?name=".$name."'>".$name."</a></li>";
                        }
                    }
                    //mysql_close();
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
