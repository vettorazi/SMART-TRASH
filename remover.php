<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Bootstrap 101 Template</title>


    <link href="css/bootstrap.min.css" rel="stylesheet">
<style media="screen">
  span.glyphicon {
    font-size: 80px;
    color: #ffffe6;
  }
  body{
    background-color: #a9d857;
  }
  .col-xs-offset-5 {
      margin-left: 30%;
  }
  .row{
     display: none
  }
</style>
  </head>
  <body>
<div class="container-fluid">

  <div class="row" id="row">
      <div class="col-xs-2 col-xs-offset-5">
        <h1><span class="glyphicon glyphicon-trash" aria-hidden="true"><span class="glyphicon glyphicon-ok" aria-hidden="true"></span></h1>

      </div>
  </div>

</div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery-3.1.1.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script type="text/javascript">
    $(document).ready(function(){
     $('div.row').fadeIn(500).removeClass('hidden');
    });
    function voltar(){
    setTimeout(function(){
  window.location.href = "index-lixeira.html"
}, 5000);
};
voltar();
    </script>


     <?php

     require("conexao.php");
     $codigo= $_POST['codigo'];
     $nome= $_GET['nome'];

     mysql_select_db("estoque");

     $atualizar="UPDATE produto SET qtd=qtd-1 WHERE codigo='$codigo'";
     echo "O produto: ";
     mysql_query($atualizar);

     $sql = mysql_query("Select * From produto where codigo = '$codigo'");
     while($exibe = mysql_fetch_assoc($sql)){
       if ($exibe['tipo']=="organico") {
         shell_exec('sudo python /home/pi/movimento1.py');
       }else if($exibe['tipo']=="plastico") {
         shell_exec('sudo python /home/pi/movimento2.py');
       }else if($exibe['tipo']=="metal") {
         shell_exec('sudo python /home/pi/movimento4.py');
       }else if($exibe['tipo']=="vidro") {
         shell_exec('sudo python /home/pi/movimento3.py');
       }
       echo $exibe['nome'] .' foi removido com sucesso! Agora temos: ';
       echo $exibe['qtd'] .'<br>';
     }
    mysql_query($sql) or die(mysql_error());
     mysql_close($conexao);

      ?>
  </body>
</html>
