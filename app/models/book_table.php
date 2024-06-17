<?php
namespace MVC\models;
use  MVC\core\model;


class book_table extends model{

    public function GetAllBook_table(){
        $data = model::db()->run("SELECT * FROM book_table");
        return $data;
    }
    public function addBook_table($data){

        $data = model::db()->insert("book_table" , $data );
        return $data;
    }

    public function delete($id){
        $data = model::db()->delete("book_table" , [ 'id'=> $id]);
        return $data;
    }
}