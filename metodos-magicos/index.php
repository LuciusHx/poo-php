<?php
    class Pessoa {
        private $dados = array();
        private $teste = "teste";

        //vai setar um nome
        public function __set($nome, $valor)
        {
            $this->dados[$nome] = $valor;
        }

        //vai pegar
        public function __get($nome)
        {
            return $this->dados[$nome];
        }

        // __str__ do python
        public function __toString()
        {
            return "imprimindo o objeto" . $this->teste;
        }

        //usar o objeto como funcao 
        public function __invoke()
        {
            return "Objeto como função";
        }
    }

    $pessoa = new Pessoa();
    $pessoa->nome = "Lucius";
    $pessoa->idade = 20;
    $pessoa->sexo = "M";

    echo $pessoa();
    echo "<br>";
    echo $pessoa;
?>