<?php

namespace core\controllers\admin;

use PDO;
use core\App\App;

class RoleController{
    public function __construct(){
        if(empty($_SESSION['id']) && empty($_SESSION['logged_in'])){
            return redirect("/admin/loginPage");
        }

        if($_SESSION["role"] != 0){
            return redirect("/admin/loginPage");
        }
    }

    public function changeRolePage(){

        $statement = App::get("pdo")->prepare("SELECT * FROM users");
        $statement->execute();
        $allUsers = $statement->fetchAll(PDO::FETCH_OBJ);

        $pageno = 1;
        $perPage = 5;
        $totalPages = ceil(count($allUsers) / $perPage);

        if(!empty($_GET["pageno"])){
            $pageno = request("pageno");
        }

        $offset = ($pageno-1)*$perPage;

        $statement = App::get("pdo")->prepare(
            "SELECT * FROM users ORDER BY id DESC LIMIT $offset, $perPage"
        );
        $statement->execute();
        $users = $statement->fetchAll(PDO::FETCH_OBJ);
        
        return view("admin.users", [
            "users" => $users,
            "pageno" => $pageno,
            "totalPages" => $totalPages
        ]);
    }

    public function changeRole(){
        $id = request("id");
        $oldRole = request("role");
        
        $newRole = intval($oldRole) === 0? 1: 0;

        $statement = App::get("pdo")->prepare("UPDATE users SET role='$newRole' WHERE id='$id'");
        $statement->execute();

        if($statement->rowCount()){
            $_SESSION['success'] = "Changed Role successfully.";
            pusher_role($id, $newRole);
            return back();
        }
    }

    public function search(){
        $searchKey = request("searchKey");

        if(empty($searchKey)){
            return redirect("/admin/users");
        }

        $statement = App::get('pdo')->prepare("SELECT * FROM users WHERE name LIKE '%$searchKey%'" );
        $statement->execute();
        $allUsers = $statement->fetchAll(PDO::FETCH_OBJ);


        $pageno = 1;
        $perPage = 5;
        $totalPages = ceil(count($allUsers) / $perPage);

        if(!empty($_GET["pageno"])){
            $pageno = request("pageno");
        }

        $offset = ($pageno-1)*$perPage;
        
        $statement = App::get('pdo')->prepare(
            "SELECT * FROM users WHERE name LIKE '%$searchKey%' ORDER BY id DESC LIMIT $offset,$perPage"
        );
        $statement->execute();
        $users = $statement->fetchAll(PDO::FETCH_OBJ);

        return view("admin.users", [
            "users" => $users,
            "pageno" => $pageno,
            "totalPages" => $totalPages
        ]);
    }

}