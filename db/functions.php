<?php
/**
 * Created by PhpStorm.
 * User: robin_hanxy
 * Date: 2018/11/2
 * Time: 15:19
 */

require_once 'config.php';

function connectDb()
{
    $conn = mysqli_connect(MYSQL_HOST, MYSQL_USER, MYSQL_PASSWORD);
    if (!$conn) {
        die('can not connect DB');
    }
    mysqli_select_db($conn, 'myapp');
    return $conn;
}