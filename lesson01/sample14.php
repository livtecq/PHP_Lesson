<!-- 文字列のフォーマットを整える -->

2021.1.1

<br>

<?php
$date = sprintf('%04d年%02d-%02d.', 2021, 1, 1);// %dは整数の意
echo $date;
?>
<br>
<?php
$date = sprintf('%04d.%02d.%02d', 'aaaa', 1, 1);
echo $date;
?>