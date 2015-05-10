<!DOCTYPE html>
<html lang="zh-cn">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>新麦网</title>
    <!-- <link rel="icon" type="image/x-icon" href="images/favicon.ico">
    -->
    <link rel="icon" type="image/x-icon" href="../images/icon/logo2.png">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- <link href="css/bootstrap.min.css" rel="stylesheet">
    -->
    <link href="css/index.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet" type="text/css">
    
</head>
<body style="padding-top:180px;min-height:500px;background:url(images/ban/banner1.png) no-repeat;-webkit-background-size:cover;background-size:cover;z-index:-1;">
<!-- Head Navbar -->
<?php 
include_once "php/header.php";
include_once "php/function.php";
include_once "php/config.php";
?>
<!-- Body Main -->
<div class="container">

  
 <form class="form-horizontal col-sm-4 col-sm-offset-4" role="form" id="forget" action="forget.php">
   <h3>请不要离开我~~~   *(^_^)*    </h3>
   <?php
	//session_start();
	//session_unset();
	session_destroy();
    mysql_close();
	echo_message("正在退出..." ,3);

?>  
</form>
</div>

<!-- Footer -->
<?php
    include_once "php/footer.php";
?>


<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="http://cdn.bootcss.com/jquery/1.11.1/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="http://cdn.bootcss.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="js/reg.js"></script>

</body>
</html>