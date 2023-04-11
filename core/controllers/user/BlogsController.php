<?php

namespace core\controllers\user;

use PDO;
use core\App\App;

class BlogsController{
    public function homePage(){
        return view("user.home");
    }
}