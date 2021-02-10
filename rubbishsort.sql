-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- 主机： 127.0.0.1
-- 生成日期： 2020-12-26 03:32:10
-- 服务器版本： 10.1.37-MariaDB
-- PHP 版本： 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


--
-- 数据库： `rubbishsort`
--

-- --------------------------------------------------------

--
-- 表的结构 `appointment`
--

CREATE TABLE `appointment` (
  `ano` int(11) NOT NULL,
  `uno` varchar(20) NOT NULL,
  `mno` int(11) NOT NULL,
  `date` date NOT NULL,
  `status` varchar(20) NOT NULL
);

--
-- 转存表中的数据 `appointment`
--

INSERT INTO `appointment` (`ano`, `uno`, `mno`, `date`, `status`) VALUES
(22, '2892', 909, '2020-12-30', '已完成'),
(23, '2893', 909, '2020-12-22', '申请中'),
(24, '2893', 808, '2020-12-30', '预约成功'),
(25, '2890', 505, '2020-12-09', '已完成'),
(26, '2891', 606, '2020-11-30', '已完成'),
(28, '2892', 909, '2020-12-22', '申请中');

-- --------------------------------------------------------

--
-- 表的结构 `category`
--

CREATE TABLE `category` (
  `cno` int(11) NOT NULL,
  `cname` varchar(20) NOT NULL,
  `cintro` varchar(50) NOT NULL
);

--
-- 转存表中的数据 `category`
--

INSERT INTO `category` (`cno`, `cname`, `cintro`) VALUES
(1, '可回收物', '主要是适合回收再利用和资源化再生使用的生活废弃物'),
(2, '有害垃圾', '需要特殊处理'),
(3, '餐厨垃圾', '经生物技术就地处理堆肥，每吨可生产0.6~0.7吨有机肥料'),
(4, '其他垃圾', '采取卫生填埋可有效减少对地下水、地表水、土壤及空气的污染');

-- --------------------------------------------------------

--
-- 表的结构 `knowledge`
--

CREATE TABLE `knowledge` (
  `kno` int(11) NOT NULL,
  `content` varchar(500) NOT NULL,
  `kclass` varchar(20) NOT NULL
);

--
-- 转存表中的数据 `knowledge`
--

