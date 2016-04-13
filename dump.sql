CREATE TABLE `posts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date` date DEFAULT NULL,
  `name` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `message` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

INSERT INTO `posts` VALUES (1,NULL,'1N','2N','3N'),(2,NULL,'1N','2N','3N'),(3,'2016-04-09','1N','2N','3N'),(4,'2016-04-09','1N','2N','3N'),(5,'2016-04-09','1N','2N','3N'),(6,'2016-04-09','1N','2N','3N'),(7,'2016-04-09','1N','2N','3N'),(8,'2016-04-09','1N','2N','3N'),(9,'2016-04-09','1N','2N','3N'),(10,'2016-04-09','1N','2N','3N'),(11,'2016-04-11','1N','2N','3N');