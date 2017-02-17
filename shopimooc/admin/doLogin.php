<?php
/**
 * Created by PhpStorm.
 * User: tete
 * Date: 2017/2/10
 * Time: 23:01
 */
//session_start();
require_once '../include.php';
$username=$_POST['username'];
$password=md5(($_POST['password']));
$verify=$_POST['verify'];
$verify1=$_SESSION['verify'];
$autoFlag=$_POST['autoFlag'];
if ($verify==$verify1){
$sql="select * from imooc_admin where username='{$username}' and password='{$password}'";
$row=checkAdmin($sql);
if ($row){
    //如果选了一周中自动登录
    if ($autoFlag){
        setcookie("adminId",$row['id'],time()+7*24*3600);
        setcookie("adminName",$row['username'],time()+7*24*3600);
    }
    $_SESSION['adminName']=$row['username'];
    $_SESSION['adminId']=$row['id'];
    //header("location:index.php");
    alertMes("登陆成功","index.php");
}
else{
    alertMes("登陆失败,重新登陆","login.php");
}
//var_dump($res);
}else{
    alertMes("验证码错误","login.php");
}