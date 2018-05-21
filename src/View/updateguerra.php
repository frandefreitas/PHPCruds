
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
<form action="./guerra.php" method="post">
<!-- ta CHAMANDO na index embora ser view -->
       <?php        
       
   foreach ($retorno as $registrosfeitos){
        ?>
Desafiado <input type ="text" name="nome" value="<?php echo $registrosfeitos['id_familia_desafiada']; ?>" />
Desafiador <input type="text" name="endereco" value="<?php echo $registrosfeitos['id_familia_desafiadora']; ?>" />
Data Inicio <input type="date" name="endereco" value="<?php echo $registrosfeitos['data_inicio']; ?>" />
Data Fim <input type="date" name="endereco" value="<?php echo $registrosfeitos['data_fim']; ?>" />
Vencedor <input type="text" name="endereco" value="<?php echo $registrosfeitos['id_familia_vencedora']; ?>" />



<input type = "hidden" name="id" value="<?php echo $registrosfeitos['id']; ?>" />
<input type = "submit" name="acao" value="Editar" />

   <?php }   ?>
</form>
</section>
</body>
</html>

