<!DOCTYPE html>
<html lang="zh-cn">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="baidu-site-verification" content="3pTXaLx1Pq" />
    <title>新麦网</title>
    <!-- <link rel="icon" type="image/x-icon" href="images/favicon.ico">
    -->
    <link rel="icon" type="image/x-icon" href="images/icon/logo2.png">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- <link href="css/bootstrap.min.css" rel="stylesheet">
    -->
    <link href="css/index.css" rel="stylesheet">
    <!-- 产品分类 -->
    <script type="text/javascript" src="js/jquery1.42.min.js"></script>

    <link href="css/style.css" rel="stylesheet" type="text/css">
</head>
<body>
<!-- Head Navbar -->
<?php 
    include_once "php/header.php";
?>

<!-- Banner-->
<div class="flexslider">
    <ul class="slides">
        <li style="background:url(images/ban/banner1.png) 50% 0 no-repeat;">
            <div class="row-header" style="text-align:center">
                <ul>
                    <li class="col-md-1 row-header-1" style="margin-right:10px;"></li>
                    <li class="col-md-1 row-header-2">
                        <a href="shop/index.php">新麦首页</a>
                        <ul>
                            <li>
                                <a class="row-header2-list1" href="shop/index.php">衣</a>
                                <a class="row-header2-list2" href="shop/index.php?cid=2">食</a>
                                <a class="row-header2-list3" href="shop/index.php?cid=3">住</a>
                                <a class="row-header2-list4" href="shop/index.php?cid=4">行</a>
                                <a class="row-header2-list5" href="shop/index.php?cid=5">农副产品</a>
                                <a class="row-header2-list6" href="shop/index.php?cid=6">建筑材料</a>
                                <a class="row-header2-list7" href="shop/index.php?cid=7">装饰材料</a>
                                <a class="row-header2-list8" href="shop/index.php?cid=8">农资</a>
                                <div class="row-header2-list1" style="margin-top:15px;">
                                    <table>
                                        <tbody>
                                            <tr>
                                                <td>服饰</td>
                                                <td>鞋帽</td>
                                                <td>箱包</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="row-header2-list2" style="margin-top:65px;">
                                    <table>
                                        <tbody>
                                            <tr>
                                                <td>水果</td>
                                                <td>肉禽</td>
                                                <td>特产</td>
                                                <td>冲饮</td>
                                                <td>自助餐</td>
                                                <td>农家乐</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="row-header2-list3" style="margin-top:120px;">
                                    <table>
                                        <tbody>
                                            <tr>
                                                <td>农家小店</td>
                                                <td>旅店</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="row-header2-list4" style="margin-top:170px;">
                                    <table>
                                        <tbody>
                                            <tr>
                                                <td>车行</td>
                                                <td>修车</td>
                                                <td>洗车</td>
                                                <td>打蜡</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="row-header2-list5" style="margin-top:220px;">
                                    <table>
                                        <tbody>
                                            <tr>
                                                <td>养殖</td>
                                                <td>种植</td>
                                                <td>林业</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="row-header2-list6" style="margin-top:270px;">
                                    <table>
                                        <tbody>
                                            <tr>
                                                <td>砖石</td>
                                                <td>钢材</td>
                                                <td>玻璃</td>
                                                <td>机械</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="row-header2-list7" style="margin-top:320px;">
                                    <table>
                                        <tbody>
                                            <tr>
                                                <td>灯具</td>
                                                <td>家具</td>
                                                <td>洁具</td>
                                                <td>门窗</td>
                                                <td>地板</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="row-header2-list8" style="margin-top:370px;">
                                    <table>
                                        <tbody>
                                            <tr>
                                                <td>农药</td>
                                                <td>种子</td>
                                                <td>化肥</td>
                                                <td>农具</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <li class="col-md-1 row-header-3">
                        <a href="shop/suppliers.php">企业商家</a>
                        <ul>
                            <li>
                                <a class="row-header3-list1" href="shop/suppliers.php">衣</a>
                                <a class="row-header3-list2" href="shop/suppliers.php?cid=2">食</a>
                                <a class="row-header3-list3" href="shop/suppliers.php?cid=3">住</a>
                                <a class="row-header3-list4" href="shop/suppliers.php?cid=4">行</a>
                                <a class="row-header3-list5" href="shop/suppliers.php?cid=5">农副产品</a>
                                <a class="row-header3-list6" href="shop/suppliers.php?cid=6">建筑材料</a>
                                <a class="row-header3-list7" href="shop/suppliers.php?cid=7">装饰材料</a>
                                <a class="row-header3-list8" href="shop/suppliers.php?cid=8">农资</a>
                                <div class="row-header3-list1" style="margin-top:15px;">
                                    <table>
                                        <tbody>
                                            <tr>
                                                <td>服饰</td>
                                                <td>鞋帽</td>
                                                <td>箱包</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="row-header3-list2" style="margin-top:65px;">
                                    <table>
                                        <tbody>
                                            <tr>
                                                <td>水果</td>
                                                <td>肉禽</td>
                                                <td>特产</td>
                                                <td>冲饮</td>
                                                <td>自助餐</td>
                                                <td>农家乐</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="row-header3-list3" style="margin-top:120px;">
                                    <table>
                                        <tbody>
                                            <tr>
                                                <td>农家小店</td>
                                                <td>旅店</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="row-header3-list4" style="margin-top:170px;">
                                    <table>
                                        <tbody>
                                            <tr>
                                                <td>车行</td>
                                                <td>修车</td>
                                                <td>洗车</td>
                                                <td>打蜡</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="row-header3-list5" style="margin-top:220px;">
                                    <table>
                                        <tbody>
                                            <tr>
                                                <td>养殖</td>
                                                <td>种植</td>
                                                <td>林业</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="row-header3-list6" style="margin-top:270px;">
                                    <table>
                                        <tbody>
                                            <tr>
                                                <td>砖石</td>
                                                <td>钢材</td>
                                                <td>玻璃</td>
                                                <td>机械</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="row-header3-list7" style="margin-top:320px;">
                                    <table>
                                        <tbody>
                                            <tr>
                                                <td>灯具</td>
                                                <td>家具</td>
                                                <td>洁具</td>
                                                <td>门窗</td>
                                                <td>地板</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="row-header3-list8" style="margin-top:370px;">
                                    <table>
                                        <tbody>
                                            <tr>
                                                <td>农药</td>
                                                <td>种子</td>
                                                <td>化肥</td>
                                                <td>农具</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <li class="col-md-1 row-header-4">
                        <a href="info/index.php">三农资讯</a>
                        <ul>
                            <li>
                                <a class="row-header4-list1" href="info/index.php">生活</a>
                                <a class="row-header4-list2" href="info/index.php">农业</a>
                                <a class="row-header4-list3" href="info/index.php">科教</a>
                                <a class="row-header4-list4" href="info/index.php">文体</a>
                                <a class="row-header4-list5" href="info/index.php">更多</a>
                            </li>
                        </ul>
                    </li>
                    <li class="col-md-1 row-header-5">
                        <a href="know/index.php">三农知识</a>
                        <ul>
                            <li>
                                <a class="row-header5-list1" href="know/plant.php">种植技术</a>
                                <a class="row-header5-list2" href="know/breed.php">养殖技术</a>
                                <a class="row-header5-list3" href="know/food.php">美食专家</a>
                                <a class="row-header5-list4" href="know/life.php">生活小窍门</a>
                            </li>
                        </ul>
                    </li>
                    <li class="col-md-1 row-header-6">
                        <a href="cult/index.php">三农文化</a>
                        <ul>
                            <li>
                                <a class="row-header6-list1" href="cult/life.php">文化生活</a>
                                <a class="row-header6-list2" href="cult/cust.php">节气习俗</a>
                                <a class="row-header6-list3" href="cult/art.php">文学艺术</a>
                            </li>
                        </ul>
                    </li>
                    <li class="col-md-1 row-header-7">
                        <a href="blog/index.php">新麦人物</a>
                    </li>
                </ul>
            </div>
        </li>
        <li style="background:url(images/ban/banner2.png) 50% 0 no-repeat;">
            <div class="row-header" style="text-align:center">
                <ul>
                    <li class="col-md-1 row-header2-1" style="margin-right:10px;"></li>
                    <li class="col-md-1 row-header2-2">
                        <a href="shop/index.php">新麦首页</a>
                        <ul>
                            <li>
                                <a class="row-header2-list1" href="shop/index.php">衣</a>
                                <a class="row-header2-list2" href="shop/index.php?cid=2">食</a>
                                <a class="row-header2-list3" href="shop/index.php?cid=3">住</a>
                                <a class="row-header2-list4" href="shop/index.php?cid=4">行</a>
                                <a class="row-header2-list5" href="shop/index.php?cid=5">农副产品</a>
                                <a class="row-header2-list6" href="shop/index.php?cid=6">建筑材料</a>
                                <a class="row-header2-list7" href="shop/index.php?cid=7">装饰材料</a>
                                <a class="row-header2-list8" href="shop/index.php?cid=8">农资</a>
                                <div class="row-header2-list1" style="margin-top:15px;">
                                    <table>
                                        <tbody>
                                            <tr>
                                                <td>服饰</td>
                                                <td>鞋帽</td>
                                                <td>箱包</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="row-header2-list2" style="margin-top:65px;">
                                    <table>
                                        <tbody>
                                            <tr>
                                                <td>水果</td>
                                                <td>肉禽</td>
                                                <td>特产</td>
                                                <td>冲饮</td>
                                                <td>自助餐</td>
                                                <td>农家乐</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="row-header2-list3" style="margin-top:120px;">
                                    <table>
                                        <tbody>
                                            <tr>
                                                <td>农家小店</td>
                                                <td>旅店</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="row-header2-list4" style="margin-top:170px;">
                                    <table>
                                        <tbody>
                                            <tr>
                                                <td>车行</td>
                                                <td>修车</td>
                                                <td>洗车</td>
                                                <td>打蜡</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="row-header2-list5" style="margin-top:220px;">
                                    <table>
                                        <tbody>
                                            <tr>
                                                <td>养殖</td>
                                                <td>种植</td>
                                                <td>林业</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="row-header2-list6" style="margin-top:270px;">
                                    <table>
                                        <tbody>
                                            <tr>
                                                <td>砖石</td>
                                                <td>钢材</td>
                                                <td>玻璃</td>
                                                <td>机械</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="row-header2-list7" style="margin-top:320px;">
                                    <table>
                                        <tbody>
                                            <tr>
                                                <td>灯具</td>
                                                <td>家具</td>
                                                <td>洁具</td>
                                                <td>门窗</td>
                                                <td>地板</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="row-header2-list8" style="margin-top:370px;">
                                    <table>
                                        <tbody>
                                            <tr>
                                                <td>农药</td>
                                                <td>种子</td>
                                                <td>化肥</td>
                                                <td>农具</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <li class="col-md-1 row-header2-3">
                        <a href="shop/suppliers.php">企业商家</a>
                        <ul>
                            <li>
                                <a class="row-header3-list1" href="shop/suppliers.php">衣</a>
                                <a class="row-header3-list2" href="shop/suppliers.php?cid=2">食</a>
                                <a class="row-header3-list3" href="shop/suppliers.php?cid=3">住</a>
                                <a class="row-header3-list4" href="shop/suppliers.php?cid=4">行</a>
                                <a class="row-header3-list5" href="shop/suppliers.php?cid=5">农副产品</a>
                                <a class="row-header3-list6" href="shop/suppliers.php?cid=6">建筑材料</a>
                                <a class="row-header3-list7" href="shop/suppliers.php?cid=7">装饰材料</a>
                                <a class="row-header3-list8" href="shop/suppliers.php?cid=8">农资</a>
                                <div class="row-header3-list1" style="margin-top:15px;">
                                    <table>
                                        <tbody>
                                            <tr>
                                                <td>服饰</td>
                                                <td>鞋帽</td>
                                                <td>箱包</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="row-header3-list2" style="margin-top:65px;">
                                    <table>
                                        <tbody>
                                            <tr>
                                                <td>水果</td>
                                                <td>肉禽</td>
                                                <td>特产</td>
                                                <td>冲饮</td>
                                                <td>自助餐</td>
                                                <td>农家乐</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="row-header3-list3" style="margin-top:120px;">
                                    <table>
                                        <tbody>
                                            <tr>
                                                <td>农家小店</td>
                                                <td>旅店</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="row-header3-list4" style="margin-top:170px;">
                                    <table>
                                        <tbody>
                                            <tr>
                                                <td>车行</td>
                                                <td>修车</td>
                                                <td>洗车</td>
                                                <td>打蜡</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="row-header3-list5" style="margin-top:220px;">
                                    <table>
                                        <tbody>
                                            <tr>
                                                <td>养殖</td>
                                                <td>种植</td>
                                                <td>林业</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="row-header3-list6" style="margin-top:270px;">
                                    <table>
                                        <tbody>
                                            <tr>
                                                <td>砖石</td>
                                                <td>钢材</td>
                                                <td>玻璃</td>
                                                <td>机械</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="row-header3-list7" style="margin-top:320px;">
                                    <table>
                                        <tbody>
                                            <tr>
                                                <td>灯具</td>
                                                <td>家具</td>
                                                <td>洁具</td>
                                                <td>门窗</td>
                                                <td>地板</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="row-header3-list8" style="margin-top:370px;">
                                    <table>
                                        <tbody>
                                            <tr>
                                                <td>农药</td>
                                                <td>种子</td>
                                                <td>化肥</td>
                                                <td>农具</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <li class="col-md-1 row-header2-4">
                        <a href="info/index.php">三农资讯</a>
                        <ul>
                            <li>
                                <a class="row-header4-list1" href="info/index.php">生活</a>
                                <a class="row-header4-list2" href="info/index.php">农业</a>
                                <a class="row-header4-list3" href="info/index.php">科教</a>
                                <a class="row-header4-list4" href="info/index.php">文体</a>
                                <a class="row-header4-list5" href="info/index.php">更多</a>
                            </li>
                        </ul>
                    </li>
                    <li class="col-md-1 row-header2-5">
                        <a href="know/index.php">三农知识</a>
                        <ul>
                            <li>
                                <a class="row-header5-list1" href="know/plant.php">种植技术</a>
                                <a class="row-header5-list2" href="know/breed.php">养殖技术</a>
                                <a class="row-header5-list3" href="know/food.php">美食专家</a>
                                <a class="row-header5-list4" href="know/life.php">生活小窍门</a>
                            </li>
                        </ul>
                    </li>
                    <li class="col-md-1 row-header2-6">
                        <a href="cult/index.php">三农文化</a>
                        <ul>
                            <li>
                                <a class="row-header6-list1" href="cult/life.php">文化生活</a>
                                <a class="row-header6-list2" href="cult/cust.php">节气习俗</a>
                                <a class="row-header6-list3" href="cult/art.php">文学艺术</a>
                            </li>
                        </ul>
                    </li>
                    <li class="col-md-1 row-header2-7">
                        <a href="blog/index.php">新麦人物</a>
                    </li>
                </ul>
            </div>
        </li>
        <li style="background:url(images/ban/banner1.png) 50% 0 no-repeat;">
            <div class="row-header" style="text-align:center">
                <ul>
                    <li class="col-md-1 row-header-1" style="margin-right:10px;"></li>
                    <li class="col-md-1 row-header3-2">
                        <a href="shop/index.php">新麦首页</a>
                        <ul>
                            <li>
                                <a class="row-header2-list1" href="shop/index.php">衣</a>
                                <a class="row-header2-list2" href="shop/index.php?cid=2">食</a>
                                <a class="row-header2-list3" href="shop/index.php?cid=3">住</a>
                                <a class="row-header2-list4" href="shop/index.php?cid=4">行</a>
                                <a class="row-header2-list5" href="shop/index.php?cid=5">农副产品</a>
                                <a class="row-header2-list6" href="shop/index.php?cid=6">建筑材料</a>
                                <a class="row-header2-list7" href="shop/index.php?cid=7">装饰材料</a>
                                <a class="row-header2-list8" href="shop/index.php?cid=8">农资</a>
                                <div class="row-header2-list1" style="margin-top:15px;">
                                    <table>
                                        <tbody>
                                            <tr>
                                                <td>服饰</td>
                                                <td>鞋帽</td>
                                                <td>箱包</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="row-header2-list2" style="margin-top:65px;">
                                    <table>
                                        <tbody>
                                            <tr>
                                                <td>水果</td>
                                                <td>肉禽</td>
                                                <td>特产</td>
                                                <td>冲饮</td>
                                                <td>自助餐</td>
                                                <td>农家乐</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="row-header2-list3" style="margin-top:120px;">
                                    <table>
                                        <tbody>
                                            <tr>
                                                <td>农家小店</td>
                                                <td>旅店</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="row-header2-list4" style="margin-top:170px;">
                                    <table>
                                        <tbody>
                                            <tr>
                                                <td>车行</td>
                                                <td>修车</td>
                                                <td>洗车</td>
                                                <td>打蜡</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="row-header2-list5" style="margin-top:220px;">
                                    <table>
                                        <tbody>
                                            <tr>
                                                <td>养殖</td>
                                                <td>种植</td>
                                                <td>林业</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="row-header2-list6" style="margin-top:270px;">
                                    <table>
                                        <tbody>
                                            <tr>
                                                <td>砖石</td>
                                                <td>钢材</td>
                                                <td>玻璃</td>
                                                <td>机械</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="row-header2-list7" style="margin-top:320px;">
                                    <table>
                                        <tbody>
                                            <tr>
                                                <td>灯具</td>
                                                <td>家具</td>
                                                <td>洁具</td>
                                                <td>门窗</td>
                                                <td>地板</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="row-header2-list8" style="margin-top:370px;">
                                    <table>
                                        <tbody>
                                            <tr>
                                                <td>农药</td>
                                                <td>种子</td>
                                                <td>化肥</td>
                                                <td>农具</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <li class="col-md-1 row-header3-3">
                        <a href="shop/suppliers.php">企业商家</a>
                        <ul>
                            <li>
                                <a class="row-header3-list1" href="shop/suppliers.php">衣</a>
                                <a class="row-header3-list2" href="shop/suppliers.php?cid=2">食</a>
                                <a class="row-header3-list3" href="shop/suppliers.php?cid=3">住</a>
                                <a class="row-header3-list4" href="shop/suppliers.php?cid=4">行</a>
                                <a class="row-header3-list5" href="shop/suppliers.php?cid=5">农副产品</a>
                                <a class="row-header3-list6" href="shop/suppliers.php?cid=6">建筑材料</a>
                                <a class="row-header3-list7" href="shop/suppliers.php?cid=7">装饰材料</a>
                                <a class="row-header3-list8" href="shop/suppliers.php?cid=8">农资</a>
                                <div class="row-header3-list1" style="margin-top:15px;">
                                    <table>
                                        <tbody>
                                            <tr>
                                                <td>服饰</td>
                                                <td>鞋帽</td>
                                                <td>箱包</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="row-header3-list2" style="margin-top:65px;">
                                    <table>
                                        <tbody>
                                            <tr>
                                                <td>水果</td>
                                                <td>肉禽</td>
                                                <td>特产</td>
                                                <td>冲饮</td>
                                                <td>自助餐</td>
                                                <td>农家乐</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="row-header3-list3" style="margin-top:120px;">
                                    <table>
                                        <tbody>
                                            <tr>
                                                <td>农家小店</td>
                                                <td>旅店</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="row-header3-list4" style="margin-top:170px;">
                                    <table>
                                        <tbody>
                                            <tr>
                                                <td>车行</td>
                                                <td>修车</td>
                                                <td>洗车</td>
                                                <td>打蜡</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="row-header3-list5" style="margin-top:220px;">
                                    <table>
                                        <tbody>
                                            <tr>
                                                <td>养殖</td>
                                                <td>种植</td>
                                                <td>林业</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="row-header3-list6" style="margin-top:270px;">
                                    <table>
                                        <tbody>
                                            <tr>
                                                <td>砖石</td>
                                                <td>钢材</td>
                                                <td>玻璃</td>
                                                <td>机械</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="row-header3-list7" style="margin-top:320px;">
                                    <table>
                                        <tbody>
                                            <tr>
                                                <td>灯具</td>
                                                <td>家具</td>
                                                <td>洁具</td>
                                                <td>门窗</td>
                                                <td>地板</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="row-header3-list8" style="margin-top:370px;">
                                    <table>
                                        <tbody>
                                            <tr>
                                                <td>农药</td>
                                                <td>种子</td>
                                                <td>化肥</td>
                                                <td>农具</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <li class="col-md-1 row-header3-4">
                        <a href="info/index.php">三农资讯</a>
                        <ul>
                            <li>
                                <a class="row-header4-list1" href="info/index.php">生活</a>
                                <a class="row-header4-list2" href="info/index.php">农业</a>
                                <a class="row-header4-list3" href="info/index.php">科教</a>
                                <a class="row-header4-list4" href="info/index.php">文体</a>
                                <a class="row-header4-list5" href="info/index.php">更多</a>
                            </li>
                        </ul>
                    </li>
                    <li class="col-md-1 row-header3-5">
                        <a href="know/index.php">三农知识</a>
                        <ul>
                            <li>
                                <a class="row-header5-list1" href="know/plant.php">种植技术</a>
                                <a class="row-header5-list2" href="know/breed.php">养殖技术</a>
                                <a class="row-header5-list3" href="know/food.php">美食专家</a>
                                <a class="row-header5-list4" href="know/life.php">生活小窍门</a>
                            </li>
                        </ul>
                    </li>
                    <li class="col-md-1 row-header3-6">
                        <a href="cult/index.php">三农文化</a>
                           <ul>
                            <li>
                                <a class="row-header6-list1" href="cult/life.php">文化生活</a>
                                <a class="row-header6-list2" href="cult/cust.php">节气习俗</a>
                                <a class="row-header6-list3" href="cult/art.php">文学艺术</a>
                            </li>
                        </ul>
                    </li>
                    <li class="col-md-1 row-header3-7">
                        <a href="blog/index.php">新麦人物</a>
                    </li>
                </ul>
            </div>
        </li>
        <li style="background:url(images/ban/banner2.png) 50% 0 no-repeat;">
            <div class="row-header" style="text-align:center">
                <ul>
                    <li class="col-md-1 row-header4-1" style="margin-right:10px;"></li>
                    <li class="col-md-1 row-header4-2">
                        <a href="shop/index.php">新麦首页</a>
                        <ul>
                            <li>
                                <a class="row-header2-list1" href="shop/index.php">衣</a>
                                <a class="row-header2-list2" href="shop/index.php?cid=2">食</a>
                                <a class="row-header2-list3" href="shop/index.php?cid=3">住</a>
                                <a class="row-header2-list4" href="shop/index.php?cid=4">行</a>
                                <a class="row-header2-list5" href="shop/index.php?cid=5">农副产品</a>
                                <a class="row-header2-list6" href="shop/index.php?cid=6">建筑材料</a>
                                <a class="row-header2-list7" href="shop/index.php?cid=7">装饰材料</a>
                                <a class="row-header2-list8" href="shop/index.php?cid=8">农资</a>
                                <div class="row-header2-list1" style="margin-top:15px;">
                                    <table>
                                        <tbody>
                                            <tr>
                                                <td>服饰</td>
                                                <td>鞋帽</td>
                                                <td>箱包</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="row-header2-list2" style="margin-top:65px;">
                                    <table>
                                        <tbody>
                                            <tr>
                                                <td>水果</td>
                                                <td>肉禽</td>
                                                <td>特产</td>
                                                <td>冲饮</td>
                                                <td>自助餐</td>
                                                <td>农家乐</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="row-header2-list3" style="margin-top:120px;">
                                    <table>
                                        <tbody>
                                            <tr>
                                                <td>农家小店</td>
                                                <td>旅店</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="row-header2-list4" style="margin-top:170px;">
                                    <table>
                                        <tbody>
                                            <tr>
                                                <td>车行</td>
                                                <td>修车</td>
                                                <td>洗车</td>
                                                <td>打蜡</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="row-header2-list5" style="margin-top:220px;">
                                    <table>
                                        <tbody>
                                            <tr>
                                                <td>养殖</td>
                                                <td>种植</td>
                                                <td>林业</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="row-header2-list6" style="margin-top:270px;">
                                    <table>
                                        <tbody>
                                            <tr>
                                                <td>砖石</td>
                                                <td>钢材</td>
                                                <td>玻璃</td>
                                                <td>机械</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="row-header2-list7" style="margin-top:320px;">
                                    <table>
                                        <tbody>
                                            <tr>
                                                <td>灯具</td>
                                                <td>家具</td>
                                                <td>洁具</td>
                                                <td>门窗</td>
                                                <td>地板</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="row-header2-list8" style="margin-top:370px;">
                                    <table>
                                        <tbody>
                                            <tr>
                                                <td>农药</td>
                                                <td>种子</td>
                                                <td>化肥</td>
                                                <td>农具</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <li class="col-md-1 row-header4-3">
                        <a href="shop/suppliers.php">企业商家</a>
                        <ul>
                            <li>
                                <a class="row-header3-list1" href="shop/suppliers.php">衣</a>
                                <a class="row-header3-list2" href="shop/suppliers.php?cid=2">食</a>
                                <a class="row-header3-list3" href="shop/suppliers.php?cid=3">住</a>
                                <a class="row-header3-list4" href="shop/suppliers.php?cid=4">行</a>
                                <a class="row-header3-list5" href="shop/suppliers.php?cid=5">农副产品</a>
                                <a class="row-header3-list6" href="shop/suppliers.php?cid=6">建筑材料</a>
                                <a class="row-header3-list7" href="shop/suppliers.php?cid=7">装饰材料</a>
                                <a class="row-header3-list8" href="shop/suppliers.php?cid=8">农资</a>
                                <div class="row-header3-list1" style="margin-top:15px;">
                                    <table>
                                        <tbody>
                                            <tr>
                                                <td>服饰</td>
                                                <td>鞋帽</td>
                                                <td>箱包</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="row-header3-list2" style="margin-top:65px;">
                                    <table>
                                        <tbody>
                                            <tr>
                                                <td>水果</td>
                                                <td>肉禽</td>
                                                <td>特产</td>
                                                <td>冲饮</td>
                                                <td>自助餐</td>
                                                <td>农家乐</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="row-header3-list3" style="margin-top:120px;">
                                    <table>
                                        <tbody>
                                            <tr>
                                                <td>农家小店</td>
                                                <td>旅店</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="row-header3-list4" style="margin-top:170px;">
                                    <table>
                                        <tbody>
                                            <tr>
                                                <td>车行</td>
                                                <td>修车</td>
                                                <td>洗车</td>
                                                <td>打蜡</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="row-header3-list5" style="margin-top:220px;">
                                    <table>
                                        <tbody>
                                            <tr>
                                                <td>养殖</td>
                                                <td>种植</td>
                                                <td>林业</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="row-header3-list6" style="margin-top:270px;">
                                    <table>
                                        <tbody>
                                            <tr>
                                                <td>砖石</td>
                                                <td>钢材</td>
                                                <td>玻璃</td>
                                                <td>机械</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="row-header3-list7" style="margin-top:320px;">
                                    <table>
                                        <tbody>
                                            <tr>
                                                <td>灯具</td>
                                                <td>家具</td>
                                                <td>洁具</td>
                                                <td>门窗</td>
                                                <td>地板</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="row-header3-list8" style="margin-top:370px;">
                                    <table>
                                        <tbody>
                                            <tr>
                                                <td>农药</td>
                                                <td>种子</td>
                                                <td>化肥</td>
                                                <td>农具</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <li class="col-md-1 row-header4-4">
                        <a href="info/index.php">三农资讯</a>
                        <ul>
                            <li>
                                <a class="row-header4-list1" href="info/index.php">生活</a>
                                <a class="row-header4-list2" href="info/index.php">农业</a>
                                <a class="row-header4-list3" href="info/index.php">科教</a>
                                <a class="row-header4-list4" href="info/index.php">文体</a>
                                <a class="row-header4-list5" href="info/index.php">更多</a>
                            </li>
                        </ul>
                    </li>
                    <li class="col-md-1 row-header4-5">
                        <a href="know/index.php">三农知识</a>
                        <ul>
                            <li>
                                <a class="row-header5-list1" href="know/plant.php">种植技术</a>
                                <a class="row-header5-list2" href="know/breed.php">养殖技术</a>
                                <a class="row-header5-list3" href="know/food.php">美食专家</a>
                                <a class="row-header5-list4" href="know/life.php">生活小窍门</a>
                            </li>
                        </ul>
                    </li>
                    <li class="col-md-1 row-header4-6">
                        <a href="cult/index.php">三农文化</a>
                         <ul>
                            <li>
                                <a class="row-header6-list1" href="cult/life.php">文化生活</a>
                                <a class="row-header6-list2" href="cult/cust.php">节气习俗</a>
                                <a class="row-header6-list3" href="cult/art.php">文学艺术</a>
                            </li>
                        </ul>
                    </li>
                    <li class="col-md-1 row-header4-7">
                        <a href="blog/index.php">新麦人物</a>
                    </li>
                </ul>
            </div>
        </li>
        <li style="background:url(images/ban/banner1.png) 50% 0 no-repeat;">
            <div class="row-header" style="text-align:center">
                <ul>
                    <li class="col-md-1 row-header5-1" style="margin-right:10px;"></li>
                    <li class="col-md-1 row-header5-2">
                    <a href="shop/index.php">新麦首页</a>
                        <ul>
                            <li>
                                <a class="row-header2-list1" href="shop/index.php">衣</a>
                                <a class="row-header2-list2" href="shop/index.php?cid=2">食</a>
                                <a class="row-header2-list3" href="shop/index.php?cid=3">住</a>
                                <a class="row-header2-list4" href="shop/index.php?cid=4">行</a>
                                <a class="row-header2-list5" href="shop/index.php?cid=5">农副产品</a>
                                <a class="row-header2-list6" href="shop/index.php?cid=6">建筑材料</a>
                                <a class="row-header2-list7" href="shop/index.php?cid=7">装饰材料</a>
                                <a class="row-header2-list8" href="shop/index.php?cid=8">农资</a>
                                <div class="row-header2-list1" style="margin-top:15px;">
                                    <table>
                                        <tbody>
                                            <tr>
                                                <td>服饰</td>
                                                <td>鞋帽</td>
                                                <td>箱包</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="row-header2-list2" style="margin-top:65px;">
                                    <table>
                                        <tbody>
                                            <tr>
                                                <td>水果</td>
                                                <td>肉禽</td>
                                                <td>特产</td>
                                                <td>冲饮</td>
                                                <td>自助餐</td>
                                                <td>农家乐</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="row-header2-list3" style="margin-top:120px;">
                                    <table>
                                        <tbody>
                                            <tr>
                                                <td>农家小店</td>
                                                <td>旅店</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="row-header2-list4" style="margin-top:170px;">
                                    <table>
                                        <tbody>
                                            <tr>
                                                <td>车行</td>
                                                <td>修车</td>
                                                <td>洗车</td>
                                                <td>打蜡</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="row-header2-list5" style="margin-top:220px;">
                                    <table>
                                        <tbody>
                                            <tr>
                                                <td>养殖</td>
                                                <td>种植</td>
                                                <td>林业</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="row-header2-list6" style="margin-top:270px;">
                                    <table>
                                        <tbody>
                                            <tr>
                                                <td>砖石</td>
                                                <td>钢材</td>
                                                <td>玻璃</td>
                                                <td>机械</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="row-header2-list7" style="margin-top:320px;">
                                    <table>
                                        <tbody>
                                            <tr>
                                                <td>灯具</td>
                                                <td>家具</td>
                                                <td>洁具</td>
                                                <td>门窗</td>
                                                <td>地板</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="row-header2-list8" style="margin-top:370px;">
                                    <table>
                                        <tbody>
                                            <tr>
                                                <td>农药</td>
                                                <td>种子</td>
                                                <td>化肥</td>
                                                <td>农具</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <li class="col-md-1 row-header5-3">
                        <a href="shop/suppliers.php">企业商家</a>
                        <ul>
                            <li>
                                <a class="row-header3-list1" href="shop/suppliers.php">衣</a>
                                <a class="row-header3-list2" href="shop/suppliers.php?cid=2">食</a>
                                <a class="row-header3-list3" href="shop/suppliers.php?cid=3">住</a>
                                <a class="row-header3-list4" href="shop/suppliers.php?cid=4">行</a>
                                <a class="row-header3-list5" href="shop/suppliers.php?cid=5">农副产品</a>
                                <a class="row-header3-list6" href="shop/suppliers.php?cid=6">建筑材料</a>
                                <a class="row-header3-list7" href="shop/suppliers.php?cid=7">装饰材料</a>
                                <a class="row-header3-list8" href="shop/suppliers.php?cid=8">农资</a>
                                <div class="row-header3-list1" style="margin-top:15px;">
                                    <table>
                                        <tbody>
                                            <tr>
                                                <td>服饰</td>
                                                <td>鞋帽</td>
                                                <td>箱包</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="row-header3-list2" style="margin-top:65px;">
                                    <table>
                                        <tbody>
                                            <tr>
                                                <td>水果</td>
                                                <td>肉禽</td>
                                                <td>特产</td>
                                                <td>冲饮</td>
                                                <td>自助餐</td>
                                                <td>农家乐</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="row-header3-list3" style="margin-top:120px;">
                                    <table>
                                        <tbody>
                                            <tr>
                                                <td>农家小店</td>
                                                <td>旅店</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="row-header3-list4" style="margin-top:170px;">
                                    <table>
                                        <tbody>
                                            <tr>
                                                <td>车行</td>
                                                <td>修车</td>
                                                <td>洗车</td>
                                                <td>打蜡</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="row-header3-list5" style="margin-top:220px;">
                                    <table>
                                        <tbody>
                                            <tr>
                                                <td>养殖</td>
                                                <td>种植</td>
                                                <td>林业</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="row-header3-list6" style="margin-top:270px;">
                                    <table>
                                        <tbody>
                                            <tr>
                                                <td>砖石</td>
                                                <td>钢材</td>
                                                <td>玻璃</td>
                                                <td>机械</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="row-header3-list7" style="margin-top:320px;">
                                    <table>
                                        <tbody>
                                            <tr>
                                                <td>灯具</td>
                                                <td>家具</td>
                                                <td>洁具</td>
                                                <td>门窗</td>
                                                <td>地板</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="row-header3-list8" style="margin-top:370px;">
                                    <table>
                                        <tbody>
                                            <tr>
                                                <td>农药</td>
                                                <td>种子</td>
                                                <td>化肥</td>
                                                <td>农具</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <li class="col-md-1 row-header5-4">
                        <a href="info/index.php">三农资讯</a>
                        <ul>
                            <li>
                                <a class="row-header4-list1" href="info/index.php">生活</a>
                                <a class="row-header4-list2" href="info/index.php">农业</a>
                                <a class="row-header4-list3" href="info/index.php">科教</a>
                                <a class="row-header4-list4" href="info/index.php">文体</a>
                                <a class="row-header4-list5" href="info/index.php">更多</a>
                            </li>
                        </ul>
                    </li>
                    <li class="col-md-1 row-header5-5">
                        <a href="know/index.php">三农知识</a>
                        <ul>
                            <li>
                                <a class="row-header5-list1" href="know/plant.php">种植技术</a>
                                <a class="row-header5-list2" href="know/breed.php">养殖技术</a>
                                <a class="row-header5-list3" href="know/food.php">美食专家</a>
                                <a class="row-header5-list4" href="know/life.php">生活小窍门</a>
                            </li>
                        </ul>
                    </li>
                    <li class="col-md-1 row-header5-6">
                        <a href="cult/index.php">三农文化</a>
                          <ul>
                            <li>
                                <a class="row-header6-list1" href="cult/life.php">文化生活</a>
                                <a class="row-header6-list2" href="cult/cust.php">节气习俗</a>
                                <a class="row-header6-list3" href="cult/art.php">文学艺术</a>
                            </li>
                        </ul>
                    </li>
                    <li class="col-md-1 row-header5-7">
                        <a href="blog/index.php">新麦人物</a>
                    </li>
                </ul>
            </div>
        </li>
    </ul>
