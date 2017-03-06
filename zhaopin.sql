-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 2017-02-14 15:15:20
-- 服务器版本： 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `zhaopin`
--

-- --------------------------------------------------------

--
-- 表的结构 `zp_adform`
--

CREATE TABLE IF NOT EXISTS `zp_adform` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `numid` int(11) NOT NULL,
  `ad_id` int(11) NOT NULL,
  `state` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `zp_administrator`
--

CREATE TABLE IF NOT EXISTS `zp_administrator` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `name` varchar(10) NOT NULL,
  `college` varchar(50) NOT NULL,
  `grant` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `user` (`user`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=10 ;

--
-- 转存表中的数据 `zp_administrator`
--

INSERT INTO `zp_administrator` (`id`, `user`, `password`, `name`, `college`, `grant`, `uid`) VALUES
(2, '1', '1', '1', '植物科学技术学院', 2, 0),
(4, '5', '5', '5', '动物科学技术学院，动物医学院', 2, 0),
(5, '2014', '2014', '2014', '资源与环境学院', 2, 0),
(7, '112', '112', '张一', '信息学院', 2, 0),
(8, '55', '55', '55', '55', 1, 0),
(9, 'admin', '123456', '123456', '', 10, 0);

-- --------------------------------------------------------

--
-- 表的结构 `zp_applicant`
--

CREATE TABLE IF NOT EXISTS `zp_applicant` (
  `aid` int(11) NOT NULL AUTO_INCREMENT,
  `user` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`aid`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=46 ;

--
-- 转存表中的数据 `zp_applicant`
--

INSERT INTO `zp_applicant` (`aid`, `user`, `password`) VALUES
(20, 'rcb@hzau.edu.cn', '87280957'),
(21, 'Dr. Mohamed Foda', 'abcde12345@@'),
(22, 'rcb@mail.hzau.edu.cn', 'rcb87280957'),
(23, 'liminghao0502@126.com', '19870127'),
(24, 'AlI', 'ALI2016'),
(25, 'dr.jianweili@foxmail.com', '87373685'),
(26, 'kailzeng@gmail.com', 'zzk20080808'),
(27, 'm.frahat@fagr.bu.edu.eg', 'abcde12345@@'),
(28, 'xifeng@iastate.edu', 'FXss370685'),
(29, 'zhishun001@163.com', 'wzs2615'),
(30, 'huanglin2008@gmail.com', 'hl81212310'),
(31, 'danhuajiang@gmail.com', 'jdh220412'),
(32, 'qinfujun1981@gmail.com', 'hn12134'),
(33, 'qianwang880104@gmail.com', 'peach850227'),
(34, 'fenglindeng@gmail.com', 'promoter20010302'),
(35, 'zhenyuliu', 'Meeting2017'),
(36, 'yanwenhaohzau@gmail.com', '19831023'),
(37, 'razasargani@hotmail.com', '121405raza'),
(38, 'shengling', '19880409'),
(39, 'hank@mail.hzau.edu.cn', '798165256.'),
(40, 'zemin.zhou@path.utah.edu', 'tsjintsjin'),
(41, 'mwang@cshl.edu', '820222129'),
(42, '刘振宁', 'lzn221412'),
(43, 'jjq5678@126.com', 'jjq197312'),
(44, 'yuxu@whu.edu.cn', 'yuxu@847628'),
(45, 'huangqidream@126.com', 'hq3853205');

-- --------------------------------------------------------

--
-- 表的结构 `zp_application`
--

CREATE TABLE IF NOT EXISTS `zp_application` (
  `numid` int(11) NOT NULL AUTO_INCREMENT,
  `time` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `con` text NOT NULL,
  `sex` varchar(50) NOT NULL,
  `birthday` varchar(50) NOT NULL,
  `major` varchar(50) NOT NULL,
  `job` varchar(100) NOT NULL,
  `photo` varchar(100) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `word_area` varchar(50) NOT NULL,
  `card` varchar(10) NOT NULL,
  `cardid` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `jianjie` text NOT NULL,
  `title` text NOT NULL,
  `aid` int(11) NOT NULL,
  `file` varchar(150) NOT NULL,
  `kp2` varchar(50) NOT NULL,
  PRIMARY KEY (`numid`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=44 ;

--
-- 转存表中的数据 `zp_application`
--

INSERT INTO `zp_application` (`numid`, `time`, `name`, `con`, `sex`, `birthday`, `major`, `job`, `photo`, `phone`, `word_area`, `card`, `cardid`, `email`, `address`, `jianjie`, `title`, `aid`, `file`, `kp2`) VALUES
(19, '2016-2-2@2016-2-5', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 20, '', ''),
(20, '2017-5-17@2017-5-19', 'Dr.Mohamed Frahat Foda Ali Foda', '', '男', '1985.08.01', '生命科学(Life Science)', 'Postdoctoral ', '', '1372027911', 'Benha University, Egypt', '护照', 'A04000053', 'm.frahat@fagr.bu.edu.eg', 'Huazhong Agricultural University, No.1 Shizishan r', 'Dr. MOHAMED FRAHAT FODA ALI FODA, Ph.D. from Egypt working as a Lecturer at Benha University. He came to China in Sept. 2011 and joined the College of Life Science and Technology under the supervision of Professor Han He-You. During his 4 years, he published SCI papers with a cumulative impact factor 38.183. His first author publication received high impact factor of 7.2. his total impact factor (IF) Now is more than 60. He has published 2 books. In 2015/2016 has won the title of &quot; Distinguished International Scholar Award of HZAU&quot; offered by the China Scholarship Council (CSC). He has participated in many national and international academic conferences (USA, Germany, Czech Republic and Egypt), won the outstanding speaker at these conferences and many other honors. In 2016, he was selected to be the president of the African Association in HZAU. Also, he is the Vice-president of the Postdoctoral Association of HZAU from 2016 till now. At the same time, he is our school English radio station active member, International College Student New Year Spectacular show host, and actively participate in social welfare activities and attracted much internal and external news media attention in China.\r\nInternational Awards:\r\n1.First prize in the poster session at the Nano Ostrava International Conference, 2013, Ostrava, Czech Republic.\r\n2.Silver Prize in the Young Scientist Lecture Competition at the 2nd USA International Conference on Surfaces, Coatings and Nanostructured Materials (NANOSMAT-USA), 2014, Houston, Texas (USA).\r\n3.The Best Oral Presentation at the 2nd International Conference on Biotechnology Applications in Agriculture (ICBAA), Benha University, Moshtohor and Hurghada, 2014, Egypt.\r\nNational Awards:\r\n1.The Distinguished International Student Scholarship Award of Huazhong Agricultural University announced by the China Scholarship Council (CSC) for the year of 2015/2016\r\n2.First Prize in the Oral Presentation at “The Fourth Model International Academic Conference of postgraduate In Huazhong Agricultural University”, 2014, China.\r\n3.The Best oral Presentation at “The Third Model International Academic Conference of postgraduate In Huazhong Agricultural University”, 2013. China.\r\n4.The Top student of Benha University in 2006 and honored from the President of Egypt in the Science Day.\r\nPublic Social Services and Serving as Student Leaders:\r\n1.Invited as VIP speaker at the China Instruments Manufactures Association, organizer of the 10th China International Scientific Instrument and Laboratory Equipment Exhibition to give a speech entitled “The Technology Development laboratory”, 2012.\r\n2.Invited as VIP speaker at the China Instruments Manufactures Association, organizer of the 11th China International Scientific Instrument and Laboratory Equipment Exhibition to give a speech entitled “Nanotechnology Development in Biological fields and Food Safety”, 2013. \r\n3.Appeared several times in the Local Wuhan Newspapers regarding the new opened Subway Line No. 4 and in Changjiang Weekly telling my story about mastering Chinese in a short time, building a multinational family and my marriage with my beautiful wife who is doing her Master degree at Huazhong Agricultural University (HZAU).\r\n4.In 2015, I was nominated as a Volunteer assistant of the 5th floor upon the selection that was carried out by International Student Office, HZAU.\r\nPublications: \r\n1. Biocompatible and highly luminescent near-infrared CuInS2/ZnS quantum dots embedded silica beads for cancer cell imaging, MF Foda#, L Huang, F Shao, HY Han*, ACS applied materials &amp; interfaces 6 (3), 2011-2017\r\n2. Carbon-Dot and Quantum-Dot-Coated Dual-Emission Core–Satellite Silica Nanoparticles for Ratiometric Intracellular Cu2+ Imaging, C Zou, MF Foda#, X Tan, K Shao, L Wu, Z Lu, HS Bahlol, H Han*, Analytical Chemistry 88 (14), 7395-7403\r\n3. Commercial feasibility of lignocellulose biodegradation: possibilities and challenges, M Taha*, M Foda#, E Shahsavari, A Aburto-Medina, E Adetutu, A Ball, Current opinion in biotechnology 38, 190-197\r\n4.A brilliant sandwich type fluorescent nanostructure incorporating a compact quantum dot layer and versatile silica substrates, L Huang, Q Wu, J Wang, M Foda#, J Liu, K Cai, H Han*, Chemical Communications 50 (22), 2896-2899\r\n5.Iron oxide nanoparticle layer templated by polydopamine spheres: a novel scaffold toward hollow–mesoporous magnetic nanoreactors, L Huang, L Ao, X Xie, G Gao, MF Foda#, W Su*, Nanoscale 7 (2), 806-813.\r\n6.Facile Synthesis of Quasi‐One‐Dimensional Au/PtAu Heterojunction Nanotubes and Their Application as Catalysts in an Oxygen‐Reduction Reaction, K Cai, J Liu, H Zhang, Z Huang, Z Lu, MF Foda#, T Li, H Han*, Chemistry-A European Journal 21 (20), 7556-7561.\r\n7.Synthesis of functionalized 3D porous graphene using both ionic liquid and SiO 2 spheres as “spacers” for high-performance application in supercapacitors, T Li, N Li, J Liu, K Cai, MF Foda#, X Lei, H Han*, Nanoscale 7 (2), 659-669\r\n8.Solid-state voltammetry-based electrochemical immunosensor for Escherichia coli using graphene oxide–Ag nanoparticle composites as labels, M. Frahat Foda#, Heyou Han*, Xiaochun Jiang, Kun Chen, Jing Wang, Kang Shao, Tao Fu, Feng Shao, Donglian Lu, Jiangong Liang, Analyst 138 (12), 3388-3393\r\n9.Universal chitosan-assisted synthesis of Ag-including heterostructured nanocrystals for label-free in situ SERS monitoring, K Cai, X Xiao, H Zhang, Z Lu, J Liu, Q Li, C Liu, MF Foda#, H Han*, Nanoscale 7 (45), 18878-18882.', 'Nanobiotechnology Role in Life Science Applications ', 21, '5884b0f957bcf.doc', ''),
(21, '2017-5-17@2017-5-19', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 22, '', ''),
(22, '2017-5-17@2017-5-19', '李明浩', '', '男', '198701', '化学（Chemistry）', '博士后', '', '无', '美国', '身份证', '420984198701273310', 'liminghao0502@126.com', '美国西弗吉利亚摩根敦26505', '1.Minghao Li, Jeffrey L. Petersen and Jessic Hoover,* Silver-Mediated Oxidative Decarboxylative Trifluoromethylthiolation of Coumarin-3-carboxylic Acids, Org. Lett. 2017, DOI: 10.1021/acs.orglett.6b03806.\r\n2.Minghao Li, Jessic Hoover,* Aerobic Copper-Catalyzed Decarboxylative Thiolation, Chem. Commun. 2016, 52, 8733-8736. \r\n3.Minghao Li, Amir Taheri, Meng Liu, Shaohuan Sun, and Yanlong Gu*, Three-component reactions of aromatic aldehydes and 1,3-cyclohexanediones catalyzed by L-Proline and their leaving ability-determined downstream conversions of the products, Adv. Synth. Catal. 2014, 356, 537-556. (IF = 6.453)\r\n4.Minghao Li, Biao Zhang, Yanlong Gu* Facile construction of densely functionalized 4H-chromenes via three-component reactions catalyzed by L-proline, Green Chem. 2012, 14, 2421-2428. \r\n5.Minghao Li, Yanlong Gu,* Reversible alkylation of dimedone with aldehyde: a neglected way for maximizing selectivity of three-component reactions of dimedone and an aldehyde, Adv. Synth. Catal. 2012, 354, 2484-2494. \r\n6.Minghao Li, Yanlong Gu,* 2-Aryl-3, 4-dihydropyrans as building blocks for organic synthesis: ring-opening reactions with nucleophiles, Tetrahedron, 2011, 67, 8314-8320. \r\n7.Minghao Li, Jie Yang, Yanlong Gu,* Manganese chloride as an efficient catalyst for selective transformations of indoles in the presence of -keto carbonyl group. Adv. Synth. Catal. 2011, 353, 1551-1564. \r\n8.Minghao Li, Conghui Tang, Jie Yang and Yanlong Gu,* Ring-opening reactions of 2-aryl-3, 4-dihydropyrans with nucleophiles, Chem. Commun. 2011, 47, 4529-4531. \r\n9.Minghao Li, Haoquan Li, Tao Li and Yanlong Gu,* Ring-opening reactions of 2-alkoxy-3, 4-dihydropyrans with thiols or thiophenols, Org. Lett. 2011, 13, 1064-1067. \r\n10.Minghao Li, Chang Chen, Fei He, Yanlong Gu,* Multicomponent reactions of 1,3-cyclohexanediones and formaldehyde in glycerol: stabilization of paraformaldehyde in glycerol resulted from using dimedone as substrate, Adv. Synth. Catal. 2010, 352, 519-530. ', '过渡金属促进的氧化脱羧生成C-S键的研究', 23, '5886da8c89544.pdf', ''),
(23, '2017-5-17@2017-5-19', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 24, '', ''),
(24, '2017-5-17@2017-5-19', '李健维', '', '男', '1984年9月', '化学（Chemistry）', '研究员，博士生导师', '588756c131975.png', '+358 02945', '芬兰', '护照', 'G34582583', 'jianwei.li@utu.fi', 'Vatselankatu 2, 20014 Turku, FINLAND', '01. Piotr Nowak, Mathieu Colomb-Delsuc, Sijbren Otto* and Jianwei Li*, Template-Triggered Emergence of a Self-Replicator from a Dynamic Combinatorial Library, J. Am. Chem. Soc. 2015, 137, 10965-10969 (*Corresponding Authors)  (影响因子: 12.113)\r\n02. Jianwei Li, Piotr Nowak, Sijbren Otto, An Allosteric Receptor by Simultaneous “Casting” and “Molding” in a Dynamic Combinatorial Library, Angew. Chem. Int. Ed. 2015, 54, 833-837.  (影响因子: 11.261)\r\n03. Jianwei Li, Ivica Cvrtila, Mathieu Colomb-Delsuc, Edwin Otten, Sijbren Otto, An “Ingredients” Approach to Functional Self-Synthesizing Materials: A Metal-Ion-Selective, Multi-Responsive, Self-Assembled Hydrogel, Chem. Eur. J. 2014, 48, 15709-15714. (影响因子: 5.731)  \r\n04. Jianwei Li, Piotr Nowak, Hugo Fanlo-Virgós, Sijbren Otto, Catenanes from Catenanes: Quantitative Assessment of Cooperativity in Dynamic Combinatorial Catenantion, Chem. Sci. 2014, 5, 4968-4974. (影响因子: 9.211)\r\n05. Jianwei Li, Piotr Nowak, Sijbren Otto, Dynamic Combinatorial Chemistry: From Exploring Molecular Recognition to Systems Chemistry, J. Am. Chem. Soc. 2013, 135, 9222-9239. (影响因子: 12.113)\r\n06. Jianwei Li, Jacqui M. A. Carnall, Marc C. A. Stuart, Sijbren Otto, Hydrogel Formation upon Photoinduced Covalent Capture of Macrocycle Stacks for Dynamic Combinatorial Libraries, Angew. Chem. Int. Ed. 2011, 50, 8384-8386. (影响因子: 11.261) \r\n', '复杂化学体系下的精准化学', 25, '588756c13567e.pdf', ''),
(25, '2017-5-17@2017-5-19', '曾志凯', '', '男', '1987/05/08', '生命科学(Life Science)', '博士后', '', '6124067391', '美国', '身份证', '421083198705083819', 'kailzeng@gmail.com', '1268 Fifield Avenue, Saint Paul. MN, 55108', '主要专注于饲料营养价值评定，纤维降解，饲料酶制剂及植物提取物应用等，发表多篇相关学术论文。\r\n•	Zeng, Z. K., J. L. Zhu, C. Chen, G. C. Shurson*, and P. E. Urriola. 2017. Improvement of ileal digestibility of dm and gross energy by commercial carbohydrases is associated with depression of fermentability in an in vitro digestibility determination system. J. Anim. Sci. (Abstract), 248.\r\n•	Zeng, Z. K., G. C. Shurson*, C. Chen, and P. E. Urriola. 2017. Effects of adding multi-enzymes to growing pig diets containing wheat and corn fiber sources on growth performance, nutrient digestibility, and digesta viscosity. J. Anim. Sci. (Abstract), 249.\r\n•	Zeng, Z. K., G. C. Shurson*, and P. E. Urriola. 2016. Prediction of the concentration of standardized ileal digestible (SID) amino acids among sources of distillers dried grains with solubles (DDGS) for growing pigs: A meta-analysis. J. Anim. Sci. (Abstract), 225.\r\n•	Zeng, Z. K., Q. Y. Li, P. F. Zhao, X. Xu, Q. Y. Tian, H. L. Wang, L. Pan, S. Yu, and X. S. Piao*. 2016. A new phytase continuously hydrolyzes phytate and improves amino acid digestibility and mineral balance in growing pigs fed phosphorous-deficient diet. J. Anim. Sci. 94:629-638.\r\n•	Zeng, Z. K., X. Xu, Q. Zhang, P. Li, P. F. Zhao, Q. Y. Li, J. D. Liu, X. S. Piao*. 2015. Effects of essential oil supplementation of a low-energy diet on performance, intestinal morphology and microflora, immune properties and antioxidant activities in weaned pigs. Anim. Sci J. 86:279-285.\r\n•	Zeng, Z. K., S. Zhang, H. L. Wang and X. S. Piao*. 2015. Essential oil and aromatic plants as feed additives in non-ruminant nutrition: A review. J. Anim. Sci. Biotechnology 6:1-7.\r\n•	Zeng, Z. K., Q. Y. Li, X. S. Piao*, J. D. Liu, P. F. Zhao, X. Xu, S. Zhang, and S. Niu. 2014. Forsythia suspensa extract attenuates corticosterone-induced growth inhibition, oxidative injury and immune depression in broilers. Poult. Sci. 93:1774-1781.\r\n•	Zeng, Z. K., Q. Y. Li, Q. Y. Tian, P. F Zhao, X Xu, S. K. Yu, and X. S. Piao*. 2015. Super high dosing with a novel Buttiauxella phytase continuously improves growth performance, nutrient digestibility and mineral status of weaned pigs Biol. Trace Elem. Res. 168:103-109.\r\n•	Wang, D., Z. K. Zeng, X. S. Piao*, P. F. Li, L. F. Xue, Q. Zhang, X. Han, H. Y. Zhang, B. Dong and S. W. Kim. 2011. Effects of keratinase supplementation of corn-soybean meal based diets on apparent ileal amino acid digestibility in growing pigs and serum amino acids, cytokines, immunoglobulin levels and loin muscle area in nursery pigs. Arch. Anim. Nutr. 65:209-302.\r\n•	Li, Q. Y., X. S. Piao*, J. D. Liu, Z. K. Zeng, S. Zhang, and X. J. Lei. 2014. Determination and Prediction of the Energy Content and Amino Acid Digestibility in Peanut Meals Fed to Growing Pigs. Arch. Anim. Nutr. 68:196-210.\r\n', 'Fiber degradation and exogenous carbohydrases efficacy evaluation by in vitro system\r\n纤维降解与外源饲料纤维酶的体外评价', 26, '5898f214d59f8.doc', ''),
(26, '2017-5-17@2017-5-19', 'Dr. Mohamed Frahat Foda Ali Foda', '', '男', '1985.08.01', '生命科学(Life Science)', 'Postdoctoral ', '', '+861372027', 'Benha University, Egypt', '护照', 'A04000053', 'm.frahat@fagr.bu.edu.eg', 'Huazhong Agriculture University, No.1 Shizishan ro', 'Dr. MOHAMED FRAHAT FODA ALI FODA, Ph.D. from Egypt working as a Lecturer at Benha University. He came to China in Sept. 2011 and joined the College of Life Science and Technology under the supervision of Professor Han He-You. During his 4 years, he published SCI papers with a cumulative impact factor 38.183. His first author publication received high impact factor of 7.2. his total impact factor (IF) Now is more than 60. He has published 2 books. In 2015/2016 has won the title of &quot; Distinguished International Scholar Award of HZAU&quot; offered by the China Scholarship Council (CSC). He has participated in many national and international academic conferences (USA, Germany, Czech Republic and Egypt), won the outstanding speaker at these conferences and many other honors. In 2016, he was selected to be the president of the African Association in HZAU. Also, he is the Vice-president of the Postdoctoral Association of HZAU from 2016 till now. At the same time, he is our school English radio station active member, International College Student New Year Spectacular show host, and actively participate in social welfare activities and attracted much internal and external news media attention in China.\r\n\r\nInternational Awards:\r\n1.First prize in the poster session at the Nano Ostrava International Conference, 2013, Ostrava, Czech Republic.\r\n2.Silver Prize in the Young Scientist Lecture Competition at the 2nd USA International Conference on Surfaces, Coatings and Nanostructured Materials (NANOSMAT-USA), 2014, Houston, Texas (USA).\r\n3.The Best Oral Presentation at the 2nd International Conference on Biotechnology Applications in Agriculture (ICBAA), Benha University, Moshtohor and Hurghada, 2014, Egypt.\r\n\r\nNational Awards:\r\n1.The Distinguished International Student Scholarship Award of Huazhong Agricultural University announced by the China Scholarship Council (CSC) for the year of 2015/2016\r\n2.First Prize in the Oral Presentation at “The Fourth Model International Academic Conference of postgraduate In Huazhong Agricultural University”, 2014, China.\r\n3.The Best oral Presentation at “The Third Model International Academic Conference of postgraduate In Huazhong Agricultural University”, 2013. China.\r\n4.The Top student of Benha University in 2006 and honored from the President of Egypt in the Science Day.\r\n\r\nPublic Social Services and Serving as Student Leaders:\r\n1.Invited as VIP speaker at the China Instruments Manufactures Association, organizer of the 10th China International Scientific Instrument and Laboratory Equipment Exhibition to give a speech entitled “The Technology Development laboratory”, 2012.\r\n2.Invited as VIP speaker at the China Instruments Manufactures Association, organizer of the 11th China International Scientific Instrument and Laboratory Equipment Exhibition to give a speech entitled “Nanotechnology Development in Biological fields and Food Safety”, 2013. \r\n3.Appeared several times in the Local Wuhan Newspapers regarding the new opened Subway Line No. 4 and in Changjiang Weekly telling my story about mastering Chinese in a short time, building a multinational family and my marriage with my beautiful wife who is doing her Master degree at Huazhong Agricultural University (HZAU).\r\n4.In 2015, I was nominated as a Volunteer assistant of the 5th floor upon the selection that was carried out by International Student Office, HZAU.\r\n\r\nPublications: \r\n1. Biocompatible and highly luminescent near-infrared CuInS2/ZnS quantum dots embedded silica beads for cancer cell imaging, MF Foda#, L Huang, F Shao, HY Han*, ACS applied materials &amp; interfaces 6 (3), 2011-2017\r\n2. Carbon-Dot and Quantum-Dot-Coated Dual-Emission Core–Satellite Silica Nanoparticles for Ratiometric Intracellular Cu2+ Imaging, C Zou, MF Foda#, X Tan, K Shao, L Wu, Z Lu, HS Bahlol, H Han*, Analytical Chemistry 88 (14), 7395-7403\r\n3. Commercial feasibility of lignocellulose biodegradation: possibilities and challenges, M Taha*, M Foda#, E Shahsavari, A Aburto-Medina, E Adetutu, A Ball, Current opinion in biotechnology 38, 190-197\r\n4.A brilliant sandwich type fluorescent nanostructure incorporating a compact quantum dot layer and versatile silica substrates, L Huang, Q Wu, J Wang, M Foda#, J Liu, K Cai, H Han*, Chemical Communications 50 (22), 2896-2899\r\n5.Iron oxide nanoparticle layer templated by polydopamine spheres: a novel scaffold toward hollow–mesoporous magnetic nanoreactors, L Huang, L Ao, X Xie, G Gao, MF Foda#, W Su*, Nanoscale 7 (2), 806-813.\r\n6.Facile Synthesis of Quasi‐One‐Dimensional Au/PtAu Heterojunction Nanotubes and Their Application as Catalysts in an Oxygen‐Reduction Reaction, K Cai, J Liu, H Zhang, Z Huang, Z Lu, MF Foda#, T Li, H Han*, Chemistry-A European Journal 21 (20), 7556-7561.\r\n7.Synthesis of functionalized 3D porous graphene using both ionic liquid and SiO 2 spheres as “spacers” for high-performance application in supercapacitors, T Li, N Li, J Liu, K Cai, MF Foda#, X Lei, H Han*, Nanoscale 7 (2), 659-669\r\n8.Solid-state voltammetry-based electrochemical immunosensor for Escherichia coli using graphene oxide–Ag nanoparticle composites as labels, M. Frahat Foda#, Heyou Han*, Xiaochun Jiang, Kun Chen, Jing Wang, Kang Shao, Tao Fu, Feng Shao, Donglian Lu, Jiangong Liang, Analyst 138 (12), 3388-3393\r\n9.Universal chitosan-assisted synthesis of Ag-including heterostructured nanocrystals for label-free in situ SERS monitoring, K Cai, X Xiao, H Zhang, Z Lu, J Liu, Q Li, C Liu, MF Foda#, H Han*, Nanoscale 7 (45), 18878-18882\r\n', 'Nanobiotechnology Role in Life Science applications', 27, '588ccfe07270e.doc', ''),
(27, '2017-5-17@2017-5-19', 'Feng, Xi ', '', '男', '1984.09.08', '化学（Chemistry）', 'Postdoctoral Researcher', '588914162625a.JPG', '1-515-708-', 'United States', '护照', 'G60753608', 'xifeng@iastate.edu', '240 Raphael Ave., Unit 1, Ames, IA United States 5', 'Dr. Xi Feng obtained his BE and MS from Huazhong Agricultural University in 2008 and 2012. He was awarded the Ph.D degree from Iowa State University, Ames, IA, USA, 2016. Dr. Feng’s research interests focus on the food chemistry, particularly functional food and food flavors. Dr. Feng has published 16 papers and 1 book chapters. In addition, Dr. Feng has also been serving as a review panel member for Food Chemistry, Food Research International and Food Science &amp; Nutrition.\r\n\r\n1. Referred Journal Articles:\r\n1.1 Non-thermal technologies (irradiation):\r\n(1) Feng, X., Lee, E. J., Nam, K., Jo, C., Ko, K., &amp; Ahn, D. U. (2016). Mechanisms of volatile production from amino acid esters by irradiation. Food Research International, 81, 100-107.\r\n(2) Feng, X., Moon, S.H., Lee, H.Y., &amp; Ahn, D.U. (2016). Effect of irradiation on the degradation of nucleotides in turkey meat. LWT-Food Science and Technology, 73, 88-94.\r\n(3) Feng, X., &amp; Ahn, D. U. (2016). Volatile profile, lipid oxidation and protein oxidation of irradiated Ready-to-Eat cured turkey meat products. Radiation Physics and Chemistry, 127, 27-33.\r\n(4) Feng, X., Moon, S.H., Lee, H.Y., &amp; Ahn, D.U. (2016). Effect of irradiation on the parameters that influence quality characteristics of raw turkey breast meat. Radiation Physics and Chemistry, 130, 40-46.\r\n(5) Feng, X., Moon, S.H., Lee, H.Y., &amp; Ahn, D.U. (2016). Effect of irradiation on the parameters that influence quality characteristics of uncured and cured cooked turkey meat products. Poultry Science, 95, 2986-2992.\r\n(6) Feng, X. Jo, C., Nam, K.C., &amp; Ahn, D.U. (2016). Effect of irradiation on the parameters that influence quality characteristics of raw beef loin. Meat Science, under review.\r\n(7) Ahn, D. U., Lee, E. J., Feng, X., Zhang, W., Lee, J. H., Jo, C., &amp; Nam, K. (2016). Mechanisms of volatile production from non-sulfur amino acids by irradiation. Radiation Physics and Chemistry, 119, 64-73.\r\n(8) Ahn, D. U., Lee, E. J., Feng, X., Zhang, W., Lee, J. H., Jo, C., &amp; Nam, K. (2016). Mechanisms of volatile production from sulfur-containing amino acids by irradiation. Radiation Physics and Chemistry, 119, 80-84. \r\n\r\n1.2 Products development:\r\n(1) Feng, X., Sebranek, J.G., Lee, H.Y., &amp; Ahn, D.U. (2016). Effects of adding red wine on the physicochemical properties and sensory characteristics of uncured frankfurter-type sausage. Meat Science, 121, 285-291.\r\n(2) Zhu, B., Li, B., Gao, Q., Fan, J., Gao, P., Ma, M., &amp; Feng, X. (2013). Predicting texture of cooked blended rice with pasting properties. International Journal of Food Properties, 16, 485-499.\r\n\r\n1.3 Animal physiology:\r\n(1) Moon, S. H., Lee, I., Feng, X., Lee, H. Y., Kim, J., &amp; Ahn, D. U. (2015). Effect of dietary beta-glucan on the performance of live broilers and the quality of broiler breast meat. Asian-Australasian Journal of Animal Sciences, 29 (3), 384-389.\r\n\r\n1.4 Natural products:\r\n(1) Feng, X., Cheng, G., Chen, S., Yang, H., &amp; Huang, W. (2010). Evaluation of the burn healing properties of oil extraction from housefly larva in mice. Journal of Ethnopharmacology, 130(3), 586-92.\r\n(2) Khaskheli, S. G., Zheng, W., Sheikh, S. A., Khaskheli, A. A., Liu, Y., Soomro, A. H., Feng, X., Sauer, M. B., Wang, Y. F., &amp; Huang, W. (2015). Characterization of Auricularia auricula polysaccharides and its antioxidant properties in fresh and pickled product. International Journal of Biological Macromolecules, 81, 387-95.\r\n\r\nTaste formations in traditional Chinses dishes:\r\n(1) Feng, X., Cheng, G., He, X., Yang, H., Sha, S., &amp; Huang, W. Effect of cooking conditions on the flavor formation and adulteration detection by cluster analysis of the traditional Chinese chicken soup. Czech Journal of Food Science, under review.\r\n(2) Zhao, S., Feng, X., Duan, C., Tang, J., Lei, X., Ibrahim, S., &amp; Huang, W. Effect of cooking methods on the chemical compounds associated with umami taste in duck breast meat. Journal of the Science of Food and Agriculture, under review. (co-first author)\r\n(3) Feng, X., Zhang, K., Zhang, K., &amp; Huang, W. (2010). Study on the key processing technologies of lotus root soup with pork ribs. Journal of Food Science, 31(10): 330-335. (In Chinese)\r\n(4) Feng, X., Li, Y., Zhang, K., &amp; Huang, W. (2009). Study on the traditional cooking method of lotus root soup with pork ribs. Journal of Science and Technology in Food Industry, 30(8), 221-223. (In Chinese)\r\n(5) Huang, Y., Li, F., Feng, X., Kang, L., &amp; Huang, W. (2010). Prolonging shelf life of fish cake by the additions of nisin, ε-polylysine and potassium sorbate. Journal of Food Science, 31(08), 285-289. (In Chinese)\r\n(6) Wang, Y., He, X., Yue, X., Feng, X., &amp; Huang, W. (2010). Effect of cooking condition on quality of chicken soup and texture analysis of chicken muscle. Journal of Food Science, 31(09), 120-125. (In Chinese)\r\n\r\n2. Book Chapter:\r\nAhn, D. U., Mendonca, A., &amp; Feng, X. (2017). Chapter 8. The storage and preservation of meat: II Non-thermal technologies. In Lawrie’s Meat Science. Ed. F. Toldrá. Woodhead Publishing: Cambridge, UK.', 'Identification and characterization of off-odor and off-taste compounds in irradiated ready-to-eat (RTE) cooked meat products', 28, '', ''),
(28, '2017-5-17@2017-5-19', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 29, '', ''),
(29, '2017-5-17@2017-5-19', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 30, '', ''),
(30, '2017-5-17@2017-5-19', '姜丹华', '', '男', '1982年1月', '生命科学(Life Science)', '博士后', '', '＋436818140', '奥地利', '护照', 'E3752172F', 'danhuajiang@gmail.com', 'Gregor mendel institute, Dr. Bohr-Gasse 3, 1030 Vi', '1.	Jiang D, Berger F. Histone variants in plant transcriptional regulation. Biochimica et Biophysoca Acta (BBA)-Gene Regulatory Mechanisms, 2017, 1: 123-130.\r\n2.	Li Z, Jiang D#, Fu X, Luo X, Liu R, He Y. Intergration of histone methylations with RNA processing by the nuclear mRNA cap binding complex. Nature Plants, 2016, 2: 16015.\r\n3.	Gu X, Le C, Wang Y, Li Z, Jiang D, Wang Y, He Y. Arabidopsis FLC clade members form flowering-repressor complexes coordinating responses to endogenous and environmental cues. Nature Communications, 2013, 4: 1947.\r\n4.	Gu X, Jiang D#, Yang W, Jacob Y, Michaels S, He Y. Arabidopsis homologs of retinoblastoma-associated protein 46/48 associate with a histone deacetylase to act redundantly in chromatin silencing. Plos Genetics, 2011, e1002366.\r\n5.	Jiang D, Kong N, Gu X, Li Z, He Y. Arabidopsis COMPASS-like complexes mediate histone H3 lysine 4 trimethylation to control the floral transition and plant development. Plos Genetics, 2011, e1001330.\r\n6.	Yang W, Jiang D, Jiang J, He Y. A plant-specific histone H3 lysine 4 demethylase represses floral transition in Arabidopsis. Plant Journal, 2010, 62: 663-673.\r\n7.	Jiang D, Gu X, He Y. Establishment of the winter-annual growth habit via FRIGIDA-mediated histone methylation at FLOWERING LOCUS C in Arabidopsis. Plant Cell, 2009, 21: 1733-1746.\r\n8.	Gu X, Jiang D, Wang Y, Bachmair A, He Y. Repression of the floral transition via histone H2B monoubiquitination. Plant Journal, 2009, 57: 522-533. \r\n9.	Jiang D, Wang Y, Wang Y, He Y. Rerpression of the FLOWERING LOCUS C and FLOWERING LOCUS T by the Arabidopsis polycomb repressive complex 2 components. Plos ONE, 2008, 3: e3404.\r\n10.	Jiang D, Yang W, He Y, Amasino RM, Arabidopsis relatives of human histone-lysine specific demethylase 1 repress expression FWA and FLOWERING LOCUS C and thus promote floral transition. Plant Cell, 2007, 19: 2975-2987.\r\n11.	Li X, Jiang D, Yong K, Zhang D. Varied transcriptional efficiencies of multiple Arabidopsis U6 small nuclear RNA genes. Journal of Integrative Plant Biology, 2007, 49: 222-229.\r\n12.	Jiang D, Yin C, Yu A, Zhou X, Liang W, Yuan Z, Xu Y, Yu Q, Wen T, Zhang D. Duplication and expression analysis of multicopy miRNA family members in Arabidopsis and rice. Cell Research, 2006, 16: 507-518.\r\n', 'DNA replication-coupled histone deposition and modification maintains polycomb silencing', 31, '589c8ce1d9701.pdf', ''),
(31, '2017-5-17@2017-5-19', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 32, '', ''),
(32, '2017-5-17@2017-5-19', '王倩', '参与申请已提交，但状态显示仍显示“材料提交”，并没有显示“已接收（审核中）”。\n如有问题，请联系qianwang880104@gmail.com，谢谢！@@@@', '女', '19850227', '环境与地球科学(Environmental Geosciences)', 'Research Scientist', '589d29250b71b.jpg', '4065996873', '美国', '护照', 'E32734045', 'qianwang880104@gmail.com', '104 Paisley Court UnitB, Garfield street, Bozeman,', '1)	Qian Wang, Yushan Han, Kaixiang Shi, Xia Fan, Lu Wang, Mingshun Li, Gejiao Wang*. (2017) An oxidoreductase AioE is responsible for bacterial arsenite oxidation and resistance. Sci Rep 7:41536. IF = 5.228\r\n2)	Kaixiang Shi, Xia Fan, Zixu Qiao, Yushan Han, Timothy R. McDermott, Qian Wang*, Gejiao Wang*. (2017) Arsenite oxidation regulator AioR regulates bacterial chemotaxis towards arsenite in Agrobacterium tumefaciens GW4. Sci Rep Accepted. IF = 5.228\r\n3)	Qian Wang, Wentao Zhu, Linshuang Zhang, Xiangyang Li, Entao Wang*, Gejiao Wang*. (2016) Genomic identification of rhizobia-related strains and threshold of ANI and core-genome for family, genus and species. IJOEAR 2: 76-80. IF = 1.238\r\n4)	Qian Wang, Dong Qin, Shengzhe Zhang, Lu Wang, Jingxin Li, Christopher Rensing, Timothy R. McDermott*, Gejiao Wang*. (2015) Fate of arsenate following arsenite oxidation in Agrobacterium tumefaciens GW4. Environ Microbiol 17(6):1926-1940. IF=6.24\r\n5)	Qian Wang#, Thomas P. Warelow#, Yoon-Suk Kang, Christine Romano, Thomas H. Osborne, Corinne R. Lehr, Brian Bothner, Timothy R. McDermott*, Joanne M. Santini*, Gejiao Wang*. (2015) Arsenite oxidase also functions as an antimonite oxidase. Appl Environ Microbiol 81(6): 1959-1965. IF=3.95\r\n6)	Jingxin Li#, Qian Wang#, Mingshun Li, Birong Yang, Manman Shi, Wei Guo, Timothy McDermott, Christopher Rensing, Gejiao Wang*. (2015) Proteomics and genetics for identification of a bacterial antimonite oxidase in Agrobacterium tumefaciens. Environ Sci Technol 49(10):5980-5989. IF=5.33 \r\n7)	Fang Chen, Yajing Cao, Sha Wei, Yanzhi Li, Xiangyang Li, Qian Wang*, and Gejiao Wang*. (2015) Regulation of arsenite oxidation by the phosphate two-component system PhoBR in Halomonas sp. HAL1. Front Microbiol 6: 923. doi: 10.3389/fmicb.2015.00923. IF=3.99\r\n8)	Qian Wang#, Yang Lei#, Xiwen Xu, Ling-ling Chen*, Gejiao Wang*. (2012) Theoretical prediction and experimental verification of protein-coding genes in plant pathogen genome Agrobacterium tumefaciens strain C58. PLoS One 7(9): e43176. IF=4.10 \r\n9)	Qian Wang#, Dongxu Xiong#, Ping Zhao, Xiang Yu, Bingkun Tu, Gejiao Wang*. (2011) Effect of applying an arsenic-resistant and plant growth–promoting rhizobacterium to enhance soil arsenic phytoremediation by Populus deltoides LH05-17. J Appl Microbiol 111(5):1065-74. IF=2.36\r\n10)	Jingxin Li, Qian Wang, Oremland RS, Kulp TR, Rensing C, Wang G*. (2016) Microbial antimony biogeochemistry: enzymes, regulation, and related metabolic pathways. Appl Environ Microbiol 82(18): 5482-5495. IF=3.95 \r\n11)	Jingxin Li, Birong Yang, Manman Shi, Kai Yuan, Wei Guo, Qian Wang, Gejiao Wang*. (2017) Abiotic and biotic factors responsible for antimonite oxidation in Agrobacterium tumefaciens GW4. Sci Rep Accepted. IF=5.228\r\n12)	Dan Wang, Fengqiu Zhu, Qian Wang, Chris Rensing, Yu P, Gong J, Gejiao Wang*. (2016) Disrupting ROS-protection mechanism allows hydrogen peroxide to accumulate and oxidize Sb(III) to Sb(V) in Pseudomonas stutzeri TS44. BMC Microbiol. 16(1): 279. IF=2.96\r\n13)	Yushan Han, Feng Zhang, Qian Wang, Shixue Zheng, Wei Guo, Liang Feng, Gejiao Wang*. (2016) Flavihumibacter stibioxidans sp. nov., an antimony-oxidizing bacterium isolated from antimony mine soil. Int J Syst Evol Microbiol. 66(11): 4676-4680. IF=2.439\r\n14)	Fan X, Wang Q, Zheng S, Shi K, Wang G. (2015) Hymenobacter monticola sp. nov., isolated from mountain soil. Int J Syst Evol Microbiol doi: 10.1099/ijsem.0.000792. [Epub ahead of print] IF=2.439\r\n15)	Jie Li, Qian Wang, Shengzhe Zhang, Dong Qin, Gejiao Wang*. (2013) Phylogenetic and genome analyses of antimony-oxidizing bacteria isolated from antimony mined soil. Int Biodeterior Biodegradation 76: 76-80. IF=2.24\r\n16)	Zunji Shi, Zhan Cao, Dong Qin, Wentao Zhu, Qian Wang, Mingshun Li, Gejiao Wang*. (2013) Correlation models between environmental factors and bacterial resistance to antimony and copper. PLoS One 8(10): e78533. IF=3.73\r\n17)	Gejiao Wang*, Qian Wang, Fang Chen, Jingxin Li. (2014) Research progress of microbial arsenite oxidation regulation. Journal of Microbiology (Chinese) 34(5): 1-5.\r\n18)	Gejiao Wang, Jingxin Li, Qian Wang, Mingshun Li, Birong Yang, Manman Shi, Wei Guo (2014) The function of antimonite oxidase SboA in Agrobacterium tumefaciens GW4. China Invention Patent 201410538034.6.\r\n', 'Microbial Methylphosphonate Metabolism Contributes to the Methane Oversaturation Paradox in an Oxic Freshwater Lake \r\n', 33, '589d29250f424.pdf', ''),
(33, '2017-5-17@2017-5-19', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 34, '', ''),
(34, '2017-5-17@2017-5-19', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 35, '', ''),
(35, '2017-5-17@2017-5-19', '鄢文豪', '', '男', '1983年10月13日', '生命科学(Life Science)', '博士后', '', '++49-(331)', '德国，波茨坦', '护照', 'G46678924', 'yanwenhaohzau@gmail.com', 'Karl-Liebknecht-Str. 24-25, House 29,14476 Potsdam', '本人先后从事水稻的开花期调控及拟南芥花发育的分子机制的研究。\r\n从事水稻开花期研究期间，先后克隆水稻多效性Ghd8，Ghd7.1并利用群体遗传学手段，重新定义了开花期主效基因Hd1的功能并阐明了Hd1与Ghd7，Ghd8等的互作关系。相关研究成果以并列第一作者发表在Molecular plant，Cell research及new physiologist 等杂志上。\r\n博士后工作期间，主要以拟南芥花发育为研究对象，利用ChIP-Seq，蛋白复合体分析，基于INTACT的细胞分型等技术，力图构建以转录因子为中心，包涵组蛋白甲基化，乙酰化，远端调控元件（enhancer），染色质修饰酶类及染色质变构因子等的基因转录调控网络。目前，我们初步解析组蛋白去甲基化酶REF6的分子调控功能；阐明了enhancer的动态对于基因时序性表达的作用；目前，我们也正在对染色质变构因子BRM/SYD的调控途径进行解析。基于以上工作以第一作者在current opinion in plant biology发表论文一篇，其余相应的研究论文正在整理或者投稿中。此外，出于研究需要，本人优化了适用于拟南芥的CRISPR/Cas9基因编辑系统并利用该系统实现了一个调控序列功能的鉴定。相关论文以第一作者和并列通讯作者发表在plant methods上。', 'Dynamicsof enhancers, core-promoters and H3K27ac act in concert to orchestrate stage-specific gene expression during flower morphogenesis', 36, '589f92568583b.docx', ''),
(36, '2017-5-17@2017-5-19', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 38, '', ''),
(37, '2017-5-17@2017-5-19', '韩凯', '', '男', '1987-8-10', '生命科学(Life Science)', '副研究员', '', '1300616867', '中国  武汉', '身份证', '420984198708101431', 'hank@mail.hzau.edu.cn', '湖北省武汉市华中农业大学逸夫楼', '本人主要从事多肽类材料的抗肿瘤研究\r\n10.  K Han, WY  Zhang,  J  Zhang,  Q  Lei,  SB Wang,  JW  Liu,  XZ  Zhang,  HY  Han,* “Acidity-Triggered Tumor-Targeted Chimeric Peptide for Enhanced Intra-Nuclear Photodynamic Therapy”, Adv. Funct. Mater. 2016, 26: 4351. (IF: 11.382) \r\n9.  K Han,  JY Zhu,  HZ Jia,  SB Wang,  SY Li,  XZ  Zhang*,  HY  Han,*“Mitochondria-Targeted Chimeric Peptide for Trinitarian Overcoming of Drug Resistance”, ACS Appl. Mater. Interfaces 2016, 8: 25060. (IF: 7.145) \r\n8. K Han#, SB Wang#, Q Lei, JY Zhu, XZ Zhang*, “Ratiometric Biosensor for Aggregation-Induced Emission-Guided Precise Photodynamic Therapy”, ACS Nano 2015, 9: 10268. (IF: 13.334) \r\n7. K Han, Q Lei, SB Wang, JJ Hu, WX Qiu, JY Zhu, WN Yin, X Luo, XZ Zhang*, “Dual-Stage-Light-Guided Tumor Inhibition by Mitochondria-Targeted Photodynamic Therapy”, Adv. Funct. Mater. 2015, 25: 2961 (Inside Front Cover Paper). (IF: 11.382) \r\n6. K  Han,  Q Lei, HZ Jia, SB Wang, WN Yin, WH Chen, SX Cheng,  XZ  Zhang*,  “A Tumor Targeted Chimeric Peptide for Synergistic Endosomal Escape and Therapy by Dual-Stage Light Manipulation”, Adv. Funct. Mater. 2015, 25: 1248. (IF: 11.382) \r\n5. K Han, WN Yin, JX Fan, FY Cao, XZ Zhang*, “Photo-Activatable Substrates for Site-Specific Differentiation of Stem Cells”, ACS Appl. Mater. Interfaces 2015, 7: 23679. (IF: 7.145) \r\n4. K Han, JY Zhu, SB Wang, ZH Li, SX Cheng, XZ Zhang*, “Tumor Targeted Gold Nanoparticles for FRET-Based  Tumor  Imaging and  Light  Responsive  On-Demand  Drug  Release”,  J Mater Chem B 2015, 3: 8065. (IF: 4.872) \r\n3.  K Han,  Y  Liu, WN  Yin,  SB Wang,  Q  Xu,  RX  Zhuo,  XZ  Zhang*,  “A FRET-Based Dual-Targeting Theranostic Chimeric Peptide for Tumor Therapy and Real-Time Apoptosis Imaging”, Adv. Healthcare Mater. 2014, 3: 1765. (IF: 5.760) \r\n2. K Han, S Chen, WH Chen, Q Lei, Y Liu, RX Zhuo, XZ Zhang*, “Synergistic Gene and Drug Tumor Therapy Using a Chimeric Peptide”, Biomaterials 2013, 34: 4680. (IF: 8.387) \r\n1. K Han, J Yang, S Chen, JX Chen, CW Liu, C Li, H Cheng, RX Zhuo, XZ Zhang*, “Novel Gene Transfer Vectors Based on Artificial Recombinant Multi-Functional Oligopeptides”, Int. J. Pharm. 2012, 436: 555. (IF: 3.99) ', '肿瘤微环境响应型多肽材料用于抗肿瘤研究', 39, '58a10ac7ca2dd.pdf', ''),
(38, '2017-5-17@2017-5-19', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 40, '', ''),
(39, '2017-5-17@2017-5-19', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 41, '', ''),
(40, '2017-5-17@2017-5-19', '刘振宁', '', '男', '1988.11', '生命科学(Life Science)', '教师', '58a2bdd2cdfe6.jpg', '1785494209', '中国', '身份证', '370829198811282950', 'liuzhenning@lyu.edu.cn', '山东省临沂市兰山区双岭路中段临沂大学', '2010.9-2013.9期间，在浙江大学农业与生物技术学院园艺系蔬菜研究所细胞与分子生物学实验室攻读博士学位，主要从事十字花科芸薹属蔬菜雌蕊发育和雄蕊发育的分子机制研究,利用基因组学和生物信息学技术对白菜基因组中的基因家族进行鉴定分析，并参与白菜、甘蓝和芜菁等蔬菜的优质抗病等性状的育种工作。\r\n2013.9-2015.9期间，参加国家留学基金委资助的2年期国家公派博士生联合培养项目，赴美国加州大学戴维斯分校植物系Sundaresan教授实验室从事访问学者研究，主要从事模式植物拟南芥雌配子体细胞发育和命运分化的研究，重点集中在生长素和细胞分裂素及其相关双组分信号系统（TCS）基因与拟南芥雌配子体中央细胞和卵细胞的细胞命运分化决定的关系探究。研究发现拟南芥CKI1基因决定着中央细胞的发育和细胞分化命运，CKI1基因在珠孔端的异位表达能够将助细胞和卵细胞转变成中央细胞的细胞命运。同时，我们发现AHP2、AHP3和AHP5基因作用于CKI1基因的下游调控拟南芥雌配子体的发育。另外，我们也利用overlap extension PCR技术和酵母单杂交对CKI1的功能域、基因结构和上游转录调控因子进行了分析。\r\n论文发表情况如下：\r\n（1）Zhenning Liu, Mei Zhang, Lijun Kong, Yanxia Lv, Minghua Zou, Gang Lu, Jiashu Cao, Xiaolin Yu*. Genome-wide identification, phylogeny, duplication, and expression analyses of two-component system genes in Chinese Cabbage (Brassica rapa ssp. pekinensis). DNA Research, 2014, 21 (4):379-396\r\n（2）Zhenning Liu, Lijun Kong, Mei Zhang, Yanxia Lv, Yapei Liu, Minghua Zou, Gang Lu, Jiashu Cao, Xiaolin Yu*. Genome-wide identification, phylogeny, evolution and expression patterns of AP2/ERF genes and cytokinin response factors in Brassica rapa ssp. pekinensis. PLoS ONE, 2013, 8(12):e83444\r\n（3）Zhenning Liu, Yanxia Lv, Mei Zhang, Yapei Liu, Lijun Kong, Minghua Zou, Gang Lu, Jiashu Cao and Xiaolin Yu*. Identification, expression, and comparative genomic analysis of the IPT and CKX gene families in Chinese cabbage (Brassica rapa ssp. pekinensis). BMC Genomics, 2013, 14:594\r\n（4）Zhenning Liu, Xiaolin Yu*, Fangzhan Wang, Shuai Hu, Yapei Liu, Gang Lu. Physiological, biochemical, and molecular characterization of a new female sterile mutant in turnip. Plant Growth Regul, 2012, 68:239\r\n（5）Li Yuan, Zhenning Liu, Xiaoya Song, Cameron Johnson, Xiaolin Yu, Venkatesan Sundaresan*. The CKI1 histidine kinase specifies the female gametic precursor of the endosperm. Developmental Cell, 2016, 37(1):34–46\r\n（6）Ming Jiang*, Qinge Liu, Zhenning Liu, Jinzhi Li, Caiming He. Over-expression of a WRKY transcription factor gene BoWRKY6 enhances resistance to downy mildew in transgenic broccoli plants. Australasian Plant Pathology, 2016, 45(3):327-334\r\n（7）Xiaolin Yu*, Yapei Liu, Yanxia Lv, Zhenning Liu, Zhujun Chen, Gang Lu, Jiashu Cao. Development of molecular markers speciﬁc to petaloid-type cytoplasmic male sterility in tuber mustard (Brassica juncea var. tumida Tsen et Lee). Molecular Biology Reports, 2014, 41(2):769-778\r\n', '拟南芥CKI1基因与雌配子体细胞的发育和命运决定', 42, '58a2bdd2cdfe6.doc', ''),
(41, '2017-5-17@2017-5-19', '姜金庆', '', '男', '1972.12', '生命科学(Life Science)', '特聘教授', '58a2c71ec28cb.JPG', '3693210', '中国', '身份证', '410702197212019512', 'jjq5678@126.com', '河南省新乡市华兰大道，河南科技学院，手机：13525083536', '姜金庆，男，汉族，中共党员，1972年12月生，河南、南阳人，西北农林科技大学博士研究生，美国Michigan State University博士后。河南省高校科技创新人才、河南省科技创新杰出青年、校特聘教授、省科技特派员、SCI审稿专家、多家公司技术顾问等荣誉。主持国家自然科学基金、市厅级重点项目、科技成果转化项目、产学研合作项目等12项、获省科技成果8项、科技进步奖7项、授权发明专利16件、出版著作4部。发表论文40余篇，其中SCI收录16篇，EI收录5篇，国家一级学报文章10篇，CSCD核心库以上9篇。主讲《动物学》、《专业文献阅读》、《免疫学检测新技术》等课程，教学效果优秀。', '动物源食品安全免疫学快速检测技术研究进展', 43, '', ''),
(42, '2017-5-17@2017-5-19', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 44, '', ''),
(43, '2017-5-17@2017-5-19', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 45, '', '');

-- --------------------------------------------------------

--
-- 表的结构 `zp_education_experience`
--

CREATE TABLE IF NOT EXISTS `zp_education_experience` (
  `eid` int(11) NOT NULL AUTO_INCREMENT,
  `xuewei` varchar(30) NOT NULL,
  `edu_start_time` varchar(10) NOT NULL,
  `edu_end_time` varchar(10) NOT NULL,
  `zhuanye` varchar(30) NOT NULL,
  `school` varchar(30) NOT NULL,
  `aid` int(11) NOT NULL,
  PRIMARY KEY (`eid`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=130 ;

--
-- 转存表中的数据 `zp_education_experience`
--

INSERT INTO `zp_education_experience` (`eid`, `xuewei`, `edu_start_time`, `edu_end_time`, `zhuanye`, `school`, `aid`) VALUES
(40, 'Bachelor Degree (B.Sc.)', '2002.09.27', '2006.07.20', 'Agricultural Biochemistry ', 'Benha University ', 21),
(41, 'Master Degree (M.Sc.)', '2007.01.15', '2010.05.05', 'Biochemistry ', 'Benha University ', 21),
(42, 'Doctor Degree (Ph.D.)', '2011.09.04', '2015.06.22', 'Biochemistry and Molecular Bio', 'Huazhong Agricultural Universi', 21),
(49, ' 本科', '200509', '200906', '应用化学', '中国华中科技大学', 23),
(50, '博士', '200909', '201406', '材料物理与化学', '中国华中科技大学', 23),
(51, '学士学位', '200209', '200606', '应用化学', '华中农业大学', 25),
(52, '硕士学位', '200609', '200906', '物理化学', '南开大学', 25),
(53, '博士学位', '200910', '201403', '系统化学', '荷兰格罗宁根大学', 25),
(72, 'Bachelor Degree (B.Sc.)', '2002.09.15', '2006.7.15', 'Agricultural Biochemistry ', 'Benha University ', 27),
(73, 'Master Degree (M.Sc.)', '2007.01.20', '2010.05.05', 'Biochemistry ', 'Benha University ', 27),
(74, 'Doctor Degree (Ph.D.)', '2011.09.04', '2015.06.22', 'Biochemistry and Molecular Bio', 'Huazhong Agricultural Universi', 27),
(81, '农学 学士', '200509', '200906', '动物营养与饲料', '华南农业大学', 26),
(82, '硕士', '200909', '201106', '动物营养与饲料', '中国农业大学', 26),
(83, '博士', '201209', '201506', '动物营养与饲料', '中国农业大学', 26),
(87, '学士', '199909', '200306', '生物技术', '山东大学', 31),
(88, '硕士', '200309', '200606', '生物化工', '上海大学', 31),
(89, '博士', '200709', '201301', '生命科学', '新加坡国立大学', 31),
(90, 'Ph.D', '201208', '201612', 'Meat Science', 'Iowa State University ', 28),
(91, 'M.S', '200809', '201207', 'Food Science', 'Huazhong Agricultural Universi', 28),
(92, 'B.E', '200409', '200807', 'Food Science Technology and En', 'Huazhong Agricultural Universi', 28),
(101, ' 本科', '200209', '200607', '生物科学', '华中农业大学', 36),
(102, '硕士，博士', '200609', '201303', '分子遗传学', '华中农业大学', 36),
(106, ' 本科', '200606', '20106', '应用化学', '武汉大学化学与分子科学学院', 39),
(107, '硕士', '201006', '201206', '工程化学', '武汉大学化学与分子科学学院', 39),
(108, '博士', '201206', '201506', '高分子物理与化学', '武汉大学化学与分子科学学院', 39),
(109, ' 工学学士', '200309', '200706', '生物工程', '华中农业大学', 33),
(110, '理学博士', '200709', '201306', '微生物学', '华中农业大学', 33),
(111, ' 博士', '201109', '201603', '蔬菜学', '浙江大学', 42),
(112, '硕士', '201009', '201107', '蔬菜学', '浙江大学', 42),
(113, '学士', '200606', '201007', '园艺学', '聊城大学', 42),
(126, '博士后', '201311', '201412', '免疫学检测技术', 'Michigan State University', 43),
(127, '博士', '200709', '201106', '预防兽医学', '西北农林科技大学', 43),
(128, '硕士', '200409', '200706', '生物化学与分子生物学', '西北农林科技大学', 43),
(129, '学士', '199209', '199606', '畜牧兽医', '河南科技学院', 43);

-- --------------------------------------------------------

--
-- 表的结构 `zp_img`
--

CREATE TABLE IF NOT EXISTS `zp_img` (
  `img_id` int(11) NOT NULL AUTO_INCREMENT,
  `img_name` varchar(100) NOT NULL,
  PRIMARY KEY (`img_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `zp_information`
--

CREATE TABLE IF NOT EXISTS `zp_information` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `class` varchar(50) NOT NULL,
  `title` varchar(100) NOT NULL,
  `content` text NOT NULL,
  `time` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- 转存表中的数据 `zp_information`
--

INSERT INTO `zp_information` (`id`, `class`, `title`, `content`, `time`) VALUES
(1, '最新通知', '2017年南湖国际青年科学家论坛通知', '                                                                     2017年南湖国际青年科学家论坛\r\n                                                                         中国•武汉•华中农业大学\r\n                                                                          2017年5月17日-19日\r\n\r\n  一、论坛简介\r\n  南湖国际青年科学家论坛，旨在汇聚海内外优秀青年科学工作者，来华中农业大学开展学术交流，共同探讨学术前沿，加深友谊，促进合作。\r\n  华中农业大学是中国最好农业大学之一，是一所以生命科学为特色，覆盖农、理、工、文、法、经、管、艺等学科门类的国家重点建设高校，农业科学、植物与动物学、化学、生物学与生物化学、分子生物学与遗传学、微生物学6个学科领域进入ESI国际同类学科领域前1%。学校位于中国湖北省武汉市武昌南湖狮子山, 占地面积约5平方公里，三面环湖，风景秀丽，是难得的宜居宜业佳地。\r\n  论坛主页：http://211.69.132.91\r\n  二、论坛学科领域\r\n  从事生命科学（含生物学、生物医学、作物学、植物保护、畜牧学、兽医学、园艺学、水产学）、环境科学、化学、食品营养与健康、信息科学、工程与材料科学、风景园林学、人文社会科学（含管理学、经济学、法学）等领域。\r\n  三、申请条件\r\n  在海内外知名学术机构取得博士学位，具备独立开展科学研究能力，在相关研究领域取得代表性成果，具有发展潜力的海内、外优秀青年人才。\r\n  四、时间安排\r\n  2017年3月15日前，在线提交申请和个人CV，网址http://211.69.132.91；\r\n  2017年3月25日前，确定参会人员，发送邀请函（根据申请提交时间，主办方会及时确定参会人员，分批发送邀请函）；\r\n  2017年5月17日，参会人员报到；\r\n  2017年5月18-19日，论坛主报告、分领域报告、参观座谈等。\r\n  五、差旅及食宿\r\n  受邀参会学者往返差旅经费由主办单位提供（经济舱），论坛期间食宿由主办单位统一安排。\r\n  六、联系人与联系方式\r\n  赵希庆,+86（27）87280957;rcb@mail.hzau.edu.cn\r\n\r\n  欢迎海内外青年学者踊跃报名、咨询相关细节，在学校寒假期间（2017年1月18日至2月8日）仍接受邮件咨询。因故不能参加集中论坛活动的学者，我们依然竭诚欢迎您与我们联系，协商确定您在合适时段来校交流。\r\n\r\n                                                                                                                  华中农业大学\r\n                                                                                                                 2017年1月20日\r\n', '2017-01-23'),
(2, '最新通知', ' South Lake Innovation Forum for International Young Talents', '                                   South Lake Innovation Forum for International Young Talents\r\n                                           Huazhong Agricultural University, Wuhan, China\r\n                                                                 May 17-19, 2017\r\n\r\n1. Introduction\r\nThe South Lake Innovation Forum for International Young Talents (South Lake Forum) aims to gather outstanding young talented scientists and technologists from all over the world to carry out international academic exchanges in Huazhong Agricultural University, to explore research academic frontier, and deepen friendship and promote international cooperation.\r\nHuazhong Agricultural University (HZAU) is one of the best agricultural universities in China. Featuring life science, HZAU also gives much emphasis on the rational disciplinary construction of agriculture, sciences, engineering, arts, law, economics, and management. According to ESI ranking, Crop science, Plant & Animal science, Chemistry, Biology & Biochemistry, Molecular Biology & Genetics, and Microbiology have ranked the top 1% in the above mentioned disciplines. Covering an area of 495 hectares, the campus is surrounded from three sides by clear lakes and backed by green hills, making it an ideal place for teaching and research.\r\nFor more details and signing up for the upcoming event, you can find it on the forum website: http://211.69.132.91. \r\n2. Disciplines\r\nThe forum covers a wide range of disciplines, such as:\r\nI.	Life sciences: include Biology, Biomedical science, Crop science, Nanotechnology science, Plant pathology, Animal science, Veterinary science, Horticulture science and Fishery sciences;\r\nII.	Environmental sciences;\r\nIII.	Chemistry;\r\nIV.	Food nutrition and health;\r\nV.	Informatics;\r\nVI.	Engineering and Materials science;\r\nVII.	Academic  Landscape  Architecture；\r\nVIII.	Humanities and Social sciences: include Management, Economics and Law.\r\n3. Requirements for participants to apply \r\nHold a doctoral degree from a world well-known university， and have shown innovation and potential in his/her research area.\r\n4. Schedule \r\nMarch 15: Online Application Deadline and upload your updated personal C.V. website: http://211.69.132.91；\r\nMarch 25: Short-listed participants selected and issue of invitation letter；\r\nMay 17:  Registration on Forum Site；\r\nMay 18-19: Opening Ceremony, Forum Reports, Discussion sections and sightseeing visits etc.\r\n5. Travel and Accommodation\r\nAll the attendees will be supported with traveling expenses（economy class） and accommodation.\r\n6. Contact Information\r\nContact: Mr. Zhao Xiqing\r\nPhone: +86（27）8728-0957\r\nEmail: rcb@mail.hzau.edu.cn \r\n\r\nIf you have any question, please don’t hesitate to contact us. All Young Talented Scientist around the world are welcome to sign up and apply for this forum, the contact information is available during the winter holiday.\r\n\r\nHuazhong Agricultural University\r\nJan 20, 2017\r\n\r\n', '2017-01-23'),
(3, '工作动态', '【科学网】首届南湖国际青年科学家论坛召开', '  近日，首届南湖生命科学国际青年科学家论坛在华中农业大学召开。来自美国国立卫生研究院、哈佛大学医学院、杜克大学等海外学术机构的20位青年学者受邀参会，并围绕生物医学、畜牧兽医、微生物学、水产和植物生物学等领域作专题报告。\r\n\r\n  中国科学院院士、华中农业大学生命科学技术学院张启发教授在致辞中表示，华中农业大学的生物学在国内一直保持在第一方阵，但若干二级学科方向仍是空白，有待根据学科发展、时代变化和人才培养的需求，积极发展生物医学，不断拓展学科领域。\r\n\r\n  据介绍，南湖国际青年科学家论坛是华中农业大学实施对外开放办学的一项新举措，旨在进一步拓展学科领域和加强人才队伍国际化，未来还将围绕作物科学等不同领域展开交流。', '2017-01-23'),
(4, '工作动态', '首届南湖国际青年科学家论坛在我校召开', '  南湖新闻网讯（记者 兰涵旗）6月23日上午，首届南湖生命科学国际青年科学家论坛在我校国际学术交流中心学术报告厅开幕。2位国内知名特邀专家、20位来自全球的青年科学家，国际合作与交流处、人事处、生科院、动科动医学院、水产学院、信息学院负责人和学校师生300余人参加论坛。副校长高翅教授、中国科学院院士张启发出席论坛并致辞。生科院院长王学路教授主持开幕式。\r\n\r\n  高翅对来校参加论坛的嘉宾表示热烈欢迎。他指出，大学作为一个学术共同体，都有一个共同的价值追求。华农的价值追求就是“勤读力耕、立己达人”。他表示，华中农大有一个鲜明的特点就是“生态优雅”。其中，既有自然生态与人和谐相处，校园9公里的湖岸线，10分钟从家到实验室、食堂、试验田和幼儿园的生活圈；又有由一代代华农学人积淀下来的，以“实事求是、激扬梦想、追求卓越、卓尔不群”为特征的良好的学术生态。他深情回顾了华农三代归国博士在学校这片沃土上创业发展的故事。“如果你想做真学问、真做学问，那么选择来到华农，一定是正确的”。他邀请各位青年学者来华农建功立业，并表示学校将一如既往地尊重人才成长规律，给予成长适应期，“多一些雪中送炭的帮助，少一些锦上添花的浓妆”。\r\n\r\n  张启发结合学校“十三五”规划提出的要完成综合性大学学科布局的目标任务，希望大家把“华中农业大学的农业二字，多理解成名词，而不是形容词”。他表示，我校的生物学在国内一直保持在第一方阵，但若干二级学科方向仍是空白，有待根据学科发展、时代变化和人才培养的需求，积极发展生物医学，不断拓展学科领域。他期待各位青年才俊在狮子山书写人生精彩华章。\r\n\r\n  开幕式结束后，武汉大学基础医学院院长郭德银教授作了题为《肿瘤抑制蛋白PTEN与抗病毒》的首场特邀报告。来自美国国立卫生研究院、哈佛大学医学院、杜克大学等海外学术机构的20位青年学者相继围绕生物医学、畜牧兽医、微生物学、水产和植物生物学等领域展开专题报告。\r\n\r\n  审核：张翅  金安江\r\n', '2017-01-23');

-- --------------------------------------------------------

--
-- 表的结构 `zp_professior`
--

CREATE TABLE IF NOT EXISTS `zp_professior` (
  `pid` int(11) NOT NULL AUTO_INCREMENT,
  `user` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `college` varchar(50) NOT NULL,
  `work_area` varchar(50) NOT NULL,
  `kp1` varchar(50) NOT NULL,
  `kp2` varchar(50) NOT NULL,
  `kp3` varchar(50) NOT NULL,
  `grant` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  PRIMARY KEY (`pid`,`user`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `zp_proform`
--

CREATE TABLE IF NOT EXISTS `zp_proform` (
  `tid` int(11) NOT NULL AUTO_INCREMENT,
  `tr1` int(11) NOT NULL,
  `tr2` int(11) NOT NULL,
  `tr3` int(11) NOT NULL,
  `sum` int(11) NOT NULL,
  `idea` text NOT NULL,
  `assess` varchar(10) NOT NULL,
  `numid` int(11) NOT NULL,
  `ad_id` int(11) NOT NULL,
  `pid` int(11) NOT NULL,
  PRIMARY KEY (`tid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `zp_replay`
--

CREATE TABLE IF NOT EXISTS `zp_replay` (
  `rid` int(11) NOT NULL AUTO_INCREMENT,
  `apt_user` varchar(100) NOT NULL,
  `ad_id` int(11) NOT NULL,
  `state` varchar(100) NOT NULL,
  PRIMARY KEY (`rid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `zp_shuoming`
--

CREATE TABLE IF NOT EXISTS `zp_shuoming` (
  `sid` int(11) NOT NULL AUTO_INCREMENT,
  `ltjs` text NOT NULL,
  `sqtj` text NOT NULL,
  `sqsj` text NOT NULL,
  `rcap` text NOT NULL,
  `clzs` text NOT NULL,
  `lxfs` text NOT NULL,
  `ltsm` text NOT NULL,
  `time` varchar(50) NOT NULL,
  PRIMARY KEY (`sid`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- 转存表中的数据 `zp_shuoming`
--

INSERT INTO `zp_shuoming` (`sid`, `ltjs`, `sqtj`, `sqsj`, `rcap`, `clzs`, `lxfs`, `ltsm`, `time`) VALUES
(1, '2017年南湖国际青年科学家论坛\r\n中国•武汉•华中农业大学\r\n2017年5月17日-19日\r\n\r\n一、论坛简介\r\n南湖国际青年科学家论坛，旨在汇聚海内外优秀青年科学工作者，来华中农业大学开展学术交流，共同探讨学术前沿，加深友谊，促进合作。\r\n华中农业大学是中国最好农业大学之一，是一所以生命科学为特色，覆盖农、理、工、文、法、经、管、艺等学科门类的国家重点建设高校，农业科学、植物与动物学、化学、生物学与生物化学、分子生物学与遗传学、微生物学6个学科领域进入ESI国际同类学科领域前1%。学校位于中国湖北省武汉市武昌南湖狮子山, 占地面积约5平方公里，三面环湖，风景秀丽，是难得的宜居宜业佳地。\r\n论坛主页：http://211.69.132.91\r\n二、论坛学科领域\r\n从事生命科学（含生物学、生物医学、作物学、植物保护、畜牧学、兽医学、园艺学、水产学）、环境科学、化学、食品营养与健康、信息科学、工程与材料科学、风景园林学、人文社会科学（含管理学、经济学、法学）等领域。\r\n三、申请条件\r\n在海内外知名学术机构取得博士学位，具备独立开展科学研究能力，在相关研究领域取得代表性成果，具有发展潜力的海内、外优秀青年人才。\r\n四、时间安排\r\n2017年3月15日前，在线提交申请和个人CV，网址http://211.69.132.91；\r\n2017年3月25日前，确定参会人员，发送邀请函（根据申请提交时间，主办方会及时确定参会人员，分批发送邀请函）；\r\n2017年5月17日，参会人员报到；\r\n2017年5月18-19日，论坛主报告、分领域报告、参观座谈等。\r\n五、差旅及食宿\r\n受邀参会学者往返差旅经费由主办单位提供（经济舱），论坛期间食宿由主办单位统一安排。\r\n六、联系人与联系方式\r\n赵希庆,+86（27）87280957;rcb@mail.hzau.edu.cn\r\n\r\n欢迎海内外青年学者踊跃报名、咨询相关细节，在学校寒假期间（2017年1月18日至2月8日）仍接受邮件咨询。因故不能参加集中论坛活动的学者，我们依然竭诚欢迎您与我们联系，协商确定您在合适时段来校交流。\r\n\r\n华中农业大学\r\n2017年1月20日\r\nSouth Lake Innovation Forum for International Young Talents\r\nHuazhong Agricultural University, Wuhan, China\r\nMay 17-19, 2017\r\n\r\n1. Introduction\r\nThe South Lake Innovation Forum for International Young Talents (South Lake Forum) aims to gather outstanding young talented scientists and technologists from all over the world to carry out international academic exchanges in Huazhong Agricultural University, to explore research academic frontier, and deepen friendship and promote international cooperation.\r\nHuazhong Agricultural University (HZAU) is one of the best agricultural universities in China. Featuring life science, HZAU also gives much emphasis on the rational disciplinary construction of agriculture, sciences, engineering, arts, law, economics, and management. According to ESI ranking, Crop science, Plant &amp; Animal science, Chemistry, Biology &amp; Biochemistry, Molecular Biology &amp; Genetics, and Microbiology have ranked the top 1% in the above mentioned disciplines. Covering an area of 495 hectares, the campus is surrounded from three sides by clear lakes and backed by green hills, making it an ideal place for teaching and research.\r\nFor more details and signing up for the upcoming event, you can find it on the forum website: http://211.69.132.91. \r\n2. Disciplines\r\nThe forum covers a wide range of disciplines, such as:\r\nI.	Life sciences: include Biology, Biomedical science, Crop science, Nanotechnology science, Plant protection, Animal science, Veterinary science, Horticulture science and Fishery sciences;\r\nII.	Environmental sciences;\r\nIII.	Chemistry;\r\nIV.	Food nutrition and health;\r\nV.	Informatics;\r\nVI.	Engineering and Materials science;\r\nVII.	Academic  Landscape  Architecture；\r\nVIII.	Humanities and Social sciences: include Management, Economics and Law.\r\n3. Requirements for participants to apply \r\nHold a doctoral degree from a world well-known university， and have shown innovation and potential in his/her research area.\r\n4. Schedule \r\nMarch 15: Online Application Deadline and upload your updated personal C.V. website: http://211.69.132.91；\r\nMarch 25: Short-listed participants selected and issue of invitation letter；\r\nMay 17:  Registration on Forum Site；\r\nMay 18-19: Opening Ceremony, Forum Reports, Discussion sections and sightseeing visits etc.\r\n5. Travel and Accommodation\r\nAll the attendees will be supported with traveling expenses（economy class） and accommodation.\r\n6. Contact Information\r\nContact: Mr. Zhao Xiqing\r\nPhone: +86（27）8728-0957\r\nEmail: rcb@mail.hzau.edu.cn \r\n\r\nIf you have any question, please don’t hesitate to contact us. All Young Talented Scientist around the world are welcome to sign up and apply for this forum, the contact information is available during the winter holiday.\r\n\r\nHuazhong Agricultural University\r\nJan 20, 2017\r\n\r\n', '  中国高等农业教育起点之一。学校前身是清朝光绪年间湖广总督张之洞1898年创办的湖北农务学堂。几经演变，1952年，武汉大学农学院和湖北农学院的全部系科以及中山大学等6所综合性大学农学院的部分系科组建成立华中农学院。1979年，经国务院批准列为全国重点大学，直属农业部。1985年，更名为华中农业大学。2000年，由农业部划转教育部直属领导。2005年，进入国家“211工程”建设行列。\r\n\r\n  党和国家领导亲切关怀。董必武、李先念等先后为学校题词和题写校名。1998年，时任中共中央总书记、国家主席江泽民为学校百年校庆亲笔题词。2011年，时任中共中央总书记、国家主席胡锦涛听取我校关于生物产业的汇报。2013年，中共中央总书记、国家主席习近平为我校“本禹志愿服务队”亲笔回信。\r\n\r\n  校园环境得天独厚。校园位于湖北省武汉市武昌南湖狮子山,占地面积495万㎡（7425亩），三面环湖，风景秀丽，环境幽雅，建筑楼群鳞次栉比，自然园林风貌引人入胜。\r\n\r\n  学科优势特色明显。在2012年全国第三轮一级学科评估中，6个学科名列同类学科前三位。其中，园艺学第1，畜牧学、兽医学第2，作物学、水产、农林经济管理第3，农业资源与环境第5，植物保护第7，生物学第8（排名率进入前10%），食品科学与工程第10（排名率进入前20%）。农业科学、植物与动物学、化学、生物学与生物化学、分子生物学与遗传学五个学科领域进入ESI国际同类学科领域前1%。\r\n\r\n  教育体系完整。现有学院（部）18个，本科专业57个，硕士学位授权一级学科19个，二级学科102个，博士学位授权一级学科13个，二级学科65个，博士后科研流动站13个。全日制在校学生26196人，其中本科生18763人，研究生7433人。\r\n\r\n  硕彦俊秀荟萃。现有教职工2600多人，其中教师1569人，教授340人。有中国科学院院士1人，中国工程院院士4人，美国科学院外籍院士1人，第三世界科学院院士2人，千人计划专家20人，万人计划专家4人，长江学者23人，国家杰青19人，973计划首席科学家6人，现代农业产业技术体系首席科学家1人、岗位科学家39人。国家自然科学基金创新研究群体3个，省部级优秀创新团队38个。国家级教学名师4人，国家教学团队7个。\r\n\r\n  教育教学改革卓有成效。累计获国家级教学成果奖22项，其中特等奖1项、一等奖3项、二等奖18项。“十二五”期间，获批国家教育体制改革项目1项、国家专业综合改革试点专业2个、国家“卓越工程师教育培训计划”专业2个、国家“卓越农林人才教育培养计划”专业8个、国家级实验教学示范中心4个、国家级大学生校外实践基地10个、教育部农业部农科教合作人才培养基地6个、国家级精品资源共享课32门、国家级精品视频公开课10门、国家级“十二五”规划教材18种。\r\n\r\n  科技实力雄厚。有国家重点实验室2个，国家地方联合工程实验室1个，国家专业实验室4个，部省级重点（工程）实验室21个，国际科技合作基地5个，国家工程（技术）研究中心4个，部省级工程（技术）研究中心24个，校企共建实验室（研发中心）28个，省级人文社科重点研究基地2个。“十二五”期间，获批科研项目5388项，经费31.29亿元。在杂交油菜、绿色水稻、优质种猪、动物疫苗、优质柑橘、试管种薯等研究领域，取得一批享誉国内外的标志性成果。\r\n\r\n  精神文明建设成绩优异。1996年以来，学校连续十次被评为湖北省最佳文明单位，2005年获全国精神文明建设先进单位，2008年以来，三度荣膺全国文明单位。\r\n', '一、招聘领域 \r\n \r\n农业科学、植物与动物学、生物学与生物化学、分子生物学&amp;遗传学、化学、微生物学等6个已进入ESI前1%的学科，生物医学、环境科学与生态学、免疫学、药理学&amp;毒理学、综合交叉学科以及食品、风景园林、信息、经济、管理、法学等领域。 \r\n \r\n具体招聘岗位请点击： \r\n \r\n华中农业大学2017年专任教师招聘计划\r\n \r\n二、发展支持 \r\n \r\n实行“一人一事一议”，按照“一流人才一流支持，安居乐业保障具综合竞争力”原则，签订个性化聘约。 \r\n \r\n（一）学科领军人才（聘为教授） \r\n \r\n“千人计划”“万人计划-领军人才”“长江学者”“国家杰青”及有效候选人； \r\n \r\n全职：科研支持（大型仪器设备另计）自然科学不低于500万元、人文社科不低于200万元，支持组建创新团队；极具竞争力的薪酬和安居保障。 \r\n \r\n非全职：科研支持自然科学100-300万元、人文社科100-200万元，共建实验室和研究团队；免费提供专家公寓，5-10万元月薪。 \r\n \r\n（二）青年拔尖人才（聘为教授或其他正高职务） \r\n \r\n“青年千人”“万人计划-青年拔尖人才”“青年长江”“国家优青”“湖北青年百人”及有效候选人；优势学科领域一般不超过35周岁，发展中学科、急需学科和特别优秀的可适当放宽至40周岁；全职来校工作。 \r\n \r\n科研支持自然科学100-300万元（大型仪器设备另计）、人文社科50万元左右，支持组建学术团队；基础年薪25-40万元（科研绩效、综合奖励另计），提供专家公寓（或周转房）和30-60万元购房补贴（要求工作满两个聘期），享有全额房贴，安排未成年子女入学入托，按程序招聘配偶。 \r\n \r\n（三）优秀青年人才（副教授或相应职务） \r\n \r\n学术经历优、业绩突出且具发展潜力的博士或博士后，一般不超过35周岁；全职来校工作，聘至相应岗位并享有相应待遇，亦可实行协议工资制。 \r\n \r\n提供科研启动费，副教授:文科15万元、理科20万元、工科25万元； 新进博士:文科10万元、理科15万元、工科20万元；所属团队提供相应的实验和办公条件。 \r\n \r\n提供在同类地区高校具有竞争力的薪酬和住房待遇，新进博士提供1000元/月生活津贴（急需发展学科和海外博士学位获得者2000元/月），连续发放3年。 \r\n \r\n（四）师资博士后 \r\n \r\n学术经历和科研产出良好且具发展潜力，达到相应学科教师招聘基本条件的博士学位获得者，年龄不超过32周岁。 \r\n \r\n年收入一般不低于15万元，在子女入托、上学、医疗方面享受与校内在职教职工相同待遇；出站考核达到协议约定条件聘至学校相应岗位。\r\n三、招聘程序 \r\n \r\n个人申请、院学术委员会考核推荐、校评审委员会评审、校办公会审定、公示、体检和心理测试等环节，学校在启动引进程序2个月内反馈校内评审结果。 \r\n \r\n副教授及以下岗位不设校评审委员会评审、校办公会审定环节，学校在启动招聘程序1个月内反馈结果。 \r\n \r\n有意应聘者请登录华中农业大学招聘网注册用户登录，选择岗位报名，并上传个人近期证件照及相应附件材料。 \r\n \r\n招聘网网址为：http://rs.hzau.edu.cn/zhaopin \r\n \r\n申报“千人计划”等人才项目者，按照主管部门要求提供材料，学校据需提供协助和团队指导。 \r\n \r\n四、联系我们 \r\n \r\n人事处联系人：任老师 欧老师 赵老师 \r\n \r\n联系电话：027-87280957 \r\n \r\nE-mail：rcb@mail.hzau.edu.cn \r\n \r\n地址：湖北省武汉市洪山区狮子山街1号 \r\n \r\n', '　　2016年4月30日前，接受申请，分批确定并邀请;\r\n　　2016年5月31日，确定参会人员和具体安排；\r\n　　2016年6月24日，参会人员报到；\r\n　　2016年6月25-26日，论坛报告、交流考察、签意向聘约。', '　　受邀参会学者往返差旅经费由主办单位提供，论坛期间食宿由主办单位统一安排。相关说明如下：\r\n　　1．根据财务要求，国际差旅应有电子机票行程单、登机牌，国内差旅应有原始票据；护照复印件，含出入境时间联，应注明仅用于财务报销；国内银行卡复印件，注明仅用于财务报销；\r\n　　2．报销最高限额1万元/人。国内多日多地停留的，仅报销回国第一站费用（当日转机除外）和到武汉的最后一站费用。', '　　华中农业大学人事处\r\n　　联系人：赵老师\r\n　　电话：+86-27-87280957，13545393650\r\n　　传真：+86-27-87282048\r\n　　QQ：66398933\r\n　　邮箱：rcb@mail.hzau.edu.cn\r\n　　欢迎海内外青年学者踊跃报名、咨询相关细节，在学校寒假期间（2016年1月27日至2月17日）仍接受邮件咨询。', '为广泛吸引海外青年学者来校交流，满足不同学者的时间要求，本次论坛活动采取集中与分散两种形式，分为集中论坛和论坛季。\r\n①集中论坛\r\n    报到时间：2017年5月17日\r\n    论坛报告交流时间：2017年5月18日-19日\r\n②论坛季\r\n    时间区段为：2017年1月20日-2017年5月30日。凡是不能参加集中论坛活动的学者，我们依然竭诚欢迎您与我们联系，我们会与相关院系及科研机构单位沟通，协商确定您在论坛季中合适时段来我校考察交流。 ', '2017-5-17@2017-5-19');

-- --------------------------------------------------------

--
-- 表的结构 `zp_work_experience`
--

CREATE TABLE IF NOT EXISTS `zp_work_experience` (
  `wid` int(11) NOT NULL AUTO_INCREMENT,
  `job` varchar(20) NOT NULL,
  `job_start_time` varchar(15) NOT NULL,
  `job_end_time` varchar(15) NOT NULL,
  `nation` varchar(20) NOT NULL,
  `company` varchar(20) NOT NULL,
  `aid` int(11) NOT NULL,
  PRIMARY KEY (`wid`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=86 ;

--
-- 转存表中的数据 `zp_work_experience`
--

INSERT INTO `zp_work_experience` (`wid`, `job`, `job_start_time`, `job_end_time`, `nation`, `company`, `aid`) VALUES
(28, 'Postdoctoral ', '2016.03.28', '2018.03.27', 'China', 'Huazhong Agricultral', 21),
(29, 'Lecturer', '2007.01.27', '2017.01.22', 'Egypt', 'Benha University ', 21),
(36, '博士后', '201506', '至今', '美国', '西弗吉利亚大学', 23),
(37, '博士后', '201406', '201503', '日本', '东京大学', 23),
(38, '高级访问学者', '201404', '201407', '中国', '中国科学院化学研究所', 25),
(39, '博士后', '201408', '201608', '英国', '牛津大学', 25),
(40, '研究员，博士生导师', '201609', '', '芬兰', '图尔库大学', 25),
(50, 'Postdoctoral ', '2016.03.25', '2018.03.24', 'China', 'Huazhong Agricultral', 27),
(51, 'Lecturer', '2007.01.27', 'Till now', 'Egypt', 'Huazhong Agricultura', 27),
(56, '配方经理', '201107', '201208', '中国', '希杰饲料', 26),
(57, '博士后', '201507', '至今', '美国', '明尼苏达大学双城校区', 26),
(60, '研究助理', '200610', '200709', '新加坡', '新加坡国立大学', 31),
(61, '博士后', '201301', '', '奥地利', 'Gregor mendel instit', 31),
(62, 'Postdoctoral Researc', '201701', 'Present', 'United States', 'Iowa State Universit', 28),
(75, '博士后', '201303', '201705', '德国', '波茨坦大学', 36),
(77, '副研究员', '201506', '201705', '中国', '华中农业大学', 39),
(78, '科研助理', '201307', '201312', '中国', '农业微生物学国家重点实验室', 33),
(79, '博士后', '201401', '201601', '中国', '华中农业大学', 33),
(80, '研究学者', '201601', '至今', '美国', '蒙大拿州立大学', 33),
(81, '教师', '201604', '201702', '中国', '临沂大学', 42),
(85, '教师', '199609', '201702', '中国', '河南科技学院', 43);

-- --------------------------------------------------------

--
-- 表的结构 `zp_zjform`
--

CREATE TABLE IF NOT EXISTS `zp_zjform` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `numid` int(11) NOT NULL,
  `pid` int(11) NOT NULL,
  `state` int(11) NOT NULL,
  `ad_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
