<?php 

$peso = (float)$_GET['peso'];
$altura = (float)$_GET['altura'];
$imc = number_format($peso/($altura*$altura),1);

echo "Seu IMC é $imc ";

if($imc < 18.5){
  echo "adulto com baixo peso";
} else if($imc >= 18.5 && $imc < 25){
  echo "adulto com peso adequado";
} else if($imc >= 25 && $imc < 30){
  echo "adulto com sobrepeso";
} else if($imc >= 30){
  echo "adulto com obesidade";
}
?>