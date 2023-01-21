/*
 Navicat Premium Data Transfer

 Source Server         : LocalMySQL
 Source Server Type    : MySQL
 Source Server Version : 50733 (5.7.33)
 Source Host           : localhost:3306
 Source Schema         : jual_madu

 Target Server Type    : MySQL
 Target Server Version : 50733 (5.7.33)
 File Encoding         : 65001

 Date: 05/12/2022 18:23:47
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for admins
-- ----------------------------
DROP TABLE IF EXISTS `admins`;
CREATE TABLE `admins`  (
  `id_admin` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `username` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `password` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id_admin`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of admins
-- ----------------------------
INSERT INTO `admins` VALUES (1, 'Administrator Jual Madu', 'Administrator', 'bbb75a8c74ede0babc9142b2fbe1a9f9');

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users`  (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `username` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `password` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id_user`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 11 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES (6, 'user', 'user', 'ee11cbb19052e40b07aac0ca060c23ee');
INSERT INTO `users` VALUES (7, 'a', 'a', '0cc175b9c0f1b6a831c399e269772661');
INSERT INTO `users` VALUES (8, 'q', 'q', '7694f4a66316e53c8cdd9d9954bd611d');
INSERT INTO `users` VALUES (9, 'w', 'w', 'f1290186a5d0b1ceab27f4e77c0c5d68');
INSERT INTO `users` VALUES (10, 'madu', 'madu', '0d127550175bccd440ec76f9da116d67');

-- ----------------------------
-- Table structure for product
-- ----------------------------
DROP TABLE IF EXISTS `product`;
CREATE TABLE `product`  (
  `id_madu` int(11) NOT NULL AUTO_INCREMENT,
  `nama_madu` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `image` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `deskripsi` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `harga` float NULL DEFAULT NULL,
  `sisa` float NULL DEFAULT NULL,
  `stock` float NULL DEFAULT NULL,
  PRIMARY KEY (`id_madu`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of product
-- ----------------------------
INSERT INTO `product` VALUES (1, 'madu 1', '1667127727_6d3485cf0cfb97e44e13.jpg', 'madu 1 enak', 2000, 10, 13);
INSERT INTO `product` VALUES (2, 'madu 2', '1667127890_5a40b2d4ee183968658c.jpg', 'madu 2 enak', 3000, 3, 15);

-- ----------------------------
-- Table structure for keranjang
-- ----------------------------
DROP TABLE IF EXISTS `keranjang`;
CREATE TABLE `keranjang`  (
  `id_keranjang` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` int(11) NULL DEFAULT NULL,
  `id_madu` int(11) NULL DEFAULT NULL,
  `jumlah` int(11) NULL DEFAULT NULL,
  `total` float NULL DEFAULT NULL,
  `status_keranjang` int(1) NULL DEFAULT NULL,
  PRIMARY KEY (`id_keranjang`) USING BTREE,
  INDEX `id_user`(`id_user`) USING BTREE,
  INDEX `id_madu`(`id_madu`) USING BTREE,
  CONSTRAINT `keranjang_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `users` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `keranjang_ibfk_2` FOREIGN KEY (`id_madu`) REFERENCES `product` (`id_madu`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 11 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of keranjang
-- ----------------------------
INSERT INTO `keranjang` VALUES (3, 10, 2, 2, 6000, NULL);
INSERT INTO `keranjang` VALUES (4, 10, 1, 2, 4000, NULL);
INSERT INTO `keranjang` VALUES (5, 10, 1, 2, 4000, NULL);
INSERT INTO `keranjang` VALUES (6, 6, 1, 2, 4000, NULL);
INSERT INTO `keranjang` VALUES (7, 6, 2, 1, 3000, 0);
INSERT INTO `keranjang` VALUES (8, 6, 1, 2, 4000, 1);
INSERT INTO `keranjang` VALUES (9, 10, 1, 3, 6000, 1);
INSERT INTO `keranjang` VALUES (10, 10, 2, 2, 6000, 1);

-- ----------------------------
-- Table structure for koneksi
-- ----------------------------
DROP TABLE IF EXISTS `koneksi`;
CREATE TABLE `koneksi`  (
  `id_connection` int(11) NOT NULL AUTO_INCREMENT,
  `id_resource` int(11) NULL DEFAULT NULL,
  `id_user` int(11) NULL DEFAULT NULL,
  `nama` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id_connection`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of koneksi
-- ----------------------------

-- ----------------------------
-- Table structure for checkout
-- ----------------------------
DROP TABLE IF EXISTS `checkout`;
CREATE TABLE `checkout`  (
  `id_checkout` int(11) NOT NULL AUTO_INCREMENT,
  `id_keranjang` int(11) NULL DEFAULT NULL,
  `id_user` int(11) NULL DEFAULT NULL,
  `lokasi` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `status` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `keterangan` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  PRIMARY KEY (`id_checkout`) USING BTREE,
  INDEX `id_keranjang`(`id_keranjang`) USING BTREE,
  INDEX `id_user`(`id_user`) USING BTREE,
  CONSTRAINT `checkout_ibfk_1` FOREIGN KEY (`id_keranjang`) REFERENCES `keranjang` (`id_keranjang`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `checkout_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `users` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE = InnoDB AUTO_INCREMENT = 5 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of checkout
-- ----------------------------
INSERT INTO `checkout` VALUES (1, 3, 10, 'sadsd', 'Menunggu', NULL);
INSERT INTO `checkout` VALUES (2, 8, 6, 'burayut', 'Setuju', 'asd.jl');
INSERT INTO `checkout` VALUES (3, 9, 10, 'bajing', 'Menunggu', NULL);
INSERT INTO `checkout` VALUES (4, 10, 10, 'jongol', 'Menunggu', NULL);

-- ----------------------------
-- Table structure for no_wa
-- ----------------------------
DROP TABLE IF EXISTS `no_wa`;
CREATE TABLE `no_wa`  (
  `id_wa` int(11) NOT NULL AUTO_INCREMENT,
  `no_wa` varchar(16) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  PRIMARY KEY (`id_wa`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of no_wa
-- ----------------------------
INSERT INTO `no_wa` VALUES (1, '6288218251505');

-- ----------------------------
-- Table structure for pesan
-- ----------------------------
DROP TABLE IF EXISTS `pesan`;
CREATE TABLE `pesan`  (
  `id_pesan` int(11) NOT NULL AUTO_INCREMENT,
  `waktu` datetime NULL DEFAULT NULL,
  `id_pengirim` int(11) NULL DEFAULT NULL,
  `id_penerima` int(11) NULL DEFAULT NULL,
  `pesan` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  PRIMARY KEY (`id_pesan`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of pesan
-- ----------------------------

-- ----------------------------
-- Table structure for rating
-- ----------------------------
DROP TABLE IF EXISTS `rating`;
CREATE TABLE `rating`  (
  `id_rating` int(11) NOT NULL AUTO_INCREMENT,
  `id_madu` int(11) NULL DEFAULT NULL,
  `id_user` int(11) NULL DEFAULT NULL,
  `rating` int(11) NULL DEFAULT NULL,
  `komen` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  PRIMARY KEY (`id_rating`) USING BTREE,
  INDEX `id_madu`(`id_madu`) USING BTREE,
  INDEX `id_user`(`id_user`) USING BTREE,
  CONSTRAINT `rating_ibfk_1` FOREIGN KEY (`id_madu`) REFERENCES `product` (`id_madu`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `rating_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `users` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE = InnoDB AUTO_INCREMENT = 8 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of rating
-- ----------------------------
INSERT INTO `rating` VALUES (5, 1, 10, 3, 'Hebat');
INSERT INTO `rating` VALUES (6, 1, 6, 4, 'enak pisn');
INSERT INTO `rating` VALUES (7, 2, 10, 2, NULL);

-- ----------------------------
-- Table structure for review
-- ----------------------------
DROP TABLE IF EXISTS `review`;
CREATE TABLE `review`  (
  `id_review` int(11) NOT NULL AUTO_INCREMENT,
  `image_review` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `urutan` int(11) NULL DEFAULT NULL,
  PRIMARY KEY (`id_review`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of review
-- ----------------------------
INSERT INTO `review` VALUES (1, '1667610052_4879155e542faa572de0.jpg', 1);
INSERT INTO `review` VALUES (2, '1668244073_3153f1248c619272d262.jpg', 2);

-- ----------------------------
-- Table structure for set_dashboard
-- ----------------------------
DROP TABLE IF EXISTS `set_dashboard`;
CREATE TABLE `set_dashboard`  (
  `id_set_dashboard` int(11) NOT NULL AUTO_INCREMENT,
  `picture_dashboard` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `logo` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `deskripsi` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  PRIMARY KEY (`id_set_dashboard`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of set_dashboard
-- ----------------------------
INSERT INTO `set_dashboard` VALUES (1, '1668828068_834d41e419c7b063087b.jpg', '1668828068_612ca72040b9e90342cb.jpg', 'ahahahahha');

SET FOREIGN_KEY_CHECKS = 1;
