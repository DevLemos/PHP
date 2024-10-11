<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,400;0,500;0,700;1,400&display=swap" rel="stylesheet">
    <title>Formulário PHP</title>
</head>

<body>
    <div class="container">
        <form id="formularioId" method="POST" class="scroll">
            <div class="content">

                <div class="form-group">
                    <div class="personal-title">
                        <h1>Informações Pessoais</h1>
                    </div>

                    <div class="line"></div>
                </div>

                <div id="personal-information">
                    <div id="divPersonalName">
                        <div class="form-group">
                            <label for="txtNome" class="control-label">Nome</label>
                            <div class="content-field">
                                <input type="text" placeholder="Nome" id="txtNome" name="txtNome" style="width: 200px" />
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="txtSobrenome" class="control-label">Sobrenome</label>
                            <div class="content-field">
                                <input type="text" placeholder="Sobrenome" id="txtSobrenome" name="txtSobrenome" style="width: 300px" />
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label">Telefone</label>
                            <div class="content-field">
                                <input type="tel" placeholder="(11) 95555-5555" id="txtTelefone" name="txtTelefone" style="width: 200px" />
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="cboEscolaridade" class="control-label">Escolaridade:</label>
                            <div class="content-field">
                                <select id="cboEscolaridade" name="cboEscolaridade">
                                    <option value="0">Selecione...</option>
                                    <option value="ensino fundamental incompleto">Ensino Fundamental Incompleto</option>
                                    <option value="ensino fundamental completo">Ensino Fundamental Completo</option>
                                    <option value="ensino medio incompleto">Ensino Médio Incompleto</option>
                                    <option value="ensino medio completo">Ensino Médio Completo</option>
                                    <option value="ensino superior incompleto">Ensino Superior Incompleto</option>
                                    <option value="ensino superior completo">Ensino Superior Completo</option>
                                    <option value="pos graduacao incompleta">Pós-Graduação Incompleta</option>
                                    <option value="pos graduacao completa">Pós-Graduação Completa</option>
                                    <option value="mestrado incompleto">Mestrado Incompleto</option>
                                    <option value="mestrado completo">Mestrado Completo</option>
                                    <option value="doutorado incompleto">Doutorado Incompleto</option>
                                    <option value="doutorado completo">Doutorado Completo</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label">Sexo</label>
                            <div class="content-field">
                                <select id="cboSexo" name="cboSexo" placeholder="Selecione..." style="width: 200px">
                                    <option value="0">Selecione...</option>
                                    <option value="Masculino">Masculino</option>
                                    <option value="Feminino">Feminino</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label">Data Nascimento</label>
                            <div class="contend-field">
                                <input type="date" id="dtNascimento" name="dtNascimento" class="date-input" />
                            </div>
                        </div>


                    </div>

                </div>

                <div id="container-img" class="form-group">
                    <img src="./img/team-up.svg" class="content-img" type="image/svg+xml" alt="junte-se">
                </div>

                <div id="andress" class="form-group">
                    <div class="andress-title">
                        <h2>Endereço</h2>
                    </div>

                    <div class="line"></div>

                    <div id="divContentAndress" class="form-group">
                        <div id="divContentRua">
                            <label for="txtRua" class="control-label">Rua:</label>
                            <div class="content-field">
                                <input type="text" id="txtRua" name="txtRua" required />
                            </div>
                        </div>

                        <div id="divContentNumero">
                            <label for="txtNumero" class="control-label">Número:</label>
                            <div class="content-field">
                                <input type="text" id="txtNumero" name="txtNumero" required />
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="txtComplemento" class="control-label">Complemento:</label>
                        <div class="content-field">
                            <input type="text" id="txtComplemento" name="txtComplemento" style="width: 370px" required />
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="txtBairro" class="control-label">Bairro:</label>
                        <div class="content-field">
                            <input type="text" id="txtBairro" name="txtBairro" style="width: 370px" required />
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="txtCidade" class="control-label">Cidade:</label>
                        <div class="content-field">
                            <input type="text" id="txtCidade" name="txtCidade" style="width: 370px" required />
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label">Estado:</label>
                        <div class="content-field">
                            <select id="cboEstado" name="cboEstado" placeholder="Selecione..." style="width: 200px">
                                <option value="">Selecione...</option>
                                <option value="AC">Acre</option>
                                <option value="AL">Alagoas</option>
                                <option value="AP">Amapá</option>
                                <option value="AM">Amazonas</option>
                                <option value="BA">Bahia</option>
                                <option value="CE">Ceará</option>
                                <option value="DF">Distrito Federal</option>
                                <option value="ES">Espírito Santo</option>
                                <option value="GO">Goiás</option>
                                <option value="MA">Maranhão</option>
                                <option value="MT">Mato Grosso</option>
                                <option value="MS">Mato Grosso do Sul</option>
                                <option value="MG">Minas Gerais</option>
                                <option value="PA">Pará</option>
                                <option value="PB">Paraíba</option>
                                <option value="PR">Paraná</option>
                                <option value="PE">Pernambuco</option>
                                <option value="PI">Piauí</option>
                                <option value="RJ">Rio de Janeiro</option>
                                <option value="RN">Rio Grande do Norte</option>
                                <option value="RS">Rio Grande do Sul</option>
                                <option value="RO">Rondônia</option>
                                <option value="RR">Roraima</option>
                                <option value="SC">Santa Catarina</option>
                                <option value="SP">São Paulo</option>
                                <option value="SE">Sergipe</option>
                                <option value="TO">Tocantins</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div id="btnForm" class="button-container">
                    <div class="form-group">
                        <button id="btnEnviar" type="submit">Enviar</button>
                        <button id="btnLimpar" type="reset">Limpar</button>
                    </div>
                </div>
            </div>
        </form>

        <div id="agradecimentoId" class="hidden">
            <div class="form-group">
                <div class="thankyou-title">
                    <h1>Obrigado por enviar o formulário!</h1>
                </div>
                <div class="line"></div>
            </div>
            <p>Recebemos seus dados com sucesso. Agradecemos pela sua participação.</p>
            
            <div class="form-group">
               <a href="./arquivo_gravado.php"><button id="btnArquivoGravado" type="button">Ler Arquivo Gravado</button></a>
            </div>
        </div>
    </div>

    <script src="./js/scripts.js"></script>
</body>

</html>