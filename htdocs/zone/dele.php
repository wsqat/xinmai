<?php
include_once "../php/function.php";
    if(!empty($_GET['id'])&&is_numeric($_GET['id'])){
        $id = $_GET['id'];
        include_once "../php/config.php";
        

        $sql = "delete from xm_product where id='$id'";
        mysql_query($sql);
        if(mysql_affected_rows()){
            echo_message("删除成功！",3);
        }else{
            echo_message("删除失败！",3);
        }
        mysql_close();
        
    }else{
        echo_message("商品不存在！",3);
    }
?>
