<?php 
    //POO
    class Teste {
        //atributos
        public $marca;
        public $modelo;

        //metodo
        public function xlr8() {
            echo 'acelerei no ' . $this->marca . $this->modelo;
        }
    }
    
    $punto = new Teste();
    $punto -> marca = "Fiat ";
    $punto -> modelo = "Punto";
    $punto->xlr8();

    $pollo = new Teste();
    $pollo -> marca = "wolks";
    $pollo ->  modelo = "Pollo"; 
    $pollo -> xlr8();
?>