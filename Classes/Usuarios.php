<?php
namespace ProjetoFinal;

class Usuarios
{
    public function Inserir($nome, $usuario, $email, $senha)
    {
        try 
        {

            $conexao = new \PDO ("mysql:host=localhost; dbname=final_projeto", "root", "");

            $sql = "INSERT INTO usuarios (nome, usuario, email, senha) VALUES (:nome, :usuario, :email, :senha);";

            $preparar = $conexao->prepare($sql);
            $preparar->bindValue(":nome", $nome);
            $preparar->bindValue(":usuario", $usuario);
            $preparar->bindValue(":email", $email);
            $preparar->bindValue(":senha", $senha);

            $resultado = $preparar->execute();

            if($resultado == true)
            {
                return true;
            }
            else 
            {
                return false;
            }
        } 
        catch (\PDOException $ex) 
        {
            echo "ERRO na execução da query".$e->postMessage();
            return false;
        }
    }
    
    public function Login($usuario, $senha)
    {
        try {
            
        
            $conexao = new \PDO("mysql:host=localhost; dbname=final_projeto", "root", "");

            $sql = "SELECT count(*) FROM usuarios WHERE usuario = :usuario AND senha = :senha";
            $preparar = $conexao->prepare($sql);
            
            $preparar->bindValue(":usuario", $usuario);
            $preparar->bindValue(":senha", $senha);

            $senhaCriptografada = sha1($senha);
            $preparar->bindValue(":senha", $senhaCriptografada);

            $preparar->execute();
            $resultado = $preparar->fetch();

            if($resultado[0] == 1)
            {
                return true;
            }
            else
            {
                return false;
            }
        
        } 
        catch (\PDOException $e) 
        {
            throw  new Exception("OCORREU UM ERRO "+$e);
        }
                
    }
    
    public function ListarTodos()
    {
        try 
        {
            $conexao = new \PDO("mysql:host=localhost; dbname=final_projeto", "root","" );
            
            $sql = "SELECT * FROM usuarios";
            
            $preparar = $conexao->prepare($sql);
            $preparar->execute();
            
            $resultado = $preparar->fetchAll(\PDO::FETCH_OBJ);
            
            return $resultado;
        } 
        catch (Exception $e) 
        {
            throw new Exception("Ops... Erro: "+$e->getMessage());
        }
    }
    
    public function Deletar($id)
    {
        try
        {
            $conexao = new \PDO("mysql:host=localhost; dbname=final_projeto", "root","");

            $sql = "DELETE FROM usuarios WHERE id = :id";

            $preparar = $conexao->prepare($sql);
            $preparar->bindValue(":id" , $id);

            $resultado = $preparar->execute();

            if($resultado == 1)
            {
                return true;
            }
            else
            {
                return false;
            }
        }
        catch (\PDOException $e)
        {
            throw  new Exception("opss...".$e->getMessage());
        }
    }
    
    public function Atualizar($id, $nome, $email, $usuario, $senha)
    {
        try  
        {
            
            $conexao = new \PDO("mysql:host=localhost; dbname=final_projeto", "root","");

            $sql = "UPDATE usuarios SET nome = :nome, email = :email, usuario = :usuario, senha = :senha WHERE id = :id";

            $preparar = $conexao->prepare($sql);
            $preparar->bindValue(":id", $id);
            $preparar->bindValue(":nome", $nome);
            $preparar->bindValue(":usuario", $usuario);
            $preparar->bindValue("email", $email);

            $senhaCriptografada = sha1($senha);
            $preparar->bindValue(":senha", $senhaCriptografada);

            $resultado = $preparar->execute();

            if($resultado == 1)
                {
                    return true;
                }
                else
                {
                    return false;
                }
        } 
        catch (Exception $e) 
        {
             throw new Exception("Ops... Deu Ruim: "+$e->getMessage());
        }
    }
}
//TESTE INSERIR
//$u = new Usuarios();
//$resultado = $u->Inserir("Mariza", "mariza", "mariza@gmail", "123");
//echo $resultado;

//TESTE LOGIN
//$u = new Usuarios();
//$resultado = $u->Login("mateus", "654");
//echo $resultado

//TESTE ATUALIZAR
//$u = new Usuarios();
//$resultado = $u->Atualizar(3, 'teste', 'teste', 'teste', 'teste');
//echo $resultado;

//TESTE DELETAR
//$u = new Usuarios();
//$resultado = $u->Deletar(7);
//echo $resultado;

//TESTE LISTAR TODOS
//$u = new Usuarios();
//$resultado = $u ->ListarTodos();
//print_r($resultado);





