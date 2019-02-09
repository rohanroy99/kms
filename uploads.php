<?php include ('header2.php'); ?>
<!--<link rel="stylesheet" type="text/css" >
<style>
	/*#header.alt nav a:active, #header.alt nav a:hover {
						color: #f32853;
					}*/
					#navpanel {
						color: #f32853;
					}
</style>-->
<html>
	<head>
		<title>Upload your file</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body>

		

		<!-- Main -->
			<section id="main" class="wrapper">
				<div class="container">

					<header class="major special">
						<h2>Upload</h2>
					</header>
                    
                    
                    <form method="post" enctype="multipart/form-data">
								<div class="row uniform 50%">
									<div class="6u 12u$(xsmall)">
										<input type="text" name="bookname" id="bookname" placeholder="Book Name" />
									</div>
									<div class="6u$ 12u$(xsmall)">
										<input type="text" name="desc" id="desc" value="" placeholder="About this Book" />
									</div>
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
                                        <div class="form-group">
                                          <input type="file" class="button special small" name="file" id="exampleFormControlFile1"/>
                                          <p style="color:red">* Upload only PDF Files</p>
                                        </div>
  		  
    									  <ul class="actions">
                                         <!-- <li><input class="file-path validate" type="text" placeholder="Upload your file"></li>-->

                                          <!--<a href="#" class="btn btn-info btn-lg">
     										    <span class="glyphicon glyphicon-open-file"></span> Upload File 
        								   </a>-->
                                           
                                           <button type="submit" name="ok"><a class=href="#" class="button small fit">
     										    <span class="fa fa-upload"></span> Upload File 
        								   </a></button>
                                           
  											
                                           
                                           
                                         
                                          <button><a class=href="#" class="button small fit">
     										    <span class="fa fa-trash"> Reset </span>
        								   </a></button>
											</ul>
										
                                       	</div>	
								
                                </div>
							</form>

	</div>
    </section>
<?php 
if(isset($_POST['ok'])){

	if(isset($_FILES['file'])){
		//var_dump($_FILES['file']);
		$destination_folder= "book";
		$file_name = $_FILES['file']['name'];
		$file_size = $_FILES['file']['size'];
		$file_type = $_FILES['file']['type'];

		if($file_size>9000000){
			die("File size exceeding");
		}
		if($file_type=="application/pdf") {
				if(!file_exists($destination_folder)) {
			mkdir($destination_folder);
		}
		$dp=$destination_path = $destination_folder.'/'.$file_name;

		$tmp_name = $_FILES['file']['tmp_name'];

		# lets upload the file
		$upload = move_uploaded_file($tmp_name, $destination_path) or die($_FILES['file']['error']);

		//var_dump($upload);
		
		} else {
			?>
            <script>
				alert('Invalid File type');
				window.location.href = 'uploads.php?error';
			</script>
			<?php
			exit;
		}
	}
	$bookname = $_POST['bookname'];
	$desc = $_POST['desc'];
	$course = $_POST['course'];
	$sem = $_POST['semester'];
	$username=$_SESSION['phpbatch1']['username'];
	//$dp=$destination_path;	
		$prepare_string = "INSERT INTO books VALUES ('0','$username','$bookname','$course','$sem','$desc','$dp','0')";
		$execute = mysqli_query($conn,$prepare_string) or die(mysqli_error($conn));
		// if query executes properly then it will return bool true.
		if($execute){
			?><script type="text/javascript">
				alert('Data saved successfully');
				</script><?php
		}

	

}?>
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
