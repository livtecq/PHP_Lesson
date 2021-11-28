<?php

// if (条件) {
//     条件が真なら実行
// }

// if (条件) {
//     条件が真なら実行
// } else {
//     条件が偽なら実行
// }



$height = 91;

// if ($height == 91) { // 条件は数字
//     echo '身長は' . $height . 'センチです';
// } 

// if ($height <= 90) {
//     echo '身長は' . $height . 'センチになります。';
// }

if ($height != 90) { // !== は型が同じかどうか判別するのでこちらを使用する。
    echo '身長は90センチではありません。';
}

else {
    echo '身長は' . $height . 'センチではありません。';
}
echo '<br>';

// if elseif else
$signal = 'blue';
$speed = 80;

if ($signal === 'red') {
    echo '止まれ';
} else if ($signal === 'yellow') {
    echo '一旦停止';
} else {
    echo '進む';
}
echo '<br>';

// if の中に if
if ($signal === 'blue') {
    if ($speed >= 80) { // if文の中にif文を記述することをネストという。
        echo 'スピード違反';
    }
}
echo '<br>';




// == 一致
// === 型も一致 基本はこちらを使うようにする。

$height = '90'; // 文字
var_dump($height);
echo '<br>';

// データが入っているからどうか
// isset empty is_null

$test = '1';

if(empty($test)) {
    echo '変数は空です';
}

if(!empty($test)) { // データが空でなければ
    echo '変数は値が入っています';
}
echo '<br>';


// and と or

$signal_1 = 'red';
$signal_2 = 'blue';

if ($signal_1 === 'red' && $signal_2 === 'blue') {
    echo '赤と青です';
} else {
    echo '赤と青ではありません';
}
echo '<br>';

if ($signal_1 === 'red' || $signal_2 === 'yellow') {
    echo '赤か黄色です';
}
echo '<br>';

// 三項演算子
// if else
// 条件 ? 真 : 偽

$math = 80;

$comment = $math > 80 ? 'good' : 'not good';

echo $comment;




?>