 <!-- Main Sidebar Container -->
 <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
        <img src="../../dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="../../dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">
                    <?= $_SESSION['user_name']?>
                </a>
            </div>
        </div>

        <?php
            $uri = $_SERVER["PHP_SELF"];
            $uriArray = explode("/", $uri);
            $endUri = end($uriArray);

            $searchStatus;

            if(in_array("posts", $uriArray)){
                $searchStatus = "posts";
            }

            if(in_array("users", $uriArray)){
                $searchStatus = "users";
            }
        ?>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item <?php if($endUri === "admin" || $searchStatus === "posts"){ echo "border-top border-bottom border-muted"; } ?>">
                    <a href="/admin" class="nav-link">
                        <i class="nav-icon fas fa-th"></i>
                        <p>Blog</p>
                    </a>
                </li>
                <li class="nav-item <?php if($endUri === "users" || $searchStatus === "users"){ echo "border-top border-bottom border-muted"; } ?>">
                    <a href="/admin/users" class="nav-link">
                        <i class="nav-icon fas fa-user"></i>
                        <p>Users</p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>