create database practica12
 CHARACTER SET utf8
  COLLATE utf8_unicode_ci;

  use practica12;

  create table usuarios(
        id int(10) not null AUTO_INCREMENT,
        nombre varchar(200) not null,
        apellido varchar(200) not null,
        username varchar(200) not null ,
        contrasena varchar(200) not null,
        correo varchar(200) not null,
        fecha_registro timestamp not null default current_timestamp ,
        PRIMARY KEY(id)
  );
 
insert into usuarios VALUES (1,'admin','admin','admin','admin','admin@gmail.com',now());
insert into usuarios VALUES (2,'ramon','mata','kamus','mata123','1430115@upv.edu.mx',now());

create table categorias(
id int(11) not null auto_increment ,
nombre varchar(100) not null,
descripcion varchar(100) not null,
fecha_agregado timestamp not null default current_timestamp ,
primary key(id)
);

insert into categorias VALUES (1,'Electrónica','Se albergan todo lo referente a multimedia electronica',now()),
(2,'Fotografía','Todo referente a fotografia',now());


create table productos(
id int(11)not null auto_increment ,
codigo varchar(200) not null,
nombre varchar(200)not null,
precio DECIMAL(10,2) not null,
stock int(11) not null,
categoria int(11) not null,
fecha_agregado timestamp not null default current_timestamp ,
Primary key(id),
Foreign key (categoria) REFERENCES categorias(id) on update cascade on delete cascade
);

insert into productos VALUES (1,'7309650023','Camara Fotografica SONY','5200,99','3',2,NOW());

create table historiales(
id int(11) not null auto_increment,
producto int(11) not null,
usuario int(11) not null,
nota varchar(255) not null,
cantidad int(11) not null,
fecha  timestamp not null default current_timestamp ,
Primary key(id),
Foreign key (producto) REFERENCES productos(id) on update cascade on delete cascade,
Foreign key (usuario) REFERENCES usuarios(id) on update cascade on delete cascade
);













