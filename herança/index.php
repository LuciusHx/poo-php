<?php
    class Veiculo {
        public $modelo;
        protected $cor;
        public $ano;

        public function __construct($modelo, $ano)
        {
            $this->modelo = $modelo;
            $this->ano = $ano;
        }

        public function setCor($c){
            $this->cor = $c;
        }

        public function getCor(){
            return $this->cor;
        } 

        public function Acelerar(){
            echo "Acelerando na " . $this->modelo;
        }
        public function Parar(){
            echo "Parando na " . $this->modelo . $this->ano;
        }

    }
    class Carro extends Veiculo {
        public function ligarLimpador(){
            echo "limpador ligado!";
        }
    }

    class Moto extends Veiculo {
       
    }

    $carro = new Carro("Uno", 2005);
    $carro->setCor("preto");
    $carro->getCor();
    var_dump($carro);
    $carro->Acelerar();
    $carro->ligarLimpador();

    $moto = new Moto("Honda", 2022);
    $moto->setCor("Vermelho");
    echo $moto->getCor();
    var_dump($moto);
    $moto->Acelerar();
    ?>