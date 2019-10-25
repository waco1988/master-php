/*
Subconsultas

* Son consultas que se ejecutas dentro de otras.
* Consiste en utilizar los resultados de la subconsulta para operar en la consulta principal
* Jugando con las claves ajenas / foraneas
*/

# El operador in se usa cuando devuelve varios resultados

# Sacar usuarios con entradas
select * from usuarios where id in (select usuario_id from entradas);

# Sacar usuarios sin entradas
select * from usuarios where id not in (select usuario_id from entradas);

# Sacar usuarios que tengan alguna entrada que en su titulo hable de  GTA
select nombre, apellidos from usuarios where id in (select usuario_id from entradas where titulo like "%GTA%");

# Sacar todas las entradas de la categoria accion utilizando su nombre
select categoria_id, titulo from entradas where categoria_id in (select id from categorias where nombre = 'Deportes');

# Mostrar las categrias con 3 o más entradas
SELECT nombre FROM categorias WHERE id IN (SELECT categoria_id FROM entradas GROUP BY categoria_id HAVING COUNT(categoria_id) >=3);

# Mostrar los usuarios que crearon una entrada un Jueves // los dias de la semana se cuentas desde el domingo
SELECT * FROM usuarios WHERE id IN (SELECT usuario_id FROM entradas WHERE DAYOFWEEK(fecha)=5);

# Mostrar el nombre de el usuario que tenga mas entradas
SELECT CONCAT(nombre,'',apellidos) AS 'El usuario con más entradas' FROM usuarios WHERE id=(SELECT usuario_id FROM entradas GROUP BY usuario_id ORDER BY COUNT(id) DESC LIMIT 1);

# Mostrar las categorias sin entradas
SELECT * FROM categorias WHERE id NOT IN (SELECT categoria_id FROM entradas);



