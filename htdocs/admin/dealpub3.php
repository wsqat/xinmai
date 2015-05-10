<?php
error_reporting(0);
header("Content-type:text/html;charset=utf-8");
include_once "../php/conn.php";
include_once "../php/function.php";

//设置上传目录
//$path = "../images/admin/";
//print_r($_POST);


// if (!empty($_FILES)){
// //print_r($_POST);
    
//     //得到上传的临时文件流
//     $tempFile = $_FILES['uploadfile']['tmp_name'];
//     //echo $tempFile;
//     //允许的文件后缀
//     $fileTypes = array('jpg','jpeg','gif','png'); 
    
//     list($width,$height,$type,$attr) = getimagesize($_FILES['uploadfile']['tmp_name']);
//     //得到文件原名

//     $fileName = $_FILES["uploadfile"]["name"];
    
//     $fileParts = pathinfo($_FILES['uploadfile']['name']);
    
//     //接受动态传值
//     $files=$_POST['typeCode'];
    
//     //最后保存服务器地址
//     if(!is_dir($path))
//        mkdir($path);

    include_once "../php/config.php";


    if(!empty($_POST)){
        //print_r($_POST);

        if(!isset($_SESSION)){  session_start(); }  

            //print_r($_POST);
            if(trim($_POST['title'])==""){
                //header("location:../webadmin/content.php");}  
                echo_message("标题不得为空！",8);

                //echo "kong";
            }else{
                //print_r($_POST);
                //过滤敏感词
                //filter_arr($_POST);
                // 提交的编辑器内容使用
                // addslashes()来进行转义后再保存，
                // 展示时使用
                // stripslashes()先去除转义再来展示。
                // addslashes
                // 单双引号、反斜线及NULL加上反斜线转义
                // 被改的字符包括单引号 (')、双引号(")、反斜线 backslash (\) 以及空字符NULL。
                // stripslashes
                // 去掉反斜线字符
                $title = addslashes(trim($_POST['title']));
                //$editor1 = addslashes(trim($_POST['editor1']));
                function safe($value)
                {
                    htmlentities($value, ENT_QUOTES, 'utf-8');
                    // other processing
                    return $value;
                }
                $editor1 = stripslashes(trim($_POST['editor1']));
                //echo $_POST['editor1']."<br>";
                //echo safe($editor1);

                //echo $editor1;
                //echo stripslashes($editor1);

                $keyword = addslashes(trim($_POST['keyword']));
                $imgsrc = addslashes(trim($_POST['imgsrc']));
                if(empty($imgsrc))
                    $imgsrc=0;
                $ptime = date('Y-m-d H:i:s');
                $adminid=$_SESSION["user_id"];
                //$user_sch_id=$_SESSION["user_sch_id"];
                $class_id = $_POST["class_id"];
                $art_type = $_POST["type"];//文章类型,资讯,知识,文化
                if($art_type=="news")
                    $art_table = "xm_news";
                elseif($art_type=="know")
                    $art_table = "xm_know";
                elseif($art_type=="cult")
                    $art_table = "xm_cult";


                

                if(!empty($class_id)){
                    $insql = 'insert into '.$art_table.'(title,description,photo,published,typeid,admid,keyword,created) values ("'.$title.'","'.$editor1.'","'.$imgsrc.'",0,"'.trim($_POST["class_id"]).'","'.$adminid.'","'.$keyword.'","'.$ptime.'")';
                    //echo $insql;
                }else{
                    echo_message("信息发布失败！",8);
                }
                //echo "sssss";
                //mysql_query($query);

                //echo $insql;
                mysql_query($insql , $db);
                $last_id = mysql_insert_id();
                if(!empty($last_id)){
                    //echo "insert success ";
                    mysql_close();
                    echo_message("信息发布成功！",8);
                }else{
                    //echo "insert failed ";
                    echo_message("信息发布失败,请通过txt纯文本复制黏贴或标题已存在！",8);
                }
                // $last_id = mysql_insert_id();
                // //用写入的id作为图片的名字，避免同名的文件存放在同一目录中
                // //$imagename = $last_id.$ext;

                // $fileNames = $fileName;
                // $imagenames = explode(".",$fileNames);
                // //$imagenames[0] = $_SESSION["uid"];
                // $imagenames[0] = $last_id;
                // $imagename = implode(".", $imagenames);

                // if(move_uploaded_file($tempFile, $path.$imagename)){
                //     $query = 'update '.$art_table.' set photo="'.$imagename.'" where id='.$last_id;
                //     mysql_query($query , $db) or die(mysql_error($db));
                //     //$query = 'update t_user set uheader="'.$imagename.'" where uid='.$_SESSION["uid"];
                //     //mysql_query($query , $db) or die(mysql_error($db));
                //     //echo "原文件名".$fileName."上传成功！新文件名".$imagename."<br>请手动F5刷新!";
                //     //echo $query;
                //     mysql_close();
                //     //echo "update success";
                //     echo_message("信息发布成功！",8);
                // }else{
                //     //echo $fileName."上传失败！";
                //     mysql_close();
                //     //echo "update fail";
                //     echo_message("信息上传失败！",8);
                // }

                // if(mysql_affected_rows()){
                //     echo "success";
                //     mysql_close();
                //     //echo_message("信息发布成功！",8);
                // }else{
                //     echo "failed";
                //     //echo_message("信息发布失败！",8);
                // }
            }
    }else{
        echo_message("内容不得为空！",8);
    }
//}
?>