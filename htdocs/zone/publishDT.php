<?php
error_reporting(0);
header("Content-type:text/html;charset=utf-8");
include_once "../php/conn.php";
include_once "../php/function.php";

//设置上传目录
$path = "../images/zone/product/";

//print_r($_POST);
if (!empty($_FILES)) {

    
    //得到上传的临时文件流
    $tempFile = $_FILES['uploadfile']['tmp_name'];
    //echo $tempFile;
    //允许的文件后缀
    $fileTypes = array('jpg','jpeg','gif','png'); 
    
    list($width,$height,$type,$attr) = getimagesize($_FILES['uploadfile']['tmp_name']);
    //得到文件原名

    $fileName = $_FILES["uploadfile"]["name"];
    
    $fileParts = pathinfo($_FILES['uploadfile']['name']);
    
    //接受动态传值
    $files=$_POST['typeCode'];
    
    //最后保存服务器地址
    if(!is_dir($path))
       mkdir($path);
    include_once "../php/config.php";


    if(!empty($_POST)){
    //print_r($_POST);
        if(!isset($_SESSION)){  session_start(); }  
        if(isset($_SESSION["username"])&&$_SESSION["login"]){
            //print_r($_POST);
            $name = stripslashes(trim($_POST['name']));
            $catid = stripslashes(trim($_POST['type']));
            $subid=1;
            for($i=0;$i<8;$i++){
                if($catid==$i){
                    $subid = stripslashes(trim($_POST['sub'.$i.'']));
                }
            }

            $size = stripslashes(trim($_POST['size']));
            $price = stripslashes(trim($_POST['price']));
            $number = stripslashes(trim($_POST['number']));
            $des = stripslashes(trim($_POST['details']));
            $created = date('Y-m-d H:i:s',time());
            $supid = $_SESSION["id"];
            //$authordef = $_SESSION["user_role"];

            
            //$_SESSION["email"]=$_GET["email"];//邮箱

            mysql_query("SET NAMES utf8");
            
            $reg_date = date('Y-m-d H:i:s',time());

            $insql = "insert into xm_product(title,size,description,sprice,num,catid,supid,created,subid) values('$name','$size','$des','$price','$number','$catid','$supid','$created','$subid') ";

            // echo $insql;
            // //mysql_query($insql);
            // $result = mysql_query($insql);
            // if($result){
            //     //echo "写入成功";
            //     echo_message("写入成功" , 1); 
            // }else{
            //     //echo "失败";
            //     echo_message("写入失败" , 1); 
            // } 


            mysql_query($insql , $db) or die(mysql_error($db));
            $last_id = mysql_insert_id();
            //用写入的id作为图片的名字，避免同名的文件存放在同一目录中
            //$imagename = $last_id.$ext;

            $fileNames = $fileName;
            $imagenames = explode(".",$fileNames);
            //$imagenames[0] = $_SESSION["uid"];
            $imagenames[0] = $last_id;
            $imagename = implode(".", $imagenames);
            //$count=0;
            if (move_uploaded_file($tempFile, $path.$imagename)){
                $query = 'update xm_product set product_photo="'.$imagename.'" where id='.$last_id;
                mysql_query($query , $db) or die(mysql_error($db));
                //$query = 'update t_user set uheader="'.$imagename.'" where uid='.$_SESSION["uid"];
                //mysql_query($query , $db) or die(mysql_error($db));
                //echo "原文件名".$fileName."上传成功！新文件名".$imagename."<br>请手动F5刷新!";
                mysql_close();
                //echo "信息发布成功";
                echo_message("商品发布成功！",-1);
            }else{
                //echo $fileName."上传失败！";
                mysql_close();
                //echo "商品发布失败";
                echo_message("商品上传失败！",-1);
            }



        }else{
            echo_message("写入失败" , 3); 
            //header("location:../blog/index.php");
        }
    
    }else {
        //出错
        echo_message("内容不能为空！" , 3); 
    }    
}

?>