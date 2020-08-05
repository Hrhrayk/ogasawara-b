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
          </b>
      </bar></div>
      <center>
          <table border="1">
          <tr><center>
    <th>食品名</th>
    <th>数量</th>
    <th>購入日</th>
    <th>消費期限日</th>
    </center></tr>
  
    <form action="derete.php" method="post">  

<?php
require 'db.php';                               # 接続
$sql = 'SELECT * FROM tourokutable WHERE 1';                  # SQL文
$prepare = $db->prepare($sql);                  # 準備
$prepare->execute();                            # 実行
$result = $prepare->fetchAll(PDO::FETCH_ASSOC); # 結果の取得

foreach ($result as $row) {
  $food = h($row['食品名']);
  $kazu     = h($row['数量']);
  $buydate     = h($row['購入日']);
  $Expirationdate  = h($row['消費期限日']);

  $buydate = "$buydate";
 # echo date("Y-m-d",strtotime($buydate . "+{$Expirationdate} day"));
 $Expirationdate = date("Y-m-d",strtotime($buydate . "+{$Expirationdate} day"));
  
  echo '<tr>' .
  "<td>{$food}</td>".
  "<td>{$kazu}</td>".
  "<td>{$buydate}</td>".
  "<td>{$Expirationdate}</td>".
  '</tr>';


}
  echo "</table>";
   echo "</center>";
?>

</form>

<br>
<center>
    <a href="index.php" class="btn-circle-fishy2">
    <font size='6'>メニュー</font>
    </a>
</center>
<br>
    </body>
</html>