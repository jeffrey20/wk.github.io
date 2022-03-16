DROP TABLE IF EXISTS `url_config`;</explode>
CREATE TABLE `url_config` (
  `k` varchar(255) NOT NULL,
  `v` text,
  PRIMARY KEY (`k`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;</explode>

INSERT INTO `url_config` VALUES ('admin_user', 'admin');</explode>
INSERT INTO `url_config` VALUES ('admin_pwd', '123456');</explode>
INSERT INTO `url_config` VALUES ('ad-1', '7c');</explode>
INSERT INTO `url_config` VALUES ('ad-1-1', '工作室');</explode>
INSERT INTO `url_config` VALUES ('ad-2', '2016正式接触,当初的旧友都已离去,唯我依旧坚守。');</explode>
INSERT INTO `url_config` VALUES ('ad-3', 'https://jq.qq.com/?_wv=102');</explode>
INSERT INTO `url_config` VALUES ('ad-4', '黑ICP备2099000444号-1');</explode>
INSERT INTO `url_config` VALUES ('ad2-1', '个人介绍');</explode>
INSERT INTO `url_config` VALUES ('ad2-2', '<p>听指挥，执行快，脾气好，不喷人，操作虎，意识强，渗透快，shell多，能过狗，能过盾。</p>
<p>千里之外取服务器首级，瞬息之间爆管理员狗头，压安全狗如压草芥。电话通知出Bug后，秒登vpn，千里之外定位问题，瞬息之间修复上线。</p>
<p>只有你想不到的，没有我做不到的。</p>
<p>以上都是吹的，我只会划水摸鱼，我是个废物。</p>');</explode>
INSERT INTO `url_config` VALUES ('ad3', '一人即是一队！');</explode>
INSERT INTO `url_config` VALUES ('title', '-2022精美工作室主页-葫芦侠首发');</explode>
INSERT INTO `url_config` VALUES ('keywords', '工作室，个人专用，引导页面');</explode>
INSERT INTO `url_config` VALUES ('description', '搜集各种好东西，记得关注我哦！');</explode>
INSERT INTO `url_config` VALUES ('ad4-1', '官方站点');</explode>
INSERT INTO `url_config` VALUES ('ad4-2', 'http://www.baidu.com');</explode>
INSERT INTO `url_config` VALUES ('ad4-3', '个人博客');</explode>
INSERT INTO `url_config` VALUES ('ad4-4', '爱生活，爱分享');</explode>
INSERT INTO `url_config` VALUES ('music', '1');</explode>
INSERT INTO `url_config` VALUES ('link_1_url', '');</explode>
INSERT INTO `url_config` VALUES ('link_2_name', '');</explode>
INSERT INTO `url_config` VALUES ('link_2_url', '');</explode>


DROP TABLE IF EXISTS `url_host`;</explode>
CREATE TABLE `url_host` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `domain` varchar(255) DEFAULT NULL,
  `date` datetime DEFAULT NULL,
  `type` int(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;</explode>
DROP TABLE IF EXISTS `url_report`;</explode>
CREATE TABLE `url_report` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `url` varchar(64) DEFAULT NULL,
  `reason` varchar(20) DEFAULT NULL,
  `email` varchar(20) DEFAULT NULL,
  `ip` varchar(20) DEFAULT NULL,
  `date` datetime DEFAULT NULL,
  `status` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;</explode>