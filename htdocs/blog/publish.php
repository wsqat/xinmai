<?php
error_reporting(0);
header("Content-type:text/html;charset=utf-8");
include_once "../php/conn.php";
include_once "../php/function.php";

//设置上传目录
$path = "../images/blog/";    

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
            // $str= htmlspecialchars_decode($str); 
            // $str= preg_replace("/<(.*?)>/","",$str); 
            //$str = preg_replace( "@<script(.*?)</script>@is", "", $str ); 
            // function fiter($str)
            // {
            //     //先把内容全部反编译过来.再过滤就行了. 
            //     $str = preg_replace("/<[^><]*script[^><]*>/i",'',$str);
            //     return preg_replace("/<(.*?)>/","",htmlspecialchars_decode($str)); 
            // }

            $name = stripslashes(trim($_POST['name']));
            $name = strip_tags($name);
            //$name = fiter($name);
            //$name = RemoveXSS($name);
            //echo $name;
            //$des = strip_tags($des);//PHP：过滤html标签的函数
            $nation = stripslashes(trim($_POST['nation']));
            $nation = strip_tags($nation);
            //$nation = fiter($nation);
            //$nation = RemoveXSS($nation);
            $birthplace = stripslashes(trim($_POST['birthplace']));
            $birthplace = strip_tags($birthplace);
            //$birthplace = fiter($birthplace);
            //$birthplace = RemoveXSS($birthplace);
            $birthday = stripslashes(trim($_POST['birthday']));
            $birthday = strip_tags($birthday);
            //$birthday = fiter($birthday);
            //$birthday = RemoveXSS($birthday);
            $height = stripslashes(trim($_POST['height']));
            $height = strip_tags($height);
            //$height = fiter($height);
            //$height = RemoveXSS($height);
            $concern1 = stripslashes(trim($_POST['concern1']));
            $concern1 = strip_tags($concern1);
            //$concern1 = fiter($concern1);
            //$concern1 = RemoveXSS($concern1);
            $concern2 = stripslashes(trim($_POST['concern2']));
            $concern2 = strip_tags($concern2);
            //$concern2 = fiter($concern2);
            //$concern2 = RemoveXSS($concern2);
            $concern = $concern1."&&".$concern2;
            
            $work = stripslashes(trim($_POST['work']));
            $work = strip_tags($work);
            //$work = fiter($work);
            //$work = RemoveXSS($work);
            $talent = stripslashes(trim($_POST['talent']));
            $talent = strip_tags($talent);
            //$talent = fiter($talent);
            //$talent = RemoveXSS($talent);
            $des = stripslashes(trim($_POST['details']));
            $des = strip_tags($des);
            //$des = fiter($des);
            //$des = RemoveXSS($des);
            $created = date('Y-m-d H:i:s',time());
            
            $authorid = $_SESSION["id"];
            $authordef = $_SESSION["user_role"];

            


            
            //$_SESSION["email"]=$_GET["email"];//邮箱

            mysql_query("SET NAMES utf8");
            
            $reg_date = date('Y-m-d H:i:s',time());

            $insql = "insert into xm_blog(name,work,nation,talent,birthplace,birthday,height,concern,description,authorid,authordef,created) values('$name','$work','$nation','$talent','$birthplace','$birthday','$height','$concern','$des','$authorid','$authordef','$created') ";

            //echo $insql;
            //mysql_query($insql);
            $result = mysql_query($insql);
            if($result){
                //echo "写入成功";
                //echo_message("写入成功" , 1); 
            }else{
                //echo "失败";
                echo_message("写入失败" , 1); 
            } 

            //echo $insql;
            //mysql_query($insql , $db)or die(mysql_error($db));
            $last_id = mysql_insert_id();
            //echo $last_id;
            //用写入的id作为图片的名字，避免同名的文件存放在同一目录中
            //$imagename = $last_id.$ext;

            $fileNames = $fileName;
            $imagenames = explode(".",$fileNames);
            //$imagenames[0] = $_SESSION["uid"];
            $imagenames[0] = $last_id;
            $imagename = implode(".", $imagenames);

            if (move_uploaded_file($tempFile, $path.$imagename)){
                $query = 'update xm_blog set photo="'.$imagename.'" where id='.$last_id;
                mysql_query($query , $db) ;
                //or die(mysql_error($db))
                //$query = 'update t_user set uheader="'.$imagename.'" where uid='.$_SESSION["uid"];
                //mysql_query($query , $db) or die(mysql_error($db));
                //echo "原文件名".$fileName."上传成功！新文件名".$imagename."<br>请手动F5刷新!";
                mysql_close();
                echo_message("信息发布成功！",3);
            }else{
                //echo $fileName."上传失败！";
                mysql_close();
                echo_message("信息上传失败！",3);
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