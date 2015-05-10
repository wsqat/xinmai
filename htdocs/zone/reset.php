<?php

if(!empty($_POST)){
    //print_r($_POST);
    $pass = $_POST['pass'];
    $password = md5(trim($_POST['password']));

    //密码前12位
    //$pass = substr($pass , 0 , 12);
    //$password = substr($password , 0 , 12);

    // echo "<br>XXX";
    // echo $pass."___".$password;


    include_once "../php/function.php";

    if($pass != $password){
        echo_message("原密码错误，请重新修改..." ,3);
    }

    
    // $password1=$_POST["password1"];
    // $password2=$_POST["password2"];

    $password1 = md5(trim($_POST['password1']));
    $password2 = md5(trim($_POST['password2']));
    //密码前12位
    //$password1 = substr($password1 , 0 , 12);
    //$password2 = substr($password2 , 0 , 12);

    $uid=$_POST["uid"];

    
    include_once "../php/config.php";


    include_once "../php/conn.php";
    if($_SESSION["user_role"]==1)
        $usertable = "xm_customer";
    elseif ($_SESSION["user_role"]==2) {
        $usertable = "xm_supplier";
    }
    
    $query = "select * from ".$usertable."  where id= '".$_SESSION["id"]."' and password = '".$pass."'  ";
    //echo $query;
    $result = mysql_query($query);
    if($result){

        $sql="update ".$usertable." set  password = '".$password1."'  where id = '".$uid."' ";
    
        $rowsNum = $conne->uidRst($sql);
        if($rowsNum > 0){
            //echo "<h3>修改成功！</h3>";
            $conne->close_conn();
            echo_message("修改成功..." ,3);
        }else{

            //echo "新密码与原密码一致！";
            $conne->msg_error();
            $conne->close_conn();
            echo_message("新密码与原密码一致！修改失败，请重新修改..." ,3);
        }    
    }else{
        //echo "原密码错误，请重新修改...";
        echo_message("原密码错误，请重新修改..." ,3);
    }
    

}else{
    echo_message("请重新修改..." ,3);
}     


?>