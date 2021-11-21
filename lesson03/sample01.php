<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sample01</title>
</head>
<body>
    <!-- PHPでMySQLに接続する -->
    <?php
    $db = new mysqli('localhost:8889', 'root', 'root', 'mydb');
    // 新しいテーブルをSQL文で実行する
    // $db->query('create table test(id INT)');

    // テーブルを削除するSQL文
    // $db->query('drop table test');

    // テーブルを削除するSQL文 if exists を追記(存在する場合は)
    // テーブルを削除して、新たに作成する
    // $db->query('drop table if exists test');
    // $db->query('create table test(id INT)');

    // SQLはスペルミスすると、エラーメッセージなどは表示されない。
    // 失敗した場合はfalseを返す
    $db->query('drop table if exists test');
    $success = $db->query('creat table test(id INT)');
    if($success){
        echo 'テーブルを削除して、新たに作成しました。';
    } else {
        echo 'SQLが正常に動作しませんでした';
        echo $db->error;
    }

    
    ?>
</body>
</html>