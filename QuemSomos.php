<?php
    namespace ProjetoFinal;
    include './Classes/QuemSomos.php';
    
    $s = new QuemSomos();
?>

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
                        <li><a href="index.php">Inicio</a></li>
                        <li class="active"><a href="QuemSomos.php">Quem Somos</a></li>
                        <li><a href="Login.php">Area Administrativa</a></li>
                    </ul>
                </div>
            </div>
        </div>
        
        <div id="corpo">
            <h1>Quem Somos?</h1>
            <img src="Imagens/Livro.png" alt=""/>
            
            <div id="textoQuemSomos">
                <p>
                    <?php
                        $s = new QuemSomos();
                        $resultado = $s->Listar();
                        echo $resultado->texto;
                    ?>
                </p>
            </div>
        </div>
        
        <div id="rodape">
            <p> 2017-<?php echo date("Y"); ?> | TI-26 | Todos os Direitos Reservados</p>
        </div>
    </body>
</html>

<!--<
A MJ Biblioteca (fictícia) foi criada em 13 de maio de 2019 por Mateus Justino da Rocha para a conclusão do modulo de desenvolvimento. A escolha de fazer um site para uma biblioteca veio quando lembrei do meu projeto anterior (mobile) que foi sobre biblioteca.
O site tem o intuito de mostrar as novidades da biblioteca, para facilitar as pessoas que usam a biblioteca, não precisarem ir na biblioteca, e para as pessoas entrarem em contato com a biblioteca para tirar duvidas.

