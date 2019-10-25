<?php

require_once 'includes/redireccion.php';
require_once 'includes/cabecera.php';
require_once 'includes/lateral.php';

?>

<div id="principal">
    <h1>Crear entradas</h1>
    <br/>
    <p>
        Añade nuevas entradas al blog para que los usuarios puedan leerlas y 
        disfrutar de nuestro contenido.
    </p>
    <br/>
    
    <form action="guardar-entrada.php" method="POST">
        
        <label for="titulo">Titulo: </label>
        <input type="text" name="titulo"/>
        <?php echo isset($_SESSION['errores_entrada']) ? mostrar_error($_SESSION['errores_entrada'], 'titulo') : ''; ?>
        
   
        <label for="descripcion">Descripcion: </label>
        <textarea name="descripcion"></textarea>
         <?php echo isset($_SESSION['errores_entrada']) ? mostrar_error($_SESSION['errores_entrada'], 'descripcion') : ''; ?>
        
        <?php //var_dump($_SESSION['errores_entrada']) ?>
        <label for="categoria">Categoria</label>
        <select name="categoria">
            <?php
                $categorias = conseguir_categorias($db);
                if(!empty($categorias)):
                    while($categoria = mysqli_fetch_assoc($categorias)):
            ?>
            <option value="<?=$categoria['id']?>"><?=$categoria['nombre']?></option>
            <?php
                endwhile;
                endif;
            ?>
        </select>
         <?php echo isset($_SESSION['errores_entrada']) ? mostrar_error($_SESSION['errores_entrada'], 'categoria') : ''; ?>
        
        <input type="submit" value="Guardar"/>
            
    </form>
    
    <?php borrar_errores() ?>
</div>

<?php require_once 'includes/pie.php'; ?>