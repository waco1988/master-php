/*
int(# de cifras) ENTERO
integer(# de cifras) ENTERO
float(# de cifras, # de decimales) DECIMAL / COMA FLOTANTE
varchar(# de caracteres) STRING / ALFANUMERICO
char(# de caracteres) STRING / ALFANUMERICOS
date
time
timestamp

//enteros más grande
MEDIUMINT
BIGINT

//String más grande
TEXT 65535 caracteres
MEDIUMTEXT 16 millones caracteres
LONGTEXT 4 billones caracteres
*/

/* 
 Crear tabla
 */

CREATE TABLE usuarios(
    id int(11) auto_increment not null,
    nombre varchar(100) not null,
    apellidos varchar(255) null,
    email varchar(100) not null,
    password varchar(255),
    CONSTRAINT pk_usuarioS PRIMARY KEY(id)
);





