<?php
namespace MVC\models;
use  MVC\core\model;     

class user extends model{

    public function GetAllUsers(){
        $dat = model::db()->rows("SELECT * FROM user");
        return $dat;
    }

    
    public function GetUser($email,$password){

        $dat = model::db()->row("SELECT * FROM user WHERE `email` = ? && `password` = ? ",[$email,$password] );
        return $dat;
    }

}