<?php
Class HomeController{
    public function index(){
        try {
            $colecaoPostagens = Postagem::selecionaTodos();

            $loader = new \Twig\Loader\FilesystemLoader('app/view');
            $twig = new \Twig\Environment($loader);
            $template = $twig->load('home.php');
            $parametros = array();
            $parametros['postagens'] = $colecaoPostagens;
            $conteudo = $template->render($parametros);
            echo $conteudo;
            
        } catch (Exception $e) {
            echo $e->getMessage();
        }
        

    }
}