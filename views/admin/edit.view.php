<?php 

require "views/partials/header.view.php";

require "views/components/topBar.view.php";

require "views/components/sideBar.view.php";

?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Update Blog Page</h1>
                </div>
            </div>
        </div>
        <!-- /.container-fluid -->
    </section>

    <?php 
        $sessionTitle = isset($_SESSION['title'])? $_SESSION['title'] : $post->title;
        $sessionContent = isset($_SESSION['content'])? $_SESSION['content'] : $post->content;
    ?>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <a href="/admin" class="btn btn-secondary"><< Back</a>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <form action="/admin/updateBlog" method="POST" enctype="multipart/form-data">

                                <input type="hidden" name="csrf_token" value="<?= $_SESSION["csrf_token"] ?>">
                        
                                <div class="form-group">
                                    <input type="hidden" name="id" value="<?= $post->id ?>">
                                    <label for="title">Blog Title:</label><br>
                                    <input type="text" class="form-control" value="<?= escape($sessionTitle) ?>"
                                        name="title" id="title" placeholder="Enter blog title..."
                                    >
                                    <small class="text-danger">
                                        <?php 
                                            if(isset($_SESSION["titleError"])){
                                                echo $_SESSION["titleError"];
                                                unset($_SESSION["titleError"]);
                                            }
                                        ?>
                                    </small>
                                </div>
                                <div class="form-group">
                                    <label for="content">Blog Content:</label><br>
                                    <textarea name="content" id="content" class="form-control" 
                                        cols="30" rows="10" placeholder="Enter blog content..."
                                    ><?= escape($sessionContent) ?></textarea>
                                    <small class="text-danger">
                                        <?php 
                                            if(isset($_SESSION["contentError"])){
                                                echo $_SESSION["contentError"];
                                                unset($_SESSION["contentError"]);
                                            }
                                        ?>
                                    </small>
                                </div>
                                <div class="form-group">
                                    <label for="image">Blog Image:</label><br>
                                    <img src="../../<?= $post->image ?>" width="150" class="img-thumbnail" alt=""><br><br>
                                    <input type="file" name="image" id="image">
                                </div>
                                <div class="form-group">
                                    <input type="submit" class="btn btn-primary text-white">
                                </div>
                            </form>

                            <?php 
                                unset($_SESSION['title']);
                                unset($_SESSION['content']);
                            ?>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<?php 

require "views/partials/footer.view.php";

?>