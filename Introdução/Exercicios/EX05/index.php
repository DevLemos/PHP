<?php 

function calcularRevestimento($altura,$largura,$tamanho,$tamanhoRevestimento,$tipoRevestimento){

    $area_parede = $altura * $largura;
    $area_revestimento = $tamanhoRevestimento[0] * $tamanhoRevestimento[1];
    $quantidade_azulejos = ceil($area_parede /  $area_revestimento);
    $numero_caixas = ceil($quantidade_azulejos / 25); 

    echo "Altura da parede: {$altura} cm\n";
    echo "Largura da parede: {$largura} cm\n";
    echo "Tipo de revestimento: " . ($tipoRevestimento ? "Decorado" : "Uniforme-Liso") . "\n";
    echo "Número de azulejos necessários: {$quantidade_azulejos}\n";
    echo "Número de caixas de revestimento: {$numero_caixas}\n";
}

$altura = (float) readline("Informe a altura da parede em cm: ");
$largura = (float) readline("Informe a largura da parede em cm: ");
$tamanho = readline("Informe o tamanho do revestimento (ex: 20x20, 30x30, 30x40, 40x40): ");
// Usa explode para dividir a string pelo delimitador 'x'
$tamanhoRevestimento = explode('x', $tamanho);
$tipoRevestimento = (readline("O azulejo é decorado? (s/n) :") == 's');

calcularRevestimento($altura,$largura,$tamanho,$tamanhoRevestimento,$tipoRevestimento);

?>