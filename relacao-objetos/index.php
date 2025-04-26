<?php
    class Pedido {
        public $numero;
        public $cliente;
    } 

    class Cliente {
        public $nome;
        public $endereco;
    }

    $cliente = new Cliente();
    $cliente->nome = "Lucius Hebert";
    $cliente->endereco = "Ibiapina";

    $pedido = new Pedido();
    $pedido->numero = "123";
    //to dizendo associando o pedido ao cliente
    $pedido->cliente = $cliente;

    $dados = [
        'numero'=> $pedido->numero,
        'nome_cliente' => $pedido->cliente->nome,
        'endereco_cliente' => $pedido->cliente->endereco
    ];

    var_dump($dados)
?>