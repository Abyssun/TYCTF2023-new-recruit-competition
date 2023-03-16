<?php
error_reporting(0);
highlight_file(__FILE__);
error_reporting(0);
if (isset($_GET['url'])) {
    $ip=$_GET['url'];
    if(preg_match("/ /", $ip)){
        die('nonono');
    }
    $a = shell_exec($ip);
    echo $a;
}
?>