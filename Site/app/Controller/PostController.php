<?php
Class PostController{
    public function index($params){
        try {
            $Postagem = Postagem::selecionaporid($params);
            var_dump($Postagem);

            $loader = new \Twig\Loader\FilesystemLoader('app/view');
            $twig = new \Twig\Environment($loader);
            $template = $twig->load('single.php');

            $parametros = array();
            $parametros['titulo'] = $Postagem->titulo;
            $parametros['conteudo'] = $Postagem->conteudo;
            $conteudo = $template->render($parametros);
            echo $conteudo;
            
        } catch (Exception $e) {
            echo $e->getMessage();
        }
        

    }
}