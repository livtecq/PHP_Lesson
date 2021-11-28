<?php

// 複数の値の foreach

$members = [
    'name' => '本田',
    'height' => '170',
    'hobby' => 'サッカー'
];

// valueの値のみ表示
foreach ($members as $member) {
    echo $member;
}
echo '<br>';

// // key と value それぞれ表示
foreach ($members as $key => $value) {
    echo $key . 'は' . $value . 'です';
}
echo '<br>';


// 多段階配列の値の取り出し方
$members_2 = [
    '本田' => [
        'height' => '170',
        'hobby' => 'サッカー'
    ],
    '香川' => [
        'height' => '165',
        'hobby' => 'サッカー'
    ]
];

// 値が取り出せない
// foreach ($members_2 as $member) {
//     echo $member;
// }

// foreach ($members_2 as $member) {
//     foreach($member as $mem) {
//     echo $mem;
//     }
// }
// echo '<br>';

// key と value それぞれ値を取りたいときは
foreach ($members_2 as $member_1) {
    foreach($member_1 as $member => $value) {
    echo $member . 'は' . $value . 'です';
    }
}

?>