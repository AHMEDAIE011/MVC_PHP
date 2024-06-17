<?php

namespace MVC\controllers;
use MVC\core\controller;
use MVC\core\session;
use MVC\core\helpers;
use MVC\models\category;





class admincategorycontroller extends controller{
    public $user_data;
    public $category;
      public function __construct(){
        Session::start();
        $this->user_data = Session::Get('user');
        if (empty( $this->user_data)) {
            helpers::redirect('user/login',);

        }
        $this->category = new category();
    }

    public function index(){
        // $category = new category();
        $data=   $this->category->GetAllCategory();
        $this->view('back/category/category',['title'=>"admin" ,'data'=>$data]);      
    }


    public function add(){
        // echo $id;
        // print_r( $this->user_data->id);die;
        $this->view('back/category/addcategory',['title'=>"admin"]);      

    }

    public function postadd(){


        // $category = new category();
        $data= ['name'=>$_POST['name'],'user_id'=>$this->user_data->id];

        $data=   $this->category->addCategory($data);
        if ($data){
            helpers::redirect('admincategory/index');
        }
        helpers::redirect('admincategory/index');

    }

  

    public function delete($id){
        // $category = new category();
        $data =   $this->category->deleteCategory($id);
        if ($data){
            helpers::redirect('admincategory/index');
        }
    
    }
    public function update($id){
        $data= $this->category->GetCategory($id);
        // var_dump($data);die;
        $this->view('back/category/updatecategory',['data'=>$data]);
}

public function postupdate(){

    if (!empty($_FILES['img']['name'])) {
      
    }else {
        $data=['name'=>$_POST['name'], 'user_id'=>$this->user_data->id];
    }

    $id = ['id'=>$_POST['id']];
    $data=  $this->category->updateCategory($data,$id);
    if ($data){
        helpers::redirect('admincategory/index');
    }
}



}