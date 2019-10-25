/*
22. Mostrar listado de clientes (número de cliente y el nombre) mostrar tambien
el número de vendedor y su nombre
*/

SELECT c.id, c.nombre, v.id, CONCAT(v.nombre, ' ', v.apellidos) AS 'Vendedor'
FROM clientes c, vendedores v
WHERE c.vendedor_id=v.id;
