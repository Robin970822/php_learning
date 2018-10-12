<?php
/**
 * Created by PhpStorm.
 * User: robin_hanxy
 * Date: 2018/10/12
 * Time: 18:45
 */

$arr = array(4 => 80, 'h' => 'Hello', 'w' => 'World');
$arr[0] = 'Hello';
$arr[1] = 'World';
$arr[2] = 2;
$arr[3] = 3.14;
$arr['h'] = 'Hello';

print_r($arr);
echo '<br>'.count($arr);

