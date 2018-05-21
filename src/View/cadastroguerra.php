
<html>
    <head>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">



<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    </head>


<body>
    <div class="w3-bar w3-black">
  <a href="./guerra.php?tag=listar" class="w3-bar-item w3-button">Guerras</a>
  <a href="./familia.php?tag=listar" class="w3-bar-item w3-button">Familia</a>

</div><section class="w3-padding-64  w3-container">
<form action="./guerra.php" method="post">


Desafiado <input type ="text" name="nome" value="" /> <br><br>
Desafiador <input type="text" name="endereco" value="" /> <br><br>
Data Inicio <input type="date" name="endereco" value="" /> <br><br>
Data Fim <input type="date" name="endereco" value="" /> <br><br>
Vencedor <input type="text" name="endereco" value="" /> <br><br>



<input type = "hidden" name="id" value="<?php echo $registrosfeitos['id']; ?>" /><br><br>
<input class="w3-button w3-green"  type = "submit" name="acao" value="Editar" /><br><br>

</form>
</section>
</body>
</html>

