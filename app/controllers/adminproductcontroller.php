<?php

namespace MVC\controllers;
use MVC\core\helpers;
use MVC\core\session;
use MVC\models\product;
use MVC\models\category;
use MVC\core\controller;
use GUMP;




class adminproductcontroller extends controller{
    public $user_data;
    public $product;
    public $category ;

      public function __construct(){

        Session::start();
        $this->user_data = Session::Get('user');
        if (empty( $this->user_data)) {
            helpers::redirect('user/login',);

        }
        $this->product = new product();
        $this->category = new category();

    }


    public function index(){
        $data =   $this->product->GetAllProduct();
        $this->view('back/product/product',['title'=>"admin" ,'data'=>$data ]); 
    }


    public function add(){
        $valid = [];
        $data =   $this->category->GetAllCategory();
        $this->view('back/product/addproduct',['title'=>"admin",'category' => $data ,'valid'=>$valid ]);      

    }

    public function postadd(){
        
        $v = GUMP::is_valid($_POST,[ 
            'name'=>'required',
            'descrption'=>'required',
            'price'=>'required',
            'category_id'=>'required',
        ]);
        
      if ($v == 1) {
        $img = $_FILES['img'];
        // var_dump($this->user_data );die;
        move_uploaded_file($img['tmp_name'],'img/'.$img['name']);

        // $category = new category();
        $data=[
            'name'=>$_POST['name'],
            'descrption'=>$_POST['descrption'],
            'price'=>$_POST['price'],
            'review'=>$_POST['review'],
            'category_id'=>$_POST['category_id'],
             'user_id'=>$this->user_data->id ,
             'img'=>$img['name'
             ]];
        $data=   $this->product->addProduct($data);
        if ($data){
            helpers::redirect('adminproduct/index');
        }
      }
      else {
        if ($v != 1) {
            $this->view('back/product/addproduct',['valid'=>$v]);
        }
      }

    }


    public function update($id){
        $data2 =   $this->category->GetAllCategory();
        $data = $this->product->GetProduct($id);
        // var_dump($data);die;
        $this->view('back/product/updateproduct',['data'=>$data ,'category' => $data2 ]);
    }



    public function postupdate(){


        if (!empty($_FILES['img']['name'])) {
            // var_dump($_FILES);die;
            $img = $_FILES['img'];
            move_uploaded_file($img['tmp_name'],'img/'.$img['name']);

            $data=['name'=>$_POST['name'],
            'descrption'=>$_POST['descrption'],
            'price'=>$_POST['price'],
            'review'=>$_POST['review'],
            'category_id'=>$_POST['category_id'],
             'user_id'=>$this->user_data->id,
             'img'=>$img['name']];
        }
        
        else {
            $data=['name'=>$_POST['name'],
            'descrption'=>$_POST['descrption'],
            'price'=>$_POST['price'],
            'review'=>$_POST['review'],
            'category_id'=>$_POST['category_id'],
             'user_id'=>$this->user_data->id];
        } 
        $id = ['id'=>$_POST['id']];
        $data=  $this->product->updateProduct($data,$id);
        if ($data){
            helpers::redirect('adminproduct/index');
        }
        helpers::redirect('adminproduct/index');
    }
    

    public function delete($id){
        // $category = new category();
        $data =   $this->product->deleteProduct($id);
        if ($data){
            helpers::redirect('adminproduct/index');
        }
    
    }


}



