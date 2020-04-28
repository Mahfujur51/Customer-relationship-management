<?php
session_start();
include("dbconnection.php");
include("checklogin.php");
check_login();
if(isset($_POST['update']))
{
    $email=$_SESSION['login'];
    $name=$_POST['name'];
    $mobile=$_POST['mobile'];
    $gender=$_POST['gender'];
    $address=$_POST['address'];
    $upsql="UPDATE tbl_user SET name='$name',mobile='$mobile',gender='$gender',address='$address' WHERE email='$email'";
    $upquery=mysqli_query($con,$upsql);
    if ($upquery) {
        echo "<script>alert('Your profile updated successfully.');</script>";
    }else{
        echo "<script>alert('Something wrong not updated successfully.');</script>";
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <meta charset="utf-8" />
    <title>CRM | User Profile</title>
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
            <h3><?php echo $_SESSION['name'];?>'s Profile</h3>
            <?php
            $email=$_SESSION['login'];
            $sql="SELECT * FROM tbl_user WHERE email='$email'";
            $query=mysqli_query($con,$sql);
            $num=mysqli_num_rows($query);
            if ($num>0) {
                while ($result=mysqli_fetch_array($query)) {
                # code...
                    ?>
                    <div class="row">
                        <div class="col-md-12">
                            <form class="form-horizontal" method="post" enctype="multipart/form-data">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h3 class="panel-title"><strong>Your Profile</h3>
                                        </div>
                                        <div class="panel-body">
                                            <div class="form-group">
                                                <label class="col-md-3 col-xs-12 control-label">Name</label>
                                                <div class="col-md-6 col-xs-12">
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                        <input type="text" name="name" value="<?php echo $result['name'];?>" class="form-control"/>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-3 col-xs-12 control-label"> Email </label>
                                                <div class="col-md-6 col-xs-12">
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                        <input type="text"  value="<?php echo $result['email'];?>" disabled="disabled" class="form-control"/>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="col-md-3 col-xs-12 control-label">Contact no </label>
                                                <div class="col-md-6 col-xs-12">
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                        <input type="text"  name="mobile" value="<?php echo $result['mobile'];?>"  maxlength="11" class="form-control"/>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-3 col-xs-12 control-label">Gender </label>
                                                <div class="col-md-6 col-xs-12">
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                        <select class="form-control select" name="gender">
                                                            <option value="<?php echo $result['gender'];?>"><?php $a=$result['gender'];
                                                            if($a=='m')
                                                            {
                                                                echo "Male";
                                                            }
                                                            if($a=='f')
                                                            {
                                                                echo "Female";
                                                            }
                                                            if($a=='others')
                                                            {
                                                                echo "Others";
                                                            }
                                                            ?></option>
                                                            <option value="m">Male</option>
                                                            <option value="f">Female</option>
                                                            <option value="others">Other</option>
                                                        </select>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-3 col-xs-12 control-label">Address</label>
                                            <div class="col-md-6 col-xs-12">
                                                <textarea class="form-control" name="address" rows="5"><?php echo $result['address'];?></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <?php
                                }
                            }
                            ?>
                            <div class="panel-footer">
                                <button class="btn btn-default">Clear Form</button>
                                <input type="submit" value="Submit" name="update" class="btn btn-primary pull-right">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
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