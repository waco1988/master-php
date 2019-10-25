/*
26. Sacar los vendedores que tienen jefe y sacar el nombre del jefe
*/

SELECT CONCAT(v1.nombre, ' ', v1.apellidos) AS 'Vendedor', CONCAT(v2.nombre, ' ', v2.apellidos) AS 'Jefe'
FROM vendedores v1
INNER JOIN vendedores v2 ON v1.jefe=v2.id;

