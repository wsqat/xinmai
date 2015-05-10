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
            //$name = stripslashes(trim($_POST['name']));
            $nation = stripslashes(trim($_POST['nation']));
            $birthplace = stripslashes(trim($_POST['birthplace']));
            $birthday = stripslashes(trim($_POST['birthday']));
            $height = stripslashes(trim($_POST['height']));
            $concern1 = stripslashes(trim($_POST['concern1']));
            $concern2 = stripslashes(trim($_POST['concern2']));
            $concern = $concern1."&&".$concern2;
            $work = stripslashes(trim($_POST['work']));
            $talent = stripslashes(trim($_POST['talent']));
            $des = stripslashes(trim($_POST['des']));
            //$created = date('Y-m-d H:i:s',time());
            
            $authorid = $_SESSION["id"];
            $authordef = $_SESSION["user_role"];

            
            //$_SESSION["email"]=$_GET["email"];//邮箱

            mysql_query("SET NAMES utf8");
            
            $reg_date = date('Y-m-d H:i:s',time());
            //"'.$imagename.'"
            $upsql = "update xm_blog set nation='".$nation."' ,
                                        birthday = '".$birthday."',
                                        birthplace='".$birthplace."',
                                        work='".$work."',
                                        height='".$height."',
                                        concern = '".$concern."',
                                        talent='".$talent."' , description='".$des."' where
            name=\"".$_SESSION["username"]."\"";
            // $insql = "insert into xm_blog(name,work,nation,talent,birthplace,birthday,height,concern,description,authorid,authordef,created) values('$name','$work','$nation','$talent','$birthplace','$birthday','$height','$concern','$des','$authorid','$authordef','$created') ";

            //echo $upsql;

            //mysql_query($upsql);
            $result = mysql_query($upsql);
            if($result){
                //echo "写入成功";

                mysql_close();
                //echo "success";
                echo_message("传记更新成功！",3);
            }else{
                //echo "失败";
                mysql_close();
                //echo "fail";
                echo_message("传记更新失败！",3);
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