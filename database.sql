
CREATE TABLE IF NOT EXISTS `notifications` (
`id` int(8) NOT NULL,
  `post_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `user2` int(11) DEFAULT NULL,
  `viewed` int(11) DEFAULT '0',
  `type` text,
  `content` varchar(50) DEFAULT NULL,
  `content_id` int(16) DEFAULT NULL,
  `timestamp` bigint(20) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=46 DEFAULT CHARSET=utf8;


CREATE TABLE IF NOT EXISTS `tags` (
`id` int(8) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `tag` varchar(260) DEFAULT NULL,
  `timestamp` int(11) DEFAULT NULL,
  `tribe` int(11) DEFAULT NULL,
  `location` varchar(90) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=760 DEFAULT CHARSET=utf8;


CREATE TABLE IF NOT EXISTS `users` (
`id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `name` varchar(35) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `password` varchar(32) NOT NULL,
  `avatar` varchar(255) DEFAULT NULL,
  `avatarpro` varchar(300) DEFAULT NULL,
  `avataro` varchar(300) DEFAULT NULL,
  `background` varchar(255) DEFAULT NULL,
  `timestamp` int(20) DEFAULT NULL,
  `aboutme` text,
  `hometown` varchar(50) DEFAULT NULL,
  `followers` int(11) DEFAULT '0',
  `following` int(11) DEFAULT '0',
  `posts` int(11) DEFAULT '0',
  `tribes` int(11) DEFAULT '0',
  `likes` int(11) DEFAULT '0',
  `trends` varchar(70) NOT NULL DEFAULT 'Africa',
  `auth` int(2) DEFAULT '0',
  `loc` int(2) DEFAULT '0',
  `backcolor` varchar(50) DEFAULT NULL,
  `pbackcolor` varchar(50) DEFAULT NULL,
  `stats` varchar(50) DEFAULT NULL,
  `bback` varchar(50) DEFAULT NULL,
  `client` text,
  `ip` varchar(30) DEFAULT NULL,
  `twitter` varchar(56) DEFAULT NULL,
  `facebook` varchar(100) DEFAULT NULL,
  `facebook_id` int(90) DEFAULT NULL,
  `type` text
) ENGINE=InnoDB AUTO_INCREMENT=81 DEFAULT CHARSET=utf8;


CREATE TABLE IF NOT EXISTS `likes` (
`id` int(8) NOT NULL,
  `post_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `username` varchar(50) DEFAULT NULL,
  `name` varchar(50) DEFAULT NULL,
  `likes` tinyint(3) DEFAULT '0',
  `timestamp` bigint(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=1426 DEFAULT CHARSET=utf8;


CREATE TABLE IF NOT EXISTS `posts` (
`id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `views` int(11) NOT NULL DEFAULT '0',
  `comments` int(11) NOT NULL DEFAULT '0',
  `likes` int(11) NOT NULL DEFAULT '0',
  `reposts` int(11) DEFAULT '0',
  `op` int(11) DEFAULT NULL,
  `roles` varchar(4) DEFAULT NULL,
  `value1` varchar(50) DEFAULT NULL,
  `value2` varchar(50) DEFAULT NULL,
  `value1a` int(66) DEFAULT '0',
  `value2a` int(66) DEFAULT '0',
  `value1link` varchar(100) DEFAULT NULL,
  `value2link` varchar(100) DEFAULT NULL,
  `repuser` int(15) DEFAULT NULL,
  `role` varchar(15) DEFAULT NULL,
  `post_id` int(22) DEFAULT NULL,
  `replies` int(22) DEFAULT NULL,
  `votesup` int(22) DEFAULT '0',
  `votesdown` int(22) DEFAULT '0',
  `post` varchar(5000) NOT NULL,
  `avatar` varchar(200) DEFAULT NULL,
  `image` varchar(50) DEFAULT NULL,
  `section` varchar(13) DEFAULT NULL,
  `imageo` varchar(300) DEFAULT NULL,
  `location` varchar(90) DEFAULT NULL,
  `type` varchar(10) DEFAULT NULL,
  `user2_id` int(12) DEFAULT NULL,
  `tribe_id` int(11) DEFAULT NULL,
  `timestamp` bigint(20) DEFAULT NULL,
  `img` int(2) NOT NULL DEFAULT '1'
) ENGINE=InnoDB AUTO_INCREMENT=1827 DEFAULT CHARSET=utf8;
