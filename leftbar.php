 <!-- BEGIN SIDEBAR -->
  <div class="page-sidebar" id="main-menu">
    <!-- BEGIN MINI-PROFILE -->
    <div class="page-sidebar-wrapper scrollbar-dynamic" id="main-menu-wrapper">
      <div class="user-info-wrapper">
        <div class="profile-wrapper"> <img src="userimages/admin.ico"  alt="" data-src="userimages/admin.ico" data-src-retina="userimages/admin.ico" width="69" height="69" /> </div>
        <div class="user-info">
          <div class="greeting" style="font-size:14px;">Welcome</div>
          <div class="username" style="font-size:12px;"><?php echo $_SESSION['name'];?></div>
          <div class="status" style="font-size:10px;"><a href="#">
            <div class="status-icon green"></div>
            Online</a></div>
        </div>
      </div>
      <!-- END MINI-PROFILE -->
      <!-- BEGIN SIDEBAR MENU -->
      <p class="menu-title">BROWSE <span class="pull-right"><a href="javascript:;"><i class="fa fa-refresh"></i></a></span></p>
   
    <ul>	
      <li class="start"> <a href="dashboard.php"> <i class="icon-custom-home"></i> <span class="title">Dashboard</span> <span class="selected"></span>  </a> 
		    </li>
    
          <li class="active"><a href="change-password.php"><span class="fa fa-file-text-o"></span> Change Password</a></li>
                            <li><a href="profile.php"><span class="fa fa-user"></span> Profile</a></li>
                         
                            
                              <li ><a href="get-quote.php"> <span class="fa fa-tasks"></span> Request a Quote</a></li>
							     <li class="active"><a href="create-ticket.php"><span class="fa fa-ticket"></span> Create Ticket</a></li>
                                <li ><a href="view-tickets.php"><span class="fa fa-ticket"></span> View Ticket</a></li>
                           
    </ul>
    
	