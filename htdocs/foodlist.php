<!DOCTYPE html>
  <html lang="ja">

    <head>
      <meta charset="UTF-8" />
      <link rel='stylesheet' href='style.css' />
      <title>消費期限管理システム</title>
    </head>

<body bgcolor="White">
   <div class="title">
     <span class="bar">
       <b><center>消費期限管理システム</center>
          <center>食品リスト</center>
          <table border="1">
          <tr><center>
    <th>食品名</th>
    <th>数量</th>
    <th>購入日</th>
    <th>消費期限日</th>
    </center></tr>
          </b>
      </bar>
    </div>
  
<?php
require 'db.php';                               # 接続
$sql = 'SELECT * FROM 登録食品テーブル WHERE 1';                  # SQL文
$prepare = $db->prepare($sql);                  # 準備
$prepare->execute();                            # 実行
$result = $prepare->fetchAll(PDO::FETCH_ASSOC); # 結果の取得

foreach ($result as $row) {
  $food = h($row['食品名']);
  $kazu     = h($row['数量']);
  $buydate     = h($row['購入日']);
    echo '<tr>' .
    "<td>{$food}</td>".
    "<td>{$kazu}</td>".
    "<td>{$buydate}</td>".
    '</tr>';

}
?>

<?php
require 'db.php';                               # 接続
$sql = 'DELETE * FROM 登録食品テーブル WHERE 1';                  # SQL文
$prepare = $db->prepare($sql);                  # 準備
$prepare->execute();                            # 実行
$result = $prepare->fetchAll(PDO::FETCH_ASSOC); # 結果の取得

foreach ($result as $row) {
  $food = h($row['食品名']);
  $kazu     = h($row['数量']);
  $buydate     = h($row['購入日']);
    echo '<tr>' .
    "<td>{$food}</td>".
    "<td>{$kazu}</td>".
    "<td>{$buydate}</td>".
    '</tr>';

}


</table>

<DELETE FROM mydb WHERE id = 1;>

dt.setDate(dt.getDate() + 10);


<br>
<center>
    <a href="index.php" class="btn-circle-fishy2">
    <font size='6'>メニュー</font>
    </a>
</center>
<br>
    </body>
</html>