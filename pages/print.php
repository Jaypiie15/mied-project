<?php include '../includes/functions.php';
      include '../includes/user-session.php';
      $code = $_SESSION['meat_code'];
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
  <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../dist/css/AdminLTE.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body onload="window.print();">
<div class="wrapper">
  <!-- Main content -->
  <section class="invoice">
    <!-- title row -->
    <div class="row">
      <div class="col-xs-12">
      </div>
      <!-- /.col -->
    </div>
    <!-- info row -->

    <!-- /.row -->

    <!-- Table row -->
    <div class="row">
        <?php
                $query = $db->query("SELECT * FROM meat_cuts WHERE hscode = $code");
                while ($row = $query->fetch_object()) {
                    $id = $row->id;
                    $kind = $row->kind;
                    $cut = $row->cut_type;
                    $code = $row->hscode;
                    $name = $row->name_number;
                    $rema = $row->remarks;
                    $coun = $row->country;
                    $image = $row->image;
            echo'



                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <a data-toggle="modal" class="thumbnail" data-target=".bs-example-modal'.$id.'-lg" href="#"> 
                        <img class="img-responsive"  src="'.$image.'" alt="" style="width:300px;height:150px;"/></a>
                    </div>
                              <div class="col-md-6 col-sm-6 col-xs-12">
                              <input type="text" name="kind" class="form-control col-md-7 col-xs-12" value="'.$kind.'">
                              </div>

                            <div class="col-md-6 col-sm-6 col-xs-12">
                            <input type="text" name="cut" class="form-control col-md-7 col-xs-12" value="'.$cut.'">
                          </div>

                            <div class="col-md-6 col-sm-6 col-xs-12">
                            <input type="text" name="name" class="form-control col-md-7 col-xs-12" value="'.$name.'">
                          </div>

                            <div class="col-md-6 col-sm-6 col-xs-12">
                            <input type="text" name="rema" class="form-control col-md-7 col-xs-12" value="'.$rema.'">
                          </div>

                            <div class="col-md-6 col-sm-6 col-xs-12">
                            <input type="text" name="coun" class="form-control col-md-7 col-xs-12" value="'.$coun.'">
                          </div>';
                  }
                    ?>

    </div>
    <!-- /.row -->


    <!-- /.row -->
  </section>
  <!-- /.content -->
</div>
<!-- ./wrapper -->
</body>
</html>
