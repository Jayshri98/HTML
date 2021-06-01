<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style>
		.error
		{
			color: red;
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
			echo "Your name is: ".$name;
			echo "<br>";
		}  
			if (empty($_POST["name"])) 
			{  
	        	$nameErr = "Name is required";  
	    	}

    	if (isset($_POST['submit'])) 
    	{
    	 	$mail = $_POST["email"];
    	 	echo "Your Mail is: ".$mail;
    	 	echo "<br>";
    	}
    		if (empty($POST["email"])) 
    		{
    			$mailErr = "Email is required";
    		 	
    		}

    	if (isset($_POST['submit'])) 
    	{
    	 	$mobile = $_POST["mobileno"];
    	 	echo "Your Mobile number is: ".$mobile;
    	 	echo "<br>";
    	}
    		if (empty($POST["mobileno"])) 
    		{
    			$mobileErr = "Mobile Number is Required";
    		 	
    		}

    	if (isset($_POST['submit'])) 
    	{
    	 	$site = $_POST["website"];
    	 	echo "Your Website is: ".$site;
    	 	echo "<br>";
    	}
    		if (empty($POST["website"])) 
    		{
    			$siteErr = "Wesite is required";
    		 	
    		}

    	if (isset($_POST['submit'])) 
    	{
    	 	$gen = $_POST["gender"];
    	 	echo "Your gender is: ".$gen;
    	 	echo "<br>";
    	}
    		if (empty($_POST["gender"])) 
    		{  
            	$genderErr = "<br>Gender is required";  
    		}  	
		

				// else
				// 	{
				// 		echo "Please enter the details";


			?>

		<div class="banner">
			<div class="login-box">
				<h1>Registration</h1>
				<form action="sample.php" method="post" autocomplete="off">
					<div class="user-details">
						<div class="input_field">
							<input type="textbox" name="name" placeholder="Name" value="" class="label">
							<span class="error"> <?php echo $nameErr; ?></span>
						</div>

						<div class="input_field">
							<input type="text" name="email" placeholder="E-Mail" value="" class="label">
							<span class="error"> <?php echo $mailErr; ?></span>
						</div>

						<div class="input_field">
							<input type="text" name="mobileno" placeholder="Phone Number" value="" class="label">
							<span class="error"> <?php echo $mobileErr; ?></span>
						</div>

						<div class="input_field">
							<input type="textarea" name="website" placeholder="Website" value="" class="label">
							<span class="error"> <?php echo $siteErr; ?></span>
						</div>

						<label>Gender: </label> <br><br>
					    <input type="radio" name="gender" value="male">Male<br>
					    <input type="radio" name="gender" value="female">Female   
					    <span class="error"> <?php echo $genderErr; ?></span></span>
					    <br><br>  

						<button id="trans" value="required" class="button" name="submit" onclick="return validateForm()"><span class="bbb"></span>SUBMIT</button></a><br>

				</form>
			</div>
		</div>

		

</body>
</html>