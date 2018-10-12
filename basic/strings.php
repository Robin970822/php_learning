<?php
/**
 * Created by PhpStorm.
 * User: robin_hanxy
 * Date: 2018/10/12
 * Time: 18:38
 */

$str = 'Hello PHP';
echo $str . '<br>';

echo strpos($str, 'o') . '<br>';

$str1 = substr($str, 2, 3);
echo $str1 . '<br>';

$result = str_split($str, 2);
print_r($result);
echo '<br>';

$result1 = explode(' ', $str);
print_r($result1);
echo '<br>';
