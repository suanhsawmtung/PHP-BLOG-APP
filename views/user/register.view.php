<?php 

require "views/partials/header.view.php";


?>

<!-- Alert -->
<!-- <?php if(isset($_SESSION["error"])): ?>
<div class="container-fluid p-0 position-fixed" style="top: 20px; z-index: 222222;">
    <div class="row m-0 p-0">
        <div class="alert alert-warning alert-dismissible col-5 offset-6" role="alert">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <?php 
                echo $_SESSION["error"];
                unset($_SESSION["error"]);
            ?>
        </div>
    </div>
</div>
<?php  endif ?> -->


<!-- Content Wrapper. Contains page content -->
<div style="background-color: #e9ecef;"
    class="vw-100 vh-100 d-flex justify-content-center align-items-center"
>

<?php 
    $sessionName = isset($_SESSION['name'])? $_SESSION['name'] : "";
    $sessionEmail = isset($_SESSION['email'])? $_SESSION['email'] : "";
    $sessionPassword = isset($_SESSION['password'])? $_SESSION['password']: "";
    $confirmPassword = "";
?>

<div class="login-box">
      <!-- /.login-logo -->
      <div class="card card-outline card-primary">
        <div class="card-header text-center">
          <a href="../../index2.html" class="h1"><b>Register</b>Page</a>
        </div>
        <div class="card-body">
          <p class="login-box-msg">Register to start your session</p>

          <form action="/register" method="post">
          <small class="text-danger">
              <?php 
                  if(isset($_SESSION["nameError"])){
                      echo $_SESSION["nameError"];
                      unset($_SESSION["nameError"]);
                  }
              ?>
          </small>
          <div class="input-group mb-3">
              <input type="name" class="form-control" name="name" placeholder="Username" value="<?= $sessionName ?>" >
              <div class="input-group-append">
                <div class="input-group-text">
                  <span class="fas fa-user"></span>
                </div>
              </div>
            </div>

            <small class="text-danger">
                <?php 
                    if(isset($_SESSION["emailError"])){
                        echo $_SESSION["emailError"];
                        unset($_SESSION["emailError"]);
                    }
                ?>
            </small>
            <div class="input-group mb-3">
              <input type="email" class="form-control" name="email" placeholder="Email" value="<?= $sessionEmail ?>" >
              <div class="input-group-append">
                <div class="input-group-text">
                  <span class="fas fa-envelope"></span>
                </div>
              </div>
            </div>

            <small class="text-danger">
                <?php 
                    if(isset($_SESSION["passwordError"])){
                        echo $_SESSION["passwordError"];
                        unset($_SESSION["passwordError"]);
                    }
                ?>
            </small>
            <div class="input-group mb-3">
              <input type="password" class="form-control" name="password" placeholder="Password" value="<?= $sessionPassword ?>" >
              <div class="input-group-append">
                <div class="input-group-text">
                  <span class="fas fa-lock"></span>
                </div>
              </div>
            </div>

            <small class="text-danger">
                <?php 
                    if(isset($_SESSION["confirmPasswordError"])){
                        echo $_SESSION["confirmPasswordError"];
                        unset($_SESSION["confirmPasswordError"]);
                    }
                ?>
            </small>
            <div class="input-group mb-3">
              <input type="password" class="form-control" name="confirm_password" placeholder="Confirm Password" value="<?= $confirmPassword ?>" >
              <div class="input-group-append">
                <div class="input-group-text">
                  <span class="fas fa-lock"></span>
                </div>
              </div>
            </div>
            <!-- <div class="row">
              <div class="col-8">
                <div class="icheck-primary">
                  <input type="checkbox" id="remember">
                  <label for="remember">
                    Remember Me
                  </label>
                </div>
              </div> -->
              <!-- /.col -->
              <div class="col-4 p-0 ">
                <button type="submit" class="btn btn-primary btn-block">Register</button>
              </div>
              <!-- /.col -->
            </div>
          </form>

          <?php 
              unset($_SESSION['name']);
              unset($_SESSION['email']);
              unset($_SESSION['password']);
          ?>

          <!-- <div class="social-auth-links text-center mt-2 mb-3">
            <a href="#" class="btn btn-block btn-primary">
              <i class="fab fa-facebook mr-2"></i> Sign in using Facebook
            </a>
            <a href="#" class="btn btn-block btn-danger">
              <i class="fab fa-google-plus mr-2"></i> Sign in using Google+
            </a>
          </div> -->
          <!-- /.social-auth-links -->

          <!-- <p class="mb-1">
            <a href="forgot-password.html">I forgot my password</a>
          </p>
          <p class="mb-0">
            <a href="register.html" class="text-center">Register a new membership</a>
          </p> -->
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
    </div>
    <!-- /.login-box -->
</div>
<!-- /.content-wrapper -->

</body>

</html>