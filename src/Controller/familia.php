<?php
include_once "../Model/Familia.class.php";
include_once "../Model/FamiliaDAO.class.php";

/*

*/

if( isset($_GET['tag']) )
{
    $tag = $_GET['tag'];
   
    if($tag == 'listar'){
        $registros = new FamiliaDAO();
        $retorno = $registros->listar();
        $retorno1 = $registros->countdesafiou();
        $retorno2 = $registros->countdesafiado();
        $retorno3 = $registros->countvenceu();
        include "../View/lista.php";
        exit;
    }
    
    
    else if($tag == 'update'){
        $id = $_GET['id'];
        $registros = new FamiliaDAO();
        $retorno = $registros->listarUm($id);
        include "../View/update.php";
        exit;
    }

    
    else if($tag == 'delete'){
        $id = $_GET['id'];
        $registros = new FamiliaDAO();
        $retorno = $registros->excluir($id);
        $registroso = new FamiliaDAO();
        $retorno = $registroso->listar();
        include "../View/lista.php";
        exit;
    }
}


@$variavel = $_REQUEST['acao']; 
if($variavel=="Cadastrar"){	
$nome=$_REQUEST['nome'];
$quantidade = $_REQUEST['quantidade'];



$familia = new Familia();
$familia->setNome($nome);
$familia->setQuantidade($quantidade);


$familiaDAO = new FamiliaDAO();

	if($familiaDAO->inserir($familia))
	{
		echo "Familia inserido com sucesso";
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

$familia = new Familia();
$familia->setNome($nome);
$familia->setQuantidade($quantidade);
$familiaDAO = new FamiliaDAO();

$FamiliaDAO->alterar($familia);

}








include "../View/cadastro.php";         //senão cai na opção ele vai para o cadatro









?>