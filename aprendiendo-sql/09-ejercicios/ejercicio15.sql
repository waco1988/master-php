/*
15. Mostrar los lcientes que mas pedidos han hecho y mostrar cuantos hicieron
*/

SELECT c.nombre, COUNT(e.id) AS 'Encargos' FROM encargos e
INNER JOIN clientes c ON c.id=e.cliente_id
GROUP BY cliente_id ORDER BY 2 DESC LIMIT 2;
