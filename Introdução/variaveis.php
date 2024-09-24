<?php

    #Como criar variáveis do jeito certo
    $_nome="João Antonio";
    $Nome="Alfredo Maciel";
    $valor=123456;
    $_var=True;
    $a = 1.234;
    $b = 1.2e3;

    #Criando array
    $arr = array("foo" => "bar", 12 => true);
    echo $arr["foo"];
    echo $arr[12];
    echo "<br>";

    #Criando Object
    class teste {
        function hello(){
              echo "Hello World!!";
    }  }
    $var = new teste;
    $var-> hello ();
    echo "<br>";

    /*Variáveis locais, aqui vai dar erro!
    function quadrado1() {
        $numero=3;
        $numero = $numero * $numero;
    }
    echo "O número ao quadrado é $numero";*/

    #Variáveis globais
    function quadrado2() {
        global $numero;
        $numero = $numero * $numero;
    }
    quadrado2();
    echo "O número ao quadrado é $numero <br>";
    

    #Variáveis estáticas
    function somatorio() {
        static $soma= 0;
        $soma= $soma+ 1;
        echo "o valor é $soma<br />";
    }
    somatorio();
    somatorio();
    somatorio();

    #Variáveis dinâmicas
    $var = "Curso";
    $$var = "Tecnologia em Análise e Desenvolvimento de Sistemas";
    echo "O nome armazenado é $Curso <br/>";
    echo "E o conteúdo de var é $var<br>";

    #Definindo uma constante
    define ("CONSTANT", "Hello world!");
    echo CONSTANT;

?>