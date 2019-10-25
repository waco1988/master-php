/*
8. Visualizar todos los coches en cuyo marca exista la letra "A" y cuyo modelo empieca por "F"
*/

SELECT * FROM coches WHERE marca LIKE '%a%' AND modelo LIKE 'F%';