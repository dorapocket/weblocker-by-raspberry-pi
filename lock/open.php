<?php
session_start();
$login = 0;
if (isset($_SESSION['isLogin'])) {
    if ($_SESSION['isLogin'] === 1) {
        $login = 1;
    }
}
if($login){
    //exec("sudo python");
    require_once 'config.php';
    require_once 'MysqliDb.php';
    $db = new MysqliDb($dbhost, $dbuser, $dbpwd, $dbname);
    $data=array();
    $data['realname']=$_SESSION['realname'];
    $data['time']=$db->now();
    $id = $db->insert ('logs', $data);
    echo "开门成功！:)";
}else{
    echo "请先登录";
    exit;
}
?>