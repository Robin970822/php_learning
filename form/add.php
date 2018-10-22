<?php
/**
 * Created by PhpStorm.
 * User: robin_hanxy
 * Date: 2018/10/22
 * Time: 20:50
 */

if ($_POST['a'] && $_POST['b']) {
    echo $_POST['a'] + $_POST['b'];
} else {
    echo 'Please input a and b';
}