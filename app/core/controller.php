<?php
namespace MVC\core;
use Dcblogdev\PdoWrapper\Database;

class controller{
    public function view($path,$parm){
        extract($parm);
        require_once(VIEW.$path.".php");
    }

}




