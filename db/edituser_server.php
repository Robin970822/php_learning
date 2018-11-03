<?php
/**
 * Created by PhpStorm.
 * User: robin_hanxy
 * Date: 2018/11/3
 * Time: 13:57
 */

require_once 'functions.php';

if (!isset($_POST['id'])) {
    die('ID not define');
} else {
    if (!isset($_POST['name'])) {
        die('user name not define');
    } else if (!isset($_POST['age'])) {
        die('user age is not define');
    } else {
        $id = intval($_POST['id']);
        if (empty($id)) {
            die('id is empty');
        }
        $name = $_POST['name'];
        if (empty($name)) {
            die('user name is empty');
        }
        $age = intval($_POST['age']);
        if (empty($age)) {
            die('user age is empty');
        }

        $conn = connectDb();
        mysqli_query($conn, "UPDATE users SET name = '$name', age = $age WHERE id = $id");
        if (mysqli_errno($conn)) {
            echo mysqli_error($conn);
        } else header("Location:allusers.php");
    }
}