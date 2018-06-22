<style>
.h_iframe {
/*  position: relative; */
  width: 100%;
  height: 100%;
  margin: 0 auto;
}

.h_iframe .ratio {
  display: block;
  width: 100%;
  height: auto;
}

.h_iframe iframe {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
}
</style>
<!-- ============================================================== -->
<!-- Container fluid  -->
<!-- ============================================================== -->
<div class="container-fluid">
  <!-- ============================================================== -->
  <!-- Bread crumb and right sidebar toggle -->
  <!-- ============================================================== -->
  <div class="row page-titles">
    <div class="col-md-5 col-8 align-self-center">
      <h3 class="text-themecolor"><?php echo $currentUser['username']?>'s Profile</h3>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
        <li class="breadcrumb-item active"><?php echo $currentUser['username']?>'s Profile</li>
      </ol>
    </div>
    <div class="col-md-7 col-4 align-self-center">
      <div class="d-flex m-t-10 justify-content-end">
        <div class="d-flex m-r-20 m-l-10 hidden-md-down">
          <div class="chart-text m-r-10">
            <h6 class="m-b-0"><small>THIS MONTH</small></h6>
            <h4 class="m-t-0 text-info">$58,356</h4>
          </div>
          <div class="spark-chart">
            <div id="monthchart"></div>
          </div>
        </div>
        <div class="d-flex m-r-20 m-l-10 hidden-md-down">
          <div class="chart-text m-r-10">
            <h6 class="m-b-0"><small>LAST MONTH</small></h6>
            <h4 class="m-t-0 text-primary">$48,356</h4>
          </div>
          <div class="spark-chart">
            <div id="lastmonthchart"></div>
          </div>
        </div>
        <div class="">
          <button class="right-side-toggle waves-effect waves-light btn-success btn btn-circle btn-sm pull-right m-l-10"><i class="ti-settings text-white"></i></button>
        </div>
      </div>
    </div>
  </div>
  <!-- Row -->
  <div class="row">
    <!-- Column -->

    <div class="col-lg-4 col-xlg-3 col-md-5">
    <!-- Column -->
    <div class="card">
      <img class="card-img-top" src="./material-pro/assets/images/background/profile-bg.jpg" alt="Card image cap">
      <div class="card-body little-profile text-center">
        <div class="pro-img"><img src="./material-pro/assets/images/users/4.jpg" alt="user"></div>
        <h3 class="m-b-0"><?php echo $currentUser['name'][0]['first'].' '.$currentUser['name'][0]['middle'].' '.$currentUser['name'][0]['last']?></h3>
        <p><?php echo $currentUser['department'][0]['position']?></p>
        <a href="javascript:void(0)" class="m-t-10 waves-effect waves-dark btn btn-primary btn-md btn-rounded">Follow</a>
        <div class="row text-center m-t-20">
          <div class="col-lg-4 col-md-4 m-t-20">
            <h3 class="m-b-0 font-light">1099</h3><small>Articles</small>
          </div>
          <div class="col-lg-4 col-md-4 m-t-20">
            <h3 class="m-b-0 font-light">23,469</h3><small>Followers</small>
          </div>
          <div class="col-lg-4 col-md-4 m-t-20">
            <h3 class="m-b-0 font-light">6035</h3><small>Following</small>
          </div>
        </div>
      </div>
    </div>
    <!-- Column -->
    <div class="card">
      <div class="card-body bg-info">
        <h4 class="text-white card-title">My Contacts</h4>
        <h6 class="card-subtitle text-white m-b-0 op-5">Checkout my contacts here</h6>
      </div>
      <div class="card-body">
        <div class="message-box contact-box">
          <h2 class="add-ct-btn"><button type="button" class="btn btn-circle btn-lg btn-success waves-effect waves-dark">+</button></h2>
          <div class="message-widget contact-widget">
          <!-- Message -->
            <a href="#">
              <div class="user-img">
                <img src="./material-pro/assets/images/users/1.jpg" alt="user" class="img-circle"> <span class="profile-status online pull-right"></span>
              </div>
              <div class="mail-contnet">
                <h5>Pavan kumar</h5> <span class="mail-desc">info@wrappixel.com</span>
              </div>
            </a>
            <!-- Message -->
            <a href="#">
              <div class="user-img">
                <img src="./material-pro/assets/images/users/2.jpg" alt="user" class="img-circle"> <span class="profile-status busy pull-right"></span>
              </div>
              <div class="mail-contnet">
                <h5>Sonu Nigam</h5> <span class="mail-desc">pamela1987@gmail.com</span>
              </div>
            </a>
            <!-- Message -->
            <a href="#">
              <div class="user-img">
                <span class="round">A</span> <span class="profile-status away pull-right"></span>
              </div>
              <div class="mail-contnet">
                <h5>Arijit Sinh</h5> <span class="mail-desc">cruise1298.fiplip@gmail.com</span>
              </div>
            </a>
            <!-- Message -->
            <a href="#">
              <div class="user-img">
                <img src="./material-pro/assets/images/users/4.jpg" alt="user" class="img-circle"> <span class="profile-status offline pull-right"></span>
              </div>
              <div class="mail-contnet">
                <h5>Pavan kumar</h5> <span class="mail-desc">kat@gmail.com</span>
              </div>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>
</div>
