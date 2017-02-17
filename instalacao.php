
<?php
//RODA A INSTALACAO
$conexao = mysql_connect("localhost", "root", "raspberry");
if (!$conexao){
  die('deu erro ao conectar, olha ai:' . mysqli_error());
}
mysqli_set_charset('utf8', $conexao);

echo 'conectado!'

mysqli_select_db("estoque");

  $produtos = "CREATE TABLE produto
  {
  id INT(10) AUTO_INCREMENT PRIMARY KEY ,
  nome VARCHAR ( 50 ) NOT NULL ,
  codigo INT (50) ,
  tipo VARCHAR ( 50 ) NOT NULL ,
  qtd INT (3)
    }"
if (mysqli_query($produtos, $conexao)) {
  echo "a tabela de produtos foi criada \n"
}else{
  echo "nao foi criada. deu erro:" .mysqli_error()."\n";
}
  mysqli_close($conexao);
 ?>
