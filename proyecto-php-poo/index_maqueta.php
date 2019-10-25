<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Tienda de CAmisetas</title>
        <link rel="stylesheet" href="assets/css/style.css" >
    </head>
    <body>

        <div id="container">

            <!--Cabecera-->
            <header id="header" >
                <div id="logo" >
                    <img src="assets/image/minion.png" alt="Minion Logo" />
                    <a href="index.php" >
                        Tienda de Camisetas 
                    </a>
                </div>
            </header>

            <!--Menu-->
            <nav id="menu" >
                <ul>
                    <li>
                        <a href="#" >Inicio</a>
                    </li>
                    <li>
                        <a href="#" >Categoria 1</a>
                    </li>
                    <li>
                        <a href="#" >Categoria 2</a>
                    </li>
                    <li>
                        <a href="#" >Categoria 3</a>
                    </li>
                    <li>
                        <a href="#" >Categoria 4</a>
                    </li>
                    <li>
                        <a href="#" >Categoria 5</a>
                    </li>
                </ul>
            </nav>

            <div id="content" >

                <!--Barra Lateral-->
                <aside id="lateral" >
                    <div id="login" class="block_aside">
                        <h3>Entrar a la web</h3>
                        <form action="#" method="post">
                            <label for="email">Email</label>
                            <input type="email" name="email"/>

                            <label for="password">Password</label>
                            <input type="password" name="password"/>

                            <input type="submit" name="Enviar"/>

                        </form>

                        <ul>
                            <li><a href="#">Mis Pedidos</a></li>
                            <li><a href="#">Gestionar Pedidos</a></li>
                            <li><a href="#">Gestionar Categorias</a></lI>
                        </ul>
                        
                    </div>
                </aside>

                <!--Contenido central-->
                <div id="central">
                    
                    <h1>Productos destacados</h1>

                    <div class="product">

                        <img src="assets/image/minion.png"/>
                        <h2>Camiseta Azul Ancha</h2>
                        <p>30 Euros</p>
                        <a href="·" class="button">Comprar</a>

                    </div>

                    <div class="product">

                        <img src="assets/image/minion.png"/>
                        <h2>Camiseta Azul Ancha</h2>
                        <p>30 Euros</p>
                        <a href="·" class="button">Comprar</a>

                    </div>

                    <div class="product">

                        <img src="assets/image/minion.png"/>
                        <h2>Camiseta Azul Ancha</h2>
                        <p>30 Euros</p>
                        <a href="·" class="button">Comprar</a>

                    </div>

                </div>

            </div>

            <!--Pide de pagina-->
            <footer id="footer">
                <p>Desarrolado por William Cobaleda WEB &COPY; <?= date('Y') ?></p>
            </footer>

        </div>
    </body>
</html>