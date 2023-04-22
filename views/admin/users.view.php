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
                    <h1>User List</h1>
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
                    <div class="justify-content-center align-items-center text-muted 
                        <?php if($totalPages != 0){ echo 'd-none'; }else{ echo 'd-flex'; } ?>"
                    >
                        <h1>There is no user here.</h1>
                    </div>
                    <div class="card <?php if($totalPages==0){ echo 'd-none';} ?>">
                        <!-- <div class="card-header">
                            <a href="/admin/createPage" class="btn btn-success">+ Create New Blog</a>
                        </div> -->
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Role</th>
                                        <th>Joined Date</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                        $i=1;
                                        // if(empty($_GET["pageno"]) || request("pageno") == 1 ){
                                        //     $i = 1;
                                        // }else {
                                        //     $i = (request("pageno")*2)+(request("pageno")-2);
                                        //     $i=request("pageno");
                                        // }
 
                                        foreach($users as $user):
                                    ?>
                                    <tr>
                                        <td><?= $i ?></td>
                                        <td><?= escape($user->name) ?></td>
                                        <td><?= escape($user->email) ?></td>
                                        <td>
                                            <?php 
                                                if($user->role === 0){ echo "Admin"; }else{ echo "Normal user"; }
                                            ?>
                                        </td>
                                        <td>
                                            <?= Date('d M, Y - g:i A', strtotime($user->created_at)) ?>
                                        </td>
                                        <td>
                                            <div class="btn-group <?php if($user->id === $_SESSION["id"]){ echo "d-none"; } ?>">
                                                <div class="container <?php if($user->role ===1){ echo "d-none"; } ?>">
                                                    <form action="/admin/changeRole?id=<?= $user->id ?>" method="post">
                                                        <input type="hidden" name="role" value=<?= $user->role ?> >
                                                        <button type="submit"
                                                            class="btn btn-danger text-white" style="width: 200px;"
                                                            onclick="return confirm('Do you really want to remove <?= escape($user->name) ?> from admin list?')"
                                                        >Remove from admin list</button>
                                                    </form>
                                                </div>
                                                <div class="container <?php if($user->role ===0){ echo "d-none"; } ?>">
                                                    <form action="/admin/changeRole?id=<?= $user->id ?>" method="post">
                                                        <input type="hidden" name="role" value=<?= $user->role ?> >
                                                        <button type="submit"
                                                            class="btn btn-primary text-white" style="width: 200px;"
                                                            onclick="return confirm('Do you really want to add <?= escape($user->name) ?> to admin list?')"
                                                        >Add to admin list</button>
                                                    </form>
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

                        <?php 
                            $search = !empty($_GET["searchKey"])? "/search?searchKey=".request("searchKey")."&" : "?";
                        
                        ?>

                        <!-- Paginator -->
                        <div class="card-footer clearfix <?php if($totalPages<=1){ echo "d-none"; } ?>">
                            <ul class="pagination pagination-sm m-0 float-right">
                                <li class="page-item <?php if($pageno == 1){ echo "d-none"; } ?>">
                                    <a class="page-link" href="/admin/users<?php echo $search ?>">&laquo;</a>
                                </li>
                                
                                <li class="page-item <?php if($pageno == 1){ echo "d-none"; } ?>">
                                    <a class="page-link" href="<?= '/admin/users'.$search.'pageno='.$pageno-1 ?>" ><</a>
                                </li>
                                
                                <li class="page-item <?php if($pageno == $totalPages && $totalPages >=3 ){ echo "d-block"; }else{ echo "d-none";} ?>">
                                    <a class="page-link" href= "<?= '/admin/users'.$search.'pageno='.$pageno-2 ?>" ><?= $pageno-2 ?></a>
                                </li>
                                
                                <li class="page-item <?php if($pageno == 1){ echo "d-none"; } ?>">
                                    <a class="page-link" href= "<?= '/admin/users'.$search.'pageno='.$pageno-1 ?>" ><?= $pageno-1 ?></a>
                                </li>
                                
                                <li class="page-item disabled">
                                    <a class="page-link bg-primary text-whit" href="<?= '/admin'.$search.'pageno='.$pageno ?>"><?= $pageno ?></a>
                                </li>
                                
                                <li class="page-item <?php if($pageno == $totalPages){ echo "d-none"; } ?>">
                                    <a class="page-link" href="<?= '/admin/users'.$search.'pageno='.$pageno+1 ?>"><?= $pageno+1 ?></a>
                                </li>
                                
                                <li class="page-item <?php if($pageno == 1 && $totalPages >= 3){ echo "d-block";}else{ echo "d-none"; } ?>">
                                    <a class="page-link" href= "<?= '/admin/users'.$search.'pageno='.$pageno+2 ?>" ><?= $pageno+2 ?></a>
                                </li>
                                
                                <li class="page-item <?php if($pageno == $totalPages){ echo "d-none"; } ?>">
                                    <a class="page-link" href="<?= '/admin/users'.$search.'pageno='.$pageno+1 ?>">></a>
                                </li>
                                
                                <li class="page-item <?php if($pageno == $totalPages){ echo "d-none"; } ?>">
                                    <a class="page-link" href="<?= '/admin/users'.$search.'pageno='.$totalPages ?>">&raquo;</a>
                                </li>
                            </ul>
                        </div>
                        <!-- Paginator -->

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