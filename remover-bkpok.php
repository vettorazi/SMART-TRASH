
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


     <form id="formulario" method="post" action="remover.php"/>
     <input type="text" id="codigo" name="codigo"/>
     <input type="submit" name="btsubmit" value="Enviar">
   </form>

   <script type="text/javascript">
   $("#codigo").keypress(function (e) {
   tecladas = $("#codigo").val().length;
   console.log("tecladas"+tecladas);
   if (tecladas>=2){
     setTimeout(function(){
       document.getElementById("formulario").submit();
     }, 3000);
     //envia form
   }
   });
   $("#codigo").focus();
   </script>
   </body>
 </html>

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