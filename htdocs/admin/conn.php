<?php
// $host="localhost";
// $db_user="root";//用户名
// $db_pass="";//密码
$host="hdm121115147.my3w.com";
$db_user="hdm121115147";//用户名
$db_pass="XINmaicn2015";//密码
// $db_name="email";//数据库
// $timezone="Asia/Shanghai";

$link=mysql_connect($host,$db_user,$db_pass);

$db = mysql_connect('hdm121115147.my3w.com','hdm121115147','XINmaicn2015') or die('can not connect to database');
// $db = mysql_connect('qdm16028692.my3w.com','qdm16028692','XINmaicn2015') or die('can not connect to database');
//mysql_select_db('qdm16028692_db',$db) or die(mysql_error($db));
mysql_select_db('hdm121115147_db',$db) or die(mysql_error($db));
mysql_query("set names 'utf8'");	
//设置时区
date_default_timezone_set('Asia/Hong_Kong');
//关闭错误提示
error_reporting(0);
//session_start();
if(!isset($_SESSION)){ session_start(); };

header("Content-type:text/html;charset=utf-8");



?>