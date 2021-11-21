<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>page02</title>
</head>
<body>
    <!-- ページを跨ぐと値を取得できない。 -->
    index.phpに記載した変数の値：<?php echo $value; ?><br>
    Cookieの値：<?php echo $_COOKIE['message']; ?>
</body>
</html>