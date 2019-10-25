/*
10. VIsualizar los apellidos de los vendedores, su fecha y su numero de grupo,
ordenado por su fecha descendiente, mostrar los 4 ultimos
*/

SELECT apellidos, fecha, id FROM vendedores ORDER BY fecha DESC LIMIT 4;