/*
 Navicat Premium Data Transfer

 Source Server         : localhost
 Source Server Type    : MySQL
 Source Server Version : 100406
 Source Host           : localhost:3306
 Source Schema         : codeigniter_nestable

 Target Server Type    : MySQL
 Target Server Version : 100406
 File Encoding         : 65001

 Date: 17/11/2019 23:00:38
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for menu
-- ----------------------------
DROP TABLE IF EXISTS `menu`;
CREATE TABLE `menu`  (
  `menu_id` int(11) NOT NULL AUTO_INCREMENT,
  `menu_name` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `menu_url` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `menu_icon` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `menu_parent_id` int(11) NULL DEFAULT NULL,
  `menu_sequence` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  PRIMARY KEY (`menu_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 7 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of menu
-- ----------------------------
INSERT INTO `menu` VALUES (1, 'Menu 1', '#', NULL, NULL, '1');
INSERT INTO `menu` VALUES (2, 'Menu 2', '#', NULL, NULL, '2');
INSERT INTO `menu` VALUES (3, 'Menu 3', '#', NULL, NULL, '3');
INSERT INTO `menu` VALUES (4, 'Menu 4', '#', NULL, NULL, '4');
INSERT INTO `menu` VALUES (5, 'Menu 5', '#', NULL, NULL, '5');
INSERT INTO `menu` VALUES (6, 'Menu 6', '#', NULL, NULL, '6');

SET FOREIGN_KEY_CHECKS = 1;
