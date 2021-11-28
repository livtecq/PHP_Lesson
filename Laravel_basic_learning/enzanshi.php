<?php

$test1 = 7;
$test2 = 3;

$test3 = $test1 + $test2;

// 3つに分けたい
/*
1
2
3・・余りが０
4
5
6・・余りが0
*/

$test3 = $test1 % $test2;




echo $test3;