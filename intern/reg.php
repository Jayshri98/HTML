<!DOCTYPE html>
<html>
<head>
	<title>Registration</title>

	

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