</div>

<script type="text/javascript" src="js/jquery-1.7.2.min.js"></script>
<script type="text/javascript" src="js/jquery.flexslider-min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
    $('.flexslider').flexslider({
        directionNav: true,
        pauseOnAction: false
    });
});
</script>

<!-- Body Main -->
<div class="main bd">
    <!-- main1 -->
    <div class="main1 bd">
        <div class="main1-title bd"> <b><span class="left" id="title">推荐农商</span></b> 
            <span class="right" id="type"><a href="shop/suppliers.php?cid=7">家具</a> <a href="shop/suppliers.php?cid=7">装修</a> <a href="shop/suppliers.php?cid=2">茶叶</a> <a href="shop/suppliers.php?cid=5">养殖</a> <a href="shop/suppliers.php?cid=4">汽车用品</a> <a href="shop/suppliers.php?cid=6">建筑材料</a></span>
        </div>
        <div class="main1-center bd">
            <a href="shop/suppliers.php?cid=2"><img src="images/index/main1-1.png"></a>
            <a href="shop/suppliers.php?cid=2"><img src="images/index/main1-2.png"></a>
            <br>
            <a href="shop/suppliers.php?cid=2"><img src="images/index/main1-3.png"></a>
            <a href="shop/suppliers.php?cid=2"><img src="images/index/main1-4.png"></a>
            <a href="shop/suppliers.php?cid=2"><img src="images/index/main1-5.png"></a>
        </div>
    </div>

    <!-- main2 -->
    <div class="main2 bd">
        <div class="main2-title bd"> <b><span class="left" id="title">农副产品</span></b> 
            <span class="right" id="type"><a href="shop/suppliers.php?cid=2">粮食</a> <a href="shop/suppliers.php?cid=2">蔬菜</a> <a href="shop/suppliers.php?cid=2">茶叶</a> <a href="shop/suppliers.php?cid=2">林业</a> <a href="shop/suppliers.php?cid=2">家禽</a> <a href="shop/suppliers.php?cid=2">水果</a></span>
        </div>
        <div class="main1-center bd">
            <a href="shop/suppliers.php?cid=2"><img src="images/index/main1-1.png"></a>
            <a href="shop/suppliers.php?cid=2"><img src="images/index/main1-2.png"></a>
            <br>
            <a href="shop/suppliers.php?cid=2"><img src="images/index/main1-3.png"></a>
            <a href="shop/suppliers.php?cid=2"><img src="images/index/main1-4.png"></a>
            <a href="shop/suppliers.php?cid=2"><img src="images/index/main1-5.png"></a>
        </div>
    </div>

    <!-- main3 -->
    <div class="main3 bd">
        <!-- 今日公告 -->
        <div class="main3-left">
            <span>今日公告</span>
            <br>
            <div style="margin-top:5px;border-top:5px solid #666">
                <?php
                include_once "php/config.php";
                    $sql = "select * from xm_news order by id desc limit 3";
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
                            $des = $row['description'];
                            //$des = strip_tags($des);//PHP：过滤html标签的函数
                            $str= htmlspecialchars_decode($des); //反编译
                            $str= preg_replace("/<(.*?)>/","",$str); 
                            //$des = substr($des, 0,20);
                            $str = mb_substr($str,0,48,'UTF-8');
                            // echo "<li><a href='know/info.php?id=".$nid."'>".$title."......".$created."...</a></li>";
                            echo "<a href='info/info.php?id=".$nid."'>".$title."</a><br><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$str."<a href='info/info.php?id=".$nid."'>[详情]</a></p>";
                        }
                    }
                //mysql_close();
                ?>
                
                <div class="main3-left-down">
                    <div class="main3-left-down-left">
                        <img src="images/index/main3l-1.png">
                        <br>
                        <br>
                        <img src="images/index/main3l-2.png"></div>
                    <div class="main3-left-down-right">
                        <ul>
                            <li>中国蜘蛛侠</li>
                            <li>中国蜘蛛侠</li>
                            <li>中国蜘蛛侠</li>
                        </ul>
                        <br>
                        <br>
                        <ul>
                            <li>高山猕猴桃</li>
                            <li>高山猕猴桃</li>
                            <li>高山猕猴桃</li>
                        </ul>
                    </div>
                </div>
                <div style="clear:both;">
                    <hr size="1" noshade="noshade" style="border:1px #cccccc dotted;"/>
                    <center>
                        <a href="news/index.php">更多>></a>
                    </center>
                </div>
            </div>
        </div>
        <!-- 聚焦三农 -->
        <div class="main3-center bd">
            <img src="images/index/main3c-1.png">
            <br>
            <center>
                <h4>关注三农 关注根本</h4>
            </center>
            <br>
            <img src="images/index/main3c-2.png">
            &nbsp;&nbsp;&nbsp;&nbsp;
            <img src="images/index/main3c-3.png">
            <br>
        </div>
        <!-- 新麦人物 -->
        <div class="main3-right bd">
            <span>三农知识</span>
            <br>
            <div style="margin-top:5px;border-top:5px solid #666">
            <?php
                include_once "php/config.php";
                    $sql = "select * from xm_know order by id desc ";
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
                            if($i <=2 && !empty($photo)){
                                $i++;
                                echo "<a href='know/info.php?id=".$nid."''><img style='width:140px;height:120px;' src='images/admin/".$photo."' /></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
                            }
                            
                        }
                    }
                //mysql_close();
                ?>
                <!-- <img src="images/index/main3r-1.png">
                &nbsp;&nbsp;&nbsp;&nbsp;
                <img src="images/index/main3r-2.png"> -->
                <br>
                <ul>
                <?php
                include_once "php/config.php";
                    $sql = "select * from xm_know   order by id desc limit 10";
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
                            if(strlen($title)>10){
                                echo "<li><a href='know/info.php?id=".$nid."'>".$title."...</a></li>";    
                            }else{
                                echo "<li><a href='know/info.php?id=".$nid."'>".$title."......".$created."...</a></li>";    
                            }
                            //$des = $row['description'];
                            //$des = substr($des, 0,20);
                            //$des = mb_substr($des,0,5,'UTF-8');
                            //echo "<li><a href='know/info.php?id=".$nid."'>".$title."......".$created."...</a></li>";
                        }
                    }
                //mysql_close();
                ?>
                </ul>
            </div>
            <div style="clear:both;">
                <hr size="1" noshade="noshade" style="border:1px #cccccc dotted;"/>
                <center>
                    <a href="know/index.php">更多>></a>
                </center>
            </div>
        </div>
    </div>
</div>

<!-- Footer -->
<?php 
    include_once "php/online.php";
    include_once "php/footer.php";
?>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<!-- <script src="http://cdn.bootcss.com/jquery/1.11.1/jquery.min.js"></script>
-->
<!-- Include all compiled plugins (below), or include individual files as needed -->
<!-- <script src="http://cdn.bootcss.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
-->
<script src="js/index.js"></script>
</body>
</html>