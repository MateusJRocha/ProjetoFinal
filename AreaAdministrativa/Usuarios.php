<?php
    namespace ProjetoFinal;
    include '../Classes/Usuarios.php';
?>

<html>
    <head>
        <meta charset="UTF-8">
        <!-- JQUEY -->
        <script src="../js/jquery-3.4.1.min.js" type="text/javascript"></script>
        
        <!--Bootstrap-->
        <script src="../js/bootstrap.min.js" type="text/javascript"></script>
        <link href="../CSS/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="../CSS/bootstrap-theme.min.css" rel="stylesheet" type="text/css"/>
        
        <!--meu CSS -->
        <link href="../CSS/areaADM.css" rel="stylesheet" type="text/css"/>
        
        <!--Font Awesomw-->
        <link href="../CSS/all.min.css" rel="stylesheet" type="text/css"/>
        <script src="../js/all.min.js" type="text/javascript"></script>
        <title></title>
    </head>
    <body>
        <div id="menu">
            <div class="navbar navbar-default">
                <img src="#" alt="LOGO"/>
                <div class="container-fluid">
                    <ul class="nav navbar-nav">
                        <li><a href="index.php">Inicio</a></li>
                        <li><a href="QuemSomos.php">Quem Somos</a></li>
                        <li><a href="Novidades.php">Novidades</a></li>
                        <li><a href="Contato.php">Contato</a></li>
                        <li class="active"><a href="Usuarios.php?">Usuarios</a></li>
                        <li><a href="../index.php">SAIR</a></li>
                        
                    </ul>
                </div>
            </div>
        </div>
        
        <div id="corpo"> 
            <div id="FormUsuario">
                <h2>Novo Usuario</h2>
                <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
                    <p>ID</p>
                    <input name="id" type="text">
                    <p>Nome Completo</p>
                    <input name="nome" type="text" autofocus="">
                    <p>Email</p>
                    <input name="email" type="text">
                    <p>Usuario</p>
                    <input name="usuario" type="text">
                    <p>Senha</p>
                    <input name="senha" type="password">
                    <br>
                    <br>
                    <input anme="OPCAO" type="submit" value="Inserir">
                    <input name="OPCAO" type="submit" value="Atualizar">
                    <input name="OPCAO" type="submit" value="Deletar">
                </form>
            </div>
            
            <table class="table table-striped table-hover">
                <tr>
                    <td>ID</td>
                    <td>Nome Completo</td>
                    <td>Email</td>
                    <td>Usuario</td>
                    <td>Senha</td>
                </tr>
            </table>
        </div>
        
        <div id="rodape">
            <p> 2017-<?php echo date("Y"); ?> | TI-26 | Todos os Direitos Reservados</p>
        </div>
    </body>
</html>

<?php
    if(isset($_POST['id']) &&
            isset($_POST['nome'])&&
            isset($_POST['email'])&&
            isset($_POST['usuario'])&&
            isset($_POST['senha']))
    {
        if(empty($_POST['nome']) &&
               empty($_POST['email']) && 
                empty($_POST['usuario']) &&
                empty($_POST['senha']))
        {
            echo "<script type='text/javascript'> alert('Nao deixe campos em branco');</script>" ;
        }
        else 
        {
           $id = $_POST['id'];
            $nome = $_POST['nome'];
            $email = $_POST['email'];
            $usuario = $_POST['usuario'];
            $senha = $_POST['senha'];
            $u = new Usuarios();
            $resultado = $u->Inserir($nome, $usuario, $email, $senha);
            
            if($resultado == true)
            {
                header("Location:http://localhost/Projeto_Final1/AreaAdministrativa/Usuarios.php");
                echo "<script type='text/javascript'> alert('Cadastro realizado com Sucesso');</script>";
            }
            else
            {
                echo "<script type='text/javascript'> alert('Deu RUIM');</script>'";
            }
        }
    }
