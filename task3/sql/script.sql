create database task3;

use task3;

CREATE TABLE IF NOT EXISTS comments (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `author_name` varchar(50) not null,
  `comment` mediumtext NOT NULL,
  `created_at` timestamp default CURRENT_TIMESTAMP(),
  PRIMARY KEY (`id`)
);

insert into comments (author_name, comment) values ('Egor', 'so good');