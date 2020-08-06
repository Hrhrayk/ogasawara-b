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
for ($i=1; $i<=10; $i++) {
$foodname    = $_POST['食品名'.$i];    
$kazu   = $_POST['数量'.$i];       
$buydate  = $_POST['購入日'.$i];            
$Expiration =$_POST['消費期限'.$i];


# DBへの登録
require 'db.php'; # 接続
if (($foodname != null) and ($kazu != null) && ($buydate != null))
{
$sql = "INSERT INTO tourokutable(食品名,数量,購入日,消費期限日) VALUES ('$foodname','$kazu','$buydate','$Expiration')"; 
$prepare = $db->prepare($sql);                                 # 準備 
 #$prepare->bindValue($foodname,`食品名`,PDO::PARAM_STR);            # 埋め込み1
 #$prepare->bindValue($kazu,`数量`,PDO::PARAM_STR);         # 埋め込み2
 #$prepare->bindValue($buydate,`購入日`,PDO::PARAM_STR);            # 埋め込み3
$prepare->execute();  
                                   
}
}

?>
<p><a href="foodlist.php">登録</a></p>
</body>
</html>
