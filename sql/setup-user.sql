USE test;



DROP TABLE IF EXISTS `users`;

CREATE TABLE `users`
(
  `id` INT AUTO_INCREMENT PRIMARY KEY NOT NULL,
  `name` VARCHAR(100) NOT NULL,
  `pass` VARCHAR(100),
  `authority`		VARCHAR(16) NOT NULL DEFAULT 'user'
) ENGINE INNODB CHARACTER SET utf8 COLLATE utf8_swedish_ci;


INSERT into users (name, pass, authority) VALUES ('$user', '$pass', '$authority')
