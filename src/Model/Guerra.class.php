<?php

include 'BD.class.php';

class Guerra extends DB{
private $id;
private $id_desafiador;
private $id_desafiado;
private $inicio;
private $fim;
private $id_vencedor;

	public function setId($id) {
         $this->id=$id;
    }
	
    public function getId() {
        return $this->id;
    }

 	public function setId_Desafiador($id_desafiador) {
         $this->id_desafiador=$id_desafiador;
    }
	
    public function getId_Desafiador() {
        return $this->id_desafiador;
    }

    public function setId_Desafiado($id_desafiado) {
         $this->id_desafiado=$id_desafiado;
    }
    
    public function getId_Desafiado() {
        return $this->id_desafiado;
    }


    public function setInicio($inicio) {
         $this->inicio=$inicio;
    }
    
    public function getInicio() {
        return $this->inicio;
    }

    public function setFim($fim) {
         $this->fim=$fim;
    }
    
    public function getFim() {
        return $this->fim;
    }


    public function setId_Vencedor($id_vencedor) {
         $this->id_vencedor=$id_vencedor;
    }
    
    public function getId_Vencedor() {
        return $this->id_vencedor;
    }



}
 