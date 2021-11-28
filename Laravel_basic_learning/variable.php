<?php

// 変数 動的型付け(int型からString型への上書きも可能)
// int 数字
// String　文字
// 変数の付け方 先頭は英文字or _ アンダーバーでなければならない。

$test = 123;

$test1 = 123;
$test2 = 456;
$test3 = $test . $test2;

echo($test3);


// 変数の上書き
$test = '変数の上書き';


// 配列　Object　コレクション型の中身を確認できる
var_dump($test);


echo $test;

?>