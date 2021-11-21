<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sample03</title>
</head>
<body>
    <!-- PHPでDBにデータを挿入する -->
    <?php
        // $db = new mysqli('localhost:8889', 'root', 'root', 'mydb');
        // $ret = $db->query('insert into memos (memo) values("PHPからのメモです")');
        // if ($ret) {
        //     echo 'データを挿入しました';
        // } else {
        //     echo $db->error;
        // }
    ?>

    <!-- PHPでSQLを組み立てる -->
    <?php
        $db = new mysqli('localhost:8889', 'root', 'root', 'mydb');
        $message = "フォームから入力した値";

        // 実際には動作するが、フォームの値が不正なものであればDB壊れてしまう可能性、データ流出の可能性もある。
        // $ret = $db->query('insert into memos (memo) values("' . $message . '")');
        if ($ret) {
            echo 'データを挿入しました';
        } else {
            echo $db->error;
        }
    ?>


</body>
</html>