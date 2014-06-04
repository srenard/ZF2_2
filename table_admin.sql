CREATE TABLE IF NOT EXISTS `admin` (
  `admin_id` tinyint(4) NOT NULL AUTO_INCREMENT,
  `admin_login` varchar(15) NOT NULL,
  `admin_passe` varchar(40) NOT NULL,
  `admin_auto` varchar(6) NOT NULL,
  PRIMARY KEY (`admin_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;
