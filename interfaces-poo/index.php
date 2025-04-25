<?php
    //a diferença entra a interface e a classe abstrata, 
    //é que na interface será "orbigatório" apenas os métodos
    interface Crud {
        public function create($data);
        public function read();
        public function update();
        public function delete();
    }

    class Noticias implements Crud {
        public function create($data){
            //lógica para adicionar noticia
        }
        public function read(){
            //lógica para ler a noticia
            echo  "noticia tal";
        }
        public function update(){
            //lógica para editar noticia
        }
        public function delete(){
            //lógica para excluir noticia
        }
    }

    $noticias = new Noticias();
    $noticias->read();
?>