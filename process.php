<?php
include ('config.php');
	if(isset($_POST['sn'])){
		if(empty($_POST['email']) || empty($_POST['password'])){
			die("All fields are required");
		}
		$e = $_POST['email'];
		$p = md5($_POST['password']);



		# validate the user
		$fire = mysqli_query($conn,"SELECT * FROM login WHERE email = '$e' AND password = '$p'") or die(mysqli_error($conn));


		# check if any rows found
		if(mysqli_num_rows($fire)==1){
			$row = mysqli_fetch_array($fire);
			$_SESSION['phpbatch1'] = $row;
			header('location:index.php?success');
			exit;			
		} else {
			echo "<p style='color:red'>Invalid user</p>";
		}
	}




?>