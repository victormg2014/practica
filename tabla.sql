CREATE TABLE usuarios.usuarios (
 ID int(8) auto_increment,
 usuario varchar(20) not null,
 clave varchar(20) not null,
 PRIMARY KEY (ID)
);

insert into usuarios.usuarios (usuario, clave) values ('pepe', 1234);
