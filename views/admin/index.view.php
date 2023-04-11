<?php 

require "views/partials/header.view.php";

require "views/components/topBar.view.php";

require "views/components/sideBar.view.php";

?>
<!-- Alert -->
<?php if(isset($_SESSION["success"])): ?>
<div class="container-fluid p-0 position-fixed" style="top: 20px; z-index: 222222;">
    <div class="row m-0 p-0">
        <div class="alert alert-success alert-dismissible col-5 offset-6" role="alert">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <?php 
                echo $_SESSION["success"];
                unset($_SESSION["success"]);
            ?>
        </div>
    </div>
</div>
<?php  endif ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Blog List</h1>
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
                            <a href="/admin/createPage" class="btn btn-success">+ Create New Blog</a>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Author</th>
                                        <th>Title</th>
                                        <th>Content</th>
                                        <th>Date</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                        $i=1;
                                        foreach($posts as $post):
                                    ?>
                                    <tr>
                                        <td><?= $i ?></td>
                                        <td><?= $post->author_id ?></td>
                                        <td><?= $post->title ?></td>
                                        <td>
                                            <?= substr($post->content, 0, 50)."..." ?>
                                        </td>
                                        <td>
                                            <?= Date('d M, Y - g:i A', strtotime($post->created_at)) ?>
                                        </td>
                                        <td>
                                            <div class="btn-group">
                                                <div class="container">
                                                    <a href="/admin/editPage?id=<?= $post->id ?>" class="btn btn-warning text-white">Edit</a>
                                                </div>
                                                <div class="container">
                                                    <a href="/admin/deleteBlog?id=<?= $post->id ?>" 
                                                        class="btn btn-danger text-white" onclick="return confirm('Are you sure to delete this blog?')"
                                                    >Delete</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <?php 
                                        $i++;
                                        endforeach
                                    ?>
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer clearfix">
                            <ul class="pagination pagination-sm m-0 float-right">
                                <li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
                            </ul>
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