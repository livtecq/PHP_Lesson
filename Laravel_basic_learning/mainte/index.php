<?php

require 'db_connection.php';

// ユーザー入力なし query
// $sql = 'select * from contacts where id = 1'; //sql
// $stmt = $pdo->query($sql); // sql実行 ステートメント

// $result = $stmt->fetchall();

// echo '<pre>';
// var_dump($result);
// echo '</pre>';



// ユーザー入力あり prepare, bind, execute 悪意ユーザ delete * SQLインジェクション対策
// $sql = 'select * from contacts where id = ?'; // プレースホルダ
$sql = 'select * from contacts where id = :id'; // 名前付きプレースホルダ
$stmt = $pdo->prepare($sql);// プリペアードステートメント
$stmt->bindValue('id', 1, PDO::PARAM_INT);//紐付け
$stmt->execute(); // 実行

$result = $stmt->fetchall();

echo '<pre>';
var_dump($result);
echo '</pre>';

// トランザクションまとまって処理 beginTransaction, commit, rollback
// ex)銀行 残高を確認 ->A さんから引き落とし ->B さんに振込

$pdo->beginTransaction();

try{

// sql処理
$stmt = $pdo->prepare($sql);// プリペアードステートメント
$stmt->bindValue('id', 1, PDO::PARAM_INT);// 紐付け
$stmt->execute(); // 実行

$pdo->commit();

}catch(PDOException $e){
  
  $pdo->rollback();// 更新のキャンセル
}