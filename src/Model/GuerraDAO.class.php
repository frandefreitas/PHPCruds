<?php


include_once 'Guerra.class.php';
include_once 'BD.class.php';
class GuerraDAO extends Guerra{
private $tabela; //nome da tabela

    public function __construct() {
        $this->tabela = "guerra";
    }

    public function __destruct() {
        unset($this->bd);
    }

//insere um novo registro na tabela usuário      
    public function inserir($guerra) {
		
		$id_desafiado=$guerra->getId_Desafiado();
        $id_desafiador=$guerra->getId_Desafiador();
        $inicio=$guerra->getInicio();
        $fim=$guerra->getFim();
        $id_vencedor=$guerra->getId_Vencedor();



        $sql = "INSERT INTO $this->tabela (id_familia_desafiadora, id_familia_desafiada, data_inicio, data_fim, id_familia_vencedora) values (:id_desafiada, :id_desafiada, :data_inicio, :data_fim, :id_familia_vencedora";
        $retorno = DB::prepare($sql);
        $retorno->bindParam(':id_familia_desafiada', $id_desafiado);
        $retorno->bindParam(':id_familia_desafiadora', $id_desafiador);
        $retorno->bindParam(':data_fim', $fim);
        $retorno->bindParam(':data_inicio', $inicio);
        $retorno->bindParam(':id_familia_vencedora', $id_vencedor);
  
        return $retorno->execute();
     }
    
     
         public function alterar($guerra) {
		      
        $id_desafiado=$guerra->getId_Desafiado();
        $id_desafiador=$guerra->getId_Desafiador();
        $inicio=$guerra->getInicio();
        $fim=$guerra->getFim();
        $id_vencedor=$guerra->getId_Vencedor();
        $id=$guerra->getId();

                $id=$usuario->getId();
                $sql = "update $this->tabela SET data_fim=:data_fim, data_inicio=:data_inicio ,id_familia_desafiada=:id_familia_desafiada, id_familia_desafiadora= :id_familia_desafiadora, id_familia_vencedora= :id_familia_vencedora  where id=:id";
                $retorno = DB::prepare($sql);
                $retorno = DB::prepare($sql);
                $retorno->bindParam(':id_familia_desafiada', $id_desafiado);
                $retorno->bindParam(':id_familia_desafiadora', $id_desafiador);
                $retorno->bindParam(':data_fim', $fim);
                $retorno->bindParam(':data_inicio', $inicio);
                $retorno->bindParam(':id_familia_vencedora', $id_vencedor);
                $retorno->bindParam(':id', $id);
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
    

    public function listarVencedora() {
        $sql = "SELECT nome as vencedora, familia.id as idu FROM $this->tabela join familia on familia.id=id_familia_vencedora";
        $retorno = DB::prepare($sql);

        $retorno->execute();

        return $retorno->fetchAll(PDO::FETCH_ASSOC);
        
  
    }
    
    
        public function listarDesafiada() {
        $sql = "SELECT nome as desafiada, familia.id as ida FROM $this->tabela join familia on familia.id=id_familia_desafiada";
        $retorno = DB::prepare($sql);

        $retorno->execute();

        return $retorno->fetchAll(PDO::FETCH_ASSOC);
        
  
    }
    
    
    
        public function listarDesafiadora() {
        $sql = "SELECT nome as desafiadora, familia.id as ido FROM $this->tabela join familia on familia.id=id_familia_desafiadora";
        $retorno = DB::prepare($sql);

        $retorno->execute();

        return $retorno->fetchAll(PDO::FETCH_ASSOC);
        
  
    }
    
    
    
    
    
    public function excluir($id) {

        $sql = "delete from $this->tabela where id=:id";
        $retorno = DB::prepare($sql);
        $retorno->bindParam(':id', $id);
        $retorno->execute();
        
    }
    



    
}