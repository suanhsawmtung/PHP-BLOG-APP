<?php

namespace core\controllers\admin;

use PDO;
use core\App\App;

class PostsController{
    public function __construct(){
        if(empty($_SESSION['id']) && empty($_SESSION['logged_in'])){
            return redirect("/admin/loginPage");
        }
    }

    public function index(){

        $statement = App::get('pdo')->prepare("SELECT * FROM posts");
        $statement->execute();
        $allPosts = $statement->fetchAll(PDO::FETCH_OBJ);

        $perPage = 3;
        $pageno = 1;

        if(!empty($_GET["pageno"])){
            $pageno = intVal(request("pageno"));
        }

        $offset = ($pageno-1)*$perPage;
        $totalPages = ceil(count($allPosts)/$perPage);
        
        $statement = App::get('pdo')->prepare("SELECT * FROM posts ORDER BY id DESC LIMIT $offset,$perPage ");
        $statement->execute();
        $posts = $statement->fetchAll(PDO::FETCH_OBJ);

        return view("admin.index", [
            "posts" => $posts,
            "pageno" => $pageno,
            "totalPages" => $totalPages
        ]);
    }

    public function createPage(){
        return view("admin.create");
    }

    public function createBlog(){
        $file = "public/images/".$_FILES["image"]["name"];

        $fileType = strtolower(pathinfo($file, PATHINFO_EXTENSION));

        if($fileType != 'jpg' && $fileType != 'jpeg' && $fileType != "png"){
            return back();
        }

        move_uploaded_file($_FILES["image"]["tmp_name"], $file);

        $title = request("title");
        $content = request("content");
        $author_id = $_SESSION['id'];

        $statement = App::get("pdo")->prepare("INSERT INTO posts(title, content, image, author_id) VALUES (:title, :content, :image, :author_id)");
        $result = $statement->execute([
            ':title' => $title,
            ':content' => $content,
            ':image' => $file,
            ':author_id' => $author_id
        ]);

        if($result){
            $_SESSION["success"] = "Created new blog successfully.";
            return redirect('/admin');
        }
    }

    public function editPage(){
        $statement = App::get("pdo")->prepare("SELECT * FROM posts WHERE id=:id");
        $statement->bindValue(':id', request('id'));
        $statement->execute();
        $post = $statement->fetch(PDO::FETCH_OBJ);
        
        return view("admin.edit", ["post" => $post]);
    }

    public function updateBlog(){
        $id = request("id");
        $title = request("title");
        $content = request("content");

        if($_FILES["image"]["name"]){
            $this->deleteImage();

            $file = "public/images/".$_FILES["image"]["name"];

            $fileType = strtolower(pathinfo($file, PATHINFO_EXTENSION));

            if($fileType != "jpg" && $fileType != "jpeg" && $fileType != "png"){
                return back();
            }

            move_uploaded_file($_FILES["image"]["tmp_name"], $file);

            $statement = App::get("pdo")->prepare("UPDATE posts SET title='$title',content='$content',image='$file' WHERE id='$id'");
            $result = $statement->execute();
        }else{
            $statement = App::get("pdo")->prepare("UPDATE posts SET title='$title',content='$content' WHERE id='$id'");
            $result = $statement->execute();
        }

        if($result){
            $_SESSION["success"] = "Updated blog successfully.";
            return redirect("/admin");
        }
    }

    public function deleteBlog(){
        $this->deleteImage();

        $statement = App::get("pdo")->prepare("DELETE FROM posts WHERE id=:id");
        $statement->bindValue(":id", request("id"));
        $result = $statement->execute();
        
        if($result){
            $_SESSION["success"] = "Deleted blog successfully.";
            return redirect("/admin");
        }
    }

    public function search(){
        $searchKey = request("searchKey");

        if(empty($searchKey)){
            return redirect("/admin");
        }

        $statement = App::get('pdo')->prepare("SELECT * FROM posts WHERE title LIKE '%$searchKey%'" );
        $statement->execute();
        $allPosts = $statement->fetchAll(PDO::FETCH_OBJ);

        $perPage = 3;
        $pageno = 1;

        if(!empty($_GET["pageno"])){
            $pageno = intVal(request("pageno"));
        }

        $offset = ($pageno-1)*$perPage;
        $totalPages = ceil(count($allPosts)/$perPage);
        
        $statement = App::get('pdo')->prepare("SELECT * FROM posts WHERE title LIKE '%$searchKey%' ORDER BY id DESC LIMIT $offset,$perPage");
        $statement->execute();
        $posts = $statement->fetchAll(PDO::FETCH_OBJ);

        return view("admin.index", [
            "posts" => $posts,
            "pageno" => $pageno,
            "totalPages" => $totalPages
        ]);
    }

    private function deleteImage(){
        $statement = App::get("pdo")->prepare("SELECT image FROM posts WHERE id=:id");
        $statement->bindValue(":id", request("id"));
        $statement->execute();
        $post = $statement->fetch(PDO::FETCH_OBJ);

        unlink($post->image);
    }
}