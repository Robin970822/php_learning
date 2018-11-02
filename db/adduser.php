<?php
/**
 * Created by PhpStorm.
 * User: robin_hanxy
 * Date: 2018/11/2
 * Time: 15:44
 */

require_once 'functions.php';

if (!isset($_POST['name'])) {
    die('user name not define');
} else if (!isset($_POST['age'])) {
    die('user age is not define');
} else {
    $name = $_POST['name'];
    if (empty($name)) {
        die('user name is empty');
    }

    $age = intval($_POST['age']);
    if (empty($age)) {
        die('user age is empty');
    }

    $conn = connectDb();
    mysqli_query($conn, "INSERT INTO users(name, age) VALUES ('$name', $age)");

    if (mysqli_errno($conn)) {
        echo mysqli_error($conn);
    } else header("Location:allusers.php");
}