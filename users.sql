/*
 Navicat Premium Data Transfer

 Source Server         : edgar
 Source Server Type    : MySQL
 Source Server Version : 100411
 Source Host           : localhost:3306
 Source Schema         : users

 Target Server Type    : MySQL
 Target Server Version : 100411
 File Encoding         : 65001

 Date: 03/07/2020 23:50:20
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for comments
-- ----------------------------
DROP TABLE IF EXISTS `comments`;
CREATE TABLE `comments`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `posts_id` int(11) NULL DEFAULT NULL,
  `user_id` int(11) NULL DEFAULT NULL,
  `comment` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `time` datetime(0) NULL DEFAULT current_timestamp(0) ON UPDATE CURRENT_TIMESTAMP(0),
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `post_id`(`posts_id`) USING BTREE,
  INDEX `user_id`(`user_id`) USING BTREE,
  CONSTRAINT `comments_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `comments_ibfk_3` FOREIGN KEY (`posts_id`) REFERENCES `posts` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE = InnoDB AUTO_INCREMENT = 76 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of comments
-- ----------------------------
INSERT INTO `comments` VALUES (55, 16, 6, 'dfds', '2020-02-17 00:45:25');
INSERT INTO `comments` VALUES (56, 16, 6, '565', '2020-02-17 00:45:38');
INSERT INTO `comments` VALUES (57, 16, 6, 'tyuty', '2020-02-17 01:02:23');
INSERT INTO `comments` VALUES (58, 16, 6, 'sdsadsadasdsdas', '2020-02-17 01:27:49');
INSERT INTO `comments` VALUES (59, 16, 6, 'ytrtyrty', '2020-02-17 01:53:13');
INSERT INTO `comments` VALUES (60, 16, 6, 'dfgdf', '2020-02-17 01:53:43');
INSERT INTO `comments` VALUES (62, 16, 6, 'fdfsdfhsdkjfsdf', '2020-02-17 13:18:53');

-- ----------------------------
-- Table structure for friends
-- ----------------------------
DROP TABLE IF EXISTS `friends`;
CREATE TABLE `friends`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `my_id` int(11) NULL DEFAULT NULL,
  `user_id` int(11) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `my_id`(`my_id`) USING BTREE,
  INDEX `user_id`(`user_id`) USING BTREE,
  CONSTRAINT `friends_ibfk_1` FOREIGN KEY (`my_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `friends_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE = InnoDB AUTO_INCREMENT = 12 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of friends
-- ----------------------------
INSERT INTO `friends` VALUES (9, 6, 5);

-- ----------------------------
-- Table structure for massages
-- ----------------------------
DROP TABLE IF EXISTS `massages`;
CREATE TABLE `massages`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `my_id` int(11) NULL DEFAULT NULL,
  `user_id` int(11) NULL DEFAULT NULL,
  `massage` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `time` timestamp(0) NULL DEFAULT current_timestamp(0) ON UPDATE CURRENT_TIMESTAMP(0),
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `stacox_id`(`user_id`) USING BTREE,
  CONSTRAINT `massages_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE = InnoDB AUTO_INCREMENT = 111 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of massages
-- ----------------------------
INSERT INTO `massages` VALUES (104, 6, 5, 'sdfdsfsdfsdf', '2020-02-18 03:26:08');
INSERT INTO `massages` VALUES (105, 6, 5, 'dsfsdfsd', '2020-02-18 03:26:14');
INSERT INTO `massages` VALUES (106, 4, 6, 'asdsads', '2020-02-18 03:26:31');
INSERT INTO `massages` VALUES (107, 4, 6, 'dsadsadsa', '2020-02-18 03:26:35');
INSERT INTO `massages` VALUES (110, 6, 5, 'sdfdsfd', '2020-02-18 13:04:26');

-- ----------------------------
-- Table structure for online_chat
-- ----------------------------
DROP TABLE IF EXISTS `online_chat`;
CREATE TABLE `online_chat`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NULL DEFAULT NULL,
  `messenger` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `time` timestamp(0) NULL DEFAULT current_timestamp(0) ON UPDATE CURRENT_TIMESTAMP(0),
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `user_id`(`user_id`) USING BTREE,
  CONSTRAINT `online_chat_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE = InnoDB AUTO_INCREMENT = 103 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of online_chat
-- ----------------------------
INSERT INTO `online_chat` VALUES (47, 6, 'sda\n', '2020-02-18 08:08:34');
INSERT INTO `online_chat` VALUES (48, 6, '809\n', '2020-02-18 08:09:12');
INSERT INTO `online_chat` VALUES (49, 6, 'df\n', '2020-02-18 08:12:17');
INSERT INTO `online_chat` VALUES (50, 6, 'dfg\n', '2020-02-18 09:10:36');
INSERT INTO `online_chat` VALUES (51, 6, 'sdf\n', '2020-02-18 09:11:18');
INSERT INTO `online_chat` VALUES (52, 6, 'fdgdf\n', '2020-02-18 12:15:26');
INSERT INTO `online_chat` VALUES (55, 6, 'sdsadasd\n', '2020-02-18 12:56:56');
INSERT INTO `online_chat` VALUES (56, 6, 'sdsadasd\n', '2020-02-18 12:56:56');
INSERT INTO `online_chat` VALUES (57, 6, 'sdfsd\n', '2020-02-18 13:00:45');
INSERT INTO `online_chat` VALUES (58, 6, 'sdfsd\n', '2020-02-18 13:00:45');
INSERT INTO `online_chat` VALUES (59, 6, 'sdfdsf\n', '2020-02-18 13:03:03');
INSERT INTO `online_chat` VALUES (60, 6, 'sdfdsf\n', '2020-02-18 13:03:04');
INSERT INTO `online_chat` VALUES (61, 6, 'er\n', '2020-02-18 13:03:41');
INSERT INTO `online_chat` VALUES (62, 6, 'er\n', '2020-02-18 13:03:41');
INSERT INTO `online_chat` VALUES (63, 6, 'dsf\n', '2020-02-18 13:04:05');
INSERT INTO `online_chat` VALUES (64, 6, 'dsf\n', '2020-02-18 13:04:05');
INSERT INTO `online_chat` VALUES (65, 6, 'sadas\n', '2020-02-18 13:04:48');
INSERT INTO `online_chat` VALUES (66, 6, 'sadas\n', '2020-02-18 13:04:48');
INSERT INTO `online_chat` VALUES (67, 6, 'dfsdfs\n', '2020-02-18 13:04:53');
INSERT INTO `online_chat` VALUES (68, 6, 'dfsdfs\n', '2020-02-18 13:04:53');
INSERT INTO `online_chat` VALUES (69, 6, 'sdfsd\n', '2020-02-18 13:05:51');
INSERT INTO `online_chat` VALUES (70, 6, 'sdfsd\n', '2020-02-18 13:05:51');
INSERT INTO `online_chat` VALUES (71, 6, 'sdfsd\n', '2020-02-18 13:05:51');
INSERT INTO `online_chat` VALUES (72, 6, '1111\n', '2020-02-18 13:05:58');
INSERT INTO `online_chat` VALUES (73, 6, '1111\n', '2020-02-18 13:05:58');
INSERT INTO `online_chat` VALUES (74, 6, '1111\n', '2020-02-18 13:05:58');
INSERT INTO `online_chat` VALUES (75, 6, 'sdsd\n', '2020-02-18 13:07:03');
INSERT INTO `online_chat` VALUES (76, 6, 'sdsd\n', '2020-02-18 13:07:03');
INSERT INTO `online_chat` VALUES (77, 6, 'sdsd\n', '2020-02-18 13:07:03');
INSERT INTO `online_chat` VALUES (78, 6, '777\n', '2020-07-03 23:17:07');
INSERT INTO `online_chat` VALUES (79, 7, '9999\n', '2020-07-03 23:17:34');
INSERT INTO `online_chat` VALUES (80, 7, '9999\n', '2020-07-03 23:17:34');
INSERT INTO `online_chat` VALUES (81, 6, 'fgdfgdf\n', '2020-07-03 23:36:27');
INSERT INTO `online_chat` VALUES (82, 6, 'fgdfgdf\n', '2020-07-03 23:36:27');
INSERT INTO `online_chat` VALUES (83, 6, '8888\n', '2020-07-03 23:39:32');
INSERT INTO `online_chat` VALUES (84, 6, '8888\n', '2020-07-03 23:39:32');
INSERT INTO `online_chat` VALUES (85, 6, 'gh\n', '2020-07-03 23:40:51');
INSERT INTO `online_chat` VALUES (86, 6, 'gh\n', '2020-07-03 23:40:51');
INSERT INTO `online_chat` VALUES (87, 7, 'hjg\n', '2020-07-03 23:41:02');
INSERT INTO `online_chat` VALUES (88, 7, 'hjg\n', '2020-07-03 23:41:02');
INSERT INTO `online_chat` VALUES (89, 6, 'reter\n', '2020-07-03 23:42:42');
INSERT INTO `online_chat` VALUES (90, 6, 'reter\n', '2020-07-03 23:42:42');
INSERT INTO `online_chat` VALUES (91, 6, 'hjgh\n', '2020-07-03 23:43:16');
INSERT INTO `online_chat` VALUES (92, 6, 'hjgh\n', '2020-07-03 23:43:16');
INSERT INTO `online_chat` VALUES (93, 6, 'dfgd\n', '2020-07-03 23:43:38');
INSERT INTO `online_chat` VALUES (94, 6, 'dfgd\n', '2020-07-03 23:43:38');
INSERT INTO `online_chat` VALUES (95, 6, 'fgh\n', '2020-07-03 23:43:54');
INSERT INTO `online_chat` VALUES (96, 6, 'fgh\n', '2020-07-03 23:43:54');
INSERT INTO `online_chat` VALUES (97, 6, 'dfgdfg\n', '2020-07-03 23:46:10');
INSERT INTO `online_chat` VALUES (98, 6, 'dfgdfg\n', '2020-07-03 23:46:10');
INSERT INTO `online_chat` VALUES (99, 7, 'dgdfgd\n', '2020-07-03 23:46:20');
INSERT INTO `online_chat` VALUES (100, 7, 'dgdfgd\n', '2020-07-03 23:46:20');
INSERT INTO `online_chat` VALUES (101, 6, 'hfghfg\n', '2020-07-03 23:48:23');
INSERT INTO `online_chat` VALUES (102, 6, 'hfghfg\n', '2020-07-03 23:48:23');

-- ----------------------------
-- Table structure for photo
-- ----------------------------
DROP TABLE IF EXISTS `photo`;
CREATE TABLE `photo`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `users_id` int(11) NULL DEFAULT NULL,
  `img` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `users_id`(`users_id`) USING BTREE,
  CONSTRAINT `photo_ibfk_1` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE = InnoDB AUTO_INCREMENT = 14 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of photo
-- ----------------------------
INSERT INTO `photo` VALUES (12, 6, 'user_img/1581870897planeta_svet_pyatna_kosmos_86643_1280x720.jpg');

-- ----------------------------
-- Table structure for post_like
-- ----------------------------
DROP TABLE IF EXISTS `post_like`;
CREATE TABLE `post_like`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `post_id` int(11) NULL DEFAULT NULL,
  `user_id` int(11) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `post_id`(`post_id`) USING BTREE,
  INDEX `user_id`(`user_id`) USING BTREE,
  CONSTRAINT `post_like_ibfk_1` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `post_like_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE = InnoDB AUTO_INCREMENT = 111 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of post_like
-- ----------------------------
INSERT INTO `post_like` VALUES (4, 16, 5);
INSERT INTO `post_like` VALUES (89, 16, 6);
INSERT INTO `post_like` VALUES (91, 15, 6);

-- ----------------------------
-- Table structure for posts
-- ----------------------------
DROP TABLE IF EXISTS `posts`;
CREATE TABLE `posts`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `post` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `user_id` int(11) NULL DEFAULT NULL,
  `time` datetime(0) NULL DEFAULT current_timestamp(0) ON UPDATE CURRENT_TIMESTAMP(0),
  `picture` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `user_id`(`user_id`) USING BTREE,
  CONSTRAINT `posts_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE = InnoDB AUTO_INCREMENT = 66 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of posts
-- ----------------------------
INSERT INTO `posts` VALUES (13, 'esdge', 6, '2020-02-11 17:48:09', '0');
INSERT INTO `posts` VALUES (15, 'vtfh', 5, '2020-02-11 17:59:39', '0');
INSERT INTO `posts` VALUES (16, 'etgf', 5, '2020-02-11 17:59:41', '0');
INSERT INTO `posts` VALUES (17, 'ertreotjkreltre[\'ltp\';re', 6, '2020-02-11 19:08:19', '0');
INSERT INTO `posts` VALUES (18, '', 6, '2020-02-15 04:40:40', 'post_img/1581727240planeta_galaktika_vselennaia_121293_1280x720.jpg');
INSERT INTO `posts` VALUES (19, 'dfdsfsdfs', 6, '2020-02-16 20:28:48', 'post_img/1581870528kosmos_polet_nebo_zvezdy_82970_1280x720.jpg');
INSERT INTO `posts` VALUES (20, 'dfgdf\n', 6, '2020-02-18 04:47:39', '0');
INSERT INTO `posts` VALUES (21, 'dfg\n', 6, '2020-02-18 04:48:33', '0');
INSERT INTO `posts` VALUES (22, 'ds\n', 6, '2020-02-18 04:49:48', '0');
INSERT INTO `posts` VALUES (23, 'xc\n', 6, '2020-02-18 04:51:04', '0');
INSERT INTO `posts` VALUES (25, 'zxcxzc\n', 6, '2020-02-18 07:41:13', '0');
INSERT INTO `posts` VALUES (64, 'dfg\ndfgfdgdf', 6, '2020-02-18 12:20:36', '0');

-- ----------------------------
-- Table structure for request
-- ----------------------------
DROP TABLE IF EXISTS `request`;
CREATE TABLE `request`  (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NULL DEFAULT NULL,
  `my_id` int(11) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `user_id`(`user_id`) USING BTREE,
  INDEX `my_id`(`my_id`) USING BTREE,
  CONSTRAINT `request_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `request_ibfk_2` FOREIGN KEY (`my_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of request
-- ----------------------------

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `surname` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `age` int(11) NULL DEFAULT NULL,
  `email` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `user_img` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `online_offline` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `on_time` timestamp(0) NULL DEFAULT current_timestamp(0) ON UPDATE CURRENT_TIMESTAMP(0),
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 8 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES (1, 'xcvxc', 'vxcv', 15, 'cxvxc', '$2y$10$1Ms8Euk1H.RoGJD4zx./muoY.3iCSkhnZKZWQ029254COPWlQI/V6', 'user_img/user-avatar.png', '0', '2020-02-13 14:15:07');
INSERT INTO `users` VALUES (2, 'zxcvx', 'zvxcv', 45, 'xcrsdtger', '$2y$10$mDtN/zULy7x8z0VP7/dnZeSu7HEckR36EkP98VCd3Q1GsoHS9WBrK', 'user_img/user-avatar.png', '0', '2020-02-13 14:15:07');
INSERT INTO `users` VALUES (5, 'Edgar2000t', 'hfghfg', 20, 'ed20.jan.2000@gmail.com', '$2y$10$0hIXTqz90XE5HxjNbd9c2uUi9TIPjhzyKi5xKrq62wPHQgS3YqKOi', 'user_img/user-avatar.png', '0', '2020-02-13 14:15:07');
INSERT INTO `users` VALUES (6, 'ani', 'sarqsyan', 22, 'm@mail.ru', '$2y$10$syZ/qXlO.BZG5.0/GugmM.SArm6KBw1ItynoVUHOtfRdIG3Qf/mAC', '', 'active', '2020-07-03 23:08:34');
INSERT INTO `users` VALUES (7, 'armen', 'martirosyan', 21, 'e@mail.ru', '$2y$10$m92i8O957d.uQHnta19M5ORzPBUD92jmvbUpXwfnnyvbmHvW2fWvq', 'user_img/user-avatar.png', 'active', '2020-07-03 23:10:28');

SET FOREIGN_KEY_CHECKS = 1;
