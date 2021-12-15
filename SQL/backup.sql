CREATE TABLE `user_cheatnow` (
`username` text(20) NOT NULL,
  `email` text(50) NOT NULL,
  `password` text NOT NULL,
  primary key(username(20))
) ENGINE=InnoDB DEFAULT CHARSET=latin1;