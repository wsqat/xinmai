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
    <link rel="stylesheet" type="text/css" href="../css/person_search.css" />
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
header("Content-type:text/html;charset=utf-8");
include_once "header.php";
include_once "../php/config.php";
    $result = mysql_query("SELECT * FROM xm_blog");
    $num_rows = mysql_num_rows($result);
include_once "../php/conn.php";
mysql_query("set names 'utf8'");    
    $sql = "select * from xm_blog where name=\"".$_SESSION["username"]."\"";
    $num = $conne->getRowsNum($sql);
    if($num >= 1){
        //如果存在
        $rst = $conne->getRowsRst($sql);
        $name = $rst["name"];
        $nation = $rst["nation"];
        $work = $rst["work"];
        $talent = $rst["talent"];
        $height = $rst["height"];
        $birthday = $rst["birthday"];
        $birthplace = $rst["birthplace"];
        $concern = $rst["concern"];
        $arr = explode("&&", $concern);
        $des = $rst["description"];
        $photo = $rst["photo"];
        if(empty($photo))
            $photo="1.jpg";
    }
    //echo $name;
    //echo $des;
    $conne->close_conn();    

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
            <!--后台生成搜索到的人物-->
            <div class="down">
                <h1><?php echo $name;?></h1>
                <table id="tab1">
                    <tr><td><label>姓名:</label></td> 
                            <td><?php echo $name;?></td></tr>
                    <tr><td><label>个人图片</label></td><td><img style="width:100px;height:100px;" src="../images/blog/<?php echo $photo;?>"></td></tr>
                    <tr><td><label>民族:</label></td> 
                            <td><?php echo $nation;?></td></tr>
                    <tr><td><label>出生地:</label></td> 
                            <td><?php echo $birthplace;?></td></tr>
                    <tr><td><label>出生日期:</label></td> 
                            <td><?php echo $birthday;?></td></tr>
                    <tr><td><label>身高:</label></td> 
                            <td><?php echo $height;?></td></tr>
                <!-- </table>
                <table id="tab2"> -->
                    <tr><td><label>职业:</label>
                        </td><td><?php echo $work;?></td></tr>
                    <tr><td><label>特长</label>:</td>
                        <td><?php echo $talent;?></td></tr>

                </table>
                <br>
                
                <p><label>我的人物关注:</label><a href="search.php?name=<?php if(!empty($arr[0])) echo $arr[0];?>"><?php if(!empty($arr[0])) echo $arr[0];?></a>
                    <a href="search.php?name=<?php if(!empty($arr[1])) echo $arr[1];?>"><?php if(!empty($arr[1])) echo $arr[1];?></a></p>


                    <div id="area">
                        <p><label>我的个人描述:</label>
                        <label><?php echo $des;?></label></p>
                    </div>
            
            </div>
            
        </div>
        <div id="right">
            <?php
                if(isset($_SESSION["id"])){
                    include_once "../php/config.php";
                    $username = $_SESSION["username"];
                    $sqls = "select * from xm_blog where name = '$username' ";
                    //$results = mysql_query($sqls);
                    //echo $sqls;
                    $nums = $conne->getRowsNum($sqls);
                    if($nums >= 1){
                        //如果存在
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

