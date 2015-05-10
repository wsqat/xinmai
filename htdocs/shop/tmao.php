<?php
if(!isset($_SESSION)){ session_start(); };

?>
<!DOCTYPE html>
<html lang="zh-cn">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>商家店铺</title>
    <link rel="icon" type="image/x-icon" href="../images/icon/logo2.png">
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/style.css" rel="stylesheet">
    <link href="../css/shopstyle.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="../css/business.css" />
    <script type="text/javascript" src="../js/jquery1.42.min.js"></script>
    <script type="text/javascript" src="../js/jquery.SuperSlide.2.1.1.js"></script>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="http://cdn.bootcss.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="http://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <link href="../css/zone.css" rel="stylesheet">
</head>
<body>
<!-- Head Navbar -->
<?php
//include_once "../php/header.php";
include_once "header.php";
include_once "../php/config.php";
if($_SESSION["user_role"]==1)
    $usertable = "xm_customer";
elseif($_SESSION["user_role"]==2)
    $usertable = "xm_supplier";
$arr = mysql_fetch_assoc(mysql_query("select * from ".$usertable." where id = '".$_SESSION["id"]."' "));
        $uname = $arr['username'];
        $uheader = $arr['header_photo'];
        $uemail = $arr['email'];
        $upwd = $arr['password'];
        $sex = $arr['sex'];
        $utel = $arr['phone'];
?>

<div id="main">

