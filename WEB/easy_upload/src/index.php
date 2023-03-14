<html>

<body>



<form action="index.php" method="post" enctype="multipart/form-data">

    <label for="file">待上传文件名:</label>

    <input type="file" name="file" id="file" /> <br />

    <input type="submit" name="submit" value="提交" />

</form>



</body>

</html>
<?php

echo "<pre>";

print_r($_FILES['file']);



$uploaddir = './upload/';//存放的路径

$uploadfile = $uploaddir . basename($_FILES['file']['name']);



if (move_uploaded_file($_FILES['file']['tmp_name'], $uploadfile)) {

    echo "文件上传成功<br>路径：".$uploadfile;

} else {

    echo "文件上传失败";

}