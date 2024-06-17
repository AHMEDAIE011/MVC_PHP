<?php
namespace MVC\core;


class helpers{
    public static function redirect($path){
        // header ("LOCATION:localhost/mvc/public/".$path);
        header("LOCATION:". DOMAIN_NAME.'/'.$path);

    }
}



