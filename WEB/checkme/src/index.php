<title>CheckMe-01</title>
<?php
print("<h1>欢迎来到TYCTF，快来寻找你的Flag并提交吧。</h1>");
?>
<form action="index.php" method="POST">
    your key: <input type="text" name="key" />
    <input type="submit" value="Submit" />
</form>
<?php
if(!empty($_POST['key'])){
    $keys = $_POST['key'];
    show_source("index.php");
    $keys = base64_decode(urldecode($keys));
    if(strlen($keys)==5){
        if($keys=="tyctf"){
            print("<p>You win!</p>");
            include("flag.php");
            print($flag);
        }
    }
    else{
        print("Abyssun：你平常就这样传参的？");
    }
}
?>