<!-- ファイルを書き出す -->
<?php
$success = file_put_contents('data/news.txt',
    'ホームページをリニューアルしました。');

if ($success !== false) {
    echo 'ファイルの書き込みが完了しました';
} else {
    echo 'ファイルの書き込みが失敗しました';
};