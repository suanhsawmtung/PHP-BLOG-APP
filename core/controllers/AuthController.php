<?php

namespace core\controllers;

use PDO;
use core\App\App;

class AuthController{
    
    // Direct to admin login page
    public function adminLoginPage(){
        return view('admin.login');
    }

    // Direct to user login page
    public function userLoginPage(){
        return view('user.login');
    }

    // Direct to register page
    public function registerPage(){
        return view("user.register");
    }

    // Register
    public function register(){
        $name = request("name");
        $email = request("email");
        $password = request("password");
        $confirm_password = request("confirm_password");

        if(empty($_POST["name"]) || empty($_POST["email"]) || empty($_POST["password"]) || empty($_POST["confirm_password"])){
            if(empty($_POST["name"])){
                $_SESSION['nameError'] = "User name field is required.";
            }else {
                $_SESSION['name'] = $_POST['name'];
            }

            if(empty($_POST["email"])){
                $_SESSION['emailError'] = "Email field is required.";
            }else {
                $_SESSION['email'] = $_POST['email'];
            }

            if(empty($_POST["password"])){
                $_SESSION['passwordError'] = "Password field is required.";
            }else {
                $_SESSION['password'] = $_POST['password'];
            }

            if(empty($_POST["confirm_password"])){
                $_SESSION['confirmPasswordError'] = "Confirm Password field is required.";
            }

            return back();
        }

        if(strlen($_POST['password']) < 6){
            $_SESSION['passwordError'] = "Password need at least 6 chracters.";
            $_SESSION['name'] = $_POST['name'];
            $_SESSION['email'] = $_POST['email'];
            return back();
        }


        if($password === $confirm_password){
            $statement = App::get('pdo')->prepare("SELECT * FROM users WHERE email=:email");
            $statement->bindValue(':email', request('email'));
            $statement->execute();
            $user = $statement->fetch(PDO::FETCH_ASSOC);

            if(empty($user)){
                $statement = App::get("pdo")->prepare("INSERT INTO users(name, email, password) VALUES(:name, :email, :password)");
                $result = $statement->execute([
                    ":name" => $name,
                    ":email" => $email,
                    ":password" => $password
                ]);

                if($result){
                    $statement = App::get('pdo')->prepare("SELECT * FROM users WHERE email=:email");
                    $statement->bindValue(':email', $email);
                    $statement->execute();
                    $user = $statement->fetch(PDO::FETCH_ASSOC);

                    if(isset($user)){
                        $_SESSION['id'] = $user['id'];
                        $_SESSION['logged_in'] = time();
                        $_SESSION['user_name'] = $user['name'];
                        $_SESSION['role'] = $user['role'];

                        return redirect("/");
                    }
                }
            }else{
                $_SESSION['name'] = $_POST['name'];
                $_SESSION['email'] = $_POST['email'];
                $_SESSION['emailError'] = "This email has already been taken.";
                return back();
            }
        }else {
            $_SESSION['name'] = $_POST['name'];
            $_SESSION['email'] = $_POST['email'];
            $_SESSION['password'] = $_POST['password'];
            $_SESSION['confirmPasswordError'] = "Confirm password doesn't match.";

            return back();
        }
    }

    //  Admin, User login
    private function login(string $logged_in){

        if(empty($_POST["email"]) || empty($_POST["password"])){
            if(empty($_POST["email"])){
                $_SESSION['emailError'] = "Email is required.";
            }else {
                $_SESSION['email'] = $_POST['email'];
            }

            if(empty($_POST["password"])){
                $_SESSION['passwordError'] = "Password is required.";
            }

            return back();
        }

        $statement = App::get('pdo')->prepare("SELECT * FROM users WHERE email=:email");
        $statement->bindValue(':email', request('email'));
        $statement->execute();
        $user = $statement->fetch(PDO::FETCH_ASSOC);

        $role = $logged_in === "/"? 1 : 0;

        if(isset($user) && $user['password']===request('password') && $user["role"] == $role){
            $_SESSION['id'] = $user['id'];
            $_SESSION['logged_in'] = time();
            $_SESSION['user_name'] = $user['name'];
            $_SESSION['role'] = $user['role'];

            return redirect($logged_in);
        }

        $_SESSION["error"] = "The credentials doesn't match.";
        return back();
    }

    // Admin login
    public function adminLogin(){
        $this->login("/admin");
    }

    // User login
    public function userLogin(){
        $this->login("/");
    }


    // Logout
    public function logout(){
        $statement = App::get('pdo')->prepare("SELECT * FROM users WHERE id=:id");
        $statement->bindValue(':id', $_SESSION["id"]);
        $statement->execute();
        $user = $statement->fetch(PDO::FETCH_ASSOC);

        $logged_out = $user["role"] === 0? "/admin/loginPage" : "/user/loginPage";

        session_destroy();
        return redirect($logged_out);
    }
}