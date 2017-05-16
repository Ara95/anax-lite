
SET NAMES utf8;


DROP TABLE IF EXISTS `content`;
CREATE TABLE `content`
(
  `id` INT AUTO_INCREMENT PRIMARY KEY NOT NULL,
  `path` CHAR(120) UNIQUE,
  `slug` CHAR(120) UNIQUE,

  `title` VARCHAR(120),
  `data` TEXT,
  `type` CHAR(20),
  `filter` VARCHAR(80) DEFAULT NULL,

  `published` DATETIME DEFAULT NULL,
  `created` TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  `updated` DATETIME DEFAULT NULL,
  `deleted` DATETIME DEFAULT NULL

) ENGINE INNODB CHARACTER SET utf8 COLLATE utf8_swedish_ci;



SELECT `id`, `path`, `slug`, `type`, `title`, `created` FROM `content`;
