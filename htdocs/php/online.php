<?php
header("Content-type:text/html;charset=utf-8");
$filename = 'online.txt';  //数据文件
$cookiename = 'VGOTCN_OnLineCount';  //cookie名称
$onlinetime = 600;  //在线有效时间，单位：秒 (即600等于10分钟)

$online = file($filename); 
$nowtime = time(); 
$nowonline = array();

/*
	@ 得到仍然有效的数据
*/
foreach($online as $line) {
	$row = explode('|',$line);
	$sesstime = trim($row[1]);
	if(($nowtime - $sesstime) <= $onlinetime) {  //如果仍在有效时间内，则数据继续保存，否则被放弃不再统计
		$nowonline[$row[0]] = $sesstime;  //获取在线列表到数组，会话ID为键名，最后通信时间为键值
	}
}

/*
	@ 创建访问者通信状态
		使用cookie通信
		COOKIE 将在关闭浏览器时失效，但如果不关闭浏览器，此 COOKIE 将一直有效，直到程序设置的在线时间超时
*/
if(isset($_COOKIE[$cookiename])) {  //如果有COOKIE即并非初次访问则不添加人数并更新通信时间
	$uid = $_COOKIE[$cookiename];
} else {  //如果没有COOKIE即是初次访问
	$vid = 0;  //初始化访问者ID
	do {  //给用户一个新ID
		$vid++;
		$uid = 'U'.$vid;
	} while (array_key_exists($uid,$nowonline));
	setcookie($cookiename,$uid);
}
$nowonline[$uid] = $nowtime;  //更新现在的时间状态

/*
	@ 统计现在在线人数
*/
$total_online = count($nowonline);

/*
	@ 写入数据
*/
if($fp = @fopen($filename,'w')) {
	if(flock($fp,LOCK_EX)) {
		rewind($fp);
		foreach($nowonline as $fuid => $ftime) {
			$fline = $fuid.'|'.$ftime."\n";
			@fputs($fp,$fline); 
		}
		flock($fp,LOCK_UN);
		fclose($fp);
	}
}
	//echo 'document.write("'.$total_online.'");'; 
	echo "当前在线人数：".$total_online;
?>