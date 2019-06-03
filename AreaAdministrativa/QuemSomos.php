<?php
    namespace ProjetoFinal;
    include '../Classes/QuemSomos.php';
    
    $s = new QuemSomos();
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
            function Cancelar()
                {
                    var acao = confirm("Tem certeza?\n(Essa operação não pode ser desfeita)");

                    if(acao === true)
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
                <div class="container-fluid">
                    <ul class="nav navbar-nav">
                        <li><a href="index.php">Inicio</a></li>
                        <li class="active"><a href="QuemSomos.php">Quem Somos</a></li>
                        <li><a href="Usuarios.php?">Usuarios</a></li>
                        <li><a href="../index.php">SAIR</a></li>
                        
                    </ul>
                </div>
            </div>
        </div>
        
        <div id="corpo">
            <h1>Quem Somos</h1>
            
            <div id="QuemSomosAdm">
               <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
                   <textarea id="CampoQuemSomos" name="texto">
                        <?php
                            $resultado = $s->Listar();
                            echo $resultado->texto;
                        ?>
                   </textarea>
                    <br>
                    <div id="QuemSomosAdmButton">
                        <input class="btn btn-success" name="opcao" type="submit" value="Atualizar">
                        <input onclick="Cancelar()" name="opcao" class="btn btn-danger" type="submit" value="Cancelar">   
                    </div>
               </form>
            </div>
        </div>
        
        <div id="rodape">
            <p> 2017-<?php echo date("Y"); ?> | TI-26 | Todos os Direitos Reservados</p>
        </div>
    </body>
</html>

<?php
    if(isset($_POST['texto']) && isset($_POST['opcao']))
    {
        if(empty($_POST['texto']))
        {
            echo "<script type='text/javascript'> alert('Não deixe campos em BRANCO');</script>";
        }
        else
        {
            $texto = $_POST['texto'];
            $opcao = $_POST['opcao'];
            
            $s = new QuemSomos();
                
            switch ($opcao)
            {
                case "Atualizar":
                    $resultado = $s->Atualizar($texto);
                    
                    if($resultado == 1)
                    {
                        echo "<script type='text/javascript'> "
                                        ."alert('Atualizado com Sucesso'); "
                                        ."window.location.href='http://localhost/Projeto_Final1/AreaAdministrativa/QuemSomos.php';"
                                    ."</script>";
                    }
                    else
                    {
                        echo "<script type='text/javascript'> "
                                        ."alert('Deu Ruim'); "
                                        ."window.location.href='http://localhost/Projeto_Final1/AreaAdministrativa/QuemSomos.php';"
                                    ."</script>";
                    }
            break;
            }
        }
    }