INSERT INTO `knowledge` (`kno`, `content`, `kclass`) VALUES
(1, '什么是垃圾分类？\r\n垃圾分类是对垃圾收集处置传统方式的改革，是对垃圾进行有效处置的一种科学管理方法。通过分类投放、分类收集，把有用物资，如纸张、塑料、橡胶、玻璃、瓶罐、金属以及废旧家用电器等从垃圾中分离出来重新回收、利用，变废为宝。', '垃圾分类'),
(2, '一、可回收垃圾\r\n主要包括废纸、塑料、玻璃、金属和布料五大类。 \r\n纸：主要包括报纸、期刊、图书、各种包装纸、办公用纸、广告纸、纸盒等等，但是要注意纸巾和厕所纸由于水溶性太强不可回收。 塑料：主要包括各种塑料袋、塑料包装物、一次性塑料餐盒和餐具、牙刷、杯子、矿泉水瓶、牙膏皮等。 玻璃：主要包括各种玻璃瓶、碎玻璃片、镜子、灯泡、暖瓶等。 金属物：主要包括易拉罐、罐头盒等。 布料：主要包括废弃衣服、桌布、洗脸巾、书包、鞋等。', '垃圾分类'),
(3, '为什么要垃圾分类？\r\n1）减少占地；垃圾分类，去掉能回收的，不易降解的物质，减少垃圾数量达50%以上。2）减少环境污染：废弃的电池等含有金属汞等有毒物质，会对人类产生严重的危害，土壤中的废塑料会导致农作物减产，因此回收利用可以减少危害。3）变废为宝；变废为宝：我国每年使用塑料快餐盒达30亿个，方便面碗5—6亿个，废塑料占生活垃圾的3—7%。1吨废塑料可回炼600公斤无铅汽油和柴油。回收1500吨废纸，可免于砍伐用于生产1200吨纸的林木。', '垃圾分类'),
(4, '二、厨余垃圾\r\n包括剩菜剩饭、骨头、菜根菜叶、果皮等食品类废物，经生物技术就地处理堆肥，每吨可生产0.3吨有机肥。', '垃圾分类'),
(6, '三、有害垃圾\r\n包括废电池、废日光灯管、废水银温度计、过期药品等，这些垃圾需要特殊安全处理。', '垃圾分类'),
(7, '四、其他垃圾\r\n包括除上述几类垃圾之外的砖瓦陶瓷、渣土、卫生间废纸、纸巾等难以回收的废弃物，采取卫生填埋可有效减少对地下水、地表水、土壤及空气的污染', '垃圾分类'),
(8, '厨余垃圾，是易腐有机成分为主的垃圾，如剩饭剩菜，蛋壳果皮，菜帮菜叶等，可以堆积起来，使废弃物的纤维质和有机质腐化，为垃圾堆肥提供优质原料，生产出优质有机肥，有利于改善土壤肥力，减少化肥施用量。', '垃圾处理'),
(9, '可回收垃圾直接送到有关厂里重新加工，废物利用。比如：1吨废纸可再造800公斤的好纸；回收电池可提取稀有金属锌、铜和二氧化锰；回收废塑料可以回炼为燃油。', '垃圾处理'),
(10, '有害垃圾，如废日光灯管、过期药品等可以集中起来焚烧，使垃圾的危害性降低到最低点。另外将有害垃圾分类出来，减少了垃圾中的重金属、有机污染物、致病菌的含量，有利于垃圾的无害化处理，减少了垃圾处理的水、土壤、大气污染风险', '垃圾处理'),
(11, '其他垃圾，如陶瓷、渣土等难以回收，又不危害环境，可以有效填埋，减少对地下水、土壤和空气的污染。', '垃圾处理'),
(12, '减少占地\r\n生活垃圾中有些物质不易降解，使土地受到严重侵蚀。垃圾分类，去掉可以回收的、不易降解的物质，减少垃圾数量达60%以上。', '分类意义'),
(13, '减少环境污染\r\n废弃的电池含有金属汞、镉等有毒的物质，会对人类产生严重的危害；土壤中的废塑料会导致农作物减产；抛弃的废塑料被动物误食，导致动物死亡的事故时有发生。因此回收利用可以减少危害。', '分类意义'),
(14, '变废为宝\r\n中国每年使用塑料快餐盒达40亿个，方便面碗5—7亿个，一次性筷子数十亿双，这些占生活垃圾的8—15%。1吨废塑料可回炼600公斤的柴油。回收1500吨废纸，可免于砍伐用于生产1200吨纸的林木。一吨易拉罐熔化后能结成一吨很好的铝块，可少采20吨铝矿。生活垃圾中有30%—40%可以回收利用，应珍惜这个小本大利的资源。 也可以利用易拉罐制作笔盒，既环保，又节约资源。', '分类意义'),
(15, '国务院批转住房城乡建设部等部门《关于进一步加强城市生活垃圾处理工作意见》是什么时间发布的？2011年4月', '法律法规'),
(16, '哪个国家行政部门负责废弃电器电子产品处理的监督管理工作？', '法律法规'),
(17, '意大利菲腊奥市有一座纪念碑，是由弃置的空瓶．食物包装盒以及其他丢弃物组建的，纪念碑上写着：请保护大自然。您知道这些丢弃的垃圾是从哪里来的吗？海中的垃圾', '其他知识'),
(18, '在我国，由哪一个部门负责全国城市生活垃圾管理工作？住房城乡建设主管部门', '法律法规'),
(19, '世界上最早对包装垃圾分类回收进行立法的是哪个国家？德国', '其他知识'),
(20, '餐厨废弃物资源化利用和无害化处理试点城市启动至今，目前已有多少个城市成为试点？100', '其他知识');

-- --------------------------------------------------------

--
-- 表的结构 `manager`
--

CREATE TABLE `manager` (
  `mno` int(11) NOT NULL,
  `mname` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `phone` varchar(11) NOT NULL
);

--
-- 转存表中的数据 `manager`
--

INSERT INTO `manager` (`mno`, `mname`, `password`, `phone`) VALUES
(505, '阿杰', '123', '12345678955'),
(606, '阿豪', '123', '12345678944'),
(707, '阿三', '123', '12345678933'),
(808, '阿强', '123', '12345678911'),
(909, '阿诗', '123', '12345678922');

