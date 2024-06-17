<?php
namespace MVC\models;
use  MVC\core\model;


class product extends model{

    public function GetAllProduct(){
        $data = model::db()->run("SELECT * FROM product");
        return $data;
    }
    public function GetAllProductsIN_categoryID($id){
        $data = model::db()->run("SELECT * FROM product WHERE `category_id`=$id");
        return $data;
    }
    public function GetProduct($id){
        $data = model::db()->row("SELECT * FROM product WHERE `id`=$id");
        return $data;
    }
    public function GetProductby2($review , $category_id){
        
        $data = model::db()->row("SELECT * FROM product WHERE `review`=$review and `category_id` = $category_id" );
        return $data;
    }
    public function GetCategoryProduct($id){
        $data = model::db()->row("SELECT * FROM product WHERE `category_id`=$id");
        return $data;
    }
    
    public function deleteProduct($id){
        $data = model::db()->delete("product" , [ 'id'=> $id]);
        return $data;
    }
    public function addProduct($data){
        $data = model::db()->insert("product" , $data );
        return $data;
    }
    public function updateProduct($data,$id){
        $data = model::db()->update("product" , $data,$id );
        return $data;
    }
}