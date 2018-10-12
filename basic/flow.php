<?php
/**
 * Created by PhpStorm.
 * User: robin_hanxy
 * Date: 2018/10/12
 * Time: 11:21
 */

function getLevel($score){
    if ($score > 90) {
        return 'perfect';
    } else {
        return 'bad';
    }
}

echo getLevel(91);