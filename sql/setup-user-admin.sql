USE test;

SET NAMES utf8;



DROP TABLE IF EXISTS `users`;
CREATE TABLE `users`
(
  `id` INT AUTO_INCREMENT PRIMARY KEY NOT NULL,
  `name` VARCHAR(100) NOT NULL,
  `pass` VARCHAR(100),
  `info` VARCHAR(100) NOT NULL,
  `email` VARCHAR(100) NOT NULL,
  `authority` VARCHAR(100) NOT NULL
) ENGINE INNODB CHARACTER SET utf8 COLLATE utf8_swedish_ci;



SELECT COUNT(id) FROM users;
DELETE FROM users WHERE id='$id';
SELECT * FROM users WHERE id='$id';
UPDATE users SET info = ?, email = ?, authority = ? WHERE id='$id';
SELECT * FROM users WHERE name LIKE '$search';
SELECT * FROM users ORDER BY $orderBy $order LIMIT $hits OFFSET $offset;
