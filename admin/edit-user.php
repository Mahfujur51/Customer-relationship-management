<?php
session_start();
include("checklogin.php");
check_login();
include("dbconnection.php");
if(isset($_POST['update']))
{
$id=$_GET['id'];
$name=$_POST['name'];
$mobile=$_POST['mobile'];
$address=$_POST['address'];
$gender=$_POST['gender'];
$upsql="UPDATE tbl_user SET
name='$name',
mobile='$mobile',
gender='$gender',
address='$address' WHERE id='$id'
";
$upquery=mysqli_query($con,$upsql);
if ($upquery) {
echo "<script>alert('Data Updated');</script>";
} else{
echo "<script>alert('Data Not Updated');</script>";
}

}
?>
<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <meta charset="utf-8" />
    <title>CRM | Dashboard </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta content="" name="description" />
    <meta content="" name="author" />
    <link href="assets/plugins/pace/pace-theme-flash.css" rel="stylesheet" type="text/css" media="screen"/>
    <link href="assets/plugins/boostrapv3/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <link href="assets/plugins/boostrapv3/css/bootstrap-theme.min.css" rel="stylesheet" type="text/css"/>
    <link href="assets/plugins/font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css"/>
    <link href="assets/css/animate.min.css" rel="stylesheet" type="text/css"/>
    <link href="assets/plugins/jquery-scrollbar/jquery.scrollbar.css" rel="stylesheet" type="text/css"/>
    <link href="assets/css/style.css" rel="stylesheet" type="text/css"/>
    <link href="assets/css/responsive.css" rel="stylesheet" type="text/css"/>
    <link href="assets/css/custom-icon-set.css" rel="stylesheet" type="text/css"/>
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
        <?php
        $id=$_GET['id'];
        $sql="SELECT * FROM tbl_user WHERE id='$id'";
        $query=mysqli_query($con,$sql);
        $num=mysqli_num_rows($query);
        if ($num>0) {
        while ($result=mysqli_fetch_array($query)) {
        ?>
        <h3><?php echo $result['name'];?>'s Profile</h3>
        <form name="muser" method="post" action="" enctype="multipart/form-data">
          <table width="100%" border="0">
            <tr>
              <td height="42">Name</td>
              <td><input type="text" name="name" id="name" value="<?php echo $result['name'];?>" class="form-control"></td>
            </tr>
            <tr>
              <td height="42">Primary Email</td>
              <td><input type="text" value="<?php echo $result['email'];?>" class="form-control" readonly></td>
            </tr>
            <tr>
              <td height="42">Contact no.</td>
              <td><input type="text" name="mobile" id="mobile" value="<?php echo $result['mobile'];?>" class="form-control"></td>
            </tr>
            <tr>
              <td height="42">Gender</td>
              <td><select name="gender" class="form-control">
                <option value="<?php echo $result['gender'];?>">
                  <?php if ($result['gender']=='m') {
                  echo "Male";
                  }else{
                  echo "Female";
                  } ?>
                </option>
                <option value="Male">Male</option>
                <option value="Female">Female</option>
                <option value="Other">Other</option>
              </select>
            </td>
          </tr>
          <tr>
            <td height="42">Address</td>
            <td><textarea name="address" cols="64" rows="4"><?php echo $result['address'];?></textarea></td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td height="42">
            <button type="submit" name="update" class="btn btn-primary">Save changes</button></td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
          </tr>
        </table>
        <?php } } ?>
      </form>
    </div>
  </div>
</div>
</div>
</div>
<script src="assets/plugins/jquery-1.8.3.min.js" type="text/javascript"></script>
<script src="assets/plugins/jquery-ui/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>
<script src="assets/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="assets/plugins/breakpoints.js" type="text/javascript"></script>
<script src="assets/plugins/jquery-unveil/jquery.unveil.min.js" type="text/javascript"></script>
<script src="assets/plugins/jquery-block-ui/jqueryblockui.js" type="text/javascript"></script>
<script src="assets/plugins/jquery-scrollbar/jquery.scrollbar.min.js" type="text/javascript"></script>
<script src="assets/plugins/pace/pace.min.js" type="text/javascript"></script>
<script src="assets/plugins/jquery-numberAnimate/jquery.animateNumbers.js" type="text/javascript"></script>
<script src="assets/js/core.js" type="text/javascript"></script>
<script src="assets/js/chat.js" type="text/javascript"></script>
<script src="assets/js/demo.js" type="text/javascript"></script>
</body>
</html>