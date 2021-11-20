1<br>
2<br>
3<br><br>


<!-- 繰り返し処理するwhile構文 -->
<?php
$i = 1;

echo $i . '<br>';

$i = $i + 1;
echo $i . '<br>';
$i = $i + 1;
echo $i . '<br>';
$i = $i + 1;
echo $i . '<br>';
$i = $i + 1;
echo $i . '<br>';
$i = $i + 1;
echo $i . '<br>';
$i = $i + 1;
echo $i . '<br>';
?>


<br><br>

<?php
while ($i < 15):
    $i = $i + 1;
    echo $i . '日<br>';
endwhile;
?>

<br><br>


<!-- リファクタリングする。 -->
<?php
$x =1; // 初期化
while ($x < 10):// 繰り返し条件
    echo $x . '日<br>';
    $x = $x + 1; // 更新処理
endwhile;
?>