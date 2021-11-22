<?php
// データベース接続パーツの共通化
// $db = new mysqli('localhost:8889', 'root', 'root', 'mydb');
require('dbconnect.php');

// 最大ページ数を求める
$counts = $db->query('select count(*) as cnt from memos');
$count = $counts->fetch_assoc();
// $max_page = floor(($count['cnt']+1)/5+1);
$max_page = ceil(($count['cnt']+1)/5);
// echo $max_page;

$stmt = $db->prepare('select * from memos order by id desc limit ?, 5');
if (!$stmt) {
    die($db->error);
}
$page = filter_input(INPUT_GET, 'page', FILTER_SANITIZE_NUMBER_INT);
// 三項演算子
$page = ($page ?: 1);

// if (!$page) {
//     $page = 1;
// }

$start = ($page - 1) * 5;
$stmt->bind_param('i', $start);
$result = $stmt->execute();
?>


<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>メモ帳</title>
</head>
<body>
    <h1>メモ帳</h1>

    <?php if (!$result): ?>
        <p>表示するメモはありません。</p>
    <?php endif; ?>

    <p>→ <a href="input.html">新しいメモ</a></p>

    <?php $stmt->bind_result($id, $memo, $created); ?>
    <?php while ($stmt->fetch()): ?>
    <div>
        <!-- 見出しを一部切り取り表示させる。mn_substr() -->
        <h2><a href="memo.php?id=<?php echo $id; ?>"><?php echo htmlspecialchars(mb_substr($memo, 0, 50)); ?></a></h2>
        <time><?php echo htmlspecialchars($created); ?></time>
    </div>
    <hr>
    <?php endwhile; ?>

    <p>
    <?php if ($page>1): ?>
        <a href="?page=<?php echo $page-1; ?>"><?php echo $page-1; ?>ページ目へ</a> | 
    <?php endif; ?>
    <?php if ($page<$max_page): ?>
    <a href="?page=<?php echo $page+1; ?>"><?php echo $page+1; ?>ページ目へ</a>
    <?php endif; ?>
    </p>
</body>
</html>