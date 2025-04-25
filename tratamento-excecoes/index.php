<?php
    class NewsLetter {
        public function CadastrarEmail($email){
            if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
                throw new Exception("Este email é inválido!", 404);
            } else {
                echo "Email cadastrado com sucesso!";
            }
        }
    }

    $newsLetter = new NewsLetter();
    try {
        $newsLetter->CadastrarEmail("contato@");
    } catch(Exception $error){
        echo "Mensage: ". $error->getMessage()."<br>";
        echo "Code: ". $error->getCode()."<br>";
        echo "Line: ". $error->getLine()."<br>";
        echo "File: ". $error->getFile()."<br>";
    }
?>