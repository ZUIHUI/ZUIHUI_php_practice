-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 2021-06-11 09:16:40
-- 伺服器版本： 10.4.19-MariaDB
-- PHP 版本： 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `DB_POKEMON`
--
CREATE DATABASE IF NOT EXISTS `DB_POKEMON` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `DB_POKEMON`;

-- --------------------------------------------------------

--
-- 資料表結構 `count`
--

CREATE TABLE `count` (
  `num` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 傾印資料表的資料 `count`
--

INSERT INTO `count` (`num`) VALUES
(6);

-- --------------------------------------------------------

--
-- 資料表結構 `note`
--

CREATE TABLE `note` (
  `id` int(11) NOT NULL,
  `title` varchar(64) NOT NULL,
  `Description` mediumtext NOT NULL,
  `TIME` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 傾印資料表的資料 `note`
--

INSERT INTO `note` (`id`, `title`, `Description`, `TIME`) VALUES
(32, '寶可夢圖鑑', '好讚超讚有夠讚啦', '2021-05-23 08:55:09'),
(33, '皮卡丘跳遠', '皮卡乒乓乒丘丘丘乓乒乓', '2021-05-23 12:12:58'),
(35, '5/26', '我把剛寫完的檔案刪掉了....\r\n', '2021-05-26 12:19:28'),
(36, '總算啊', '我總算搞定session了', '2021-05-28 02:30:31'),
(38, '天氣預報', '5/28 天氣晴\r\n風大且風熱\r\n希望中南部下大雨', '2021-05-28 06:12:23'),
(41, '6/1', '請政府加油', '2021-06-01 08:24:56'),
(42, '樓上', '不 我們不談政治', '2021-06-01 08:25:24'),
(43, '下雨天', '轟隆隆 隆隆隆隆 衝衝衝衝 拉風\r\n引擎發動 so come on 引擎發動 so come on\r\n一瞬間 踩下油門 催乎盡磅(台) 乘風 衝 衝\r\n讓窗外的\r\n風 吹動每一個毛孔 我是今夜 最 稀有的品種\r\n讓 看到的人以為是夢 還沒醒來 就已經無影無蹤', '2021-06-04 07:34:24'),
(47, '6/10', '發現 powerpoint 很厲害', '2021-06-10 13:24:46');

-- --------------------------------------------------------

--
-- 資料表結構 `number`
--

CREATE TABLE `number` (
  `no` int(11) NOT NULL,
  `username` varchar(32) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `password` varchar(32) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `celephone` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 傾印資料表的資料 `number`
--

INSERT INTO `number` (`no`, `username`, `password`, `celephone`) VALUES
(1, 'test', '1234', 777777777),
(2, 'aaa', 'aaa', 7778878),
(36, 'www', 'www', 86586);

-- --------------------------------------------------------

--
-- 資料表結構 `pk_skill`
--

CREATE TABLE `pk_skill` (
  `id` int(11) NOT NULL,
  `name` varchar(32) NOT NULL,
  `enable` varchar(32) NOT NULL,
  `des` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 傾印資料表的資料 `pk_skill`
--

INSERT INTO `pk_skill` (`id`, `name`, `enable`, `des`) VALUES
(1, '十萬伏特', '電屬性', '當前版本最佳攻擊組合配招為電光一閃(Quick Attack) + 瘋狂伏特(Wild Charge)，當前版本最佳防守組合配招為電光一閃(Quick Attack)+瘋狂伏特(Wild Charge)'),
(2, '加農水砲', '水屬性', '當前版本最佳攻擊組合配招為咬住(Bite) + 火箭頭錘(Skull Bash)，當前版本最佳防守組合配招為水槍(Water Gun)+冰凍光束(Ice Beam)'),
(3, '水流尾', '水屬性', '當前版本最佳攻擊組合配招為意念頭錘(Zen Headbutt) + 水流尾(Aqua Tail)，當前版本最佳防守組合配招為意念頭錘(Zen Headbutt)+水流尾(Aqua Tail)'),
(4, '火焰旋渦', '火屬性', '當前版本最佳攻擊組合配招為火焰旋渦(Fire Spin) + 過熱(Overheat)，當前版本最佳防守組合配招為火焰旋渦(Fire Spin)+過熱(Overheat)'),
(5, '噴射火焰', '火屬性', '當前版本最佳攻擊組合配招為火焰旋渦(Fire Spin) + 過熱(Overheat)，當前版本最佳防守組合配招為火焰旋渦(Fire Spin)+過熱(Overheat)'),
(6, '大聲咆哮', '無屬性', '當前版本最佳攻擊組合配招為大聲咆哮(Snarl) + 瘋狂伏特(Wild Charge)，當前版本最佳防守組合配招為雷電牙(Thunder Fang)+大字爆炎(Fire Blast)'),
(7, '極巨砲', '龍屬性', '當前版本最佳攻擊組合配招為十字毒刃(Cross Poison)+龍之波動(Dragon Pulse)+噴射火焰(Jet flame)+極巨砲(Dynamax Cannon)'),
(8, '火焰牙', '火屬性', '當前版本最佳攻擊組合配招為火焰牙(Fire Fang) + 過熱(Overheat)，當前版本最佳防守組合配招為火焰牙(Fire Fang)+過熱(Overheat)'),
(9, '精神強念', '超能力屬性', '當前版本最佳攻擊組合配招為子彈拳(Bullet Punch) + 精神強念(Psychic)，當前版本最佳防守組合配招為意念頭錘(Zen Headbutt)+精神強念(Psychic)'),
(10, '攀瀑', '水屬性', '當前版本最佳攻擊組合配招為攀瀑(Waterfall) + 逆麟(Outrage)，當前版本最佳防守組合配招為攀瀑(Waterfall)+逆麟(Outrage)'),
(11, '日光束', '草屬性', '當前版本最佳攻擊組合配招為大聲咆哮(Snarl) + 日光束(Solar Beam)，當前版本最佳防守組合配招為伏特替換(Volt Switch)+精神強念(Psychic)'),
(12, '暴風', '飛行屬性', '當前版本最佳攻擊組合配招為龍尾(Dragon Tail) + 逆麟(Outrage)，當前版本最佳防守組合配招為龍尾(Dragon Tail)+逆麟(Outrage)'),
(13, '地震', '地面屬性', '當前版本最佳攻擊組合配招為龍尾(Dragon Tail) + 地震(Earthquake)，當前版本最佳防守組合配招為龍尾(Dragon Tail)+逆麟(Outrage)'),
(14, '氣旋攻擊', '飛行屬性', '當前版本最佳攻擊組合配招為龍尾(Dragon Tail) + 神鳥猛擊(Sky Attack)，當前版本最佳防守組合配招為神通力(Extrasensory)+神鳥猛擊(Sky Attack)'),
(15, '神通力', '超能力屬性', '當前版本最佳攻擊組合配招為神通力(Extrasensory) + 大字爆炎(Fire Blast)，當前版本最佳防守組合配招為神通力(Extrasensory)+日光束(Solar Beam)'),
(16, '破壞光線', '一般屬性', '當前版本最佳攻擊組合配招為念力(Confusion) + 暗影球(Shadow Ball)，當前版本最佳防守組合配招為念力(Confusion)+精神強念(Psychic)'),
(17, '流星群', '龍屬性', '當前版本最佳攻擊組合配招為龍尾(Dragon Tail) + 流星群(Draco Meteor)，當前版本最佳防守組合配招為龍尾(Dragon Tail)+流星群(Draco Meteor)'),
(18, '擊落', '岩石屬性', '當前版本最佳攻擊組合配招為擊落(Smack Down) + 大字爆炎(Fire Blast)，當前版本最佳防守組合配招為擊落(Smack Down)+咬碎(Crunch)'),
(19, '惡之波動', '惡屬性', '當前版本最佳攻擊組合配招為突襲(Sucker Punch) + 暗影球(Shadow Ball)，當前版本最佳防守組合配招為禍不單行(Hex)+暗影球(Shadow Ball)');

-- --------------------------------------------------------

--
-- 資料表結構 `pokemon`
--

CREATE TABLE `pokemon` (
  `id` int(11) NOT NULL,
  `name` varchar(32) NOT NULL,
  `race` varchar(32) NOT NULL,
  `enable` varchar(32) NOT NULL,
  `sk_name` varchar(32) NOT NULL,
  `pk_des` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 傾印資料表的資料 `pokemon`
--

INSERT INTO `pokemon` (`id`, `name`, `race`, `enable`, `sk_name`, `pk_des`) VALUES
(1, '皮卡丘', '鼠寶可夢', '電', '十萬伏特', '越是能製造出強大電流的皮卡丘，臉頰上的囊就越柔軟，同時也越有伸展性。'),
(2, '水箭龜', '甲殼寶可夢', '水', '加農水砲', '甲殼上的噴射口能夠精確地瞄準目標。射出的水彈可以命中５０公尺外的空罐子。'),
(3, '可達鴨', '鴨寶可夢', '水', '水流尾', '一使出念力就會頭痛，所以平常盡量什麼事都不做，整天不停地發呆。'),
(4, '超級噴火龍Ｘ', '火焰寶可夢', '火&龍', '火焰旋渦', '會在空中四處飛翔尋找強大的對手。在面對比自己弱小的對手時，牠不會吐出那可熔化一切的高溫火焰。'),
(5, '超級噴火龍Ｙ', '火焰寶可夢', '火&飛行', '噴射火焰', '會在空中四處飛翔尋找強大的對手。在面對比自己弱小的對手時，牠不會吐出那可熔化一切的高溫火焰。'),
(6, '六尾', '狐狸寶可夢', '火', '噴射火焰', '雖然還是孩子，但已擁有美麗的６根尾巴。長大後尾巴會變得更多。'),
(7, '風速狗', '傳說寶可夢', '火', '大聲咆哮', '只需要一晝夜時間就能跑完１００００公里的身影令許多人為之沉醉。'),
(8, '無極汰那', '超極巨寶可夢', '毒&龍', '無極光束', '會用胸部的核心吸收伽勒爾的大地湧出的能量，藉以保持自己的活力。'),
(9, '萊希拉姆', '白陽寶可夢', '火&龍', '火焰牙', '能以火焰將世界燃燒殆盡的傳說的寶可夢。會幫助建構真實世界的人。'),
(10, '巨金怪', '鐵足寶可夢', '剛&超能力', '精神強念', '除了精神力量，也以怪力為傲。會用４隻腳捕捉獵物，再用鋼鐵爪子封鎖對方的行動。'),
(11, '暴鯉龍', '兇惡寶可夢', '水&飛行', '攀瀑', '性情非常凶暴。從嘴裡發出的破壞光線能夠將一切燃燒殆盡。'),
(12, '夢幻', '新種寶可夢', '超能力', '日光束', '據說牠有著所有寶可夢的基因。因為可以隨心所欲地隱形，所以就算接近人類也完全不會被察覺。'),
(13, '烈空坐', '天空寶可夢', '龍&飛行', '暴風', '據說已經生存了數億年。世上留存著牠調解了固拉多與蓋歐卡之間爭鬥的傳說。'),
(14, '烈咬陸鯊', '音速寶可夢', '龍&地面', '地震', '以音速飛行來尋找獵物。會為了爭奪食物而與暴飛龍展開空中戰鬥。'),
(15, '洛奇亞', '潛水寶可夢', '超能力&飛行', '氣旋攻擊', '有著只要輕輕揮動翅膀就能吹走房屋的破壞力，因此躲在不為人知的海底生活。'),
(16, '鳳王', '虹色寶可夢', '火&飛行', '神通力', '據說在不同角度的光線照射下，會閃耀七彩光芒的羽毛能帶來幸福。據說牠住在彩虹的腳下。'),
(17, '超夢', '基因寶可夢', '超能力', '破壞光線', '透過操作基因製造出的寶可夢。人類的科技可以造出牠的身體，卻無法造出一顆溫柔的心。'),
(18, '帕路奇亞', '空間寶可夢', '水&龍', '流星群', '據說住在互相平行的空間之間的狹縫。是在神話中登場的寶可夢。'),
(19, '班基拉斯', '鎧甲寶可夢', '岩石&惡', '擊落', '擁有無論遭受任何攻擊都能毫髮無傷的身體，因此會不斷向對手挑戰。'),
(20, '耿鬼', '影子寶可夢', '幽靈&毒', '惡之波動', '滿月的夜晚，如果影子自己動起來並露出笑容，那肯定是耿鬼搞的鬼。');

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `note`
--
ALTER TABLE `note`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `number`
--
ALTER TABLE `number`
  ADD PRIMARY KEY (`no`);

--
-- 資料表索引 `pk_skill`
--
ALTER TABLE `pk_skill`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `pokemon`
--
ALTER TABLE `pokemon`
  ADD PRIMARY KEY (`id`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `note`
--
ALTER TABLE `note`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `number`
--
ALTER TABLE `number`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `pk_skill`
--
ALTER TABLE `pk_skill`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `pokemon`
--
ALTER TABLE `pokemon`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
