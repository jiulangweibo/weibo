/*
Navicat MySQL Data Transfer

Source Server         : linux-mysql
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : spray

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2017-06-24 10:09:30
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for admin
-- ----------------------------
DROP TABLE IF EXISTS `admin`;
CREATE TABLE `admin` (
  `id` int(32) unsigned NOT NULL AUTO_INCREMENT,
  `admin_name` varchar(32) NOT NULL COMMENT '管理员名称',
  `admin_id` int(32) DEFAULT NULL COMMENT '管理员id',
  `admin_password` varchar(32) NOT NULL COMMENT '管理员密码',
  `admin_time` int(32) DEFAULT NULL COMMENT '管理员添加时间',
  `admin-phone` int(11) DEFAULT NULL COMMENT '管理员联系方式',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of admin
-- ----------------------------

-- ----------------------------
-- Table structure for collections
-- ----------------------------
DROP TABLE IF EXISTS `collections`;
CREATE TABLE `collections` (
  `id` int(32) unsigned NOT NULL AUTO_INCREMENT,
  `message_id` int(32) DEFAULT NULL COMMENT '微博id',
  `user_id` int(32) DEFAULT NULL COMMENT '收藏用户id',
  `collections_time` int(32) DEFAULT NULL COMMENT '收藏时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of collections
-- ----------------------------

-- ----------------------------
-- Table structure for comments
-- ----------------------------
DROP TABLE IF EXISTS `comments`;
CREATE TABLE `comments` (
  `id` int(32) unsigned NOT NULL AUTO_INCREMENT,
  `message_id` int(32) DEFAULT NULL COMMENT '所评论的微博id',
  `user_id` int(32) DEFAULT NULL COMMENT '评论用户id',
  `comments_content` varchar(255) DEFAULT NULL COMMENT '评论内容',
  `comments_time` int(32) DEFAULT NULL COMMENT '评论时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of comments
-- ----------------------------

-- ----------------------------
-- Table structure for content
-- ----------------------------
DROP TABLE IF EXISTS `content`;
CREATE TABLE `content` (
  `id` int(32) unsigned NOT NULL AUTO_INCREMENT,
  `message_id` int(32) DEFAULT NULL COMMENT '微博id',
  `status` int(1) DEFAULT NULL COMMENT '内容状态',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of content
-- ----------------------------

-- ----------------------------
-- Table structure for count
-- ----------------------------
DROP TABLE IF EXISTS `count`;
CREATE TABLE `count` (
  `message_id` int(32) NOT NULL COMMENT '微博消息id',
  `comment_count` int(32) DEFAULT NULL COMMENT '评论数',
  `praise_count` int(32) DEFAULT NULL COMMENT '点赞数',
  `foward_count` int(32) DEFAULT NULL COMMENT '转发数',
  `onclicknum` int(32) DEFAULT NULL COMMENT '点击数',
  PRIMARY KEY (`message_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of count
-- ----------------------------

-- ----------------------------
-- Table structure for fans
-- ----------------------------
DROP TABLE IF EXISTS `fans`;
CREATE TABLE `fans` (
  `id` int(32) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(32) NOT NULL,
  `count` int(32) DEFAULT NULL COMMENT '粉丝数量',
  `fans_id` int(32) DEFAULT NULL COMMENT '粉丝id',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of fans
-- ----------------------------

-- ----------------------------
-- Table structure for follow
-- ----------------------------
DROP TABLE IF EXISTS `follow`;
CREATE TABLE `follow` (
  `id` int(32) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(32) NOT NULL,
  `follow_id` int(32) NOT NULL COMMENT '关注用户id',
  `count` int(16) DEFAULT NULL COMMENT '关注数量',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of follow
-- ----------------------------

-- ----------------------------
-- Table structure for forward
-- ----------------------------
DROP TABLE IF EXISTS `forward`;
CREATE TABLE `forward` (
  `id` int(32) unsigned NOT NULL AUTO_INCREMENT,
  `users_id` int(32) DEFAULT NULL COMMENT '被转发发布者id',
  `message_id` int(32) DEFAULT NULL COMMENT '被转发微博id',
  `user_id` int(11) DEFAULT NULL COMMENT '转发用户id',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of forward
-- ----------------------------

-- ----------------------------
-- Table structure for message
-- ----------------------------
DROP TABLE IF EXISTS `message`;
CREATE TABLE `message` (
  `id` int(32) unsigned NOT NULL AUTO_INCREMENT,
  `message_id` int(32) DEFAULT NULL COMMENT '微博消息id',
  `user_id` int(32) DEFAULT NULL COMMENT '发布者id',
  `content` mediumtext COMMENT '内容',
  `picname` varchar(32) DEFAULT NULL COMMENT '图片',
  `publish_time` int(32) DEFAULT NULL COMMENT '发表时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of message
-- ----------------------------

-- ----------------------------
-- Table structure for privileges
-- ----------------------------
DROP TABLE IF EXISTS `privileges`;
CREATE TABLE `privileges` (
  `id` int(32) unsigned NOT NULL AUTO_INCREMENT,
  `admin_id` int(32) DEFAULT NULL COMMENT '管理员id',
  `title` varchar(32) DEFAULT NULL COMMENT '权限描述',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of privileges
-- ----------------------------

-- ----------------------------
-- Table structure for register
-- ----------------------------
DROP TABLE IF EXISTS `register`;
CREATE TABLE `register` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '注册id',
  `user_id` int(11) NOT NULL COMMENT '用户id',
  `email` varchar(32) NOT NULL COMMENT 'email',
  `password` varchar(32) NOT NULL COMMENT '用户密码',
  `nickname` varchar(16) NOT NULL COMMENT '用户昵称',
  `register_time` int(32) DEFAULT NULL COMMENT '注册时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of register
-- ----------------------------

-- ----------------------------
-- Table structure for url
-- ----------------------------
DROP TABLE IF EXISTS `url`;
CREATE TABLE `url` (
  `id` int(32) unsigned NOT NULL AUTO_INCREMENT,
  `url` varchar(32) DEFAULT NULL COMMENT '链接地址',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of url
-- ----------------------------

-- ----------------------------
-- Table structure for userinfo
-- ----------------------------
DROP TABLE IF EXISTS `userinfo`;
CREATE TABLE `userinfo` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL COMMENT '用户id',
  `nickname` varchar(32) NOT NULL COMMENT '用户昵称',
  `password` varchar(32) NOT NULL COMMENT '密码',
  `email` varchar(32) DEFAULT NULL COMMENT 'email',
  `phone` int(11) DEFAULT NULL COMMENT '手机号',
  `age` int(3) DEFAULT NULL COMMENT '年龄',
  `sex` varchar(1) DEFAULT NULL COMMENT '性别',
  `sexual` varchar(1) DEFAULT NULL COMMENT '性取向',
  `picname` varchar(32) DEFAULT NULL COMMENT '头像',
  `birthday` varchar(10) DEFAULT NULL COMMENT '生日',
  `address` varchar(64) DEFAULT NULL COMMENT '详细地址',
  `name` varchar(10) DEFAULT NULL COMMENT '用户姓名',
  `status` int(1) DEFAULT NULL COMMENT '状态',
  `register_time` int(32) DEFAULT NULL COMMENT '注册时间',
  `QQ` int(11) DEFAULT NULL COMMENT 'QQ',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of userinfo
-- ----------------------------
