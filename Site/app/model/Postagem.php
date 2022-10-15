<?php
Class Postagem{

    public static function selecionaTodos(){
        $con = Connection::getConn();
        $sql = "SELECT * FROM postagem ORDER BY id DESC";
        $sql = $con->prepare($sql);
        $sql->execute();
        $resultado = array();
        While($row = $sql->fetchObject('Postagem')){
            $resultado[]=$row;
        }
        if(!$resultado){
            throw new Exception("não foi encontrado registros");
        }else{
            return $resultado;
        }
        
    }
    public static function selecionaporid($idpost){
        $con = Connection::getConn();
        $sql = "SELECT * FROM postagem WHERE id = :id";
        $sql = $con->prepare($sql);
        $sql->bindValue(':id',$idpost,PDO::PARAM_INT);
        $sql->execute();
        $resultado = $sql->fetchObject('Postagem');
        if(!$resultado){
            throw new Exception("não foi encontrado registros");
        }else{
            $resultado->comentarios = Comentario::selecionarComentarios($resultado->id);

        }
        return $resultado;
    }

}