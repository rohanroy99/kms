<?php
include('header2.php');
if($_SERVER['REQUEST_METHOD']==="GET"){

	//. $_SERVER['REMOTE_ADDR'];
	// date('d-m-Y');
	// date('H:i:s');
	// date_default_time_zone_set("Asia/Kolkata");

$id = $_GET['id'];
$name = $_GET['name'];

$qry = mysqli_query($conn,"UPDATE login SET username = '$name' WHERE id = '$id'") or die(mysqli_error($conn));
if($qry) {
	header('location:myaccount.php?done');
	exit;
}


}

include('footer.php');
?>