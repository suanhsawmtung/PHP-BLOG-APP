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
                                <div class="form-group">
                                    <input type="hidden" name="id" value="<?= $post->id ?>">
                                    <label for="title">Blog Title:</label><br>
                                    <input type="text" class="form-control" value="<?= $post->title ?>"
                                        name="title" id="title" placeholder="Enter blog title..."
                                    >
                                </div>
                                <div class="form-group">
                                    <label for="content">Blog Content:</label><br>
                                    <textarea name="content" id="content" class="form-control" 
                                        cols="30" rows="10" placeholder="Enter blog content..."
                                    ><?= $post->content ?></textarea>
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