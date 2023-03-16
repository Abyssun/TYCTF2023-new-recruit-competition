<?php
error_reporting(0);
header("Content-Type:text/html;charset=utf-8");
highlight_file(__FILE__);
if($_COOKIE['admin']==1)
{
    include "../next.php";

}
else
    echo "小饼干最好吃啦！";
?> rasalghul.php<?php
