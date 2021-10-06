create database dbherois CHARACTER SET utf8 COLLATE utf8_general_ci;

use dbherois;

create table tbherois(
Cod int not null auto_increment,
name varchar(100),
Category varchar(100),
mark varchar(100),
price float,
inventory int,
primary key(codPro))ENGINE=InnoDB DEFAULT CHARSET=utf8 DEFAULT COLLATE utf8_unicode_ci;