<?php 

//php é vagamente tipada

    //print "exibir na tela\n", "dá erro";
    print "exibir na tela<br>" ;
    echo "exibir na tela ECHO<br>";
    echo "exibir na tela ECHO ", "posso colocar ", "quantas Strings eu quiser<br>";

    //Ambas exibem informações na tela, o diferencia uma da outra é que
    //Print suporta somente uma String
    //ECHO exibe mais de uma string


    /**Escopo glogal e local de variáveis */

    //variável local está dentro de um bloco de código como funções e métodos e só pode ser acessada dentro do bloco
    function soma(){
        $x = 10;
        $y = 40;
        $resultado = $x + $y;

        return $resultado; 
    }

    echo soma();

    //variável global disponível para todo o código, porém para chamar devemos colocar -> global $variavel
    $variavel = 10;

    function somaGlobal(){
        global $variavel;
        $x = 20;

        $resultado = $variavel + $x;

        return $resultado;
    }

    echo "<br>" . somaGlobal();

    //PHP tem mais de 1000 funções embitidas

    function familyName($fname, $year){
        echo "<br>$fname Refnes. Estudo por $year anos.";
    }

    familyName("CyberSecurity", 10);
    familyName(10,"sss");

    function familyNameStrict(string $fname, int $year){
        echo "<br>$fname Refnes. Estudo por $year anos.";
    }
    //familyNameStrict(10,"sss"); /**lança erro em execução */

    //valor padrão
    function setHeight(int $minHeight = 50){
        echo "<br>The height is: $minHeight <br>";
    }

    setHeight(); //usado valor padrão
    setHeight(73);

    //uso de return
    function subtrair(int $a, int $b){
        return $a - $b;
    }

    echo "O resultado da subtração é " . subtrair(50,27);

    //declarações de tipo de retorno
    function addNumbers(float $a, float $b) : int{
        return (int) ($a + $b);
    }

   echo "<br>Tipo de retorno int com parâmetros float : soma = " . addNumbers(1.2,5.3);

   //argumentos por referência - para transformar um argumento de função para referencia, deve-se usar o operador &

   function addFive($value){
    $value += 5;
   }
   $num = 2;
   addFive($num);
   echo "<br>Valor da variável era 2 e agora é " . $num . " sem usar parâmetro por referência";

   function addFive1(&$value){
    $value += 5;
   }
   $num1 = 2;
   addFive1($num1);
   echo "<br>Valor da variável era 2 e agora é " . $num1 . " usando parâmetro por referência";
