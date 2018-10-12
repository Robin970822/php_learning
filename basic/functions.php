<?php
/**
 * Created by PhpStorm.
 * User: robin_hanxy
 * Date: 2018/10/12
 * Time: 10:07
 */

function traceHelloPHP()
{
    echo 'Hello PHP <br>';
    echo 'Hello World<br>';
}

traceHelloPHP();

$func = 'traceHelloPHP';
$func();

function sayHelloTo($name)
{
    echo "Hello $name <br>";
}

sayHelloTo('ZhangSan');
sayHelloTo('Lisi');
