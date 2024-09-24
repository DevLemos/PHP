<?php

$nota1 = isset($_GET['nota1']) ? (float)$_GET['nota1'] : 0;
$nota2 = isset($_GET['nota2']) ? (float)$_GET['nota2'] : 0;
$nota3 = isset($_GET['nota3']) ? (float)$_GET['nota3'] : 0;

$media = ($nota1 + $nota2 + $nota3) / 3;
$media_formatada = number_format($media, 1);

echo json_encode($media_formatada);
?>