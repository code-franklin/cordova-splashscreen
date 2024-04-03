<style>
  .user-img{
        position: absolute;
        height: 30px;
        width: 30px;
        object-fit: cover;
        left: -7%;
        bottom: 0px;
        
  }
  .btn-rounded{
        border-radius: 50px;
  }

  .nav-item2 {
    position: absolute;
    left: 1380px;
    bottom: 855px
  }

 .nav-bar {
  background: black;
  padding-top: 20px;
  padding-bottom: 20px;

 }

 li {
  margin-left: 200px;
  font-size: 20px;
 }
</style>
<!-- Navbar -->
    
      <nav class="nav-bar">
                   <ul class="nav nav-pills nav-sidebar text-sm nav-compact nav-flat nav-child-indent nav-collapse-hide-child" data-widget="treeview" role="menu" data-accordion="false">
                    <li class="nav-item dropdown">
                      <a href="./" class="nav-link nav-home">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                          Dashboard
                        </p>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="<?php echo base_url ?>admin/?page=reservations" class="nav-link nav-reservations">
                        <i class="nav-icon fas fa-table"></i>
                        <p>
                          Reservation List
                        </p>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="<?php echo base_url ?>admin/?page=inquiries" class="nav-link nav-inquiries">
                        <i class="nav-icon fas fa-question-circle"></i>
                        <p>
                          Inquiries
                        </p>
                      </a>
                    </li>
                    
                    <!-- <li class="nav-header">Reports</li>
                    <li class="nav-item dropdown">
                      <a href="<?php echo base_url ?>admin/?page=reports" class="nav-link nav-reports">
                        <i class="nav-icon fas fa-file"></i>
                        <p>
                          Reservation Report
                        </p>
                      </a>
                    </li> -->
                    <?php if($_settings->userdata('type') == 1): ?>
                      
                    
                   
                    <li class="nav-item dropdown">
                      <a href="<?php echo base_url ?>admin/?page=user/list" class="nav-link nav-user_list">
                        <i class="nav-icon fas fa-users-cog"></i>
                        <p>
                          User List
                        </p>
                      </a>
                    </li>
                    <!-- <li class="reservationlist-button">
                      <a href="<?php echo base_url ?>admin/?page=rooms" class="nav-link nav-rooms">
                      
                      </a>
                    </li> -->
                    <?php endif; ?>
                
                  </ul>
                </nav>

                <li class="nav-item2">
            <div class="btn-group nav-link">
                  <button type="button" class="btn btn-rounded badge badge-light dropdown-toggle dropdown-icon" data-toggle="dropdown">
                    <span><img src="<?php echo validate_image($_settings->userdata('avatar')) ?>" class="img-circle elevation-2 user-img" alt="User Image"></span>
                    <span class="ml-3"><?php echo ucwords($_settings->userdata('firstname').' '.$_settings->userdata('lastname')) ?></span>
                    <span class="sr-only">Toggle Dropdown</span>
                  </button>
                  <div class="dropdown-menu" role="menu">
                    <a class="dropdown-item" href="<?php echo base_url.'admin/?page=user' ?>"><span class="fa fa-user"></span> My Account</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="<?php echo base_url.'/classes/Login.php?f=logout' ?>"><span class="fas fa-sign-out-alt"></span> Logout</a>
                  </div>
              </div>
          </li>
    
        <!-- Left navbar links -->
       
          <!-- Navbar Search -->
          <!-- <li class="nav-item">
            <a class="nav-link" data-widget="navbar-search" href="#" role="button">
            <i class="fas fa-search"></i>
            </a>
            <div class="navbar-search-block">
              <form class="form-inline">
                <div class="input-group input-group-sm">
                  <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
                  <div class="input-group-append">
                    <button class="btn btn-navbar" type="submit">
                    <i class="fas fa-search"></i>
                    </button>
                    <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                    <i class="fas fa-times"></i>
                    </button>
                  </div>
                </div>
              </form>
            </div>
          </li> -->
          <!-- Messages Dropdown Menu -->
         
         <!--  <li class="nav-item">
            <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
            <i class="fas fa-th-large"></i>
            </a>
          </li> -->
        
         
      <!-- /.navbar -->