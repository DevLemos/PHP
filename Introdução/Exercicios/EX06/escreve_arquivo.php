<?php
// Exibe uma mensagem de que o arquivo está sendo gravado (antes de gravar o arquivo)
echo "<p>Gravando o arquivo...</p>";

// Use JavaScript para simular uma espera antes de continuar com a gravação
echo "<script>
    setTimeout(function() {
        document.getElementById('status').innerHTML = 'Gravação em andamento...';
    },1000);
</script>";

// Abre o arquivo logger.txt para append
$file = fopen("logger.txt", "a");

// Formata a linha com o número e o texto da query string
$line = sprintf("Número = %d Texto = %s \r\n", (int)$_GET['num'], $_GET['texto']);

// Escreve no arquivo
$ok = fwrite($file, $line);
fclose($file);

if ($ok) {
    echo "<div id='status'>Arquivo gravado com sucesso! Redirecionando...</div>";
    echo "<script>
        setTimeout(function() {
            window.location.href = 'index.html'; // Redireciona após 3 segundos
        }, 3000);
    </script>";
} else {
    echo "<div id='status'>Erro ao gravar o arquivo.</div>";
}

?>