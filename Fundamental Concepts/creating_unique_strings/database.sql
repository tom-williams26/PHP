CREATE TABLE keystring (
	keystringId int(11) PRIMARY KEY AUTO_INCREMENT not null,
  keystringKey LONGTEXT not null
);

INSERT INTO keystring (keystringKey) VALUES ('a');
INSERT INTO keystring (keystringKey) VALUES ('b');
INSERT INTO keystring (keystringKey) VALUES ('c');
