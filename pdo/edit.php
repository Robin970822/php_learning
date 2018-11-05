<?php
require_once 'functions.php';
check(array('id'), 'GET');
$id = intval($_GET['id']);
$conn = connectDb();
$sql = "SELECT * FROM users WHERE id = $id";
$stmt = $conn->query($sql);
if ($stmt->columnCount() > 0) {
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    $name = $result['name'];
    $age = $result['age'];
} else {
    errorAlert('No such id!');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Student</title>
</head>
<body>
<div style="text-align: center">
    <?php include("menu.php"); ?>
    <h3>Add Student</h3>
    <form action="action.php?action=edit" method="post">
        <table align="center">
            <tr>
                <td>ID</td>
                <td><input type="text" name="id" readonly="readonly" value="<?php echo $id ?>"></td>
            </tr>
            <tr>
                <td>Name</td>
                <td><input type="text" name="name" value="<?php echo $name ?>"></td>
            </tr>
            <tr>
                <td>Age</td>
                <td><input type="text" name="age" value="<?php echo $age ?>"></td>
            </tr>
            <tr>
                <td><input type="submit"></td>
                <td><input type="reset"></td>
            </tr>
        </table>
    </form>

</div>
</body>