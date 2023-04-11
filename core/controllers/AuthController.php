<?php

namespace core\controllers;

use PDO;
use core\App\App;

class AuthController{
    
    // Direct to admin login page
    public function adminLoginPage(){
        return view('admin.login');
    }

    // Admin login
    public function adminLogin(){
        $statement = App::get('pdo')->prepare("SELECT * FROM users WHERE email=:email");
        $statement->bindValue(':email', request('email'));
        $statement->execute();
        $user = $statement->fetch(PDO::FETCH_ASSOC);

        if(isset($user) && $user['password']===request('password')){
            $_SESSION['id'] = $user['id'];
            $_SESSION['logged_in'] = time();
            $_SESSION['user_name'] = $user['name'];
            return redirect("/admin");
        }

        return back();
    }


    // Logout
    public function logout(){
        session_destroy();
        return redirect('admin/loginPage');
    }
}