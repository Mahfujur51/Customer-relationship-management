<?php
session_start();
include("dbconnection.php");
include("checklogin.php");
check_login();
?>
<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
  <meta charset="utf-8" />
  <title>Admin | Manage Quotes</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
  <meta content="" name="description" />
  <meta content="" name="author" />
  <link href="assets/plugins/bootstrap-select2/select2.css" rel="stylesheet" type="text/css" media="screen"/>
  <link href="assets/plugins/jquery-datatable/css/jquery.dataTables.css" rel="stylesheet" type="text/css"/>
  <link href="assets/plugins/datatables-responsive/css/datatables.responsive.css" rel="stylesheet" type="text/css" media="screen"/>
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
  <div class="page-container row"> 

    <?php include("leftbar.php");?>
    
    <div class="clearfix"></div>
    <!-- END SIDEBAR MENU -->
  </div>
</div>
<div class="page-content">
  <!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->
  <div id="portlet-config" class="modal hide">
    <div class="modal-header">
      <button data-dismiss="modal" class="close" type="button"></button>
      <h3>Widget Settings</h3>
    </div>
    <div class="modal-body"> Widget settings form goes here </div>
  </div>
  <div class="clearfix"></div>
  <div class="content">
    <ul class="breadcrumb">
      <li>
        <p>YOU ARE HERE</p>
      </li>
      <li><a href="#" class="active">Quotes</a> </li>
    </ul>
    <div class="page-title"> <i class="icon-custom-left"></i>
      <h3>Manage User Quotes</h3>
    </div>
    <div class="row-fluid">
      <div class="span12">
        <div class="grid simple ">
          <div class="grid-title">
            <h4>Table <span class="semi-bold">Styles</span></h4>
            <div class="tools"> <a href="javascript:;" class="collapse"></a> <a href="#grid-config" data-toggle="modal" class="config"></a> <a href="javascript:;" class="reload"></a> <a href="javascript:;" class="remove"></a> </div>
          </div>
          <div class="grid-body ">
            <table class="table table-hover table-condensed" id="example">
              <thead>
                <tr>
                  <th style="width:1%">#</th>
                  <th style="width:10%">Name</th>
                  <th style="width:10%" data-hide="phone,tablet">Email</th>
                  <th style="width:10%">Contact no</th>
                  <th style="width:20%" data-hide="phone,tablet">Services Required</th>
                  <th style="width:10%">Action </th>
                </tr>
              </thead>
              <tbody>
                <?php 
                $sql="SELECT * FROM tbl_prequest";
                $query=mysqli_query($con,$sql);
                $num=mysqli_num_rows($query);
                if ($num>0) {
                  $cont=1;
                  while ($result=mysqli_fetch_array($query)) {
                    ?>
                    <tr >
                      <td class="v-align-middle"><?php echo $cont;?></td>
                      <td class="v-align-middle"><?php echo $result['name'];?></td>
                      <td class="v-align-middle"><span class="muted"><?php echo $result['email'];?></span></td>
                      <td><span class="muted"><?php echo $result['contact'];?></span></td>
                      <td class="v-align-middle"><?php echo $result['wdd'];?>
                      <?php echo $result['cms'];?>
                      <?php echo $result['seo'];?>
                      <?php echo $result['smo'];?>
                      <?php echo $result['swd'];?>
                      <?php echo $result['dwd'];?>
                      <?php echo $result['fwd'];?>
                      <?php echo $result['dr'];?>
                      <?php echo $result['whs'];?>
                      <?php echo $result['wm'];?>
                      <?php echo $result['ed'];?>
                      <?php echo $result['wta'];?>
                      <?php echo $result['opi'];?>
                      <?php echo $result['ld'];?>
                      <?php echo $result['da'];?>
                      <?php echo $result['osc'];?>
                      <?php echo $result['nd'];?>
                      <?php echo $result['others'];?>
                    </td>
                    <td><a href="quote-details.php?id=<?php echo $result['id'];?>"><button class="btn-danger-dark">View</button></a></td>
                  </tr>
              <?php   
              $cont++;                  # code...
            }

          }
          ?>
        </tbody>
      </table>
    </div>
  </div>
</div>
</div>
</div>

<div class="addNewRow"></div>
</div>

</div>
<script src="assets/plugins/jquery-1.8.3.min.js" type="text/javascript"></script>
<script src="assets/plugins/jquery-ui/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>
<script src="assets/plugins/boostrapv3/js/bootstrap.min.js" type="text/javascript"></script>
<script src="assets/plugins/breakpoints.js" type="text/javascript"></script>
<script src="assets/plugins/jquery-unveil/jquery.unveil.min.js" type="text/javascript"></script>
<script src="assets/plugins/jquery-scrollbar/jquery.scrollbar.min.js" type="text/javascript"></script>    
<script src="assets/plugins/jquery-block-ui/jqueryblockui.js" type="text/javascript"></script>
<script src="assets/plugins/jquery-numberAnimate/jquery.animateNumbers.js" type="text/javascript"></script>
<script src="assets/plugins/bootstrap-select2/select2.min.js" type="text/javascript"></script>
<script src="assets/plugins/jquery-datatable/js/jquery.dataTables.min.js" type="text/javascript" ></script>
<script src="assets/plugins/jquery-datatable/extra/js/dataTables.tableTools.min.js" type="text/javascript" ></script>
<script type="text/javascript" src="assets/plugins/datatables-responsive/js/datatables.responsive.js"></script>
<script type="text/javascript" src="assets/plugins/datatables-responsive/js/lodash.min.js"></script>
<script src="assets/js/datatables.js" type="text/javascript"></script>
<script src="assets/js/core.js" type="text/javascript"></script>
<script src="assets/js/chat.js" type="text/javascript"></script>
<script src="assets/js/demo.js" type="text/javascript"></script>
</body>
</html>
