CREATE TABLE user (
  id int(11) not null PRIMARY KEY AUTO_INCREMENT,
  first varchar(256) not null,
  last varchar(256) not null,
  username varchar(256) not null,
  password varchar(256) not null
);

CREATE TABLE profileimg (
  id int(11) not null PRIMARY KEY AUTO_INCREMENT,
  userid int(11) not null,
  status int(11) not null,
);
