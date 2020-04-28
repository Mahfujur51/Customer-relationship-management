<?php
session_start();
error_reporting(0);
include("dbconnection.php");
if(isset($_POST['submit']))
{
  $name=$_POST['name'];
  $email=$_POST['email'];
  $password=$_POST['password'];
  $mobile=$_POST['mobile'];
  $gender=$_POST['gender'];
  $csql="SELECT * FROM tbl_user WHERE email='$email'";
  $cquery=mysqli_query($con,$csql);
  $num=mysqli_num_rows($cquery);
  if ($num>0) {
    $_SESSION['error']="Please use different email id!!";

  }
  else{
    $sql="INSERT INTO tbl_user (name,email,password,mobile,gender)VALUES('$name','$email','$password','$mobile','$gender')";
    $query=mysqli_query($con,$sql);
    if ($query) {
      $_SESSION['msg']="Registration Successfully!!";
    }else{
      $_SESSION['error']="Registration Not Successfully!!";
    }

  }
  
}
?>
<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
  <meta charset="utf-8" />
  <title>CRM | Registration</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
  <meta content="" name="description" />
  <meta content="" name="author" />
  <link href="admin/assets/plugins/pace/pace-theme-flash.css" rel="stylesheet" type="text/css" media="screen"/>
  <link href="admin/assets/plugins/boostrapv3/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
  <link href="admin/assets/plugins/boostrapv3/css/bootstrap-theme.min.css" rel="stylesheet" type="text/css"/>
  <link href="admin/assets/plugins/font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css"/>
  <link href="admin/assets/css/animate.min.css" rel="stylesheet" type="text/css"/>
  <link href="admin/assets/css/style.css" rel="stylesheet" type="text/css"/>
  <link href="admin/assets/css/responsive.css" rel="stylesheet" type="text/css"/>
  <link href="admin/assets/css/custom-icon-set.css" rel="stylesheet" type="text/css"/>
  <script type="text/javascript">
    function checkpass()
    {
      if(document.registration.password.value!=document.registration.cpassword.value)
      {
        alert('New Password and Confirm Password field does not match');
        document.registration.cpassword.focus();
        return false;
      }
      return true;
    }
  </script>
  <script>
    function checkAvailability() {
      $("#loaderIcon").show();
      jQuery.ajax({
        url: "check_availability.php",
        data:'email='+$("#email").val(),
        type: "POST",
        success:function(data){
          $("#user-availability-status").html(data);
          $("#loaderIcon").hide();
        },
        error:function (){}
      });
    }
  </script>

</head>
<body class="error-body no-top">
  <div class="container">
    <div class="row login-container column-seperation">
      <div class="col-md-5 col-md-offset-1">
        <h2>Sign in to CRM</h2>
        <p>            <a href="index.php">Sign in Now!</a> for a webarch account,It's free and always will be..</p>
        <br>

      </div>
      <div class="col-md-5 "> <br>
        <p style="color:green"><?php echo $_SESSION['msg'];?><?php echo $_SESSION['msg']="";?></p>
        <p style="color:red"><?php echo $_SESSION['error'];?><?php echo $_SESSION['error']="";?></p>
        <form  onsubmit="return checkpass();" name="registration"  class="login-form" action="" method="post">
          <div class="row">
            <div class="form-group col-md-10">
              <label class="form-label">Name</label>
              <div class="controls">
                <div class="input-with-icon  right">
                  <i class=""></i>
                  <input type="text" name="name" id="name" class="form-control">
                </div>
                <span class="help-block"><div style="color:#F00;" id="errname"></div></span>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="form-group col-md-10">
              <label class="form-label">Email id</label>
              <div class="controls">
                <div class="input-with-icon  right">
                  <i class=""></i>
                  <input type="text" name="email"  onBlur="checkAvailability()" id="email" class="form-control">
                </div>
                <span id="user-availability-status" style="font-size:12px;"></span>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="form-group col-md-10">
              <label class="form-label">Password</label>
              <div class="controls">
                <div class="input-with-icon  right">
                  <i class=""></i>
                  <input type="password" name="password" id="password" class="form-control">
                </div>
                <span class="help-block">     <div style="color:#F00;" id="pwd"></div>    </span>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="form-group col-md-10">
              <label class="form-label">Re-Password</label>
              <span class="help"></span>
              <div class="controls">
                <div class="input-with-icon  right">
                  <i class=""></i>
                  <input type="password" name="cpassword" id="cpassword" class="form-control">
                </div>
                <span class="help-block">  <div style="color:#F00;" id="cpwd"></div>
                  <div style="color:#F00;" id="mpwd"></div></span>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="form-group col-md-10">
                <label class="form-label">Contact no.</label>
                <span class="help"></span>
                <div class="controls">
                  <div class="input-with-icon  right">
                    <i class=""></i>
                    <input type="text" name="mobile"  class="form-control">
                  </div>
                  
                  <span class="help-block"> <div style="color:#F00;" id="mb"></div></span>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="form-group col-md-10">
                <label class="form-label">Gender</label>
                <span class="help"></span>
                <div class="controls">
                  <div class="input-with-icon  right">
                    <i class=""></i>
                    <input type="radio" value="m" name="gender" checked > Male
                    <input type="radio" value="f" name="gender" > Female
                    
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-10">
                <input  class="btn btn-primary btn-cons pull-right" name="submit" value="Submit" type="submit" />
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
    <script src="admin/assets/plugins/jquery-1.8.3.min.js" type="text/javascript"></script>
    <script src="admin/assets/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="admin/assets/plugins/pace/pace.min.js" type="text/javascript"></script>
    <script src="admin/assets/plugins/jquery-validation/js/jquery.validate.min.js" type="text/javascript"></script>
    <script src="admin/assets/js/login.js" type="text/javascript"></script>
  </body>
  </html>