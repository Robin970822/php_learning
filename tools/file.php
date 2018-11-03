<?php
/**
 * Created by PhpStorm.
 * User: robin_hanxy
 * Date: 2018/10/13
 * Time: 16:01
 */

//write data

$f = fopen('data', 'w');

if ($f) {
    fwrite($f, 'Hello PHP');
    fclose($f);
} else {
    echo 'Fail';
}

echo 'OK';
