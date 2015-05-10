<?php
  //print_r($_GET);
  //print_r($_POST);
 // print_r($_FILES['uploadfile']);

 header("Content-type:text/html;charset=utf-8");
 error_reporting(0);
 
 if(!empty($_POST)){
    
    include_once "../php/config.php";
    include_once "../php/function.php";
    $nid=trim($_POST["nid"]);
    $adminid=trim($_POST["adminid"]);
    if(!empty($adminid))$desdef=2;
    //过滤敏感词
    filter_word($_POST["cdetails"],$nid);
    $cdetails=trim($_POST["cdetails"]);


    $userid = $_SESSION['id'];
    $userdef = $_SESSION['user_role'];
    $ctime = date('Y-m-d H:i:s');
        
    //评论验证
    if(empty($cdetails)){
        //echo_message("评论内容不能为空！",5, $pid);   
        echo "<script type='text/javascript'>alert('评论内容不能为空！');window.history.go(-1)</script>";
    }
    else if(strlen($cdetails) >= "100"){
        //echo_message("评论内容不能大于50字！",5, $pid);   
        echo "<script type='text/javascript'>alert('评论内容不能大于100字！');window.history.go(-1)</script>";
    }else if(empty($userid)){
        echo "<script type='text/javascript'>alert('登录后才能评论！');window.history.go(-1)</script>";
    }
    else{
        include_once "../php/conn.php";    
        $insql = "insert into xm_comment(description,desid,desdef,userid,userdef,created) values('$cdetails','$nid','$desdef','$userid','$userdef','$ctime') ";
        $conne = new opmysql();
        //执行插入
        $rowsNum = $conne->uidRst($insql);
        if($rowsNum)
        {
            $conne->close_conn();
            echo_message("评论成功！",5, $nid);
        }else {
            //出错
            //echo $conne->msg_error();   
        }    
        $conne->close_conn();
    } 
}

?>