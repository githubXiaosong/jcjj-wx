/*
Navicat MySQL Data Transfer

Source Server         : JCJJ新服务器
Source Server Version : 50505
Source Host           : 192.144.139.176:3306
Source Database       : jcjj-wx

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2018-11-01 16:47:51
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
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of orders
-- ----------------------------
INSERT INTO `orders` VALUES ('3', '3', null, '东方广场店', '光学框架1111', '备注1', '100', '1000', '2018-11-01 16:09:43', '2018-11-01 16:09:43');
INSERT INTO `orders` VALUES ('4', '3', '2018-11-01 16:33:56', '东方广场店', '隐形', '22', '100', '10000', '2018-11-01 16:33:56', '2018-11-01 16:33:56');
INSERT INTO `orders` VALUES ('6', '6', null, '东方广场店', '光学框架', '无', '10', '1000', '2018-10-27 17:52:30', '2018-10-27 17:52:30');
INSERT INTO `orders` VALUES ('7', '7', null, '石景山万达久川睛匠', '光学框架', '会员活动', '0', '0', '2018-10-28 21:25:17', '2018-10-28 21:25:17');
INSERT INTO `orders` VALUES ('8', '8', null, '石景山万达久川睛匠', '光学框架', '会员活动1', '0', '120', '2018-11-01 15:49:13', '2018-11-01 15:49:13');
INSERT INTO `orders` VALUES ('10', '12', '2018-11-01 16:34:00', '石景山万达久川睛匠', '光学框架', '会员85折', '231', '254', '2018-11-01 16:34:00', '2018-11-01 16:34:00');
INSERT INTO `orders` VALUES ('11', '13', null, '石景山万达久川睛匠', '光学框架', '会员活动', null, '111', '2018-10-30 10:13:56', '2018-10-30 10:13:56');
INSERT INTO `orders` VALUES ('12', '14', null, '石景山万达久川睛匠', '光学框架', '会员活动', null, '0', '2018-10-29 14:17:47', '2018-10-29 14:17:47');
INSERT INTO `orders` VALUES ('13', '15', null, '石景山万达久川睛匠', '光学框架', '会员活动', null, '66', '2018-10-29 22:52:28', '2018-10-29 22:52:28');
INSERT INTO `orders` VALUES ('14', '16', null, '石景山万达久川睛匠', '光学框架', '会员活动', null, '0', '2018-10-29 14:19:03', '2018-10-29 14:19:03');
INSERT INTO `orders` VALUES ('15', '17', null, '石景山万达久川睛匠', '光学框架', '会员活动', null, '0', '2018-10-29 14:19:34', '2018-10-29 14:19:34');
INSERT INTO `orders` VALUES ('19', '21', null, '石景山万达久川睛匠', '光学框架', '会员活动', null, '0', '2018-10-29 17:21:33', '2018-10-29 17:21:33');
INSERT INTO `orders` VALUES ('24', '40', '2018-11-01 16:34:56', '111', '1111', '111', null, '111', '2018-11-01 16:34:56', '2018-11-01 16:34:56');

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
) ENGINE=InnoDB AUTO_INCREMENT=41 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES ('3', null, '尹广浩', '40995670@qq.com', '18811211714', '1', '北京市昌平区', null, '050000', '2018-12-31 00:00:00', '28', '-2.75', '-2.5', '0.0', '0.0', '33.5', '33.5', '0.0*0', '-0.5*168', '0.0', '0.0', '500', '2018-11-01 15:17:43', '2018-11-01 15:17:43');
INSERT INTO `users` VALUES ('6', null, '唐坤', '409956780@qq.com', '15319752985', '1', '北京市昌平区', null, '102218', '0000-00-00 00:00:00', '20', '10', '10', '10', '10', '10', '10', '10', '10', '20', '20', '1500', '2018-11-01 12:42:58', '2018-11-01 12:42:58');
INSERT INTO `users` VALUES ('7', null, '丁丁', '123456789@qq.com', '17710800663', '0', '北京市昌平区', null, '100000', null, '18', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '2018-10-29 10:03:25', '2018-10-29 10:03:25');
INSERT INTO `users` VALUES ('8', '123123123123', '康敬', '12345678@qq.com', '13801173988', '0', '北京市昌平区', null, '100000', '0000-00-00 00:00:00', '11', '0', '0', '0', '0', '0·', '0', '0', '0', '0', '0', '0', '2018-11-01 15:47:05', '2018-11-01 15:47:05');
INSERT INTO `users` VALUES ('12', null, '穆春雷', '2873746197@qq.con', '15042148788', '1', '北京市', null, '10000', null, '38', '-4.00', '—3.50', '0', '00', '31.5', '31.5', '0', '0', '0', '0', '254', '2018-10-29 12:20:34', '2018-10-29 12:20:34');
INSERT INTO `users` VALUES ('13', null, '穆金荣', '1857362974@qq.com', '13521727266', '1', '北京市', null, '100000', null, '44', '00', '0', '0', '0', '0', '00', '0', '0', '0', '00', '0', '2018-10-29 20:43:53', '2018-10-29 20:43:53');
INSERT INTO `users` VALUES ('14', null, '宋倩倩', '1936572546@qq.com', '13521774689', '0', '北京市', null, '10000', '0000-00-00 00:00:00', '28', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '2018-10-30 14:23:46', '2018-10-30 14:23:46');
INSERT INTO `users` VALUES ('16', null, '吴敬', '4837284758@qq.com', '18612510211', '1', '北京市', null, '100000', null, '22', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '2018-10-29 14:06:28', '2018-10-29 14:06:28');
INSERT INTO `users` VALUES ('17', null, '张金芳', '2819472639@qq.com', '18895055088', '1', '北京市', null, '10000', null, '32', '0', '0', '0', '0', '0', '0', '0', '0', '00', '0', '0', '2018-10-29 14:07:34', '2018-10-29 14:07:34');
INSERT INTO `users` VALUES ('18', null, '王玲', '1749826482@qq.com', '18500652198', '1', '北京市', null, '10000', null, '21', '00', '0', '0', '0', '00', '0', '0', '0', '00', '0', '0', '2018-10-29 16:24:42', '2018-10-29 16:24:42');
INSERT INTO `users` VALUES ('19', null, '李友', '17658265820@qq.com', '13439032993', '0', '北京市', null, '10000', '2018-10-11 16:00:00', '24', '00', '00', '0', '0', '0000', '00', '00', '0', '0', '00', '0', '2018-10-30 21:07:24', '2018-10-30 21:07:24');
INSERT INTO `users` VALUES ('20', null, '包明吉1', '452875362@qq.com', '13811658832', '1', '北京市', null, '10000', null, '35', '11', '11', '11', '11', '11', '11', '11', '11', '11', '11', '11', '2018-10-29 20:43:12', '2018-10-29 20:43:12');
INSERT INTO `users` VALUES ('28', null, '小松', '102323@qq.com', '13081114886', '1', '石家庄', null, '05000', null, '22', '10', '10', '10', '10', '10', '10', '10', '10', '10', '10', '1000', '2018-10-30 10:22:43', '2018-10-30 10:22:43');
INSERT INTO `users` VALUES ('29', null, '安敬', '1465536181@com.qq', '15001346043', '0', '北京市', null, '100000', '2018-10-12 00:00:00', '29', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', '0', '2018-10-30 18:44:11', '2018-10-30 18:44:11');
INSERT INTO `users` VALUES ('30', '111111', '小松2', '2222@qq.com', '123123123213', '1', '石家庄2222', null, '040000', '2018-10-11 00:00:00', '22', '11', '11', '11', '11', '11', '11', '11', '11', '11', '11', '10000', '2018-10-30 18:44:32', '2018-10-30 18:44:32');
INSERT INTO `users` VALUES ('32', null, '刘伟', '1465537181@com.qq', '18610087803', '1', '北京市', null, '100000', null, '29', null, null, null, null, null, null, null, null, null, null, '0', '2018-10-30 10:49:31', '2018-10-30 10:49:31');
INSERT INTO `users` VALUES ('33', '111111', '牛美红', '1465436181@com.qq', '13621153255', '0', '北京市', null, '100000', '0000-00-00 00:00:00', '37', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', '0', '2018-10-30 14:10:42', '2018-10-30 14:10:42');
INSERT INTO `users` VALUES ('34', '40000', '钱洪平', '1265536181@com.qq', '13651112271', '0', '北京市石景山区', null, '100000', '0000-00-00 00:00:00', '57', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', '0', '2018-10-30 14:22:50', '2018-10-30 14:22:50');
INSERT INTO `users` VALUES ('40', '11', '小松', '12312@qq.com', '13011148822', '0', '石家庄', null, '12313', '2018-10-13 00:00:00', '123', '123', '123', '123', '123', '123', '123', '123', '123', '123', '123', '1233', '2018-10-30 16:05:27', '2018-10-30 16:05:27');
