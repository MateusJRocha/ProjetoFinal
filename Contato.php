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
                        <li><a href="QuemSomos.php">Quem Somos</a></li>
                        <li><a href="Novidades.php">Novidades</a></li>
                        <li class="active"><a href="Contato.php">Contato</a></li>
                        <li><a href="Login.php">Area Administrativa</a></li>
                    </ul>
                </div>
            </div>
        </div>
        
        <div id="corpo">
            <h1>Contato</h1>
            
             <div id="contato">
                
                <form action="">
                    <p>Nome Completo</p>
                    <input placeholder="Digite seu Nome" name="nome" type="text">
                    <p>Email</p>
                    <input placeholder="Digite seu Email" name="email" type="text">
                    <p>Telefone</p>
                    <input placeholder="(14) 9-9810-7638" name="telefone" type="text">
                   
                    <p>Departamento</p>
                    <select name="departamento">
                        <option value="administracao">Administracao</option>
                        <option valiue="diretoria">Diretoria</option>
                        <option value="redacao">Redação</option>
                        <option value="informatica">Informatica</option>
                    </select>
                    
                    <p>Mensagem</p>
                    <textarea></textarea>
                    <br>
                    <input class="btn btn-success" type="submit" value="Enviar">
                </form>
            </div>
        </div>
        
        <div id="rodape">
            <p> 2017-<?php echo date("Y"); ?> | TI-26 | Todos os Direitos Reservados</p>
        </div>
    </body>
</html>




