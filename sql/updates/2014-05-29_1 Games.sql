ALTER TABLE  `games` ADD  `url` VARCHAR( 20 ) NOT NULL ,
ADD  `image` VARCHAR( 20 ) NOT NULL;
ALTER TABLE  `games` ADD  `course` INT NOT NULL AFTER  `category`
