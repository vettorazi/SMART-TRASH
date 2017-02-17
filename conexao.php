
<?php
$conexao = mysql_connect("localhost", "root", "raspberry");
if(!$conexao){
  die('nao deu para conectar. a senha deve estar errada');
echo 'ih deu treta';
}
mysql_set_charset('utf8', $conexao);
//CONECTAR AO BANCO


 ?>
