<?php
require_once 'functions.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Student</title>
</head>
<body>
<div style="text-align: center">
    <?php include("menu.php"); ?>
    <h3>
        Show Student
    </h3>
    <table align="center" border="1" width="50%">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Age</th>
            <th colspan="2">Manage</th>
        </tr>
        <?php
        $conn = connectDb();
        $sql = "SELECT * FROM users";
        foreach ($conn->query($sql) as $row) {
            echo "<tr>
            <td>{$row['id']}</td>
            <td>{$row['name']}</td>
            <td>{$row['age']}</td>
            <td><a href='edit.php?id={$row['id']}'>Edit</td>
            <td><a href='action.php?action=delete&id={$row['id']}'>Delete</a></td>
            </tr>";
        }
        ?>
    </table>
</div>
</body>
</html>