drop table user_cheatnow;

CREATE TABLE `user_cheatnow` (
`username` text(20) NOT NULL,
  `password` text NOT NULL,
  `dept` text NOT NULL,
  primary key(username(30))
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

ALTER TABLE user_hd
ADD COLUMN count integer; 

ALTER TABLE notes_hd
MODIFY COLUMN module text;  

CREATE TABLE `notes_hd` (
`coursecode` text NOT NULL,
  `tl` text NOT NULL,
  `module` int NOT NULL,
  `link` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

update notes_hd set topic = 'File System' where coursecode = 'CSE2005' and module = 'Module 7';

