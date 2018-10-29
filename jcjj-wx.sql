/*
Navicat MySQL Data Transfer

Source Server         : JCJJ新服务器
Source Server Version : 50505
Source Host           : 192.144.139.176:3306
Source Database       : jcjj-wx

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2018-10-29 11:01:44
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for orders
-- ----------------------------
DROP TABLE IF EXISTS `orders`;
CREATE TABLE `orders` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned DEFAULT NULL,
  `shop` varchar(2550) DEFAULT NULL,
  `product` varchar(255) DEFAULT NULL,
  `desc` varchar(255) DEFAULT NULL,
  `degree` int(11) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of orders
-- ----------------------------
INSERT INTO `orders` VALUES ('3', '3', '东方广场店', '光学框架', '备注', '100', '1000', '2018-10-27 14:07:34', '2018-10-27 14:07:34');
INSERT INTO `orders` VALUES ('4', '3', '东方广场店', '隐形', '22', '1000', '10000', '2018-10-27 14:49:58', '2018-10-27 14:49:58');
INSERT INTO `orders` VALUES ('5', '3', '东方广场店', '光学框架', '打算', '1000', '1000', '2018-10-27 14:50:23', '2018-10-27 14:50:23');
INSERT INTO `orders` VALUES ('6', '6', '东方广场店', '光学框架', '无', '10', '1000', '2018-10-27 17:52:30', '2018-10-27 17:52:30');
INSERT INTO `orders` VALUES ('7', '7', '石景山万达久川睛匠', '光学框架', '会员活动', '0', '0', '2018-10-28 21:25:17', '2018-10-28 21:25:17');
INSERT INTO `orders` VALUES ('8', '8', '石景山万达久川睛匠', '光学框架', '会员活动', '0', '0', '2018-10-28 21:29:35', '2018-10-28 21:29:35');

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `sex` tinyint(4) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL COMMENT '地址',
  `zip_code` varchar(255) DEFAULT NULL COMMENT '邮编',
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
  `created_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES ('3', '尹广浩', '40995670@qq.com', '18811211714', '1', '北京市昌平区', '050000', '28', '-2.75', '-2.5', '0.0', '0.0', '33.5', '33.5', '0.0*0', '-0.5*168', '0.0', '0.0', '500', '2018-10-29 10:03:24', '2018-10-29 10:03:24');
INSERT INTO `users` VALUES ('6', '唐坤', '409956780@qq.com', '15319752985', '1', '北京市昌平区', '102218', '20', '10', '10', '10', '10', '10', '10', '10', '10', '20', '20', '1500', '2018-10-29 10:03:25', '2018-10-29 10:03:25');
INSERT INTO `users` VALUES ('7', '丁丁', '123456789@qq.com', '17710800663', '0', '北京市昌平区', '100000', '18', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '2018-10-29 10:03:25', '2018-10-29 10:03:25');
INSERT INTO `users` VALUES ('8', '康敬', '12345678@qq.com', '13801173988', '0', '北京市昌平区', '100000', '0', '0', '0', '0', '0', '0·', '0', '0', '0', '0', '0', '0', '2018-10-29 10:03:26', '2018-10-29 10:03:26');
