# Consultas agrupamiento

SELECT COUNT(titulo) AS 'número de entradas', categoria_id FROM entradas GROUP BY categoria_id;

SELECT COUNT(titulo) AS 'número de entradas', categoria_id FROM  entradas GROUP BY categoria_id;

# CONSULTAS AGRUPAMIENTO CON CONDICIONES

# EL having funciona igual que el where pero en agrupamiento
select count(titulo) as 'número de entradas', categoria_id from entradas group by categoria_id having count(titulo) >= 4;

/*
AVG -> Sacar la media
COUNT -> Contar el número de elementos
MAX -> Valor máximo del grupo
MIN -> Valor minimo del grupo
SUM -> Sumar todo el contenido del grupo
*/

select AVG(id) as 'Media de entradas' from entradas;
select max(id) as 'Máximo id', titulo from entradas;
select min(id) as 'Mínimo id', titulo from entradas;
select sum(id) as 'Suma de id', titulo from entradas;