<?php include('header2.php') ?>

<html>
	<head>
		<title>Your Account</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body>
<div class="container">
<header class="major special">
						<h3>My Account</h3>
					</header>
                    </div>
	

			<a href="#menu" class="navPanelToggle"><span class="fa fa-bars"></span></a>

		<!-- Main --><?php
			$id= $_SESSION['phpbatch1']['id'];
	
	$qryStr = "SELECT * FROM login WHERE id='$id' ";
	$exec = mysqli_query($conn,$qryStr) or die(mysqli_error($conn));
// mysqli_num_rows() is used to find the number of rows found in the table
	if(mysqli_num_rows($exec)==0){
		echo "No records found";
	} else {

		?><table border="1" cellpadding="5">
			<thead>
				<tr>
					<th>Name</th>
					<th>Email</th>
					
					
					<th>Update</th>
					<th>Update Password</th>
				</tr>
			</thead>
			<tbody>
				<?php while($row=mysqli_fetch_array($exec)){?>
				<tr>
					<td><?php echo $row['username']?></td>
					<td><?php echo $row['email']?></td>
					
					<input type="hidden" name="id" value="<?php echo $row['id']?>">
					<td><a href="update.php?id=<?php echo $row['id']?>" onClick="return confirm('Are you sure you wish to update Mr/Ms <?php echo $row['username']?>');"><button type="submit" name="b" class="button alt small"><span class="fa fa-edit"></span> Update Name </button></a></td>
					<td><a href="updatepassword.php?id=<?php echo $row['id']?>" onClick="return confirm('Are you sure you wish to update password Mr/Ms <?php echo $row['username']?>');"><button type="submit" name="b" class="button alt small"><span class="fa fa-edit"></span> Update Password </button></a></td>
					
				</tr>
				<?php }  ?>
			</tbody>
		</table><?php
	}

			
			
?>
		    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>
             <?php include ('footer.php'); ?>

	</body>
</html>