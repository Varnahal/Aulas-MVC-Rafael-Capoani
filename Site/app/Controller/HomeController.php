<?php
Class HomeController{
    public function index(){
        try {
            $colecaoPostagens = Postagem::selecionaTodos();
            var_dump($colecaoPostagens);
        } catch (Exception $e) {
            echo $e->getMessage();
        }
        

    }
}