-- --------------------------------------------------------

--
-- 表的结构 `manages`
--

CREATE TABLE `manages` (
  `no` int(11) NOT NULL,
  `mno` int(11) NOT NULL,
  `district` varchar(20) NOT NULL
);

--
-- 转存表中的数据 `manages`
--

INSERT INTO `manages` (`no`, `mno`, `district`) VALUES
(1, 909, '番禺区'),
(2, 707, '荔湾区'),
(3, 808, '番禺区'),
(4, 505, '荔湾区'),
(5, 606, '荔湾区');

-- --------------------------------------------------------

--
-- 表的结构 `question`
--

CREATE TABLE `question` (
  `qno` int(11) NOT NULL,
  `ques` varchar(100) NOT NULL,
  `qclass` int(1) NOT NULL,
  `ansa` varchar(100) NOT NULL,
  `ansb` varchar(100) NOT NULL,
  `ansc` varchar(100) NOT NULL,
  `ansd` varchar(100) NOT NULL,
  `ans` varchar(10) NOT NULL
);

--
-- 转存表中的数据 `question`
--

INSERT INTO `question` (`qno`, `ques`, `qclass`, `ansa`, `ansb`, `ansc`, `ansd`, `ans`) VALUES
(1, '城市生活垃圾从哪里来？', 1, '人类活动', '垃圾桶', '街上', '超市', 'A'),
(2, '我国城市人均日产垃圾量是多少？', 1, '0.7-0.8公斤', '2公斤', '1.5公斤', '1.0-1.2公斤', 'D'),
(3, '被油污染了的旧报纸是否是可回收物。', 0, '是', '否', '', '', 'B'),
(4, '国务院批转住房城乡建设部等部门《关于进一步加强城市生活垃圾处理工作意见》是什么时间发布的？', 1, '2012年8月', '2011年4月', '2013年5月', '2014年10月', 'B'),
(5, '旧鞋子属于可回收物。', 0, '是', '否', '', '', 'B'),
(6, '废旧的家具（桌椅、沙发、床垫）是大件垃圾，大件垃圾是否属于干垃圾。', 0, '是', '否', '', '', 'A'),
(7, '家庭用的沐浴露和洗发水的塑料瓶是属于可回收物。', 0, '是', '否', '', '', 'A'),
(8, '大件垃圾应当按规定预约环境卫生作业单位免费上门收集搬运。', 0, '是', '否', '', '', 'B'),
(9, '旧衣服属于______。', 1, '可回收垃圾', '有害垃圾', '可降解垃圾', '其他垃圾', 'D'),
(10, '1吨废纸如果充分再利用，可节省木材多少千克？', 1, '300千克', '200千克', '500千克', '700千克', 'A'),
(11, '在我国，由哪一个部门负责全国城市生活垃圾管理工作？', 1, '环保主管部门', '住房城乡建设主管部门', '卫生主管部门', '工业信息及商务主管部门', 'B'),
(12, '城市生活垃圾收集．处置设施用地应当纳入怎样的保护范围，任何单位和个人不得擅自占用或者改变其用途。', 1, '城市蓝线', '城市黄线', '城市绿线', '城市紫线', 'B'),
(13, '过期药品属于_____，需要特殊安全处理。', 1, '其他垃圾', '有害垃圾', '不可回收垃圾', '厨余垃圾', 'B'),
(14, '哪个国家行政部门负责废弃电器电子产品处理的监督管理工作？', 1, '国务院环境保护主管部门', '国务院建设主管部门', '国务院商务主管部门', '国务院质量监督主管部门', 'A'),
(15, '“世界上没有垃圾，只有放错地方的宝藏。”这句话是谁说的？', 1, '莎士比亚', '但丁', '泰戈尔', '歌德', 'B'),
(16, '1972年，联合国在斯德哥尔摩召开了联合国人类环境会议，会议通过了《人类环境宣言》，并提出设立“世界环境日”，以促进全球环境意识提升并采取行动切实保护人类的生存环境。“世界环境日”是每年的哪一天？', 1, '4月9日', '6月5日', '8月22日', '11月12日', 'B'),
(17, '公共场所的城市生活垃圾分类收集容器，由城市管理部门负责。', 0, '是', '否', '', '', 'B'),
(18, '干垃圾要运至生活垃圾填埋场进行卫生填埋处理。', 0, '是', '否', '', '', 'A'),
(19, '有害垃圾要运至有害垃圾临时存放点存放，达到一定数量后交由环保部门指定的有害垃圾处理公司进行处理。', 0, '是', '否', '', '', 'A'),
(20, '废旧的收音机和手电筒属于有害垃圾。', 0, '是', '否', '', '', 'A'),
(21, '餐厨垃圾和干垃圾的运输由各区县级环卫运输车队负责或者委托具有生活垃圾运输许可证的企业负责。', 0, '是', '否', '', '', 'A'),
(22, '报纸属于可回收物。', 0, '是', '否', '', '', 'A');

