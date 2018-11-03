<?php
require_once 'functions.php'
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>All User</title>
</head>
<body>
<a href="adduser.html"> Add User</a>
<br>
<table align="left" border="1">
    <tr>
        <th>id</th>
        <th>name</th>
        <th>age</th>
        <th>Edit</th>
        <th>Delete</th>
    </tr>
    <?php
    $conn = connectDb();
    $result = mysqli_query($conn, "SELECT * FROM users ORDER BY id DESC");
    $dataCount = mysqli_fetch_array(mysqli_query($conn, "SELECT COUNT(*) FROM users"))[0];

    for ($i = 0; $i < $dataCount; $i++) {
        $resultArr = mysqli_fetch_assoc($result);
        $id = $resultArr['id'];
        $name = $resultArr['name'];
        $age = $resultArr['age'];
        echo "<tr> <td>$id</td> <td>$name</td> <td>$age</td> <td><a href='edituser.php?id=$id'>Edit</a></td><td><a href='deleteuser.php?id=$id'>Delete</a></td> </tr>";
    }
    ?>
</table>
</body>
</html>