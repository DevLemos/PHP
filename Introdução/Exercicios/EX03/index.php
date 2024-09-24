<html>
  <head>
    <title>PHP Test</title>
  </head>
  <body>
    <?php echo '<h2>vaga emprego</h2>'; ?>
    <form action="vagaEmprego.php" method="get">
      <p>Seu Nome: <input type="text" name="nome" /></p>
      <p>Sua Idade: <input type="text" name="idade" /></p>
      <input type="RADIO" name="OPCAO" value="1"> masculino
        <input type="RADIO" name="OPCAO" value="2"> feminino
      <p><input type="submit" /></p>
    </form> 
  </body>
</html>