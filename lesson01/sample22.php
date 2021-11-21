<!-- 全角英数字を半角に変換する -->

<?php
$age = '二十四';
// 全角数字を半角に変換する
// 'n' 「全角」数字を「半角」に変換するオプション。
$age = mb_convert_kana($age, 'n', 'UTF-8');


if (is_numeric($age)) {
    echo $age . '歳です';
} else {
    echo '※ 数字で入力してください。';
}

?>

