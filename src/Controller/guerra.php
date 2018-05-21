<?php
include_once "../Model/Guerra.class.php";
include_once "../Model/GuerraDAO.class.php";

/*

*/

if( isset($_GET['tag']) )
{
    $tag = $_GET['tag'];
   
    if($tag == 'listar'){
        $registros = new GuerraDAO();
        $retorno = $registros->listar();
        $retorno1 = $registros->listarVencedora();
        $retorno2 = $registros->listarDesafiada();
        $retorno3 = $registros->listarDesafiadora();
        include "../View/listaguerra.php";
        exit;
    }
    
    
    else if($tag == 'update'){
        $id = $_GET['id'];
        $registros = new GuerraDAO();
        $retorno = $registros->listarUm($id);
        include "../View/updateguerra.php";
        exit;
    }

    
    else if($tag == 'delete'){
        $id = $_GET['id'];
        $registros = new GuerraDAO();
        $retorno = $registros->excluir($id);
        $registroso = new GuerraDAO();
        $retorno = $registroso->listar();
        include "../View/listaguerra.php";
        exit;
    }
}


@$variavel = $_REQUEST['acao']; 
if($variavel=="Cadastrar"){	
$nome=$_REQUEST['nome'];
$quantidade = $_REQUEST['quantidade'];



$guerra = new Guerra();
$guerra->setNome($nome);
$guerra->setQuantidade($quantidade);


$guerraDAO = new GuerraDAO();

	if($guerraDAO->inserir($guerra))
	{
		echo "Guerra inserido com sucesso";
	}
	else
	{
		echo "Erro ao inserir";
	}

}
else if($variavel=="Editar"){	
$nome=$_REQUEST['nome'];
$quantidade = $_REQUEST['quantidade'];
$id=$_REQUEST['id'];

$guerra = new Guerra();
$guerra->setNome($nome);
$guerra->setQuantidade($quantidade);
$guerraDAO = new GuerraDAO();

$GuerraDAO->alterar($familia);

}








include "../View/cadastroguerra.php";         //senão cai na opção ele vai para o cadatro









?>