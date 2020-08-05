-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- ホスト: 127.0.0.1
-- 生成日時: 2020-08-05 08:59:49
-- サーバのバージョン： 10.4.11-MariaDB
-- PHP のバージョン: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- データベース: `mydb`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `foodtable`
--

CREATE TABLE `foodtable` (
  `id` int(11) NOT NULL,
  `食品名` varchar(40) NOT NULL,
  `消費期限` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- テーブルのデータのダンプ `foodtable`
--

INSERT INTO `foodtable` (`id`, `食品名`, `消費期限`) VALUES
(1, '豚肉', 3),
(2, '牛肉', 3),
(3, '鶏肉', 3),
(4, '牛乳', 3),
(5, 'バナナ', 2),
(6, '食パン', 7),
(7, 'エビ', 3),
(8, '明太子', 3),
(9, '生クリーム', 7),
(10, '卵', 7),
(11, 'オクラ', 3),
(12, 'エノキ', 3),
(13, 'もやし', 7),
(14, 'エリンギ', 3),
(15, 'えだまめ', 1),
(16, 'レタス', 4),
(17, '小松菜', 2),
(18, 'きゅうり', 7),
(19, 'カリフラワー', 3),
(20, 'かぶ', 2),
(21, 'カット野菜', 3),
(22, 'かいわれ', 3),
(23, 'セロリ', 7),
(24, 'しいたけ', 5),
(25, '大根', 5),
(26, '人参', 5),
(27, 'なす', 7),
(28, 'ピーマン', 7),
(29, '白菜', 5),
(30, 'ネギ', 7);

-- --------------------------------------------------------

--
-- テーブルの構造 `table1`
--

CREATE TABLE `table1` (
  `id` int(11) NOT NULL,
  `varcharA` varchar(40) NOT NULL,
  `intA` int(11) NOT NULL,
  `intB` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- テーブルのデータのダンプ `table1`
--

INSERT INTO `table1` (`id`, `varcharA`, `intA`, `intB`) VALUES
(1, 'A', 1280, 1),
(2, 'B', 2980, 0),
(3, 'C', 198, 121);

-- --------------------------------------------------------

--
-- テーブルの構造 `tourokutable`
--

CREATE TABLE `tourokutable` (
  `id` int(11) NOT NULL,
  `食品名` varchar(40) NOT NULL,
  `数量` int(11) NOT NULL,
  `購入日` date NOT NULL,
  `消費期限日` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- テーブルのデータのダンプ `tourokutable`
--

INSERT INTO `tourokutable` (`id`, `食品名`, `数量`, `購入日`, `消費期限日`) VALUES
(1, '食パン', 2, '2020-08-05', 7),
(2, '豚肉', 2000, '2020-08-05', 7);

--
-- ダンプしたテーブルのインデックス
--

--
-- テーブルのインデックス `foodtable`
--
ALTER TABLE `foodtable`
  ADD PRIMARY KEY (`id`);

--
-- テーブルのインデックス `table1`
--
ALTER TABLE `table1`
  ADD PRIMARY KEY (`id`);

--
-- テーブルのインデックス `tourokutable`
--
ALTER TABLE `tourokutable`
  ADD PRIMARY KEY (`id`);

--
-- ダンプしたテーブルのAUTO_INCREMENT
--

--
-- テーブルのAUTO_INCREMENT `foodtable`
--
ALTER TABLE `foodtable`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- テーブルのAUTO_INCREMENT `table1`
--
ALTER TABLE `table1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- テーブルのAUTO_INCREMENT `tourokutable`
--
ALTER TABLE `tourokutable`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
