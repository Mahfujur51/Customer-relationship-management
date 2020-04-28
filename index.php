<?php
session_start();
error_reporting(0);
include("dbconnection.php");
if(isset($_POST['login']))
{
  $email    =$_POST['email'];
  $password =$_POST['password'];
  $sql="SELECT * FROM tbl_user WHERE email='$email' AND password='$password'";
  $query=mysqli_query($con,$sql);
  $num=mysqli_num_rows($query);
  if ($num>0) {
    while ($result=mysqli_fetch_array($query)) {
      $_SESSION['login']=$email;
      $_SESSION['id']=$result['id'];
      $_SESSION['name']=$result['name'];
      $logindate=date("Y/m/d");
      date_default_timezone_set("Asia/Dhaka");
      $time=date("h:i:sa");
      $logintime=$time;
      $ip_address=$_SERVER['REMOTE_ADDR'];
      $geopluginURL='http://www.geoplugin.net/php.gp?ip='.$ip_address;
      $addrDetailsArr=unserialize(file_get_contents($geopluginURL));
      $city=$addrDetailsArr['geoplugin_city'];
      $country=$addrDetailsArr['geoplugin_countryName'];
      ob_start();
      system('ipconfig /all');
      $mycom=ob_get_contents();
      ob_clean();
      $findme = "Physical";
      $pmac = strpos($mycom, $findme);
      $mac=substr($mycom,($pmac+36),17);


      $sql1="INSERT INTO tbl_usercheek(logindate,logintime,user_id,username,email,ip,mac,city,country)VALUES('$logindate','$logintime','".$_SESSION['id']."','".$_SESSION['name']."','".$_SESSION['login']."','$ip_address','$mac','$city','$country')";
      $query1=mysqli_query($con,$sql1);
      if ($query1) {
        echo "<script type='text/javascript'> document.location ='change-password.php'; </script>";

      }



    }
  }else{
    
    echo "<script>alert('Invalid Email or Password')</script>";
  }

  
}
?>
<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
  <meta charset="utf-8" />
  <title>CRM | Login</title>
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

</head>
<body class="error-body no-top">
  <div class="container">
    <div class="row login-container column-seperation">  
      <div class="col-md-5 col-md-offset-1">
        <h2>Sign in to CRM</h2>
        <p>
          <a href="registration.php">Sign up Now!</a> for a webarch account,It's free and always will be..</p>
          <br>


        </div>
        <div class="col-md-5 "> <br>
         <p style="color:#F00"><?php echo $_SESSION['action1'];?><?php echo $_SESSION['action1']="";?></p>
         <form id="login-form" class="login-form" action="" method="post">
           <div class="row">
             <div class="form-group col-md-10">
              <label class="form-label">Username</label>
              <div class="controls">
                <div class="input-with-icon  right">                                       
                 <i class=""></i>
                 <input type="text" name="email" id="txtusername" class="form-control">                                 
               </div>
             </div>
           </div>
         </div>
         <div class="row">
          <div class="form-group col-md-10">
            <label class="form-label">Password</label>
            <span class="help"></span>
            <div class="controls">
              <div class="input-with-icon  right">                                       
               <i class=""></i>
               <input type="password" name="password" id="txtpassword" class="form-control">                                 
             </div>
           </div>
         </div>
       </div>
       <div class="row">
        <div class="control-group  col-md-10">
          <div class="checkbox checkbox check-success"> <a href="forgot-password.php">Forgot Password </a>&nbsp;&nbsp;
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-10">
          <button class="btn btn-primary btn-cons pull-right" name="login" type="submit">Login</button>
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