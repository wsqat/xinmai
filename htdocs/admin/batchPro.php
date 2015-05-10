<?php
// 批量发布
//var_dump($_POST['chk']);
include_once "../php/function.php";
include_once "conn.php";
//print_r($_POST['chk']);
$user_table = "xm_product";

$chk = $_POST['chk'];

if($chk!=""){ 
    $del_num=count($chk); 
    for($i=0;$i<$del_num;$i++){ 
        //mysql_query("delete from news where id='$del_id[$i]'"); 
        //$sql = "delete from xm_news where id='$chk[$i]'";
        $sql = "delete from ".$user_table." where id='$chk[$i]'";
        mysql_query($sql);
    }  
    if(mysql_affected_rows()){
            echo_message("删除成功！",14);
    }else{
            echo_message("删除失败！",-1);
    }
    mysql_close();
    
}else{

        echo_message("请先选择项目！",14);
}



?>