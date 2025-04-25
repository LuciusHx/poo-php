<?php
    class Pessoa {
        const nome = "Lucius";

        public function exibirNome(){
            echo self::nome;
        }
    }

    class Lucius extends Pessoa {
        const nome = "Hebert";

        public function exibirNome(){
            //pra referenciar a const no espoco da classe, se usa self::<const>
            echo self::nome;
        }

        public function exibirNomePai(){
            //pra referenciar a const no espoco da classe PAI, se usa parent::<const>
            echo parent::nome;
        }
    }

    $lucius = new Lucius();
    $lucius->exibirNome();
    $lucius->exibirNomePai();
?>