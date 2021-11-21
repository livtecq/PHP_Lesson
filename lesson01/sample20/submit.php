<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sample20</title>
</head>
<body>
    <!-- フォームからの入力を受け取る -->
    <!-- <p>お名前：<?php echo $_REQUEST['my_name']; ?></p> -->

    <!-- JavaScriptなどのプログラムが動作してしまうため安全性を考慮する -->
    <!-- <p>お名前：<?php echo htmlspecialchars($_REQUEST['my_name'], ENT_QUOTES); ?></p> -->

    <!-- フォームがからの場合実行しないようif構文を追加。 -->
    <!-- <?php if (!empty($_REQUEST['my_name'])): ?>
    <p>お名前：<?php echo htmlspecialchars($_REQUEST['my_name'], ENT_QUOTES); ?></p>
    <?php endif; ?> -->

    <!-- GET POSTの違い htmlのメソッドを合わせる必要がある。 -->
    <!-- 上で使用している$$_REQUESTは GET POST 両方受け取れる。 -->
    <!-- <?php if (!empty($_GET['my_name'])): ?>
    <p>お名前：<?php echo htmlspecialchars($_GET['my_name'], ENT_QUOTES); ?></p>
    <?php endif; ?> -->

    <!-- <?php if (!empty($_POSTO['my_name'])): ?>
    <p>お名前：<?php echo htmlspecialchars($_POSR['my_name'], ENT_QUOTES); ?></p>
    <?php endif; ?> -->
    
    <!-- ただしPOSTを$_REQUESTで受け取ってしまうとURLによって値の変更ができてしまう為、POSTの場合は$_POSTで受け取るほうがいい。 -->
    <?php if (!empty($_REQUEST['my_name'])): ?>
    <p>お名前：<?php echo htmlspecialchars($_REQUEST['my_name'], ENT_QUOTES); ?></p>
    <?php endif; ?>
</body>
</html>