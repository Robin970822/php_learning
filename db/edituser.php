<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit User</title>
</head>
<body>

<?php
/**
 * Created by PhpStorm.
 * User: robin_hanxy
 * Date: 2018/11/3
 * Time: 13:50
 */

require_once 'functions.php';

if (!empty($_GET['id'])) {
    $conn = connectDb();
    $id = intval($_GET['id']);
    $result = mysqli_query($conn, "SELECT * FROM users WHERE id = $id");
    $arr = mysqli_fetch_assoc($result);

} else {
    die('ID not define');
}
?>

<form action="edituser_server.php" method="post">
    <div>ID:
        <input type="text" name="id" value="<?php echo $arr['id']; ?>" readonly="readonly">
    </div>
    <div>Name:
        <input type="text" name="name" value="<?php echo $arr['name']; ?>">
    </div>
    <div>Age:
        <input type="text" name="age" value="<?php echo $arr['age']; ?>">
    </div>
    <input type="submit">
</form>
</body>
</html>