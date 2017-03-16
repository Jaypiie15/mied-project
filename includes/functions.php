<?php 

include 'config.php';

function add_user(){

	global $db;

	if(isset($_POST['btn-register'])){

		$last 	= $db->real_escape_string($_POST['last']);
		$first 	= $db->real_escape_string($_POST['first']);
		$middle = $db->real_escape_string($_POST['last']);
		$user 	= $db->real_escape_string($_POST['user']);
		$pass 	= $db->real_escape_string($_POST['pass']);
		$hpass 	= password_hash($pass,PASSWORD_DEFAULT);
		$role 	= $db->real_escape_string($_POST['role']);


		$query = $db->query("INSERT INTO accounts_tbl (lastname,firstname,middlename,username,password,role)
							 VALUES ('$last','$first','$middle','$user','$hpass','$role')");
							 ?>
			<script type="text/javascript">swal("SUCCESS!","Registered!","success");</script>
			<?php


	}
}

function show_admin(){
	global $db;

	$query = $db->query("SELECT * FROM accounts_tbl");

		while($row = $query->fetch_object()){
			$last 	= $row->lastname;
			$first  = $row->firstname;
			$middle = $row->middlename;
			$user 	= $row->username;
			$role 	= $row->role;

			switch($role){
				case 0:
					$role = '<label style="padding:10px;font-weight:bolder" class="label label-danger">Admin</label>';
				break;
				case 1:
					$role = '<label style="padding:10px;font-weight:bolder" class="label label-warning">User</label>';
				break;
				default:
				break;
			}

			echo'
				<td>'.$row->lastname.'</td>
				<td>'.$row->firstname.'</td>
				<td>'.$row->middlename.'</td>
				<td>'.$row->username.'</td>
				<td>'.$role.'</td>
				<td>
				<form method="POST">
				<input type="hidden" name="id" value="'.$row->id.'">
				<button type="submit" name="btn-edit" class="btn btn-primary"><i class="fa fa-pencil"></i> Edit</button>
				</form>
				</td>
				</tr>
				';
	}

	if(isset($_POST['btn-edit'])){
		$_SESSION['admin_id'] = $admin_id;
		echo "<script>window.location='modify-admin.php'</script>";	
	}
}

function add_meat(){
	global $db;

	
	if(isset($_FILES['files'])){
    $errors= array();
	foreach($_FILES['files']['tmp_name'] as $key => $tmp_name ){
		$file_name = $key.$_FILES['files']['name'][$key];
		$file_tmp =$_FILES['files']['tmp_name'][$key];
		$location = $db->real_escape_string("../images/".$file_name);

		$com = $db->real_escape_string($_POST['commodity']);
		$type = $db->real_escape_string($_POST['type']);
		$code = $db->real_escape_string($_POST['code']);
		$num = $db->real_escape_string($_POST['number']);
		$rema = $db->real_escape_string($_POST['remarks']);
		$coun = $db->real_escape_string($_POST['country']);
		

        if(empty($errors)==true){

            if(is_dir("../../images/".$file_name)==false){
                move_uploaded_file($file_tmp,"../../images/".$file_name);
            }else{									//rename the file if another one exist
                $new_dir="../../images/".$file_name.time();
                 rename($file_tmp,$new_dir) ;				
            }
            $db->query("INSERT INTO meat_cuts (kind,cut_type,hscode,name_number,remarks,country,image) VALUES('$com','$type','$code','$num','$rema','$coun','$location')");			
        }else{
                print_r($errors);
        }
    }
	if(empty($error)){
			?>
			<script type="text/javascript">swal("SUCCESS!","Added!","success");</script>
			<?php
	}
}
}

function view_meatcuts(){
	global $db;

	$query = $db->query("SELECT * FROM meat_cuts GROUP BY hscode");
	while ($row = $query->fetch_object()){
		$id = $row->id;
		$kind = $row->kind;
		$cut = $row->cut_type;
		$code = $row->hscode;
		$name = $row->name_number;
		$rema = $row->remarks;
		$coun = $row->country;
		$image = $row->image;

		echo'

				<td>'.$kind.'</td>
				<td>'.$cut.'</td>
				<td>'.$code.'</td>
				<td>'.$name.'</td>
				<td>'.$coun.'</td>
				<td>
				<form method="POST">
				<input type="hidden" name="id" value="'.$id.'">
				<input type="hidden" name="code" value="'.$code.'">
				<button type="submit" name="btn-view" class="btn btn-primary"><i class="fa fa-eye"></i> View</button>
				</form>
				</td>
				</tr>
				';

	}

	if(isset($_POST['btn-view'])){
		$meat_id = $db->real_escape_string($_POST['id']);
		$meat_code = $db->real_escape_string($_POST['code']);


		$_SESSION['meat_id'] = $meat_id;
		$_SESSION['meat_code'] = $meat_code;

		echo "<script>window.location='show-meatcut.php'</script>";


	}
}

function login(){

	global $db;
	if(isset($_SESSION['admin'])!=""){
		header('location: admin/dashboard.php');
	}
	elseif(isset($_SESSION['user'])!=""){
		header('location: user-view.php');
	}

	if(isset($_POST['btn-login'])){

		session_start();

		$user  = $db->real_escape_string($_POST['username']);
		$pass  = $db->real_escape_string($_POST['password']);
		$query = $db->query("SELECT * FROM accounts_tbl WHERE username = '$user'");
		$check = $query->num_rows;

		if($check < 1){
		?>
		<script type="text/javascript">
			swal({   
		 		title: "Error!",  
		 		text: "User does not exist.",
		 		timer: 4000, 
		 		type: 'error',  
		 		showConfirmButton: false 
				});
		</script>
		<?php
		}else{

		$row  = $query->fetch_object();
		$id   = $row->id;
		$use  = $row->username;
		$pas  = $row->password;
		$role = $row->role;

		$admin = 0;
		$user  = 1;

		$hash = $pas;

		if(password_verify($pass , $hash) && $role == $admin){
			$_SESSION['admin'] = $id;
			header('location: admin/dashboard.php');
			}
		elseif(password_verify($pass , $hash) && $role == $user){
			$_SESSION['user'] = $id;
			header('location: user-view.php');
			}
		else{
						?>
		<script type="text/javascript">
			swal({   
				title: "Error!",  
			 	text: "You've entered invalid username or password.",
				timer: 4000, 
			 	type: 'error',  
			 	showConfirmButton: false 
				});
		</script>
		<?php
			}
		}
	}
}


function show_com(){
	global $db;

	$query = $db->query("SELECT * FROM commodity");
	$check = $query->num_rows;

	if($check < 1){
		echo'<div class="alert alert-danger" style="font-size:14px;font-weight:bolder;text-align:left"> No results found.</div>';
	}else{
	while($row = $query->fetch_object()){
			
			$com = $row->type;
		
		echo'
			<td>'.$com.'</td>
			<td>
			<form method="POST">
			<input type="hidden" name="id" value="'.$row->id.'">
			<button type="submit" name="btn-edit" class="btn btn-primary"><i class="fa fa-pencil"></i> Edit </button>
			</td>
			</form>
			</tr>
			';
		}
	
	if(isset($_POST['btn-edit'])){
		$com_id  = $db->real_escape_string($_POST['id']);
		$_SESSION['com_id'] = $com_id;
		echo "<script>window.location='modify-commodity.php'</script>";	
		}
	}
}

function add_com(){

	global $db;

	if(isset($_POST['btn-add'])){
		$com = $db->real_escape_string($_POST['commodity']);
		$res = $db->query("SELECT * FROM commodity WHERE type='$com'");
		$check = $res->num_rows;

		if($check > 0){
			    ?>
      <script type="text/javascript">
    swal({   
       title: "Error!",  
       text: "Commodity already Exist.",
       timer: 4000, 
       type: 'error',  
       showConfirmButton: false 
      });
    </script>
    <?php
		}else{
		
		$query = $db->query("INSERT INTO commodity (type) VALUES ('$com')");
								?>
		<script type="text/javascript">
			swal({   
				title: "SUCCESS",  
			 	text: "Added Successfully",
				timer: 4000, 
			 	type: 'success',  
			 	showConfirmButton: false 
				});
			setTimeout("location.href = 'edit-commodity.php'",2000);
		</script>
		<?php
		}

	}
}

function update_com(){
	global $db;

	if(isset($_POST['btn-update'])){
		$id = $db->real_escape_string($_POST['id']);
		$com = $db->real_escape_string($_POST['com']);
		$query = $db->query("UPDATE commodity SET type = '$com' WHERE id = '$id'");
										?>
		<script type="text/javascript">
			swal({   
				title: "SUCCESS",  
			 	text: "Updated Successfully",
				timer: 4000, 
			 	type: 'success',  
			 	showConfirmButton: false 
				});
			setTimeout("location.href = 'edit-commodity.php'",2000);
		</script>
		<?php

	}
}

function show_cuttype(){

	global $db;

	$query = $db->query("SELECT * FROM cut_type");
	$check = $query->num_rows;

	if($check <1 ){
	echo'<div class="alert alert-danger" style="font-size:14px;font-weight:bolder;text-align:left"> No results found.</div>';
	}else{
		while($row = $query->fetch_object()){
			$id = $row->id;
			$cut = $row->cut;

			echo'
			<td>'.$cut.'</td>
			<td>
			<form method="POST">
			<input type="hidden" name="id" value="'.$id.'">
			<button type="submit" name="btn-edit" class="btn btn-primary"><i class="fa fa-pencil"></i> Edit </button>
			</td>
			</form>
			</tr>';
		}
	}
		if(isset($_POST['btn-edit'])){
		$cut_id = $db->real_escape_string($_POST['id']);
		$_SESSION['cut_id'] = $cut_id;
		echo "<script>window.location='modify-cut.php'</script>";	
	}
}

function add_cut(){
	global $db;

	if(isset($_POST['btn-add'])){
		$cut = $db->real_escape_string($_POST['cut']);
		$res = $db->query("SELECT * FROM cut_type WHERE cut='$cut'");
		$check = $res->num_rows;

		if($check > 0){
		?>
      <script type="text/javascript">
    swal({   
       title: "Error!",  
       text: "Meat Cut Type already Exist.",
       timer: 4000, 
       type: 'error',  
       showConfirmButton: false 
      });
    </script>
    <?php
		}else{
		
		$query = $db->query("INSERT INTO cut_type (cut) VALUES ('$cut')");
										?>
		<script type="text/javascript">
			swal({   
				title: "SUCCESS",  
			 	text: "Added Successfully",
				timer: 4000, 
			 	type: 'success',  
			 	showConfirmButton: false 
				});
			setTimeout("location.href = 'edit-meatcut.php'",2000);
		</script>
		<?php
	}
	}
}

function update_cut(){

	global $db;

	if(isset($_POST['btn-update'])){
		$id = $db->real_escape_string($_POST['id']);
		$cut = $db->real_escape_string($_POST['cut']);
		$query = $db->query("UPDATE cut_type SET cut = '$cut' WHERE id = '$id'");
												?>
		<script type="text/javascript">
			swal({   
				title: "SUCCESS",  
			 	text: "Updated Successfully",
				timer: 4000, 
			 	type: 'success',  
			 	showConfirmButton: false 
				});
			setTimeout("location.href = 'edit-meatcut.php'",2000);
		</script>
		<?php


	}
}

function show_hscode(){

	global $db;

	$query = $db->query("SELECT * FROM hs_code");
	$check = $query->num_rows;

	if($check < 1){
	echo'<div class="alert alert-danger" style="font-size:14px;font-weight:bolder;text-align:left"> No results found.</div>';
	}else{
		while($row = $query->fetch_object()){
			$id = $row->id;
			$code = $row->code;

			echo'
			<td>'.$code.'</td>
			<td>
			<form method="POST">
			<input type="hidden" name="id" value="'.$id.'">
			<button type="submit" name="btn-edit" class="btn btn-primary"><i class="fa fa-pencil"></i> Edit </button>
			</td>
			</form>
			</tr>';
		}
	}
		if(isset($_POST['btn-edit'])){
		$code_id = $db->real_escape_string($_POST['id']);
		$_SESSION['code_id'] = $code_id;
		echo "<script>window.location='modify-code.php'</script>";	
	}
}

function add_hscode(){

	global $db;

	if(isset($_POST['btn-add'])){
		$code = $db->real_escape_string($_POST['code']);

		$res = $db->query("SELECT * FROM hs_code WHERE code='$code'");
		$check = $res->num_rows;

		if($check > 0){
		?>
      <script type="text/javascript">
    swal({   
       title: "Error!",  
       text: "HS Code already Exist.",
       timer: 4000, 
       type: 'error',  
       showConfirmButton: false 
      });
    </script>
    <?php
		}else{
		

		$query = $db->query("INSERT INTO hs_code (code) VALUES ('$code')");
												?>
		<script type="text/javascript">
			swal({   
				title: "SUCCESS",  
			 	text: "Added Successfully",
				timer: 4000, 
			 	type: 'success',  
			 	showConfirmButton: false 
				});
			setTimeout("location.href = 'edit-hscode.php'",2000);
		</script>
		<?php
	}

	}
}

function update_code(){
	global $db;

	if(isset($_POST['btn-update'])){
		$id = $db->real_escape_string($_POST['id']);
		$code = $db->real_escape_string($_POST['code']);
		$query = $db->query("UPDATE hs_code SET code = '$code' WHERE id = '$id'");
														?>
		<script type="text/javascript">
			swal({   
				title: "SUCCESS",  
			 	text: "Updated Successfully",
				timer: 4000, 
			 	type: 'success',  
			 	showConfirmButton: false 
				});
			setTimeout("location.href = 'edit-hscode.php'",2000);
		</script>
		<?php
	}
}

function show_country(){

	global $db;

	$query = $db->query("SELECT * FROM country");
	$check = $query->num_rows;

	if($check < 1){
			echo'<div class="alert alert-danger" style="font-size:14px;font-weight:bolder;text-align:left"> No results found.</div>';
		}else{
			while($row = $query->fetch_object()){
				$id = $row->id;
				$country = $row->country;

				echo'<td>'.$country.'</td>
					 <td>
					 <form method="POST">
					 <input type="hidden" name="id" value="'.$id.'">
					 <button type="submit" name="btn-edit" class="btn btn-primary"><i class="fa fa-pencil"></i> Edit </button>
					 </td>
					 </form>
					 </tr>';
			}
		}
		if(isset($_POST['btn-edit'])){
		$country_id = $db->real_escape_string($_POST['id']);
		$_SESSION['country_id'] = $country_id;
		echo "<script>window.location='modify-country.php'</script>";	
	}
}

function add_country(){
	global $db;
	
	if(isset($_POST['btn-add'])){
		$country = $db->real_escape_string($_POST['country']);
		$res = $db->query("SELECT * FROM country WHERE country='$country'");
		$check = $res->num_rows;

		if($check > 0){
		?>
      <script type="text/javascript">
    swal({   
       title: "Error!",  
       text: "Country already Exist.",
       timer: 4000, 
       type: 'error',  
       showConfirmButton: false 
      });
    </script>
    <?php
		}else{
		
		$query = $db->query("INSERT INTO country(country) VALUES ('$country')");
														?>
		<script type="text/javascript">
			swal({   
				title: "SUCCESS",  
			 	text: "Added Successfully",
				timer: 4000, 
			 	type: 'success',  
			 	showConfirmButton: false 
				});
			setTimeout("location.href = 'edit-country.php'",2000);
		</script>
		<?php
	}

	}
}

function update_country(){

	global $db;

	if(isset($_POST['btn-update'])){
		$id = $db->real_escape_string($_POST['id']);
		$country = $db->real_escape_string($_POST['country']);
		$query = $db->query("UPDATE country SET country = '$country' WHERE id = '$id'");
																?>
		<script type="text/javascript">
			swal({   
				title: "SUCCESS",  
			 	text: "Updated Successfully",
				timer: 4000, 
			 	type: 'success',  
			 	showConfirmButton: false 
				});
			setTimeout("location.href = 'edit-country.php'",2000);
		</script>
		<?php
	
	}
}

function add_faq(){
	global $db;

	if(isset($_POST['btn-addfaq'])){
		$que = $db->real_escape_string($_POST['que']);
		$ans = $db->real_escape_string($_POST['ans']);
		$res = $db->query("SELECT * FROM faq WHERE question='$que' AND answer='$ans'");
		$check = $res->num_rows;

				if($check > 0){
		?>
      <script type="text/javascript">
    swal({   
       title: "Error!",  
       text: "Country already Exist.",
       timer: 4000, 
       type: 'error',  
       showConfirmButton: false 
      });
    </script>
    <?php
		}else{
			$query = $db->query("INSERT INTO faq(question,answer) VALUES ('$que','$ans')");
																	?>
		<script type="text/javascript">
			swal({   
				title: "SUCCESS",  
			 	text: "Added Successfully",
				timer: 4000, 
			 	type: 'success',  
			 	showConfirmButton: false 
				});
			setTimeout("location.href = 'faqs.php'",2000);
		</script>
		<?php
		}
	}

	if(isset($_POST['btn-modify'])){
		$id = $db->real_escape_string($_POST['id']);
		$que = $db->real_escape_string($_POST['que']);
		$ans = $db->real_escape_string($_POST['ans']);

		$query = $db->query("UPDATE faq SET question = '$que', answer = '$ans' WHERE id = '$id'");
				?>
				<script type="text/javascript">
			swal({   
				title: "SUCCESS",  
			 	text: "Updated Successfully",
				timer: 4000, 
			 	type: 'success',  
			 	showConfirmButton: false 
				});
			setTimeout("location.href = 'faqs.php'",2000);
		</script>
		<?php
	}
}

function update_meats(){
	global $db;
	if(isset($_POST['btn-update'])){
		$id = $db->real_escape_string($_POST['id']);
		$kind = $db->real_escape_string($_POST['kind']);
		$cut = $db->real_escape_string($_POST['cut']);
		$name = $db->real_escape_string($_POST['name']);
		$rema = $db->real_escape_string($_POST['rema']);
		$coun = $db->real_escape_string($_POST['coun']);

		$query = $db->query("UPDATE meat_cuts SET kind = '$kind', cut_type='$cut', name_number = '$name', remarks = '$rema', country = '$coun' WHERE id = '$id'");
		?>
				<script type="text/javascript">
			swal({   
				title: "SUCCESS",  
			 	text: "Updated Successfully",
				timer: 4000, 
			 	type: 'success',  
			 	showConfirmButton: false 
				});
			setTimeout("location.href = 'show-meatcut.php'",2000);
		</script>
		<?php
	}
}

function edit_title(){
	global $db;

	if(isset($_POST['btn-update'])){
		$title = $db->real_escape_string($_POST['title']);
		$site = $db->real_escape_string($_POST['sitename']);
		$mini = $db->real_escape_string($_POST['mini']);
		$footer = $db->real_escape_string($_POST['footer']);

		$query = $db->query("UPDATE title_footer SET title = '$title', name = '$site', mini_name = '$mini', footer = '$footer'");
								?>
		<script type="text/javascript">
			swal({   
				title: "SUCCESS",  
			 	text: "Updated Successfully",
				timer: 4000, 
			 	type: 'success',  
			 	showConfirmButton: false 
				});
			setTimeout("location.href = 'edit-title.php'",2000);
		</script>
		<?php

	}
}

function admin_logout(){
	session_start();
	unset($_SESSION['admin']);
	header('location: ../index.php');
}

function logout(){
	session_start();
	unset($_SESSION['user']);
	header('location: index.php');
}