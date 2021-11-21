<!-- ランダムの値を取得する -->
<!-- <?php
$random = rand(0, 10);
echo $random;
?> -->

<!-- 簡単なくじゲーム -->
<?php
$random = rand(0, 1);
if ($random === 0) {
    echo '当たりです';
} else {
    echo 'ハズレです';
}
?>