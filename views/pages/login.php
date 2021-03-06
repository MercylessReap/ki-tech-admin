
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader" style="display: none;">
        <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10"></circle> </svg>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
  <section id="wrapper" class="login-register login-sidebar" style="background-image:url(./public/img/backgrounds/login.jpg);">
  <div class="login-box card">
    <div class="card-body">
      <form class="form-horizontal form-material" id="loginform" action="show.php" method="post">
        <a href="javascript:void(0)" class="text-center db">
          <img src="./public/img/logo-icon.png" alt="Home" style="height: 30px;width: 30px;"><br>
          <img src="./public/img/logo-text.png" alt="Home" style="height: 20px;">
        </a>
        <div class="form-group m-t-40">
          <div class="col-xs-12">
            <input class="form-control" type="text" required="" name="email" placeholder="Username/Email">
          </div>
        </div>
        <div class="form-group">
          <div class="col-xs-12">
            <input class="form-control" type="password" required="" name="password" placeholder="Password">
          </div>
        </div>
        <div class="form-group">
          <div class="col-md-12">
            <div class="checkbox checkbox-primary pull-left p-t-0">
              <input id="checkbox-signup" type="checkbox">
              <label for="checkbox-signup"> Remember me </label>
            </div>
            <a href="javascript:void(0)" id="to-recover" class="text-dark pull-right"><i class="fa fa-lock m-r-5"></i> Forgot pwd?</a> </div>
        </div>
        <div class="form-group text-center m-t-20">
          <div class="col-xs-12">
            <input hidden type="text" name="t" value="login"/>
            <button class="btn btn-info btn-lg btn-block text-uppercase waves-effect waves-light" type="submit">Log In</button>
          </div>
        </div>
        <div class="row">

        </div>

      </form>
      <form class="form-horizontal" id="recoverform" action="dashboard.php">
        <div class="form-group ">
          <div class="col-xs-12">
            <h3>Recover Password</h3>
            <p class="text-muted">Enter your Email and instructions will be sent to you! </p>
          </div>
        </div>
        <div class="form-group ">
          <div class="col-xs-12">
            <input class="form-control" type="text" required="" placeholder="Email">
          </div>
        </div>
        <div class="form-group text-center m-t-20">
          <div class="col-xs-12">
            <input hidden type="text" name="t" value="login"/>
            <button class="btn btn-primary btn-lg btn-block text-uppercase waves-effect waves-light" type="submit">Reset</button>
          </div>
        </div>
      </form>
    </div>
  </div>
</section>
