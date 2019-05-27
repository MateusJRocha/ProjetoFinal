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
        
        <script type="text/javascript">
            function Editar(id, nome, usuario, email)
            {
                document.getElementsByName('id')[0].value = id;
                document.getElementsByName('nome')[0].value = nome;
                document.getElementsByName('usuario')[0].value = usuario;
                document.getElementsByName('email')[0].value = email;
                
                document.getElementById('inserirBtn'),style.display = "none";
                document.getElementById('atualizarBtn'),style.display = "inline";
                
            }
            
            function Cancelar()
            {
                var acao = confirm("Tem certeza?\n(Essa operação noa pode ser desfeita)")
                
                if(acao == true)
                {
                    window.location.reload();
                }
            }
        </script>
        
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
                    <input id="inserirBtn" class="btn btn-primary" name="OPCAO" type="submit" value="Inserir">
                    <input id="atualizarBtn" style="display: none;" class="btn btn-warning" name="OPCAO" type="submit" value="Atualizar">
                    <input onclick="Cancelar();" id="cancelarBtn" class="btn btn-danger" name="OPCAO" type="submit" value="Cancelar">
                </form>
            </div>
            
            <table class="table table-striped table-hover">
                <tr>
                    <td>ID</td>
                    <td>Nome Completo</td>
                    <td>Usuario</td>
                    <td>Email</td>
                    <td colspan="2">OPÇOES</td>
                </tr>
                
                <?php
                    $u = new Usuarios();
                    $usuario = $u->ListarTodos();
                    
                    foreach ($usuario as $key)
                    {
                        echo "<tr>"
                                ."<td>".$key->id."</td>"
                                ."<td>".$key->nome."</td>"
                                ."<td>".$key->usuario."</td>"
                                ."<td>".$key->email."</td>"
                                ."<td><a onclick=' Editar(&quot;".$key->id."&quot;, &quot;".$key->nome."&quot;, &quot;".$key->usuario."&quot, &quot;".$key->email."&quot)' href='#' class='btn btn-warning'>Editar</a> </td>"
                                ."<td><a onclick=' return confirm(&quot; tem certeza&quot;>;' href='?id=".$key->id."&OPCAO=deletar' class='btn btn-danger'>EXCLUIR</a></td>"
                        ."</tr>";
                    }
                ?>
            </table>
        </div>
        
        <div id="rodape">
            <p> 2017-<?php echo date("Y"); ?> | TI-26 | Todos os Direitos Reservados</p>
        </div>
    </body>
</html>

<?php
if(isset($_GET['id']) &&
            isset($_GET['nome'])&&
            isset($_GET['email'])&&
            isset($_GET['usuario'])&&
            isset($_GET['senha']) &&
            isset($_GET['acao']))
{
            $id = $_GET['id'];
            $nome = $_GET['nome'];
            $email = $_GET['email'];
            $usuario = $_GET['usuario'];
            $senha = $_GET['senha'];
            $senha = $_GET['senha'];
            $opcao = $_GET['opcao'];
            
            switch ($opcao)
            {
                case"Inserir":
                    $resultado= $u->Inserir($nome, $usuario, $email, $senha);
                    if($resultado == true)
                    {
                        echo"<script type='text/javascript'> alert('Sucesso');window.location.href='http://localhost/Projeto_Final1/AreaAdministrativa/Usuarios.php';</script>";
                    }
                    else
                    {
                        echo"<script type='text/javascript'> alert('Deu Ruim');window.location.href='http://localhost/Projeto_Final1/AreaAdministrativa/Usuarios.php';</script>";
                    }
                    break;
                
                case"Atualizar":
                    break;
                
                case"Deletar":
                    $resultado = $u->Deletar($id);
                   if($resultado == true)
                    {
                        echo"<script type='text/javascript'> alert('Sucesso');window.location.href='http://localhost/Projeto_Final1/AreaAdministrativa/Usuarios.php';</script>";
                    }
                    else
                    {
                        echo"<script type='text/javascript'> alert('Deu Ruim');window.location.href='http://localhost/Projeto_Final1/AreaAdministrativa/Usuarios.php';</script>";
                    }
                    break;
            }
}

    
    
//    if(isset($_GET['id']) && isset($_GET['acao']))
//    {
//        $id = $_GET['id'];
//        $acao = $_GET['acao'];
//        
//        switch ($acao)
//        {
//            case "deletar":
//                $u = new Usuarios();
//                $resultado = $u->Deletar($id);
//                
//                if($resultado == 1)
//                {
//                    echo "<script type='text/javascript'> alert('Usuario removido com SUCESSO');</script>";
//                    echo "<script type='text/javascript'> window.location.href='http://localhost/Projeto_Final1/AreaAdministrativa/Usuarios.php';</script>";
//                }
//                else
//                {
//                    echo "<script type='text/javascript'> alert('erro ao remover o usuario');</script>";
//                }
//                
//            break;
//            
//            case "editar":
//            break;
//        }
//    }
//
//    if(isset($_POST['id']) &&
//            isset($_POST['nome'])&&
//            isset($_POST['email'])&&
//            isset($_POST['usuario'])&&
//            isset($_POST['senha']))
//    {
//        if(empty($_POST['nome']) &&
//               empty($_POST['email']) && 
//                empty($_POST['usuario']) &&
//                empty($_POST['senha']))
//        {
//            echo "<script type='text/javascript'> alert('Nao deixe campos em branco');</script>" ;
//        }
//        else 
//        {
//           $id = $_POST['id'];
//            $nome = $_POST['nome'];
//            $email = $_POST['email'];
//            $usuario = $_POST['usuario'];
//            $senha = $_POST['senha'];
//            $u = new Usuarios();
//            $resultado = $u->Inserir($nome, $usuario, $email, $senha);
//            
//            if($resultado == true)
//            {
//                header("Location:http://localhost/Projeto_Final1/AreaAdministrativa/Usuarios.php");
//                echo "<script type='text/javascript'> alert ('Cadastro realizado com Sucesso');</script>";
//            }
//            else
//            {
//                echo "<script type='text/javascript'> alert('Deu RUIM');</script>'";
//            }
//        }
//    }
