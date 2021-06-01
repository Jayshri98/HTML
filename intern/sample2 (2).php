<!DOCTYPE html>
<html>
<head>
	<title>Reg</title>

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
			top: 50%;
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
			margin-left: -200px;
			margin-right: -180px;
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
  
		if ($_SERVER["REQUEST_METHOD"] == "POST") 
		{   

			//-----Name validation--------
			if (empty($_POST["name"])) 
			{  
        		$nameErr = "Name is required";  
    		} 
    		else 
    		{  
       			$name = input_data($_POST["name"]);  
               		if (!preg_match("/^[a-zA-Z ]*$/",$name)) 
            		{  
               			 $nameErr = "Only alphabets and white space are allowed";  
            		}  
    		}  

    		//----email validation---
    		 if (empty($_POST["email"])) 
    		{  
            	$emailErr = "Email is required";  
    		} 
    		else 
    		{  
            	$email = input_data($_POST["email"]);  
            
            	if (!filter_var($email, FILTER_VALIDATE_EMAIL)) 
            	{  
                	$emailErr = "Invalid email format";  
            	}  
     		} 

     		//-----phone number validation-------
     		if (empty($_POST["mobileno"])) 
     		{
     		 	$mobilenoErr = "Phone number is Required";
     		}
     		else
     		{
     			 $mobileno = input_data($_POST["mobileno"]); 

     			  if (!preg_match ("/^[0-9]*$/", $mobileno) ) 
     			  {  
            			$mobilenoErr = "Only numeric value is allowed.";  
            	  }  
     		}

     		//------website------

     		if (empty($_POST["website"])) 
     		{  
        		$website = "";  
    		} 
	    		else 
	    		{  
	            	$website = input_data($_POST["website"]);  
	            
	            if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)) 
	            {  
	                $websiteErr = "Invalid URL";  
	            }      
    		} 

    		//-----gender validation-----

    		if (empty($_POST["gender"])) 
    		{  
            	$genderErr = "<br>Gender is required";  
    		} 
    		else 
    		{  
            	$gender = input_data($_POST["gender"]);  
    		}   
    	}
    	function input_data($data) 
    	{  
		  $data = trim($data);  
		  $data = stripslashes($data);  
		  $data = htmlspecialchars($data);  
		  return $data;  
		}  
	?>
		<div class="banner">
			<div class="login-box">
				<h1>Registration</h1>
				<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" target="_blank" autocomplete="off">
					<div class="user-details">
						<div class="input_field">
							<input type="textbox" name="name" placeholder="Name" value="" class="label">
							<span class="error"> <?php echo $nameErr; ?> </span> 
						</div>

						<div class="input_field">
							<input type="text" name="email" placeholder="E-Mail" value="" class="label">
							<span class="error"> <?php echo $emailErr; ?> </span>
						</div>

						<div class="input_field">
							<input type="text" name="mobileno" placeholder="Phone Number" value="" class="label">
							<span class="error"> <?php echo $mobilenoErr; ?> </span>
						</div>

						<div class="input_field">
							<input type="textarea" name="website" placeholder="Website" value="" class="label">
							<span class="error"> <?php echo $websiteErr; ?> </span>
						</div>

						<label>Gender: </label> <br>
					    <input type="radio" name="gender" value="male">Male<br>
					    <input type="radio" name="gender" value="female">Female   
					    <span class="error"> <?php echo $genderErr; ?> </span>  
					    <br><br>  

						<button id="trans" value="required" class="button" name="submit" onclick="return validateForm()"><span class="bbb"></span>SUBMIT</button></a><br>

				</form>
			</div>
		</div>

		<?php  
			    if(isset($_POST['submit'])) 
			    {  
					    if($nameErr == "" && $emailErr == "" && $mobilenoErr == "" && $genderErr == "" && $websiteErr == "") 
					    {  
					        echo "<h3 color = #FF0001> <b>You have sucessfully registered.</b> </h3>";  
					        echo "<h2>Your Input:</h2>";  
					        echo "Name: " .$name; 
					        echo "<br>";
					        echo "Email: " .$email; 
					        echo "<br>";
					        echo "Phone Number:" .$mobileno;
					        echo "<br>";	
					    }
				    else
				    {
				    	echo "<h3><b>Please check the fields that you have entered";
				    }
			}
			?>
	</body>
	</html>	

	

		
