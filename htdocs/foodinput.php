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
       <center>食品入力</center></b>
      </bar>
    </div>

  <body>
  <form action="foodplus.php" method="post">
      <?php
      echo "<center>";

      echo "<table border=\"1\">";
      echo "<tr>";
      echo "<th>食品名</th>";
      echo "<th>数量</th>";
      echo "<th>購入日</th>";
      echo "</tr>";

      for ($i=1; $i <= 10; $i++) { 
        echo "<tr>";
        require 'db.php';                               # 接続
        $sql = 'SELECT * FROM `foodtable` WHERE 1';  # SQL文
        $prepare = $db->prepare($sql);                  # 準備
        $prepare->execute();                            # 実行
        $result = $prepare->fetchAll(PDO::FETCH_ASSOC); # 結果の取得
        echo "<td><select name=\"食品名".$i."\">";

        foreach ($result as $row) {
          $foodid    = h($row['id']);
          $foodname  = h($row['食品名']);
          echo "<option value={$foodname}>{$foodname}</option>";
        }
        echo "</select></td>";
        echo "<td><input type=\"text\" name=\"数量".$i."\"></td>";
        echo "<td><input type=\"date\" name=\"購入日".$i."\"></td>";
        echo "</tr>";
      }
      echo "</table>";
      echo "</center>";
      ?>
       <center><input type="submit" value="登録"></center>
    </form>      
</br>
<center>
    <a href="index.php" class="btn-circle-fishy2">
    <font size='6'>メニュー</font>
    </a>
</center>
<br>

  </body>

</html>
