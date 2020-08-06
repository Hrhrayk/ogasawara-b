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
      <center><table border="1">
          <tr><center>
    <th>食品名</th>
    <th>数量</th>
    <th>購入日</th>
    <th>消費期限日</th>
    <th>削除</th>
    </center></tr>
  
<?php

require 'db.php';                               # 接続                              
$sql = 'SELECT * FROM tourokutable WHERE 1  ORDER BY 消費期限日  ASC';               # SQL文
$prepare = $db->prepare($sql);                  # 準備
$prepare->execute();                            # 実行
$result = $prepare->fetchAll(PDO::FETCH_ASSOC); # 結果の取得

foreach ($result as $row) {
  $food = h($row['食品名']);
  $kazu     = h($row['数量']);
  $buydate     = h($row['購入日']);
  $Limitdate  = h($row['消費期限日']);
  
  echo '<tr>' .
  "<td>{$food}</td>".
  "<td>{$kazu}</td>".
  "<td>{$buydate}</td>".
  "<td>{$Limitdate}</td>".
  "<td>
   <form action=\"delete1.php\" method=\"post\">
   <input type=\"submit\" value=\"削除\">
   <input type=\"hidden\" name=\"selectedid\" value="$food">
   </form>
   </td>".
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