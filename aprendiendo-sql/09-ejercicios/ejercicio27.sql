/*
27. Visualizar los nombre de lso cloientes y la cantidad de encargos realizados, incluyendo
los que no hayn realizado encargos
*/

SELECT c.nombre, COUNT(e.id) FROM clientes c
LEFT JOIN encargos e ON c.id=e.cliente_id
GROUP BY 1;