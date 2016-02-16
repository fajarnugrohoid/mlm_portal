/*
Navicat MySQL Data Transfer

Source Server         : dhamar-128.199.129.112
Source Server Version : 50546
Source Host           : 128.199.129.112:3306
Source Database       : gotogether

Target Server Type    : MYSQL
Target Server Version : 50546
File Encoding         : 65001

Date: 2016-02-14 21:08:34
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for mst_category
-- ----------------------------
DROP TABLE IF EXISTS `mst_category`;
CREATE TABLE `mst_category` (
  `id` int(11) NOT NULL,
  `category` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of mst_category
-- ----------------------------
INSERT INTO `mst_category` VALUES ('1', 'promo');
INSERT INTO `mst_category` VALUES ('2', 'event');
INSERT INTO `mst_category` VALUES ('3', 'product');
INSERT INTO `mst_category` VALUES ('4', 'news');

-- ----------------------------
-- Table structure for mst_member
-- ----------------------------
DROP TABLE IF EXISTS `mst_member`;
CREATE TABLE `mst_member` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `member_id` varchar(20) DEFAULT NULL,
  `sponsor_id` varchar(20) DEFAULT NULL,
  `sponsor_name` varchar(200) DEFAULT NULL,
  `sponsor_email` varchar(200) DEFAULT NULL,
  `upline_id` varchar(20) DEFAULT NULL,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(35) DEFAULT NULL,
  `name` varchar(50) DEFAULT NULL,
  `birthday_place` varchar(255) DEFAULT NULL,
  `birthday` date DEFAULT NULL,
  `sex` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `child_count` int(20) DEFAULT NULL,
  `handphone` varchar(20) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `nationality` varchar(100) DEFAULT NULL,
  `no_ktp` varchar(50) DEFAULT NULL,
  `no_sim` varchar(50) DEFAULT NULL,
  `job` varchar(50) DEFAULT NULL,
  `ktp_address` varchar(50) DEFAULT NULL,
  `ktp_city` varchar(50) DEFAULT NULL,
  `ktp_province` varchar(50) DEFAULT NULL,
  `shipment_address` varchar(100) DEFAULT NULL,
  `shipment_districts` varchar(100) DEFAULT NULL,
  `shipment_subdistricts` varchar(100) DEFAULT NULL,
  `shipment_city` varchar(100) DEFAULT NULL,
  `shipment_province` varchar(100) DEFAULT NULL,
  `bank` varchar(50) DEFAULT NULL,
  `bank_an` varchar(50) DEFAULT NULL,
  `no_rek` varchar(50) DEFAULT NULL,
  `bank_branch` varchar(100) DEFAULT NULL,
  `bank_city` varchar(100) DEFAULT NULL,
  `plan` varchar(2) DEFAULT NULL,
  `level` int(2) DEFAULT '1',
  `value` decimal(22,2) DEFAULT '0.00',
  `mothers_name` varchar(50) DEFAULT NULL,
  `status_barang` enum('kirim','ambil') DEFAULT 'ambil',
  `is_active` int(1) DEFAULT '0',
  `position` varchar(10) DEFAULT NULL,
  `downline_count` int(2) DEFAULT '0',
  `date` date DEFAULT NULL,
  `time` time DEFAULT NULL,
  `photo` varchar(150) DEFAULT NULL,
  `ktp_districts` varchar(255) DEFAULT NULL,
  `ktp_subdistricts` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=55 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of mst_member
-- ----------------------------
INSERT INTO `mst_member` VALUES ('53', 'assfasfasdasd', null, '2', '2@fsfa', null, 'admin', 'c4ca4238a0b923820dcc509a6f75849b', '2', '2', '0001-02-02', 'laki-laki', 'Menikah', '0', '2', '2', '2@daf', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', 'A', '1', '2.00', '2', 'kirim', '1', '', '0', '2016-02-14', '00:00:00', '', '2', '2');
INSERT INTO `mst_member` VALUES ('54', 'daca', null, null, null, null, null, null, null, null, null, null, null, null, null, null, '', null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, '1', '0.00', null, 'ambil', '0', null, '0', null, null, null, null, null);

-- ----------------------------
-- Table structure for mst_news
-- ----------------------------
DROP TABLE IF EXISTS `mst_news`;
CREATE TABLE `mst_news` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(200) NOT NULL,
  `description` longtext NOT NULL,
  `link` varchar(100) NOT NULL,
  `image` varchar(200) NOT NULL,
  `category` int(11) NOT NULL,
  `author` varchar(11) DEFAULT NULL,
  `author_date` datetime DEFAULT NULL,
  `status` int(1) DEFAULT '0' COMMENT '0=Draft, 1= Publish, 9=Reject',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=84 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of mst_news
-- ----------------------------
INSERT INTO `mst_news` VALUES ('83', '2', '<p>\r\n	2</p>\r\n', '2', '', '1', null, null, '0');

-- ----------------------------
-- Table structure for mst_products
-- ----------------------------
DROP TABLE IF EXISTS `mst_products`;
CREATE TABLE `mst_products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `product_name` varchar(200) NOT NULL,
  `description` longtext NOT NULL,
  `image` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of mst_products
-- ----------------------------

-- ----------------------------
-- Table structure for sys_referral
-- ----------------------------
DROP TABLE IF EXISTS `sys_referral`;
CREATE TABLE `sys_referral` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `userid` varchar(200) NOT NULL,
  `downline_selection` longtext NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of sys_referral
-- ----------------------------
INSERT INTO `sys_referral` VALUES ('1', '12', '20;18;23;');
