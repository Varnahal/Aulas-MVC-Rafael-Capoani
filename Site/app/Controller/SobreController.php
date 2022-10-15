<?php
Class SobreController{
    public function index(){
            $loader = new \Twig\Loader\FilesystemLoader('app/view');
            $twig = new \Twig\Environment($loader);
            $template = $twig->load('sobre.php');
            $parametros = array();
            $conteudo = $template->render($parametros);
            echo $conteudo;

    }
}