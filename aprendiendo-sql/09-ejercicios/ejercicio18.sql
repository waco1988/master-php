/*
18. Listar los clientes que han hecho algun encargo del coche mercedez Ranchera
*/

SELECT * FROM clientes WHERE id IN
(SELECT cliente_id FROM encargos WHERE coche_id IN
(SELECT id FROM coches WHERE modelo LIKE '%Mercedes Ranchera%'));