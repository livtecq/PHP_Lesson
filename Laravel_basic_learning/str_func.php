<?php

//文字列の長さ

$text = 'abc';

// マルチバイト 英語,数字以外(日本語や中国語など)
// 日本語 SJIS UTF-8 3~6バイト
$text2 = 'あいうえお';

echo strlen($text);
echo '<br>';
echo strlen($text2);
echo '<br>';


// マルチバイト
echo mb_strlen($text2);
echo '<br>';


// 文字列の置換

$str = '文字列を置換します';

echo str_replace('置換', 'ちかん', $str);
echo '<br>';

// 指定文字列で分割

$str2 = '指定文字列で、分割します';

var_dump(explode('、', $str2));
echo '<br>';

// implode
// 正規表現 真 偽
// 文字かどうか
// 数字かどうか
// 郵便番号
// メールアドレスか test@gmail.com

$str3 = '特定の文字列が含まれるか確認する';

echo preg_match('/文字列/', $str3);
echo '<br>';


// 指定文字列から文字列を取得する

echo substr('abcde', 2);
echo '<br>';
echo substr('あいうえお', 2);
echo '<br>';
// マルチバイト
echo mb_substr('かきくけこ', 2);

?>









