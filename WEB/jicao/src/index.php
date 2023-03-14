<?php
highlight_file('index.php');
include ("flag.php");
$id=$_POST['id'];
$json=json_decode($_GET['json'],true);
if ($id=='tysec666'&&$json['x']=="ty3ec")
{
    echo $flag;

}