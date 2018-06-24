
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
    <section id="wrapper" class="login-register login-sidebar"  style="background-image:url(./public/img/backgrounds/register.jpg);">
  <div class="login-box card">
    <div class="card-body">
      <form class="form-horizontal form-material" id="loginform" action="./show.php" method="post">
        <a href="javascript:void(0)" class="text-center db"><img src="./public/img/logo-icon.png" alt="Home" /><br/><img src="./public/img/logo-text.png" alt="Home" /></a>
        <h3 class="box-title m-t-40 m-b-0">Register Now</h3><small>Create your account and enjoy</small>
        <div class="form-group m-t-20">
          <div class="col-xs-12">
            <input class="form-control" type="text" required="" name="username" placeholder="Username">
          </div>
        </div>
        <div class="form-group m-t-20">
          <div class="row">
            <div class="col-6">
              <input class="form-control" type="text" required="" name="name[0][first]" placeholder="First Name">
            </div>
            <div class="col-6">
              <input class="form-control" type="text" required="" name="name[0][last]"placeholder="Last Name">
            </div>
          </div>
        </div>
        <div class="form-group ">
          <div class="col-xs-12">
            <input class="form-control" type="text" required="" name="email" placeholder="Email">
          </div>
        </div>
        <div class="form-group ">
          <div class="col-xs-12">
            <input class="form-control" type="password" required="" name="password" placeholder="Password">
          </div>
        </div>
        <div class="form-group">
          <div class="col-xs-12">
            <input class="form-control" type="password" required="" name="confirmpwd"placeholder="Confirm Password">
            <input hidden class="form-control" type="text" required="" name="token" value="token">
          </div>
        </div>
        <div class="form-group">
          <div class="col-md-12">
            <div class="checkbox checkbox-primary p-t-0">
              <input id="checkbox-signup" type="checkbox">
              <label for="checkbox-signup"> I agree to all <a href="#">Terms</a></label>
            </div>
          </div>
        </div>
        <div class="form-group text-center m-t-20">
          <div class="col-xs-12">
            <input hidden type="text" name="t" value="register"/>
            <button class="btn btn-info btn-lg btn-block text-uppercase waves-effect waves-light" type="submit">Sign Up</button>
          </div>
        </div>
        <div class="form-group m-b-0">
          <div class="col-sm-12 text-center">
            <p>Already have an account? <a href="../login.php" class="text-info m-l-5"><b>Sign In</b></a></p>
          </div>
        </div>
      </form>
    </div>
  </div>
</section>
