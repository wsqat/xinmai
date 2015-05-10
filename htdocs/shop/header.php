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
            <form method="post" action="searchs.php" id="zh-top-search-form" class="navbar-brand zu-top-search-form form-with-magnify">
                <input type="text" class="zu-top-search-input" id="q" name="supplier" autocomplete="off" value="" placeholder="搜索商家..." aria-haspopup="true">
                <label for="q" class="hide-text">新麦搜索</label>
                <button type="submit" class="magnify-button"> <i class="icon icon-magnify-q"></i>
                    <span class="hide-text">搜索商家...</span>
                </button>
            </form>
        </div>
        <div class="collapse navbar-collapse pull-right" id="bs-example-navbar-collapse-6">
            <ul class="nav navbar-nav " id="nav">
                <?php
                    if(!isset($_SESSION)){  session_start(); }  
                    echo "<li><a href='../index.php'>新麦首页</a></li>";
                    if(isset($_SESSION["username"])&&$_SESSION["login"]){
                        
                        echo "<li><a href='index.php'>企业商家</a></li>";
                        echo "<li><a href='../zone/index.php'>".$_SESSION["username"]."</a></li>";
                        echo "<li><a href='../logout.php'>退出</a></li>";
                    }else{
                ?>
                <!-- <li><a href='../index.php'>新麦首页</a></li> -->
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
                    <a href="cart.php">购物车</a>
                </li>
                <!-- <li>
                    <a href="../reg.php">我要开店</a>
                </li> -->
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