<!-- ============================================================== -->
<!-- Left Sidebar - style you can find in sidebar.scss  -->
<!-- ============================================================== -->
<aside class="left-sidebar">
    <!-- Sidebar scroll-->
    <div class="scroll-sidebar">
        <!-- User profile -->
        <div class="user-profile" style="background-image: url(./public/img/backgrounds/user-info.png);">
            <!-- User profile image -->
            <div class="profile-img"> <img src="./public/img/users/1.png" alt="user" /> </div>
            <!-- User profile text-->
            <div class="profile-text">
              <a href="#" class="dropdown-toggle u-dropdown" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true"><?php echo($currentUser['name'][0]['first'].' '.$currentUser['name'][0]['last']); ?></a>
              <div class="dropdown-menu animated flipInY">
                <a href="#" class="dropdown-item"><i class="ti-user"></i> My Profile</a>
                <a href="#" class="dropdown-item"><i class="ti-wallet"></i> My Wage</a>
                <a href="#" class="dropdown-item"><i class="ti-email"></i> Inbox</a>
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item"><i class="ti-settings"></i> Account Setting</a>
                <div class="dropdown-divider"></div>
                <a href="login.html" class="dropdown-item"><i class="fa fa-power-off"></i> Logout</a>
              </div>
            </div>
        </div>
        <!-- End User profile text-->
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav">
            <ul id="sidebarnav">
                <li class="nav-small-cap text-uppercase">PERSONAL</li>
                <li>
                  <a class="waves-effect waves-dark" href="./dashboard.php">
                    <i class="mdi mdi-gauge"></i><span class="hide-menu">Dashboard </span>
                  </a>
                </li>
                <li>
                  <a class="waves-effect waves-dark" href="./calendar.php">
                    <i class="mdi mdi-calendar"></i><span class="hide-menu">Calendar </span>
                  </a>
                </li>
                <li>
                  <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false">
                    <i class="mdi mdi-briefcase"></i><span class="hide-menu">Jobs</span>
                  </a>
                  <ul aria-expanded="false" class="collapse">
                    <li><a href="widget-apps.html">Active</a></li>
                    <li><a href="widget-data.html">Pending</a></li>
                    <li><a href="widget-charts.html">Available</a></li>
                    <li><a href="widget-charts.html">Completed</a></li>
                  </ul>
                </li>
                <li class="nav-devider"></li>
                <li class="nav-small-cap text-uppercase">Company Sites</li>
                <li>
                  <a class="waves-effect waves-dark" href="https://piwik.kitechlimited.co.uk">
                    <i class="mdi mdi-gauge"></i><span class="hide-menu">Analytics</span>
                  </a>
                </li>
                <li>
                  <a class="waves-effect waves-dark" href="https://invoice.kitechlimited.co.uk">
                    <i class="mdi mdi-gauge"></i><span class="hide-menu">Invoice Ninja</span>
                  </a>
                </li>
                <li>
                  <a class="waves-effect waves-dark" href="https://hr.kitechlimited.co.uk">
                    <i class="mdi mdi-gauge"></i><span class="hide-menu">People Operations</span>
                  </a>
                </li>
                <li>
                  <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false">
                    <i class="mdi mdi-widgets"></i><span class="hide-menu">Social Media</span>
                  </a>
                  <ul aria-expanded="false" class="collapse">
                    <li><a href="https://facebook.com/kitechuk" target="_blank">Facebook</a></li>
                    <li><a href="https://Twitter.com/kitechuk" target="_blank">Twitter</a></li>
                    <li><a href="https://instagram.com/kitechuk" target="_blank">Instagram</a></li>
                    <li><a href="https://plus.google.com/+kitechuk" target="_blank">Google+</a></li>
                    <li><a href="https://youtube.com/kitechuk" target="_blank">Youtube</a></li>
                  </ul>
                </li>
                <li>
                  <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false">
                    <i class="mdi mdi-widgets"></i><span class="hide-menu">Service Desk</span>
                  </a>
                  <ul aria-expanded="false" class="collapse">
                    <li><a href="https://support.kitechlimited.co.uk" target="_blank">Clients</a></li>
                    <li><a href="https://support.kitechlimited.co.uk/scp" target="_blank">Staff</a></li>
                  </ul>
                </li>
                <li class="nav-devider"></li>
                <li class="nav-small-cap text-uppercase">Messenger</li>
                <li>
                  <a class="waves-effect waves-dark" href="https://chat.lechateaux.uk">
                    <i class="mdi mdi-gauge"></i><span class="hide-menu">Ki Chat</span>
                  </a>
                </li>
                <li class="nav-devider text-uppercase"></li>
                <li class="nav-small-cap text-uppercase">Entertainment</li>
                <li>
                  <a class="waves-effect waves-dark" href="https://plex.lechateaux.uk" target="_blank">
                    <i class="mdi mdi-video"></i><span class="hide-menu">Plex </span>
                  </a>
                </li>
                <li>
                  <a class="waves-effect waves-dark" href="https://netflix.co.uk" target="_blank">
                    <i class="mdi mdi-video"></i><span class="hide-menu">Netflix </span>
                  </a>
                </li>
            </ul>
        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
    <!-- Bottom points-->
    <div class="sidebar-footer">
        <!-- item-->
        <a href="" class="link" data-toggle="tooltip" title="Settings"><i class="ti-settings"></i></a>
        <!-- item-->
        <a href="" class="link" data-toggle="tooltip" title="Email"><i class="mdi mdi-gmail"></i></a>
        <!-- item-->
        <a href="./" class="link" data-toggle="tooltip" title="Logout"><i class="mdi mdi-power"></i></a>
    </div>
    <!-- End Bottom points-->
</aside>
<!-- ============================================================== -->
<!-- End Left Sidebar - style you can find in sidebar.scss  -->
<!-- ============================================================== -->