-- --------------------------------------------------------

--
-- 表的结构 `rubbish`
--

CREATE TABLE `rubbish` (
  `rno` int(11) NOT NULL,
  `rname` varchar(20) NOT NULL,
  `cno` int(11) NOT NULL,
  `rintro` varchar(50) NOT NULL
);

--
-- 转存表中的数据 `rubbish`
--

INSERT INTO `rubbish` (`rno`, `rname`, `cno`, `rintro`) VALUES
(1, '无汞干电池', 4, '介绍'),
(2, '充电宝', 1, '介绍'),
(3, '手机电池', 2, '介绍'),
(4, '蓄电池', 2, '介绍'),
(5, '剩菜剩饭', 3, '介绍'),
(6, '快餐盒', 4, '介绍'),
(7, '一次性塑料勺子', 4, '介绍'),
(8, '外卖袋', 4, '介绍'),
(9, '一次性餐盒', 4, '介绍'),
(10, '整只粽子', 3, '介绍'),
(11, '粽叶', 4, '介绍'),
(12, '粽子馅', 3, '介绍'),
(13, '粽子绳', 4, '介绍'),
(14, '蛋黄', 3, '介绍'),
(15, '没喝完的奶茶', 3, '没喝完的奶茶要倒掉'),
(16, '奶茶杯', 4, '介绍'),
(17, '珍珠', 3, '介绍'),
(18, '指甲油', 2, '介绍'),
(19, '指甲油瓶', 2, '介绍'),
(20, '口红', 4, '介绍'),
(21, '面霜瓶', 1, '介绍'),
(22, '报纸', 1, '再生利用价值较高，能进入废品回收渠道'),
(23, '铁', 1, '再生利用价值较高，能进入废品回收渠道'),
(24, '杀虫剂', 2, '含有有毒有害化学物质'),
(25, '蓄电池', 2, '含有有毒有害化学物质'),
(26, '剩菜剩饭', 3, '厨房产生的食物类垃圾'),
(27, '废弃食用油', 3, '厨房产生的食物类垃圾'),
(28, '一次性餐具', 4, '除去可回收垃圾、有害垃圾、厨房垃圾之外的所有垃圾的总称'),
(29, '塑料袋', 4, '除去可回收垃圾、有害垃圾、厨房垃圾之外的所有垃圾的总称'),
(30, '玻璃瓶罐', 1, '再生利用价值较高，能进入废品回收渠道');

-- --------------------------------------------------------

--
-- 表的结构 `topic`
--

CREATE TABLE `topic` (
  `tno` int(11) NOT NULL,
  `tname` varchar(20) NOT NULL,
  `rno` int(11) NOT NULL
);

--
-- 转存表中的数据 `topic`
--

INSERT INTO `topic` (`tno`, `tname`, `rno`) VALUES
(1, '电池专题', 1),
(2, '电池专题', 2),
(3, '电池专题', 3),
(4, '电池专题', 4),
(5, '外卖专题', 5),
(6, '外卖专题', 6),
(7, '外卖专题', 7),
(8, '外卖专题', 6),
(9, '外卖专题', 8),
(10, '外卖专题', 9),
(11, '粽子专题', 10),
(12, '粽子专题', 11),
(13, '粽子专题', 12),
(14, '粽子专题', 13),
(15, '粽子专题', 14),
(16, '奶茶专题', 15),
(17, '奶茶专题', 16),
(18, '奶茶专题', 17),
(19, '化妆品专题', 18),
(20, '化妆品专题', 19),
(21, '化妆品专题', 20),
(22, '化妆品专题', 21);

