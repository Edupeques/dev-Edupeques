ALTER TABLE `games`
	ALTER `category` DROP DEFAULT,
	ALTER `age` DROP DEFAULT,
	ALTER `image` DROP DEFAULT;
ALTER TABLE `games`
	CHANGE COLUMN `entry` `entry` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT FIRST,
	CHANGE COLUMN `category` `category` INT(10) UNSIGNED NOT NULL AFTER `entry`,
	CHANGE COLUMN `age` `age` TINYINT(2) UNSIGNED NULL AFTER `category`,
	CHANGE COLUMN `image` `image` VARCHAR(50) NOT NULL AFTER `url`;
