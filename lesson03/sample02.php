<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sample03</title>
</head>
<body>
    <!-- PHPでSELECT構文を実行する -->
    <?php
        // $db = new mysqli('localhost:8889', 'root', 'root', 'mydb');
        // $records = $db->query('select * from my_items');
        // if($records) {
        //     while ($record = $records->fetch_assoc()) {
        //         // カラム名大文字小文字は正しく入力しないとエラーになる。(['ITEM_NAME'] ['item_name'])
        //         echo $record['ITEM_NAME'] . '<br>';
        //     }
        // } else {
        //     echo $db->error;
        // }

        // 変数の中身を確認する
        // var_dump($records);

        // echoでは正しく表示されない。変数の中身がObjectのため。
        // echo $records;

    ?>

    <!-- 別名を使ってPHPでCOUNTの結果を表示する -->
    <?php
        $db = new mysqli('localhost:8889', 'root', 'root', 'mydb');
        
        // 別名は as で変更する。
        $records = $db->query('select count(*) as cnt from my_items');
        if($records) {
            while ($record = $records->fetch_assoc()) {
                // カラム名大文字小文字は正しく入力しないとエラーになる。(['ITEM_NAME'] ['item_name'])
                echo $record['cnt'] . '<br>';
            }
        } else {
            echo $db->error;
        }

    ?>

</body>
</html>