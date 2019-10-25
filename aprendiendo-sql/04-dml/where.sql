# COnsulta con una condicion #

SELECT * FROM usuarios WHERW email = 'admin@admin.com';

/*
Operadores de comparación
Igual-> =
Distinto-> !=
Menor-> <
Mayor-> >
Menor igual-> <=
Mayor igual-> >=
Entre-> BETWEEN a AND a
En-> IN
Es nulo-> ISNULL
No es nulo-> ISNOTNULL
Como-> LIKE
No es como-> NOT LIKE

Operadores logicos
O-> OR
Y-> AND
NO-> NOT

Comodines para el operador LIKE
Cualquier cantidad de caracteres-> %
Un caracter desconocido-> _
*/

# Ejemplos #

# 1. Mostrar nombres y apellidos de todos los usuarios registrados en el año 2019

SELECT nombre, apellidos FROM usuarios WHERE YEAR(fecha) = 2019;

# 2. Mostrar nombre y apellidos de todos los usuarios que no se registraron en el año 2019

SELECT nombre, apellidos FROM usuarios WHERE YEAR (fecha) != 2019;

# 3. Mostrar nombre y apellidos de todos los usuarios que no se registraron en el año 2019 o que estan nulos

SELECT nombre, apellidos FROM usuarios WHERE YEAR (fecha) != 2019 OR ISNULL (fecha);

# 4. Mostrar el email de los usuarios cuyo apellido contenga la letra A y que la contraseña sea 123

SELECT email FROM usuarios WHERE apellidos LIKE '%a%' AND password = '123';

# 5. Sacar todos los registros de la tabla usuarios cuyo año sea par #

SELECT * FROM usuarios WHERE (YEAR(fecha)%2 = 0);

# 6. Sacar todos los registros de la tabla usuarios cuyo nombre tenga más de 5 letras y que se hayan registrado antes de 2020 y mostrar el nombre en mayuscula

SELECT UPPER (nombre) AS 'nombre', apellidos FROM usuarios WHERE LENGTH (NOMBRE) > 5 AND YEAR (fecha) < 2020;
