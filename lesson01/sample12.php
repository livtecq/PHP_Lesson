<!-- if構文の学習
指定時間で文言を変える。 -->
<?php
// $time = 8;
date_default_timezone_set('Asia/Tokyo');
$time = date('G');
?>


<?php if ($time < 17 ): ?>
<p>※営業時間外です</p>
<?php else: ?>
<p>ようこそ</p>
<?php endif ?>

<?php
$s = 'aaaaa';

// if ($s !== ''):
    if ($s):// $s !== '' の省略形
    
    echo '$sには文字が入っています';
endif;

$x = 0;
if ($x):
    echo '$xは0ではありません';
endif;

$y = 0;
// if ($y === 0):
if (!$y):
    echo '$yは0です';
endif;


?>