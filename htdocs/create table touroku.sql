create table 登録食品テーブル (
  id int primary key auto_increment, # ここはいつも同じ
  食品名 varchar(40) not null,
  数量 int not null,
  購入日 date not null # 最後にはカンマがないことに注意．
);
