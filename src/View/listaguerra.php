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



<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    </head>


<body>
    <div class="w3-bar w3-black">
  <a href="./guerra.php?tag=listar" class="w3-bar-item w3-button">Guerras</a>
  <a href="./familia.php?tag=listar" class="w3-bar-item w3-button">Familia</a>

</div>
<section class="w3-padding-64 w3-container">
<table class="w3-table w3-striped w3-bordered">
    <thead>
        <tr>
            <th>Desafiadora</th>
            <th>Desafiada</th>
            <th>Fim</th>
            <th>Inicio</th>
            <th>Venceu</th>
              

        </tr>
    </thead>
    <tbody>
        
       <?php        

       foreach ($retorno as $registrosfeitos){
        ?> <tr>

            
            <td> <?php    foreach ($retorno3 as $registrosfeitos3){  if ($registrosfeitos['id_familia_desafiadora']==$registrosfeitos3['ido']) {
                # code...
                $casa = $registrosfeitos3['desafiadora'];

            }   

                }  

                echo $casa;
                 ?> </td>




                <td> <?php    foreach ($retorno2 as $registrosfeitos2){  if ($registrosfeitos['id_familia_desafiada']==$registrosfeitos2['ida']) {
                # code...
                $casaa = $registrosfeitos2['desafiada'];

            }   

                }  

                echo $casaa;
                 ?> </td>


            <td> <?php echo  $registrosfeitos['data_inicio'];?> </td>
            <td> <?php echo  $registrosfeitos['data_fim'];?></td>
                <td> <?php    foreach ($retorno1 as $registrosfeitos1){  if ($registrosfeitos['id_familia_vencedora']==$registrosfeitos1['idu']) {
                # code...
                $casaaa = $registrosfeitos1['vencedora'];

            }   

                }  

                echo $casaaa;
                 ?> </td>



            <td> <a class="w3-button w3-khaki" href="./guerra.php?tag=update&id=<?php echo $registrosfeitos['id'];?>" >Editar</a> 
                <a class="w3-button w3-red" href="./guerra.php?tag=delete&id=<?php echo $registrosfeitos['id'];?>" >Excluir</a></td>
        </tr> 

        

        
       <?php } ?>
    </tbody>
</table>
</section>












</body>
</html>