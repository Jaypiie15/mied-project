<?php include '../../includes/functions.php';
      include '../../includes/admin-session.php';

$id = $_SESSION['code_id'];

if(empty($id)){
    ?>
      <script type="text/javascript">
    swal({   
       title: "Error!",  
       text: "Record Not found.",
       timer: 4000, 
       type: 'error',  
       showConfirmButton: false 
      });
    </script>
    <?php
  }else{
    $query = $db->query("SELECT * FROM hs_code WHERE id = '$id'");
    $row = $query->fetch_object();
    $code = $row->code;

  }

?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title><?php echo $title?></title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="../../bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/AdminLTE.min.css">
      <link href="../../plugins/animate.css/animate.min.css" rel="stylesheet">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="../../dist/css/skins/_all-skins.min.css">
    <link rel="stylesheet" href="../../plugins/parsleyjs/src/parsley.css">
            <link rel="stylesheet" href="../../build/sweetalert.css">
    <script type="text/javascript" src="../../build/sweetalert-dev.js"></script>
    <script type="text/javascript" src="../../build/sweetalert.min.js"></script>
  <link rel="stylesheet" href="../../plugins/select2/select2.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body class="hold-transition skin-blue sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="dashboard.php" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b><?php echo $mini?></b></span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><?php echo $sitename?></span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->

          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <span class="hidden-xs"><?php echo $firstname?> </span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->

              <!-- Menu Body -->
              <li class="user-body">
                <div class="row">
                  <div class="col-xs-4">
                    <a href="logout.php">Logout  <i class="fa fa-sign-out"></i></a>
                  </div>
                </div>
                <!-- /.row -->
              </li>
              <!-- Menu Footer-->

        </ul>
      </div>
    </nav>
  </header>

  <!-- =============================================== -->

  <!-- Left side column. contains the sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->

      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">

        <li>
          <a href="dashboard.php">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>

          </a>
        </li>

        <li>
          <a href="#">
            <i class="fa fa-cut"></i> <span>Meat Cuts</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="view-meatcut.php"><i class="fa fa-circle-o"></i> View Meat Cuts</a></li>
            <li class="active"><a href="add-meatcut.php"><i class="fa fa-circle-o"></i> Add Meat Cuts</a></li>
          </ul>
        </li>

        <li>
          <a href="#">
            <i class="fa fa-users"></i> <span>Users</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="admin.php"><i class="fa fa-circle-o"></i> Administrators</a></li>
            <li><a href="users.php"><i class="fa fa-circle-o"></i> Add Users</a></li>
          </ul>
        </li>


        <li>
          <a href="edit-commodity.php">
            <i class="fa fa-pencil"></i> <span>Edit Commodity</span>

          </a>
        </li>

          <li>
          <a href="edit-meatcut.php">
            <i class="fa fa-pencil"></i> <span>Edit Meat Cut Type</span>

          </a>
        </li>

          <li class="active">
          <a href="edit-hscode.php">
            <i class="fa fa-pencil"></i> <span>Edit HS Code</span>

          </a>
        </li>

        <li>
          <a href="edit-country.php">
            <i class="fa fa-map"></i> <span>Edit Country</span>

          </a>
        </li>

        <li>
          <a href="edit-title.php">
            <i class="fa fa-pencil"></i> <span>Edit title</span>

          </a>
        </li>

        <li>
          <a href="export.php">
            <i class="fa fa-database"></i> <span>Export Database</span>

          </a>
        </li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- =============================================== -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <i class="fa fa-pencil"></i> Modify HS Code
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li class="active">Modify HS Code</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">
        <div class="box-body">

<hr>

    <form method="post" class="form-horizontal form-label-left" id="form" data-parsley-validate>
    <?php update_code()?>
    
    <div class="item form-group">
    <label class="control-label col-md-3 col-sm-3 col-xs-6">HS Code<span class="required"> *</span></label>
    <div class="col-md-6 col-sm-6 col-xs-12"> 

    
        <input type="text" name="code" value="<?php echo $code?>" class="form-control col-md-7 col-xs-12" >
        <input type="hidden" name="id" value="<?php echo $id?>">
 
      </div>
      </div>



        <div class="col-md-6 col-md-offset-3">
          <button type="submit" class="btn btn-primary btn-block btn-flat" name="btn-update">Update</button>
        </div>
      
  
      <div class="row">

        <!-- /.col -->
     
        <!-- /.col -->
      </div>

    </form>


 
  <!-- /.form-box -->

        </div>
        <!-- /.box-body -->


      </div>
      <!-- /.box -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <footer class="main-footer">
    <strong><?php echo $footer?></strong>
  </footer>

  <!-- Control Sidebar -->

  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 2.2.3 -->
<script src="../../plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="../../bootstrap/js/bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="../../plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="../../plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/app.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../plugins/parsleyjs/parsley.js"></script>
<script src="../../plugins/parsleyjs/dist/parsley.min.js"></script>
<script src="../../dist/js/demo.js"></script>
<script src="../../plugins/select2/select2.full.min.js"></script>


<script type="text/javascript">
  $('#form').parsley();

</script>


</body>
</html>
