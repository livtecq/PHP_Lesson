<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sample04</title>
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

        $stmt = $db->prepare('insert into memos (memo) values(?)');
        if (!$stmt):
            // die とはメッセージを表示してプログラムを終了する。
            die($db->error);
        endif;
        // bind_paramの第一引数には型を入れる(s = String, i = INT)
        // 複数ある場合は続けて記述もできる。('si'等)
        $stmt->bind_param('s', $message);
        $ret = $stmt->execute();

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