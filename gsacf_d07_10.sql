-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- ホスト: 127.0.0.1
-- 生成日時: 2020-12-24 14:48:42
-- サーバのバージョン： 10.4.17-MariaDB
-- PHP のバージョン: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- データベース: `gsacf_d07_10`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `form_table`
--

CREATE TABLE `form_table` (
  `id` int(12) NOT NULL,
  `company` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(13) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `send_time` datetime(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- テーブルのデータのダンプ `form_table`
--

INSERT INTO `form_table` (`id`, `company`, `name`, `phone`, `email`, `content`, `send_time`) VALUES
(3, '幸せになりたい株式会社', '佐々木健太郎', '090－8888－8888', 'texttext@gmail.com', '最高に幸せになりたいです。詳しいお話をお聞きしたいです。', '2020-12-24 01:06:07.000000'),
(4, '株式会社大晦日', '坂上忍', '090-8888－8888', 'texttext@gmail.com', '最近眠れなくて困っています。', '2020-12-24 22:36:39.000000'),
(5, '株式会社サランヘヨ', '朴賛浩', '090-8888－8888', 'texttext@gmail.com', '修行をしたいです', '2020-12-24 22:38:27.000000'),
(6, '(株)レッチリ', 'フリー', '090－8888－8888', 'texttext@gmail.com', '知らん間に有名になってましたわ', '2020-12-24 22:39:49.000000'),
(7, 'サンタマリア㈱', 'ユースケ・サンタマリア', '090－8888－8888', 'texttext@gmail.com', '最近仕事がないです', '2020-12-24 22:41:16.000000'),
(8, '㈱クリスマス', '三田敏夫', '090－8888－8888', 'texttext@gmail.com', 'クリスマスが終わりました', '2020-12-24 22:43:17.000000');

-- --------------------------------------------------------

--
-- テーブルの構造 `todo_table`
--

CREATE TABLE `todo_table` (
  `id` int(12) NOT NULL,
  `todo` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deadline` date NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- テーブルのデータのダンプ `todo_table`
--

INSERT INTO `todo_table` (`id`, `todo`, `deadline`, `created_at`, `updated_at`) VALUES
(3, 'カレーを作る', '2020-12-17', '2020-12-22 00:00:00', '2020-12-19 15:59:19'),
(4, '買い物をする', '2020-12-29', '2020-12-31 00:00:00', '2020-12-19 15:59:19'),
(5, 'お参りする', '2020-12-01', '2021-01-05 00:00:00', '2020-12-19 15:59:19'),
(6, '実家に帰る', '2020-12-06', '2021-01-05 00:00:00', '2020-12-19 15:59:19'),
(7, '課題をやる', '2020-12-06', '2020-12-08 00:00:00', '2020-12-19 15:59:19'),
(8, '掃除をする', '2020-12-01', '2020-12-31 00:00:00', '2020-12-19 16:02:14'),
(9, 'JSの勉強', '2020-12-04', '2020-12-25 00:00:00', '2020-12-19 16:02:14'),
(10, 'ケーキを買う', '2020-12-24', '2020-12-25 00:00:00', '2020-12-19 16:02:15'),
(11, 'ケーキを食べる', '2020-12-19', '2020-12-25 00:00:00', '2020-12-19 16:02:15'),
(12, '銀行に行く', '2020-12-03', '2020-12-04 00:00:00', '2020-12-19 16:02:15'),
(13, '魚', '2020-12-01', '2020-12-19 16:44:11', '2020-12-19 16:44:11'),
(14, '魚を買う', '2020-12-05', '2020-12-19 16:47:31', '2020-12-19 16:47:31'),
(15, '鮮魚', '2020-12-24', '2020-12-19 17:10:53', '2020-12-19 17:10:53'),
(16, 'aaaaa', '2020-12-25', '2020-12-19 17:11:09', '2020-12-19 17:11:09'),
(17, '魚魚', '2021-01-01', '2020-12-19 17:13:01', '2020-12-19 17:13:01');

--
-- ダンプしたテーブルのインデックス
--

--
-- テーブルのインデックス `form_table`
--
ALTER TABLE `form_table`
  ADD PRIMARY KEY (`id`);

--
-- テーブルのインデックス `todo_table`
--
ALTER TABLE `todo_table`
  ADD PRIMARY KEY (`id`);

--
-- ダンプしたテーブルの AUTO_INCREMENT
--

--
-- テーブルの AUTO_INCREMENT `form_table`
--
ALTER TABLE `form_table`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- テーブルの AUTO_INCREMENT `todo_table`
--
ALTER TABLE `todo_table`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
