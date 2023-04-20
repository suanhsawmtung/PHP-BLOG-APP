<?php 

require "views/partials/header.view.php";


?>
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-12 text-center">
            <h1>Blogs</h1>
            </div>
            <!-- <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Widgets</li>
            </ol>
            </div> -->
        </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

        <!-- <h5 class="mb-2 ml-2">Card with Image Overlay</h5> -->
        <div class="card card-success">
            <div class="card-body">
                <div class="row">
                    <?php foreach($posts as $post): ?>
                    <div class="col-md-4">
                        <!-- Box Comment -->
                        <div class="card card-widget">
                            <div class="card-header">
                                <div class="user-block" >
                                    <span class="username" style="margin-left: 0 !important;"><a href="<?= "detail?id=".$post->id ?>"><?= $post->title ?></a></span>
                                    <small  style="margin-left: 0 !important;"><?= $post->user_name ?></small>
                                </div>
                                <!-- /.user-block -->
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <div style="width: 100%; height: 300px; overflow: hidden;">
                                    <img class="img-fluid pad" src="<?= "../../".$post->image ?>" 
                                        style="width: 100%; height: 100%; object-fit: cover;" alt="Dist Photo 1"
                                    >
                                </div>

                                <div class="container p-0 my-2">
                                    <small class="description text-muted" style="margin-left: 0 !important;"><?= Date("d M, Y - g:i A" , strtotime($post->created_at)) ?></small>
                                    <small class="float-right text-muted">127 likes - 3 comments</small>
                                </div>

                                <p class="text-muted">
                                    <?= substr($post->content, 0, 70)." ..." ?>
                                    <a href="<?= "detail?id=".$post->id ?>"><i>Read more...</i></a>
                                </p>
                            
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- /.col -->
                    <?php endforeach ?>
                </div>
            </div>
        </div>

    </section>
    <!-- /.content -->

    <a id="back-to-top" href="#" 
        class="btn btn-primary back-to-top" style="bottom: 5.5rem !important;"
        role="button" aria-label="Scroll to top"
    >
        <i class="fas fa-chevron-up"></i>
    </a>
    </div>
    <!-- /.content-wrapper -->

<?php 

require "views/partials/userFooter.view.php";

?>

