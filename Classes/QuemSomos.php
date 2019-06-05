<?php
    namespace ProjetoFinal;
    
    class QuemSomos
    {
        public function Listar()
        {
            try 
            {
                $conexao = new \PDO("mysql:host=localhost; dbname=final_projeto", "root","" );

                $sql = "SELECT texto FROM quemsomos";

                $preparar = $conexao->prepare($sql);
                $preparar->execute();

                $resultado = $preparar->fetch(\PDO::FETCH_OBJ);

                return $resultado;
            } 
            catch (Exception $e) 
            {
                throw new Exception("Ops... Erro: "+$e->getMessage());
            }
        }
        
        public function Atualizar($texto)
        {
            try 
            {
                $conexao = new \PDO("mysql:host=localhost; dbname=final_projeto", "root","" );
                 
                $sql = "UPDATE quemsomos SET texto = :texto";
                 
                $preparar = $conexao->prepare($sql);
                $preparar->bindValue(":texto", $texto);
                
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
                echo "Erro: ".$e->getMessage();
                return false;
            }
        }
    }
    
//    Teste Atualizar
//    $quemsomos = new QuemSomos();
//    $resultado = $quemsomos->Atualizar('olaaa');
//    echo $resultado;
    
//TESTE LISTAR
//$u = new QuemSomos();
//$resultado = $u ->Listar();
//print_r($resultado);



