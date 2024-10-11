<?php 

function calcularTintas($area){
    $litros_por_m2 = 6;
    $lata18l = 18;
    $galao3_6l = 3.6;
    $precoLata = 80;
    $precoGalao = 25;

    #Acrescenta 10% de folga 
    $area_com_folga = $area * 1.1;
    $litros_necessarios = $area_com_folga / $litros_por_m2;

    #Quantidade de latas de 18L
    $quantidade_de_latas = ceil($litros_necessarios / $lata18l);
    $custo_latas = $quantidade_de_latas * $precoLata;   

    #Quantidade de galões de 3.6L
    $quantidade_de_galao = ceil($litros_necessarios / $galao3_6l);
    $custo_galoes = $quantidade_de_galao * $precoGalao; 

    #Mistura de latas e galões para o menor preço
    $quantidade_latas_mistura = floor($litros_necessarios / $lata18l);
    $resto_litros = $litros_necessarios - ($quantidade_latas_mistura * $lata18l);

    $quantidade_galoes_mistura = ceil($resto_litros / $galao3_6l);
    $custo_mistura = ($quantidade_latas_mistura * $precoLata) + ($quantidade_galoes_mistura * $precoGalao);
    
    echo "A área a ser pintada: {$area} m²\n";
    echo "1. Comprar apenas latas de 18L: {$quantidade_de_latas} lata(s), Custo: R$".number_format($custo_latas,2,',','.')."\n";
    echo "2. Comprar apenas galões de 3,6L: {$quantidade_de_galao} galão(ões), Custo: R$".number_format($custo_galoes,2,',','.')."\n";
    echo "3. Mistura de latas e galões: {$quantidade_latas_mistura} lata(s) e {$quantidade_galoes_mistura} galão(ões), Custo: R$".number_format($custo_mistura,2,',','.')."\n";
}

$area = (float) readLine("Informe o tamanho em metros quadrados da área a ser pintada: ");
calcularTintas($area);

?>
