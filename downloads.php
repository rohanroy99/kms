<?php include ('header2.php'); ?>

<html>
	<head>
		<title>Download From Here!</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body>

		

		<!-- Main -->
			<section id="main" class="wrapper">
				<div class="container">

					<header class="major special">
						<h2>Download</h2>
					</header>
                    
                    
                    <form method="post" action="#">
								<div class="row uniform 50%">
									<!--<div class="6u 12u$(xsmall)">
										<input type="text" name="name" id="name" value="" placeholder="Name" />
									</div>
									<div class="6u$ 12u$(xsmall)">
										<input type="email" name="email" id="email" value="" placeholder="Email" />
									</div>-->
									<div class="12u$">
										<div class="select-wrapper">
											<select name="course" id="course">
												<option value="">- Course -</option>
												<option value="BCA">Bachelor of Computer Application (BCA)</option>
												<option value="BBA">Bachelor of Business Administrator (BBA)</option>
												<option value="BTECH">Bachelor of Technology (B-Tech)</option>
												<option value="BSC">Bachelor of Sience (BSC)</option>
											</select>
                                        </div>
                                       
                                       
									</div>
									
                                                                     				
                                      <div class="12u$">
										 <div class="select-wrapper">
											<select name="semester" id="semester">
												<option value="">- Select Semester -</option>
												<option value="1">1st Semester</option>
												<option value="2">2st Semester</option>
												<option value="3">3st Semester</option>
												<option value="4">4st Semester</option>
                                                <option value="5">5st Semester</option>
												<option value="6">6st Semester</option>
												<option value="7">7st Semester</option>
												<option value="8">8st Semester</option>
											</select>	
                                        </div>
									</div>               
									 
                                    
                                    <div class="container">
                                         <!--<div class="btn btn-primary btn-sm float-left">
   											   <span>Choose file</span>
      												<input type="file">
    									</div>-->
                                       <!-- <div class="form-group">
                                          <input type="file" class="button special small" id="exampleFormControlFile1">
                                        </div>
  		  -->
    									  <ul class="actions">
                                         <!-- <li><input class="file-path validate" type="text" placeholder="Upload your file"></li>-->

                                          <!--<a href="#" class="btn btn-info btn-lg">
     										    <span class="glyphicon glyphicon-open-file"></span> Upload File 
        								   </a>-->
                                           <!--<button><a class=href="#" class="button small fit">
     										    <span class="fa fa-upload"></span> Upload File 
        								   </a></button>
                                           </input>
  											<input type='file' id="getFile" style="display:none"></li>
                                           
                                           
                                           </li>-->
                                          <li><button type="submit" name="b"><a class=href="#" class="button small fit">
     										    <span class="fa fa-search"></span> Search </a></button>
</li>
										</ul>
      								</div>	
								</div>
                                
							</form>
				</div>
                </section>
	<!--forms-->
    <?php
if(isset($_POST['b'])) {
	$course = $_POST['course'];
	$sem = $_POST['semester'];
    $qryStr = "SELECT username,bookname,course,semester,description,book FROM books WHERE course='$course' AND semester = '$sem' AND status='1'";
	$exec = mysqli_query($conn,$qryStr) or die(mysqli_error($conn));
// mysqli_num_rows() is used to find the number of rows found in the table
	if(mysqli_num_rows($exec)==0){
		echo "No records found";
	} else {

		?>
        <section >
        <div class="container" >
        <table class="alt" >
			<thead>
				<tr align="center">
					<!--<th>Book Id</th>-->
					<th>User Name</th>
					<th>Book Name</th>
                    <th>Course</th>
                    <th>Semester</th>
                    <th>Description</th>
                    <th>Download</th>
                   <!-- <th>Status</th>-->
				</tr>
			</thead>
			<tbody>
				<?php while($row=mysqli_fetch_array($exec)){?>
				<tr>
      <?php /*?><td><?php echo $row['book_id']?></td><?php */?>
        			<td><?php echo $row['username']?></td>
					<td><?php echo $row['bookname']?></td>
                    <td><?php echo $row['course']?></td>
					<td><?php echo $row['semester']?></td>
					<td><?php echo $row['description']?></td>
                    <td><a href="<?php echo $row['book']?>"><button type="submit" name="b" class="button alt small"><span class="fa fa-download"></span> Download </button></a></td>
                   
				</tr>
			<?php } ?>
			</tbody>
		</table>
		</div>
        </section>
		<?php
	} 
}
	?>

		<!-- Scripts -->
         <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

		 <?php include ('footer.php'); ?>

	</body>
</html>
