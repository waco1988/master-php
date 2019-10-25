/*
Consulta multitabla:
Son consultas que sirven para consultar varias tablas en una sola sentencia
*/

# Mostras las entradas con el nombre del usuario, el nombre del autor y el nombre de la categoria
SELECT e.id, e.titulo, u.nombre AS 'Autor', c.nombre AS 'Categoria' FROM entradas e, usuarios u, categorias c WHERE e.usuario_id=u.id AND e.categoria_id=c.id;

