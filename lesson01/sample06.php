変数を学ぶ
<?php
$sum = 100+1050+200;
echo $sum;
?>
<br>
<?php
echo '$sum'; // 変数をシングルクォーテーションで囲うとそのまま表示される。
?>
<br>
<!-- 混在させることも出来る -->
<p>合計金額は、<?php echo $sum; ?>円です。</p>　
<p>合計金額は、<?php echo $sum * 1.1; ?>円です。</p>　

<!-- 日本語の変数も使用できるが極力英語で使用する -->
<?php
$合計 = 100+300+200;
echo $合計;
?>