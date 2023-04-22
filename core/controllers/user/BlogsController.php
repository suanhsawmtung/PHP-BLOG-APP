<?php

namespace core\controllers\user;

use PDO;
use core\App\App;

class BlogsController{
    public function __construct(){
        if(empty($_SESSION["id"]) && empty($_SESSION["logged_in"])){
            return redirect("/user/loginPage");
        }
    }

    public function homePage(){
        $statement = App::get("pdo")->prepare(
            "SELECT posts.*, users.name as user_name FROM posts LEFT JOIN users ON posts.author_id=users.id"
        );
        $statement->execute();
        $allPosts = $statement->fetchAll(PDO::FETCH_OBJ);

        return view("user.home", ["posts" => $allPosts]);
    }

    public function detail(){

        $statement = App::get("pdo")->prepare("SELECT * FROM posts WHERE id=:id");
        $statement->bindValue(":id", request("id"));
        $statement->execute();
        $post = $statement->fetch(PDO::FETCH_OBJ);

        $statement = App::get("pdo")->prepare("SELECT comments.*, users.name as user_name FROM comments LEFT JOIN users ON comments.user_id=users.id WHERE post_id=:id");
        $statement->bindValue(":id", request("id"));
        $statement->execute();
        $comments = $statement->fetchAll(PDO::FETCH_OBJ);

        return view("user.detail", [
            "post" => $post,
            "comments" => $comments
        ]);
    }

    public function comment(){
        
        csrf_token();
        
        if(empty($_POST["comment"])){
            return back();
        }

        $user_id = request("user_id");
        $post_id = request("post_id");
        $comment = request("comment");

        $statement = App::get("pdo")->prepare("INSERT INTO comments(comment, user_id, post_id) VALUES(:comment, :user_id, :post_id)");
        $statement->execute([
            ":comment" => $comment,
            ":user_id" => intval($user_id),
            ":post_id" => intval($post_id)
        ]);

        return back();
    }
}