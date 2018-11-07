/*
Navicat MySQL Data Transfer

Source Server         : JCJJ新服务器
Source Server Version : 50505
Source Host           : 192.144.139.176:3306
Source Database       : jcjj-wx

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2018-11-06 21:50:08
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for admins
-- ----------------------------
DROP TABLE IF EXISTS `admins`;
CREATE TABLE `admins` (
  `id` varchar(128) NOT NULL COMMENT '用户登录 ID',
  `name` varchar(20) NOT NULL COMMENT '用户名',
  `roles` varchar(40) NOT NULL COMMENT '用户角色，包含了 在第 4 节中创建的角色ID，如果有多个角色，使用 `,` 隔开。',
  `password` varchar(32) NOT NULL COMMENT '登录密码',
  PRIMARY KEY (`id`),
  KEY `name` (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of admins
-- ----------------------------
INSERT INTO `admins` VALUES ('jcjj', '管理员', 'admin', 'e10adc3949ba59abbe56e057f20f883e');

-- ----------------------------
-- Table structure for orders
-- ----------------------------
DROP TABLE IF EXISTS `orders`;
CREATE TABLE `orders` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned DEFAULT NULL,
  `buy_time` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `shop` varchar(2550) DEFAULT NULL,
  `product` varchar(255) DEFAULT NULL,
  `remark` varchar(255) DEFAULT NULL,
  `degree` int(11) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=38 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of orders
-- ----------------------------
INSERT INTO `orders` VALUES ('29', '3', '2018-11-04 08:44:09', '北京东方新天地', '框架', '123', null, '1580', '2018-11-04 08:44:09', '2018-11-04 08:44:09');
INSERT INTO `orders` VALUES ('31', '3', '2018-11-04 08:53:44', '111', '隐形', '1111', null, '111', '2018-11-04 08:53:44', '2018-11-04 08:53:44');
INSERT INTO `orders` VALUES ('33', '6', '2018-11-13 00:00:00', '11', '框架', '11', null, '11', '2018-11-04 08:59:32', '2018-11-04 08:59:32');
INSERT INTO `orders` VALUES ('34', '6', '2018-11-13 00:00:00', '11', '隐形', '11', null, '11', '2018-11-04 09:00:03', '2018-11-04 09:00:03');
INSERT INTO `orders` VALUES ('35', '6', '2018-10-31 00:00:00', '东方新天地', '框架', '套餐', null, '1580', '2018-11-04 13:31:57', '2018-11-04 13:31:57');
INSERT INTO `orders` VALUES ('36', '60', '2018-10-31 00:00:00', '东方新天地', '框架', '套餐', null, '1580', '2018-11-04 15:39:09', '2018-11-04 15:39:09');
INSERT INTO `orders` VALUES ('37', '61', '2018-10-31 00:00:00', '东方新天地', '框架', '套餐', null, '1580', '2018-11-04 15:39:44', '2018-11-04 15:39:44');

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `member_no` varchar(255) DEFAULT NULL COMMENT '会员编号',
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `sex` tinyint(4) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL COMMENT '地址',
  `cost` varchar(255) DEFAULT NULL COMMENT '消费金额',
  `zip_code` varchar(255) DEFAULT NULL COMMENT '邮编',
  `member_card_end_at` timestamp NULL DEFAULT NULL,
  `age` tinyint(4) DEFAULT NULL,
  `qiujing_r` varchar(255) DEFAULT NULL,
  `qiujing_l` varchar(255) DEFAULT NULL,
  `tongjin_r` varchar(255) DEFAULT NULL,
  `tongjin_l` varchar(255) DEFAULT NULL,
  `tongyuan_r` varchar(255) DEFAULT NULL,
  `tongyuan_l` varchar(255) DEFAULT NULL,
  `zhujing_r` varchar(255) DEFAULT NULL,
  `zhujing_l` varchar(255) DEFAULT NULL,
  `xiajiaguang_r` varchar(255) DEFAULT NULL,
  `xiajiaguang_l` varchar(255) DEFAULT NULL,
  `integration` int(11) DEFAULT NULL COMMENT '积分',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=63 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES ('60', '11010001', '唐坤', null, '15319752985', '1', '北京东方新天地', '1000', null, '2018-12-31 00:00:00', '28', '-3.50', '-3.50', '', '', '33', '33', '-1.50*12', '-1.50*12', '', '', '100', '2018-11-05 10:12:49', '2018-11-05 10:12:49');
INSERT INTO `users` VALUES ('61', '11010002', '尹广浩', 'null', '18811211714', '1', '北京东方新天地', '1000', 'null', '2018-12-31 00:00:00', '28', '-3.50', '-3.50', '', '', '33', '33', '-1.50*12', '-1.50*12', '', '', '100', '2018-11-04 15:45:14', '2018-11-04 15:45:14');
