<?php

namespace MVC\controllers;
use MVC\core\helpers;
use MVC\core\session;
use MVC\models\product;
use MVC\core\controller;




class adminproductcontroller extends controller{
  
    public $user_data;
    public $product;
      public function __construct(){
        Session::start();
        $user_data = Session::Get('user');
        if (empty($user_data)) {

            helpers::redirect('user/login',);
            $this->product = new product();

        }
    }


    public function index(){
        $data=   $this->product->GetAllProduct();
        $this->view('back/product/product',['title'=>"admin" ,'data'=>$data]); 
    }




    public function add(){
        // echo $id;
        // print_r( $this->user_data->id);die;
        $this->view('back/addcategory',['title'=>"admin"]);      

    }

    public function postadd(){
        $img = $_FILES['img'];
        // var_dump($img);die;
        move_uploaded_file($img['tmp_name'],'img/'.$img['name']);

        // $category = new category();
        $data=['name'=>$_POST['name'],'icon'=>$_POST['icon'],'portfolio_id'=>$_POST['portfolio_id'], 'user_id'=>$this->user_data->id ,'img'=>$img['name']];
        $data=   $this->product->addProduct($data);
        if ($data){
            helpers::redirect('admincategory/index');
        }
    }



    public function delete($id){
        // $category = new category();
        $data =   $this->product->deleteProduct($id);
        if ($data){
            helpers::redirect('admincategory/index');
        }
    
    }
    public function update($id){
        $data= $this->product->GetProduct($id);
        // var_dump($data);die;
        $this->view('back/updatecategory',['data'=>$data]);
}

public function postupdate(){

    if (!empty($_FILES['img']['name'])) {
        // var_dump($_FILES);die;
        $img = $_FILES['img'];
        move_uploaded_file($img['tmp_name'],'img/'.$img['name']);
        $data=['name'=>$_POST['name'],'icon'=>$_POST['icon'], 'user_id'=>$this->user_data->id,'img'=>$img['name']];
    }else {
        $data=['name'=>$_POST['name'],'icon'=>$_POST['icon'], 'user_id'=>$this->user_data->id];
    }

    $id = ['id'=>$_POST['id']];
    $data=  $this->product->updateProduct($data,$id);
    if ($data){
        helpers::redirect('admincategory/index');
    }
}



}





