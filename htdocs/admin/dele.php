<?php
       error_reporting(0);
include_once "../php/function.php";
    $aid = trim($_GET['aid']);
    $type = trim($_GET['type']);
    if(empty($type))
        $type = "cid";//默认news
    if(!empty($aid) && is_numeric($aid) && !empty($type)){

        include_once "conn.php";
        $table = "xm_news";
        if($type == "kid"){
            $table = "xm_know";
        }elseif($type == "uid"){
            $table = "xm_cult";
        }else{
            $table = "xm_news";
        }

        $sql = "delete from ".$table." where id='$aid'";
        mysql_query($sql);
        if(mysql_affected_rows()){
            echo_message("删除成功！",-1);
        }else{
            echo_message("删除失败！",-1);
        }
        mysql_close();
        
    }else{
        echo_message("文章不存在！",-1);
    }
?>
