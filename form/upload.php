<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Upload</title>
</head>
</html>
<body>
<?php
/**
 * Created by PhpStorm.
 * User: robin_hanxy
 * Date: 2018/10/22
 * Time: 21:00
 */

$file = $_FILES['file'];
$fileName = $file['name'];
move_uploaded_file($file['tmp_name'], '../upload/'.$fileName);

echo "<img src='../upload/$fileName'>";
?>
</body>