<?php

ini_set("allow_url_include", "on");
header("Content-type: text/html; charset=utf-8");
error_reporting(0);
$file = $_GET['file'];
if (isset($file)) {
    show_source(__FILE__);
    echo 'flag 在flag.php中';
} else {
    echo "传入一个file试试";
}
echo "</br>";
echo "</br>";
echo "</br>";
echo "</br>";
echo "</br>";
include_once($file);
?> flag 在flag.php中



