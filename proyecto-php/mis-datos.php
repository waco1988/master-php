<?php

require_once 'includes/redireccion.php';
require_once 'includes/cabecera.php';
require_once 'includes/lateral.php';

?>

<!--CAja principal-->
<div id="principal">
    
    <h1>Mis Datos</h1>
    
    <!-- Mostrar errores -->
    <?php if(isset($_SESSION['completado'])): ?>
        <div class="alerta alerta-exito">
            <?= $_SESSION['completado'] ?>
        </div>
    <?php elseif(isset($_SESSION['errores']['general'])) : ?>
        <div class="alerta alerta-error">
            <?= $_SESSION['errores']['general'] ?>
        </div>
    <?php endif; ?>
    
    <form action="actualizar-usuario.php" method="post">

        <label for="nombre">Nombre</label>
        <input type="text" name="nombre" value="<?=$_SESSION['usuario']['nombre']; ?>"/>
        <?php echo  isset($_SESSION['errores']) ? mostrar_error($_SESSION['errores'], 'nombre') : ''; ?>

        <label for="apellidos">Apellidos</label>
        <input type="text" name="apellidos" value="<?=$_SESSION['usuario']['apellidos']; ?>"/>
        <?php echo  isset($_SESSION['errores']) ? mostrar_error($_SESSION['errores'], 'apellidos') : ''; ?>

        <label for="email">E-mail</label>
        <input type="email" name="email" value="<?=$_SESSION['usuario']['email']; ?>"/>
        <?php echo  isset($_SESSION['errores']) ? mostrar_error($_SESSION['errores'], 'email') : ''; ?>
    
        <input type="submit" value="Actualizar" name="submit"/>   
    </form>

    <?php borrar_errores(); ?>
    
    
</div><!-- Fin div principal-->

<?php require_once 'includes/pie.php'; ?>
