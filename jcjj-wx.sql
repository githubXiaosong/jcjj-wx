/*
Navicat MySQL Data Transfer

Source Server         : 陈冲服务器
Source Server Version : 50640
Source Host           : 121.28.103.199:5571
Source Database       : jcjj-wx

Target Server Type    : MYSQL
Target Server Version : 50640
File Encoding         : 65001

Date: 2018-10-19 10:45:17
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
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of orders
-- ----------------------------
INSERT INTO `orders` VALUES ('1', '2', '第一家店', '第一个产品', '无', '100', '2000', '2018-10-05 10:21:24', '2018-10-05 10:21:24');
INSERT INTO `orders` VALUES ('2', '1', '第二家店', '第一种品类', '无', '200', '2000', '2018-10-05 10:25:51', '2018-10-05 10:25:51');

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
  `age` tinyint(4) DEFAULT NULL,
  `degree` int(11) DEFAULT NULL,
  `integration` int(11) DEFAULT NULL COMMENT '积分',
  `created_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES ('1', 'xiaosong', '109923@qq.com', '13081114886', '1', '18', '200', '11', '2018-10-05 10:18:44', '2018-10-05 10:18:44');
INSERT INTO `users` VALUES ('2', '小松', '12313@qq.com', '13091112331', '0', '29', '200', '29', '2018-10-05 10:20:06', '2018-10-05 10:20:06');
