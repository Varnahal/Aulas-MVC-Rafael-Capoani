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

}