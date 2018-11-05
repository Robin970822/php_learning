<?php
/**
 * Created by PhpStorm.
 * User: robin_hanxy
 * Date: 2018/11/5
 * Time: 15:31
 */

require_once 'config.php';

function connectDB()
{
    try {
        $conn = new PDO(MYSQL_DSN, MYSQL_USER, MYSQL_PASSWORD);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $conn;
    } catch (PDOException $e) {
        errorAlert('Connection failed' . $e->getMessage());
    }
}

function check($array, $method)
{
    foreach ($array as $item) {
        $_Method = $method == 'POST' ? $_POST : $_GET;
        if (!isset($_Method[$item])) {
            errorAlert($item . ' not define');
        }
        if (empty($_Method[$item])) {
            errorAlert($item . ' is empty');
        }
    }
}

function errorAlert($errorInfo)
{
    echo "<script> alert('{$errorInfo}'); window.history.back();</script>";
    die($errorInfo);
}

function successAlert($successInfo)
{
    echo "<script> alert('{$successInfo}'); window.location='index.php'</script>";
}