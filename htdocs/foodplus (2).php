<!DOCTYPE html>

<html lang="ja">
<head>
<meta charset="UTF-8" />
<link rel='stylesheet' href='style.css' />
<title>DBへの登録処理</title>
</head>

<body>

<?php
for ($i=1;$i<=10;$i++){

    # 送信されたデータの取得
    $foodname    = $_POST['食品名'.$i];    
    $kazu   = $_POST['数量'.$i];       
    $buydate  = $_POST['購入日'.$i];            

    if (($foodname != Null) and ($kazu != Null) and ($buydate != Null)) {
        # DBへの登録
        require 'db.php'; # 接続

        # 消費期限日の取得
        $sql = "SELECT * FROM foodtable WHERE 食品名=\"$foodname\"";
        $prepare = $db->prepare($sql);                  # 準備 
        $prepare->execute();
        $result = $prepare->fetchAll(PDO::FETCH_ASSOC); # 結果の取得
        foreach ($result as $row) {
            $Expiration = h($row['消費期限日']);
        }

        $targetdate = strtotime($buydate);
        $Limitdate = date('yy-m-d', strtotime("+$Expiration day",$targetdate));

        $sql = "INSERT INTO tourokutable (食品名,数量,購入日,消費期限日) VALUES ('$foodname','$kazu','$buydate','$Limitdate')"; 
        $prepare = $db->prepare($sql);                              # 準備 
        $prepare->execute();
    }
}

require 'foodlist.php';
?>

</body>
</html>
