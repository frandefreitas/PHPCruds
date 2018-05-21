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
<section class="w3-padding-64">
<form action="./familia.php" method="post">
<!-- ta CHAMANDO na index embora ser view -->
Nome <input type ="text" name="nome" />
Quantidade de Membros <input type ="text" name="quantidade" />


<input type="submit" class="w3-button w3-blue" name="acao" value="Cadastrar" />
<a class="w3-button w3-green" href="./familia.php?tag=listar" > Listar </a>
</form>
</body>
</html>
