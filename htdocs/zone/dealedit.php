<?php
error_reporting(0);
header("Content-type:text/html;charset=utf-8");
include_once "../php/conn.php";
include_once "../php/function.php";

    if(!empty($_POST)){
    //print_r($_POST);
        if(!isset($_SESSION)){  session_start(); }  
        if(isset($_SESSION["username"])&&$_SESSION["login"]){
            //print_r($_POST);
            $name = stripslashes(trim($_POST['name']));
            $price = stripslashes(trim($_POST['price']));
            $size = stripslashes(trim($_POST['size']));
            $catid = stripslashes(trim($_POST['type']));
            $number = stripslashes(trim($_POST['number']));
            $des = stripslashes(trim($_POST['details']));

            
            //$authorid = $_SESSION["id"];
            //$authordef = $_SESSION["user_role"];

            
            //$_SESSION["email"]=$_GET["email"];//邮箱

            mysql_query("SET NAMES utf8");
            
            //$reg_date = date('Y-m-d H:i:s',time());
            //"'.$imagename.'"
            $upsql = "update xm_product set title='".$name."' ,
                                        description = '".$des."',
                                        sprice='".$price."',
                                        size='".$size."',
                                        catid='".$catid."',
                                        num = '".$number."'where
            id=".trim($_POST["id"])." ";
            // $insql = "insert into xm_blog(name,work,nation,talent,birthplace,birthday,height,concern,description,authorid,authordef,created) values('$name','$work','$nation','$talent','$birthplace','$birthday','$height','$concern','$des','$authorid','$authordef','$created') ";

            //echo $upsql;

            //mysql_query($upsql);
            $result = mysql_query($upsql);
            if($result){
                //echo "写入成功";

                mysql_close();
                //echo "success";
                echo_message("商品更新成功！",3);
            }else{
                //echo "失败";
                mysql_close();
                //echo "fail";
                echo_message("商品更新失败！",3);
            } 


            


        }else{
            echo_message("写入失败" , 3); 
            //header("location:../blog/index.php");
        }
    
    }else {
        //出错
        echo_message("内容不能为空！" , 3); 
    }    

?>