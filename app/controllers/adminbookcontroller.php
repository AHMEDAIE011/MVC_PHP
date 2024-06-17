<?php

namespace MVC\controllers;
use MVC\core\helpers;
use MVC\core\session;
use MVC\models\book_table;
use MVC\core\controller;
use GUMP;




class adminbookcontroller extends controller{
   
    public $book_table;


      public function __construct(){
        $this->book_table = new book_table();
    }


    public function index(){
        $data =   $this->book_table->GetAllBook_table();
        $this->view('back/book_table',['title'=>"admin" ,'data'=>$data ]); 
    }


    public function postadd(){


        // $category = new category();

        $data= [
            'f_name'=>$_POST['f_name'],
            'l_name'=>$_POST['l_name'],
            'data'=>$_POST['data'],
            'time'=>$_POST['time'],
            'phone'=>$_POST['phone'],
            'message'=>$_POST['message'],
        ];



        $data=   $this->book_table->addBook_table($data);
        if ($data){
            helpers::redirect('/');
        }
        helpers::redirect('/');

    }


    public function delete($id){
        // $category = new category();
        $data =   $this->book_table->delete($id);
        if ($data){
            helpers::redirect('adminbook/index');
        }
    
    }

}