-- --------------------------------------------------------

--
-- 表的结构 `user`
--

CREATE TABLE `user` (
  `uno` varchar(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `phone` varchar(11) DEFAULT NULL,
  `district` varchar(20) DEFAULT NULL,
  `addr` varchar(50) DEFAULT NULL
);

--
-- 转存表中的数据 `user`
--

INSERT INTO `user` (`uno`, `username`, `password`, `phone`, `district`, `addr`) VALUES
('1234', '', '1234', NULL, NULL, NULL),
('2888', '', '123', NULL, NULL, NULL),
('2890', '阿霞', '123', '22222222222', '荔湾区', '哈哈'),
('2891', '阿三', '123', '33333333333', '荔湾区', '哈'),
('2892', '阿诗', '123', '13712345671', '番禺区', '广外'),
('2893', '阿四', '123', '11111111111', '番禺区', '广外外'),
('2899', '', '123', NULL, NULL, NULL);

--
-- 转储表的索引
--

--
-- 表的索引 `appointment`
--
ALTER TABLE `appointment`
  ADD PRIMARY KEY (`ano`),
  ADD KEY `uno` (`uno`),
  ADD KEY `mno` (`mno`);

--
-- 表的索引 `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`cno`);

--
-- 表的索引 `knowledge`
--
ALTER TABLE `knowledge`
  ADD PRIMARY KEY (`kno`);

--
-- 表的索引 `manager`
--
ALTER TABLE `manager`
  ADD PRIMARY KEY (`mno`);

--
-- 表的索引 `manages`
--
ALTER TABLE `manages`
  ADD PRIMARY KEY (`no`),
  ADD KEY `mno` (`mno`);

--
-- 表的索引 `question`
--
ALTER TABLE `question`
  ADD PRIMARY KEY (`qno`);

--
-- 表的索引 `rubbish`
--
ALTER TABLE `rubbish`
  ADD PRIMARY KEY (`rno`),
  ADD KEY `cno` (`cno`);

--
-- 表的索引 `topic`
--
ALTER TABLE `topic`
  ADD PRIMARY KEY (`tno`),
  ADD KEY `rno` (`rno`);

--
-- 表的索引 `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`uno`);

--
-- 在导出的表使用AUTO_INCREMENT
--

--
-- 使用表AUTO_INCREMENT `appointment`
--
ALTER TABLE `appointment`
  MODIFY `ano` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- 使用表AUTO_INCREMENT `category`
--
ALTER TABLE `category`
  MODIFY `cno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- 使用表AUTO_INCREMENT `knowledge`
--
ALTER TABLE `knowledge`
  MODIFY `kno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- 使用表AUTO_INCREMENT `manager`
--
ALTER TABLE `manager`
  MODIFY `mno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=910;

--
-- 使用表AUTO_INCREMENT `manages`
--
ALTER TABLE `manages`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- 使用表AUTO_INCREMENT `question`
--
ALTER TABLE `question`
  MODIFY `qno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- 使用表AUTO_INCREMENT `rubbish`
--
ALTER TABLE `rubbish`
  MODIFY `rno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- 使用表AUTO_INCREMENT `topic`
--
ALTER TABLE `topic`
  MODIFY `tno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- 限制导出的表
--

--
-- 限制表 `appointment`
--
ALTER TABLE `appointment`
  ADD CONSTRAINT `appointment_ibfk_1` FOREIGN KEY (`uno`) REFERENCES `user` (`uno`),
  ADD CONSTRAINT `appointment_ibfk_2` FOREIGN KEY (`mno`) REFERENCES `manager` (`mno`);

--
-- 限制表 `manages`
--
ALTER TABLE `manages`
  ADD CONSTRAINT `manages_ibfk_1` FOREIGN KEY (`mno`) REFERENCES `manager` (`mno`);

--
-- 限制表 `rubbish`
--
ALTER TABLE `rubbish`
  ADD CONSTRAINT `rubbish_ibfk_1` FOREIGN KEY (`cno`) REFERENCES `category` (`cno`);

--
-- 限制表 `topic`
--
ALTER TABLE `topic`
  ADD CONSTRAINT `topic_ibfk_1` FOREIGN KEY (`rno`) REFERENCES `rubbish` (`rno`);
COMMIT;
