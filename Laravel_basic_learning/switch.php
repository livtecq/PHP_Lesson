<?php

// switch
// if文のほうが好ましい

$data = 2;

// == switchの場合デフォルトでこちらになる
// === 型も等しい

switch($data) {
    case $data === 1:
        echo '1です';
        break;
    case 2:
        echo '2です';
        break;
    case 3:
        echo '3です';
        break;
    default:
        echo '1から3ではありません。';
}

// if文で記述した場合

if ($data === 1 ){
    echo '1';
}

if ($data === 2 ){
    echo '2';
}

if ($data === 3 ){
    echo '3';
}
