/*
5. Mostrar todos los vendedores con su nombre y el numero de dias que llevan en el concesionario
*/

SELECT nombre, DATEIFF(CURDATE(), fecha) AS 'DIAS' FROM vendedores;