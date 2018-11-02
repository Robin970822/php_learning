<?php /** @noinspection PhpDeprecationInspection */
/**
 * Created by PhpStorm.
 * User: robin_hanxy
 * Date: 2018/11/2
 * Time: 14:47
 */

$conn = mysqli_connect('localhost', 'root', '123456');

if ($conn) {
    mysqli_select_db($conn, 'myapp');
    $result = mysqli_query($conn, "SELECT * FROM users");
    $dataCount = mysqli_num_rows($result);
    echo 'number: ' . $dataCount . '<br>';

    for ($i = 0; $i < $dataCount; $i++) {
        print_r(mysqli_fetch_assoc($result));
        echo '<br>';
    }

} else {
    echo 'Error';
}