<?php

use core\App\App;

require "core/App/App.php";
require "core/helperFunctions.php";
require "core/database/Connection.php";
require "core/router/router.php";
require "Routes.php";

/**_____Dependencies Store_____ */
App::bind("config", require "config.php");
App::bind("pdo", Connection::make(App::get("config")["database"]));


/**_____Controllers_____ */
require "core/controllers/AuthController.php";
require "core/controllers/admin/PostsController.php";
require "core/controllers/user/BlogsController.php";
require "core/controllers/admin/RoleController.php";
