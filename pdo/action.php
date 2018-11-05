<?php
/**
 * Created by PhpStorm.
 * User: robin_hanxy
 * Date: 2018/11/5
 * Time: 15:52
 */
require_once 'functions.php';

switch ($_GET['action']) {
    case 'add':
        add();
        break;
    case 'edit':
        edit();
        break;
    case 'delete':
        delete();
        break;
    default:
        errorAlert('Unknown action!');
}

function add()
{
    check(array('name', 'age'), 'POST');
    $name = $_POST['name'];
    $age = intval($_POST['age']);

    $conn = connectDb();
    $sql = "INSERT INTO users(name, age) values('$name', $age)";
    $row = $conn->exec($sql);
    if ($row > 0) {
        successAlert('Add Student Success!');
    } else {
        errorAlert('Add Student Failed!');
    }
}

function edit()
{
    check(array('id', 'name', 'age'), 'POST');
    $id = intval($_POST['id']);
    $name = $_POST['name'];
    $age = intval($_POST['age']);
    $conn = connectDb();
    $sql = "UPDATE users SET name = '$name', age = $age WHERE id = $id";
    $row = $conn->exec($sql);
    if ($row > 0) {
        successAlert('Edit Student Success!');
    } else {
        errorAlert('Edit Student Failed!');
    }
}

function delete()
{
    check(array('id'), 'GET');
    $id = intval($_GET['id']);

    $conn = connectDb();
    $sql = "DELETE FROM users WHERE id=$id";
    $row = $conn->exec($sql);
    if ($row > 0) {
        successAlert('Delete Student Success!');
    } else {
        errorAlert('Delete Student Failed!');
    }
}