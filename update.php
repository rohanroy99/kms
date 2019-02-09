<?php

if(isset($_GET['id'])){
include ('header2.php');
$id = $_GET['id'];
$qryEXE = mysqli_query($conn,"SELECT username,id FROM login WHERE id = '$id'");
if(mysqli_num_rows($qryEXE)==1){
	// fetch the data
	$row = mysqli_fetch_array($qryEXE);
} else {
	die("Something went wrong!!");
}


}




?>
<!DOCTYPE html>
<html>
<head>
	<title>Update</title>
</head>
<body>
<div class="container">
<header class="major special">
						<h3>Update Name</h3>
					</header>
</div>
<form action="updateCode.php">
<section >

<div class="container" >
	<table class="alt" style="border:0 ">
	<input type="hidden" name="id" value="<?php echo $row['id']?>">
    <tr>
			<th>Name</th>
			<td><input type="text" name="name" value="<?php echo $row['username']?>"></td>
	</tr>
	<tr  >
    		<td><input type="submit" name="btn" value="Update"></td>
     </tr>       
    </table>
    </div>
    </section>
</form>
<?php include('footer.php'); ?>
</body>
</html>