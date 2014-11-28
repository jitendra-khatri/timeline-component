CREATE TABLE IF NOT EXISTS `#__timeline_items` (
  `items_id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `description` mediumtext NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `image1` varchar(500) NOT NULL,
  `image2` varchar(500) NOT NULL,
  `image3` varchar(500) NOT NULL
)
PRIMARY KEY (`items_id`)
ENGINE=InnoDB  DEFAULT CHARSET=utf8;
