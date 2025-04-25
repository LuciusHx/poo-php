<?php
    class Pessoa {
        public $idade; 

        //esse metodo é inicializado quando o clone é chamado
        public function __clone()
        {
            echo "clonagem de objetos";
        }
    }

    //aqui eu estou apenas referenciando, a pessoa2 também é pessoa1
    $pessoa1 = new Pessoa();
    $pessoa1->idade=19;

    $pessoa2 = $pessoa1;
    $pessoa2->idade=22;

    echo $pessoa2->idade;


    echo "<br>";
    //aqui eu vou clonar, eu vou instanciar a classe pessoa10 e depois clonar (as duas vão coexistir)
    $pessoa10 = new Pessoa();
    $pessoa10->idade=25;

    $pessoa20 = clone $pessoa10;
    $pessoa20->idade=30;
    
    echo $pessoa10->idade . " | " .  $pessoa20->idade;
?>