<div class="tmall_box">
    <div class="menu">
        <ul>
            <li><a href="shop.php?id=1">品牌街</a></li>
            <li><a href="http://sc.chinaz.com">喵鲜生</a></li>
            <li><a href="http://sc.chinaz.com">积分聚乐部</a></li>
            <li><a href="http://sc.chinaz.com">电器城</a></li>
            <li><a href="http://sc.chinaz.com">新首发</a></li>
            <li><a href="http://sc.chinaz.com">天猫超市</a></li>
        </ul>
    </div>
    <div id="tmall_nav">
        <!--左侧栏目开始-->
        <div class="tmall_cat_nav fl">
            <div class="tmall_mod_title">商品服务分类</div>
            <ul class="cate_nav">
                <li>
                    <div class="cat_0_nav">
                        <s class="cat-nav-icon fp-iconfont">&#x3451;</s>
                        精选市场
                    </div>
                </li>
                <li>
                    <div class="cat_1_nav">
                        <s class="cat-nav-icon fp-iconfont">&#x3459;</s>
                        <a href="http://sc.chinaz.com">女装</a> / <a href="#">内衣</a>
                    </div>
                </li>
                <li>
                    <div class="cat_2_nav">
                        <s class="cat-nav-icon fp-iconfont">&#x346c;</s>
                        <a href="http://sc.chinaz.com">男装</a> / <a href="http://sc.chinaz.com">运动</a> / <a href="http://sc.chinaz.com">户外</a>
                    </div>
                </li>
                <li>
                    <div class="cat_3_nav">
                        <s class="cat-nav-icon fp-iconfont">&#x346d;</s>
                        <a href="http://sc.chinaz.com">女鞋</a> / <a href="http://sc.chinaz.com">男鞋</a> / <a href="http://sc.chinaz.com">箱包</a>
                    </div>
                </li>
                <li>
                    <div class="cat_4_nav">
                        <s class="cat-nav-icon fp-iconfont">&#x345c;</s>
                        <a href="http://sc.chinaz.com">化妆品</a> / <a href="http://sc.chinaz.com">个人护理</a>
                    </div>
                </li>
                <li>
                    <div class="cat_5_nav">
                        <s class="cat-nav-icon fp-iconfont">&#x3457;</s>
                        <a href="http://sc.chinaz.com">手机数码</a> / <a href="http://sc.chinaz.com">电脑办公</a>
                    </div>
                </li>
                <li>
                    <div class="cat_6_nav">
                        <s class="cat-nav-icon fp-iconfont">&#x3456;</s>
                        <a href="http://sc.chinaz.com">母婴玩具</a>
                    </div>
                </li>
                <li>
                    <div class="cat_7_nav">
                        <s class="cat-nav-icon fp-iconfont">&#x3455;</s>
                        <a href="http://sc.chinaz.com">食品</a>
                    </div>
                </li>
                <li>
                    <div class="cat_8_nav">
                        <s class="cat-nav-icon fp-iconfont">&#x3454;</s>
                        <a href="http://sc.chinaz.com">大家电</a> / <a href="http://sc.chinaz.com">生活电器</a>
                    </div>
                </li>
                <li>
                    <div class="cat_9_nav">
                        <s class="cat-nav-icon fp-iconfont">&#x345e;</s>
                        <a href="http://sc.chinaz.com">家具建材</a>
                    </div>
                </li>
                <li>
                    <div class="cat_10_nav">
                        <s class="cat-nav-icon fp-iconfont">&#x3452;</s>
                        <a href="http://sc.chinaz.com">珠宝饰品</a> / <a href="http://sc.chinaz.com">手表眼镜</a>
                    </div>
                </li>
                <li>
                    <div class="cat_11_nav">
                        <s class="cat-nav-icon fp-iconfont">&#x345d;</s>
                        <a href="http://sc.chinaz.com">全新整车</a> / <a href="http://sc.chinaz.com">汽车配件</a>
                    </div>
                </li>
                <li>
                    <div class="cat_12_nav">
                        <s class="cat-nav-icon fp-iconfont">&#x346e;</s>
                        <a href="http://sc.chinaz.com">家纺</a> / <a href="http://sc.chinaz.com">家饰</a>
                    </div>
                </li>
                <li>
                    <div class="cat_13_nav">
                        <s class="cat-nav-icon fp-iconfont">&#x3460;</s>
                        <a href="http://sc.chinaz.com">医药保健</a>
                    </div>
                </li>
                <li>
                    <div class="cat_14_nav">
                        <s class="cat-nav-icon fp-iconfont">&#x345f;</s>
                        <a href="http://sc.chinaz.com">居家百货</a>
                    </div>
                </li>
                <li>
                    <div class="cat_15_nav">
                        <s class="cat-nav-icon fp-iconfont">&#x3461;</s>
                        <a href="http://sc.chinaz.com">图书音像</a>
                    </div>
                </li>
            </ul>
        </div>
        <!--左侧栏目结束-->
        <!--右侧内容开始-->
        <div class="tmall_cat_content fr">
            <div class="cat_pannel clearfix">
                <div class="fl cat_detail grid_col_0">
                    <ul class="cat_label_list market_list clearfix">
                        <li><a href="http://sc.chinaz.com">女装</a></li>
                        <li><a href="http://sc.chinaz.com">电器</a></li>
                        <li><a href="http://sc.chinaz.com">男装</a></li>
                        <li><a href="http://sc.chinaz.com">美妆</a></li>
                        <li><a href="http://sc.chinaz.com">内衣</a></li>
                        <li><a href="http://sc.chinaz.com">母婴</a></li>
                        <li><a href="http://sc.chinaz.com">箱包</a></li>
                        <li><a href="http://sc.chinaz.com">家装</a></li>
                        <li><a href="http://sc.chinaz.com">户外</a></li>
                        <li><a href="http://sc.chinaz.com">医药</a></li>
                        <li><a href="http://sc.chinaz.com">女鞋</a></li>
                        <li><a href="http://sc.chinaz.com">书城</a></li>
                        <li><a href="http://sc.chinaz.com">男鞋</a></li>
                        <li><a href="http://sc.chinaz.com">鲜花</a></li>
                    </ul>
                    <h3 class="cat_label_title">主题购</h3>
                    <ul class="cat_label_list">
                        <li><a href="http://sc.chinaz.com">新衣过年</a></li>
                        <li class="second_label"><a href="http://sc.chinaz.com">达人说菜</a></li>
                        <li><a href="http://sc.chinaz.com">科技生活</a></li>
                        <li class="second_label"><a href="http://sc.chinaz.com">春季备孕</a></li>
                        <li><a href="http://sc.chinaz.com">安全守护</a></li>
                        <li class="second_label"><a href="http://sc.chinaz.com">香聚一堂</a></li>
                    </ul>
                    <a class="market_banner" href="http://sc.chinaz.com"><img src="images/0.png" /></a>
                </div>
                <div class="fl cat_banner">
                    <ul class="cat_banner_pic">
                        <li><a href="http://sc.chinaz.com"><img src="images/1.jpg" width="459" height="482" /></a></li>
                        <li><a href="http://sc.chinaz.com"><img src="images/2.jpg" width="459" height="482" /></a></li>
                        <li><a href="http://sc.chinaz.com"><img src="images/3.jpg" width="459" height="482" /></a></li>
                    </ul>
                    <a class="prev_pic" href="javascript:void(0)"></a>
                    <a class="next_pic" href="javascript:void(0)"></a>
                    <div class="num">
                        <ul></ul>
                    </div>
                </div>
                <ul class="fl cat_small_banner">
                    <li><a href="http://sc.chinaz.com"><img src="images/21jpg.jpg" width="190" height="160" /></a></li>
                    <li><a href="http://sc.chinaz.com"><img src="images/22.jpg" width="190" height="160" /></a></li>
                    <li><a href="http://sc.chinaz.com"><img src="images/23.jpg" width="190" height="160" /></a></li>
                </ul>
            </div>
            <div class="cat_pannel clearfix">
                <div class="fl cat_detail grid_col_1">
                    <h3 class="cat_title">女装/内衣</h3>
                    <ul class="cat_label_list clearfix">
                        <li><a href="http://sc.chinaz.com">新品频道</a></li>
                        <li class="second_label"><a href="http://sc.chinaz.com">女装频道</a></li>
                        <li><a href="http://sc.chinaz.com">品牌特卖</a></li>
                        <li class="second_label"><a href="http://sc.chinaz.com">T恤</a></li>
                        <li><a href="http://sc.chinaz.com">连衣裙</a></li>
                        <li class="second_label"><a href="http://sc.chinaz.com">半身裙</a></li>
                        <li><a href="http://sc.chinaz.com">衬衫</a></li>
                        <li class="second_label"><a href="http://sc.chinaz.com">针织衫</a></li>
                        <li><a href="http://sc.chinaz.com">毛衣</a></li>
                        <li class="second_label"><a href="http://sc.chinaz.com">羊绒衫</a></li>
                        <li><a href="http://sc.chinaz.com">毛呢外套</a></li>
                        <li class="second_label"><a href="http://sc.chinaz.com">羊绒大衣</a></li>
                        <li><a href="http://sc.chinaz.com">小西装</a></li>
                        <li class="second_label"><a href="http://sc.chinaz.com">风衣</a></li>
                        <li><a href="http://sc.chinaz.com">裤子</a></li>
                        <li class="second_label"><a href="http://sc.chinaz.com">牛仔裤</a></li>
                        <li><a href="http://sc.chinaz.com">短外套</a></li>
                        <li class="second_label"><a href="http://sc.chinaz.com">卫衣</a></li>
                        <li><a href="http://sc.chinaz.com">羽绒服</a></li>
                        <li class="second_label"><a href="http://sc.chinaz.com">棉衣</a></li>
                        <li><a href="http://sc.chinaz.com">大牌文胸</a></li>
                        <li class="second_label"><a href="http://sc.chinaz.com">男士内衣</a></li>
                        <li><a href="http://sc.chinaz.com">睡衣上新</a></li>
                        <li class="second_label"><a href="http://sc.chinaz.com">内衣频道</a></li>
                    </ul>
                    <div class="cat_brand">
                        <ul class="cat_slide_brand">
                            <li>
                                <a href="http://sc.chinaz.com"><img src="images/10.jpg" width="90" height="40" /></a>
                                <a href="http://sc.chinaz.com"><img src="images/11.jpg" width="90" height="40" /></a>
                            </li>
                            <li>
                                <a href="http://sc.chinaz.com"><img src="images/12.jpg" width="90" height="40" /></a>
                                <a href="http://sc.chinaz.com"><img src="images/13.jpg" width="90" height="40" /></a>
                            </li>
                            <li>
                                <a href="http://sc.chinaz.com"><img src="images/14.jpg" width="90" height="40" /></a>
                                <a href="http://sc.chinaz.com"><img src="images/15.jpg" width="90" height="40" /></a>
                            </li>
                        </ul>
                        <ul class="cat_slide_nav">
                            <li>•</li>
                            <li>•</li>
                            <li>•</li>
                        </ul>
                    </div>
                </div>
                <div class="fl cat_banner">
                    <a class="banner-grid-b1" href="http://sc.chinaz.com"><img src="images/7.jpg" /></a>
                    <a class="fl banner-grid-b2" href="http://sc.chinaz.com"><img src="images/8.jpg" /></a>
                    <a class="fl banner-grid-b3" href="http://sc.chinaz.com"><img src="images/9.jpg" /></a>
                </div>
                <ul class="fl cat_small_banner">
                    <li><a href="http://sc.chinaz.com"><img src="images/4.jpg" width="190" height="160" /></a></li>
                    <li><a href="http://sc.chinaz.com"><img src="images/5.jpg" width="190" height="160" /></a></li>
                    <li><a href="http://sc.chinaz.com"><img src="images/6.jpg" width="190" height="160" /></a></li>
                </ul>
            </div>
            <div class="cat_pannel clearfix">
                <div class="fl cat_detail grid_col_2">
                    <h3 class="cat_title">男装/运动/户外</h3>
                    <ul class="cat_label_list clearfix">
                        <li><a href="http://sc.chinaz.com">衬衫</a></li>
                        <li class="second_label"><a href="http://sc.chinaz.com">T恤</a></li>
                        <li><a href="http://sc.chinaz.com">夹克</a></li>
                        <li class="second_label"><a href="http://sc.chinaz.com">牛仔裤</a></li>
                        <li><a href="http://sc.chinaz.com">休闲裤</a></li>
                        <li class="second_label"><a href="http://sc.chinaz.com">针织衫</a></li>
                        <li><a href="http://sc.chinaz.com">西服</a></li>
                        <li class="second_label"><a href="http://sc.chinaz.com">卫衣</a></li>
                        <li><a href="http://sc.chinaz.com">皮衣</a></li>
                        <li class="second_label"><a href="http://sc.chinaz.com">风衣</a></li>
                        <li><a href="http://sc.chinaz.com">棉衣</a></li>
                        <li class="second_label"><a href="http://sc.chinaz.com">羽绒服</a></li>
                        <li><a href="http://sc.chinaz.com">西服套装</a></li>
                        <li class="second_label"><a href="http://sc.chinaz.com">西裤</a></li>
                        <li><a href="http://sc.chinaz.com">运动鞋</a></li>
                        <li class="second_label"><a href="http://sc.chinaz.com">运动服</a></li>
                        <li><a href="http://sc.chinaz.com">篮球鞋</a></li>
                        <li class="second_label"><a href="http://sc.chinaz.com">跑步鞋</a></li>
                        <li><a href="http://sc.chinaz.com">冲锋衣裤</a></li>
                        <li class="second_label"><a href="http://sc.chinaz.com">登山鞋</a></li>
                        <li><a href="http://sc.chinaz.com">登山包</a></li>
                        <li class="second_label"><a href="http://sc.chinaz.com">自行车</a></li>
                        <li><a href="http://sc.chinaz.com">跑步机</a></li>
                        <li class="second_label"><a href="http://sc.chinaz.com">健身用品</a></li>
                    </ul>
                    <div class="cat_brand">
                        <ul class="cat_slide_brand">
                            <li>
                                <a href="http://sc.chinaz.com"><img src="images/16.jpg" width="90" height="40" /></a>
                                <a href="http://sc.chinaz.com"><img src="images/17.jpg" width="90" height="40" /></a>
                            </li>
                            <li>
                                <a href="http://sc.chinaz.com"><img src="images/18.jpg" width="90" height="40" /></a>
                                <a href="http://sc.chinaz.com"><img src="images/19.jpg" width="90" height="40" /></a>
                            </li>
                            <li>
                                <a href="http://sc.chinaz.com"><img src="images/20.jpg" width="90" height="40" /></a>
                                <a href="http://sc.chinaz.com"><img src="images/21.jpg" width="90" height="40" /></a>
                            </li>
                        </ul>
                        <ul class="cat_slide_nav">
                            <li>•</li>
                            <li>•</li>
                            <li>•</li>
                        </ul>
                    </div>
                </div>
                <div class="fl cat_banner">
                    <a class="banner-grid-b1" href="http://sc.chinaz.com"><img src="images/24.jpg" /></a>
                    <a class="fl banner-grid-b2" href="http://sc.chinaz.com"><img src="images/25.jpg" /></a>
                    <a class="fl banner-grid-b3" href="http://sc.chinaz.com"><img src="images/26.jpg" /></a>
                </div>
                <ul class="fl cat_small_banner">
                    <li><a href="http://sc.chinaz.com"><img src="images/21jpg.jpg" width="190" height="160" /></a></li>
                    <li><a href="http://sc.chinaz.com"><img src="images/22.jpg" width="190" height="160" /></a></li>
                    <li><a href="http://sc.chinaz.com"><img src="images/23.jpg" width="190" height="160" /></a></li>
                </ul>
            </div>
            <div class="cat_pannel clearfix">
                <div class="fl cat_detail grid_col_3">
                    <h3 class="cat_title">女鞋/男鞋/箱包</h3>
                    <ul class="cat_label_list clearfix">
                        <li><a href="http://sc.chinaz.com">时尚女鞋</a></li>
                        <li class="second_label"><a href="http://sc.chinaz.com">流行男鞋</a></li>
                        <li><a href="http://sc.chinaz.com">热卖新品</a></li>
                        <li class="second_label"><a href="http://sc.chinaz.com">男休闲鞋</a></li>
                        <li><a href="http://sc.chinaz.com">深口单鞋</a></li>
                        <li class="second_label"><a href="http://sc.chinaz.com">正装皮鞋</a></li>
                        <li><a href="http://sc.chinaz.com">浅口单鞋</a></li>
                        <li class="second_label"><a href="http://sc.chinaz.com">男士单鞋</a></li>
                        <li><a href="http://sc.chinaz.com">中跟单鞋</a></li>
                        <li class="second_label"><a href="http://sc.chinaz.com">男帆布鞋</a></li>
                        <li><a href="http://sc.chinaz.com">气质短靴</a></li>
                        <li class="second_label"><a href="http://sc.chinaz.com">男士潮鞋</a></li>
                        <li><a href="http://sc.chinaz.com">中筒靴</a></li>
                        <li class="second_label"><a href="http://sc.chinaz.com">高帮鞋</a></li>
                        <li><a href="http://sc.chinaz.com">潮流女包</a></li>
                        <li class="second_label"><a href="http://sc.chinaz.com">双肩包</a></li>
                        <li><a href="http://sc.chinaz.com">女士钱包</a></li>
                        <li class="second_label"><a href="http://sc.chinaz.com">拉杆箱</a></li>
                        <li><a href="http://sc.chinaz.com">真皮女包</a></li>
                        <li class="second_label"><a href="http://sc.chinaz.com">皮带</a></li>
                        <li><a href="http://sc.chinaz.com">斜挎女包</a></li>
                        <li class="second_label"><a href="http://sc.chinaz.com">围巾</a></li>
                        <li><a href="http://sc.chinaz.com">斜挎男包</a></li>
                        <li class="second_label"><a href="http://sc.chinaz.com">大牌底价</a></li>
                    </ul>
                    <div class="cat_brand">
                        <ul class="cat_slide_brand">
                            <li>
                                <a href="http://sc.chinaz.com"><img src="images/10.jpg" width="90" height="40" /></a>
                                <a href="http://sc.chinaz.com"><img src="images/11.jpg" width="90" height="40" /></a>
                            </li>
                            <li>
                                <a href="http://sc.chinaz.com"><img src="images/12.jpg" width="90" height="40" /></a>
                                <a href="http://sc.chinaz.com"><img src="images/13.jpg" width="90" height="40" /></a>
                            </li>
                            <li>
                                <a href="http://sc.chinaz.com"><img src="images/14.jpg" width="90" height="40" /></a>
                                <a href="http://sc.chinaz.com"><img src="images/15.jpg" width="90" height="40" /></a>
                            </li>
                        </ul>
                        <ul class="cat_slide_nav">
                            <li>•</li>
                            <li>•</li>
                            <li>•</li>
                        </ul>
                    </div>
                </div>
                <div class="fl cat_banner">
                    <a class="fl banner-grid-b4" href="http://sc.chinaz.com"><img src="images/27.jpg" /></a>
                    <a class="fl banner-grid-b5" href="http://sc.chinaz.com"><img src="images/29.jpg" /></a>
                    <a class="fl banner-grid-b2" href="http://sc.chinaz.com"><img src="images/25.jpg" /></a>
                    <a class="fl banner-grid-b3" href="http://sc.chinaz.com"><img src="images/26.jpg" /></a>
                </div>
                <ul class="fl cat_small_banner">
                    <li><a href="http://sc.chinaz.com"><img src="images/4.jpg" width="190" height="160" /></a></li>
                    <li><a href="http://sc.chinaz.com"><img src="images/5.jpg" width="190" height="160" /></a></li>
                    <li><a href="http://sc.chinaz.com"><img src="images/6.jpg" width="190" height="160" /></a></li>
                </ul>
            </div>
            <div class="cat_pannel clearfix">
                <div class="fl cat_detail grid_col_4">
                    <h3 class="cat_title">天猫美妆</h3>
                    <ul class="cat_label_list clearfix">
                        <li><a href="http://sc.chinaz.com">面部护肤</a></li>
                        <li class="second_label"><a href="http://sc.chinaz.com">护理套装</a></li>
                        <li><a href="http://sc.chinaz.com">面膜</a></li>
                        <li class="second_label"><a href="http://sc.chinaz.com">乳液面霜</a></li>
                        <li><a href="http://sc.chinaz.com">身体护理</a></li>
                        <li class="second_label"><a href="http://sc.chinaz.com">眼部护理</a></li>
                        <li><a href="http://sc.chinaz.com">化妆水</a></li>
                        <li class="second_label"><a href="http://sc.chinaz.com">面部精华</a></li>
                        <li><a href="http://sc.chinaz.com">BB霜</a></li>
                        <li class="second_label"><a href="http://sc.chinaz.com">男士护理</a></li>
                        <li><a href="http://sc.chinaz.com">精油芳疗</a></li>
                        <li class="second_label"><a href="http://sc.chinaz.com">香水</a></li>
                        <li><a href="http://sc.chinaz.com">洁面</a></li>
                        <li class="second_label"><a href="http://sc.chinaz.com">手部保养</a></li>
                        <li><a href="http://sc.chinaz.com">美容工具</a></li>
                        <li class="second_label"><a href="http://sc.chinaz.com">胸部护理</a></li>
                        <li><a href="http://sc.chinaz.com">美甲</a></li>
                        <li class="second_label"><a href="http://sc.chinaz.com">彩妆套装</a></li>
                        <li><a href="http://sc.chinaz.com">卸妆</a></li>
                        <li class="second_label"><a href="http://sc.chinaz.com">隔离</a></li>
                        <li><a href="http://sc.chinaz.com">洗发沐浴</a></li>
                        <li class="second_label"><a href="http://sc.chinaz.com">卫生巾</a></li>
                        <li><a href="http://sc.chinaz.com">假发</a></li>
                        <li class="second_label"><a href="http://sc.chinaz.com">染发烫发</a></li>
                    </ul>
                    <div class="cat_brand">
                        <ul class="cat_slide_brand">
                            <li>
                                <a href="http://sc.chinaz.com"><img src="images/16.jpg" width="90" height="40" /></a>
                                <a href="http://sc.chinaz.com"><img src="images/17.jpg" width="90" height="40" /></a>
                            </li>
                            <li>
                                <a href="http://sc.chinaz.com"><img src="images/18.jpg" width="90" height="40" /></a>
                                <a href="http://sc.chinaz.com"><img src="images/19.jpg" width="90" height="40" /></a>
                            </li>
                            <li>
                                <a href="http://sc.chinaz.com"><img src="images/20.jpg" width="90" height="40" /></a>
                                <a href="http://sc.chinaz.com"><img src="images/21.jpg" width="90" height="40" /></a>
                            </li>
                        </ul>
                        <ul class="cat_slide_nav">
                            <li>•</li>
                            <li>•</li>
                            <li>•</li>
                        </ul>
                    </div>
                </div>
                <div class="fl cat_banner">
                    <a href="http://sc.chinaz.com"><img src="images/30.jpg" /></a>
                </div>
                <ul class="fl cat_small_banner">
                    <li><a href="http://sc.chinaz.com"><img src="images/21jpg.jpg" width="190" height="160" /></a></li>
                    <li><a href="http://sc.chinaz.com"><img src="images/22.jpg" width="190" height="160" /></a></li>
                    <li><a href="http://sc.chinaz.com"><img src="images/23.jpg" width="190" height="160" /></a></li>
                </ul>
            </div>
            <div class="cat_pannel clearfix">
                <div class="fl cat_detail grid_col_5">
                    <h3 class="cat_title">手机数码</h3>
                    <ul class="cat_label_list clearfix">
                        <li><a href="http://sc.chinaz.com">大屏手机</a></li>
                        <li class="second_label"><a href="http://sc.chinaz.com">笔记本</a></li>
                        <li><a href="http://sc.chinaz.com">双卡双待</a></li>
                        <li class="second_label"><a href="http://sc.chinaz.com">平板电脑</a></li>
                        <li><a href="http://sc.chinaz.com">热卖新机</a></li>
                        <li class="second_label"><a href="http://sc.chinaz.com">台式机</a></li>
                        <li><a href="http://sc.chinaz.com">千元智能</a></li>
                        <li class="second_label"><a href="http://sc.chinaz.com">DIY电脑</a></li>
                        <li><a href="http://sc.chinaz.com">合约购机</a></li>
                        <li class="second_label"><a href="http://sc.chinaz.com">显示器</a></li>
                        <li><a href="http://sc.chinaz.com">云os手机</a></li>
                        <li class="second_label"><a href="http://sc.chinaz.com">打印机</a></li>
                        <li><a href="http://sc.chinaz.com">旗舰手机</a></li>
                        <li class="second_label"><a href="http://sc.chinaz.com">路由器</a></li>
                        <li><a href="http://sc.chinaz.com">拍照手机</a></li>
                        <li class="second_label"><a href="http://sc.chinaz.com">电子词典</a></li>
                        <li><a href="http://sc.chinaz.com">单反</a></li>
                        <li class="second_label"><a href="http://sc.chinaz.com">拍立得</a></li>
                        <li><a href="http://sc.chinaz.com">移动电源</a></li>
                        <li class="second_label"><a href="http://sc.chinaz.com">苹果配件</a></li>
                        <li><a href="http://sc.chinaz.com">U盘</a></li>
                        <li class="second_label"><a href="http://sc.chinaz.com">移动硬盘</a></li>
                        <li><a href="http://sc.chinaz.com">耳机耳麦</a></li>
                        <li class="second_label"><a href="http://sc.chinaz.com">高清盒子</a></li>
                    </ul>
                    <div class="cat_brand">
                        <ul class="cat_slide_brand">
                            <li>
                                <a href="http://sc.chinaz.com"><img src="images/10.jpg" width="90" height="40" /></a>
                                <a href="http://sc.chinaz.com"><img src="images/11.jpg" width="90" height="40" /></a>
                            </li>
                            <li>
                                <a href="http://sc.chinaz.com"><img src="images/12.jpg" width="90" height="40" /></a>
                                <a href="http://sc.chinaz.com"><img src="images/13.jpg" width="90" height="40" /></a>
                            </li>
                            <li>
                                <a href="http://sc.chinaz.com"><img src="images/14.jpg" width="90" height="40" /></a>
                                <a href="http://sc.chinaz.com"><img src="images/15.jpg" width="90" height="40" /></a>
                            </li>
                        </ul>
                        <ul class="cat_slide_nav">
                            <li>•</li>
                            <li>•</li>
                            <li>•</li>
                        </ul>
                    </div>
                </div>
                <div class="fl cat_banner">
                    <a class="banner-grid-b1" href="http://sc.chinaz.com"><img src="images/31.jpg" /></a>
                    <a class="fl banner-grid-b2" href="http://sc.chinaz.com"><img src="images/25.jpg" /></a>
                    <a class="fl banner-grid-b3" href="http://sc.chinaz.com"><img src="images/26.jpg" /></a>
                </div>
                <ul class="fl cat_small_banner">
                    <li><a href="http://sc.chinaz.com"><img src="images/4.jpg" width="190" height="160" /></a></li>
                    <li><a href="http://sc.chinaz.com"><img src="images/5.jpg" width="190" height="160" /></a></li>
                    <li><a href="http://sc.chinaz.com"><img src="images/6.jpg" width="190" height="160" /></a></li>
                </ul>
            </div>
            <div class="cat_pannel clearfix">
                <div class="fl cat_detail grid_col_6">
                    <h3 class="cat_title">天猫母婴</h3>
                    <ul class="cat_label_list clearfix">
                        <li><a href="http://sc.chinaz.com">牛奶粉</a></li>
                        <li class="second_label"><a href="http://sc.chinaz.com">羊奶粉</a></li>
                        <li><a href="http://sc.chinaz.com">婴儿钙</a></li>
                        <li class="second_label"><a href="http://sc.chinaz.com">DHA</a></li>
                        <li><a href="http://sc.chinaz.com">纸尿裤</a></li>
                        <li class="second_label"><a href="http://sc.chinaz.com">奶瓶</a></li>
                        <li><a href="http://sc.chinaz.com">宝宝洗护</a></li>
                        <li class="second_label"><a href="http://sc.chinaz.com">推车</a></li>
                        <li><a href="http://sc.chinaz.com">婴儿床</a></li>
                        <li class="second_label"><a href="http://sc.chinaz.com">睡袋抱被</a></li>
                        <li><a href="http://sc.chinaz.com">裤子</a></li>
                        <li class="second_label"><a href="http://sc.chinaz.com">衬衫</a></li>
                        <li><a href="http://sc.chinaz.com">裙子</a></li>
                        <li class="second_label"><a href="http://sc.chinaz.com">儿童内衣</a></li>
                        <li><a href="http://sc.chinaz.com">童装</a></li>
                        <li class="second_label"><a href="http://sc.chinaz.com">童鞋</a></li>
                        <li><a href="http://sc.chinaz.com">婴幼玩具</a></li>
                        <li class="second_label"><a href="http://sc.chinaz.com">早教</a></li>
                        <li><a href="http://sc.chinaz.com">电动遥控</a></li>
                        <li class="second_label"><a href="http://sc.chinaz.com">毛绒布艺</a></li>
                        <li><a href="http://sc.chinaz.com">孕妇装</a></li>
                        <li class="second_label"><a href="http://sc.chinaz.com">托腹裤</a></li>
                        <li><a href="http://sc.chinaz.com">防辐射</a></li>
                        <li class="second_label"><a href="http://sc.chinaz.com">内衣内裤</a></li>
                    </ul>
                    <div class="cat_brand">
                        <ul class="cat_slide_brand">
                            <li>
                                <a href="http://sc.chinaz.com"><img src="images/16.jpg" width="90" height="40" /></a>
                                <a href="http://sc.chinaz.com"><img src="images/17.jpg" width="90" height="40" /></a>
                            </li>
                            <li>
                                <a href="http://sc.chinaz.com"><img src="images/18.jpg" width="90" height="40" /></a>
                                <a href="http://sc.chinaz.com"><img src="images/19.jpg" width="90" height="40" /></a>
                            </li>
                            <li>
                                <a href="http://sc.chinaz.com"><img src="images/20.jpg" width="90" height="40" /></a>
                                <a href="http://sc.chinaz.com"><img src="images/21.jpg" width="90" height="40" /></a>
                            </li>
                        </ul>
                        <ul class="cat_slide_nav">
                            <li>•</li>
                            <li>•</li>
                            <li>•</li>
                        </ul>
                    </div>
                </div>
                <div class="fl cat_banner">
                    <a href="http://sc.chinaz.com"><img src="images/32.jpg" /></a>
                </div>
                <ul class="fl cat_small_banner">
                    <li><a href="http://sc.chinaz.com"><img src="images/21jpg.jpg" width="190" height="160" /></a></li>
                    <li><a href="http://sc.chinaz.com"><img src="images/22.jpg" width="190" height="160" /></a></li>
                    <li><a href="http://sc.chinaz.com"><img src="images/23.jpg" width="190" height="160" /></a></li>
                </ul>
            </div>
            <div class="cat_pannel clearfix">
                <div class="fl cat_detail grid_col_7">
                    <h3 class="cat_title">食品</h3>
                    <ul class="cat_label_list clearfix">
                        <li><a href="http://sc.chinaz.com">美国馆</a></li>
                        <li class="second_label"><a href="http://sc.chinaz.com">澳洲馆</a></li>
                        <li><a href="http://sc.chinaz.com">台湾馆</a></li>
                        <li class="second_label"><a href="http://sc.chinaz.com">泰国馆</a></li>
                        <li><a href="http://sc.chinaz.com">进口美食</a></li>
                        <li class="second_label"><a href="http://sc.chinaz.com">大枣</a></li>
                        <li><a href="http://sc.chinaz.com">坚果</a></li>
                        <li class="second_label"><a href="http://sc.chinaz.com">牛肉干</a></li>
                        <li><a href="http://sc.chinaz.com">糖果</a></li>
                        <li class="second_label"><a href="http://sc.chinaz.com">巧克力</a></li>
                        <li><a href="http://sc.chinaz.com">饼干</a></li>
                        <li class="second_label"><a href="http://sc.chinaz.com">开心果</a></li>
                        <li><a href="http://sc.chinaz.com">碧根果</a></li>
                        <li class="second_label"><a href="http://sc.chinaz.com">干果</a></li>
                        <li><a href="http://sc.chinaz.com">普洱</a></li>
                        <li class="second_label"><a href="http://sc.chinaz.com">罐头</a></li>
                        <li><a href="http://sc.chinaz.com">茶叶</a></li>
                        <li class="second_label"><a href="http://sc.chinaz.com">铁观音</a></li>
                        <li><a href="http://sc.chinaz.com">水果</a></li>
                        <li class="second_label"><a href="http://sc.chinaz.com">海鲜</a></li>
                        <li><a href="http://sc.chinaz.com">白酒</a></li>
                        <li class="second_label"><a href="http://sc.chinaz.com">葡萄酒</a></li>
                        <li><a href="http://sc.chinaz.com">黄酒</a></li>
                        <li class="second_label"><a href="http://sc.chinaz.com">洋酒</a></li>
                    </ul>
                    <div class="cat_brand">
                        <ul class="cat_slide_brand">
                            <li>
                                <a href="http://sc.chinaz.com"><img src="images/10.jpg" width="90" height="40" /></a>
                                <a href="http://sc.chinaz.com"><img src="images/11.jpg" width="90" height="40" /></a>
                            </li>
                            <li>
                                <a href="http://sc.chinaz.com"><img src="images/12.jpg" width="90" height="40" /></a>
                                <a href="http://sc.chinaz.com"><img src="images/13.jpg" width="90" height="40" /></a>
                            </li>
                            <li>
                                <a href="http://sc.chinaz.com"><img src="images/14.jpg" width="90" height="40" /></a>
                                <a href="http://sc.chinaz.com"><img src="images/15.jpg" width="90" height="40" /></a>
                            </li>
                        </ul>
                        <ul class="cat_slide_nav">
                            <li>•</li>
                            <li>•</li>
                            <li>•</li>
                        </ul>
                    </div>
                </div>
                <div class="fl cat_banner">
                    <a href="http://sc.chinaz.com"><img src="images/33.jpg" /></a>
                </div>
                <ul class="fl cat_small_banner">
                    <li><a href="http://sc.chinaz.com"><img src="images/4.jpg" width="190" height="160" /></a></li>
                    <li><a href="http://sc.chinaz.com"><img src="images/5.jpg" width="190" height="160" /></a></li>
                    <li><a href="http://sc.chinaz.com"><img src="images/6.jpg" width="190" height="160" /></a></li>
                </ul>
            </div>
            <div class="cat_pannel clearfix">
                <div class="fl cat_detail grid_col_8">
                    <h3 class="cat_title">家用电器</h3>
                    <ul class="cat_label_list clearfix">
                        <li><a href="http://sc.chinaz.com">电视机</a></li>
                        <li class="second_label"><a href="http://sc.chinaz.com">电饭煲</a></li>
                        <li><a href="http://sc.chinaz.com">热水器</a></li>
                        <li class="second_label"><a href="http://sc.chinaz.com">电热水壶</a></li>
                        <li><a href="http://sc.chinaz.com">洗衣机</a></li>
                        <li class="second_label"><a href="http://sc.chinaz.com">净水器</a></li>
                        <li><a href="http://sc.chinaz.com">冰箱</a></li>
                        <li class="second_label"><a href="http://sc.chinaz.com">榨汁机</a></li>
                        <li><a href="http://sc.chinaz.com">烟灶套装</a></li>
                        <li class="second_label"><a href="http://sc.chinaz.com">吸尘器</a></li>
                        <li><a href="http://sc.chinaz.com">电热水器</a></li>
                        <li class="second_label"><a href="http://sc.chinaz.com">扫地机</a></li>
                        <li><a href="http://sc.chinaz.com">空调</a></li>
                        <li class="second_label"><a href="http://sc.chinaz.com">空净氧吧</a></li>
                        <li><a href="http://sc.chinaz.com">家庭影院</a></li>
                        <li class="second_label"><a href="http://sc.chinaz.com">暖风取暖</a></li>
                        <li><a href="http://sc.chinaz.com">油烟机</a></li>
                        <li class="second_label"><a href="http://sc.chinaz.com">剃须刀</a></li>
                        <li><a href="http://sc.chinaz.com">燃气灶</a></li>
                        <li class="second_label"><a href="http://sc.chinaz.com">电吹风</a></li>
                        <li><a href="http://sc.chinaz.com">消毒柜</a></li>
                        <li class="second_label"><a href="http://sc.chinaz.com">足浴器</a></li>
                        <li><a href="http://sc.chinaz.com">4K高清</a></li>
                        <li class="second_label"><a href="http://sc.chinaz.com">卷直发器</a></li>
                    </ul>
                    <div class="cat_brand">
                        <ul class="cat_slide_brand">
                            <li>
                                <a href="http://sc.chinaz.com"><img src="images/16.jpg" width="90" height="40" /></a>
                                <a href="http://sc.chinaz.com"><img src="images/17.jpg" width="90" height="40" /></a>
                            </li>
                            <li>
                                <a href="http://sc.chinaz.com"><img src="images/18.jpg" width="90" height="40" /></a>
                                <a href="http://sc.chinaz.com"><img src="images/19.jpg" width="90" height="40" /></a>
                            </li>
                            <li>
                                <a href="http://sc.chinaz.com"><img src="images/20.jpg" width="90" height="40" /></a>
                                <a href="http://sc.chinaz.com"><img src="images/21.jpg" width="90" height="40" /></a>
                            </li>
                        </ul>
                        <ul class="cat_slide_nav">
                            <li>•</li>
                            <li>•</li>
                            <li>•</li>
                        </ul>
                    </div>
                </div>
                <div class="fl cat_banner">
                    <a class="banner-grid-b1" href="http://sc.chinaz.com"><img src="images/34.jpg" /></a>
                    <a class="fl banner-grid-b2" href="http://sc.chinaz.com"><img src="images/25.jpg" /></a>
                    <a class="fl banner-grid-b3" href="http://sc.chinaz.com"><img src="images/26.jpg" /></a>
                </div>
                <ul class="fl cat_small_banner">
                    <li><a href="http://sc.chinaz.com"><img src="images/21jpg.jpg" width="190" height="160" /></a></li>
                    <li><a href="http://sc.chinaz.com"><img src="images/22.jpg" width="190" height="160" /></a></li>
                    <li><a href="http://sc.chinaz.com"><img src="images/23.jpg" width="190" height="160" /></a></li>
                </ul>
            </div>
            <div class="cat_pannel clearfix">
                <div class="fl cat_detail grid_col_9">
                    <h3 class="cat_title">天猫家装</h3>
                    <ul class="cat_label_list clearfix">
                        <li><a href="http://sc.chinaz.com">灯具</a></li>
                        <li class="second_label"><a href="http://sc.chinaz.com">柜类</a></li>
                        <li><a href="http://sc.chinaz.com">卫浴</a></li>
                        <li class="second_label"><a href="http://sc.chinaz.com">沙发</a></li>
                        <li><a href="http://sc.chinaz.com">开关插座</a></li>
                        <li class="second_label"><a href="http://sc.chinaz.com">床类</a></li>
                        <li><a href="http://sc.chinaz.com">壁纸</a></li>
                        <li class="second_label"><a href="http://sc.chinaz.com">桌类</a></li>
                        <li><a href="http://sc.chinaz.com">地板</a></li>
                        <li class="second_label"><a href="http://sc.chinaz.com">坐具</a></li>
                        <li><a href="http://sc.chinaz.com">厨房</a></li>
                        <li class="second_label"><a href="http://sc.chinaz.com">床垫</a></li>
                        <li><a href="http://sc.chinaz.com">涂料</a></li>
                        <li class="second_label"><a href="http://sc.chinaz.com">架类</a></li>
                        <li><a href="http://sc.chinaz.com">门类</a></li>
                        <li class="second_label"><a href="http://sc.chinaz.com">书房</a></li>
                        <li><a href="http://sc.chinaz.com">浴霸</a></li>
                        <li class="second_label"><a href="http://sc.chinaz.com">几类</a></li>
                        <li><a href="http://sc.chinaz.com">安防监控</a></li>
                        <li class="second_label"><a href="http://sc.chinaz.com">案台</a></li>
                        <li><a href="http://sc.chinaz.com">五金工具</a></li>
                        <li class="second_label"><a href="http://sc.chinaz.com">玄关</a></li>
                        <li><a href="http://sc.chinaz.com">装修</a></li>
                        <li class="second_label"><a href="http://sc.chinaz.com">设计</a></li>
                    </ul>
                    <div class="cat_brand">
                        <ul class="cat_slide_brand">
                            <li>
                                <a href="http://sc.chinaz.com"><img src="images/10.jpg" width="90" height="40" /></a>
                                <a href="http://sc.chinaz.com"><img src="images/11.jpg" width="90" height="40" /></a>
                            </li>
                            <li>
                                <a href="http://sc.chinaz.com"><img src="images/12.jpg" width="90" height="40" /></a>
                                <a href="http://sc.chinaz.com"><img src="images/13.jpg" width="90" height="40" /></a>
                            </li>
                            <li>
                                <a href="http://sc.chinaz.com"><img src="images/14.jpg" width="90" height="40" /></a>
                                <a href="http://sc.chinaz.com"><img src="images/15.jpg" width="90" height="40" /></a>
                            </li>
                        </ul>
                        <ul class="cat_slide_nav">
                            <li>•</li>
                            <li>•</li>
                            <li>•</li>
                        </ul>
                    </div>
                </div>
                <div class="fl cat_banner">
                    <a class="banner-grid-b1" href="http://sc.chinaz.com"><img src="images/35.jpg" /></a>
                    <a class="fl banner-grid-b2" href="http://sc.chinaz.com"><img src="images/25.jpg" /></a>
                    <a class="fl banner-grid-b3" href="http://sc.chinaz.com"><img src="images/26.jpg" /></a>
                </div>
                <ul class="fl cat_small_banner">
                    <li><a href="http://sc.chinaz.com"><img src="images/4.jpg" width="190" height="160" /></a></li>
                    <li><a href="http://sc.chinaz.com"><img src="images/5.jpg" width="190" height="160" /></a></li>
                    <li><a href="http://sc.chinaz.com"><img src="images/6.jpg" width="190" height="160" /></a></li>
                </ul>
            </div>
            <div class="cat_pannel clearfix">
                <div class="fl cat_detail grid_col_10">
                    <h3 class="cat_title">珠宝配饰</h3>
                    <ul class="cat_label_list clearfix">
                        <li><a href="http://sc.chinaz.com">珠宝</a></li>
                        <li class="second_label"><a href="http://sc.chinaz.com">黄金</a></li>
                        <li><a href="http://sc.chinaz.com">钻石</a></li>
                        <li class="second_label"><a href="http://sc.chinaz.com">珍珠</a></li>
                        <li><a href="http://sc.chinaz.com">翡翠</a></li>
                        <li class="second_label"><a href="http://sc.chinaz.com">彩宝</a></li>
                        <li><a href="http://sc.chinaz.com">玉石</a></li>
                        <li class="second_label"><a href="http://sc.chinaz.com">铂金</a></li>
                        <li><a href="http://sc.chinaz.com">饰品</a></li>
                        <li class="second_label"><a href="http://sc.chinaz.com">手链</a></li>
                        <li><a href="http://sc.chinaz.com">项链</a></li>
                        <li class="second_label"><a href="http://sc.chinaz.com">手镯</a></li>
                        <li><a href="http://sc.chinaz.com">发饰</a></li>
                        <li class="second_label"><a href="http://sc.chinaz.com">项坠</a></li>
                        <li><a href="http://sc.chinaz.com">戒指</a></li>
                        <li class="second_label"><a href="http://sc.chinaz.com">耳饰</a></li>
                        <li><a href="http://sc.chinaz.com">男表</a></li>
                        <li class="second_label"><a href="http://sc.chinaz.com">银条</a></li>
                        <li><a href="http://sc.chinaz.com">女表</a></li>
                        <li class="second_label"><a href="http://sc.chinaz.com">男士配饰</a></li>
                        <li><a href="http://sc.chinaz.com">太阳镜</a></li>
                        <li class="second_label"><a href="http://sc.chinaz.com">ZIPPO</a></li>
                        <li><a href="http://sc.chinaz.com">眼镜</a></li>
                        <li class="second_label"><a href="http://sc.chinaz.com">瑞士军刀</a></li>
                    </ul>
                    <div class="cat_brand">
                        <ul class="cat_slide_brand">
                            <li>
                                <a href="http://sc.chinaz.com"><img src="images/16.jpg" width="90" height="40" /></a>
                                <a href="http://sc.chinaz.com"><img src="images/17.jpg" width="90" height="40" /></a>
                            </li>
                            <li>
                                <a href="http://sc.chinaz.com"><img src="images/18.jpg" width="90" height="40" /></a>
                                <a href="http://sc.chinaz.com"><img src="images/19.jpg" width="90" height="40" /></a>
                            </li>
                            <li>
                                <a href="http://sc.chinaz.com"><img src="images/20.jpg" width="90" height="40" /></a>
                                <a href="http://sc.chinaz.com"><img src="images/21.jpg" width="90" height="40" /></a>
                            </li>
                        </ul>
                        <ul class="cat_slide_nav">
                            <li>•</li>
                            <li>•</li>
                            <li>•</li>
                        </ul>
                    </div>
                </div>
                <div class="fl cat_banner">
                    <a class="banner-grid-b1" href="http://sc.chinaz.com"><img src="images/36.jpg" /></a>
                    <a class="fl banner-grid-b2" href="http://sc.chinaz.com"><img src="images/25.jpg" /></a>
                    <a class="fl banner-grid-b3" href="http://sc.chinaz.com"><img src="images/26.jpg" /></a>
                </div>
                <ul class="fl cat_small_banner">
                    <li><a href="http://sc.chinaz.com"><img src="images/21jpg.jpg" width="190" height="160" /></a></li>
                    <li><a href="http://sc.chinaz.com"><img src="images/22.jpg" width="190" height="160" /></a></li>
                    <li><a href="http://sc.chinaz.com"><img src="images/23.jpg" width="190" height="160" /></a></li>
                </ul>
            </div>
            <div class="cat_pannel clearfix">
                <div class="fl cat_detail grid_col_11">
                    <h3 class="cat_title">汽车/用品</h3>
                    <ul class="cat_label_list clearfix">
                        <li><a href="http://sc.chinaz.com">自主品牌</a></li>
                        <li class="second_label"><a href="http://sc.chinaz.com">美系品牌</a></li>
                        <li><a href="http://sc.chinaz.com">欧系品牌</a></li>
                        <li class="second_label"><a href="http://sc.chinaz.com">日系品牌</a></li>
                        <li><a href="http://sc.chinaz.com">座垫</a></li>
                        <li class="second_label"><a href="http://sc.chinaz.com">空气净化</a></li>
                        <li><a href="http://sc.chinaz.com">脚垫</a></li>
                        <li class="second_label"><a href="http://sc.chinaz.com">车衣</a></li>
                        <li><a href="http://sc.chinaz.com">座套</a></li>
                        <li class="second_label"><a href="http://sc.chinaz.com">装饰条</a></li>
                        <li><a href="http://sc.chinaz.com">安全座椅</a></li>
                        <li class="second_label"><a href="http://sc.chinaz.com">雨刮器</a></li>
                        <li><a href="http://sc.chinaz.com">后备箱垫</a></li>
                        <li class="second_label"><a href="http://sc.chinaz.com">轮胎</a></li>
                        <li><a href="http://sc.chinaz.com">方向盘套</a></li>
                        <li class="second_label"><a href="http://sc.chinaz.com">车灯</a></li>
                        <li><a href="http://sc.chinaz.com">DVD导航</a></li>
                        <li class="second_label"><a href="http://sc.chinaz.com">洗车机</a></li>
                        <li><a href="http://sc.chinaz.com">GPS</a></li>
                        <li class="second_label"><a href="http://sc.chinaz.com">机油</a></li>
                        <li><a href="http://sc.chinaz.com">记录仪</a></li>
                        <li class="second_label"><a href="http://sc.chinaz.com">车蜡</a></li>
                        <li><a href="http://sc.chinaz.com">充气泵</a></li>
                        <li class="second_label"><a href="http://sc.chinaz.com">摩托装备</a></li>
                    </ul>
                    <div class="cat_brand">
                        <ul class="cat_slide_brand">
                            <li>
                                <a href="http://sc.chinaz.com"><img src="images/10.jpg" width="90" height="40" /></a>
                                <a href="http://sc.chinaz.com"><img src="images/11.jpg" width="90" height="40" /></a>
                            </li>
                            <li>
                                <a href="http://sc.chinaz.com"><img src="images/12.jpg" width="90" height="40" /></a>
                                <a href="http://sc.chinaz.com"><img src="images/13.jpg" width="90" height="40" /></a>
                            </li>
                            <li>
                                <a href="http://sc.chinaz.com"><img src="images/14.jpg" width="90" height="40" /></a>
                                <a href="http://sc.chinaz.com"><img src="images/15.jpg" width="90" height="40" /></a>
                            </li>
                        </ul>
                        <ul class="cat_slide_nav">
                            <li>•</li>
                            <li>•</li>
                            <li>•</li>
                        </ul>
                    </div>
                </div>
                <div class="fl cat_banner">
                    <a class="banner-grid-b1" href="http://sc.chinaz.com"><img src="images/37.jpg" /></a>
                    <a class="fl banner-grid-b2" href="http://sc.chinaz.com"><img src="images/25.jpg" /></a>
                    <a class="fl banner-grid-b3" href="http://sc.chinaz.com"><img src="images/26.jpg" /></a>
                </div>
                <ul class="fl cat_small_banner">
                    <li><a href="http://sc.chinaz.com"><img src="images/4.jpg" width="190" height="160" /></a></li>
                    <li><a href="http://sc.chinaz.com"><img src="images/5.jpg" width="190" height="160" /></a></li>
                    <li><a href="http://sc.chinaz.com"><img src="images/6.jpg" width="190" height="160" /></a></li>
                </ul>
            </div>
            <div class="cat_pannel clearfix">
                <div class="fl cat_detail grid_col_12">
                    <h3 class="cat_title">家纺家饰</h3>
                    <ul class="cat_label_list clearfix">
                        <li><a href="http://sc.chinaz.com">床上用品</a></li>
                        <li class="second_label"><a href="http://sc.chinaz.com">四件套</a></li>
                        <li><a href="http://sc.chinaz.com">厚冬被</a></li>
                        <li class="second_label"><a href="http://sc.chinaz.com">羽绒被</a></li>
                        <li><a href="http://sc.chinaz.com">蚕丝被</a></li>
                        <li class="second_label"><a href="http://sc.chinaz.com">枕头</a></li>
                        <li><a href="http://sc.chinaz.com">记忆枕</a></li>
                        <li class="second_label"><a href="http://sc.chinaz.com">床垫</a></li>
                        <li><a href="http://sc.chinaz.com">毛毯</a></li>
                        <li class="second_label"><a href="http://sc.chinaz.com">儿童床品</a></li>
                        <li><a href="http://sc.chinaz.com">婚庆床品</a></li>
                        <li class="second_label"><a href="http://sc.chinaz.com">三件套</a></li>
                        <li><a href="http://sc.chinaz.com">被套</a></li>
                        <li class="second_label"><a href="http://sc.chinaz.com">毛浴巾</a></li>
                        <li><a href="http://sc.chinaz.com">棉拖鞋</a></li>
                        <li class="second_label"><a href="http://sc.chinaz.com">沙发垫</a></li>
                        <li><a href="http://sc.chinaz.com">十字绣</a></li>
                        <li class="second_label"><a href="http://sc.chinaz.com">窗帘</a></li>
                        <li><a href="http://sc.chinaz.com">地毯</a></li>
                        <li class="second_label"><a href="http://sc.chinaz.com">抱枕</a></li>
                        <li><a href="http://sc.chinaz.com">防尘罩</a></li>
                        <li class="second_label"><a href="http://sc.chinaz.com">装饰画</a></li>
                        <li><a href="http://sc.chinaz.com">装饰摆件</a></li>
                        <li class="second_label"><a href="http://sc.chinaz.com">喵喵花园</a></li>
                    </ul>
                    <div class="cat_brand">
                        <ul class="cat_slide_brand">
                            <li>
                                <a href="http://sc.chinaz.com"><img src="images/16.jpg" width="90" height="40" /></a>
                                <a href="http://sc.chinaz.com"><img src="images/17.jpg" width="90" height="40" /></a>
                            </li>
                            <li>
                                <a href="http://sc.chinaz.com"><img src="images/18.jpg" width="90" height="40" /></a>
                                <a href="http://sc.chinaz.com"><img src="images/19.jpg" width="90" height="40" /></a>
                            </li>
                            <li>
                                <a href="http://sc.chinaz.com"><img src="images/20.jpg" width="90" height="40" /></a>
                                <a href="http://sc.chinaz.com"><img src="images/21.jpg" width="90" height="40" /></a>
                            </li>
                        </ul>
                        <ul class="cat_slide_nav">
                            <li>•</li>
                            <li>•</li>
                            <li>•</li>
                        </ul>
                    </div>
                </div>
                <div class="fl cat_banner">
                    <a class="banner-grid-b1" href="http://sc.chinaz.com"><img src="images/38.jpg" /></a>
                    <a class="fl banner-grid-b2" href="http://sc.chinaz.com"><img src="images/25.jpg" /></a>
                    <a class="fl banner-grid-b3" href="http://sc.chinaz.com"><img src="images/26.jpg" /></a>
                </div>
                <ul class="fl cat_small_banner">
                    <li><a href="http://sc.chinaz.com"><img src="images/21jpg.jpg" width="190" height="160" /></a></li>
                    <li><a href="http://sc.chinaz.com"><img src="images/22.jpg" width="190" height="160" /></a></li>
                    <li><a href="http://sc.chinaz.com"><img src="images/23.jpg" width="190" height="160" /></a></li>
                </ul>
            </div>
            <div class="cat_pannel clearfix">
                <div class="fl cat_detail grid_col_13">
                    <h3 class="cat_title">天猫医药</h3>
                    <ul class="cat_label_list clearfix">
                        <li><a href="http://sc.chinaz.com">左旋肉碱</a></li>
                        <li class="second_label"><a href="http://sc.chinaz.com">蜂蜜</a></li>
                        <li><a href="http://sc.chinaz.com">酵素</a></li>
                        <li class="second_label"><a href="http://sc.chinaz.com">枸杞</a></li>
                        <li><a href="http://sc.chinaz.com">维生素E</a></li>
                        <li class="second_label"><a href="http://sc.chinaz.com">阿胶</a></li>
                        <li><a href="http://sc.chinaz.com">维生素C</a></li>
                        <li class="second_label"><a href="http://sc.chinaz.com">燕窝</a></li>
                        <li><a href="http://sc.chinaz.com">葡萄籽</a></li>
                        <li class="second_label"><a href="http://sc.chinaz.com">冬虫夏草</a></li>
                        <li><a href="http://sc.chinaz.com">蛋白质粉</a></li>
                        <li class="second_label"><a href="http://sc.chinaz.com">人参</a></li>
                        <li><a href="http://sc.chinaz.com">胶原蛋白</a></li>
                        <li class="second_label"><a href="http://sc.chinaz.com">石斛枫斗</a></li>
                        <li><a href="http://sc.chinaz.com">鱼油</a></li>
                        <li class="second_label"><a href="http://sc.chinaz.com">养生茶</a></li>
                        <li><a href="http://sc.chinaz.com">螺旋藻</a></li>
                        <li class="second_label"><a href="http://sc.chinaz.com">补益安神</a></li>
                        <li><a href="http://sc.chinaz.com">肠胃用药</a></li>
                        <li class="second_label"><a href="http://sc.chinaz.com">鸿茅药酒</a></li>
                        <li><a href="http://sc.chinaz.com">血压仪</a></li>
                        <li class="second_label"><a href="http://sc.chinaz.com">隐形眼镜</a></li>
                        <li><a href="http://sc.chinaz.com">避孕套</a></li>
                        <li class="second_label"><a href="http://sc.chinaz.com">情趣玩具</a></li>
                    </ul>
                    <div class="cat_brand">
                        <ul class="cat_slide_brand">
                            <li>
                                <a href="http://sc.chinaz.com"><img src="images/10.jpg" width="90" height="40" /></a>
                                <a href="http://sc.chinaz.com"><img src="images/11.jpg" width="90" height="40" /></a>
                            </li>
                            <li>
                                <a href="http://sc.chinaz.com"><img src="images/12.jpg" width="90" height="40" /></a>
                                <a href="http://sc.chinaz.com"><img src="images/13.jpg" width="90" height="40" /></a>
                            </li>
                            <li>
                                <a href="http://sc.chinaz.com"><img src="images/14.jpg" width="90" height="40" /></a>
                                <a href="http://sc.chinaz.com"><img src="images/15.jpg" width="90" height="40" /></a>
                            </li>
                        </ul>
                        <ul class="cat_slide_nav">
                            <li>•</li>
                            <li>•</li>
                            <li>•</li>
                        </ul>
                    </div>
                </div>
                <div class="fl cat_banner">
                    <a class="banner-grid-b1" href="http://sc.chinaz.com"><img src="images/39.jpg" /></a>
                    <a class="fl banner-grid-b2" href="http://sc.chinaz.com"><img src="images/25.jpg" /></a>
                    <a class="fl banner-grid-b3" href="http://sc.chinaz.com"><img src="images/26.jpg" /></a>
                </div>
                <ul class="fl cat_small_banner">
                    <li><a href="http://sc.chinaz.com"><img src="images/4.jpg" width="190" height="160" /></a></li>
                    <li><a href="http://sc.chinaz.com"><img src="images/5.jpg" width="190" height="160" /></a></li>
                    <li><a href="http://sc.chinaz.com"><img src="images/6.jpg" width="190" height="160" /></a></li>
                </ul>
            </div>
            <div class="cat_pannel clearfix">
                <div class="fl cat_detail grid_col_14">
                    <h3 class="cat_title">居家百货</h3>
                    <ul class="cat_label_list clearfix">
                        <li><a href="http://sc.chinaz.com">保温杯</a></li>
                        <li class="second_label"><a href="http://sc.chinaz.com">锅具</a></li>
                        <li><a href="http://sc.chinaz.com">瓷器餐具</a></li>
                        <li class="second_label"><a href="http://sc.chinaz.com">茶具</a></li>
                        <li><a href="http://sc.chinaz.com">保鲜用品</a></li>
                        <li class="second_label"><a href="http://sc.chinaz.com">酒具</a></li>
                        <li><a href="http://sc.chinaz.com">厨房工具</a></li>
                        <li class="second_label"><a href="http://sc.chinaz.com">咖啡器具</a></li>
                        <li><a href="http://sc.chinaz.com">拖把</a></li>
                        <li class="second_label"><a href="http://sc.chinaz.com">收纳</a></li>
                        <li><a href="http://sc.chinaz.com">晾衣架</a></li>
                        <li class="second_label"><a href="http://sc.chinaz.com">足浴桶</a></li>
                        <li><a href="http://sc.chinaz.com">置物架</a></li>
                        <li class="second_label"><a href="http://sc.chinaz.com">垃圾桶</a></li>
                        <li><a href="http://sc.chinaz.com">婚庆用品</a></li>
                        <li class="second_label"><a href="http://sc.chinaz.com">创意礼品</a></li>
                        <li><a href="http://sc.chinaz.com">晴雨伞</a></li>
                        <li class="second_label"><a href="http://sc.chinaz.com">缝纫机</a></li>
                        <li><a href="http://sc.chinaz.com">防护用品</a></li>
                        <li class="second_label"><a href="http://sc.chinaz.com">纸品</a></li>
                        <li><a href="http://sc.chinaz.com">清洁剂</a></li>
                        <li class="second_label"><a href="http://sc.chinaz.com">香薰除臭</a></li>
                        <li><a href="http://sc.chinaz.com">狗狗主粮</a></li>
                        <li class="second_label"><a href="http://sc.chinaz.com">宠物用品</a></li>
                    </ul>
                    <div class="cat_brand">
                        <ul class="cat_slide_brand">
                            <li>
                                <a href="http://sc.chinaz.com"><img src="images/16.jpg" width="90" height="40" /></a>
                                <a href="http://sc.chinaz.com"><img src="images/17.jpg" width="90" height="40" /></a>
                            </li>
                            <li>
                                <a href="http://sc.chinaz.com"><img src="images/18.jpg" width="90" height="40" /></a>
                                <a href="http://sc.chinaz.com"><img src="images/19.jpg" width="90" height="40" /></a>
                            </li>
                            <li>
                                <a href="http://sc.chinaz.com"><img src="images/20.jpg" width="90" height="40" /></a>
                                <a href="http://sc.chinaz.com"><img src="images/21.jpg" width="90" height="40" /></a>
                            </li>
                        </ul>
                        <ul class="cat_slide_nav">
                            <li>•</li>
                            <li>•</li>
                            <li>•</li>
                        </ul>
                    </div>
                </div>
                <div class="fl cat_banner">
                    <a href="http://sc.chinaz.com"><img src="images/40.jpg" /></a>
                </div>
                <ul class="fl cat_small_banner">
                    <li><a href="http://sc.chinaz.com"><img src="images/21jpg.jpg" width="190" height="160" /></a></li>
                    <li><a href="http://sc.chinaz.com"><img src="images/22.jpg" width="190" height="160" /></a></li>
                    <li><a href="http://sc.chinaz.com"><img src="images/23.jpg" width="190" height="160" /></a></li>
                </ul>
            </div>
            <div class="cat_pannel clearfix">
                <div class="fl cat_detail grid_col_15">
                    <h3 class="cat_title">天猫图书</h3>
                    <ul class="cat_label_list clearfix">
                        <li><a href="http://sc.chinaz.com">小说</a></li>
                        <li class="second_label"><a href="http://sc.chinaz.com">生活</a></li>
                        <li><a href="http://sc.chinaz.com">言情</a></li>
                        <li class="second_label"><a href="http://sc.chinaz.com">旅行</a></li>
                        <li><a href="http://sc.chinaz.com">悬疑</a></li>
                        <li class="second_label"><a href="http://sc.chinaz.com">美食</a></li>
                        <li><a href="http://sc.chinaz.com">历史</a></li>
                        <li class="second_label"><a href="http://sc.chinaz.com">人文社科</a></li>
                        <li><a href="http://sc.chinaz.com">科幻</a></li>
                        <li class="second_label"><a href="http://sc.chinaz.com">哲学宗教</a></li>
                        <li><a href="http://sc.chinaz.com">文学</a></li>
                        <li class="second_label"><a href="http://sc.chinaz.com">财经励志</a></li>
                        <li><a href="http://sc.chinaz.com">传记</a></li>
                        <li class="second_label"><a href="http://sc.chinaz.com">经济</a></li>
                        <li><a href="http://sc.chinaz.com">动漫</a></li>
                        <li class="second_label"><a href="http://sc.chinaz.com">管理</a></li>
                        <li><a href="http://sc.chinaz.com">童书</a></li>
                        <li class="second_label"><a href="http://sc.chinaz.com">励志</a></li>
                        <li><a href="http://sc.chinaz.com">育儿</a></li>
                        <li class="second_label"><a href="http://sc.chinaz.com">考试</a></li>
                        <li><a href="http://sc.chinaz.com">绘本</a></li>
                        <li class="second_label"><a href="http://sc.chinaz.com">音像</a></li>
                        <li><a href="http://sc.chinaz.com">孕期</a></li>
                        <li class="second_label"><a href="http://sc.chinaz.com">杂志</a></li>
                    </ul>
                    <div class="cat_brand">
                        <ul class="cat_slide_brand">
                            <li>
                                <a href="http://sc.chinaz.com"><img src="images/10.jpg" width="90" height="40" /></a>
                                <a href="http://sc.chinaz.com"><img src="images/11.jpg" width="90" height="40" /></a>
                            </li>
                            <li>
                                <a href="http://sc.chinaz.com"><img src="images/12.jpg" width="90" height="40" /></a>
                                <a href="http://sc.chinaz.com"><img src="images/13.jpg" width="90" height="40" /></a>
                            </li>
                            <li>
                                <a href="http://sc.chinaz.com"><img src="images/14.jpg" width="90" height="40" /></a>
                                <a href="http://sc.chinaz.com"><img src="images/15.jpg" width="90" height="40" /></a>
                            </li>
                        </ul>
                        <ul class="cat_slide_nav">
                            <li>•</li>
                            <li>•</li>
                            <li>•</li>
                        </ul>
                    </div>
                </div>
                <div class="fl cat_banner">
                    <a class="banner-grid-b1" href="http://sc.chinaz.com"><img src="images/41.jpg" /></a>
                    <a class="fl banner-grid-b2" href="http://sc.chinaz.com"><img src="images/25.jpg" /></a>
                    <a class="fl banner-grid-b3" href="http://sc.chinaz.com"><img src="images/26.jpg" /></a>
                </div>
                <ul class="fl cat_small_banner">
                    <li><a href="http://sc.chinaz.com"><img src="images/4.jpg" width="190" height="160" /></a></li>
                    <li><a href="http://sc.chinaz.com"><img src="images/5.jpg" width="190" height="160" /></a></li>
                    <li><a href="http://sc.chinaz.com"><img src="images/6.jpg" width="190" height="160" /></a></li>
                </ul>
            </div>
        </div>
        <!--右侧内容结束-->
    </div>
