<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <!-- JQUEY -->
        <script src="js/jquery-3.4.1.min.js" type="text/javascript"></script>
        
        <!--Bootstrap-->
        
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
        <link href="CSS/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="CSS/bootstrap-theme.min.css" rel="stylesheet" type="text/css"/>
        
        <!--meu CSS -->
        <link href="CSS/estilo.css" rel="stylesheet" type="text/css"/>
        
        <!--Font Awesomw-->
        <link href="CSS/all.min.css" rel="stylesheet" type="text/css"/>
        <script src="js/all.min.js" type="text/javascript"></script>
        <title></title>
    </head>
    <body>
        <div id="topo">
            <img src="Imagens/Logo100.png" alt="LOGO"/>
        </div>
        
        <div id="menu"> 
            <div class="navbar navbar-default">
                <div class="container-fluid">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="index.php">Inicio</a></li>
                        <li><a href="QuemSomos.php">Quem Somos</a></li>
                        <li><a href="Novidades.php">Novidades</a></li>
                        <li><a href="Contato.php">Contato</a></li>
                        <li><a href="Login.php">Area Administrativa</a></li>
                    </ul>
                </div>
            </div>
        </div>
        
        <div id="corpo">
            <h1>Bem Vindo ao nosso site!!</h1>
        </div>
        
        <div id="rodape">
            <p> 2017-<?php echo date("Y"); ?> | TI-26 | Todos os Direitos Reservados</p>
        </div>
    </body>
</html>
