<?php
session_start();
require_once 'config.php';
require_once 'MysqliDb.php';
$username=isset($_POST['username'])?$_POST['username']:'';
$password=isset($_POST['password'])?$_POST['password']:'';
$lgin=0;
if (isset($_SESSION['isLogin'])) {
    if ($_SESSION['isLogin'] === 1) {
        $lgin=1;
        //header("location:index.php");
    }
}
if(!$lgin){
    $db = new MysqliDb($dbhost, $dbuser, $dbpwd, $dbname);
    $db->where("username", $username);
    $db->where("password", $password);
    if($db->has("userlist")){
        $_SESSION=$db->getOne("userlist");
        $_SESSION['isLogin']=1;
        header("location:index.php");
    }else{
        echo "密码错误，请重试！";
    }
}else{
    header("location:index.php");
}
?>