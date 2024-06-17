<?php

namespace MVC\controllers;
use MVC\models\category;
use MVC\models\product;
use MVC\core\controller;
// use GUMP;
// use MVC\core\session;
// use MVC\core\helpers;




class homecontroller extends controller{
  public  $category ;
  public  $product ;

        public function __construct(){
       $this->category = new category();
       $this->product = new product();

    }


    public function index(){


        
        $category_1=  $this->category->GetCategory(1);
        $category_2=  $this->category->GetCategory(2);
        $category_3=  $this->category->GetCategory(3);
        $category_4=  $this->category->GetCategory(4);
        $cat_1  =   $this->product->GetCategoryProduct(1);
        $cat_2  =   $this->product->GetCategoryProduct(2);
        $cat_3  =   $this->product->GetCategoryProduct(3);
        $cat_4  =   $this->product->GetCategoryProduct(4);
        $all_cat_1   =   $this->product->GetAllProductsIN_categoryID(1);
        $all_cat_2   =   $this->product->GetAllProductsIN_categoryID(2);
        $all_cat_3   =   $this->product->GetAllProductsIN_categoryID(3);
        $all_cat_4   =   $this->product->GetAllProductsIN_categoryID(4);
        $GetProductby1_1 = $this->product->GetProductby2(1 , 1);
        $GetProductby1_2 = $this->product->GetProductby2(1 , 2);
        $GetProductby1_3 = $this->product->GetProductby2(1 , 3);


        // print_r( $GetProductby1_1);die; 





        $this->view('home/index',[
            'title'=>"home",
            'cat_1'=>$cat_1,
            'cat_2'=>$cat_2,
            'cat_3'=>$cat_3,
            'cat_4'=>$cat_4,
            'category_1'=>$category_1,
            'category_2'=>$category_2,
            'category_3'=>$category_3,
            'category_4'=>$category_4,
            'all_cat_1'=>$all_cat_1,
            'all_cat_2'=>$all_cat_2,
            'all_cat_3'=>$all_cat_3,
            'all_cat_4'=>$all_cat_4,
            'GetProductby1_1'=>$GetProductby1_1,
            'GetProductby1_2'=>$GetProductby1_2,
            'GetProductby1_3'=>$GetProductby1_3,
           ] );      
    }


    public function menu(){
        $All_category = $this->category->GetAllCategory();
        $category_1=  $this->category->GetCategory(1);
        $category_2=  $this->category->GetCategory(2);
        $category_3=  $this->category->GetCategory(3);
        $category_4=  $this->category->GetCategory(4);
        $all_cat_1   =   $this->product->GetAllProductsIN_categoryID(1);
        $all_cat_2   =   $this->product->GetAllProductsIN_categoryID(2);
        $all_cat_3   =   $this->product->GetAllProductsIN_categoryID(3);
        $all_cat_4   =   $this->product->GetAllProductsIN_categoryID(4);

        $this->view('home/menu',[
            'title'=>"menu",
            'All_category'=>$All_category,
            'category_1'=>$category_1,
            'category_2'=>$category_2,
            'category_3'=>$category_3,
            'category_4'=>$category_4,
            'all_cat_1'=>$all_cat_1,
            'all_cat_2'=>$all_cat_2,
            'all_cat_3'=>$all_cat_3,
            'all_cat_4'=>$all_cat_4,
        ]);      
    }

##############################################################/// services Web
    public function services(){
        $this->view('home/services',['title'=>"services"]);      
    }


##############################################################/// services LOGO

    public function about(){
        $this->view('home/about',['title'=>"service1"]);      
    }

##############################################################/// services LOGO

public function contact(){
    $this->view('home/contact',['title'=>"service1"]);      
}










 












    // public function __construct(){
    //     Session::start();
    // }


    // public function index(){
    //     $u=new user();
    //     $data=$u->GetAllUsers();    
    //     $title='home mvc';
    //     $h1='hello Mr ahmed';
    //     $this->view('home/index',['title'=>$title,'h1'=>$h1 ,'data'=>$data]);      
    // }



   



}