<?php
    class Login {

        private $name;
        private $email;
        private $password;

        public function __construct($name, $email ,$password)
        {
            $this->name = $name;
            $this->setEmail($email);
            $this->setPassword($password);
        }

        public function getName(){
            return $this->name;
        }

        public function getEmail(){
            return $this->email;
        }
        
        public function setEmail($e){
            $email_filted = filter_var($e, FILTER_SANITIZE_EMAIL);
            $this->email = $email_filted;
        }
        
        public function getPassword(){
            return $this->password;
        }

        public function setPassword($p){
            $this->password = $p;
        }

        public function Logar(){
            if($this->email === "teste@teste.com" && $this->password === "123"){
                echo "Logado com sucesso!";
            }
            else{
                echo "Dados inválidos!";
            }
        }
    }

    //nome, email, 
    $login = new Login( "Lucius","teste@teste.com","123",);
    $login->Logar();

    echo "<br>";
    echo $login->getEmail();
    echo $login->getName();
?>