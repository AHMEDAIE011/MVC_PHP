<?php

namespace MVC\controllers;
use MVC\core\controller;
use MVC\models\user;
use MVC\core\session;
use GUMP;
use MVC\core\helpers;


class usercontroller extends controller{
    
    public function __construct(){
            Session::start(); // كاتبها هنا عشان تطبق علي كل الفانكشن الموجوده
        }

    
 public function login(){
        $this->view('home/login',['title'=>"login"]);
    }

    
    public function postlogin(){
        $v = GUMP::is_valid($_POST,[ 
            'email'=>'required'
        ]);
        
      if ($v == 1) {
        $user = new user();
        $data = $user->GetUser($_POST['email'],$_POST['password']);  
        Session::Set('user',$data); 
        helpers::redirect('admincategory/index');
        // header('LOCATION: user/index');
      }
    }

    public function logout(){
        Session::Stop();
        helpers::redirect('home/index');

    }




}