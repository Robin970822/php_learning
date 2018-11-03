<?php
/**
 * Created by PhpStorm.
 * User: robin_hanxy
 * Date: 2018/11/3
 * Time: 14:15
 */

require_once 'functions.php';

if (!isset($_GET['id'])) {
    die('ID not define');
} else {
        $id = intval($_GET['id']);
        if (empty($id)) {
            die('id is empty');
        }

        $conn = connectDb();
        mysqli_query($conn, "DELETE FROM users WHERE id = $id");
        if (mysqli_errno($conn)) {
            echo mysqli_error($conn);
        } else header("Location:allusers.php");
}