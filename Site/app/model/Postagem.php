<?php

use JetBrains\PhpStorm\ExpectedValues;

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
    public static function insert($dadosPost){
        if(empty($dadosPost['titulo'])||empty($dadosPost['conteudo'])){
            throw new Exception("Preencha tudo");
            return false;
        }
        $con = Connection::getConn();
        $sql = 'INSERT INTO postagem (titulo,conteudo) VALUES (:tit,:cont)';
        $sql = $con->prepare($sql);
        $sql->bindValue(':tit',$dadosPost['titulo']);
        $sql->bindValue(':cont',$dadosPost['conteudo']);
        $res = $sql->execute();
        if($res == false){
            throw new Exception("Falha ao inserir informações");
            return false;
        }
        return true;
    }
    public static function delete($id){
        if(empty($id)){
            throw new Exception("ERRO");
            return false;
        }
        $con = Connection::getConn();
        $sql = 'DELETE FROM postagem where id=:id';
        $sql = $con->prepare($sql);
        $sql->bindValue(':id',$id);
        $res = $sql->execute();
        if($res == false){
            throw new Exception("Falha ao deletar informações");
            return false;
        }
        return true;
    }
}