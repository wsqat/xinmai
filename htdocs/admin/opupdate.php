<?php
//print_r($_POST);
include_once "conn.php";
include_once "../php/function.php";
header("Content-type:text/html;charset=utf-8");
//$state_id = _get('stateid');
$state_id = trim($_GET['stateid']);
$aid = trim($_POST['article_id']);
$table = trim($_POST['table']);
$title = trim($_POST['title']);
$editor = trim($_POST['editor1']);
//echo "string0";

if(!empty($aid) && !empty($title) && !empty($editor) && !empty($table)){
		//echo "string3";
		//过滤敏感词
	 	//filter_arr($_POST);
		// 提交的编辑器内容使用
		// addslashes()来进行转义后再保存，
		// 展示时使用
		// stripslashes()先去除转义再来展示。
		$ptime = date('Y-m-d H:i:s');
		//$article_author_id=$_SESSION["user_id"];
		//$user_sch_id=$_SESSION["user_sch_id"];
	

		$sql="update ".$table." set title = '".$title."' , description = '".$editor."' , 
		created = '".$ptime."' where id = '".$aid."' ";

        mysql_query($sql);
        //echo $sql;
		//mysql_query($query , $db) or die(mysql_error($db));
		
		if(mysql_affected_rows()){
			//echo "success";
			echo_message("信息更新成功！",8);
		}else{
			//echo "failed";
			echo_message("信息更新失败！",8);
		}

		mysql_close();
}elseif(!empty($state_id) && is_numeric($state_id)){
	//echo "string1";

	$sql="update xm_news set published =1 where id = '".$state_id."' ";

    mysql_query($sql);
	//mysql_query($query , $db) or die(mysql_error($db));
	
	if(mysql_affected_rows()){
		//echo "success";
		echo_message("发布成功！",8);
	}else{
		//echo "failed";
		echo_message("发布失败！",8);
	}

	mysql_close();


}

?>