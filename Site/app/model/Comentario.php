<?php

class Comentario{
    public static function selecionarComentarios($idpost){
        $con = Connection::getConn();
        $sql = "SELECT *FROM comentario WHERE fk_id_postagem =:id";
        $sql = $con->prepare($sql);
        $sql->bindValue(':id',$idpost,PDO::PARAM_INT);
        $sql->execute();

        $resultado = array();
        while($row = $sql->fetchObject('comentario')){
            $resultado[]=$row;
        }

        return $resultado;
        
    }
}