DROP TABLE IF EXISTS `register`;
CREATE TABLE IF NOT EXISTS `user` (
  `fname` varchar(20) NOT NULL,
  `dob` varchar(20) NOT NULL,
  `address` varchar(100) NOT NULL,
  `email` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
   `phno` varchar(20) NOT NULL

 
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
