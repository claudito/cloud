
db_registro
SELECT codigo,nombres,apellidos FROM alumno

db_informacion
SELECT codigo,nota1,nota2,nota3 FROM notas


SELECT  codigo,nombres,apellidos FROM 
db_registro.alumno a 
INNER JOIN db_informacion.notas n ON a.codigo=n.codigo



