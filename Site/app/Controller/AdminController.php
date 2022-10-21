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
    public function delete($id){
        
        try{
            Postagem::delete($id);
            echo '<script>alert("Publicação deletada com sucesso");';
            echo 'location.href="http://github/Aulas-MVC-Rafael-Capoani/Site/?pagina=admin&metodo=index"</script>';
        }catch(Exception $e){
            echo '<script>alert("'.$e->getMessage().'");';
        }
    }
    public function change($id){
        
        $loader = new \Twig\Loader\FilesystemLoader('app/view');
        $twig = new \Twig\Environment($loader);
        $template = $twig->load('update.php');
        try{
            $post = Postagem::selecionaporid($id);
        $parametros = array();
        $parametros['id'] = $id;
        $parametros['titulo'] = $post->titulo;
        $parametros['conteudo'] = $post->conteudo;

        $conteudo = $template->render($parametros);
        echo $conteudo;
        }catch(Exception $e){
            echo '<script>alert("'.$e->getMessage().'");';
            echo 'location.href="http://github/Aulas-MVC-Rafael-Capoani/Site/?pagina=home&metodo=index"</script>';
        }
        
    }
    public function update(){
        //var_dump($_POST);
        try {
            Postagem::update($_POST);
            echo '<script>alert("Publicação alterada com sucesso");';
            echo 'location.href="http://github/Aulas-MVC-Rafael-Capoani/Site/?pagina=admin&metodo=index"</script>';
        } catch (Exception $e) {
            echo '<script>alert("'.$e->getMessage().'");';
            echo 'location.href="http://github/Aulas-MVC-Rafael-Capoani/Site/?pagina=admin&metodo=change&id="'.$_POST['id'].'"</script>';
        }
    }
}