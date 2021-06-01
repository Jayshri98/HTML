<!DOCTYPE html>
<html>
<head>
	<title>Registarion</title>
	
	<style>
		.banner
  		{	
  			width: 100%;
  			height: 120vh;
  			background-image: linear-gradient(rgba(0,0,0,0.75),rgba(0,0,0,0.75)),url(photo-1524010246915-297e8bb735e6.jpg);
  			background-size: cover;
  			background-position: center;
  			color: white;
  		}
  		.login-box
		{
			width: 500px;
			position: absolute;
			top: 60%;
			left: 50%;
			transform: translate(-50%,-50%);
			color: white;
			/*text-align: center;*/
			z-index: 999;
			padding: 60px 32px;
			background: rgba(255,255,255,0.04);
			box-shadow: -1px 4px 28px 0px rgba(0,0,0,0.75);
			font-family: Georgia; 

		}
		h1
		{
			float: left;
			text-align: center;
			font-size: 40px;
			border-bottom: 6px solid white;
			margin-bottom: 50px;
			padding: 13px 0;
		}
		.input_field
		{
			width: 100%;
			overflow: hidden;
			font-size: 20px;
			padding: 8px 0;
			margin: 8px 0;
			border-bottom: 1px solid white;
		}
		input
		{
			border: none;
			outline: none;
			background: none;
			color: white;
			font-size: 18px;
			width: 80%;
			float: left;
			margin: 0 10px;
		}
		.form
		{
			width: 100%
		}
		.input_field
		{
			margin-bottom: 15px;
			display: flex;
		}
		.login-box .form .input_field .label
		
		{
			width: 200px;
			padding: 8px;
			transition: all 0.3s ease;
		}
		.login-box .form .input_field textarea
		{
			resize: none;
			height: 125px;
		}
		.btn
			{
				font-family: Arial, Helvetica, sans-serif;
			  	font-size: 16px;
			  	margin: 25px;	
			  	cursor: pointer;
			}
			#button
			{
				border-radius: 25px;
				color: white;
				padding: 10px;
			}
		button
		{
			width: 200px;
			padding: 15px 0;
			text-align: center;
			margin: 20px 10px;
			border-radius: 25px;
			font-weight: bold;
			border: 2px solid #009688;
			background: transparent;;
			color: #fff;
			cursor: pointer;
			position: relative;
			overflow: hidden;
			margin-left: 120px;
		}
		button:hover span
		{
			width: 100%;
		}
		button:hover
		{
			border: none;
		}
		.bbb
		{
			background: #009688;
			height: 100%;
			width: 0;
			border-radius: 25px;
			position: absolute;;
			left: 0;
			bottom: 0;
			z-index: -1;
			transition: 0.5s;
		}
		input[type="radio"]
		{
			float: left;
			text-align: center;
			font-size: 40px;
			margin-left: -150px;
			margin-right: -150px;
		}
		.error
		{
			color: #FF0001; 
		}
	</style>

</head>
<body>


	<?php 

		$nameErr = $emailErr = $mobilenoErr = $genderErr = $websiteErr = "";  
			$name = $email = $mobileno = $gender = $website = "";

		if (isset($_POST['submit'])) 
		{
			$name = $_POST["name"];
			$mail = $_POST["email"];
			$mob = $_POST["mobileno"];
			$site = $_POST["website"];

			echo "Your name is: ".$name;
			echo "<br>";
			echo "Your email is ".$mail;
			echo "<br>";
			echo "Your Contact number is: ".$mob;
			echo "<br>";
			echo "Your website is: ".$site;
			echo "<br>";

				if (strlen($name) <=10) 
				{
					echo "Name should be less than 10";
				}

    		else 
    		{  
       			$name = isset($_POST["name"]);  
               		if (!preg_match("/^[a-zA-Z ]*$/",$name)) 
            		{  
               			 $nameErr = "Only alphabets and white space are allowed";  
            		}  
    		}
    	} 
			
		else
		{



	?>

	<div class="banner">
		<div class="login-box">
			<h1>Registration</h1>
			<form action="Index.php" method="post" autocomplete="off">
				<div class="user-details">
					<!----------Input group-------->
					<div class="input_field">
						<i class="fas fa-user"></i>
						<input type="text" name="name" placeholder="Enter your name "><br>
						<span class="error"> <?php echo $nameErr; ?> </span>
					</div>

					<div class="input_field">
						<i class="fa fa-envelope" aria-hidden="true"></i>
						<input type="text" type="email" name="email" placeholder="Enter your Mail "><br>
						<span class="error"> <?php echo $emailErr; ?> </span>
					</div>

					<div class="input_field">
						<i class="fa fa-phone" aria-hidden="true"></i>
						<input type="text" name="mobileno" placeholder="Enter your Mobile number "><br>
						<span class="error"> <?php echo $mobilenoErr; ?> </span>
					</div>

					<div class="input_field">
						<i class="fa fa-globe" aria-hidden="true"></i>
						<input type="text" name="website" placeholder="Enter your Website "><br>
						<span class="error"> <?php echo $websiteErr; ?> </span>
					</div>

					<label><strong>Gender</strong></label><br><br>
						<input type="radio" name="gender" value="male">Male<br>
						<input type="radio" name="gender" value="female">Female<br>
					<br><br>

						
					<button id="trans" value="required" class="button" name="submit" onclick="return validateForm()"><span class="bbb"></span>SUBMIT</button></a><br>
					</div>
			</form>
		</div>
	</div>


	<?php
		}
	?>

</body>
</html>