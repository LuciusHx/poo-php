<?php
    abstract class Banco {
        protected $saldo;
        protected $limiteSaque;
        protected $juros;

        public function setSaldo($valor){
            $this->saldo = $valor;
        }

        public function getSaldo(){
            return $this->saldo;
        }

        //todas as classes filhas devem ter esses métodos
        abstract protected function Sacar($valor);
        abstract protected function Depositar($valor);
    }

    class Picpay extends Banco {
        public function Sacar($valor){
            $this->saldo -= $valor;
        }
        public function Depositar($valor){
            $this->saldo += $valor;
        }
    }

    $picpay = new Picpay();
    $picpay->setSaldo(1000);
    echo "<hr> Saldo: " . $picpay->getSaldo();
    $picpay->Sacar(250);
    echo "<hr> Saldo: " . $picpay->getSaldo();
    $picpay->Depositar(2000);
    echo "<hr> Saldo: " . $picpay->getSaldo();
?>