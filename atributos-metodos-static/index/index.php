<?php
    class Entrar {
        public static $user;

        public static function verificaLogin(){
            echo "O usuário " . self::$user . " está logado!";
        }

        public function Logout(){
            echo "O usuário deslogou";
        }
    }

    Entrar::$user = "admin";
    $login = new Entrar();
    $login->verificaLogin();
    $login->Logout();

?>