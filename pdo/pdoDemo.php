<?php
/**
 * Created by PhpStorm.
 * User: robin_hanxy
 * Date: 2018/11/4
 * Time: 19:07
 */

require_once 'config.php';

try {
    $conn = new PDO(MYSQL_DSN, MYSQL_USER, MYSQL_PASSWORD);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo 'Connection failed' . $e->getMessage();
}

try {
    $conn->beginTransaction();
    $sql = "INSERT INTO users(name, age) values (?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->execute(array("jyp", 20));
    $conn->commit();
} catch (PDOException $e) {
    die('failed' . $e->getMessage());
    $conn->rollback();
}

$sql = "SELECT * FROM users";
foreach ($conn->query($sql) as $row) {
    print $row['id'] . "\t" . $row['name'] . "\t" . $row['age'] . "<br>";
}