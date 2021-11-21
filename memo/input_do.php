<?php
// データベースを壊す文字列などの危険性がある
// $memo = $_POST['memo'];

$memo = filter_input(INPUT_POST, 'memo', FILTER_SANITIZE_SPECIAL_CHARS);

// データベース接続パーツの共通化
// $db = new mysqli('localhost:8889', 'root', 'root', 'mydb');
require('dbconnect.php');

$stmt = $db->prepare('insert into memos(memo) values(?)');
if (!$stmt):
    die($db->error);
endif;

$stmt->bind_param('s', $memo);
$ret = $stmt->execute();

if ($ret):
    echo '登録されました';
else:
    echo $db->error;
endif;

?>