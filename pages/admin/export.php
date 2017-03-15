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
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="../../dist/css/skins/_all-skins.min.css">
    <link rel="stylesheet" href="../../build/sweetalert.css">
    <script type="text/javascript" src="../../build/sweetalert-dev.js"></script>
    <script type="text/javascript" src="../../build/sweetalert.min.js"></script>

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
              <span class="hidden-xs"><?php echo $firstname?> <i class="fa fa-caret-down"></i></span>
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

        <li class="active treeview">
          <a href="#">
            <i class="fa fa-cut"></i> <span>Meat Cuts</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="view-meatcut.php"><i class="fa fa-circle-o"></i> View Meat Cuts</a></li>
            <li><a href="add-meatcut.php"><i class="fa fa-circle-o"></i> Add Meat Cuts</a></li>
          </ul>
        </li>

        <li class="active treeview">
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
        Export Database
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li class="active">Export Database</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">

        <div class="box-body">

                                 <?php
    set_time_limit(0);
    if(!isset($_SESSION['set_time_limit']))
    $file = backup_tables('localhost','root','','mied_project');
    ?>
    <script type="text/javascript">
    swal({   
      title: "Database successfully backuped!",  
      text: "Please check your database folder. \n Database Name: <?php echo$file?>",
       timer: 8000, 
       type: "success",  
       showConfirmButton: false 
      });
    setTimeout("location.href = 'dashboard.php'",3000);
    </script>
    <?php 
    /* backup the db OR just a table */
    function backup_tables($host,$user,$pass,$name,$tables = '*')
    {
        $return = '';
        $link = mysql_connect($host,$user,$pass);
        mysql_select_db($name,$link);
        
        //get all of the tables
        if($tables == '*')
        {
            $tables = array();
            $result = mysql_query('SHOW TABLES');
            while($row = mysql_fetch_row($result))
            {
                $tables[] = $row[0];
            }
        }
        else
        {
            $tables = is_array($tables) ? $tables : explode(',',$tables);
        }
        
        //cycle through
        foreach($tables as $table)
        {
            $result = mysql_query('SELECT * FROM '.$table);
            $num_fields = mysql_num_fields($result);
            
            $return.= 'DROP TABLE IF EXISTS '.$table.';';
            $row2 = mysql_fetch_row(mysql_query('SHOW CREATE TABLE '.$table));
            $return.= "\n\n".$row2[1].";\n\n";
            
            for ($i = 0; $i < $num_fields; $i++) 
            {
                while($row = mysql_fetch_row($result))
                {
                    $return.= 'INSERT INTO '.$table.' VALUES(';
                    for($j=0; $j<$num_fields; $j++) 
                    {
                        $row[$j] = addslashes($row[$j]);
                        $row[$j] = str_replace("\n", '\n',$row[$j]);
                        if (isset($row[$j])) { $return.= '"'.$row[$j].'"' ; } else { $return.= '""'; }
                        if ($j<($num_fields-1)) { $return.= ','; }
                    }
                    $return.= ");\n";
                }
            }
            $return.="\n\n\n";
        }
        
        //save file
        $filename = 'mied_project-'.date('d-M-Y h-i D').'.sql';
        $handle = fopen('../../database/'.$filename,'w+');
        fwrite($handle,$return);
        fclose($handle);
        return $filename;
    }
    ?>

        </div>
        <!-- /.box-body -->


      </div>
      <!-- /.box -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <footer class="main-footer">
    <strong>National Meat Inspection Services
    Meat Cuts Catalogue
    @ <?php echo date('Y')?></strong>
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
<script src="../../dist/js/demo.js"></script>
</body>
</html>
