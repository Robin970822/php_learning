<?php
/**
 * Created by PhpStorm.
 * User: robin_hanxy
 * Date: 2018/10/22
 * Time: 21:30
 */

session_start();
$_SESSION['name'] = 'robin';

session_destroy();

header('Location:a.php');