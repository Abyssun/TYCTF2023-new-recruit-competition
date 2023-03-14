<form action="f14g.php" method="post">
    请输入手机号登录：<input type="text" maxlength="10" name="cnt">

    <br>
    <input type="submit" name="login" value="登录">
</form>

<?php

if ((isset($_POST['login']) && isset($_POST['cnt']))) {

    if(preg_match('/([0-9]{11})/',$_POST['cnt']))
    {
        echo $flag;
    }else {
        echo "<p>nononononono!!!!</p>";
    }



}
?>