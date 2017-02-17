<div class="container">
  <?php

  require('conexao.php');

  mysql_select_db("estoque");
  $consulta= "SELECT * FROM produto";

  $produto=mysql_query($consulta);
  $contador = 1;
  while ($array = mysql_fetch_array($produto)) {
$contador++;
  ?>
  <?php
  if($contador % 2 == 0){
   ?><div class="row col-par"><?php
} else {
   ?><div class="row col-impar"><?php
}
?><?php
if ($array['qtd']<2) {
?><div class="col-md-3 col-id aviso"><?php
}else{?><div class="col-md-3 col-id"><?}?>
    <?=$array['id'] . "-"; ?></div>
      <div class="col-md-3"><?="produto:" . $array['nome'];?></div>
      <div class="col-md-3"><?="codigo:" . $array['codigo'];?> </div>
    <div class="col-md-3">  <?="quantidade:" . $array['qtd'];?> </div>
</div>

  <?php
  }
  ?>
</div>
<style media="screen">
.aviso{
background-color: #ff4810;
}

.col-id{
width: 100px;
}
.col-comprar{
background-color: #f8f8f8;
width: 100px;
}
.col-par{
background-color: #d7dadc;
}
.col-impar{
background-color: #fbfbfb;
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
