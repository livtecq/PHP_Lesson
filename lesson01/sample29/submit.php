<?php
// index.htmlで使用しているnameの値を$_FILES['']に記述する
$file = $_FILES['picture'];

// データの確認
// var_dump($file);

// 受け取りたいデータの絞り込み
if ($file['type'] === 'image/jpeg' || $file['type'] === 'image/png') {

    // アップロードされたファイルの保存先を変更する
    $path = 'images/' . $file['name'];

    // 同じディレクトリに保存
    // $success = move_uploaded_file($file['tmp_name'], $file['name']);
    // imagesフォルダに保存
    $success = move_uploaded_file($file['tmp_name'], $path);

    if ($success) {
        echo '成功しました';
    } else {
        echo '失敗しました';
    }
} else {
    echo 'ファイル形式が不正です';
}
?>