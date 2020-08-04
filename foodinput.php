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
       <center>食品入力</center>
    <tr><center>
    <th>食品名</th>
    <th>数量</th>
    <th>購入日</th>
    </center></tr>
       </b>
      </bar>
    </div>

  <body>
  <form action="food+.php" method="post">
  <?php
         require 'db.php';                               # 接続
         $sql = 'SELECT * FROM `食品テーブル`';          # SQL文
         $prepare = $db->prepare($sql);                  # 準備
         $prepare->execute();                            # 実行
         $result = $prepare->fetchAll(PDO::FETCH_ASSOC); # 結果の取得

         echo  "<select name=\"selectedfood\">";
         foreach ($result as $row) {
           $foodid    = h($row['id']);
           $foodname  = h($row['食品名']);
           $Expirationdate  = h($row['消費期限日']);
           echo "<option value={$foodid}>{$foodname}</option>";
         }
       ?>
      <input type="text" name="数量">
      <input type="date" name="購入日">
       
      <br>
        <input type="submit" value="登録"> 
      <br>
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
