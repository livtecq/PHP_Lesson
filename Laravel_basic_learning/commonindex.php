<?php

// require 'common/common.php'; // 階層が上ならば../で上がれる

// 絶対パスで指定
require __DIR__ . '/common/common.php';

echo $commonVariable;
echo '<br>';

commonTest();
echo '<br>';

// マジック定数 絶対パスを表示させる。
echo __DIR__;
echo '<br>';

// 現在のファイルの在処
echo __FILE__;