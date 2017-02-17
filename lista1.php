<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>LISTA DE COMPRAS</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">

  </head>
  <style media="screen">

  </style>
  <body>
  <div class="container">
      <div class="row">
    <?php

    require('conexao.php');

    mysql_select_db("estoque");
    $consulta= "SELECT * FROM produto";

    $produto=mysql_query($consulta);

    while ($array = mysql_fetch_array($produto)) {
    ?>
      <div class="col-md-2">
        <?=$array['id'] . "-";?>
        <?="produto:" . $array['nome'];?> <br>
        <?="codigo:" . $array['codigo'];?> <br>
        <?="quantidade:" . $array['qtd'];?> <br>
      </div>
    <?php
    }
    ?>
  </div>

</div>
<style media="screen">
.container{
  padding-top: 120px;
}
@media (min-width: @screen-sm-min) {
  .container{
    padding-top: 0px;
  }

}

.btn {
border-radius: 0px;
width: 100%;
height: 100px;
display: flex;
justify-content: center;
}
.col-md-4{
  display: flex;
  justify-content: center;

}
.col-md-6{
  display: flex;
  justify-content: center;

}
.row{
  padding: 16px;
}
</style>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
