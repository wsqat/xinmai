<?php
if(!isset($_SESSION)){ session_start(); };
if(empty($_SESSION["id"])){
    echo "<script language='javascript' 
    type='text/javascript'>";  
    echo "alert('权限不足，请先登录！');";  
    echo "window.location.href='../index.php'";  
    echo "</script>"; 
}
		include_once "../php/function.php";
		include_once "../php/config.php";
		header("Content-type:text/html;charset=utf-8");
		$name =$_POST["name"];
		$location =$_POST["location"];
		$phone =$_POST["phone"];
		$id = $_SESSION["id"];
		$location1 = $name."||".$location."||".$phone;

        $insql = "update xm_customer set location1 = '".$location1."'  where id = ".$id." ";
        

        // $insql = "insert into xm_product(title,size,description,sprice,num,catid,supid,created) values('$name','$size','$des','$price','$number','$catid','$supid','$created') ";
        //echo $insql;
        $results = mysql_query($insql);
        if($_POST["op"]=="edit"){
            if($results){
            //echo "<br>";
            //echo "success";
            //echo_message("添加收货人信息成功！",10);
                echo "<script language='javascript' 
                type='text/javascript'>";  
                echo "alert('修改收货人信息成功！');";  
                echo "window.location.href='../zone/index.php'";  
                echo "</script>"; 
            }else{
                //echo "fail";
                //echo_message("添加收货人信息失败！",10);
                echo "<script language='javascript' 
                type='text/javascript'>";  
                echo "alert('修改收货人信息失败！');";  
                echo "window.location.href='../zone/index.php'";  
                echo "</script>"; 
            }    
        }else{
            if($results){
            //echo "<br>";
            //echo "success";
            //echo_message("添加收货人信息成功！",10);
                echo "<script language='javascript' 
                type='text/javascript'>";  
                echo "alert('添加收货人信息成功！');";  
                echo "window.location.href='bill.php'";  
                echo "</script>"; 
            }else{
                //echo "fail";
                //echo_message("添加收货人信息失败！",10);
                echo "<script language='javascript' 
                type='text/javascript'>";  
                echo "alert('添加收货人信息失败！');";  
                echo "window.location.href='bill.php'";  
                echo "</script>"; 
            }
        }
        
?>