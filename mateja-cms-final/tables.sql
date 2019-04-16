DROP TABLE IF EXISTS articles;
CREATE TABLE articles
(
  id              smallint unsigned NOT NULL auto_increment,
  publicationDate date NOT NULL,
  title           varchar(255) NOT NULL,
  summary         text NOT NULL,
  content         mediumtext NOT NULL,

  PRIMARY KEY     (id)
);


DROP TABLE IF EXISTS users;
CREATE TABLE users
(
  id              smallint unsigned NOT NULL auto_increment,
  userName        varchar (255)NOT NULL,
  userPassword    varchar(255) NOT NULL,

  PRIMARY KEY     (id)
);