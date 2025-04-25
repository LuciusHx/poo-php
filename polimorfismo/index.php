<?php

    abstract class Formas {
        abstract public function calcularArea();    
    }

    class Quadrado extends Formas {
        public function calcularArea()
        {
            echo "formula do quadrado é lado ao quadrado.";
        }
    }

    class Circulo extends Formas {
        public function calcularArea()
        {
            echo "formula do circulo é pi vezes r ao quadrado.";
        }
    }
    
?>