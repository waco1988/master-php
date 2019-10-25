<?php

require_once 'includes/conexion.php';
require_once 'includes/helpers.php';

$categoria_actual = conseguir_categoria($db, $_GET['id']);

if(!isset($categoria_actual['id'])){
    header("Location: index.php");
}
?>

<?php require_once 'includes/cabecera.php'; ?>
<?php require_once 'includes/lateral.php'; ?>
            
            <!-- CAJA PRINCIPAL -->
        <div id="principal">
            
            <h1>Entradas de <?=$categoria_actual['nombre'] ?></h1>
            
            <?php
            
            //Llamda a la funcion que cotiene la consulta sql el fichero de helpers
            $entradas = conseguir_entradas($db, null, $_GET['id']);
            
            if(!empty($entradas) && mysqli_num_rows($entradas) >=1):
                while ($entrada = mysqli_fetch_assoc($entradas)):
            ?>
            
         
                <article class="entrada">
                    
                    <a href="entrada.php?id=<?=$entrada['id']?>">
                        <h2><?=$entrada['titulo'];?></h2>
                        <span class="fecha"><?= $entrada['categoria'].' | '.$entrada['fecha']?></span>
                        <p>
                            <?= substr($entrada['descripcion'], 0, 180)."..."?>
                        </p>
                    </a>
                
               </article>
            
            <?php
                endwhile;
            else:
            ?>
            
            <div class="alerta">No hay entradas en esta categoria</div>
            
            <?php endif; ?>
             
          </div><!--Fin Principal-->
        
            
            
            
<?php include_once 'includes/pie.php'; ?>
        