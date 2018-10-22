<?php
/**
 * Created by PhpStorm.
 * User: robin_hanxy
 * Date: 2018/10/13
 * Time: 15:53
 */

$arr = array(1, 2, 5, 8, 'Hello', date('Y'),
    array('h' => 'Hello', 'name' => 'robin'));
echo json_encode($arr).'<br>';

$obj = array('h' => 'Hello', 'name' => 'robin',
    array(1, 3, 5));
echo json_encode($obj).'<br>';

$jsonStr = json_encode($obj);
$objJson = json_decode($jsonStr);
echo $objJson -> h;
