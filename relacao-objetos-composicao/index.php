<?php
    class Pessoa {
        public function atribuirNome($nome){
            return "o nome da pessoa é: " . $nome;
        }
    }

    class Exibe {
        public $pessoa;
        public $nome;

        function __construct($nome)
        {
            $this->pessoa = new Pessoa();
            $this->nome = $nome;
        }

        public function exibirNome(){
            echo $this->pessoa->atribuirNome($this->nome);
        }
    }

    $exibe = new Exibe("Lucius");
    $exibe->exibirNome();
    
?>