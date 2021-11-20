<!-- 一年後までの日付を出力する -->
<?php
date_default_timezone_set('Asia/Tokyo');

// シングルクォーテーションとダブルクォーテーションの違い
// 変数の展開が可能
$hello = 'こんにちは';
echo $hello . '<br>'; // 表示される
echo '$hello<br>'; // 表示されない
echo "$hello<br>"; // 表示される
echo '1+1<br>'; // そのまま表示
echo "1+1<br>"; // そのまま表示
echo 1+1 . '<br>'; // 文字列連結が必要


// $time = time();
// echo $time . '<br>';

// $day = date('n/j(D)', 1687340195);
// echo $day . '<br>';


// $day = date('n/j(D)');
// echo $day . '<br>';

// $time = strtotime('+1 day');
// echo $day . '<br>';

// $day = date('n/j(D)', $time);
// echo $day . '<br>';


// $time = strtotime('+1 day');
// $day = date('n/j(D)', $time);
// echo $day . '<br>';


// for構文
for($i=0; $i<366; $i++):
// $time = strtotime('+' . $i . ' day');
$time = strtotime("+$i day");
$day = date('n/j(D)', $time);
echo $day . '<br>';
endfor;






?>




<br>
strtotime
<br>
String to time