<!DOCTYPE html>

<html lang="ja">
<head>
<meta charset="UTF-8" />
<link rel='stylesheet' href='style.css' />
<title>DBへの登録処理</title>
</head>

<body>

<?php
# 送信されたデータの取得
$food    = $_POST['食品名'];    
$kazu   = $_POST['数量'];       
$buydate  = $_POST['購入日'];            

# DBへの登録
require 'db.php'; # 接続
    $sql = "INSERT INTO 登録食品テーブル(食品名,数量,購入日) VALUES ('$food','$kazu','$buydate')"; 
$prepare = $db->prepare($sql);                                 # 準備 
# $prepare->bindValue($food,`食品名`,PDO::PARAM_STR);            # 埋め込み1
# $prepare->bindValue($kazu,`数量`,PDO::PARAM_STR);         # 埋め込み2
# $prepare->bindValue($buydate,`購入日`,PDO::PARAM_STR);            # 埋め込み3
$prepare->execute();                                           # 実行

require 'foodlist.php';

?>
<p><a href="foodlist.php">確認</a></p>
</body>
</html>
