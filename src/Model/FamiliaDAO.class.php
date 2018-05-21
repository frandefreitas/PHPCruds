<?php


include_once 'Familia.class.php';
include_once 'BD.class.php';
class FamiliaDAO extends Familia{
private $tabela; //nome da tabela

    public function __construct() {
        $this->tabela = "familia";
    }

    public function __destruct() {
        unset($this->bd);
    }

//insere um novo registro na tabela usuário      
    public function inserir($familia) {
		
		$nome=$familia->getNome();
		$quantidade=$familia->getQuantidade();


        $sql = "INSERT INTO $this->tabela (nome, quantidade_membros ) values (:nome,:quantidade_membros)";
        $retorno = DB::prepare($sql);
        $retorno->bindParam(':nome', $nome);
        $retorno->bindParam(':quantidade_membros', $quantidade);
  
        return $retorno->execute();
     }

     
    
     
         public function alterar($familia) {
		//pega tudo de usuario e vai separando para fazer o update
		$nome=$familia->getNome();
		$quantidade=$familia->getQuantidade();

                $id=$usuario->getId();
                $sql = "update $this->tabela SET nome=:nome, quantidade_membros=:quantidade_membros where id=:id";
                $retorno = DB::prepare($sql);
                $retorno->bindParam(':id', $id);
                $retorno->bindParam(':nome', $nome);
                $retorno->bindParam(':quantidade_membros', $quantidade);
                return $retorno->execute();
     }
    

     
    public function listar() {
        $sql = "SELECT * FROM $this->tabela";
        $retorno = DB::prepare($sql);
        
        $retorno->execute();

        return $retorno->fetchAll(PDO::FETCH_ASSOC);
        
  
    }

    
    
    public function listarUm($id) {
        $sql = "SELECT * FROM $this->tabela where id=:id";
        $retorno = DB::prepare($sql);
        $retorno->bindParam(':id', $id);
        $retorno->execute();

        return $retorno->fetchAll(PDO::FETCH_ASSOC);
        
  
    }    
    
    
    
    
    
    
    public function excluir($id) {

        $sql = "delete from $this->tabela where id=:id";
        $retorno = DB::prepare($sql);
        $retorno->bindParam(':id', $id);
        $retorno->execute();
        
    }
    



    public function countdesafiou() {
        $sql = "SELECT familia.id as iddesafiante, nome, COUNT(guerra.id) as conta from guerra join familia where familia.id = guerra.id_familia_desafiadora group by nome";
        $retorno = DB::prepare($sql);
        
        $retorno->execute();

        return $retorno->fetchAll(PDO::FETCH_ASSOC);
    }

    public function countdesafiado() {
        $sql = "SELECT  familia.id as iddesafiado, nome, COUNT(guerra.id) as conta from guerra join familia where familia.id = guerra.id_familia_desafiada group by nome";
        $retorno = DB::prepare($sql);
        
        $retorno->execute();

        return $retorno->fetchAll(PDO::FETCH_ASSOC);
    }
    
    public function countvenceu() {
        $sql = "SELECT  familia.id as idvencedor, nome, COUNT(guerra.id) as conta from guerra join familia where familia.id = guerra.id_familia_vencedora group by nome";
        $retorno = DB::prepare($sql);
        
        $retorno->execute();

        return $retorno->fetchAll(PDO::FETCH_ASSOC);
    }

    
}
