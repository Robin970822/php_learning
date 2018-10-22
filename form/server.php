<!DOCTYPE html>

<html>
<head>
</head>
<body>
<?php
/**
 * Created by PhpStorm.
 * User: robin_hanxy
 * Date: 2018/10/22
 * Time: 20:37
 */

if (isset($_GET['name']) && $_GET['name']) {
    echo 'Hello ' . $_GET['name'];
} else {
    echo 'Please input name!';
}
?>

</body>
</html>
