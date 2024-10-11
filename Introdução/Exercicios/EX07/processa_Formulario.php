<?php 

if($_SERVER['REQUEST_METHOD'] == 'POST'){

    $nome = $_POST['txtNome'];
    $sobrenome = $_POST['txtSobrenome'];
    $telefone =  $_POST['txtTelefone'];
    $escolaridade = $_POST['cboEscolaridade'];
    $sexo = $_POST['cboSexo'];
    $dataNascimento = $_POST['dtNascimento'];
    $rua = $_POST['txtRua'];
    $numero = $_POST['txtNumero'];
    $complemento = $_POST['txtComplemento'];
    $bairro = $_POST['txtBairro'];
    $cidade = $_POST['txtCidade'];
    $estado = $_POST['cboEstado'];

    $dados = "Nome: $nome\nSobrenome: $sobrenome\nTelefone: $telefone\nEscolaridade: $escolaridade\nSexo: $sexo\nData Nascimento: $dataNascimento\nRua: $rua\nNúmero: $numero\nComplemento: $complemento\nBairro: $bairro\nCidade: $cidade\nEstado: $estado\n\n";

    // Abre o arquivo logger.txt para append
    $file = fopen("logger.txt", "a");
    $ok = fwrite($file, $dados);
    fclose($file);

    if($ok){
        echo 'success'; // Retorna 'success' para o JavaScript
    } else {
        echo 'error'; // Em caso de falha
    }

} else{
    echo "Método de envio inválido!";
}

?>