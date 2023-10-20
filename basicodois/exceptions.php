<?php
//eventos que desviam o fluxo normal de um script durante a execução do programa
/**
 * ERRO = algo inesperado e gerado pelo próprio PHP
 * EXCEÇÃO = relacionada a violação de regras de negócio, quando um requisito não é atendido
 */

 function funcaoUm() {
    echo "Função 1 está antes da exceção!<br>";
 }

 function funcaoDois($valorInteiro) {
    if(!is_int($valorInteiro)){
        throw new Exception("Informação fornecida deve ser do tipo inteiro!");
    }

    echo "Valor fornecido = " . $valorInteiro . "<br>";
    funcaoTres();
 }


 function funcaoTres() {
    echo "Função 3 está após a exceção!<br>";
 }

 funcaoUm();
 //funcaoDois("as");
 funcaoDois(30);

 //debug
 /**
  * Níveis de erro PHP: warning, notice, parse error, fatal error
  * -------Não interrompem a execução do script(warnings e notices)-----
  * Warning error = alerta que indica existência de erros pequenos que podem se tornar problemas maiores
  * Notice error = aviso que algo está errado
  * -------Interrompem a execução do sistema(parse error e fatal error)-----
  * Parse error = causado por falhas na sintaxe do código
  * Ftal error = comuns na tentativa de usar funções ou classes não definidas
  */

  //habilitar php.ini display_errors = on, error_reporting = E_ALL

  function divideZero($num){
    if(!$num){
        throw new Exception("Divisão por zero");
    }
    return 1/$num;
  }

  try{
    echo divideZero(5) . "<br>";
    echo divideZero(0) . "<br>";
  }catch(Exception $e){
    echo "Exceção lançada, mensagem: ", $e->getMessage(), "<br>";
  }

  echo "Segue o fluxo<br><br>";

  function divideZeroDois($num){
    if(!$num){
      throw new Exception(('Essa divisão é por zero, erro!'));
    }

    return 1/$num;
  }

  try{
    echo divideZeroDois(5) . "<br>";

  }catch(Exception $e){
    echo 'Exceção capturada: ', $e->getMessage(), "<br>";
  }finally{
    echo 'Uso de finally 1.<br>';
  }

  try{
    echo divideZeroDois(0) . "<br>";
  }catch(Exception $e){
    echo 'Exceção capturada: ', $e->getMessage(), "<br>";
  }finally{
    echo 'Uso de finally 2. <br>';
  }

  echo 'Primeira operação com 5 e segunda com 0';


  //customizando exceção

  class MyException extends Exception{}

    function testMyException(){
      throw new MyException('My exception works!');
    }
    
    try{
      testMyException();
    }catch(MyException){
      print "My exception has been thrown, as you can see it's test only";
    }

    //hierarquia de exceções
    /**
     *                           1 Throwable
     *  2.1 Exception implements Throwable    2.2 Error implements Throwable
     *  2.1.1 (causadas em tempo de execução) RuntimeException: UnexpectedValueException, UnderFlowException, RangeException, OverFlowException, OutOfBoundsException
     *  2.1.1 (Causadas por requisitos não atendidos) LogicException: OutOfRangeException, LengthException, InvalidArgumentException, DomainException, BadFunctionCallException(BadMethodCallException)
     *   
     *  Para definir exceções é feito uso de biblioteca PHP - SPL (Standard PHP Library)
     */

     