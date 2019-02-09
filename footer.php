
<link rel="stylesheet" type="text/css" href="modal.css">
<style  type="text/css">
/*.modal-open .modal .modal-title .tabs .tab.active, .modal-open .modal .modal-title .tabs .tab:hover {
    color: #f32853;
}*/
	
    .modal-dialog{
	display: table;
	position: relative;
	top: 20%;
	/*margin-left: 30%;
	margin-top: 20%;*/
	/*left: 32px;*/
	/*width: 437px;*/
	}
    .body {display:table-cell; vertical-align:middle; text-align:center;}

</style>
			 <footer id="footer" >
				<div class="container">
					<ul class="icons">
						<li><a href="#" class="icon fa-facebook"></a></li>
						<li><a href="#" class="icon fa-twitter"></a></li>
                        <li><a href="#" class="icon fa-instagram"></a></li>
						<li><a href="contactus.php" class="icon fa-phone"></a></li>
					</ul>
					<ul class="copyright">
						<li>Designer: <a href="http://templated.co">Arijit, Rohan</a></li>
                        <li>&copy; Musketeers</li>
						<li>Developer: <a href="http://unsplash.com">Arijit, Rohan</a></li>
					</ul>
				</div>
			</footer>

			
<div class="modal fade" id="myModal" role="dialog"  >
    <div class="modal-dialog">
    
      <!-- Modal content-->
     <div class="modal-content">
        <div class="modal-header"  >
          <!--<button type="button" class="close" data-dismiss="modal">&times;</button>-->
          <!--<h4 class="modal-title">Login</h4>-->
           <h4 class="modal-title" align="center" style="cursor:pointer"><a href="#" id="login">login</a>   	|   <a href="#" id="register">register</a></h4>
        <!--<h4 class="modal-title"><a href="#" id="login">login</a></h4>-->
          
        </div>
        
        <div class="modal-body">
       
         
        <form method="post" id="signin" enctype="multipart/form-data" action="process.php">
  <table  >
    <tr style=" background-color: #fff; border: 0; ">
    <td><input type="email" name="email" placeholder="Enter Your Email" /></td>
    </tr>
    <tr style=" background-color: #fff;  border: 0; ">
      <td><input type="password" name="password" placeholder="Enter Your Password" /></td>
      </tr>
    <tr style=" background-color: #fff;  border: 0; ">
      <td><input type="submit" name="sn" value="Login" class="button special small" ></td>
    </tr>
  </table>
</form>
      
      <form method="post"  id="signup" style=" display:none"  >
  <table>
    <tr style=" background-color: #fff;  border: 0;">
      <td><input type="text" name="name" placeholder="Enter Your Name"></td>
    </tr>
    <tr style=" background-color: #fff;  border: 0; ">
      <td><input type="email" name="email" placeholder="Enter Your Email"></td>
    </tr>
    <tr style=" background-color: #fff;  border: 0;">
      <td><input type="password" name="password" placeholder="Enter Your Password"></td>
    </tr>
    <tr style=" background-color: #fff;  border: 0;">
      <td><a href="home.php"><input type="submit" name="su" value="Sign Up" class="button special small"></a></td>
    </tr>
  </table>
</form>
<?php
	
 		if(isset($_POST['su'])){
		$name = $_POST['name'];
		$email = $_POST['email'];
		$password = $_POST['password'];
		$password = md5($password);
		# verify
		$verify = mysqli_query($conn,"SELECT * from login WHERE email = '$email'");
		if(mysqli_num_rows($verify)==1){
			?><script>
			alert('Email already exists');
			window.location.href = 'index.php?tryagain';
			</script><?php
			exit;
		}
		//$dp=$destination_path;	
		$prepare_string = "INSERT INTO login (username,email,password) VALUES ('$name','$email','$password')";
		// execute the above query
		$execute = mysqli_query($conn,$prepare_string) or die(mysqli_error($conn));
		// if query executes properly then it will return bool true.
		if($execute){
			?><script type="text/javascript">
				alert('Your registration is successful');
	window.location.href = 'index.php?success';
			</script><?php
		}

	}

?>

      </div>
        <div class="modal-footer">
          <button type="button"  class="button small" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  				
 <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">-->

  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  	<script>
	$("#register").click(function(){
		
    $("#signin").hide();
    $("#signup").show();
    });
    
	$("#login").click(function(){
		
    $("#signin").show();
    $("#signup").hide();
    });</script>
   