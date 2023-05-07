<?php 

require "views/partials/header.view.php";


?>
    <!-- Main content -->
    <section class="content">

        <!-- <h5 class="mb-2 ml-2">Card with Image Overlay</h5> -->
        <div class="card card-success">
          <div class="card-body">
            <div class="row mb-5">
              <div class="col-md-12">
                    <!-- Box Comment -->
                    <div class="card card-widget">
                        <div class="card-header">
                        <div class="user-block" >
                            <span class="username" style="margin-left: 0 !important;"><?= escape($post->title) ?></span>
                            <small class="" style="margin-left: 0 !important;"><?= escape($post->author_name) ?></small>
                        </div>
                        <!-- /.user-block -->
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <img class="w-100" src="<?= "../../".escape($post->image) ?>" 
                                alt="Dist Photo 1"
                            >

                        <div class="container p-0 my-2" style="max-width: 100% !important;">
                            <small class="description text-muted" style="margin-left: 0 !important;"><?= Date("d M, Y - g:i A" , strtotime($post->created_at)) ?></small>
                            <small class="float-right text-muted <?php if(count($comments) === 0){ echo 'd-none'; } ?>">
                              <?= count($comments) ?> comments
                            </small>
                        </div>

                        <p class="text-muted">
                            <?= escape($post->content) ?>
                        </p>
                      
                        </div>
                        <!-- /.card-body -->

                        <!-- /.card-body -->
                        <div class="card-footer card-comments">
                            <h4>Comments</h4>
                            
                            <div id="commentBox">

                              <?php foreach($comments as $comment): ?>
                                <div class="card-comment">
                                  <div class="comment-text" style="margin-left: 0 !important;">
                                    <span class="username">
                                      <?= escape($comment->user_name) ?>
                                      <span class="text-muted float-right"><?= Date('d M, Y - g:i A', strtotime($comment->created_at)) ?></span>
                                    </span><!-- /.username -->
                                    <?= escape($comment->comment) ?>
                                  </div>
                                  <!-- /.comment-text -->
                                </div>
                              <?php endforeach ?>

                            </div>
                            
                            <!-- /.card-comment -->
                          </div>
                          <!-- /.card-footer -->
                          <div class="card-footer">
                            <form action="/comment" method="post">
                              <input type="hidden" name="csrf_token" value="<?= $_SESSION["csrf_token"] ?>">
                              <div class="img-push">
                                <input type="hidden" name="user_id" value=<?= $_SESSION['id'] ?>>
                                <input type="hidden" id="postId" name="post_id" value=<?= $post->id ?>>
                                <input type="text" name="comment" class="form-control form-control-sm" placeholder="Press enter to post comment">
                              </div>
                            </form>
                          </div>
                          <!-- /.card-footer -->
                    </div>
                    <!-- /.card -->
                    </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->
                </div>
                
              </div>
            </div>
          </div>
        </div><!-- /.container-fluid -->
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

    <script>

      // Enable pusher logging - don't include this in production
      Pusher.logToConsole = true;

      var pusher = new Pusher('2360b8f55f7fdbc1d58b', {
        cluster: 'ap1'
      });
    

      var channel = pusher.subscribe('comment-channel');
      channel.bind('comment-event', function(data) {
        $list='';
        let newComment=data.resultComment;

        $list = `
          <div class="card-comment" >
              <div class="comment-text" style="margin-left: 0 !important;">
                <span class="username">
                  ${newComment.user_name}
                  <span class="text-muted float-right">Just now.</span>
                </span>
                 ${newComment.comment}
              </div>
          </div>
        `;

        if($("#postId").val() == newComment.post_id){
          $("#commentBox").append($list);
        }
      });
  </script>

<?php 

require "views/partials/userFooter.view.php";

?>

