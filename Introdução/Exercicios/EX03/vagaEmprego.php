<?php 

$sexo =  $_GET['OPCAO'];
$idade = $_GET['idade'];
$nome = $_GET['nome'];
$result = "";

if ($sexo==1){ //masculino
  $result = $idade>=21 && $idade<=28 ? 
  "$nome,você pode ser contratado" : "$nome,você não pode ser contratado";

  echo $result;
  
}else if ($sexo==2){ //feminino
  $result = $idade>=18 && $idade<25 ? 
  "$nome,você pode ser contratado" : "$nome,você não pode ser contratado";

  echo $result;
}
?>
