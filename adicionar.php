
 <!DOCTYPE html>
 <html>
   <head>
     <meta charset="utf-8">
     <title></title>
   </head>
   <body>
     <script
     src="https://code.jquery.com/jquery-3.1.1.min.js"
     integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
     crossorigin="anonymous"></script>
     <form method="post" action="adicionar.php"/>
     <label for="nome">Nome:</label>
     <input type="text" id="nome" name="nome"/><br/>
     <label for="codigo">codigo:</label>
     <input type="text" id="codigo" name="codigo"/><br/>
     <label for="qtd">quantidade:</label>
     <input type="text" id="qtd" name="qtd"/><br/>
     <label for="tipo">tipo:</label>
     <select name="tipo">
     <option value="papel">papel</option>
     <option value="plastico">plastico</option>
     <option value="organico">organico</option>
     <option value="metal">metal</option>
   </select>
       <input type="submit" name="submit" value="Enviar">
   </form>
<script type="text/javascript">
  $('#nome').focus();
    
</script>
   </body>
 </html>


 <?php


 $produto= $_POST['nome'];
 $codigo= $_POST['codigo'];
 $tipo= $_POST['tipo'];
 $qtd = $_POST['qtd'];
 require("conexao.php");
 mysql_select_db("estoque");

 $inserir = " INSERT INTO produto  (id, nome, codigo, tipo, qtd) VALUES ('','$produto', '$codigo', '$tipo', '$qtd')";

 mysql_query($inserir);


 $sql = mysql_query("Select * From produto where codigo = '$codigo'");
 while($exibe = mysql_fetch_assoc($sql)){
   echo $exibe['nome'] .' foi criado com sucesso! Agora temos: ';
   echo $exibe['qtd'] .'<br>';
 }
mysql_query($sql) or die(mysql_error());
?>
