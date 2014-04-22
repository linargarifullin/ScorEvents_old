DROP DATABASE IF EXISTS `ScorEvents`;
CREATE DATABASE `ScorEvents` DEFAULT CHARSET = utf8;
USE `ScorEvents`;


-- ------------- --
-- 	USER_STATUS  --
-- ------------- --
CREATE TABLE `user_status` (
	`status_id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
	`title` VARCHAR(255),
	PRIMARY KEY (`status_id`)
) ENGINE = InnoDB DEFAULT CHARSET = utf8;

INSERT INTO `user_status` (`title`) VALUES 
	('not activated'),
	('activated'),
	('restricted');

-- ----------- --
--    USERS    --
-- ----------- --
CREATE TABLE `users` (
	`id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
	`username` VARCHAR(255) NOT NULL,
	`email` VARCHAR(255) NOT NULL,
	`password` VARCHAR(255) NOT NULL,
	`status` INT(10) UNSIGNED NOT NULL DEFAULT 1,
	`remember_token` TEXT DEFAULT NULL,
	`last_login` TIMESTAMP DEFAULT 0,
	FOREIGN KEY (`status`)
		REFERENCES `user_status`(`status_id`),
	PRIMARY KEY (`id`),
	UNIQUE (`username`),
	UNIQUE (`email`)
) ENGINE = InnoDB DEFAULT CHARSET = utf8;


-- --------------- --
--    USER_INFO    --
-- --------------- --
CREATE TABLE `user_info` (
	`user_id` INT(10) UNSIGNED NOT NULL,
	`first_name` VARCHAR(255) NOT NULL,
	`middle_name` VARCHAR(255) DEFAULT NULL,
	`last_name` VARCHAR(255) NOT NULL,
	`address` VARCHAR(255) DEFAULT NULL,
	`city` VARCHAR(255) DEFAULT NULL,
	`state` VARCHAR(2) DEFAULT NULL,
	`zip` INT(5) DEFAULT NULL,
	`phone` VARCHAR(15) DEFAULT NULL,
	`sex` CHAR(1) DEFAULT NULL,
	`dob` DATE DEFAULT NULL,
	`created_at` TIMESTAMP DEFAULT 0,
	`updated_at` TIMESTAMP DEFAULT 0,
	FOREIGN KEY (`user_id`)
		REFERENCES `users`(`id`)
		ON DELETE CASCADE,
	UNIQUE (`user_id`)
) ENGINE = InnoDB DEFAULT CHARSET = utf8;


-- ----------------- --
--  USER_ACTIVATION  --
-- ----------------- --
CREATE TABLE `user_activation` (
	`user_id` INT(10) UNSIGNED NOT NULL,
	`key` VARCHAR(64),
	`created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
	FOREIGN KEY (`user_id`)
		REFERENCES `users`(`id`)
		ON DELETE CASCADE,
	UNIQUE (`user_id`)
) ENGINE = InnoDB DEFAULT CHARSET = utf8;


-- ------------------ --
--       FRIENDS      --
-- ------------------ --
CREATE TABLE `friends` (
	`user_id` INT(10) UNSIGNED NOT NULL,
	`friend_id` INT(10) UNSIGNED NOT NULL,
	`status` ENUM('pending','accepted','blocked') NOT NULL DEFAULT 'pending',
	`created_at` TIMESTAMP DEFAULT 0,
	`updated_at` TIMESTAMP DEFAULT 0,
	FOREIGN KEY (`user_id`)
		REFERENCES `users`(`id`)
		ON DELETE CASCADE,
	FOREIGN KEY (`friend_id`)
		REFERENCES `users`(`id`)
		ON DELETE CASCADE,
	UNIQUE (`user_id`)
) ENGINE = InnoDB DEFAULT CHARSET = utf8;


-- -------------- --
-- 	EVENT_STATUS  --
-- -------------- --
CREATE TABLE `event_status` (
	`status_id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
	`title` VARCHAR(255),
	PRIMARY KEY (`status_id`)
) ENGINE = InnoDB DEFAULT CHARSET = utf8;

INSERT INTO `event_status` (`title`) VALUES 
	('private'),
	('public');


-- ------------------ --
--       EVENTS       --
-- ------------------ --
CREATE TABLE `events` (
	`event_id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
	`host_id` INT(10) UNSIGNED NOT NULL,
	`event_name` VARCHAR(255) NOT NULL,
	`event_description` VARCHAR(255) DEFAULT NULL,
	`address` VARCHAR(255) NOT NULL,
	`city` VARCHAR(255) NOT NULL,
	`state` VARCHAR(2) NOT NULL,
	`zip` INT(5) UNSIGNED NOT NULL,
	`min_age` INT(3) UNSIGNED NOT NULL,
	`max_age` INT(3) UNSIGNED NOT NULL,
	`start_time` TIMESTAMP NOT NULL,
	`end_time` TIMESTAMP NOT NULL,
	`status` INT(10) UNSIGNED NOT NULL DEFAULT 1,
	`created_at` TIMESTAMP DEFAULT 0,
	`updated_at` TIMESTAMP DEFAULT 0,
	PRIMARY KEY (`event_id`),
	FOREIGN KEY (`status`)
		REFERENCES `event_status`(`status_id`),
	FOREIGN KEY (`host_id`)
		REFERENCES `users`(`id`)
		ON DELETE CASCADE
) ENGINE = InnoDB DEFAULT CHARSET = utf8;


-- ---------------------- --
--     EVENT INVITES      --
-- ---------------------- --
CREATE TABLE `event_invites` (
	`event_id` INT(10) UNSIGNED NOT NULL,
	`host_id` INT(10) UNSIGNED NOT NULL,
	`invitee_id` INT(10) UNSIGNED NOT NULL,
	`status` ENUM('pending','accepted','blocked') NOT NULL DEFAULT 'pending',
	`created_at` TIMESTAMP DEFAULT 0,
	`updated_at` TIMESTAMP DEFAULT 0,
	FOREIGN KEY (`event_id`)
		REFERENCES `events`(`event_id`)
		ON DELETE CASCADE,
	FOREIGN KEY (`host_id`)
		REFERENCES `users`(`id`)
		ON DELETE CASCADE,
	FOREIGN KEY (`invitee_id`)
		REFERENCES `users`(`id`)
		ON DELETE CASCADE,
	UNIQUE (`event_id`)
) ENGINE = InnoDB DEFAULT CHARSET = utf8;