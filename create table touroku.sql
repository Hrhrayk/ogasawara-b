create table tourokutable (
  id int primary key auto_increment, # ここはいつも同じ
  食品名 varchar(40) not null,
  数量 int not null,
  購入日 date not null,
  消費期限日 int not null # 最後にはカンマがないことに注意．
);
