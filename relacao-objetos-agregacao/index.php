<?php
    //Agregação
    //uma classe precisa da outra para executar sua ação

    class Produtos {
        public $name;
        public $valor;

        function __construct($name, $valor)
        {
            $this->name = $name;
            $this->valor = $valor;
        }
    }
    
    class Carrinho {
        public $produtos;

        //o paramentro da function é uma instância da classe Produtos
        public function adicionar(Produtos $produto){
            $this->produtos[] = $produto;
        }

        public function exibir(){
            foreach($this->produtos as $produto){
                echo $produto->name . "<br>";
                echo $produto->valor . "<hr>";
            }
        }
    }

    $produto1 = new Produtos("notebook", "2000");
    $produto2 = new Produtos("Bola de Volei", "45");

    $carrinho = new Carrinho();
    $carrinho->adicionar($produto1);
    $carrinho->adicionar($produto2);
    $carrinho->exibir();
?>