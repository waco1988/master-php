<?php

require_once 'includes/redireccion.php';
require_once 'includes/conexion.php';
require_once 'includes/helpers.php';

$entrada_actual = conseguir_entrada($db, $_GET['id']);

if(!isset($entrada_actual['id'])){
    header("Location: index.php");
}
?>

<?php require_once 'includes/cabecera.php'; ?>
<?php require_once 'includes/lateral.php'; ?>

<div id="principal">
    <h1>Editar entradas</h1>
    <br/>
    <p>
        Edita tu entrada <?=$entrada_actual['titulo']?>;
    </p>
    <br/>
    
    <form action="guardar-entrada.php?editar=<?=$entrada_actual['id']?>" method="POST">
        
        <label for="titulo">Titulo: </label>
        <input type="text" name="titulo" value="<?=$entrada_actual['titulo']?>" />
        <?php echo isset($_SESSION['errores_entrada']) ? mostrar_error($_SESSION['errores_entrada'], 'titulo') : ''; ?>
        
   
        <label for="descripcion">Descripcion: </label>
        <textarea name="descripcion"><?=$entrada_actual['descripcion']?></textarea>
         <?php echo isset($_SESSION['errores_entrada']) ? mostrar_error($_SESSION['errores_entrada'], 'descripcion') : ''; ?>
        
        <?php //var_dump($_SESSION['errores_entrada']) ?>
        <label for="categoria">Categoria</label>
        <select name="categoria">
            <?php
                $categorias = conseguir_categorias($db);
                if(!empty($categorias)):
                    while($categoria = mysqli_fetch_assoc($categorias)):
            ?>
            <option value="<?=$categoria['id']?>" <?=($categoria['id'] == $entrada_actual['categoria_id']) ? 'selected="selected"' : ''?>><?=$categoria['nombre']?></option>
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


<?php include_once 'includes/pie.php'; ?>


