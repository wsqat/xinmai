<?php
include_once "conn.php";
include_once "../php/function.php";
error_reporting(0);
//echo $_POST["class_id"];
if(!isset($_SESSION)){ session_start(); };

// print_r($_POST);
// echo $_SESSION["user_sch_id"];
// echo $_SESSION["user_id"];
if(!empty($_POST)){
	//print_r($_POST);
	if($_POST['title']==""){
		//header("location:../webadmin/content.php");}	
		echo_message("标题不得为空！",8);

		//echo "kong";
	}else{
		//过滤敏感词
	 	//filter_arr($_POST);
		// 提交的编辑器内容使用
		// addslashes()来进行转义后再保存，
		// 展示时使用
		// stripslashes()先去除转义再来展示。
	  	$title = addslashes(trim($_POST['title']));
		$editor1 = addslashes(trim($_POST['editor1']));
		$ptime = date('Y-m-d H:i:s');
		$adminid=$_SESSION["user_id"];
		//$user_sch_id=$_SESSION["user_sch_id"];
		$class_id = $_POST["class_id"];
		$art_type = $_POST["type"];//文章类型,资讯,知识,文化
		if($art_type=="news")
		    $art_table = "xm_news";
		elseif($art_type=="know")
		    $art_table = "xm_know";
		elseif($art_type=="cult")
		    $art_table = "xm_cult";


		if(!empty($class_id)){
			$query = 'insert into '.$art_table.'(title,description,published,typeid,admid,created) values ("'.$title.'","'.$editor1.'",0,"'.trim($_POST["class_id"]).'","'.$adminid.'","'.$ptime.'")';
			echo $query;
		}else{
			echo_message("信息发布失败！",8);
		}
		//echo "sssss";
		mysql_query($query);

		if(mysql_affected_rows()){
			echo "success";
			mysql_close();
			//echo_message("信息发布成功！",8);
		}else{
			echo "failed";
			//echo_message("信息发布失败！",8);
		}
	}
	 	
}else{
	echo_message("内容不得为空！",8);
}
?>


