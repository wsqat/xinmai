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




        $getsql = "select * from xm_cart where state=0 and custid = '".$_SESSION["id"]."' ";
        $result=mysql_query($getsql);
        if($result&&mysql_num_rows($result)>0){
            while ($row = mysql_fetch_array($result)) {
                    $cartid = $row["id"];
                    $supid = $row["supid"];
                    $num = $row["num"];
                    $sprice = $row["sprice"];
                    $tprice = $num*$sprice;
                    //$tnum =$_POST["nums"];
                    $location =$_POST["location1"];
                    //$tprice =$_POST["prices"];
                    $id = $_SESSION["id"];
                    $created = date("Y-m-d H:m:s",time());
                    //将所选购商品加入到购物车中
                    $insql = "insert into  xm_order(tnum,tprice,location,custid,supid,created) 
                    values('$num','$tprice','$location','$id','$supid','$created')";

                    // $insql = "insert into xm_product(title,size,description,sprice,num,catid,supid,created) values('$name','$size','$des','$price','$number','$catid','$supid','$created') ";
                    //echo $insql;
                    $results = mysql_query($insql);
                    $last_id=mysql_insert_id();
                    //echo $last_id;
                    if($results){
                        //echo "<br>";
                        //echo "success";
                        $upsql = "update xm_cart set state=1 ,ordid='$last_id'  where id = '".$cartid."' ";
                        //echo $upsql;
                        $resultss= mysql_query($upsql);
                        if($resultss){
                            //echo "success2";
                        }else{  
                            //echo "fail2";
                        }
                        //echo_message("添加收货人信息成功！",10);
                        // echo "<script language='javascript' 
                        // type='text/javascript'>";  
                        // echo "alert('添加收货人信息成功！');";  
                        // echo "window.location.href='bill.php'";  
                        // echo "</script>"; 
                    }else{
                        //echo "fail";
                        //echo_message("添加收货人信息失败！",10);
                        // echo "<script language='javascript' 
                        // type='text/javascript'>";  
                        // echo "alert('添加收货人信息失败！');";  
                        // echo "window.location.href='bill.php'";  
                        // echo "</script>"; 
                    }
            }
            echo "<script language='javascript' type='text/javascript'>";  
            echo "alert('支付成功！');";  
            echo "window.location.href='mybill.php'";  
            echo "</script>"; 
        }
        
?>