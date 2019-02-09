<?php 
	include('header2.php');
if($_SERVER['REQUEST_METHOD']==="POST"){

	$id = $_SESSION['phpbatch1']['id'];
	$FIRE = mysqli_query($conn,"SELECT * FROM login WHERE id = '$id'") or die(mysqli_error($conn));
	if(mysqli_num_rows($FIRE)==0){
		die("Somthing went wrong :/");
	}
	$row = mysqli_fetch_array($FIRE);
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Password Change</title>
</head>
<body>
<div class="container">
<header class="major special">
						<h3>Change Password</h3>
					</header>
                    </div>
<form method="post">
	<input type="hidden" name="id" value="<?php echo $row['id']?>">
	<table>
		<tr>
			<th>Old Password</th>
			<td><input type="password" name="opass"></td>
		</tr>
		<tr>
			<th>New Password</th>
			<td><input type="password" name="npass"></td>
		</tr>
		<tr>
			<th>Confirm New Password</th>
			<td><input type="password" name="cnpass"></td>
		</tr>
		<tr>
			<td>
				<input type="submit" name="kkk" value="Save Changes">
			</td>
		</tr>
	</table>
</form>
<?php
	if(isset($_POST['kkk'])) {

		$OLD = $_POST['opass'];
		$NEW = $_POST['npass'];
		$NEWCONFIRM = $_POST['cnpass'];
		$OLD = md5($OLD);
		$id = $_SESSION['phpbatch1']['id'];
		# check for the old password
		$fire = mysqli_query($conn,"SELECT password,id FROM login WHERE id = '$id' AND password = '$OLD'") or die(mysqli_error($conn));

		# check if old password valid or not
		if(mysqli_num_rows($fire)==1){
			# valid user
			# now check if new and confirm matches or not
			if($NEW==$NEWCONFIRM) {
				$NEWCONFIRM= md5($NEWCONFIRM);
				# update the new password
				$update_fire = mysqli_query($conn,"UPDATE login SET password = '$NEWCONFIRM' WHERE id = '$id'") or die(mysqli_error($conn));

				if($update_fire) {
					?><script type="text/javascript">
				alert('Password has been changed successfully!!');
				window.location.href = "myaccount.php";
			</script><?php
				}
			} else {
				?><script type="text/javascript">
				alert('Password Mismatch ! Please reverify your new and confirm password!!');
				window.location.href = "updatepassword.php?id=$id";
			</script><?php
			}

		} else {
			?><script type="text/javascript">
				alert('Your old password seems to be invalid');
				window.location.href = "updatepassword.php?id=$id";
			</script><?php
		}



	}

include('footer.php');

?>
</body>
</html>