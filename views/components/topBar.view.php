<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
    </ul>

    <?php
        $uri = $_SERVER["PHP_SELF"];
        $uriArray = explode("/", $uri);
        $endUri = end($uriArray);
        $searchUri;

        if($endUri === "users" || in_array("users", $uriArray)){
            $searchUri = "/admin/users/search";
        }

        if($endUri === "admin" || in_array("posts", $uriArray)){
            $searchUri = "/admin/posts/search";
        }
    ?>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
        <!-- Navbar Search -->
        <li class="nav-item">
            <a class="nav-link" data-widget="navbar-search" href="#" role="button">
                <i class="fas fa-search"></i>
            </a>
            <div class="navbar-search-block">
                <form class="form-inline" action="<?= $searchUri ?>" method="GET">
                    <div class="input-group input-group-sm">
                        <input class="form-control form-control-navbar" name="searchKey" type="search" placeholder="Search" aria-label="Search">
                        <div class="input-group-append">
                            <button class="btn btn-navbar" type="submit">
          <i class="fas fa-search"></i>
        </button>
                            <button class="btn btn-navbar" type="submit" data-widget="navbar-search">
          <i class="fas fa-times"></i>
        </button>
                        </div>
                    </div>
                </form>
            </div>
        </li>
    </ul>
</nav>
<!-- /.navbar -->