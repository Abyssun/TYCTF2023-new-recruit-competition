<?php
highlight_file(__FILE__);

include 'flag.php';
if (isset($_GET['name']) && isset($_POST['password'])){
    $name = $_GET['name'];
    $password = $_POST['password'];
    if ($name != $password && md5($name) == md5($password)){
        echo $flag;
    }
    else {
        echo "wrong!";
    }

}
else {
    echo 'wrong!';
}
?>