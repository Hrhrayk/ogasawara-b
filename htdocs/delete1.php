<!DOCTYPE html>

<html lang="ja">
<head>
<meta charset="UTF-8" />
<link rel='stylesheet' href='style.css' />
<title>DBに登録されてるデータの削除処理</title>
</head>

<body>

<?php

# 送信されたデータの取得
$food = $_POST['selectedid'];     # 削除する食品        

# DBへの登録
require 'db.php'; # 接続

# SQL文の作成（選択されたIDのデータを削除する）
    $sql = "DELETE FROM tourokutable WHERE 食品名 = /"$food/""; 

$prepare = $db->prepare($sql);                  # 準備

$prepare->execute();                                           # 実行

    require 'foodlist.php';

?>

</body>
</html>