<?php
    error_reporting(0);
?>
<nav class="navbar navbar-default navbar-fixed-top navbar-inverse" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                                data-target="#bs-example-navbar-collapse-6">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand pull-left" id="brand" href="../index.php">&nbsp;&nbsp;&nbsp;&nbsp;</a>

            <a class="navbar-brand" href="../index.php">
                <img alt="新麦网" style="width:70px;height:40px;" src="../images/icon/logo2.png"></a>
            
            <a class="navbar-brand pull-left" id="brand" href="index.php">&nbsp;&nbsp;&nbsp;&nbsp;</a>
        </div>
        <div class="collapse navbar-collapse pull-right" id="bs-example-navbar-collapse-6">
            <ul class="nav navbar-nav " id="nav">
                <?php
                    if(!isset($_SESSION)){  session_start(); }  
                    if(isset($_SESSION["username"])&&$_SESSION["login"]){
                        echo "<li><a href='../index.php'>新麦首页</a></li>";
                        echo "<li><a href='index.php'>人物首页</a></li>";
                        echo "<li><a href='../zone/index.php'>".个人中心."</a></li>";
                        echo "<li><a href='../logout.php'>退出</a></li>";
                    }else{
                ?>
                <li><a href='../index.php'>新麦首页</a></li>
                <li>
                    <a href="../login.php">[请登录]</a>
                </li>
                <li>
                    <a href="../reg.php">注册</a>
                </li>
                <?php
                    }
                ?>
                <li>
                    <a href="../shop/cart.php">购物车</a>
                </li>
                <li>
                    <a href="../reg.php">我要开店</a>
                </li>
                <li>
                    <a href="../contact.php">
                        联系客服
                        <span class="caret"></span>
                    </a>
                    <ul>
                        <li>
                            <a href="../contact.php">&nbsp;&nbsp;在线客服</a>
                        </li>
                        <li>
                            <a href="../contact.php">&nbsp;&nbsp;投诉中心</a>
                        </li>
                        <li>
                            <a href="../contact.php">&nbsp;&nbsp;客服邮箱</a>
                        </li>
                    </ul>
                </li>

            </ul>
        </div>
    </div>
</nav>