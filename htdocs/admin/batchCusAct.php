<?php
// 批量发布
//var_dump($_POST['chk']);
include_once "../php/function.php";
include_once "conn.php";
//print_r($_POST['chk']);
$chk = $_POST['chk'];
if($chk!=""){ 
    $del_num=count($chk); 
    for($i=0;$i<$del_num;$i++){ 
		
		$sql="update xm_customer set status =1 where id = '$chk[$i]' ";
		mysql_query($sql);
    }  
    if(mysql_affected_rows()){
        echo("<script type='text/javascript'>alert('激活成功！');history.back();</script>"); 
    }else{
        //echo_message("发布失败！",1);
        echo("<script type='text/javascript'>alert('激活失败！');history.back();</script>"); 
    }
    mysql_close();
	
}else{ 
    echo("<script type='text/javascript'>alert('请先选择项目！');history.back();</script>"); 
}
?>