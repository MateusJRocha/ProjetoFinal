<?php
    namespace ProjetoFinal;
    include 'Classes/Usuarios.php';
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
        
        <div id="login" >
            <form action="#" method="POST">
                <h1>Area Administrativa</h1>
                <p>Digite seu Login: </p>
                <input type="text" placeholder="Exemplo@gmail.com" name="usuario">
                <p>Digite sua Senha: </p>
                <input type="password" placeholder="*******" name="senha">
                <br>
                <br>
                <input class="btn btn-success" type="submit" value="ENTRAR">
                <input class="btn btn-danger" type="reset" value="LIMPAR">
            </form>
        </div>
        
        <div id="rodape">
            <p> 2017-<?php echo date("Y"); ?> | TI-26 | Todos os Direitos Reservados</p>
        </div>
    </body>
</html>

<?php
    if(isset($_POST['usuario']) && isset($_POST['senha']))
    {
        if(empty($_POST['usuario']) || empty($_POST['senha']))
        {
            echo "<script type='text/javascript'> alert('Nao deixe campos em branco');</script>";
        }
        else
        {
            $usuario = $_POST['usuario'];
            $senha = $_POST['senha'];
            
            $u = new Usuarios();
            $resultado = $u->Login($usuario, $senha);
            
            if($resultado == true)
            {
                header("Location: http://localhost/Projeto_Final1/AreaAdministrativa");
            }
            else
            {
                "<script type='text/javascript'> alert ('Senha ou Usuario invalido');</script>";
            }
        }
    }
?>





