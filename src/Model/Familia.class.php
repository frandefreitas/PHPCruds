<?php

include 'BD.class.php';

class Familia extends DB{
private $id;
private $nome;
private $quantidade;

	public function setId($id) {
         $this->id=$id;
    }
	
    public function getId() {
        return $this->id;
    }

 	public function setNome($nome) {
         $this->nome=$nome;
    }
	
    public function getNome() {
        return $this->nome;
    }

    public function setQuantidade($quantidade) {
         $this->quantidade=$quantidade;
    }
    
    public function getQuantidade() {
        return $this->quantidade;
    }
   
}
 