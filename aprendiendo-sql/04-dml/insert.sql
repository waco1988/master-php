# Insertar datos #

INSERT INTO usuarios VALUES ('', 'William', 'Cobaleda', 'william@cobaleda.com', '123', '2019-03-27');
INSERT INTO usuarios VALUES (NULL, 'Maribel', 'Gomez', 'maribel@gomez.com', '123', '2019-03-28');
INSERT INTO usuarios VALUES ('', 'Valeria', 'Cobaleda', 'valeria@cobaleda.com', '123', '2019-03-29');

# Insertar filas con ciertas columnas #

INSERT INTO usuarios (email, password) VALUES ('admin@admin.com', 'admin');