<!DOCTYPE HTML>

<html lang="es">
    <head>
        <meta charset="utf-8"/>
    <tittle>Formularios PHP y HTML</tittle>
    </head>
    
    <body>
        <h1>Formulario</h1>
        
        <form action="" method="POST" enctype="multipart/form-data">
            <label for="nombre">Nombre:</label>
            <p><input type="text" name="nombre"/><br/></p>
            
            <label for"apellido">Apellido:</label> 
            <p><input type="text" name="apellido" autofocus="autofocus" /><br/></p>
            
            <label for="boton">Boton:</label>
            <p><input type="button" name="boton" value="click" /></p>
            
            <p><label for="sexo">Sexo:</label></p>
            <label for="hombre">Hombre</label>
            <p><input type="checkbox" name="sexo" value="hombre" /></p>
            <label for="mujer">Mujer</label>
            <p><input type="checkbox" name="sexo" value="mujer" /></p>
            
            <label for="color">Color</label>
            <p><input type="color" name="color" /></p>
            
            <label for="calendario">Calendario</label>
            <p><input type="date" name="calendario" /></p>
            
            <label for="correo">Correo</label>
            <p><input type="email" name="correo" /></p>
            
            <label for="archivo">Archivo</label>
            <p><input type="file"  name="archivo" multiple="multiple"/></p>
            
            <label for="numero">Numero</label>
            <p><input type="number" name="numero" /></p>
            
            <label for="pass">Contraseña</label>
            <p><input type="password" name="pass"/></p>
            
            <label for="continente">Continente</label>
            <p>
                Suramerica <input type="radio" name="continente" value="Suramerica" />
                Europa <input type="radio" name="continente" value="Europa" />
                Asia <input type="radio" name="continente" value="Asia" />
            </p>
            
            <label for="web">Pagina Web</label>
            <p><input type="url" name="web" /></p>
            
            <textarea></textarea><br/>
            
            Peliculas:
            <select name="peliculas">
                <option value="spiderman">Spiderman</option>
                <option value="capitan america">Capitan America</option>
                <option value="thor">Thor</option>
                <option value="hulk">Hulk</option>
                
            </select><br/>
            
            <input type="submit" value="Enviar "/><br/>
            
        </form>
    </body>
</html>