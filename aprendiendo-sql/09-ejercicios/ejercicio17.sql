/*
17. Obtenerr un listado con los encargos realizados con el cliente "fruteria ANtonia Inc
*/

SELECT e.id AS 'N. Encargo', cantidad, c.nombre, co.modelo, e.fehca
FROM encargos e
INNER JOIN clientes c ON c.id=e.cliente_id
INNER JOIN coches co ON co.id=e.coche_id
WHERE e.cliente_id IN
(SELECT id FROM clientes WHERE nombre='Fruteria Antonia Inc');