</div>
<script type="text/javascript">
$(".cat_banner").hover(function(){
        $(this).find(".prev_pic,.next_pic").fadeTo("show",0.2);
    },function(){
        $(this).find(".prev_pic,.next_pic").hide();
})
$(".prev_pic,.next_pic").hover(function(){
    $(this).fadeTo("show",0.5);
},function(){
    $(this).fadeTo("show",0.2);
})
$(".cat_banner").slide({ 
    titCell:".num ul" , 
    mainCell:".cat_banner_pic" , 
    effect:"left",
    prevCell:".prev_pic",
    nextCell:".next_pic",
    autoPlay:true, 
    interTime:3000, 
    delayTime:500,
    autoPage:true 
});
$(".cat_small_banner li").hover(function(){
    $(this).animate({"left":-5},200);
},function(){
    $(this).animate({"left":0},200);
});
$(".cat_brand").slide({ 
    titCell:".cat_slide_nav li", 
    mainCell:".cat_slide_brand", 
    effect:"left",
    autoPlay:true,
    interTime:3000,
    delayTime:700
});
$("#tmall_nav").slide({ 
    titCell:".cate_nav li",
    mainCell:".tmall_cat_content",
    autoPlay:true,
    interTime:7400,
    delayTime:0 
});
</script>

    
</div>






<div style="margin-top:200x;"></div>
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
