<!-- 現在時刻を表示する -->
<?php
date_default_timezone_set('Asia/Tokyo');
echo date('G時 i分 s秒');
echo "date('G時 i分 s秒')"; // そのまま表示される。
?>

<!-- 文字列と数式を連結する -->
<br>
<?php
date_default_timezone_set('Asia/Tokyo');
echo '現在は、';
echo date('G時 i分 s秒');
echo 'です。';
?>
<br>
<?php
date_default_timezone_set('Asia/Tokyo');
echo '現在は、' . date('G時 i分 s秒');
echo 'です。';
?>
<br>
<?php
date_default_timezone_set('Asia/Tokyo');
echo '現在は、' . date('G時 i分 s秒') . 'です。';
?>
<br>
<?php
date_default_timezone_set('Asia/Tokyo');
echo '現在は、', date('G時 i分 s秒'), 'です。';
?>
