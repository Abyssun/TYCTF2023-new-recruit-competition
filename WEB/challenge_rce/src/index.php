<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Challenge_rce</title>
    <link rel="stylesheet" type="text/css" href="./css/index.css"/>
</head>

<body>
<!--?hint-->

</body>
</html>


<?php
error_reporting(0);
if (isset($_GET['hint'])) {
    highlight_file(__FILE__);
}
if (isset($_POST['rce'])) {
    $rce = $_POST['rce'];
    if (strlen($rce) <= 120) {
        if (is_string($rce)) {
            if (!preg_match("/[!@#%^&*:'\-<?>\"\/|`a-zA-Z~\\\\]/", $rce)) {
                eval($rce);
            } else {
                echo("Are you hack me?");
            }
        } else {
            echo "I want string!";
        }
    } else {
        echo "too long!";
    }
}
