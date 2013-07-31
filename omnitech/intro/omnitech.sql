-- phpMyAdmin SQL Dump
-- version 2.11.6
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2010 年 05 月 07 日 11:24
-- 服务器版本: 5.0.51
-- PHP 版本: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `omnitech`
--

-- --------------------------------------------------------

--
-- 表的结构 `card`
--

CREATE TABLE `card` (
  `id` smallint(3) NOT NULL auto_increment,
  `xtimage` varchar(100) default NULL,
  `image` varchar(100) default NULL,
  `key1` varchar(40) NOT NULL default 'TYPE',
  `key2` varchar(40) NOT NULL default 'Frequency',
  `key3` varchar(40) NOT NULL default 'Protocol',
  `key4` varchar(40) NOT NULL default 'EEPROM Size',
  `key5` varchar(40) NOT NULL default 'Material',
  `key6` varchar(40) NOT NULL default 'Temperature',
  `key7` varchar(40) NOT NULL default 'Dimension',
  `key8` varchar(40) NOT NULL default 'PDF Manual',
  `name` varchar(100) default NULL,
  `value2` varchar(100) default NULL,
  `value3` varchar(100) default NULL,
  `value4` varchar(100) default NULL,
  `value5` varchar(100) default NULL,
  `value6` varchar(100) default NULL,
  `value7` varchar(100) default NULL,
  `value8` varchar(100) default NULL,
  `showprice` smallint(1) NOT NULL default '1',
  `price11` varchar(40) default NULL,
  `price12` varchar(40) default NULL,
  `price13` varchar(40) default NULL,
  `price14` varchar(40) default NULL,
  `price15` varchar(40) default NULL,
  `price16` varchar(40) default NULL,
  `price21` varchar(40) default NULL,
  `price22` varchar(40) default NULL,
  `price23` varchar(40) default NULL,
  `price24` varchar(40) default NULL,
  `price25` varchar(40) default NULL,
  `price3` varchar(40) default NULL,
  `price4` varchar(40) default NULL,
  `price5` varchar(40) default NULL,
  `price6` varchar(40) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- 导出表中的数据 `card`
--

INSERT INTO `card` (`id`, `xtimage`, `image`, `key1`, `key2`, `key3`, `key4`, `key5`, `key6`, `key7`, `key8`, `name`, `value2`, `value3`, `value4`, `value5`, `value6`, `value7`, `value8`, `showprice`, `price11`, `price12`, `price13`, `price14`, `price15`, `price16`, `price21`, `price22`, `price23`, `price24`, `price25`, `price3`, `price4`, `price5`, `price6`) VALUES
(1, 'ultraLight.JPG', 'ultraLight.JPG', 'TYPE', 'Frequency', 'Protocol', 'EEPROM Size', 'Material', 'Temperature', 'Dimension', 'PDF Manual', 'Ultralight', '13.56MHz', 'ISO14443A', '512 bit', 'PVC', ' -20? - +50¡æ', '85.6 ¡Á 54.0 ¡Á 0.86mm ', 'ultralight.pdf', 1, '$0.04', '$0.38', '$0.36', '$0.35', '$0.34', '$0.30', '+ $0.03', '+ $0.01', '+ $0.01', '+ $0.01', '+ $0.01', '+ $0.01', '+ $0.05', '+ $0.10', '+ $0.05'),
(2, NULL, NULL, 'TYPE', 'Frequency', 'Protocol', 'EEPROM Size', 'Material', 'Temperature', 'Dimension', 'Datasheet', 'cardname', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(10, 'desfirea.jpg', 'desfire.jpg', 'TYPE', 'Frequency', 'Protocol', 'EEPROM Size', 'Material', 'Temperature', 'Dimension', 'Datasheet', 'Desfirea', '13.56MHz', 'ISO14443A', '4096 Byte', 'PVC', '-20¡æ - +50¡æ', ' 85.6 ¡Á 54 ¡Á 0.86 ( mm ) ', 'desfire.pdf', 1, '$3.00', '$2.50', '$2.30', '$2.20', '$2.10', '$2.00', '+ $0.03', '+ $0.01', '+ $0.01', '+ $0.01', '+ $0.01', '+ $0.01', '+ $0.05', '+ $0.01', ''),
(9, 'Mifare 4K.jpg', 'Mifare 4K.JPG', 'TYPE', 'Frequency', 'Protocol', 'EEPROM Size', 'Material', 'Temperature', 'Dimension', 'Datasheet', 'Mifare 4K', '13.56MHz', 'ISO14443A', '4096 Byte', 'PVC', '-20¡æ - +50¡æ', '85.6 ¡Á 54 ¡Á 0.86  mm ', 'Mifare 4K.pdf', 1, '$1.50', '$1.30', '$1.20', '$1.05', '$0.95', '$0.88', '+ $0.03', '+ $0.01', '+ $0.01', '+ $0.01', '+ $0.01', '+ $0.01', '+ $0.05', '+ $0.10', '+ $0.05'),
(8, 'Mifare 1K.JPG', 'Mifare 1K.JPG', 'TYPE', 'Frequency', 'Protocol', 'EEPROM Size', 'Material', 'Temperature', 'Dimension', 'Datasheet', 'Mifare 1K', '13.56MHz', 'ISO14443A', '1024 Byte', 'PVC', '-20¡æ - +50¡æ', ' 85.6 ¡Á 54 ¡Á 0.86 ( mm ) ', 'Mifare 1K..pdf', 1, '$0.50', '$0.48', '$0.47', '$0.46', '$0.45', '$0.42', '+$0.03', '+$0.01', '+$0.01', '+$0.01', '+$0.01', '+$0.01', '+$0.05', '+$0.10', '+$0.05'),
(11, 'i.code.jpg', 'icode.JPG', 'TYPE', 'Frequency', 'Protocol', 'EEPROM Size', 'Material', 'Temperature', 'Dimension', 'PDF Manual', 'I.code.SLI', '13.56MHz', 'ISO15693', '128 Byte', 'PVC', '-20¡æ - +50¡æ', '85.6 ¡Á 54 ¡Á 0.86  mm ', 'I.code.SLI.pdf', 1, '$0.40', '$0.38', '$0.36', '$0.35', '$0.34', '$0.30', '$0.03', '$0.01', '$0.01', '$0.01', '$0.01', '$0.01', '$0.05', '$0.10', '$0.05'),
(13, 'emh4100.jpg', 'EM Proxmity.jpg ', 'TYPE', 'Frequency', 'ID Size', 'Material', 'Temperature', 'Dimension', '', 'User Manual', 'EM4100', '125KHz', ' 40 bit', ' PVC', ' -20¡æ - +50¡æ', ' 85.6 ¡Á 54 ¡Á 0.86 ( mm )', '', 'EM4100.pdf', 1, '$0.28', '$0.26', '$0.25', '$0.24', '$0.20', '$0.18', '+ $0.03', '+ $0.01', '+ $0.01', '+ $0.01', '+ $0.01', '+ $0.01', '+ $0.05', '+ $0.10', '');

-- --------------------------------------------------------

--
-- 表的结构 `class`
--

CREATE TABLE `class` (
  `classid` int(3) NOT NULL auto_increment,
  `classimage` varchar(40) default NULL,
  `classname` varchar(40) default NULL,
  PRIMARY KEY  (`classid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- 导出表中的数据 `class`
--

INSERT INTO `class` (`classid`, `classimage`, `classname`) VALUES
(1, 'Access Control System.jpg', 'Access Control System'),
(2, 'cards.jpg', 'Card'),
(3, 'labels.jpg', 'RFID Label'),
(4, 'modules.jpg', 'RFID OEM Module'),
(5, 'parts.jpg', 'RFID Parts'),
(6, 'readers.jpg', 'RFID Reader'),
(7, 'RFID Chip.jpg', 'RFID Chip'),
(8, 'RFID Development Kit.jpg', 'RFID Development Kit'),
(9, 'tags.jpg', 'RFID Tag');

-- --------------------------------------------------------

--
-- 表的结构 `main_catalog`
--

CREATE TABLE `main_catalog` (
  `id` int(3) NOT NULL auto_increment,
  `tabtitle` varchar(40) default NULL,
  `tabnew` smallint(1) NOT NULL default '0',
  `tabimage` varchar(40) default NULL,
  `tabp` varchar(300) default NULL,
  `tabpurl` varchar(60) default NULL,
  `tabsuburl` varchar(60) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- 导出表中的数据 `main_catalog`
--

INSERT INTO `main_catalog` (`id`, `tabtitle`, `tabnew`, `tabimage`, `tabp`, `tabpurl`, `tabsuburl`) VALUES
(1, 'Access Control System', 0, 'datu/Access Control System.jpg', 'this is Access Control System \r\nclass,this is Access Control System \r\nclass,this is Access Contr,this is Access Control System ,this is Access Control System ,this is Access Control System.......', 'class.php?class=Access+Control+System', 'class.php?class=Access+Control+System'),
(2, 'Card', 0, 'datu/cards.jpg', 'this is card.....', 'class.php?class=Card', 'class.php?class=Card'),
(3, 'RFID Label', 1, 'datu/labels.jpg', 'this is labels.....', 'class.php?class=RFID+Label', 'class.php?class=RFID+Label'),
(4, 'RFID OEM Module', 0, 'datu/modules.jpg', 'this is modules.....', 'class.php?class=RFID+OEM+Module', 'class.php?class=RFID+OEM+Module'),
(5, 'RFID Parts', 0, 'datu/parts.jpg', 'this is part......', 'class.php?class=RFID+Parts', 'class.php?class=RFID+Parts'),
(6, 'RFID Reader', 0, 'datu/readers.jpg', 'this is reader..........', 'class.php?class=RFID+Reader', 'class.php?class=RFID+Reader'),
(7, 'RFID Chip', 1, 'datu/RFID Chip.jpg', 'this is RFID Chip........', 'class.php?class=RFID+Chip', 'class.php?class=RFID+Chip'),
(8, 'RFID Development Kit', 0, 'datu/RFID Development Kit.jpg', 'this is RFID Development Kit..........', 'class.php?class=RFID+Development+Kit', 'class.php?class=RFID+Development+Kit'),
(9, 'RFID Tag', 0, 'datu/tags.jpg', 'this is tag.....', 'class.php?class=RFID+Tag', 'class.php?class=RFID+Tag');

-- --------------------------------------------------------

--
-- 表的结构 `product`
--

CREATE TABLE `product` (
  `productid` int(3) NOT NULL auto_increment,
  `classid` int(3) NOT NULL,
  `classname` varchar(40) default NULL,
  `productimage` varchar(60) default NULL,
  `productname` varchar(40) default NULL,
  PRIMARY KEY  (`productid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=65 ;

--
-- 导出表中的数据 `product`
--

INSERT INTO `product` (`productid`, `classid`, `classname`, `productimage`, `productname`) VALUES
(1, 1, 'Access Control System', 'OMT-C02.jpg', 'OMT-C02'),
(2, 1, 'Access Control System', 'OMT-C03.jpg', 'OMT-C03'),
(3, 1, 'Access Control System', 'OMT-CO1.jpg', 'OMT-CO1'),
(4, 1, 'Access Control System', 'OMT-CO4.jpg', 'OMT-CO4'),
(5, 1, 'Access Control System', 'OMT-CO5.jpg', 'OMT-CO5'),
(6, 1, 'Access Control System', 'OMT-CT01.jpg', 'OMT-CT01'),
(7, 2, 'Card', 'ultraLight.JPG', 'Ultralight'),
(8, 2, 'Card', 'Mifare 1K.jpg', 'Mifare 1K'),
(9, 2, 'Card', 'Mifare 4K.jpg', 'Mifare 4K'),
(14, 2, 'Card', 'magnetic strip card.jpg', 'Magnetic Strip Card'),
(15, 2, 'Card', 'fm11rf08.jpg', 'FM11RF081'),
(16, 3, 'RFID Label', 'slb01.jpg', 'OMTL01'),
(17, 4, 'RFID OEM Module', 'omt-800k.jpg', 'OMT-800K 125KHz Read/Write Module'),
(18, 4, 'RFID OEM Module', 'omt-800r.jpg ', 'OMT-800R 125KHz Reader module'),
(19, 4, 'RFID OEM Module', 'omt-800a.jpg', 'OMT-800A 125KHz Read/Write Module (Integ'),
(20, 4, 'RFID OEM Module', 'omt-800m.jpg', 'OMT-800M Mifare Reader/Writer'),
(21, 4, 'RFID OEM Module', 'omt-800t.jpg', 'OMT-800T ISO15693 Reader/Writer'),
(22, 4, 'RFID OEM Module', 'omt-800s.jpg', 'OMT-800S Mifare Reader/Writer Integrated'),
(23, 5, 'RFID Parts', 'UHF Antenna.gif', 'UHF Antenna'),
(24, 5, 'RFID Parts', 'HF RFID Antenna.jpg', 'HF RFID Antenna'),
(25, 5, 'RFID Parts', 'LCD Module 128x64.jpg', 'LCD Module 128x64'),
(26, 5, 'RFID Parts', 'LCD Module 240x128.jpg', 'LCD Module 240x128'),
(27, 6, 'RFID Reader', 'omt601.jpg', 'OMT601'),
(28, 6, 'RFID Reader', 'omt602.jpg', 'OMT602'),
(29, 6, 'RFID Reader', 'omt-603.jpg', 'OMT603'),
(30, 6, 'RFID Reader', 'omt603.jpg', 'OMT700'),
(31, 6, 'RFID Reader', 'omtep800.jpg', 'OMT-EP800'),
(32, 7, 'RFID Chip', 'mfrc500.jpg', 'MF RC500'),
(33, 7, 'RFID Chip', 'RC530.jpg', 'MF RC530'),
(34, 7, 'RFID Chip', 'RC531.jpg', 'MF RC531'),
(35, 7, 'RFID Chip', 'CL RC632.jpg', 'CL RC632'),
(36, 7, 'RFID Chip', 'U2270B.jpg', 'U2270B'),
(37, 8, 'RFID Development Kit', 'Development Kit R530.jpg', 'RC530 ISO14443'),
(38, 8, 'RFID Development Kit', 'Development Kit RC632 ISO15693.jpg', 'RC632 ISO15693'),
(39, 8, 'RFID Development Kit', 'Development Kit RC632 ISO14443 and ISO15693.jpg', 'RC632 ISO14443&15693'),
(40, 9, 'RFID Tag', 'omt701a.jpg', 'OMT701'),
(41, 9, 'RFID Tag', 'omt702.jpg', 'OMT702'),
(42, 9, 'RFID Tag', 'omt703.jpg', 'OMT703'),
(43, 9, 'RFID Tag', 'omt704.jpg', 'OMT704'),
(44, 9, 'RFID Tag', 'omt705.jpg', 'OMT705'),
(45, 9, 'RFID Tag', 'omt706.jpg', 'OMT706'),
(46, 9, 'RFID Tag', 'omt707.jpg', 'OMT707'),
(47, 9, 'RFID Tag', 'omt708.jpg', 'OMT708'),
(61, 2, 'Card', 'desfirea.jpg', 'Desfirea'),
(62, 2, 'Card', 'i.code.jpg', 'I.code.SLI'),
(64, 2, 'Card', 'emh4100.jpg', 'EM4100');
