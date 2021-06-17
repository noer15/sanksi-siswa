/*
 Navicat Premium Data Transfer

 Source Server         : Local
 Source Server Type    : MySQL
 Source Server Version : 80023
 Source Host           : localhost:3306
 Source Schema         : db_alfian

 Target Server Type    : MySQL
 Target Server Version : 80023
 File Encoding         : 65001

 Date: 08/06/2021 14:14:32
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for alternatif
-- ----------------------------
DROP TABLE IF EXISTS `alternatif`;
CREATE TABLE `alternatif` (
  `id` int NOT NULL AUTO_INCREMENT,
  `id_siswa` int DEFAULT NULL,
  `id_kriteria` int DEFAULT NULL,
  `nilai` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- ----------------------------
-- Records of alternatif
-- ----------------------------
BEGIN;
INSERT INTO `alternatif` VALUES (1, 1, 2, '10');
INSERT INTO `alternatif` VALUES (2, 1, 1, '20');
COMMIT;

-- ----------------------------
-- Table structure for kriteria
-- ----------------------------
DROP TABLE IF EXISTS `kriteria`;
CREATE TABLE `kriteria` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nama_kriteria` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- ----------------------------
-- Records of kriteria
-- ----------------------------
BEGIN;
INSERT INTO `kriteria` VALUES (1, 'Kehadiran');
INSERT INTO `kriteria` VALUES (2, 'keterlambatan');
INSERT INTO `kriteria` VALUES (3, 'kepribadian');
INSERT INTO `kriteria` VALUES (4, 'pakaian');
INSERT INTO `kriteria` VALUES (5, 'ketertiban');
COMMIT;

-- ----------------------------
-- Table structure for siswa
-- ----------------------------
DROP TABLE IF EXISTS `siswa`;
CREATE TABLE `siswa` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nama_siswa` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- ----------------------------
-- Records of siswa
-- ----------------------------
BEGIN;
INSERT INTO `siswa` VALUES (1, 'Dayatjeh');
INSERT INTO `siswa` VALUES (2, 'Nur');
COMMIT;

-- ----------------------------
-- Table structure for user
-- ----------------------------
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT '$2y$10$tlmiJXxRHfOXMNkfXD.u9.ftYyx5i2aTH4viJJ0oDlLVNy9Nj75n6',
  `role` int DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `status` int DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- ----------------------------
-- Records of user
-- ----------------------------
BEGIN;
INSERT INTO `user` VALUES (1, 'Nur Hidayat', 'dayat', '$2y$10$lPmfAdBY/UDD6/xBD6xzvOgjSiFnpSSStKPzEoW1QgX0OWZheVrE6', 1, 'dayat@gmail.com', 1);
COMMIT;

SET FOREIGN_KEY_CHECKS = 1;
