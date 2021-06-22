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

 Date: 22/06/2021 15:59:33
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
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- ----------------------------
-- Records of alternatif
-- ----------------------------
BEGIN;
INSERT INTO `alternatif` VALUES (2, 1, 2, '22');
INSERT INTO `alternatif` VALUES (3, 1, 3, '20');
INSERT INTO `alternatif` VALUES (4, 1, 1, '51');
INSERT INTO `alternatif` VALUES (5, 2, 2, '2');
COMMIT;

-- ----------------------------
-- Table structure for kriteria
-- ----------------------------
DROP TABLE IF EXISTS `kriteria`;
CREATE TABLE `kriteria` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nama_kriteria` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- ----------------------------
-- Records of kriteria
-- ----------------------------
BEGIN;
INSERT INTO `kriteria` VALUES (1, 'Kehadiran');
INSERT INTO `kriteria` VALUES (2, 'Keterlambatan');
INSERT INTO `kriteria` VALUES (3, 'Merokok');
INSERT INTO `kriteria` VALUES (4, 'Perkelahian');
INSERT INTO `kriteria` VALUES (5, 'Membawa Senjata');
INSERT INTO `kriteria` VALUES (6, 'Obat Terlarang / Miras');
COMMIT;

-- ----------------------------
-- Table structure for siswa
-- ----------------------------
DROP TABLE IF EXISTS `siswa`;
CREATE TABLE `siswa` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nama_siswa` varchar(255) DEFAULT NULL,
  `no_tlp` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- ----------------------------
-- Records of siswa
-- ----------------------------
BEGIN;
INSERT INTO `siswa` VALUES (1, 'Dayatjeh', '628347877');
INSERT INTO `siswa` VALUES (2, 'Nur', '62863972346');
COMMIT;

-- ----------------------------
-- Table structure for user
-- ----------------------------
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT '$2y$10$tlmiJXxRHfOXMNkfXD.u9.ftYyx5i2aTH4viJJ0oDlLVNy9Nj75n6',
  `role` int DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `status` int DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- ----------------------------
-- Records of user
-- ----------------------------
BEGIN;
INSERT INTO `user` VALUES (1, 'Nur Hidayat', 'dayat', '$2y$10$lPmfAdBY/UDD6/xBD6xzvOgjSiFnpSSStKPzEoW1QgX0OWZheVrE6', 1, 'dayat@gmail.com', 1);
COMMIT;

SET FOREIGN_KEY_CHECKS = 1;
