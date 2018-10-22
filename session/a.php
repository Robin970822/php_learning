<?php
/**
 * Created by PhpStorm.
 * User: robin_hanxy
 * Date: 2018/10/22
 * Time: 21:33
 */

session_start();
if(isset($_SESSION['name']))
{
    echo $_SESSION['name'];
}else
{
    echo 'No name';
}
