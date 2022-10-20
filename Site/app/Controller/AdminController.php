<?php
Class AdminController{
    public function index(){
            $loader = new \Twig\Loader\FilesystemLoader('app/view');
            $twig = new \Twig\Environment($loader);
            $template = $twig->load('admin.php');

            $objpostagens = Postagem::selecionaTodos();

            $parametros = array();
            $parametros['postagens'] = $objpostagens;

            $conteudo = $template->render($parametros);
            echo $conteudo;

    }
    public function create(){
        $loader = new \Twig\Loader\FilesystemLoader('app/view');
        $twig = new \Twig\Environment($loader);
        $template = $twig->load('create.php');

        $parametros = array();

        $conteudo = $template->render($parametros);
        echo $conteudo;
    }
    public function insert(){
        try{
            Postagem::insert($_POST);
            echo '<script>alert("Publicação inserida com sucesso");';
            echo 'location.href="http://github/Aulas-MVC-Rafael-Capoani/Site/?pagina=admin&metodo=index"</script>';
        }catch(Exception $e){
            echo '<script>alert("'.$e->getMessage().'");';
            echo 'location.href="http://github/Aulas-MVC-Rafael-Capoani/Site/?pagina=admin&metodo=create"</script>';
        }
        
    }
    public function delete(){
        
        try{
            Postagem::delete($_GET['id']);
            echo '<script>alert("Publicação deletada com sucesso");';
            echo 'location.href="http://github/Aulas-MVC-Rafael-Capoani/Site/?pagina=admin&metodo=index"</script>';
        }catch(Exception $e){
            echo '<script>alert("'.$e->getMessage().'");';
        }
    }
}