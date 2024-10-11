<?php
// Nome do arquivo
$arquivo = "logger.txt";

// Abrir o arquivo para leitura
$handle = fopen($arquivo, "r");

// Ler o arquivo linha por linha
if ($handle) {
    while (($line = fgets($handle)) !== false) {
        echo $line . "<br>";
    }
    fclose($handle);
} else {
    echo "Não foi possível abrir o arquivo";
}
?>