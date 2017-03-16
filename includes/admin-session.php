<?php
session_start();
include 'config.php';
if(!isset($_SESSION['admin'])){
	header('location: ../index.php');
}
$res 	= $db->query("SELECT * FROM accounts_tbl WHERE id=".$_SESSION['admin']);
$row 	= $res->fetch_object();
$id 	= $row->id;
$last 	= $row->lastname;
$first 	= $row->firstname;
$middle = $row->middlename;
$role 	= $row->role;

switch($role){
	case 0:
	$firstname = '<label style="padding:10px;font-weight:bolder" class="label label-danger">Hello, Admin '.$first.' <i class="fa fa-caret-down"></i> </label>';
	break;

	case 1:
	$firstname = '<label style="padding:10px;font-weight:bolder" class="label label-danger">Hello, '.$first.' <i class="fa fa-caret-down"></i> </label>';
	break;

	default:
	break;
}


$opt 	  = $db->query("SELECT * FROM title_footer");
$row 	  = $opt->fetch_object();
$id 	  = $row->id;
$title    = $row->title;
$sitename = $row->name;
$mini     = $row->mini_name;
$footer   = $row->footer;
