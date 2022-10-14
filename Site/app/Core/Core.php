<?php
class Core{

    public function start($urlGet){
        $acao = 'index';
        if(isset($urlGet['pagina'])){
            $controller = ucfirst($urlGet['pagina'].'Controller');

            if(!class_exists($controller)){
                $controller = 'ErroController';
            }
            
        }else{  
            $controller = 'HomeController';
        }
        if(isset($urlGet['id'])&& $urlGet['id']!= null){
            $id = $urlGet['id'];
        }else{
            $id = null;
        }
        call_user_func_array(array(new $controller,$acao), array('id'=>$id) ?? null);

    }
}