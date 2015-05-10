<?php
error_reporting(0);
header("Content-type:text/html;charset=utf-8");
include_once "../php/conn.php";
include_once "../php/function.php";



    if(!empty($_POST)){
    //print_r($_POST);
        if(!isset($_SESSION)){  session_start(); }  
        if(isset($_SESSION["id"])&&$_SESSION["login"]){
            //print_r($_POST);
            $name = stripslashes(trim($_POST['name']));
            $telephone = stripslashes(trim($_POST['telephone']));
            $location = stripslashes(trim($_POST['location']));
            $des = stripslashes(trim($_POST['des']));
            $id = $_SESSION["id"];
            
            

            mysql_query("SET NAMES utf8");
            
            $reg_date = date('Y-m-d H:i:s',time());
            //
            $insql = "update xm_supplier set title = '".$name."' , location = '".$location."',
                                        telephone = '".$telephone."' , 
                                        details = '".$des."' where id = ".$id."   ";

                
            //$sql="update ".$usertable." set  password = '".$password1."'  where id = '".$uid."' ";

            //echo $insql;
            // //mysql_query($insql);
            $result = mysql_query($insql);
            if($result){
                //echo "写入成功";
                echo_message("写入成功" , 3); 
            }else{
                //echo "失败";
                echo_message("写入失败" , 3); 
            } 




        }else{
            //echo "id fail";
            echo_message("写入失败" , 3); 
            //header("location:../blog/index.php");
        }
    
    }else {
        //出错
        echo_message("内容不能为空！" , 3); 
    }    

?>