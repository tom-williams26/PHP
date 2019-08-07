CREATE TABLE article (
  article_id int(11) PRIMARY KEY AUTO_INCREMENT not null,
  article_title varchar(256) not null,
  article_text TEXT not null,
  article_author varchar(256) not null,
  article_date DATETIME not null
);

INSERT INTO article (article_title, article_text, article_author, article_date) VALUES ('50 great summer recipes', 'There are many recipes you can create for the summer which involves grilling, boiling, frying, and toasting.', 'Admin', '2018-11-25 12:23:02');

INSERT INTO article (article_title, article_text, article_author, article_date) VALUES ('A series of computer software', 'In this article you will learn about some of the software used in computers.', 'Tom Williams', '2018-14-25 05:33:13');
