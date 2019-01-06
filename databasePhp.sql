drop database if exists projectPhp;
create database projectPhp;
use projectPhp;

create table Categories(
id int primary key auto_increment,
ca_name varchar(255) not null,
description varchar(255)
);

create table Products(
id int auto_increment primary key,
p_name varchar(255) not null,
price int not null,
dates date,
quantity int not null,
cate_id int not null,
img varchar(255) not null,
status varchar(255) not null,
foreign key(cate_id) references Categories(id)
);

create table User(
id int auto_increment primary key,
email varchar(255) not null,
user_name varchar(255) not null,
password varchar(255) not null,
level varchar(255) not null,
address varchar(255) not null,
img varchar(255) not null
);

create table Orders(
id int auto_increment primary key,
user_id int not null,
dates date,
foreign key(user_id) references User(id)
);

create table Ords_Prods(
prod_id int not null,
order_id int not null,
quantity int not null,
primary key(prod_id,order_id),
foreign key(prod_id) references Products(id),
foreign key(order_id) references Orders(id)
);

ALTER TABLE Categories AUTO_INCREMENT = 1;
ALTER TABLE Products AUTO_INCREMENT = 1;
ALTER TABLE Orders AUTO_INCREMENT = 1;
ALTER TABLE User AUTO_INCREMENT = 1;



