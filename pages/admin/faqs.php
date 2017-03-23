<?php include '../../includes/functions.php';
      include '../../includes/admin-session.php';
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

          <li>
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

        <li class="active">
          <a href="faqs.php">
            <i class="fa fa-pencil"></i> <span>Edit FAQ's</span>

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
        <i class="fa fa-pencil"></i> Edit Definition of Terms
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li class="active">Edit Definition of Terms</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">
        <div class="box-body">
        <form method="POST" data-parsley-validate>
        <?php add_faq()?>
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-plus"></i> Add FAQ</button>
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="exampleModalLabel">Add FAQ</h4>
      </div>
      <div class="modal-body">

          <div class="form-group">
            <label for="message-text" class="control-label">Question:</label>
             <input type="text" class="form-control" name="que" required>
          </div>

            <div class="form-group">
            <label for="message-text" class="control-label">Answer:</label>
             <input type="text" class="form-control" name="ans" required>
          </div>
       
       
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" name="btn-addfaq" class="btn btn-primary">Submit</button>
         </form>
      </div>
    </div>
  </div>
</div>

<hr>

               <div class="accordion" id="accordion" role="tablist" aria-multiselectable="true">
                <?php 
                  global $db;
                  

                  
                  $query = $db->query("SELECT * FROM faq");
                  while ($row = $query->fetch_object()){
                    $id = $row->id;
                    $question = $row->question;
                    $answer = $row->answer;
                    echo 
                    '
                    <div class="panel">
                      <a class="panel-heading collapsed" href="#collapse'.$id.'" aria-controls="collapse'.$id.' " id="heading'.$id.'"  role="tab" data-toggle="collapse" data-parent="#accordion" aria-expanded="false" >
                      <label style="cursor:pointer" class="fa fa-pencil pull-right label label-primary" data-toggle="modal"  data-target=".bs-example-'.$id.'-modal-lg"> Edit</label>  <h4 class="panel-title" style="word-wrap: break-word"> '.$question.' </h4>
                      </a>

                      <div id="collapse'.$id.'" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading'.$id.'">
                        <div class="panel-body">
                          &bull; '.$answer.'
                        </div>
                      </div>
                    </div>
                  
                    ';

                    echo 

                    '
                    <div class="modal fade bs-example-'.$id.'-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                      <div class="modal-content">

                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                          </button>
                          <h4 class="modal-title" id="myModalLabel"><i class="fa fa-pencil"></i> FAQs</h4>
                        </div>
                        <div class="modal-body">

                          <form method="POST" class="form-horizontal form-label-left" novalidate>


                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Question <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="hidden" name="id" value="'.$id.'">
                          <input id="name" class="form-control col-md-7 col-xs-12"    data-validate-length-range="6"  name="que"  value="'.$question.'" required="required" type="text">
                        </div>
                      </div>



                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Answer <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <textarea id="name" rows=5 style="resize:none" class="form-control col-md-7 col-xs-12"  data-validate-length-range="6" name="ans"  required="required">'.$answer.' </textarea>
                        </div>
                      </div>



                        </div>
                        <div class="modal-footer">
                          <div class="btn-group">
                            <button type="submit" name="btn-modify" class="btn btn-primary"><i class="fa fa-check"></i> Save Changes</button>
                            <button type="submit" name="btn-delete" class="btn btn-danger"><i class="fa fa-remove"></i> Delete</button>
                          </div>
                        </div>
                        </form>
                      </div>
                    </div>
                  </div>

                    ';
                  }
               
                ?>
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
