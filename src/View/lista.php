<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

?>
<html>
    <head>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>




<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    </head>

































<body>













    <div class="w3-bar w3-black">
  <a href="guerra.php" class="w3-bar-item w3-button">Guerras</a>
  <a href="familia.php" class="w3-bar-item w3-button">Familia</a>

</div><section class="w3-padding-64 w3-container">
<table class="w3-table w3-striped w3-bordered">






    <thead>
        <tr>
            <th>Nome </th>
            <th>Quantidade de Membros</th>
            <th>Disputas</th>
            <th>Desafiou</th>
            <th>Desafiador</th>
            <th>Venceu</th>
            <th>Perdeu</th>
            
            

              

        </tr>
    </thead>
    <tbody>
        
       <?php        
       
       foreach ($retorno as $registrosfeitos){
          $desafiou = 0;
          $desafiado = 0;
          $venceu= 0;
          $perdeu=0;
          $disputas=0;


          foreach ($retorno1 as $registrosfeitos2){  if ($registrosfeitos['nome']==$registrosfeitos2['nome']) {
                # code...
                $desafiou = $registrosfeitos2['conta'];

            }  }

          foreach ($retorno2 as $registrosfeitos3){  if ($registrosfeitos['nome']==$registrosfeitos3['nome']) {
                # code...
                $desafiado = $registrosfeitos3['conta'];

            }  }  
          foreach ($retorno3 as $registrosfeitos4){  if ($registrosfeitos['nome']==$registrosfeitos4['nome']) {
                # code...
                $venceu = $registrosfeitos4['conta'];

            }  }  

          $disputas = $desafiou + $desafiado;
          $perdeu = $disputas-$venceu;
              
        ?> <tr>
            <td> <?php echo  $registrosfeitos['nome'];?></td>
            <td> <?php echo  $registrosfeitos['quantidade_membros'];?> </td>
            <td> <?php echo  $disputas;?> </td>
            <td> <?php echo  $desafiado;?> </td>
            <td> <?php echo  $desafiou;?> </td>
            <td> <?php echo  $venceu;?> </td>
            <td> <?php echo  $perdeu;?> </td>

            
            <td> 
                <td>  </td>
                     </td>

            <td> <a class="w3-button w3-khaki" href="./familia.php?tag=update&id=<?php echo $registrosfeitos['id'];?>" >Editar</a> 
                <a class="w3-button w3-red" href="./familia.php?tag=delete&id=<?php echo $registrosfeitos['id'];?>" >Excluir</a></td>
        </tr> 

        

        
       <?php } ?>
    </tbody>
</table>
</section>














<script>




function carregaDados(){

  var nomeAjax = $("#ajax").val();

  $.get("listaajax.php",{ajax:nomeAjax})
      .done(function(data) {

        $(".conteudocolunaee1").html(data);
      })
      .fail(function(data) { 

         $(".conteudocolunae1").html("erro requisicao");
      });
}


$(function(){
  
  carregaDados();

  $("#ajax").click(function(){

      carregaDados();
    });
 
  $("#ajax").keyup(function(){
      carregaDados();
    });
});

</script>

</body>
</html>



</body>
</html>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>