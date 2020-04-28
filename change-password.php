<?php
session_start();
error_reporting(0);
include("checklogin.php");
check_login();
include("dbconnection.php");
if(isset($_POST['change']))
{
  $password=$_POST['password'];
  $newpass=$_POST['newpass'];
  $email=$_SESSION["login"];
  $sql="SELECT * FROM tbl_user WHERE password='$password' AND email='$email'";
  $query=mysqli_query($con,$sql);
  $num=mysqli_num_rows($query);
  if ($num>0) {
    $upsql="UPDATE tbl_user SET password='$newpass' WHERE email='$email'";
    $upqery=mysqli_query($con,$upsql);
    if ($upqery) {
      $_SESSION['msg1']="Password Changed Successfully !!";
    }else{
      $_SESSION['msg1']="Password Not Change !!";
    }
  }else{
    $_SESSION['msg1']="Old Password not match !!";
  }
}
?>
<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
  <meta charset="utf-8" />
  <title>CRM | Change Password</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
  <meta content="" name="description" />
  <meta content="" name="author" />
  <link href="admin/assets/plugins/pace/pace-theme-flash.css" rel="stylesheet" type="text/css" media="screen"/>
  <link href="admin/assets/plugins/boostrapv3/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
  <link href="admin/assets/plugins/boostrapv3/css/bootstrap-theme.min.css" rel="stylesheet" type="text/css"/>
  <link href="admin/assets/plugins/font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css"/>
  <link href="admin/assets/css/animate.min.css" rel="stylesheet" type="text/css"/>
  <link href="admin/assets/plugins/jquery-scrollbar/jquery.scrollbar.css" rel="stylesheet" type="text/css"/>
  <link href="admin/assets/css/style.css" rel="stylesheet" type="text/css"/>
  <link href="admin/assets/css/responsive.css" rel="stylesheet" type="text/css"/>
  <link href="admin/assets/css/custom-icon-set.css" rel="stylesheet" type="text/css"/>
  <script type="text/javascript">
    function valid()
    {
      if(document.form1.newpass.value!=document.form1.confirmpassword.value)
      {
        alert('New Password and Confirm Password field does not match');
        document.form1.confirmpassword.focus();
        return false;
      }
      return true;
    }
  </script>
</head>
<body class="">
  <?php include("header.php");?>
  <div class="page-container row-fluid">
    <?php include("leftbar.php");?>
    <div class="clearfix"></div>
  </div>
</div>
<a href="#" class="scrollup">Scroll</a>
<div class="footer-widget">
  <div class="progress transparent progress-small no-radius no-margin">
    <div data-percentage="79%" class="progress-bar progress-bar-success animate-progress-bar" ></div>
  </div>
  <div class="pull-right">
  </div>
</div>
<div class="page-content">
  <div id="portlet-config" class="modal hide">
    <div class="modal-header">
      <button data-dismiss="modal" class="close" type="button"></button>
      <h3>Widget Settings</h3>
    </div>
    <div class="modal-body"> Widget settings form goes here </div>
  </div>
  <div class="clearfix"></div>
  <div class="content">
    <div class="page-title">
      <h3>Change Password</h3>
      <div class="row">
        <div class="col-md-12">
          <form class="form-horizontal" name="form1" method="post" action="" onSubmit="return valid();">
            <div class="panel panel-default">
              <div class="panel-body">
                <p align="center" style="color:#FF0000"><?php echo $_SESSION['msg1'];?><?php echo $_SESSION['msg1']="";?></p>
                <div class="form-group">
                  <label class="col-md-3 col-xs-12 control-label">Current Password</label>
                  <div class="col-md-6 col-xs-12">
                    <div class="input-group">
                      <span class="input-group-addon"><span class="fa fa-unlock-alt"></span></span>
                      <input type="password" name="password"  class="form-control"/>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-md-3 col-xs-12 control-label">New Password</label>
                  <div class="col-md-6 col-xs-12">
                    <div class="input-group">
                      <span class="input-group-addon"><span class="fa fa-unlock-alt"></span></span>
                      <input type="password" name="newpass" id="newpass" value="" class="form-control"/>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-md-3 col-xs-12 control-label">Confirm Password</label>
                  <div class="col-md-6 col-xs-12">
                    <div class="input-group">
                      <span class="input-group-addon"><span class="fa fa-unlock-alt"></span></span>
                      <input type="password" name="confirmpassword"  id="confirmpassword" class="form-control"/>
                    </div>
                  </div>
                </div>
              </div>
              <div class="panel-footer">
                <button class="btn btn-default">Clear Form</button>
                <input type="submit" value="Change" name="change" class="btn btn-primary pull-right">
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- BEGIN CHAT -->
</div>
</div>
</div>
<script src="admin/assets/plugins/jquery-1.8.3.min.js" type="text/javascript"></script>
<script src="admin/assets/plugins/jquery-ui/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>
<script src="admin/assets/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="admin/assets/plugins/breakpoints.js" type="text/javascript"></script>
<script src="admin/assets/plugins/jquery-unveil/jquery.unveil.min.js" type="text/javascript"></script>
<script src="admin/assets/plugins/jquery-block-ui/jqueryblockui.js" type="text/javascript"></script>
<script src="admin/assets/plugins/jquery-scrollbar/jquery.scrollbar.min.js" type="text/javascript"></script>
<script src="admin/assets/plugins/pace/pace.min.js" type="text/javascript"></script>
<script src="admin/assets/plugins/jquery-numberAnimate/jquery.animateNumbers.js" type="text/javascript"></script>
<script src="admin/assets/js/core.js" type="text/javascript"></script>
<script src="admin/assets/js/chat.js" type="text/javascript"></script>
<script src="admin/assets/js/demo.js" type="text/javascript"></script>
</body>
</html>