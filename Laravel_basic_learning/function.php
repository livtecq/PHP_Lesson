<?php
/*
function test(引数1, 引数2) {
    //処理
    return //戻り値;
}
*/

//インプット引数なし
// アウトプット戻り値なし
function test() {
    echo 'テスト';
}

test();
echo '<br>';

// インプット引数あり
// アウトプット戻り値なし

$comment = 'コメント２';
$comment3 = 'コメント３';

function getComment($string) {
    echo $string;
}

getComment('コメント');
echo '<br>';
getComment($comment);
echo '<br>';
getComment($comment3);
echo '<br>';


// インプット引数なし
// アウトプット戻り値あり

function getNumberOfComment() {
    return 5;
}

var_dump(getNumberOfComment());
echo '<br>';

echo getNumberOfComment();
echo '<br>';

$i = getNumberOfComment();

echo $i;
echo '<br>';


// 引数2つ
// 戻り値あり

function sumPrice($int1, $int2)  {
    $int3 = $int1 + $int2;
    return $int3;
}


$total = sumPrice(3, 5);

echo $total;
echo '<br>';



// 関数の自作 郵便番号正規表現
//camelCase
//snake_case


$postalCode = '123-4567';

function checkPostalCode($str) {
    $replaced = str_replace('-', '', $str);
    $length = strlen($replaced);

    if($length === 7) {
        return true;
    }
    return false;
}


var_dump(checkPostalCode($postalCode));