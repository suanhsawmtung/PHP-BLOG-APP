<?php

use core\controllers\admin\PostsController;
use core\controllers\user\BlogsController;
use core\controllers\AuthController;

// Admin
Router::get("/admin/loginPage",         [AuthController::class, "adminLoginPage"]);
Router::post("/admin/login",            [AuthController::class, "adminLogin"]);
Router::get("/logout",                  [AuthController::class, "logout"]);

Router::get("/admin",                   [PostsController::class, "index"]);
Router::get("/admin/createPage",        [PostsController::class, "createPage"]);
Router::post("/admin/createBlog",       [PostsController::class, "createBlog"]);
Router::get("/admin/editPage",          [PostsController::class, "editPage"]);
Router::post("/admin/updateBlog",       [PostsController::class, "updateBlog"]);
Router::get("/admin/deleteBlog",        [PostsController::class, "deleteBlog"]);


// User
Router::get("",                        [BlogsController::class, "homePage"]);