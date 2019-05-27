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
}
    

