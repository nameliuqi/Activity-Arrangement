-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: 2016-12-17 13:26:51
-- 服务器版本： 5.7.16
-- PHP Version: 5.5.36

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `activity_arrangement`
--
CREATE DATABASE IF NOT EXISTS `activity_arrangement` DEFAULT CHARACTER SET gbk COLLATE gbk_chinese_ci;
USE `activity_arrangement`;

-- --------------------------------------------------------

--
-- 表的结构 `activity`
--
-- 创建时间： 2016-12-15 03:16:49
-- 最后更新： 2016-12-15 06:03:32
--

CREATE TABLE `activity` (
  `act_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `time` datetime DEFAULT NULL,
  `place` varchar(100) NOT NULL,
  `discription` varchar(2000) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `activity`
--

INSERT INTO `activity` (`act_id`, `user_id`, `name`, `time`, `place`, `discription`) VALUES
(2, 2, 'software design', '2016-12-07 01:59:00', 'hit2', '1213213'),
(22, 2, '软工最终答辩', '2016-12-15 16:00:00', '哈工大', '第一组                '),
(21, 28, 'test2', '2016-12-17 16:50:00', '二公寓', '                web测试'),
(20, 27, 'test1', '2016-12-12 06:50:00', '二公寓', '                web测试'),
(11, 25, 'csp认证考试培训', '2016-12-14 00:00:00', '正心11', '                各位同学，今天晚上，学院邀请到了13级ACM大牛，首届CCSP竞赛银牌获得者孙日辉、蒲毅为大家做CSP认证考试的培训与技术分享。CSP认证高分选手可以才可以参加CCSP竞赛，CSP认证目前已经纳入学院评奖评优加分中，未来保研、考研也可能会参考CSP认证成绩和CCSP竞赛成绩。'),
(12, 25, '瑞士苏黎世联邦理工学院（ETH Zurich）计算机系 全奖暑期研究实习项目', '2016-01-31 00:00:00', '', '                Student Summer Research Fellowship\r\nETH的计算机科学系现开放暑期研究实习项目，全球大三本科生、准备读研的大四本科生和研究生均可申请。ETH Zurich是爱因斯坦的母校，世界最著名的理工大学之一，享有“欧陆第一名校”、“欧洲MIT”的美誉。其计算机科学QS排名世界第8，THE排名世界第9，ARWU排名世界第17。本项目入选学生可以在夏季阶段内灵活安排实习起止时间。提供足额奖学金（每月1,750瑞郎），可覆盖学生在瑞士的全部生活起居和旅行花费。申请无硬性语言成绩要求，需要提交简历、成绩单、一页个人陈述和一封推荐信。申请截止时间为2017年1月31日。\r\n研究方向：https://www.inf.ethz.ch/studies/summer-research-fellowship.html\r\n项目安排：https://www.inf.ethz.ch/studies/summer-research-fellowship/program-structure.html\r\n如何申请：https://www.inf.ethz.ch/studies/summer-research-fellowship/how-to-apply.html\r\n常见问题：https://www.inf.ethz.ch/studies/summer-research-fellowship/faqs.html\r\n典型教授：https://www.inf.ethz.ch/studies/summer-research-fellowship/professors.html'),
(13, 25, '《神奇动物在哪里》——魔法狂潮 再度来袭', '2016-12-13 18:30:00', ' 哈工大紫丁香影院（一校区主楼礼堂）', '                【影片介绍】\r\n导演: 大卫·叶茨\r\n编剧: J·K·罗琳\r\n主演: 埃迪·雷德梅恩 / 凯瑟琳·沃特斯顿 / 丹·福勒 / 艾莉森·萨多尔 / 科林·法瑞尔 / 埃兹拉·米勒 / 朗·普尔曼 / 强·沃特 / 萨曼莎·莫顿 / 嘉玛·陈 / 卡门·艾乔戈 / 克里斯汀·马扎诺 / 詹·穆瑞 / 约翰尼·德普\r\n类型: 剧情 / 奇幻 / 冒险\r\n简介: 故事发生在1926年的纽约，此时，麻鸡们对魔法师的抵制达到了最高峰，由玛丽露（萨曼莎·莫顿 饰）所领导的反魔法组织活动频繁。与此同时，街头巷尾之中时时发生的种种灾难、意外，让魔法世界的存在离暴露仅有一线之隔，整个魔法部陷入了空前紧张的气氛之中。 \r\n　　就在这个节骨眼上，环游世界进行着研究神奇魔法动物之行动的魔法动物学家纽特（埃迪·雷德梅恩 饰）抵达了纽约，他随身携带的魔法手提箱里，装着几十种他一路营救的魔法动物们，而他的一举一动，均处于隶属于魔法部的前傲罗蒂娜（凯瑟琳·沃特斯顿 饰）的监视之下。一场意外中，麻鸡雅各布（丹·福勒 饰）误拿了纽特的手提箱，并且放出了藏在箱子里的魔法动物，为此，纽特、蒂娜、雅各布和蒂娜的妹妹奎妮（艾莉森·萨多尔 饰）不得不踏上了寻找魔法动物的旅途。\r\n'),
(14, 25, ' 讲座预告 | 诺丁汉大学宣讲', '2016-12-13 18:30:00', ' 正心111', '                主讲人：Ma Lily\r\n\r\n讲座内容：\r\n本次讲座将简要介绍这所世界排名前75、属于罗素大学集团“The Russell Group”一员的诺丁汉大学，并介绍该校在硕士阶段与博士阶段的相关政策。诺丁汉大学设立学科包含文学、工程、医学、理学、社会学等等，下设300余硕士学位，在读硕士有很大的机会能继续在诺丁汉大学攻读博士。它还拥有专为留学生开设的、堪称全英国最丰厚的奖学金。\r\n\r\n'),
(15, 25, '2017第九届国际大学生雪雕大赛', '2016-01-04 00:00:00', '哈尔滨工程大学', '                 联系方式\r\n     2017第九届国际大学生雪雕大赛组委会秘书处\r\n    地址：哈尔滨市南岗区南通大街145号哈尔滨工程大学启航活动中心353室(校团委)\r\n    邮编：150001\r\n    联系人：尹三井\r\n    电话：0451-82519007\r\n    传真：0451-82519007\r\n    网站：http://icssc.hrbeu.edu.cn\r\n    (第九届国际大学生雪雕大赛报名表：见网站右上角竞赛通知中的附件)\r\n    E-mail：icssc@hrbeu.edu.cn\r\n    其余事项及细节可同组委会秘书处联系 '),
(16, 25, '哈工大体育部速滑队招新', '2016-12-19 12:00:00', '一校区冰场', '为促进我省学校冰雪运动发展，省教育厅决定2017年2月6-8日举办黑龙江省首届学生冬季运动会速度滑冰比赛，我校将组队参赛。\r\n现我校速滑队招新：   \r\n报名时间、地点：2016年12月19日周一中午12点(二校区冰场）、12月20日周二中午12点(一校区冰场）\r\n测试内容： 滑行一圈，冰刀需自备。\r\n联系人：张春晖教练       15145107378\r\n\r\n'),
(17, 25, 'A15学生社区“变废为宝”创意大赛', '2016-12-15 00:00:00', 'A15学生社区', '                A15学生社区管理学院的女生寝室踊跃参加发挥创意，亲自动手将一件件不起眼的废品化“腐朽为神奇”变成了实用又美观的“宝物”，既节约环保又创新实用。A15学生社区“变废为宝”创意大赛，提高了同学们的节约意识、创新意识和动手能力，在携手共创和谐环保寝室的同时，也美化了生活环境。希望同学们在今后的生活中也能够发挥聪明才智，“变废为宝”，绿色生活！'),
(18, 25, '第六届机电学院趣味运动会', '2016-12-15 00:00:00', '一区体育馆', '                为了丰富同学们的课余生活，增强班级同学之间的凝聚力，在寒冷的冬日营造体育锻炼的氛围，由机电学院学生会举办的第六届机电学院趣味运动会在一区体育馆成功举办。本次趣味运动会以2015级各个班级为单位，采用积分制度，最终根据团体项目和个人项目的总分评选出前五名的班集体。\r\n本次趣味运动会团体项目有篮球技巧、同舟共进、趣味夹球、袋鼠跳、拔河，个人项目有原地跳绳、转呼啦圈、两人三足、20米挪砖过河、宝贝新娘。团体项目录取前8名，按8、7、6、5、4、3、2、1计分，个人项目录取前3名，按3、2、1计分。\r\n\r\n'),
(19, 2, '软工', '2016-12-15 00:40:00', '', '                '),
(23, 27, 'tes3', '2017-01-11 19:04:00', '二公寓', '                web测试'),
(24, 26, '藏文化节', '2016-11-26 18:30:00', '活动中心301', '               这一次活动，由全体哈工大藏族学生主办，邀请了哈尔滨八所其他大学的藏族大学生。会展现名族的文化节目非常精彩，欢迎同学们前来观看！'),
(25, 28, 'test3', '2017-11-11 00:00:00', '二公寓', '                测试样例'),
(26, 28, 'test4', '2016-12-12 00:00:00', '二公寓', '                test'),
(27, 2, '软工考试', '2016-12-26 12:00:00', 'hit', '报名考试                ');

-- --------------------------------------------------------

--
-- 表的结构 `joinact`
--
-- 创建时间： 2016-12-14 19:42:37
-- 最后更新： 2016-12-15 06:04:02
--

CREATE TABLE `joinact` (
  `join_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `act_id` int(11) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `type` varchar(4) CHARACTER SET utf8 DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=gbk;

--
-- 转存表中的数据 `joinact`
--

INSERT INTO `joinact` (`join_id`, `user_id`, `act_id`, `time`, `type`) VALUES
(1, 2, 2, '2016-12-14 19:47:39', NULL),
(2, 25, 14, '2016-12-15 03:54:18', NULL),
(3, 27, 11, '2016-12-15 04:41:13', NULL),
(4, 26, 13, '2016-12-15 04:48:42', NULL),
(5, 28, 16, '2016-12-15 04:53:04', NULL),
(6, 27, 23, '2016-12-15 05:00:13', NULL),
(7, 28, 26, '2016-12-15 05:05:36', NULL),
(8, 2, 16, '2016-12-15 05:17:19', NULL),
(9, 2, 22, '2016-12-15 05:22:13', NULL),
(10, 2, 22, '2016-12-15 05:23:01', NULL),
(11, 2, 27, '2016-12-15 06:03:58', NULL);

-- --------------------------------------------------------

--
-- 表的结构 `shedule`
--
-- 创建时间： 2016-12-15 03:13:00
-- 最后更新： 2016-12-15 06:06:32
--

CREATE TABLE `shedule` (
  `shedule_id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `act_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `description` varchar(500) DEFAULT NULL,
  `deadline` datetime DEFAULT NULL,
  `finish` varchar(10) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `shedule`
--

INSERT INTO `shedule` (`shedule_id`, `name`, `act_id`, `user_id`, `description`, `deadline`, `finish`) VALUES
(21, '准备', 2, 2, NULL, '2016-12-12 00:00:00', '123'),
(20, 'tes3', 23, 27, NULL, '2017-01-11 00:00:00', NULL),
(19, '查看结构', 22, 2, NULL, '2016-12-15 18:00:00', NULL),
(18, '准备海报', 22, 2, NULL, '2016-12-15 13:00:00', NULL),
(17, 'test2', 21, 28, NULL, '2016-12-17 12:00:00', NULL),
(16, 'test1', 20, 27, NULL, '2016-12-12 00:00:00', NULL),
(15, ' 讲座预告 | 诺丁汉大学宣讲', 12, 25, NULL, '2016-12-12 00:00:00', NULL);

-- --------------------------------------------------------

--
-- 表的结构 `user`
--
-- 创建时间： 2016-11-15 12:31:00
-- 最后更新： 2016-12-15 06:02:32
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(30) NOT NULL,
  `email` varchar(60) NOT NULL,
  `password` varchar(32) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `user`
--

INSERT INTO `user` (`user_id`, `user_name`, `email`, `password`) VALUES
(14, 'liuqi5', '123@123.com', '123456'),
(2, 'liuqi', 'nameliuqi@outlook.com', '123456'),
(4, 'liuqi2', 'nameliuqi@outlook.com', '123456'),
(8, 'liuqi4', 'nameliuqi@outlook.com', '123456'),
(9, 'user', 'nameliuqi@outlook.com', '123456'),
(10, 'user2', 'nameliuqi@outlook.com', '123456'),
(11, 'user3', 'nameliuqi@outlook.com', '123456'),
(12, 'user4', 'nameliuqi@outlook.com', '123'),
(13, 'user5', 'nameliuqi@outlook.com', '123'),
(15, 'liuqi5', '123@123.com', '123456'),
(16, 'liuqi6', '213@123.com', '1234'),
(17, 'liuqi6', '213@123.com', '1234'),
(18, 'liuqi6', '213@123.com', '1234'),
(19, 'liuqi6', '213@123.com', '1234'),
(20, 'liuqi11', '123@123.com', '1234'),
(21, 'liuqi7', '213@123.com', '123456'),
(22, '1232213', '1234@123.com', '1234'),
(23, 'liuqi8', 'liuqi8@outlook.com', '1234'),
(24, 'lhq', '962046093@qq.com', '123456'),
(25, 'cs', '372210728@qq.com', '123456'),
(26, 'pingcuo', '943329293@qq.com', '5211314'),
(27, 'liuhanqing', '3028002195@qq.com', '123456'),
(28, 'liuhanqing1', '3028002196@qq.com', '123456'),
(29, 'lq', 'lq@outlook.com', '123456');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activity`
--
ALTER TABLE `activity`
  ADD PRIMARY KEY (`act_id`);

--
-- Indexes for table `joinact`
--
ALTER TABLE `joinact`
  ADD PRIMARY KEY (`join_id`);

--
-- Indexes for table `shedule`
--
ALTER TABLE `shedule`
  ADD PRIMARY KEY (`shedule_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- 在导出的表使用AUTO_INCREMENT
--

--
-- 使用表AUTO_INCREMENT `activity`
--
ALTER TABLE `activity`
  MODIFY `act_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
--
-- 使用表AUTO_INCREMENT `joinact`
--
ALTER TABLE `joinact`
  MODIFY `join_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- 使用表AUTO_INCREMENT `shedule`
--
ALTER TABLE `shedule`
  MODIFY `shedule_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- 使用表AUTO_INCREMENT `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
