drop table user_cheatnow;
CREATE TABLE `user_cheatnow` (
`username` text(20) NOT NULL,
  `password` text NOT NULL,
  `dept` text NOT NULL,
  primary key(username(30))
) ENGINE=InnoDB DEFAULT CHARSET=latin1;