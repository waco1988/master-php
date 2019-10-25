# Renombrar una tabla #
ALTER TABLE usuarios RENAME TO usuarios_renom;

# Cambiar nombre de una columna #
ALTER TABLE usuarios_renom CHANGE apellidos apellido VARCHAR (100) NULL;

# Modificar columna sin cambiar el nombre #
ALTER TABLE usuarios_renom MODIFY apellido char(40) not null;

# Añadir columna #
ALTER TABLE usuarios_renom ADD website VARCHAR (100) NULL;

# Añadir restricción a una columna #
ALTER TABLE usuarios_renom ADD CONSTRAINT uq_email UNIQUE (email); 

# Borrar una columna #
ALTER TABLE usuarios_renom DROP website;  

