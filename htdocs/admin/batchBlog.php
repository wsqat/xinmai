<?php
// 批量发布
//var_dump($_POST['chk']);
include_once "../php/function.php";
include_once "conn.php";
//print_r($_POST['chk']);
$user_table = "xm_blog";
// $supplier =strval(trim($_POST["supplier"]));
// if($supplier=="supplier")
//     $user_table = "xm_supplier";

$op = trim($_POST["pub"]);
$op = intval($op);
$chk = $_POST['chk'];
//print_r($_POST);
if($op==1){
    if($chk!=""){ 
        $del_num=count($chk); 
        for($i=0;$i<$del_num;$i++){ 
            
            $sql="update ".$user_table." set published =1 where id = '$chk[$i]' ";
            mysql_query($sql);
        }  
        if(mysql_affected_rows()){
            //echo("<script type='text/javascript'>alert('激活成功！');;</script>"); 
            
            echo_message("发布成功！",13);
        }else{
            
            echo_message("发布失败或已发布！",-1);
        }
        mysql_close();
        
    }else{ 
            echo_message("请先选择项目！",-1);
    }
}elseif($op==0){
    if($chk!=""){ 
        $del_num=count($chk); 
        for($i=0;$i<$del_num;$i++){ 
            //mysql_query("delete from news where id='$del_id[$i]'"); 
            //$sql = "delete from xm_news where id='$chk[$i]'";
            $sql = "delete from ".$user_table." where id='$chk[$i]'";
            mysql_query($sql);
        }  
        if(mysql_affected_rows()){
                echo_message("删除成功！",13);
        }else{
                echo_message("删除失败！",-1);
        }
        mysql_close();
        
    }else{

            echo_message("请先选择项目！",13);
    }
}


?>