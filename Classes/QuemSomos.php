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
    }
?>

