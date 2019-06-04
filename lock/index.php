<?php
session_start();
$login = 0;
if (isset($_SESSION['isLogin'])) {
    if ($_SESSION['isLogin'] === 1) {
        $login = 1;
    }
}
?>
<!DOCTYPE html>
<head>
    <title>Welcome Home!</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" href="css/mdui.css"/>
    <link rel="stylesheet" href="css/basic.css"/>
    <link rel="stylesheet" href="css/login.css"/>
    <link rel="stylesheet" href="css/unlock.css">
    <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=0,maximum-scale=1">
    <meta name="format-detection" content="telephone=no, email=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-touch-fullscreen" content="yes">
    <meta name="full-screen" content="yes">
    <meta name="screen-orientation" content="portrait">
    <meta name="mobile-web-app-capable" content="yes">
    
    <meta name="browsermode" content="application">
    <meta name="x5-fullscreen" content="true">
    <meta name="x5-page-mode" content="no-title">
    <meta name="x5-orientation" content="portrait">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
</head>
<body>
    <div class="mdui-container-fluid">
        <div class="mdui-row bigtit mdui-shadow-3">
            <h1>
                <?php
if ($login) {
    echo "欢迎您，" . $_SESSION['realname'];
} else {
    echo "欢迎回家";
}
?>
            </h1>
            <p>
            <?php
if ($login) {
    echo "今天过的开心吗？";
} else {
    echo "请给我一个开门的理由~";
}
?>
            </p>
        </div>
        <?php
if (!$login) {
    echo <<< lgin
<div class="mdui-row login">
    <form id="login" action="login.php" method="post">
            <ul>
                <li>
                    <input type="text" name="username" placeholder="我是..." autocomplete="on"/>
                </li>
                <li>
                    <input type="text" name="password" placeholder="我的密码是..." autocomplete="off"/>
                </li>
                <li>
                    <input type="submit" class="button" title="Go!" value="Go!">
                </li>
             </ul>
             </form>
        </div>
lgin;
} else {
    echo <<< open
<div class="mdui-row control">
<h2>轻按以开门</h2>
<button class="mdui-btn mdui-color-green mdui-ripple unlock mdui-shadow-5" id="open">
    <i class="mdui-icon material-icons">lock_open</i>
</button>
</div>
<script src="https://apps.bdimg.com/libs/jquery/2.1.4/jquery.min.js"></script>
<script src="js/open.js"></script>
open;
}
?>
               <div class="mdui-row staff">
            <p class="mdui-center">2019 HDU 15幢224 GPL2.0</p>
        </div>
    </div>
</body>

