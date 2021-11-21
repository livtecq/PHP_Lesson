<!-- ファイルを読み込む -->

<?php
$news = file_get_contents('data/news.txt');
echo $news;

// ファイルの追記
$news = $news . "<br>追加のニュースです";
$success = file_put_contents('data/news.txt', $news);

// file_get_contentsと同じ処理
// readfile('data/news.txt'); // ファイルの場所を指定するだけで出力する。

?>