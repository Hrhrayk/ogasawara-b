<meta charset="UTF-8" />
<link rel='stylesheet' href='style.css' />
<title>削除処理</title>
</head>

<body>

<?php
require 'db.php';                               # 接続
$sql = 'DELETE * FROM tourokutable WHERE 1';                  # SQL文
$prepare = $db->prepare($sql);                  # 準備
$prepare->execute();                            # 実行
$result = $prepare->fetchAll(PDO::FETCH_ASSOC); # 結果の取得

?>
<p><a href="foodlist.php">削除を行いますか？</a></p>
</body>
</html>