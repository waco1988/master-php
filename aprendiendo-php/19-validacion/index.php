<!DOCTYPE HTML>

<html lang="es">
    
    <head>
        
        <meta charset="utf-8" />
        <tittle>Validación de Formularios en PHP</tittle>
        
    </head>
    
    <body>
        
        <h1>Validar Formularios en PHP</h1>
        
        <?php
        
        if(isset($_GET['error'])){
            $error=$_GET['error'];
            if($error=='Faltan valores'){
                echo '<strong style="color:red">Introduce todos los datos en los campos del formulario</stong>';  
            }
            if($error=='nombre'){
                echo '<strong style="color:red">Introduce bien el nombre</stong>';  
            }
            if($error=='apellido'){
                echo '<strong style="color:red">Introduce bien el apellido</stong>';  
            }
            if($error=='edad'){
                echo '<strong style="color:red">Introduce la edad correcta</stong>';  
            }
            if($error=='email'){
                echo '<strong style="color:red">EL correo es erroneo</stong>';  
            }
            if($error=='pass'){
                echo '<strong style="color:red">Introduce una constraseña de más de 5 letras</stong>';  
            }
        }
        
        ?>
        
        <form method="POST" action="procesar_formulario.php">
            
            <label for="nombre">Nombre</label><br/>
            <input type="text" name="nombre" required="required" pattern="[A-Za-z]+"/> <br/>
            
            <label for="apellido">Apellidos</label><br/>
            <input type="text" name="apellido" required="required" pattern="[A-Za-z]+"/> <br/>
            
            <label for="edad">Edad</label><br/>
            <input type="int" name="edad" required="required" pattern="[0-9]+"/><br/>
            
            <label for="email">E-mail</label><br/>
            <input type="email" name="email" required="required"/><br/>
            
            <label for="pass">Password</label><br/>
            <input type="password" name="pass" required="requred" minlength="5"/><br/>
            
            <input type="submit" value="Enviar"/><br/><br/>
            
        </form>
    </body>
</html>
