<?php

use core\controllers\admin\PostsController;
use core\controllers\user\BlogsController;
use core\controllers\admin\RoleController;
use core\controllers\AuthController;

// Auth
Router::get("/admin/loginPage",          [AuthController::class, "adminLoginPage"]);
Router::get("/user/loginPage",           [AuthController::class, "userLoginPage"]);
Router::get("/registerPage",             [AuthController::class, "registerPage"]);
Router::post("/register",                [AuthController::class, "register"]);
Router::post("/admin/login",             [AuthController::class, "adminLogin"]);
Router::post("/user/login",              [AuthController::class, "userLogin"]);
Router::get("/logout",                   [AuthController::class, "logout"]);

// Admin
Router::get("/admin",                   [PostsController::class, "index"]);
Router::get("/admin/createPage",        [PostsController::class, "createPage"]);
Router::post("/admin/createBlog",       [PostsController::class, "createBlog"]);
Router::get("/admin/editPage",          [PostsController::class, "editPage"]);
Router::post("/admin/updateBlog",       [PostsController::class, "updateBlog"]);
Router::get("/admin/deleteBlog",        [PostsController::class, "deleteBlog"]);
Router::get("/admin/posts/search",      [PostsController::class, "search"]);
Router::get("/admin/users",             [RoleController::class, "changeRolePage"]);
Router::post("/admin/changeRole",       [RoleController::class, "changeRole"]);
Router::get("/admin/users/search",      [RoleController::class, "search"]);


// User
Router::get("",                         [BlogsController::class, "homePage"]);
Router::get("/detail",                  [BlogsController::class, "detail"]);
Router::post("/comment",                [BlogsController::class, "comment"]);