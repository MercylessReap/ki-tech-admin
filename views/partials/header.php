<?php if(!check_cookie()){header('Location:../?err=1');}; ?>
<!-- ============================================================== -->
<!-- Topbar header - style you can find in pages.scss -->
<!-- ============================================================== -->
<header class="topbar">
  <nav class="navbar top-navbar navbar-expand-md navbar-light">
    <!-- ============================================================== -->
    <!-- Logo -->
    <!-- ============================================================== -->
    <div class="navbar-header">
      <a class="navbar-brand" href="./dashboard.php">
        <!-- Logo icon -->
        <b>
          <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
          <!-- Dark Logo icon -->
          <img src="./public/img/logo-icon.png" alt="homepage" class="dark-logo" />
          <!-- Light Logo icon -->
          <img src="./public/img/logo-light-icon.png" alt="homepage" class="light-logo" />
        </b>
        <!--End Logo icon -->
        <!-- Logo text -->
        <span>
          <!-- dark Logo text -->
          <img src="./public/img/logo-text.png" alt="homepage" class="dark-logo" />
          <!-- Light Logo text -->
          <img src="./public/img/logo-light-text.png" class="light-logo" alt="homepage" />
        </span>
      </a>
    </div>
    <!-- ============================================================== -->
    <!-- End Logo -->
    <!-- ============================================================== -->
    <div class="navbar-collapse">
      <!-- ============================================================== -->
      <!-- toggle and nav items -->
      <!-- ============================================================== -->
      <ul class="navbar-nav mr-auto mt-md-0">
        <!-- This is  -->
        <li class="nav-item"> <a class="nav-link nav-toggler hidden-md-up text-muted waves-effect waves-dark" href="javascript:void(0)"><i class="mdi mdi-menu"></i></a> </li>
        <li class="nav-item"> <a class="nav-link sidebartoggler hidden-sm-down text-muted waves-effect waves-dark" href="javascript:void(0)"><i class="ti-menu"></i></a> </li>
        <!-- ============================================================== -->
        <!-- Search -->
        <!-- ============================================================== -->
        <li class="nav-item hidden-sm-down search-box">
          <a class="nav-link hidden-sm-down text-muted waves-effect waves-dark" href="javascript:void(0)"><i class="ti-search"></i></a>
          <form class="app-search">
            <input type="text" class="form-control" placeholder="Search & enter">
            <a class="srh-btn"><i class="ti-close"></i></a>
          </form>
        </li>
        <!-- ============================================================== -->
        <!-- Messages -->
        <!-- ============================================================== -->
        <li class="nav-item dropdown mega-dropdown">
          <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="mdi mdi-view-grid"></i></a>
          <div class="dropdown-menu scale-up-left">
            <ul class="mega-dropdown-menu row">
              <li class="col-lg-3 col-xlg-2 m-b-30">
                <h4 class="m-b-20"><a href="javascript:void(0)">Alerts</a></h4>
                <!-- CAROUSEL -->
                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                  <div class="carousel-inner" role="listbox">
                    <div class="carousel-item active">
                      <div class="container">
                        <img class="d-block img-fluid" src="./material-pro/assets/images/big/img1.jpg" alt="First slide">
                      </div>
                    </div>
                    <div class="carousel-item">
                      <div class="container">
                        <img class="d-block img-fluid" src="./material-pro/assets/images/big/img2.jpg" alt="Second slide">

                      </div>
                    </div>
                    <div class="carousel-item">
                      <div class="container">
                        <img class="d-block img-fluid" src="./material-pro/assets/images/big/img3.jpg" alt="Third slide">
                      </div>
                    </div>
                    <div class="carousel-item">
                      <div class="container">
                        <iframe frameborder="none" class="d-block iframe-fluid" src="https://www.youtube.com/embed/4_XQSweWT9U" alt="Third slide"></iframe>
                        Watch our theme music here or on youtube
                      </div>
                    </div>
                  </div>
                  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev"> <span class="carousel-control-prev-icon" aria-hidden="true"></span> <span class="sr-only">Previous</span> </a>
                  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next"> <span class="carousel-control-next-icon" aria-hidden="true"></span> <span class="sr-only">Next</span> </a>
                </div>
                <!-- End CAROUSEL -->
              </li>
              <li class="col-lg-3 m-b-30">
                <h4 class="m-b-20"><a href="javascript:void(0)">Holiday</a></h4>
                <!-- Accordian -->
                <div id="holidayAccordion" class="nav-accordion" role="tablist" aria-multiselectable="true">
                  <div class="card">
                    <div class="card-header" role="tab" id="acceptedHolidayHeading">
                      <h5 class="mb-0">
                        <a data-toggle="collapse" data-parent="#holidayAccordion" href="#acceptedHoliday" aria-expanded="true" aria-controls="acceptedHoliday">
                          Accepted
                        </a>
                      </h5>
                    </div>
                    <div id="acceptedHoliday" class="collapse show" role="tabpanel" aria-labelledby="acceptedHolidayHeading">
                      <div class="card-body">
                        <div class="row">
                          <p class="col-md-4"><a href="javascript:void(0)">12th Jun</a></p>
                          <p class="col-md-4"><a href="javascript:void(0)">15th Jul</a></p>
                          <p class="col-md-4"><a href="javascript:void(0)">31st Oct</a></p>
                          <small class="col-md-12">10 days holiday available</small>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="card">
                    <div class="card-header" role="tab" id="pendingHolidayHeading">
                      <h5 class="mb-0">
                        <a class="collapsed" data-toggle="collapse" data-parent="#holidayAccordion" href="#pendingHoliday" aria-expanded="false" aria-controls="pendingHoliday">
                          Pending
                        </a>
                      </h5>
                    </div>
                    <div id="pendingHoliday" class="collapse" role="tabpanel" aria-labelledby="pendingHolidayHeading">
                      <div class="card-body">
                        <div class="row">
                          <p class="col-md-4"><a href="javascript:void(0)">12th Jun</a></p>
                          <p class="col-md-4"><a href="javascript:void(0)">15th Jul</a></p>
                          <p class="col-md-4"><a href="javascript:void(0)">31st Oct</a></p>
                          <small class="col-md-12">5 days holiday pending</small>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="card">
                    <div class="card-header" role="tab" id="rejectedHolidayHeading">
                      <h5 class="mb-0">
                        <a class="collapsed" data-toggle="collapse" data-parent="#holidayAcordion" href="#rejectedHoliday" aria-expanded="false" aria-controls="rejectedHoliday">
                          Rejected
                        </a>
                      </h5>
                    </div>
                    <div id="rejectedHoliday" class="collapse" role="tabpanel" aria-labelledby="rejectedHolidayHeading">
                      <div class="card-body">
                        <div class="row">
                          <p class="col-md-4"><a href="javascript:void(0)">12th Jun</a></p>
                          <p class="col-md-4"><a href="javascript:void(0)">15th Jul</a></p>
                          <p class="col-md-4"><a href="javascript:void(0)">31st Oct</a></p>
                          <small class="col-md-12">3 days holiday rejected</small>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </li>
              <li class="col-lg-3  m-b-30">
                <h4 class="m-b-20"><a href="javascript:void(0)">Who is not in today!</a></h4>
                <div class="card">
                  <!-- Nav tabs -->
                  <ul class="nav nav-tabs customtab" role="tablist">
                    <li>
                      <a class="nav-link active show" data-toggle="tab" href="#lateTab" role="tab" aria-selected="true">
                        Late
                      </a>
                    </li>
                    <li>
                      <a class="nav-link" data-toggle="tab" href="#absentTab" role="tab" aria-selected="false">
                        Absent
                      </a>
                    </li>
                    <li>
                      <a class="nav-link" data-toggle="tab" href="#sickTab" role="tab" aria-selected="false">
                        Sick
                      </a>
                    </li>
                    <li>
                      <a class="nav-link" data-toggle="tab" href="#holidayTab" role="tab" aria-selected="false">
                        Holiday
                      </a>
                    </li>
                  </ul>
                  <!-- Tab panes -->
                  <div class="tab-content">
                    <div class="tab-pane active show" id="lateTab" role="tabpanel">
                      <div class="p-20">
                        <h3>Smooth Machine</h3>
                        <h4>No Reported Lates</h4>
                        <p>Never miss popos training.</p>
                      </div>
                    </div>
                    <div class="tab-pane p-20" id="absentTab" role="tabpanel">
                      <div class="row">
                        <p class="col-md-6">robert </p>
                        <p class="col-md-6">Sam</p>
                        <small class="col-md-12">2 people are absent</small>
                      </div>
                    </div>
                    <div class="tab-pane p-20" id="sickTab" role="tabpanel">
                      <div class="row">
                        <p class="col-md-6">Tasha</p>
                        <p class="col-md-6">Abigal</p>
                        <small class="col-md-12">2 people are sick</small>
                      </div>
                    </div>
                    <div class="tab-pane p-20" id="holidayTab" role="tabpanel">
                      <div class="row">
                        <p class="col-md-4">Susan</p>
                        <p class="col-md-4">Liam</p>
                        <small class="col-md-12">2 people are on holiday</small>
                      </div>
                    </div>
                  </div>
                </div>

              </li>
              <li class="col-lg-3 col-xlg-4 m-b-30">
                <h4 class="m-b-20"><a href="javascript:void(0)">Tasks</a></h4>
                <!-- List style -->
                <ul class="list-style-none">
                  <li><a href="javascript:void(0)"><i class="fa fa-check text-success"></i> Update Kitech landing frontend</a></li>
                  <li><a href="javascript:void(0)"><i class="fa fa-check text-success"></i> create node api backend</a></li>
                  <li><a href="javascript:void(0)"><i class="fa fa-check text-success"></i> implement jwt for authentication</a></li>
                  <li><a href="javascript:void(0)"><i class="fa fa-check text-success"></i> think of things this admin page needs</a></li>
                  <li><a href="javascript:void(0)"><i class="fa fa-check text-success"></i> relax with a cool beverage</a></li>
                </ul>
              </li>
            </ul>
          </div>
        </li>
                <!-- ============================================================== -->
                <!-- End Messages -->
                <!-- ============================================================== -->
            </ul>
            <!-- ============================================================== -->
            <!-- User profile and search -->
            <!-- ============================================================== -->
            <ul class="navbar-nav my-lg-0">
                <!-- ============================================================== -->
                <!-- Comment -->
                <!-- ============================================================== -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-muted text-muted waves-effect waves-dark" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="mdi mdi-bell"></i>
                        <div class="notify"> <span class="heartbit"></span> <span class="point"></span> </div>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right mailbox scale-up">
                        <ul>
                            <li>
                                <div class="drop-title">Notifications</div>
                            </li>
                            <li>
                                <div class="message-center">
                                    <!-- Message -->
                                    <a href="#">
                                        <div class="btn btn-danger btn-circle"><i class="fa fa-link"></i></div>
                                        <div class="mail-contnet">
                                            <h5>Luanch Admin</h5> <span class="mail-desc">Just see the my new admin!</span> <span class="time">9:30 AM</span> </div>
                                    </a>
                                    <!-- Message -->
                                    <a href="#">
                                        <div class="btn btn-success btn-circle"><i class="ti-calendar"></i></div>
                                        <div class="mail-contnet">
                                            <h5>Event today</h5> <span class="mail-desc">Just a reminder that you have event</span> <span class="time">9:10 AM</span> </div>
                                    </a>
                                    <!-- Message -->
                                    <a href="#">
                                        <div class="btn btn-info btn-circle"><i class="ti-settings"></i></div>
                                        <div class="mail-contnet">
                                            <h5>Settings</h5> <span class="mail-desc">You can customize this template as you want</span> <span class="time">9:08 AM</span> </div>
                                    </a>
                                    <!-- Message -->
                                    <a href="#">
                                        <div class="btn btn-primary btn-circle"><i class="ti-user"></i></div>
                                        <div class="mail-contnet">
                                            <h5>Pavan kumar</h5> <span class="mail-desc">Just see the my admin!</span> <span class="time">9:02 AM</span> </div>
                                    </a>
                                </div>
                            </li>
                            <li>
                                <a class="nav-link text-center" href="javascript:void(0);"> <strong>Check all notifications</strong> <i class="fa fa-angle-right"></i> </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <!-- ============================================================== -->
                <!-- End Comment -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Messages -->
                <!-- ============================================================== -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark" href="" id="2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="mdi mdi-email"></i>
                        <div class="notify"> <span class="heartbit"></span> <span class="point"></span> </div>
                    </a>
                    <div class="dropdown-menu mailbox dropdown-menu-right scale-up" aria-labelledby="2">
                        <ul>
                            <li>
                                <div class="drop-title">You have 4 new messages</div>
                            </li>
                            <li>
                                <div class="message-center">
                                    <!-- Message -->
                                    <a href="#">
                                        <div class="user-img"> <img src="./public/img/users/2.png" alt="user" class="img-circle"> <span class="profile-status online pull-right"></span> </div>
                                        <div class="mail-contnet">
                                            <h5>Pavan kumar</h5> <span class="mail-desc">Just see the my admin!</span> <span class="time">9:30 AM</span> </div>
                                    </a>
                                    <!-- Message -->
                                    <a href="#">
                                        <div class="user-img"> <img src="./public/img/users/3.png" alt="user" class="img-circle"> <span class="profile-status busy pull-right"></span> </div>
                                        <div class="mail-contnet">
                                            <h5>Sonu Nigam</h5> <span class="mail-desc">I've sung a song! See you at</span> <span class="time">9:10 AM</span> </div>
                                    </a>
                                    <!-- Message -->
                                    <a href="#">
                                        <div class="user-img"> <img src="./public/img/users/4.png" alt="user" class="img-circle"> <span class="profile-status away pull-right"></span> </div>
                                        <div class="mail-contnet">
                                            <h5>Arijit Sinh</h5> <span class="mail-desc">I am a singer!</span> <span class="time">9:08 AM</span> </div>
                                    </a>
                                    <!-- Message -->
                                    <a href="#">
                                        <div class="user-img"> <img src="./public/img/users/5.png" alt="user" class="img-circle"> <span class="profile-status offline pull-right"></span> </div>
                                        <div class="mail-contnet">
                                            <h5>Connor Bayliss</h5> <span class="mail-desc">Just see the my admin!</span> <span class="time">9:02 AM</span> </div>
                                    </a>
                                </div>
                            </li>
                            <li>
                                <a class="nav-link text-center" href="javascript:void(0);"> <strong>See all e-Mails</strong> <i class="fa fa-angle-right"></i> </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <!-- ============================================================== -->
                <!-- End Messages -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Profile -->
                <!-- ============================================================== -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="./public/img/users/1.png" alt="user" class="profile-pic" /></a>
                    <div class="dropdown-menu dropdown-menu-right scale-up">
                        <ul class="dropdown-user">
                            <li>
                                <div class="dw-user-box">
                                    <div class="u-img"><img src="./public/img/users/1.png" alt="user"></div>
                                    <div class="u-text">
                                      <h4><?php echo($_SESSION['username']); ?></h4>
                                      <p class="text-muted"><?php echo($_SESSION['firstname'].' '.$_SESSION['lastname']); ?></p>
                                      <a href="./profile.php?<?php echo ($_SESSION['uid']);?>" class="btn btn-rounded btn-danger btn-sm">View Profile</a>
                                    </div>
                                </div>
                            </li>
                            <li role="separator" class="divider"></li>
                            <li><a href="./profile.php?<?php echo ($_SESSION['uid']);?>"><i class="ti-user"></i> My Profile</a></li>
                            <li><a href="#"><i class="ti-wallet"></i> My Wage</a></li>
                            <li><a href="#"><i class="ti-email"></i> Inbox</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="#"><i class="ti-settings"></i> Account Setting</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="./logout.php"><i class="fa fa-power-off"></i> Logout</a></li>
                        </ul>
                    </div>
                </li>
                <!-- ============================================================== -->
                <!-- Language -->
                <!-- ============================================================== -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="flag-icon flag-icon-us"></i></a>
                    <div class="dropdown-menu dropdown-menu-right scale-up"> <a class="dropdown-item" href="#"><i class="flag-icon flag-icon-in"></i> India</a> <a class="dropdown-item" href="#"><i class="flag-icon flag-icon-fr"></i> French</a> <a class="dropdown-item" href="#"><i class="flag-icon flag-icon-cn"></i> China</a> <a class="dropdown-item" href="#"><i class="flag-icon flag-icon-de"></i> Dutch</a> </div>
                </li>
            </ul>
        </div>
    </nav>
</header>
<!-- ============================================================== -->
<!-- End Topbar header -->
<!-- ============================================================== -->
