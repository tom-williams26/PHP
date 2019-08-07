CREATE TABLE users (
  user_id int(11) auto_increment PRIMARY KEY not null,
  user_first varchar(256) not null,
  user_last varchar(256) not null,
  user_email varchar(256) not null,
  user_uid varchar(256) not null,
  user_pwd varchar(256) not null
);

INSERT INTO users (user_first, user_last, user_email, user_uid, user_pwd) VALUES ('Tom', 'Williams', 'TomWilliams@gmail.com', 'Admin', 'test123');
